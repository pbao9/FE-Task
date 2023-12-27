<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quên mật khẩu</title>
    <?php include('public/layouts/head.php') ?>
</head>

<body>
    <?php include('public/layouts/header.php') ?>
    <!-- Content -->
    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-lg" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
                            <div class="mb-md-5 mt-md-4 pb-5">
                                <h2 class="fw-bold mb-2 text-uppercase">Quên Mật Khẩu</h2>
                                <div class="form-outline my-5" data-mdb-input-init>
                                    <input type="text" class="form-control" id="validationDefault01" required />
                                    <label for="validationDefault01" class="form-label">Nhập Email đăng ký</label>
                                </div>


                                <button class="btn btn-outline-dark btn-lg px-5" type="submit">Gửi Yêu Cầu</button>
                            </div>
                            <div>
                                <p class="mb-0">Nhớ mật khẩu? <span type="button" class="fw-bold text-capitalize text-info" data-bs-toggle="modal" data-bs-target="#ModalForm">
                                        Đăng nhập </span></p>
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