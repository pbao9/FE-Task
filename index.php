<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <?php include('public/layouts/head.php') ?>

</head>

<body>
    <?php include('public/layouts/header.php') ?>
    <div class="container slide_mainpage py-3">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="2000">
                    <img src="./assets/img/web2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="./assets/img/cv-web-copy.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <span class="cicrle-button">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                <div class="cicrle-button">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </div>
            </button>
        </div>
    </div>
    <section class="product-count-section">
        <div class="product-categories my-2 container">
            <div class="row gap-3 justify-content-evenly position-relative">
                <div class="col-xl-5 col-lg-12 rounded shadow row p-0 m-0 position-relative">
                    <img src="./assets/img/kinh-ram.png" alt="" width="100%" class="m-0 p-0">
                    <div class="box-content position-absolute py-lg-3 py-sm-0 top-0">
                        <p class="text-uppercase fw-bold fs-2">Kính Râm</p>
                        <p class="text-uppercase">112 Sản phẩm</p>
                        <a href="#" class="btn btn-primary">Xem ngay</a>
                    </div>

                </div>
                <div class="col-xl-5 col-lg-12 rounded shadow row p-0 m-0 position-relative">
                    <img src="./assets/img/kinh-can.png" alt="" width="100%" class="m-0 p-0">
                    <div class="box-content position-absolute py-lg-3 py-sm-0 top-0">
                        <p class="text-uppercase fw-bold fs-2">Kính Cận</p>
                        <p class="text-uppercase">668 Sản phẩm</p>
                        <a href="#" class="btn btn-primary">Xem ngay</a>
                    </div>
                </div>
            </div>
        </div>

    </section>


    <section class="deal-section position-relative my-5 py-5" id="deal_section">
        <!-- <img src="./assets/img/blockquote-cta-bg.jpg" alt="" class="w-100"> -->
        <div class="position-absolute top-50 start-50 translate-middle text-center z-1">
            <h4 class="text-light text-uppercase mb-3">Ưu đãi tháng này</h3>
                <h3 class="text-light text-uppercase fw-bold mb-3">Tặng Kính</h3>
                <a href="#" class="btn btn-light btn-deal text-uppercase fw-bold">Chi tiết ưu đãi</a>

        </div>
        <div class="position-absolute top-0 left-0 w-100 h-100" style="background-color: rgba(72,114,250,0.80)"></div>

    </section>


    <section class="about-section my-5 py-5" id="about_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <div class="h-100 d-flex flex-column justify-content-center gap-3">
                        <p>EYE PLUS – CHUỖI CỬA HÀNG KÍNH MẮT UY TÍN TẠI HÀ NỘI , HCM</p>
                        <h5>TÀI SẢN LỚN NHẤT CỦA DOANH NGHIỆP LÀ KHÁCH HÀNG</h5>
                        <em>Kính mắt Eye Plus – Trải nghiệm chất lượng kính mắt theo tiêu chuẩn quốc tế</em>
                        <p>Với 6 năm kính nghiệm trên thị trường kính mắt Việt, Eye Plus tự hào là đơn vị cung cấp các sản phẩm và dịch vụ về kính mắt uy tín tại Việt Nam. Các sản phẩm được tuyển chọn kỹ lưỡng, đạt độ tinh xảo và chất lượng cao, hướng đến trải nghiệm tốt nhất cho khách hàng.</p>
                        <p>Là một sản phẩm về sức khoẻ con người, chúng tôi “kinh doanh dựa trên sự tử tế” lấy khách hàng là trọng tâm, không ngừng thay đổi cải tiến sản phẩm cũng như dịch vụ đi kèm. Ngoài ra, hệ thống kỹ thuật viên giàu kinh nghiệm, trang thiết bị máy móc hiện đại cùng dịch vụ tư vấn tận tâm giúp Eye Plus trở thành địa chỉ tin cậy đồng hành cùng hàng triệu khách hàng Việt.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12 text-center">
                    <img src="./assets/img/chat-luong.png" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <section class="card-section my-5 py-5" id="card_section">
        <div class="container">
            <div class="row justify-content-evenly">
                <div class="col-lg-3 col-sm-12 bg-light text-black rounded shadow text-center mt-lg-0 mt-sm-3">
                    <img src="./assets/img/sunglasses1.png" alt="" class="img-fluid my-3">
                    <p class="text-uppercase fw-bold">Mẫu mã đa dạng</p>
                    <p class="fw-light px-3">Thấu hiểu thị hiếu khách hàng, mẫu mã của Eye Plus đa dạng, phù hợp với nhiều yêu cầu khác nhau.</p>
                </div>
                <div class="col-lg-3 col-sm-12 bg-light text-black rounded shadow text-center mt-lg-0 mt-sm-3">
                    <img src="./assets/img/medal1.png" alt="" class="img-fluid my-3">
                    <p class="text-uppercase fw-bold">CHẤT LƯỢNG ĐI ĐẦU</p>
                    <p class="fw-light px-3">Các sản phẩm được chọn lựa kỹ lưỡng, độ tinh xảo cao đi cùng chuyên viên kinh nghiệm và máy móc tiên tiến, hiện đại.</p>
                </div>
                <div class="col-lg-3 col-sm-12 bg-light text-black rounded shadow text-center mt-lg-0 mt-sm-3">
                    <img src="./assets/img/piggy-bank1.png" alt="" class="img-fluid my-3">
                    <p class="text-uppercase fw-bold">GIÁ CẢ HỢP LÝ</p>
                    <p class="fw-light px-3">Mức giá cạnh tranh tương xứng với chất lượng, nhiều chương trình ưu đãi và chế độ bảo hành hậu mãi.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="partner-section my-5 py-5" id="parner_section">
        <div class="container bg-body-tertiary py-5">
            <h4 class="text-center text-uppercase fw-bold title-section pb-5">Đối tác hàng đầu</h4>
            <div class="row">
                <div class="col"><img src="./assets/img/logo-hoya.png" alt=""></div>
                <div class="col"><img src="./assets/img/logo-essilor.png" alt=""></div>
                <div class="col"><img src="./assets/img/logo-chemi.png" alt=""></div>
                <div class="col"><img src="./assets/img/logo-akp.png" alt=""></div>
                <div class="col"><img src="./assets/img/logo-reeman.png" alt=""></div>
            </div>
        </div>
    </section>


    <section class="product-section my-5 py-5" id="product_section">
        <div class="container">
            <h4 class="text-center text-uppercase fw-bold title-section pb-5">Mẫu kính mắt mới</h4>
            <div class="row justify-content-evenly row-cols-4 py-2">
                <div class="col-3 text-center mb-3">
                    <div class="border box-product">
                        <img src="./assets/img/product_1.jpg" alt="" class="product-img" width="100%">
                        <a href="#" class="product-title text-uppercase mt-3 text-decoration-none nav-link">Gọng kính Blancy 8470 C3 Bạc</a>
                        <span class="d-flex justify-content-center gap-2 mb-2 flex-wrap">
                            <del class="price-sale fw-bold">650.000 Đ</del>
                            <span class="price text-danger fw-bold">520.000 Đ</span>
                        </span>
                    </div>
                </div>

                <div class="col-3 text-center mb-3">
                    <div class="border box-product">
                        <img src="./assets/img/product_1.jpg" alt="" class="product-img" width="100%">
                        <a href="#" class="product-title text-uppercase mt-3 text-decoration-none nav-link">Gọng kính Blancy 8470 C3 Bạc</a>
                        <span class="d-flex justify-content-center gap-2 mb-2 flex-wrap">
                            <del class="price-sale fw-bold">650.000 Đ</del>
                            <span class="price text-danger fw-bold">520.000 Đ</span>
                        </span>
                    </div>
                </div>

                <div class="col-3 text-center mb-3">
                    <div class="border box-product">
                        <img src="./assets/img/product_1.jpg" alt="" class="product-img" width="100%">
                        <a href="#" class="product-title text-uppercase mt-3 text-decoration-none nav-link">Gọng kính Blancy 8470 C3 Bạc</a>
                        <span class="d-flex justify-content-center gap-2 mb-2 flex-wrap">
                            <del class="price-sale fw-bold">650.000 Đ</del>
                            <span class="price text-danger fw-bold">520.000 Đ</span>
                        </span>
                    </div>
                </div>

                <div class="col-3 text-center mb-3">
                    <div class="border box-product">
                        <img src="./assets/img/product_1.jpg" alt="" class="product-img" width="100%">
                        <a href="#" class="product-title text-uppercase mt-3 text-decoration-none nav-link">Gọng kính Blancy 8470 C3 Bạc</a>
                        <span class="d-flex justify-content-center gap-2 mb-2 flex-wrap">
                            <del class="price-sale fw-bold">650.000 Đ</del>
                            <span class="price text-danger fw-bold">520.000 Đ</span>
                        </span>
                    </div>
                </div>

                <div class="col-3 text-center mb-3">
                    <div class="border box-product">
                        <img src="./assets/img/product_1.jpg" alt="" class="product-img" width="100%">
                        <a href="#" class="product-title text-uppercase mt-3 text-decoration-none nav-link">Gọng kính Blancy 8470 C3 Bạc</a>
                        <span class="d-flex justify-content-center gap-2 mb-2 flex-wrap">
                            <del class="price-sale fw-bold">650.000 Đ</del>
                            <span class="price text-danger fw-bold">520.000 Đ</span>
                        </span>
                    </div>
                </div>


                <div class="col-3 text-center mb-3">
                    <div class="border box-product">
                        <img src="./assets/img/product_1.jpg" alt="" class="product-img" width="100%">
                        <a href="#" class="product-title text-uppercase mt-3 text-decoration-none nav-link">Gọng kính Blancy 8470 C3 Bạc</a>
                        <span class="d-flex justify-content-center gap-2 mb-2 flex-wrap">
                            <del class="price-sale fw-bold">650.000 Đ</del>
                            <span class="price text-danger fw-bold">520.000 Đ</span>
                        </span>
                    </div>
                </div>


                <div class="col-3 text-center mb-3">
                    <div class="border box-product">
                        <img src="./assets/img/product_1.jpg" alt="" class="product-img" width="100%">
                        <a href="#" class="product-title text-uppercase mt-3 text-decoration-none nav-link">Gọng kính Blancy 8470 C3 Bạc</a>
                        <span class="d-flex justify-content-center gap-2 mb-2 flex-wrap">
                            <del class="price-sale fw-bold">650.000 Đ</del>
                            <span class="price text-danger fw-bold">520.000 Đ</span>
                        </span>
                    </div>
                </div>

                <div class="col-3 text-center mb-3">
                    <div class="border box-product">
                        <img src="./assets/img/product_1.jpg" alt="" class="product-img" width="100%">
                        <a href="#" class="product-title text-uppercase mt-3 text-decoration-none nav-link">Gọng kính Blancy 8470 C3 Bạc</a>
                        <span class="d-flex justify-content-center gap-2 mb-2 flex-wrap">
                            <del class="price-sale fw-bold">650.000 Đ</del>
                            <span class="price text-danger fw-bold">520.000 Đ</span>
                        </span>
                    </div>
                </div>


            </div>
            <p class="text-center">
                <a href="#" class="btn btn-primary text-uppercase fw-bold">Xem Thêm</a>
            </p>
        </div>
    </section>

    <section class="product-section my-5 py-5" id="product_section">
        <div class="container">
            <h4 class="text-center text-uppercase fw-bold title-section pb-5">Sản phẩm chính hãng</h4>
            <div class="row justify-content-evenly row-cols-4 py-2">
                <div class="col-3 text-center mb-3">
                    <div class="border box-product">
                        <img src="./assets/img/product_1.jpg" alt="" class="product-img" width="100%">
                        <a href="#" class="product-title text-uppercase mt-3 text-decoration-none nav-link">Gọng kính Blancy 8470 C3 Bạc</a>
                        <span class="d-flex justify-content-center gap-2 mb-2 flex-wrap">
                            <del class="price-sale fw-bold">650.000 Đ</del>
                            <span class="price text-danger fw-bold">520.000 Đ</span>
                        </span>
                    </div>
                </div>

                <div class="col-3 text-center mb-3">
                    <div class="border box-product">
                        <img src="./assets/img/product_1.jpg" alt="" class="product-img" width="100%">
                        <a href="#" class="product-title text-uppercase mt-3 text-decoration-none nav-link">Gọng kính Blancy 8470 C3 Bạc</a>
                        <span class="d-flex justify-content-center gap-2 mb-2 flex-wrap">
                            <del class="price-sale fw-bold">650.000 Đ</del>
                            <span class="price text-danger fw-bold">520.000 Đ</span>
                        </span>
                    </div>
                </div>

                <div class="col-3 text-center mb-3">
                    <div class="border box-product">
                        <img src="./assets/img/product_1.jpg" alt="" class="product-img" width="100%">
                        <a href="#" class="product-title text-uppercase mt-3 text-decoration-none nav-link">Gọng kính Blancy 8470 C3 Bạc</a>
                        <span class="d-flex justify-content-center gap-2 mb-2 flex-wrap">
                            <del class="price-sale fw-bold">650.000 Đ</del>
                            <span class="price text-danger fw-bold">520.000 Đ</span>
                        </span>
                    </div>
                </div>

                <div class="col-3 text-center mb-3">
                    <div class="border box-product">
                        <img src="./assets/img/product_1.jpg" alt="" class="product-img" width="100%">
                        <a href="#" class="product-title text-uppercase mt-3 text-decoration-none nav-link">Gọng kính Blancy 8470 C3 Bạc</a>
                        <span class="d-flex justify-content-center gap-2 mb-2 flex-wrap">
                            <del class="price-sale fw-bold">650.000 Đ</del>
                            <span class="price text-danger fw-bold">520.000 Đ</span>
                        </span>
                    </div>
                </div>

                <div class="col-3 text-center mb-3">
                    <div class="border box-product">
                        <img src="./assets/img/product_1.jpg" alt="" class="product-img" width="100%">
                        <a href="#" class="product-title text-uppercase mt-3 text-decoration-none nav-link">Gọng kính Blancy 8470 C3 Bạc</a>
                        <span class="d-flex justify-content-center gap-2 mb-2 flex-wrap">
                            <del class="price-sale fw-bold">650.000 Đ</del>
                            <span class="price text-danger fw-bold">520.000 Đ</span>
                        </span>
                    </div>
                </div>


                <div class="col-3 text-center mb-3">
                    <div class="border box-product">
                        <img src="./assets/img/product_1.jpg" alt="" class="product-img" width="100%">
                        <a href="#" class="product-title text-uppercase mt-3 text-decoration-none nav-link">Gọng kính Blancy 8470 C3 Bạc</a>
                        <span class="d-flex justify-content-center gap-2 mb-2 flex-wrap">
                            <del class="price-sale fw-bold">650.000 Đ</del>
                            <span class="price text-danger fw-bold">520.000 Đ</span>
                        </span>
                    </div>
                </div>


                <div class="col-3 text-center mb-3">
                    <div class="border box-product">
                        <img src="./assets/img/product_1.jpg" alt="" class="product-img" width="100%">
                        <a href="#" class="product-title text-uppercase mt-3 text-decoration-none nav-link">Gọng kính Blancy 8470 C3 Bạc</a>
                        <span class="d-flex justify-content-center gap-2 mb-2 flex-wrap">
                            <del class="price-sale fw-bold">650.000 Đ</del>
                            <span class="price text-danger fw-bold">520.000 Đ</span>
                        </span>
                    </div>
                </div>

                <div class="col-3 text-center mb-3">
                    <div class="border box-product">
                        <img src="./assets/img/product_1.jpg" alt="" class="product-img" width="100%">
                        <a href="#" class="product-title text-uppercase mt-3 text-decoration-none nav-link">Gọng kính Blancy 8470 C3 Bạc</a>
                        <span class="d-flex justify-content-center gap-2 mb-2 flex-wrap">
                            <del class="price-sale fw-bold">650.000 Đ</del>
                            <span class="price text-danger fw-bold">520.000 Đ</span>
                        </span>
                    </div>
                </div>


            </div>
            <p class="text-center">
                <a href="#" class="btn btn-primary text-uppercase fw-bold">Xem Thêm</a>
            </p>
        </div>
    </section>


    <section class="blog-section my-5 py-5" id="blog_section">
        <div class="container">
            <h4 class="text-center text-uppercase fw-bold title-section pb-5">ROCKYLEN'S BLOG</h4>
            <div class="row justify-content-evenly row-cols-4 py-2 gap-2">
                <!-- Blog -->
                <div class="col-3 text-center p-0 mb-5 box-blog">
                    <img src="./assets/img/avav.png" alt="" class="img-fluid">
                    <a href="#" class="text-uppercase mt-3 fw-bold nav-link pb-3">ÁNH SÁNG XANH TÍM VÀ TRÒNG KÍNH LỌC ÁNH SÁNG XANH TÍM</a>
                    <span class="d-flex justify-content-center gap-2">
                        <p class="fw-normal">Ngày nay, chúng ta đang tiếp xúc với rất nhiều nguồn sáng khác nhau, từ nguồn sáng tự nhiên như</p>
                    </span>
                    <a href="#" class="btn btn-outline-primary text-uppercase fw-bold">Xem Tiếp</a>
                </div>
                <!-- Blog -->
                <!-- Blog -->
                <div class="col-3 text-center p-0 mb-5 box-blog">
                    <img src="./assets/img/Untitled-2-copy.jpg" alt="" class="img-fluid">
                    <a href="#" class="text-uppercase mt-3 fw-bold nav-link pb-3">ÁNH SÁNG XANH TÍM VÀ TRÒNG KÍNH LỌC ÁNH SÁNG XANH TÍM</a>
                    <span class="d-flex justify-content-center gap-2">
                        <p class="fw-normal">Ngày nay, chúng ta đang tiếp xúc với rất nhiều nguồn sáng khác nhau, từ nguồn sáng tự nhiên như</p>
                    </span>
                    <a href="#" class="btn btn-outline-primary text-uppercase fw-bold">Xem Tiếp</a>
                </div>
                <!-- Blog -->
                <!-- Blog -->
                <div class="col-3 text-center p-0 mb-5 box-blog">
                    <img src="./assets/img/asx1.jpg" alt="" class="img-fluid">
                    <a href="#" class="text-uppercase mt-3 fw-bold nav-link pb-3">ÁNH SÁNG XANH TÍM VÀ TRÒNG KÍNH LỌC ÁNH SÁNG XANH TÍM</a>
                    <span class="d-flex justify-content-center gap-2">
                        <p class="fw-normal">Ngày nay, chúng ta đang tiếp xúc với rất nhiều nguồn sáng khác nhau, từ nguồn sáng tự nhiên như</p>
                    </span>
                    <a href="#" class="btn btn-outline-primary text-uppercase fw-bold">Xem Tiếp</a>
                </div>
                <!-- Blog -->
                <!-- Blog -->
                <div class="col-3 text-center p-0 mb-5 box-blog">
                    <img src="./assets/img/dong-cua.png" alt="" class="img-fluid">
                    <a href="#" class="text-uppercase mt-3 fw-bold nav-link pb-3">ÁNH SÁNG XANH TÍM VÀ TRÒNG KÍNH LỌC ÁNH SÁNG XANH TÍM</a>
                    <span class="d-flex justify-content-center gap-2">
                        <p class="fw-normal">Ngày nay, chúng ta đang tiếp xúc với rất nhiều nguồn sáng khác nhau, từ nguồn sáng tự nhiên như</p>
                    </span>
                    <a href="#" class="btn btn-outline-primary text-uppercase fw-bold">Xem Tiếp</a>
                </div>
                <!-- Blog -->



            </div>
        </div>
    </section>


    <section class="readmore-section" id="readmore_section">
        <div class="read-more container">
            <p class="text-center fs-2 fw-semibold">Kính mắt Eye Plus: Không chỉ đẹp, mà còn chất</p>
            <p><a href="#" class="text-decoration-none" style="color: #4872fa;">Kính mắt</a> là một vật dụng sức khoẻ, một phụ kiện thời trang không thể thiếu giúp chúng ta bảo vệ đôi mắt khỏi tác động bên ngoài và khẳng định cá tính của bản thân. Tuy nhiên, bạn đã thực sự hiểu rõ về kính mắt? Và bạn đã biết nên mua kính mắt ở đâu đẹp tại Hà Nội và HCM, chất lượng tốt với giá rẻ? Nếu bạn chưa tìm được câu trả lời, hãy cùng Eye Plus tìm hiểu nhé!</p>
            <span class="read-more-text">
                <p class="fs-3">Phân loại và công dụng của từng loại kính mắt</p>
                <p>Trên thị trường hiện nay có rất nhiều loại <a href="#" class="text-decoration-none" style="color: #4872fa"></a>kính mắt khác nhau, mỗi loại cũng sẽ mang đến công dụng tương ứng. Tuy nhiên, loại kính mắt được sử dụng phổ biến nhất là: kính thuốc, kính an toàn, kính râm và kính bảo vệ chống loá.</p>
                <p class="fs-4">Kính thuốc</p>
                <img src="./assets/img/kinh-mat-gong-vuong.jpg" alt="" class="img-fluid">
                <p class="text-center fw-bold fst-italic my-3">Kính thuốc tròng trong suốt</p>
                <p>Kính thuốc là loại kính được sử dụng để làm giảm bớt ảnh hưởng của các tật khúc xạ như cận thị, viễn thị, loạn thị bằng cách sử dụng các thấu kính hiệu chỉnh có khả năng bẻ cong ánh sáng vào mắt. Kính mắt cận (hay còn được gọi là kính cận) được sử dụng bởi rất nhiều đối tượng, nhưng phổ biến nhất là thanh thiếu niên. Trong khi đó, kính mắt viễn thị phổ biến ở những người cao tuổi.</p>
                <p class="fs-4">Kính mắt an toàn</p>
                <img src="./assets/img/kinh-mat-ha-noi.jpg" alt="" class="img-fluid">
                <p class="text-center fw-bold fst-italic my-3">Kính mắt an toàn bảo vệ cả trước và hai bên mắt</p>
                <p>Kính mắt an toàn được sử dụng cho công nhân xây dựng hoặc kỹ thuật viên phòng thí nghiệm nhằm bảo vệ mắt khỏi các mảnh vụn. Loại kính này có thiết kế ôm sát vào mặt do đó không chỉ giúp bảo vệ phía trước mắt mà còn bảo vệ mắt từ cả hai bên.</p>
                <p>Một số loại kính mắt an toàn được sử dụng để chống lại ánh sáng thông thường hoặc phóng xạ. Một số loại khác lại được sử dụng để bảo vệ mắt trong một số môn thể thao như bơi lội. Để tránh làm rơi mất kính, người sử dụng có thể sử dụng dây buộc kính và đeo vào sau cổ.</p>
                <p class="fs-4">Kính râm</p>
                <img src="./assets/img/kinh-mat-ram-dep.jpg" alt="" class="img-fluid">
                <p class="text-center fw-bold fst-italic my-3">Kính râm tròng màu</p>
                <p>Kính râm là một trong những loại kính mắt rất phổ biến, nó cho phép người sử dụng nhìn tốt hơn trong điều kiện ánh sáng chói vào ban ngày. Đồng thời, loại kính này cũng có thể bảo vệ đôi mắt, chống lại các nguy hiểm của tia cực tím. Loại kính râm đặc trưng nhất là loại sử dụng tròng kính tối màu. Một số loại kính chuyên dụng cho phép nhìn rõ trong điều kiện tối hoặc trong nhà, nhưng khi đi ra nắng sẽ chuyển thành kính râm. (Hướng dẫn chọn mua kính râm)</p>
                <p>Hầu hết kính râm bán sẵn trên thị trường không có công dụng hỗ trợ điều trị các tật về mắt; tuy nhiên, bạn có thể đặt mua kính râm cận/ kính râm viễn theo đơn đặc biệt.</p>
                <p class="fs-4">Kính bảo vệ chống lóa</p>
                <img src="./assets/img/kinh-mat-ram.jpg" alt="" class="img-fluid">
                <p class="text-center fw-bold fst-italic my-3">Kính chống loá</p>
                <p>Kính bảo vệ chống lóa hoặc kính ánh sáng xanh, có thể làm giảm sự phản xạ ánh sáng đi vào mắt. Các ống kính được phủ một lớp chống chói để ngăn phản xạ ánh sáng trong các điều kiện ánh sáng khác nhau. Bằng cách giảm lượng ánh sáng chói trên mắt, thị lực có thể được cải thiện. </p>
            </span>
            <p class="btn btn-outline-light read-more-btn w-100 text-decoration-none fw-medium text-center fs-4 py-3" style="color: #4872fa; cursor: pointer;">Đọc tiếp <i class="fa-solid fa-circle-arrow-down"></i></p>

        </div>
    </section>


    <?php include('public/layouts/scripts.php') ?>
    <?php include('public/layouts/footer.php') ?>
</body>

</html>