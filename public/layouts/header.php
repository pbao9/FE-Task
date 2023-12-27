<!-- Header -->
<nav class="navbar navbar-expand-lg sticky-top align-items-lg-left align-items-xl-center bg-white py-2 shadow-sm">
    <div class="container-fluid flex-lg-column flex-xl-row py-lg-1 py-md-3">
        <a class="navbar-brand" href="./index.php   ">
            <img src="./assets/img/logo.png" alt="">
        </a>
        <button class="navbar-toggler d-lg-none d-sm-block collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="toggler-icon top-bar"></span>
            <span class="toggler-icon middle-bar"></span>
            <span class="toggler-icon bottom-bar"></span>
        </button>
        <div class="collapse navbar-collapse flex-wrap justify-content-md-center py-lg-0 py-md-3" id="navbarSupportedContent">
            <ul class="navbar-nav mx-xl-auto me-lg-auto mb-2 mb-lg-0 fw-bold text-capitalize gap-3 col-xl-auto col-md-12 justify-content-center">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="./products.php">Kính Râm</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="./products-details.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Gọng Kính Cận
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="./products-detail.php">Combo Kính Chống Ánh Sáng Xanh Có Sẵn</a></li>
                        <li><a class="dropdown-item" href="./cart.php">Gọng Kính Cận Cả Viền</a></li>
                        <li><a class="dropdown-item" href="./checkout.php">Gọng Kính Cận Nữa Viền</a></li>
                        <li><a class="dropdown-item" href="./blog.php">Gọng Kính Không Viền</a></li>
                        <li><a class="dropdown-item" href="#">Gọng Kính Gỗ</a></li>
                        <li><a class="dropdown-item" href="#">Gọng Kính Cận Giá Rẻ</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Tròng Kính
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Combo Kính Chống Ánh Sáng Xanh Có Sẵn</a></li>
                        <li><a class="dropdown-item" href="#">Kính Chống Ánh Sáng Xanh</a></li>
                        <li><a class="dropdown-item" href="#">Tròng Cận Thị</a></li>
                        <li><a class="dropdown-item" href="#">Tròng Viễn Thị</a></li>
                        <li><a class="dropdown-item" href="#">Tròng Kính Cận Râm</a></li>
                        <li><a class="dropdown-item" href="#">Tròng Kính Đổi Màu</a></li>
                        <li><a class="dropdown-item" href="#">Tròng Kính Đa Tròng</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Kính Râm Cận</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Kính Chính Hãng
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Gọng Kính Cận Ree-Man</a></li>
                        <li><a class="dropdown-item" href="#">Gọng Kính Cân Eye Plus</a></li>
                        <li><a class="dropdown-item" href="#">Kính Rayban Chính Hãng</a></li>
                        <li><a class="dropdown-item" href="#">Kính Levis Chính Hãng</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Sale</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Vip Member</a>
                </li>
            </ul>

            <div class="d-flex flex-row justify-content-center align-items-center gap-5">
                <span class="d-flex flex-row justify-content-between align-items-center">
                    <a href="#" class="nav-link">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </a>

                    <span class="pe-1 ps-1">|</span>
                    <a href="./cart.php" class="nav-link">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </a>
                </span>
                <div class="btn btn-outline-primary px-3">
                    <!-- <a href="./login.php" class="text-decoration-none text-dark fw-bold">Đăng nhập</a> -->
                    <span type="button" class="fw-bold" data-bs-toggle="modal" data-bs-target="#ModalForm">
                        Đăng nhập </span>
                    <!-- <span class="ps-1 pe-1 fw-bold">|</span> -->
                    <!-- <a href="./register.php" class="text-decoration-none fw-bold">Đăng ký</a> -->

                </div>

            </div>
        </div>

    </div>
</nav>


<!-- Modal Form -->
<div class="modal fade" id="ModalForm" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <!-- Login Form -->
            <form action="">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold text-uppercase">Đăng nhập</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="Email">Email<span class="text-danger">*</span></label>
                        <input type="text" name="username" class="form-control shadow-none" id="email" placeholder="Nhập Email">
                    </div>

                    <div class="mb-3">
                        <label for="Password">Mật khẩu<span class="text-danger">*</span></label>
                        <input type="password" name="password" class="form-control shadow-none" id="Mật khẩu" placeholder="Nhập mật khẩu">
                    </div>
                    <div class="mb-3">
                        <input class="form-check-input" type="checkbox" value="" id="remember" required>
                        <label class="form-check-label" for="remember">Ghi nhớ thiết bị.</label>
                        <a href="./forgot-password.php" class="float-end">Quên mật khẩu</a>
                    </div>
                </div>
                <div class="modal-footer pt-4">
                    <button type="button" class="btn btn-outline-primary fw-bold text-uppercase mx-auto w-100">Đăng nhập</button>
                </div>
                <p class="text-center">Chưa có tài khoản, <a href="./register.php">Đăng ký ngay</a></p>
            </form>
        </div>
    </div>
</div>

<!-- Header -->