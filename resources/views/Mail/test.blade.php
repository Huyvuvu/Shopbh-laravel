<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Email Thử Nghiệm</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f9;
                color: #333;
                margin: 0;
                padding: 0;
            }
            .container {
                width: 100%;
                max-width: 600px;
                margin: 0 auto;
                background-color: #fff;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }
            .header {
                background-color: #4CAF50;
                color: #fff;
                padding: 10px 20px;
                text-align: center;
                border-radius: 8px 8px 0 0;
            }
            .footer {
                text-align: center;
                margin-top: 20px;
                font-size: 14px;
                color: #888;
            }
            h1 {
                color: #d32f2f;
            }
            p {
                font-size: 16px;
                line-height: 1.6;
            }
            .highlight {
                color: #4CAF50;
                font-weight: bold;
            }
            .cta-button {
                display: inline-block;
                background-color: #4CAF50;
                color: #fff;
                padding: 10px 20px;
                font-size: 16px;
                text-align: center;
                text-decoration: none;
                border-radius: 5px;
                margin-top: 20px;
            }
            .cta-button:hover {
                background-color: #45a049;
            }
            .divider {
                border-top: 1px solid #ddd;
                margin: 20px 0;
            }
            .testimonial {
                background-color: #f9f9f9;
                padding: 15px;
                border-radius: 5px;
                margin-top: 20px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="header">
                <h1>{{$email['title']}}</h1>
            </div>
            <p>Xin chào <span class="highlight">{{$email['name']}}</span>,</p>
            <p>{{$email['body']}}</p>
            
            <!-- Phần Kêu Gọi Hành Động -->
            <div class="divider"></div>
            <p>Chúng tôi rất vui được mang đến cho bạn một cơ hội đặc biệt. Nhấn vào nút dưới đây để tìm hiểu thêm:</p>
            <a href="#" class="cta-button">Khám Phá Ngay</a>
            
            <!-- Phần Đánh Giá -->
            <div class="testimonial">
                <h2>Khách Hàng Nói Gì</h2>
                <p>"Tôi có một trải nghiệm tuyệt vời với dịch vụ của bạn! Đội ngũ hỗ trợ thân thiện và hữu ích. Tôi rất khuyến khích!"</p>
                <p>- Khách Hàng Hài Lòng</p>
            </div>
            
            <!-- Phần Liên Kết Bài Viết -->
            <p>Đừng quên xem những bài viết mới nhất từ chúng tôi:</p>
            <ul>
                <li><a href="#">Cách Tận Dụng Tối Đa Đăng Ký Của Bạn</a></li>
                <li><a href="#">5 Mẹo Để Bắt Đầu Với Sản Phẩm Của Chúng Tôi</a></li>
                <li><a href="#">Câu Chuyện Thành Công Của Khách Hàng: Kết Quả Thực Tế</a></li>
            </ul>

            <p>Cám ơn bạn đã đồng hành cùng chúng tôi!</p>
            <div class="footer">
                <p>Trân trọng,</p>
                <p>Tên Công Ty Của Bạn</p>
                <p>Theo dõi chúng tôi trên <a href="#">Mạng Xã Hội</a></p>
            </div>
        </div>
    </body>
</html>
