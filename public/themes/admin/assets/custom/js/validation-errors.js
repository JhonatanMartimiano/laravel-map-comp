window.addEventListener("load", () => {
    let forms = document.querySelectorAll("form"),
        load = document.querySelector(".ajax-load"),
        currentMessageDiv = false;
    forms.forEach((form) => {
        form.addEventListener("submit", (event) => {
            load.classList.remove("d-none");
            load.classList.add("d-flex");
            event.preventDefault();
            let route = event.target.action;
            let formData = new FormData(form);
            axios
                .post(route, formData)
                .then((response) => {
                    load.classList.remove("d-flex");
                    load.classList.add("d-none");
                    if (response.data.redirect) {
                        window.location.href = response.data.redirect;
                    }

                    // Ajax Response
                    if (response.data.message) {
                        let ajaxResponse = response.data.message,
                            status = response.data.status,
                            ajaxResponseDiv = document.createElement("div");
                        ajaxResponseDiv.classList.add(
                            "alert",
                            `alert-${status}`,
                            "ajax-response"
                        );
                        let ajaxResponseP = document.createElement("p");
                        ajaxResponseP.textContent = ajaxResponse;
                        ajaxResponseP.classList.add("text-white", "mb-0");
                        ajaxResponseDiv.appendChild(ajaxResponseP);

                        if (currentMessageDiv) {
                            form.removeChild(ajaxResponseDiv);
                            currentMessageDiv = false;
                        }
                        currentMessageDiv = true;
                        form.insertBefore(ajaxResponseDiv, form.firstChild);
                        form.reset();
                        setTimeout(() => {
                            form.removeChild(ajaxResponseDiv);
                            currentMessageDiv = false;
                        }, 3000);
                    }

                    // Validation Error
                    if (response.data.errors) {
                        let validationErrors = response.data.errors,
                            status = response.data.status,
                            errorsDiv = document.createElement("div");
                        errorsDiv.classList.add(
                            "alert",
                            `alert-${status}`,
                            "errors"
                        );
                        if (typeof validationErrors === "string") {
                            let errorP = document.createElement("p");
                            errorP.textContent = validationErrors;
                            errorP.classList.add("text-white", "mb-0");
                            errorsDiv.appendChild(errorP);
                        } else {
                            for (let [field, fieldErrors] of Object.entries(
                                validationErrors
                            )) {
                                if (typeof fieldErrors === "string") {
                                    let errorP = document.createElement("p");
                                    errorP.textContent = fieldErrors;
                                    errorP.classList.add("text-white", "mb-0");
                                    errorsDiv.appendChild(errorP);
                                } else {
                                    fieldErrors.forEach((errorMessage) => {
                                        let errorP =
                                            document.createElement("p");
                                        errorP.textContent = errorMessage;
                                        errorP.classList.add(
                                            "text-white",
                                            "mb-0"
                                        );
                                        errorsDiv.appendChild(errorP);
                                    });
                                }
                            }
                        }

                        if (currentMessageDiv) {
                            form.removeChild(errorsDiv);
                            currentMessageDiv = false;
                        }
                        currentMessageDiv = true;
                        form.insertBefore(errorsDiv, form.firstChild);
                        setTimeout(() => {
                            form.removeChild(errorsDiv);
                            currentMessageDiv = false;
                        }, 3000);
                    }
                })
                .catch((error) => {
                    console.error("Erro! Mensagem:", error.message);
                });
        });
    });

    // Flash Response
    let flashResponse = document.querySelector(".flash-response"),
        flashResponseExists = document.body.contains(flashResponse);
    if (flashResponseExists) {
        let message = flashResponse.getAttribute("data-message"),
            status = flashResponse.getAttribute("data-status");
        switch (status) {
            case "success":
                toastr.success(message);
                break;
            case "info":
                toastr.info(message);
                break;
            case "warning":
                toastr.warning(message);
                break;
            case "error":
                toastr.error(message);
                break;
        }
    }
});
