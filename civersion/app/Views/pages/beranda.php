<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="d-flex content-beranda">
        <div class="text-beranda">
            <h1 class="mb-4 fs-2">Selamat Datang!</h1>
            <div class="mb-5 d-flex">
                <div class="text-tracer fs-1 pe-4">Tracer</div>
                <div class="text-study fs-1">Study</div>
            </div>
            <div class="fs-5 mb-4">
                Selamat datang di Laman Tracer Study, Direktorat Pemebelajaran dan
                Kemahasiswaan, Direktorat Jenderal Pendidikan Tinggi. Laman ini
                diperuntukkan untuk mengelola data hasil tracer study yang
                dilaksanakan oleh Perguruan Tinggi di Indonesia.
            </div>
            <a href="/isiKuesioner"><button class="btn-login-index">Isi Kuesioner</button></a>
        </div>
        <div class="vektor">
            <img src="/img/stikma.png" class="rounded mx-auto mt-5 d-block" alt="" />
        </div>
    </div>

    <!-- Chart 2 -->
    <div class="mb-5">
        <h2>Tentang Tracer Study</h2>
        <p>
            Dikti saat ini sedang melaksanakan upaya untuk merintis kompilasi data
            tracer study nasional khususnya mengenai transisi dan posisi pekerjaan
            lulusan PT di Indonesia. Untuk itu sejak tahun 2011, telah
            dikembangkan suatu sistem online yang dapat digunakan oleh Perguruan
            Tinggi untuk melacak aktivitas para lulusannya setelah masa pendidikan
            tinggi, baik masa transisi maupun pergerakan mereka di dunia kerja
            sampai. Tracer study dinilai penting karena menjadi alat evaluasi
            kinerja PT dan sekarang telah dijadikan salah satu syarat kelengkapan
            akreditasi oleh Badan Akreditasi Nasional Perguruan Tinggi (BAN-PT),
            sebagai kelengkapan dalam dokumen Evaluasi Diri yang diperlukan dalam
            pengajuan proposal melalui Kemdikbud. Tracer study online Dikti
            ditujukan untuk melacak jejak lulusan/alumni yang dilakukan 2 tahun
            setelah lulus dan bertujuan untuk mengetahui:
        </p>
        <p class="mb-0">
            1. Outcome pendidikan dalam bentuk transisi dari dunia pendidikan
            tinggi ke dunia kerja (termasuk masa tunggu kerja dan proses pencarian
            kerja pertama), situasi kerja terakhir, dan aplikasi kompetensi di
            dunia kerja.
        </p>
        <p class="mb-0">
            2. Output pendidikan yaitu penilaian diri terhadap penguasaan dan
            pemerolehan kompetensi.
        </p>
        <p>
            3. Proses pendidikan berupa evaluasi proses pembelajaran dan
            kontribusi pendidikan tinggi terhadap pemerolehan kompetensi. Hasil
            tracer study akan membantu PT dalam mengetahui posisi lulusan yang
            telah terserap dalam dunia kerja serta menyiapkan lulusan sesuai
            dengan kompetansi yang diperlukan di dunia kerja. Hasil tracer study
            yang kemudian dilaporkan ke Dikti akan membantu program Pemerintah
            dalam rangka memetakan kebutuhan dunia kerja dengan pembangunan
            pendidikan di Indonesia.
        </p>
    </div>


</div>
<?= $this->endSection(); ?>