<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh mục sản phẩm</title>
    <?php include('public/layouts/head.php') ?>

    <!-- jQuery UI CSS -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- jQuery UI JavaScript -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>

<body>
    <?php include('public/layouts/header.php') ?>
    <!-- Breadcrumb -->
    <div class="bg-body-tertiary">
        <div class="container my-3 pt-3 pb-2">
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./index.php" class="text-decoration-none text-dark">Trang chủ</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> <a href="./products.php" class="text-decoration-none text-dark">Sản phẩm</a></li>
                </ol>
            </nav>

        </div>
    </div>


    <!-- Breadcrumb -->

    <!-- Content -->
    <main class="container py-5">
        <div class="row justify-content-between">
            <aside class="col-md-3 categories">
                <div class="p-3 border border-5 rounded-1">
                    <div class="p-2">
                        <h5 class="fw-bold text-uppercase title-color">Giới tính</h5>
                        <ul class="list-unstyled py-3">
                            <li class="py-1"><input type="checkbox"><span class="nam"></span>Nam</li>
                            <li class="py-1"><input type="checkbox"><span class="nu"></span>Nữ</li>
                            <li class="py-1"><input type="checkbox"><span class="unisex"></span>Unisex</li>
                        </ul>

                    </div>

                    <div class="p-2">
                        <h5 class="fw-bold text-uppercase title-color">Kiểu dáng</h5>
                        <ul class="list-unstyled">
                            <li class="py-1"><input type="checkbox"><span class="chu-nhat"></span>Chữ nhật</li>
                            <li class="py-1"><input type="checkbox"><span class="chu-nhat"></span>Clubmaster</li>
                            <li class="py-1"><input type="checkbox"><span class="chu-nhat"></span>Đa giác</li>
                            <li class="py-1"><input type="checkbox"><span class="mat-meo"></span>Mắt mèo</li>
                            <li class="py-1"><input type="checkbox"><span class="oval"></span>Oval</li>
                        </ul>
                    </div>


                    <div class="p-2">
                        <h5 class="fw-bold text-uppercase title-color">Chất liệu</h5>
                        <ul class="list-unstyled">
                            <li class="py-1"><input type="checkbox"> Kim loại cao cấp</li>
                            <li class="py-1"><input type="checkbox"> Nhựa acetate</li>
                            <li class="py-1"><input type="checkbox"> Nhựa cao cấp</li>
                            <li class="py-1"><input type="checkbox"> Thép</li>
                            <li class="py-1"><input type="checkbox"> Titan</li>
                        </ul>
                    </div>

                    <div class="p-2">
                        <h5 class="fw-bold text-uppercase title-color">Giá</h5>
                        <div id="slider-range"></div>
                        <div class="mt-3 d-flex flex-row align-items-center justify-content-center gap-3">
                            <strong id="selected-range"></strong>
                            <a href="#" class="btn btn-primary w-25 text-uppercase">Lọc</a>
                        </div>
                    </div>

                    <hr>

                    <div class="p-2">
                        <h5 class="fw-bold text-uppercase title-color pb-3">Sản phẩm vừa xem</h5>
                        <div class="product-last-seen">
                            <span class="title-product title-color text-uppercase fst-italic">Gọng kính Eye Plus 9812 C11 Đen</span>
                            <span class="price-product"><del>280.000 ₫</del></span>
                            <span class="sale-price-product fw-bold" style="color: red;">280.000 ₫</span>
                            <img src="./assets/img/product_1.jpg" alt="" class="img-product img-fluid" width="25%">
                        </div>
                        <hr>
                        <div class="product-last-seen">
                            <span class="title-product title-color text-uppercase fst-italic">Gọng kính Eye Plus 9812 C11 Đen</span>
                            <span class="price-product"><del>280.000 ₫</del></span>
                            <span class="sale-price-product fw-bold" style="color: red;">280.000 ₫</span>
                            <img src="./assets/img/product_1.jpg" alt="" class="img-product img-fluid" width="25%">
                        </div>

                    </div>
                </div>

            </aside>


            <div class="col-md-9">
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
                <!-- Product -->
                <div class="container">
                    <select class="form-select w-25 shadow-none" aria-label="Default select example">
                        <option selected>Sắp xếp theo</option>
                        <option value="1">Sắp xếp theo <span class="fw-bold">Ngày</span></option>
                        <option value="2">Sắp xếp theo <strong>Tên</strong></option>
                        <option value="3">Sắp xếp theo <strong>Đánh giá</strong></option>
                    </select>
                    <ul class="list-unstyled d-flex gap-3 px-3 flex-row d-flex my-4 py-4 bg-body-secondary align-items-center">
                        <span class="text-uppercase fw-bold">Sắp xếp theo: </span>
                        <li><a href="#" class="text-decoration-none nav-link">Giá từ thấp đến cao</a></li>
                        <li><a href="#" class="text-decoration-none nav-link">Giá từ cao đến thấp</a></li>
                        <li><a href="#" class="text-decoration-none nav-link">Hàng mới</a></li>
                        <li><a href="#" class="text-decoration-none nav-link">Quan tâm nhiều</a></li>
                    </ul>

                    <div class="row justify-content-evenly row-cols-3 py-2 gap-3">
                        <!-- Product -->
                        <div class="col-2 border text-center box-product p-0 mb-5">
                            <img src="./assets/img/product_1.jpg" alt="" class="img-fluid">
                            <a href="#" class="text-uppercase mt-3 text-decoration-none nav-link px-3">Gọng kính Blancy 8470 C3 Bạc</a>
                            <span class="d-flex justify-content-center gap-2">
                                <del class="price-sale fw-bold">650.000 Đ</del>
                                <p class="price text-danger fw-bold">520.000 Đ</p>
                            </span>
                        </div>
                        <!-- Product -->
                        <!-- Product -->
                        <div class="col-2 border text-center box-product p-0 mb-5">
                            <img src="./assets/img/product_2.png" alt="" class="img-fluid">
                            <a href="#" class="text-uppercase mt-3 text-decoration-none nav-link px-3">Gọng kính Blancy 8470 C3 Bạc</a>
                            <span class="d-flex justify-content-center gap-2">
                                <del class="price-sale fw-bold">650.000 Đ</del>
                                <p class="price text-danger fw-bold">520.000 Đ</p>
                            </span>
                        </div>
                        <!-- Product -->
                        <!-- Product -->
                        <div class="col-2 border text-center box-product p-0 mb-5">
                            <img src="./assets/img/product_1.jpg" alt="" class="img-fluid">
                            <a href="#" class="text-uppercase mt-3 text-decoration-none nav-link px-3">Gọng kính Blancy 8470 C3 Bạc</a>
                            <span class="d-flex justify-content-center gap-2">
                                <del class="price-sale fw-bold">650.000 Đ</del>
                                <p class="price text-danger fw-bold">520.000 Đ</p>
                            </span>
                        </div>
                        <!-- Product -->

                        <!-- Product -->
                        <div class="col-2 border text-center box-product p-0 mb-5">
                            <img src="./assets/img/product_2.png" alt="" class="img-fluid">
                            <a href="#" class="text-uppercase mt-3 text-decoration-none nav-link px-3">Gọng kính Blancy 8470 C3 Bạc</a>
                            <span class="d-flex justify-content-center gap-2">
                                <del class="price-sale fw-bold">650.000 Đ</del>
                                <p class="price text-danger fw-bold">520.000 Đ</p>
                            </span>
                        </div>
                        <!-- Product -->
                        <!-- Product -->
                        <div class="col-2 border text-center box-product p-0 mb-5">
                            <img src="./assets/img/product_1.jpg" alt="" class="img-fluid">
                            <a href="#" class="text-uppercase mt-3 text-decoration-none nav-link px-3">Gọng kính Blancy 8470 C3 Bạc</a>
                            <span class="d-flex justify-content-center gap-2">
                                <del class="price-sale fw-bold">650.000 Đ</del>
                                <p class="price text-danger fw-bold">520.000 Đ</p>
                            </span>
                        </div>
                        <!-- Product -->

                        <!-- Product -->
                        <div class="col-2 border text-center box-product p-0 mb-5">
                            <img src="./assets/img/product_2.png" alt="" class="img-fluid">
                            <a href="#" class="text-uppercase mt-3 text-decoration-none nav-link px-3">Gọng kính Blancy 8470 C3 Bạc</a>
                            <span class="d-flex justify-content-center gap-2">
                                <del class="price-sale fw-bold">650.000 Đ</del>
                                <p class="price text-danger fw-bold">520.000 Đ</p>
                            </span>
                        </div>
                        <!-- Product -->


                    </div>

                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link shadow-none" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link shadow-none" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- Product -->
            </div>
        </div>



    </main>

    <!-- Content -->
    <?php include('public/layouts/scripts.php') ?>
    <?php include('public/layouts/footer.php') ?>

    <script>
        $(document).ready(function() {
            $("#slider-range").slider({
                range: true,
                min: 280000,
                max: 5365000,
                values: [280000, 5365000],
                slide: function(event, ui) {
                    var minValue = formatCurrency(ui.values[0]);
                    var maxValue = formatCurrency(ui.values[1]);
                    $("#selected-range").text(minValue + " - " + maxValue);
                },
            });
            var initialValue = formatCurrency($("#slider-range").slider("values", 0));
            var maxValue = formatCurrency($("#slider-range").slider("values", 1));
            $("#selected-range").text(initialValue + " - " + maxValue);
        });

        function formatCurrency(value) {
            return new Intl.NumberFormat('vi-VN', {
                style: 'currency',
                currency: 'VND'
            }).format(value);
        }
    </script>
</body>

</html>