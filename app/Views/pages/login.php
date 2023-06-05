<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <link rel="stylesheet" href="/styles/login.css" />
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
                                Login to
                                <span> <a href="/"><img class="logo" src="img/logo.png" alt="logo"></a>
                                </span>
                            </h3>
                            <p class="mb-4">
                                Silahkan login pada form dibawah untuk dapat mengakses data
                            </p>
                            <form class="requires-validation" novalidate>
                                <div class="form-group has-validation">
                                    <label for="validationTooltipEmail" class="form-label">Email</label>
                                    <input type="email" class="form-control" placeholder="your-email@gmail.com" id="validationTooltipEmail" required />
                                    <div class="invalid-feedback">Harap isi email!</div>
                                </div>

                                <div class="form-group last mb-3">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" placeholder="Your Password" id="password" required />
                                    <div class="invalid-feedback">Harap isi password</div>
                                </div>
                                <div class="d-flex mb-5 align-items-center">
                                    <label class="control control--checkbox mb-0 mr-5 check">
                                        <input type="checkbox" checked="checked" />
                                        <span class="caption">Remember me</span>
                                        <div class="control__indicator"></div>
                                    </label>
                                    <span><a href="#" class="forgot-pass">Forgot Password</a></span>
                                </div>
                                <p>Belum Punya akun? <a href="/register">Register</a></p>
                                <button type="submit" value="Log In" class="btn btn-block btn-primary btn-login">
                                    Login
                                </button>
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