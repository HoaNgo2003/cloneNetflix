<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netflix Việt Nam - Xem chương trình truyền hình trực tuyến</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style/home.style.css">
</head>

<body>
    <div class="header">
        <div class="header-menu">
            <div class="left-section">
                <img src="images/Logos-Readability-Netflix-logo.png" alt="">
            </div>
            <div class="right-section">
                <div class="language">
                    <i class="fa fa-solid fa-language"></i>
                    <select name="" id="">
                        <option value="">Tiếng Việt</option>
                        <option value="">English</option>
                    </select>
                </div>
                <button onclick='window.location.href = "moviepage.php"'
                >
                    Khám phá
                </button>
            </div>
        </div>
        <div class="header-content">
            <p class="title">Chương trình truyền hình, phim không giới hạn và nhiều nội dung khác</p>
            <p class="desc">Xem ở mọi nơi. Hủy bất kỳ lúc nào.</p>
            <p class="contact-message">Bạn đã sẵn sàng xem chưa? Nhập email hoặc số điện thoại di động để tạo hoặc kích
                hoạt lại tư cách thành viên của bạn.</p>
            <div class="contact">
                <input type="text" placeholder="Email hoặc số điện thoại di động">
                <button>Bắt đầu <i class="fa-solid fa-chevron-right"></i></button>
            </div>
        </div>
    </div>
    <div class="section-tv">
        <div class="container">
            <div class="section-content">
                <p class="title">Thưởng thức trên TV của bạn</p>
                <p class="desc">Xem trên TV thông minh, Playstation, Xbox, Chromecast, Apple TV, đầu phát Blu-ray và
                    nhiều thiết bị khác.</p>
            </div>
            <div class="tv">
                <img src="images/tv.png" alt="">
            </div>
        </div>

    </div>
    <div class="section-tv mobile">
        <div class="container">
            <div class="tv" id="mobile">
                <img src="images/mobile-0819.jpg" alt="">
            </div>
            <div class="section-content">
                <p class="title moblie">Tải xuống nội dung để xem ngoại tuyến</p>
                <p class="desc">Lưu lại những nội dung yêu thích một cách dễ dàng và luôn có thứ để xem.</p>
            </div>

        </div>

    </div>
    <div class="section-tv">
        <div class="container">
            <div class="section-content">
                <p class="title">Xem ở mọi nơi</p>
                <p class="desc">Phát trực tuyến không giới hạn phim và chương trình truyền hình trên điện thoại, máy
                    tính bảng, máy tính xách tay và TV.</p>
            </div>
            <div class="tv">
                <img src="images/device-pile-vn.png" alt="">
            </div>
        </div>

    </div>
    <div class="section-tv mobile">
        <div class="container">
            <div class="tv" id="mobile">
                <img class="img-content" src="images/treem.png" alt="">
            </div>
            <div class="section-content">
                <p class="title moblie">Tạo hồ sơ cho trẻ em</p>
                <p class="desc">Đưa các em vào những cuộc phiêu lưu với nhân vật được yêu thích trong một không gian
                    riêng. Tính năng này đi kèm miễn phí với tư cách thành viên của bạn.</p>
            </div>

        </div>

    </div>
    <div class="question">
        <p class="title">Câu hỏi thường gặp</p>

        <div class="question-item">
            <div class="question-header">
                <p class="question-title">Netflix là gì?</p>
                <i class="fa-solid fa-plus"></i>
            </div>
            <p class="answer">

                Netflix là dịch vụ phát trực tuyến mang đến đa dạng các loại chương trình truyền hình, phim,
                anime, phim tài liệu đoạt giải thưởng và nhiều nội dung khác trên hàng nghìn thiết bị có kết nối
                Internet.
                <br>
                <br>
                Bạn có thể xem bao nhiêu tùy thích, bất cứ lúc nào bạn muốn mà không gặp phải một quảng cáo nào
                – tất cả chỉ với một mức giá thấp hàng tháng. Luôn có những nội dung mới để bạn khám phá và
                những chương trình truyền hình, phim mới được bổ sung mỗi tuần!

            </p>
        </div>
        <div class="question-item">
            <div class="question-header">
                <p class="question-title">Tôi phải trả bao nhiêu tiền để xem Netflix?</p>
                <i class="fa-solid fa-plus"></i>
            </div>
            <p class="answer">

                Xem Netflix trên điện thoại thông minh, máy tính bảng, TV thông minh, máy tính xách tay hoặc thiết bị
                phát trực tuyến, chỉ với một khoản phí cố định hàng tháng. Các gói dịch vụ với mức giá từ 70.000 ₫ đến
                260.000 ₫ mỗi tháng. Không phụ phí, không hợp đồng.
            </p>
        </div>
        <div class="question-item">
            <div class="question-header">
                <p class="question-title">Tôi có thể xem ở đâu?</p>
                <i class="fa-solid fa-plus"></i>
            </div>
            <p class="answer">
                Xem mọi lúc, mọi nơi. Đăng nhập bằng tài khoản Netflix của bạn để xem ngay trên trang web netflix.com từ
                máy tính cá nhân, hoặc trên bất kỳ thiết bị nào có kết nối Internet và có cài đặt ứng dụng Netflix, bao
                gồm TV thông minh, điện thoại thông minh, máy tính bảng, thiết bị phát đa phương tiện trực tuyến và máy
                chơi game.
                <br>
                <br>
                Bạn cũng có thể tải xuống các chương trình yêu thích bằng ứng dụng trên iOS, Android hoặc Windows 10.
                Vào phần nội dung đã tải xuống để xem trong khi di chuyển và khi không có kết nối Internet. Mang Netflix
                theo bạn đến mọi nơi.
            </p>
        </div>
        <div class="question-item">
            <div class="question-header">
                <p class="question-title">Làm thế nào để huỷ?</p>
                <i class="fa-solid fa-plus"></i>
            </div>
            <p class="answer">
                Netflix rất linh hoạt. Không có hợp đồng phiền toái, không ràng buộc. Bạn có thể dễ dàng hủy tài khoản
                trực tuyến chỉ trong hai cú nhấp chuột. Không mất phí hủy – bạn có thể bắt đầu hoặc ngừng tài khoản bất
                cứ lúc nào.
            </p>
        </div>
        <div class="question-item">
            <div class="question-header">
                <p class="question-title">Tôi có thể xem gì trên Netflix?</p>
                <i class="fa-solid fa-plus"></i>
            </div>
            <p class="answer">
                Netflix có một thư viện phong phú gồm các phim truyện, phim tài liệu, chương trình truyền hình, anime,
                tác phẩm giành giải thưởng của Netflix và nhiều nội dung khác. Xem không giới hạn bất cứ lúc nào bạn
                muốn.
            </p>
        </div>
        <div class="question-item">
            <div class="question-header">
                <p class="question-title">Netflix có phù hợp cho trẻ em không?</p>
                <i class="fa-solid fa-plus"></i>
            </div>
            <p class="answer">
                Trải nghiệm Netflix Trẻ em có sẵn trong gói dịch vụ của bạn, trao cho phụ huynh quyền kiểm soát trong
                khi các em có thể thưởng thức các bộ phim và chương trình phù hợp cho gia đình tại không gian riêng.
                <br>
                <br>
                Hồ sơ Trẻ em đi kèm tính năng kiểm soát của cha mẹ (được bảo vệ bằng mã PIN), cho phép bạn giới hạn độ
                tuổi cho nội dung con mình được phép xem, cũng như chặn những phim hoặc chương trình mà bạn không muốn
                các em nhìn thấy.
            </p>
        </div>
        <div class="contact-question">
            <p>Bạn đã sẵn sàng xem chưa? Nhập email hoặc số điện thoại di động để tạo hoặc kích hoạt lại tư cách thành
                viên của bạn.</p>
            <div class="container-input">
                <input type="text" placeholder="Email hoặc số điện thoại di động">
                <button>Bắt đầu <i class="fa-solid fa-chevron-right"></i></button>
            </div>
        </div>
    </div>
    <div class="footer">
        <p> Bạn có câu hỏi? Liên hệ với chúng tôi.</p>
       <div class="container-section">
        <ul class="question-section">
            
            <li> Câu hỏi thường gặp</li>
            <li> Trung tâm trợ giúp</li>
            <li> Tài khoản</li>
            <li> Trung tâm đa phương tiện</li>
        </ul>
        <ul  class="question-section">
            <li> Quan hệ với nhà đầu tư</li>
            <li> Việc làm</li>
            <li> Các cách xem</li>
            <li> Điều khoản sử dụng</li>
        </ul>
        <ul class="question-section">
            <li> Quyền riêng tư</li>
            <li> Tùy chọn cookie</li>
            <li> Thông tin doanh nghiệp</li>
            <li> Liên hệ với chúng tôi</li>
        </ul>        
        <ul class="question-section">
            <li> Kiểm tra tốc độ</li>
            <li> Thông báo pháp lý</li>
            <li> Chỉ có trên Netflix</li>
             
        </ul>  
       </div>        
           
         
        <div class="language">
            <i class="fa fa-solid fa-language"></i>
            <select name="" id="">
                <option value="">Tiếng Việt</option>
                <option value="">English</option>
            </select>
        </div>
        <p>Netflix Việt Nam</p>
    </div>
</body>

</html>