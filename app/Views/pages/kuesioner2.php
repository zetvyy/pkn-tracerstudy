<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<h1 class="content">Isi Kuesioner</h1>
<div class="container">
    <form class="shadow p-3 mb-5 bg-body-tertiary rounded">
        <h5>Kuesioner Wajib</h5>
        <!--Pertanyaan  Nomer 1 -->
        <p>1.Jelaskan status anda saat ini?</p>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault1" />
            <label class="form-check-label" for="flexRadioDefault1">
                Bekerja(Full time/part time)
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault1" />
            <label class="form-check-label" for="flexRadioDefault1">
                Belum memungkinkan bekerja
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault1" />
            <label class="form-check-label" for="flexRadioDefault1">
                Wiraswasta
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault1" />
            <label class="form-check-label" for="flexRadioDefault1">
                Melanjutkan pendidikan
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault1" />
            <label class="form-check-label" for="flexRadioDefault1">
                Tidak kerja tetapi sedang melamar kerja
            </label>
        </div>
        <br />

        <!-- Pertanyaan Nomer 2 -->
        <p>
            2. Apakah anda telah mendapatkan pekerjaan <==6 bulan/ termasuk bekerja sebelum lulus? </p>
                <div class="row">
                    <div class="col-xl-1 col-2">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault2" id="flexRadioDefault2" />
                            <label class="form-check-label" for="flexRadioDefault2">
                                Ya
                            </label>
                        </div>
                    </div>
                    <div class="col-xl-1 col-2">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault2" id="flexRadioDefault2" />
                            <label class="form-check-label" for="flexRadioDefault2">
                                Tidak
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-12">
                        <label for="">Dalam berapa bulan anda mendapatkan pekerjaan?</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected></option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <br />
                    <div class="col-xl-6 col-12">
                        <label for="">Berapa rata-rata pendapatan Anda perbulan? (take home
                            pay)?</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected></option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>
                <br />

                <!-- Pertanyaan nomer 3 -->
                <p>3. Dimana lokasi tempat anda bekerja</p>
                <div class="row">
                    <div class="col-xl-6 col-6">
                        <label for="">Provinsi</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected></option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col-xl-6 col-12">
                        <label for="">Kota/Kabupaten</label>
                        <input class="form-control" type="text" placeholder="Silahkan pilih provinsi terlebih dahulu" aria-label="default input example" />
                    </div>
                </div>
                <br />

                <!-- Pertanyaan Nomer 4 -->
                <p>
                    4. Apa jenis perusahaan/instansi/institusi tempat anda bekerja
                    sekarang?
                </p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault3" id="flexRadioDefault3" />
                    <label class="form-check-label" for="flexRadioDefault3">
                        Instansi pemerintah
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault3" id="flexRadioDefault3" />
                    <label class="form-check-label" for="flexRadioDefault3">
                        BUMN/BUMD
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault3" id="flexRadioDefault3" />
                    <label class="form-check-label" for="flexRadioDefault3">
                        Perusahaan Swasta
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault3" id="flexRadioDefault3" />
                    <label class="form-check-label" for="flexRadioDefault3">
                        Wiraswasta/Perusahaan Sendiri
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault3" id="flexRadioDefault3" />
                    <label class="form-check-label" for="flexRadioDefault3">
                        Perusahaan Swasta
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault3" id="flexRadioDefault3" />
                    <label class="form-check-label" for="flexRadioDefault3">
                        Wiraswasta/Perusahaan Sendiri
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault3" id="flexRadioDefault3" />
                    <label class="form-check-label" for="flexRadioDefault3">
                        Lainnya,Tuliskan
                    </label>
                </div>
                <input type="text" class="form-control w-50" id="inputLainnya" />
                <br />

                <!-- Pertanyaan Nomer 5 -->
                <p>5. Apa nama perusahaan/kantor tempat anda bekerja?</p>
                <input type="text" class="form-control w-50" id="inputLainnya" />
                <br />

                <!-- pertanyaan no 6 -->

                <p>
                    6. Bila biraswasta, apa posisi/jabatan Anda saat ini?(Apabila 1
                    Menjawab[3] wiraswasta)
                </p>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Silahkan pilih</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select><br />

                <!-- pertanyaan no 7 -->

                <p>7. Apa tingkat kerja Anda?</p>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Nasional/Wirasuasta berbadan hukum</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                </select><br />

                <!-- pertanyaan no 8 -->

                <p>8. Pertanyaan studi lanjut</p>
                <div class="row">
                    <div class="col-xl-6 col-12 mb-3">
                        <label for="exampleInputEmail1" class="form-label">Sumber biaya</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Silahkan pilih</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select><br />
                    </div>
                    <br />
                    <div class="col-xl-6 col-12 mb-3">
                        <label for="exampleInputEmail1" class="form-label">Berapa rata-rata pendapatan anda perbulan?</label>
                        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" />
                    </div>

                    <div class="col-xl-6 col-12">
                        <label for="">Program studi</label>
                        <input class="form-control" type="text" placeholder="Silahkan perguruan tinggi terlebih dahulu" aria-label="default input example" />
                    </div>
                    <div class="col-xl-6 col-12 mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tanggal masuk</label>
                        <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" />
                    </div>
                </div>

                <!-- pertanyaan no 9 -->

                <p>
                    9. Sebutkan sumber dana dalam pembiayaan kuliah/*(bukan ketika Studi
                    lanjut)
                </p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault4" id="flexRadioDefault4" />
                    <label class="form-check-label" for="flexRadioDefault4">
                        Biaya sendiri/Keluarga
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault4" id="flexRadioDefault4" />
                    <label class="form-check-label" for="flexRadioDefault4">
                        Biaya siswa Adik
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault4" id="flexRadioDefault4" />
                    <label class="form-check-label" for="flexRadioDefault4">
                        Biaya siswa BIDIKMISI
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault4" id="flexRadioDefault4" />
                    <label class="form-check-label" for="flexRadioDefault4">
                        Biaya siswa PPA
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault4" id="flexRadioDefault4" />
                    <label class="form-check-label" for="flexRadioDefault4">
                        Biaya siswa AFIRMASI
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault4" id="flexRadioDefault4" />
                    <label class="form-check-label" for="flexRadioDefault4">
                        Biaya siswa perusahaan/Swasta
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault4" id="flexRadioDefault4" />
                    <label class="form-check-label" for="flexRadioDefault4">
                        Lainnya,Tuliskan
                    </label>
                </div>
                <input type="text" class="form-control w-50" id="inputLainnya" />
                <br /><br />

                <!-- pertanyaan no 10 -->

                <p>10. Seberapa erat hubungan bidang studi dengan pekerjaan Anda</p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault5" id="flexRadioDefault5" />
                    <label class="form-check-label" for="flexRadioDefault5">
                        Sangat erat
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault5" id="flexRadioDefault5" />
                    <label class="form-check-label" for="flexRadioDefault5"> Erat </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault5" id="flexRadioDefault5" />
                    <label class="form-check-label" for="flexRadioDefault5">
                        Cukup Erat
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault5" id="flexRadioDefault5" />
                    <label class="form-check-label" for="flexRadioDefault5">
                        Kurang Erat
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault5" id="flexRadioDefault5" />
                    <label class="form-check-label" for="flexRadioDefault5">
                        Tidak Sama Sekali
                    </label>
                </div>
                <br /><br />

                <!-- Pertanyaan nomer 11 -->
                <p>
                    11. Tingkat pendidikan apa yang paling tepat/sesuai untuk pekerjaan
                    anda saat ini?
                </p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault6" id="flexRadioDefault6" />
                    <label class="form-check-label" for="flexRadioDefault6">
                        Setingkat lebih Tinggi
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault6" id="flexRadioDefault6" />
                    <label class="form-check-label" for="flexRadioDefault6">
                        Tingkat Yang Sama
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault6" id="flexRadioDefault6" />
                    <label class="form-check-label" for="flexRadioDefault6">
                        Setingkat lebih Rendah
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault6" id="flexRadioDefault6" />
                    <label class="form-check-label" for="flexRadioDefault6">
                        Tidak Perlu Pendidikan Tinggi
                    </label>
                </div>
                <br />

                <!-- pertanyaan no 12 -->

                <p>
                    12. Pada saat lulus, pada tingkat mana kompetensi di bawah ini anda:
                    kuasai (A) Pada saat ini ,pada tingkat mana kompetensi di bawah ini di
                    perlukan dalam pekerjaan? (B)
                </p>

                <div class="row">
                    <div class="col-xl-6 col-12 text-center p pb-2 mb-4 text-black">
                        <h5 class="border-bottom border-secondary">A</h5>
                        <div class="border-bottom border-secondary">
                            <p>Etika</p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">3</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">4</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">5</label>
                            </div>
                        </div>
                        <div class="border-bottom border-secondary">
                            <p>Keahlian berdasarkan bidang ilmu</p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">3</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">4</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">5</label>
                            </div>
                        </div>
                        <div class="border-bottom border-secondary">
                            <p>Bahasa Inggris</p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions3" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions3" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions3" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">3</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions3" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">4</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions3" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">5</label>
                            </div>
                        </div>

                        <div class="border-bottom border-secondary">
                            <p>Penggunaan Teknologi Informasi</p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions4" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions4" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions4" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">3</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions4" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">4</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions4" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">5</label>
                            </div>
                        </div>

                        <div class="border-bottom border-secondary">
                            <p>Komunikasi</p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions5" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions5" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions5" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">3</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions5" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">4</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions5" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">5</label>
                            </div>
                        </div>
                        <div class="border-bottom border-secondary">
                            <p>Kerjasama Tim</p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions6" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions6" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions6" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">3</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions6" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">4</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions6" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">5</label>
                            </div>
                        </div>
                        <div class="border-bottom border-secondary">
                            <p>Pengembangan</p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions7" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions7" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions7" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">3</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions7" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">4</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions7" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">5</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-12 text-center p pb-2 mb-4 text-black">
                        <h5 class="border-bottom border-secondary">B</h5>
                        <div class="border-bottom border-secondary">
                            <p>Etika</p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions8" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions8" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions8" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">3</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions8" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">4</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions8" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">5</label>
                            </div>
                        </div>
                        <div class="border-bottom border-secondary">
                            <p>Keahlian berdasarkan bidang ilmu</p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions9" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions9" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions9" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">3</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions9" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">4</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions9" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">5</label>
                            </div>
                        </div>

                        <div class="border-bottom border-secondary">
                            <p>Bahasa Inggris</p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions10" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions10" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions10" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">3</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions10" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">4</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions10" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">5</label>
                            </div>
                        </div>
                        <div class="border-bottom border-secondary">
                            <p>Penggunaan Teknologi Informasi</p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions11" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions11" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions11" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">3</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions11" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">4</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions11" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">5</label>
                            </div>
                        </div>
                        <div class="border-bottom border-secondary">
                            <p>Komunikasi</p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions12" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions12" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions12" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">3</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions12" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">4</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions12" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">5</label>
                            </div>
                        </div>
                        <div class="border-bottom border-secondary">
                            <p>Kerjasama Tim</p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions13" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions13" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions13" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">3</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions13" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">4</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions13" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">5</label>
                            </div>
                        </div>
                        <div class="border-bottom border-secondary">
                            <p>Pengembangan</p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions14" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions14" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions14" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">3</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions14" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">4</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions14" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">5</label>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- pertanyaan no 13 -->
                <p>
                    13. Menurut anda berapa besar penekanan pada metode pembelajaran
                    dibawah ini dilaksanakan di program studi anda?
                </p>
                <div class="row">
                    <div class="col-xl-4 col-6">
                        <p>Perkuliahan</p>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault7" id="flexRadioDefault7" />
                            <label class="form-check-label" for="flexRadioDefault7">
                                Sangat Besar
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault7" id="flexRadioDefault7" />
                            <label class="form-check-label" for="flexRadioDefault7">
                                Besar
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault7" id="flexRadioDefault7" />
                            <label class="form-check-label" for="flexRadioDefault7">
                                Cukup Besar
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault7" id="flexRadioDefault7" />
                            <label class="form-check-label" for="flexRadioDefault7">
                                Kurang Besar
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault7" id="flexRadioDefault7" />
                            <label class="form-check-label" for="flexRadioDefault7">
                                Tidak Sama sekali
                            </label>
                        </div>
                    </div>
                    <div class="col-xl-4 col-6">
                        <p>Demonstrasi</p>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault8" id="flexRadioDefault8" />
                            <label class="form-check-label" for="flexRadioDefault8">
                                Sangat Besar
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault8" id="flexRadioDefault8" />
                            <label class="form-check-label" for="flexRadioDefault8">
                                Besar
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault8" id="flexRadioDefault8" />
                            <label class="form-check-label" for="flexRadioDefault8">
                                Cukup Besar
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault8" id="flexRadioDefault8" />
                            <label class="form-check-label" for="flexRadioDefault8">
                                Kurang Besar
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault8" id="flexRadioDefault8" />
                            <label class="form-check-label" for="flexRadioDefault8">
                                Tidak Sama Sekali
                            </label>
                        </div>
                    </div>
                    <div class="col-xl-4 col-6">
                        <p>Partisipasi Dalam Proyek Riset</p>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault9" id="flexRadioDefault9" />
                            <label class="form-check-label" for="flexRadioDefault9">
                                Sangat Besar
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault9" id="flexRadioDefault9" />
                            <label class="form-check-label" for="flexRadioDefault9">
                                Besar
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault9" id="flexRadioDefault9" />
                            <label class="form-check-label" for="flexRadioDefault9">
                                Cukup Besar
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault9" id="flexRadioDefault9" />
                            <label class="form-check-label" for="flexRadioDefault9">
                                Kurang Besar
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault9" id="flexRadioDefault9" />
                            <label class="form-check-label" for="flexRadioDefault9">
                                Tidak Sama Sekali
                            </label>
                        </div>
                    </div>
                    <div class="col-xl-4 col-6">
                        <p>Magang</p>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault10" id="flexRadioDefault10" />
                            <label class="form-check-label" for="flexRadioDefault10">
                                Sangat Besar
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault10" id="flexRadioDefault10" />
                            <label class="form-check-label" for="flexRadioDefault10">
                                Besar
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault10" id="flexRadioDefault10" />
                            <label class="form-check-label" for="flexRadioDefault10">
                                Cukup Besar
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault10" id="flexRadioDefault10" />
                            <label class="form-check-label" for="flexRadioDefault10">
                                Kurang Besar
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault10" id="flexRadioDefault10" />
                            <label class="form-check-label" for="flexRadioDefault10">
                                Tidak Sama sekali
                            </label>
                        </div>
                    </div>
                    <div class="col-xl-4 col-6">
                        <p>Praktikum</p>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault11" id="flexRadioDefault11" />
                            <label class="form-check-label" for="flexRadioDefault11">
                                Sangat Besar
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault11" id="flexRadioDefault11" />
                            <label class="form-check-label" for="flexRadioDefault11">
                                Besar
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault11" id="flexRadioDefault11" />
                            <label class="form-check-label" for="flexRadioDefault11">
                                Cukup Besar
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault11" id="flexRadioDefault11" />
                            <label class="form-check-label" for="flexRadioDefault11">
                                Kurang Besar
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault11" id="flexRadioDefault11" />
                            <label class="form-check-label" for="flexRadioDefault11">
                                Tidak Sama Sekali
                            </label>
                        </div>
                    </div>
                    <div class="col-xl-4 col-6">
                        <p>Kerja Lapangan</p>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault12" id="flexRadioDefault12" />
                            <label class="form-check-label" for="flexRadioDefault12">
                                Sangat Besar
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault12" id="flexRadioDefault12" />
                            <label class="form-check-label" for="flexRadioDefault12">
                                Besar
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault12" id="flexRadioDefault12" />
                            <label class="form-check-label" for="flexRadioDefault12">
                                Cukup Besar
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault12" id="flexRadioDefault12" />
                            <label class="form-check-label" for="flexRadioDefault12">
                                Kurang Besar
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault12" id="flexRadioDefault12" />
                            <label class="form-check-label" for="flexRadioDefault12">
                                Tidak Sama Sekali
                            </label>
                        </div>
                    </div>
                    <div class="col-xl-4 col-6 mt-3">
                        <p>Diskusi</p>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault13" id="flexRadioDefault13" />
                            <label class="form-check-label" for="flexRadioDefault13">
                                Sangat Besar
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault13" id="flexRadioDefault13" />
                            <label class="form-check-label" for="flexRadioDefault13">
                                Besar
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault13" id="flexRadioDefault13" />
                            <label class="form-check-label" for="flexRadioDefault13">
                                Cukup Besar
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault13" id="flexRadioDefault13" />
                            <label class="form-check-label" for="flexRadioDefault13">
                                Kurang Besar
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault13" id="flexRadioDefault13" />
                            <label class="form-check-label" for="flexRadioDefault13">
                                Tidak Sama Sekali
                            </label>
                        </div>
                    </div>
                </div>

                <!-- pertanyaan no 14 -->
                <p class="mt-3">14. Kapan Anda Mulai Mencari Pekerjaan</p>
                <div class="row">
                    <div class="col-xl-2 col-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault14" id="flexRadioDefault14" />
                            <label class="form-check-label" for="flexRadioDefault14">
                                Kira-Kira
                            </label>
                        </div>
                    </div>
                    <div class="col-xl-1 col-3">
                        <input type="number" class="form-control" />
                    </div>
                    <div class="col-xl-9 col-5">
                        <p>Bulan sebelum lulus</p>
                    </div>
                    <div class="col-xl-2 col-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault14" id="flexRadioDefault14" />
                            <label class="form-check-label" for="flexRadioDefault14">
                                Kira-Kira
                            </label>
                        </div>
                    </div>
                    <div class="col-xl-1 col-3">
                        <input type="number" class="form-control" />
                    </div>
                    <div class="col-xl-9 col-5">
                        <p>Bulan sesudah lulus</p>
                    </div>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault14" id="flexRadioDefault14" />
                    <label class="form-check-label" for="flexRadioDefault14">
                        Saya tidak mencari kerja
                    </label>
                </div>

                <!-- pertanyaan no 15 -->
                <p class="mt-3">
                    15. Bagaimana anda mencari pekerjaan tersebut?Jawaban Bisa lebih dari
                    satu
                </p>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                    <label class="form-check-label" for="flexCheckDefault">
                        Melalui iklan di koran/majala,brosur
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                    <label class="form-check-label" for="flexCheckDefault">
                        Melamar ke perusahaan tanpa mengetahui lowongan yang ada
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                    <label class="form-check-label" for="flexCheckDefault">
                        Pergikebursa/pamerankerja
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                    <label class="form-check-label" for="flexCheckDefault">
                        Mencarilewatinternet/iklanonline/milis
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                    <label class="form-check-label" for="flexCheckDefault">
                        Dihubungin oleh perusahaan
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                    <label class="form-check-label" for="flexCheckDefault">
                        Menghubungi kemenakertrans
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                    <label class="form-check-label" for="flexCheckDefault">
                        Menghubungi agen tenaga kerja komersial/swasta
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                    <label class="form-check-label" for="flexCheckDefault">
                        Memperoleh informasih dari pusat/kantor pengembang karir
                        fakultas/unvesitas
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                    <label class="form-check-label" for="flexCheckDefault">
                        Menghubungikantorkemahasiswaan/hubunganalumni
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                    <label class="form-check-label" for="flexCheckDefault">
                        Membangunjaringan(network)sejakmasihkuliah
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                    <label class="form-check-label" for="flexCheckDefault">
                        Melalui relasi (misalnya dosen,orang tua,saudara,teman,dll.)
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                    <label class="form-check-label" for="flexCheckDefault">
                        Membangun bisnis sendiri
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                    <label class="form-check-label" for="flexCheckDefault">
                        Melalui penempatan kerja atau magang
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                    <label class="form-check-label" for="flexCheckDefault">
                        Bekerja di tempat yang sama dengan tempat kerja sesama kuliah apa
                    </label>
                </div>
                <!-- Pertanyaan nomer 16 -->
                <div class="nomer-16 mt-3">
                    <p>
                        16. Berapa perusahaan/instasi/institusi yang sudah anda lamar (lewat
                        surat email) sebelum anda memperoleh pekerjaan?
                    </p>
                    <div class="row">
                        <div class="me-4 col-xl-2 col-12">
                            <input type="number" />
                        </div>
                        <div class="col-xl-9 col-12">Perusahaan/instasi/institusi</div>
                    </div>
                </div>

                <div class="nomer-17 mt-3">
                    <p>
                        17. Berapa perusahaan/instasi/institusi yang merespons lamaran anda?
                    </p>
                    <div class="row">
                        <div class="me-4 col-xl-2 col-12">
                            <input type="number" />
                        </div>
                        <div class="col-xl-9 col-12">Perusahaan/instasi/institusi</div>
                    </div>
                </div>

                <div class="nomer-18 mt-3">
                    <p>
                        18. Berapa perusahaan/instasi/institusi yang mengundang anda untuk
                        wawancara?
                    </p>
                    <div class="row">
                        <div class="me-4 col-xl-2 col-12 ">
                            <input type="number" />
                        </div>
                        <div class="col-xl-2 col-12 ">Perusahaan/instasi/institusi</div>
                    </div>
                </div>

                <div class="nomer-19 mt-3">
                    <p>
                        19. Apakah anda aktif mencari pekerjaan dalam 4 minggu terahir?
                        Pilihlah satu jawaban
                    </p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault19" id="flexRadioDefault19" />
                        <label class="form-check-label" for="flexRadioDefault19">
                            Tidak
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault19" id="flexRadioDefault19" />
                        <label class="form-check-label" for="flexRadioDefault19">
                            Tidak, tapi saya sedang menunggu hasil lamaran
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault19" id="flexRadioDefault19" />
                        <label class="form-check-label" for="flexRadioDefault19">
                            Iya, saya akan mulai bekerja dalam 2 minggu kedepan
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault19" id="flexRadioDefault19" />
                        <label class="form-check-label" for="flexRadioDefault19">
                            Iya, tapi saya belum pasti akan bekerja dalam 2 minggu kedepan
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault19" id="flexRadioDefault19" />
                        <label class="form-check-label" for="flexRadioDefault19">
                            Lainnya
                        </label>
                    </div>
                    <input type="text" class="form-control w-50" id="inputLainnya" />
                    <br /><br />
                </div>

                <div class="nomer-20 mt-3">
                    <p>
                        20. Jika menurut anda perkerjaan anda saat ini tidak sesuai dengan :
                        pendidikan anda, mengapa mengambilnya? Jawaban bisa lebih dari satu
                    </p>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="flexRadioDefault20" id="flexRadioDefault20" />
                        <label class="form-check-label" for="flexRadioDefault1">
                            Pertanyaan tidak sesuai, pekerjaan saya sekarang sudah sesuai dengan pendidikan saya.
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="flexRadioDefault20" id="flexRadioDefault20" />
                        <label class="form-check-label" for="flexRadioDefault20">
                            Saya belum mendapatkan pekerjaan yang lebih sesuai.
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="flexRadioDefault20" id="flexRadioDefault20" />
                        <label class="form-check-label" for="flexRadioDefault1">
                            Di pekerjaan ini saya mendapatkan prospek kerja yang baik.
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="flexRadioDefault20" id="flexRadioDefault20" />
                        <label class="form-check-label" for="flexRadioDefault20">
                            Saya lebih suka beklerja di area pekerjaan yang tidak ada hubungannya dengan pendidikan saya.
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="flexRadioDefault20" id="flexRadioDefault20" />
                        <label class="form-check-label" for="flexRadioDefault20">
                            Saya dipromosikan kedalam posisi yang kurang berhubungan dengan pendidikan saya sebelumnya.
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="flexRadioDefault20" id="flexRadioDefault20" />
                        <label class="form-check-label" for="flexRadioDefault20">
                            Saya dapat memperoleh pendapatan yang lebih tinggi di pekerjaan ini.
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="flexRadioDefault20" id="flexRadioDefault20" />
                        <label class="form-check-label" for="flexRadioDefault20">
                            Pekerjaan saya sekarang lebih aman/terjamin.
                        </label>
                    </div>
                </div>
    </form>
</div>
<?= $this->endSection(); ?>