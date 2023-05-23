window.addEventListener("load", () => {
    let dataPost = document.querySelectorAll("[data-post]"),
        load = document.querySelector(".ajax-load"),
        url = null,
        modalBody = document.querySelector("#data-destroy .modal-body"),
        confirm = document.querySelector(
            "#data-destroy .modal-footer .btn-confirm"
        );

    dataPost.forEach((post) => {
        post.addEventListener("click", () => {
            url = post.getAttribute("data-post");
            modalBody.innerHTML =
                "ATENÇÃO: Tem certeza que deseja o dado e todos os dados relacionados a ele? Essa ação não pode ser feita!";
        });
    });
    confirm.addEventListener("click", () => {
        load.classList.remove("d-none");
        load.classList.add("d-flex");
        axios
            .post(url)
            .then((response) => {
                load.classList.remove("d-flex");
                load.classList.add("d-none");
                if (response.data.redirect) {
                    window.location.href = response.data.redirect;
                }
            })
            .catch((error) => {
                console.error("Erro! Mensagem:", error.message);
            });
    });
});
