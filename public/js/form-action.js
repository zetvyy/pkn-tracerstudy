// Mendapatkan referensi ke elemen form
var kampus = document.getElementById("kampus");

// Menangkap peristiwa pengiriman form
form.addEventListener("reset", function (event) {
  event.preventDefault(); // Mencegah pengiriman form secara default
}),
  form.addEventListener("nim", function (event) {
    event.preventDefault(); // Mencegah pengiriman form secara default
  }),
  form.addEventListener("tanggalLahir", function (event) {
    event.preventDefault(); // Mencegah pengiriman form secara default
  }),
  form.addEventListener("programStudi", function (event) {
    event.preventDefault(); // Mencegah pengiriman form secara default
  }),
  form.addEventListener("nik", function (event) {
    event.preventDefault(); // Mencegah pengiriman form secara default

    // Menghapus nilai input setelah form dikirim
    form.reset();
  });
