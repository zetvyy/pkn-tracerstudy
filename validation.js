// Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
  "use strict";

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll(".requires-validation");

  // Loop over them and prevent submission
  Array.from(forms).forEach((form) => {
    form.addEventListener(
      "submit",
      (event) => {
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        }
        // if (form.password.value !== form.confirmPassword.value) {
        //   form.confirmPassword.setCustomValidity("Passwords must match.");
        // } else {
        //   form.confirmPassword.setCustomValidity("");
        // }
        form.classList.add("was-validated");
      },
      false
    );
  });
})();
