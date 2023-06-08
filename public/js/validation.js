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

// Validation kuseioner
document.addEventListener("DOMContentLoaded", () => {
  const form = document.querySelector(".myForm");
  const modalMessage = document.getElementById("modal_message");
  const modalButton = document.getElementById("btn_modal");
  const hrefButtonAtr = document.getElementById("href_Atr");

  form.addEventListener("submit", (event) => {
    event.preventDefault();

    const nim = document.getElementById("nim").value;
    const tanggalLahir = document.getElementById("tanggalLahir").value;
    const imageIcon = document.getElementById("image_icon");

    if (nim !== "" && tanggalLahir !== "") {
      modalMessage.textContent = "Validasi Data Berhasil!";
      imageIcon.src = "/img/check.png";

      modalButton.disabled = false;
      hrefButtonAtr.href = "/kuesioner";
    } else {
      modalMessage.textContent = "Validasi Data Gagal, coba lagi!";
      imageIcon.src = "/img/cross.png";

      modalButton.disabled = true;
      hrefButtonAtr.href = "";

      form.reset();
    }

    const modal = new bootstrap.Modal(document.getElementById("myModal"));
    modal.show();
  });
});
