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

    <div class="row w-100">
        <div class="col-3">
            <!-- Tab navs -->
            <div class="nav flex-column nav-tabs text-center" id="v-tabs-tab" role="tablist" aria-orientation="vertical">
                <a data-mdb-tab-init class="nav-link active" id="v-tabs-home-tab" href="#v-tabs-home" role="tab" aria-controls="v-tabs-home" aria-selected="true">Home</a>
                <a data-mdb-tab-init class="nav-link" id="v-tabs-profile-tab" href="#v-tabs-profile" role="tab" aria-controls="v-tabs-profile" aria-selected="false">Profile</a>
                <a data-mdb-tab-init class="nav-link" id="v-tabs-messages-tab" href="#v-tabs-messages" role="tab" aria-controls="v-tabs-messages" aria-selected="false">Messages</a>
            </div>
            <!-- Tab navs -->
        </div>

        <div class="col-9">
            <!-- Tab content -->
            <div class="tab-content" id="v-tabs-tabContent">
                <div class="tab-pane fade show active" id="v-tabs-home" role="tabpanel" aria-labelledby="v-tabs-home-tab">
                    Home content
                </div>
                <div class="tab-pane fade" id="v-tabs-profile" role="tabpanel" aria-labelledby="v-tabs-profile-tab">
                    Profile content
                </div>
                <div class="tab-pane fade" id="v-tabs-messages" role="tabpanel" aria-labelledby="v-tabs-messages-tab">
                    Messages content
                </div>
            </div>
            <!-- Tab content -->
        </div>
    </div>

    <!-- Content -->
    <?php include('public/layouts/scripts.php') ?>
    <?php include('public/layouts/footer.php') ?>
</body>

</html>