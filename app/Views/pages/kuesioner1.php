<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<h1 class="content">Isi Kuesioner</h1>
<div class="container">
    <form class="requires-validation shadow p-3 mb-5 bg-body-tertiary rounded" novalidate>
        <div class="md-6">
            <label for="kampus" class="form-label">Perguruan Tinggi</label>
            <input type="text" class="form-control" id="kampus" />
            <!-- <div class="invalid-feedback">Please provide a valid city.</div> -->
        </div>
        <div class="md-6">
            <label for="nim" class="form-label">NIM</label>
            <input type="text" class="form-control" id="nim" required />
            <div class="invalid-feedback">Harap isi NIM anda!</div>
        </div>
        <div class="md-6">
            <label for="tanggalLahir" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tanggalLahir" required />
            <div class="invalid-feedback">Harap isi tanggal lahir anda!</div>
        </div>
        <div class="md-6">
            <label for="progranStudi" class="form-label">Program Studi</label>
            <input type="text" class="form-control" id="programStudi" />
            <!-- <div class="invalid-feedback">Please provide a valid city.</div> -->
        </div>
        <div class="md-6 mb-3">
            <label for="nik" class="form-label">NIK</label>
            <input type="text" class="form-control" id="nik" />
            <!-- <div class="invalid-feedback">Please provide a valid city.</div> -->
        </div>
        <!-- Button trigger modal -->
        <button onsubmit="validateForm()" type="submit" class="mt-3 btn btn-primary" id="submitButton" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
            Selanjutnya
        </button>
        <input class="mt-3 btn btn-danger" type="reset" id="reset" value="Batal" />
    </form>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body text-center">
                <img src="/img/check.png" alt="checklogo" class="check_icon">
                <p class="mt-3 font-weight-bold">Terima Kasih!</p>
                <p>Validasi data berhasil!</p>
                <a href="/kuesioner"><button class="btn btn-primary btn_modal">Lanjut</button></a>
            </div>

        </div>
    </div>
</div>

<script src="/js/form-action.js"></script>
<script src="/js/validation.js"></script>
<script>
    // Validation kuseioner
    const nim = document.getElementById("nim").nodeValue;
    const tanggalLahir = document.getElementById("tanggalLahir").nodeValue;
    const btnSubmit = document.querySelector("#submitButton");

    const validateForm = (e) => {
        if (nim !== "" && tanggalLahir !== "") {
            e.preventDefault()
            btnSubmit.classList.add()
        }
    }
</script>
<?= $this->endSection(); ?>