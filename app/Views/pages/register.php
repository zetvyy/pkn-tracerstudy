<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <link rel="stylesheet" href="/styles/register.css" />
    <title>Tracer Study</title>
</head>

<body>
    <div class="container">
        <div class="d-lg-flex half">
            <div class="contents order-2 order-md-1">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-7">
                            <h3>
                                Register to
                                <span> <a href="/"><img class="logo" src="img/logo.png" alt="logo" /></a></span>
                            </h3>
                            <p class="mb-4">
                                Silahkan registrasi pada form dibawah untuk dapat mengakses
                                data
                            </p>
                            <form action="#" method="post" class="requires-validation" novalidate>
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control" id="nama" required />
                                    <div class="invalid-feedback">Harap isi nama!</div>
                                </div>
                                <div class="form-group">
                                    <label for="jabatan">Jabatan</label>
                                    <input type="text" class="form-control" id="jabatan" required />
                                    <div class="invalid-feedback">Harap isi jabatan anda!</div>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" placeholder="your-email@gmail.com" id="email" required />
                                    <div class="invalid-feedback">Harap isi email anda!</div>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" placeholder="Your Password" id="register_password" required />
                                    <div class="invalid-feedback">Harap isi password anda!</div>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="password">Konfirmasi Password</label>
                                    <input type="password" class="form-control" placeholder="Confirm Your Password" id="confirm_register_password" required />
                                    <div class="invalid-feedback">password belum sama!</div>
                                </div>

                                <p>Sudah Punya akun? <a href="/login">Masuk</a></p>
                                <input type="submit" value="Register" class="btn btn-block btn-primary btn-login" />
                            </form>
                        </div>
                        <div class="col-md-5">
                            <img class="img_login" src="img/login.jpg" alt="login illustrattion" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="/js/validation.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>

</html>