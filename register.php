<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <?php include('public/layouts/head.php') ?>
</head>

<body>
    <?php include('public/layouts/header.php') ?>
    <!-- Content -->
    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white shadow-lg" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
                            <div class="mb-md-5 mt-md-4 pb-5">
                                <h2 class="fw-bold mb-2 text-uppercase">Đăng ký</h2>
                                <div class="form-outline form-white mb-4 text-start">
                                    <label class="form-label" for="typeEmailX">Email</label>
                                    <input type="email" id="typeEmailX" class="form-control form-control-lg shadow-none" placeholder="Email" />
                                </div>

                                <div class="form-outline form-white mb-4 text-start">
                                    <label class="form-label" for="typeUsernameX">Tên đăng nhập</label>
                                    <input type="text" id="typeUsernameX" class="form-control form-control-lg shadow-none" placeholder="Tên đăng nhập" />
                                </div>

                                <div class="form-outline form-white mb-4 text-start">
                                    <label class="form-label" for="typePasswordX">Mật khẩu</label>
                                    <input type="password" id="typePasswordX" class="form-control form-control-lg shadow" placeholder="Mật khẩu" />
                                </div>

                                <div class="form-outline form-white mb-4 text-start">
                                    <label class="form-label" for="typeConfirmPasswordX">Xác nhận mật khẩu</label>
                                    <input type="password" id="typeConfirmPasswordX" class="form-control form-control-lg shadow" placeholder="Xác nhận mật khẩu" />
                                </div>

                                <button class="btn btn-outline-light btn-lg px-5" type="submit">Đăng ký</button>
                            </div>
                            <div>
                                <p class="mb-0">Đã có tài khoản? <a href="./login.php" class="text-info fw-bold">Đăng nhập</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <!-- Content -->
    <?php include('public/layouts/scripts.php') ?>
    <?php include('public/layouts/footer.php') ?>
</body>

</html>