<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cars</title>

    <!-- Link Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* about-sec */
        .about-sec {
            width: 100%;
            height: 50vh;
            display: flex;
            align-items: center;
            flex-direction: column;
        }

        .about-sec .top-sec-ab {
            padding: 30px 0 30px;
        }

        .about-sec .top-sec-ab h1 {
            color: #fff;
            background-color: #ed1d24;
            padding: 20px 50px;
            font-size: 50px;
            border-radius: 10px;
        }

        .about-sec .content {
            width: 90%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .about-sec .content .div-img img {
            width: 380px;
            border-radius: 10px;
        }

        .about-sec .content .text {
            margin-left: 50px;
        }

        .about-sec .content .text h3 {
            color: #121416;
            font-size: 40px;
            margin-bottom: 20px;
        }

        .about-sec .content .text h4 {
            color: #121416;
            font-size: 25px;
        }

        .about-sec .content .text h1 {
            color: #ed1d24;
            font-size: 60px;
        }

        .about-sec .content .text span {
            color: #fff;
            background-color: #121416;
            padding: 2px;
            border-radius: 3px;
        }

        .about-sec .content .text p {
            color: #5e5d5d;
            line-height: 1.5;
            margin: 20px 0;
        }

        .about-sec .content .text .social-links a i {
            color: #fff;
            border: 2px solid #ed1d24;
            width: 45px;
            height: 45px;
            text-align: center;
            line-height: 43px;
            border-radius: 50%;
            background-color: #ed1d24;
            margin-right: 15px;
            position: relative;
            top: 0;
            font-size: 22px;
        }

        .about-sec .content .text .social-links a i:hover {
            background-color: transparent;
            color: #ed1d24;
            top: -5px;

        }
    </style>
</head>
<body>
    <section class="about-sec">
        <div class="top-sec-ab">
            <h1>Simple Web Code</h1>
        </div>
        <div class="content">
            <div class="div-img">
                <img src={{ Vite::asset('resources/image/about-img.jpg')}} alt="">
            </div>
            <div class="text">
                <h3>About Me</h3>
                <h4>Hello I'm</h4>
                <h1>Mahmoud Reda</h1>
                <span>Full Stack Web Developer</span>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut doloribus exercitationem non sint est adipisci consequatur, numquam odit ab ratione at id libero architecto voluptatum nemo repellendus nihil. Deserunt explicabo perferendis doloremque illum aperiam quos, quas nam molestiae excepturi facere.</p>
                <div class="social-links">
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-github"></i></a>
                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
