(function () {
    "use strict";

    let forms = document.querySelectorAll("form:not(.ajax_off)"),
        load = document.querySelector(".ajax-load");

    forms.forEach(function (e) {
        e.addEventListener("submit", function (event) {
            event.preventDefault();

            let thisForm = this,
                action = thisForm.getAttribute("action");

            if (!action) {
                displayError(thisForm, "The form action property is not set!");
                return;
            }

            load.style.display = "flex";

            let formData = new FormData(thisForm);

            php_email_form_submit(thisForm, action, formData);
        });
    });

    function php_email_form_submit(thisForm, action, formData) {
        fetch(action, {
            method: "POST",
            body: formData,
            headers: { "X-Requested-With": "XMLHttpRequest" },
        })
            .then((response) => response.json())
            .then((data) => {
                load.style.display = "none";
                if (data.status) {
                    ajaxResponse(thisForm, data.status, data.message);
                    thisForm.reset();
                }
            })
            .catch((error) => {
                ajaxResponse(thisForm, "danger", error);
            });
    }

    function ajaxResponse(thisForm, status, message) {
        load.style.display = "none";
        thisForm.querySelector(
            ".ajax-response"
        ).innerHTML = `<div class="alert alert-${status}">${message}</div>`;
        setTimeout(() => {
            thisForm.querySelector(".ajax-response").innerHTML = ``;
        }, 3000);
    }
})();
