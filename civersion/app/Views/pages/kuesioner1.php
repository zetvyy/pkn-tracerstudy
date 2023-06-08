<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<h1 class="content">Isi Kuesioner</h1>
<div class="container">
    <form class="requires-validation shadow p-3 mb-5 bg-body-tertiary rounded myForm" novalidate>
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
        <button onsubmit="validateForm()" type="submit" class="mt-3 btn btn-primary" id="submitButton" data-bs-toggle="modal" data-bs-target="#myModal">
            Selanjutnya
        </button>
        <input class="mt-3 btn btn-danger" type="reset" id="reset" value="Batal" />
    </form>
</div>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body text-center">
                <img alt="imageIcon" id="image_icon">
                <p class=" mt-3" id="modal_message"></p>
                <a href="/kuesioner" id="href_Atr"><button class="btn btn-primary" id="btn_modal">Lanjutkan</button></a>
            </div>

        </div>
    </div>
</div>

<script src="/js/form-action.js"></script>
<script src="/js/validation.js"></script>

<?= $this->endSection(); ?>