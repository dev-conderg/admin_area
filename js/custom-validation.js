 /**
* Função que valida todos os compos do formulario para 
* customização de mensagens - Bootstrap 4.6.1
*/
(function () {
    "use strict";
    window.addEventListener(
        "load",
        function () {
            // Fetch all the forms we want to apply custom Bootstrap     validation styles to
            var forms = document.getElementsByClassName("custom-validation");
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function     (form) {
                form.addEventListener(
                    "submit",
                    function (event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add("was-validated");
                    },
                    false
                );
            });
        },
        false
    );
})();