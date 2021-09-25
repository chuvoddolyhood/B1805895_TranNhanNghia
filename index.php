<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Starbucks Website</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <div class="circle"></div>
        <header>
            <a href="#"><img src="./modules_client/photo/logo.jpg" class="logo"></a>
            <div class="toggle" onclick="toggleMenu();"></div>
            <ul class="navigation">
                <li><a href="#">Trang chủ</a></li>
                <li><a href="#">Sản phẩm</a></li>
                <li><a href="#">Giỏ hàng</a></li>
                <li><a href="#">Liên hệ</a></li>
            </ul>
        </header>
        <div class="content">
            <div class="textBox">
                <h2>Your true stripes<br>It's <span>Westside</span></h2>
                <p>Phong cách, chuyển động của bạn, ôm trọn trong các sọc kẻ.</p>
                <a href="#">Xem thêm</a>
            </div>
            <div class="imgBox">
                <img src="./modules_client/photo/img1.png" class="starbucks">
            </div>
        </div>
        <ul class="thumb">
            <li><img src="./modules_client/photo/thumb1.png" onclick="imgSlider('./modules_client/photo/img1.png'); changeCircleColor('#a1a19f')"></li>
            <li><img src="./modules_client/photo/thumb2.png" onclick="imgSlider('./modules_client/photo/img2.png'); changeCircleColor('#9a3936')"></li>
            <li><img src="./modules_client/photo/thumb3.png" onclick="imgSlider('./modules_client/photo/img3.png'); changeCircleColor('#aa6147')"></li>
        </ul>
        <ul class="sci">
            <li><a href="#"><img src="./modules_client/photo/facebook.png"></a></li>
            <li><a href="#"><img src="./modules_client/photo/twitter.png"></a></li>
            <li><a href="#"><img src="./modules_client/photo/instagram.png"></a></li>
        </ul>
    </section>
    <section>
        <h2>abc</h2>
    </section>  
    <script type="text/javascript">
        function imgSlider(anything){
            document.querySelector('.starbucks').src = anything;
        }

        function changeCircleColor(color){
            const circle = document.querySelector('.circle');
            circle.style.background = color;
        }

        function toggleMenu(){
            var menuToggle = document.querySelector('.toggle');
            var navigation = document.querySelector('.navigation');
            menuToggle.classList.toggle('active');
            navigation.classList.toggle('active');
        }
    </script>
</body>
</html>