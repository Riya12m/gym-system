<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="keywords" content="codecell, tsec, contact, contact us, harsh kapadia, html, css, js, vanilla css">
    <meta name="description" content="A static contact us page for TSEC CodeCell by Harsh Kapadia">
    <meta name="author" content="Harsh Kapadia">

    <link href="https://fonts.googleapis.com/css2?family=Overpass+Mono&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./static/css/base.css">
    <link rel="stylesheet" href="./static/css/navbar.css">
    <link rel="stylesheet" href="./static/css/main.css">
    <link rel="stylesheet" href="./static/css/footer.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: black;
            font-family: 'Overpass Mono', monospace;
            color: #f5f5f5;
        }

        a {
            text-decoration: none;
            color: #f5f5f5;
        }

        a:hover {
            color: #69f0ae;
        }

        .hide {
            display: none;
        }

        footer {
            display: flex;
            justify-content: space-around;
            align-items: center;
            height: 20vh;
            width: 75%;
            margin: auto;
            opacity: 0.2;
            border-top: 1px solid #212121;
        }

        footer:hover {
            animation: fade 0.3s ease;
            opacity: 0.9;
        }

        .social-media-img {
            height: 5vh;
        }

        .codecell-img {
            height: 10vh;
        }

        @keyframes fade {
            0% {
                opacity: 0.2;
            }

            100% {
                opacity: 0.9;
            }
        }

        /* Media queries */

        @media screen and (max-width: 1295px) {
            footer {
                width: 95%;
            }
        }

        @media screen and (max-width: 500px) {
            footer {
                opacity: 0.9;
            }
        }

        main {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 90%;
            margin: auto;
        }

        .title {
            font-size: 50px;
            font-weight: bold;
            padding: 1.5% 0;
        }

        .title-info {
            padding-bottom: 2%;
        }

        .form {
            display: flex;
            flex-direction: column;
            width: 60%;
            padding: 2%;
        }

        .input-group,
        .textarea-group {
            padding: 1% 0;
        }

        input,
        textarea {
            color: inherit;
            width: 100%;
            background-color: transparent;
            border: none;
            border-bottom: 1px solid #757575;
            padding: 1.5%;
            font-size: 20px;
        }

        input:focus,
        textarea:focus {
            background-color: transparent;
            outline: transparent;
            border-bottom: 2px solid #69f0ae;
        }

        input::placeholder,
        textarea::placeholder {
            color: transparent;
        }

        label {
            color: #757575;
            position: relative;
            left: 0.5em;
            top: -2em;
            cursor: auto;
            transition: 0.3s ease all;
        }

        input:focus~label,
        input:not(:placeholder-shown)~label {
            top: -4em;
            color: #69f0ae;
            font-size: 15px;
        }

        textarea:focus~label,
        textarea:not(:placeholder-shown)~label {
            top: -10.5em;
            color: #69f0ae;
            font-size: 15px;
        }

        .button-div {
            display: flex;
            justify-content: center;
        }

        button {
            padding: 2%;
            width: 50%;
            border: 1px solid;
            border-color: #212121;
            border-radius: 5px;
            font-family: inherit;
            font-size: 18px;
            background-color: black;
            color: inherit;
            box-shadow: 0 0 10px #212121;
        }

        button:hover {
            background-color: #424242;
            color: #69f0ae;
            cursor: pointer;
        }


        /* Media queries */

        @media screen and (max-width: 1200px) {
            .form {
                width: 70%;
            }
        }

        @media screen and (max-width: 680px) {
            .form {
                width: 90%;
            }
        }

        @media screen and (max-width: 500px) {
            .title {
                font-size: 40px;
                padding-top: 6%;
            }

            .title-info {
                font-size: 13px;
            }

            .form {
                padding: 6% 4%;
                padding-top: 15%;
            }

            .input-group,
            .textarea-group {
                padding: 3% 0;
            }

            input,
            textarea {
                font-size: 15px;
            }

            input:focus~label,
            input:not(:placeholder-shown)~label {
                top: -3.5em;
                left: 0.1em;
            }

            textarea:focus~label,
            textarea:not(:placeholder-shown)~label {
                top: -8.5em;
                left: 0.2em;
            }

            button {
                font-size: 15px;
            }
        }

        .navbar {
            height: 10vh;
            display: flex;
            align-items: center;
        }

        .left-side {
            display: flex;
            align-items: center;
            flex: 1;
        }

        .logo {
            padding: 0 2%;
        }

        .logo img {
            height: 7vh;
        }

        ul {
            display: flex;
            align-items: center;
            justify-content: space-around;
            width: 50%;
        }

        li {
            list-style: none;
        }

        .left-side li {
            height: 10vh;
            display: flex;
            align-items: center;
        }

        .right-side {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            flex: 0.1;
        }

        .account {
            display: flex;
            align-items: center;
            margin-right: 30%;
        }

        .account:hover {
            cursor: pointer;
        }

        .right-side img {
            height: 5vh;
            border-radius: 50px;
            margin-right: 20%;
        }

        .dropdown-caret {
            border-top-style: solid;
            border-top-width: 4px;
            border-right: 4px solid transparent;
            border-bottom: 0 solid transparent;
            border-left: 4px solid transparent;
        }

        .dropdown {
            position: absolute;
            top: 8vh;
            right: 1vh;
            border: 0.5px solid;
            border-radius: 5px;
            border-color: #212121;
            padding: 0.5%;
            box-shadow: 0 0 10px #212121;
            background-color: black;
            z-index: 2;
        }

        .user-name {
            margin-bottom: 5%;
            padding: 2%;
            width: 180px;
            border-bottom: 1px solid #212121;
            color: #757575;
        }

        .user-name:hover {
            cursor: default;
        }

        .dropdown ul {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            width: 180px;
        }

        .dropdown li {
            padding: 2%;
            width: 180px;
        }

        .dropdown li:hover {
            background-color: #424242;
            border-radius: 3px;
        }


        /* Media query */

        @media screen and (max-width: 1200px) {
            .logo {
                flex: 1;
                display: flex;
                justify-content: center;
            }

            .burger-menu {
                flex: 0.1;
                padding-left: 2%;
            }

            .burger-menu:hover {
                cursor: pointer;
            }

            .line-1,
            .line-2,
            .line-3 {
                width: 25px;
                height: 3px;
                background-color: #f5f5f5;
                margin: 5px;
            }

            .burger-menu-dropdown {
                display: flex;
                flex-direction: column;
                position: absolute;
                top: 10vh;
                left: 0;
                width: 100%;
                margin: auto;
                z-index: 1;
                background-color: rgba(0, 0, 0, 0.9);
                /* RGB of black */
            }

            .burger-menu-dropdown li {
                width: 90vw;
                display: flex;
                justify-content: center;
            }

            .burger-menu-dropdown li:hover {
                color: #69f0ae;
                background-color: rgba(66, 66, 66, 0.3);
                border-radius: 8px;
            }

            .hide-burger-menu {
                display: none;
            }
        }
    </style>

    <link rel="shortcut icon" href="./static/img/codecell_logo.svg" type="image/x-icon" sizes="any">

    <script defer src="./static/js/account_dropdown.js"></script>
    <script defer src="./static/js/burger_menu_dropdown.js"></script>
    <link rel="icon" href=
    https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSKKpyvG1zKfyYnHmlVtrlBFs0qU_UfwrgbNw&usqp=CAU              type="image/x-icon">
    <title> Web Developer</title>
</head>

<body>
    <nav class="navbar">
        <div class="left-side">
            <div class="burger-menu">
                <div class="line-1"></div>
                <div class="line-2"></div>
                <div class="line-3"></div>
            </div>

            <div class="logo">
                <a href="#"><img src="akash5.jpg" alt="TSEC CodeCell"></a>
            </div>

            <ul class="navbar-main-ul hide-burger-menu burger-menu-dropdown">
                <a href="#">
                    <li>Home</li>
                </a>
                <a href="#">
                    <li>About</li>
                </a>
                <a href="#">
                    <li>Challenges</li>
                </a>
                <a href="#">
                    <li>Ranklist</li>
                </a>
                <a href="#">
                    <li>TSEC Hacks</li>
                </a>
                <a href="#">
                    <li>Contact Us</li>
                </a>
            </ul>
        </div>
<!-- 
        <div class="right-side">
            <div class="account">
                <img src="./static/img/harsh_kapadia_pic.jpg" alt="HK">

                <div class="dropdown-caret"></div>
            </div>

            <div class="dropdown hide">
                <div class="user-name">HarshKapadia2</div>

                <ul>
                    <a href="#">
                        <li>Your profile</li>
                    </a>
                    <a href="#">
                        <li>Settings</li>
                    </a>
                    <a href="#">
                        <li>Log Out</li>
                    </a>
                </ul>
            </div>
        </div> -->
    </nav>

    <main style="border: 2px solid red;width: 50%;height: auto;">
        <div class="title">Contact us</div>
        <div class="title-info">We'll get back to you soon!</div>

        <form action="" method="" class="form">
            <div class="input-group">
                <input type="text" name="first_name" id="first-name" placeholder="First name">
                <label for="first-name">First name</label>
            </div>

            <div class="input-group">
                <input type="text" name="last_name" id="last-name" placeholder="Last Name">
                <label for="last-name">Last name</label>
            </div>

            <div class="input-group">
                <input type="email" name="e-mail" id="e-mail" placeholder="e-mail">
                <label for="e-mail">e-mail</label>
            </div>

            <div class="textarea-group">
                <textarea name="message" id="message" rows="5" placeholder="Message"></textarea>
                <label for="message">Message</label>
            </div>

            <div class="button-div">
                <button type="submit">Send</button>
            </div>
        </form>
    </main>

    <style>
        *,
        *:after,
        *:before {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }

        .clearfix:before,
        .clearfix:after {
            display: table;
            content: '';
        }

        .clearfix:after {
            clear: both;
        }

        body {
            background: #2f3238;
            color: #fff;
            font-weight: 400;
            font-size: 1em;
            font-family: 'Raleway', Arial, sans-serif;
        }

        a {
            outline: none;
            color: #3498db;
            text-decoration: none;
        }

        a:hover,
        a:focus {
            color: #528cb3;
        }

        section {
            padding: 1em;
            text-align: center;
        }

        .content {
            margin: 0 auto;
            max-width: 1000px;
        }

        .content>h2 {
            clear: both;
            margin: 0;
            padding: 4em 1% 0;
            color: #484B54;
            font-weight: 800;
            font-size: 1.5em;
        }

        .content>h2:first-child {
            padding-top: 0em;
        }

        /* Header */
        .codrops-header {
            margin: 0 auto;
            padding: 4em 1em;
            text-align: center;
        }

        .codrops-header h1 {
            margin: 0;
            font-weight: 800;
            font-size: 4em;
            line-height: 1.3;
        }

        .codrops-header h1 span {
            display: block;
            padding: 0 0 0.6em 0.1em;
            color: #74777b;
            font-weight: 300;
            font-size: 45%;
        }

        /* Demo links */
        .codrops-demos {
            clear: both;
            padding: 1em 0 0;
            text-align: center;
        }

        .content+.codrops-demos {
            padding-top: 5em;
        }

        .codrops-demos a {
            display: inline-block;
            margin: 0 5px;
            padding: 1em 1.5em;
            text-transform: uppercase;
            font-weight: bold;
        }

        .codrops-demos a:hover,
        .codrops-demos a:focus,
        .codrops-demos a.current-demo {
            background: #3c414a;
            color: #fff;
        }

        /* To Navigation Style */
        .codrops-top {
            width: 100%;
            text-transform: uppercase;
            font-weight: 800;
            font-size: 0.69em;
            line-height: 2.2;
        }

        .codrops-top a {
            display: inline-block;
            padding: 1em 2em;
            text-decoration: none;
            letter-spacing: 1px;
        }

        .codrops-top span.right {
            float: right;
        }

        .codrops-top span.right a {
            display: block;
            float: left;
        }

        .codrops-icon:before {
            margin: 0 4px;
            text-transform: none;
            font-weight: normal;
            font-style: normal;
            font-variant: normal;
            font-family: 'codropsicons';
            line-height: 1;
            speak: none;
            -webkit-font-smoothing: antialiased;
        }

        .codrops-icon-drop:before {
            content: "\e001";
        }

        .codrops-icon-prev:before {
            content: "\e004";
        }

        /* Related demos */
        .related {
            clear: both;
            padding: 6em 1em;
            font-size: 120%;
        }

        .related>a {
            display: inline-block;
            margin: 20px 10px;
            padding: 25px;
            border: 1px solid #4f7f90;
            text-align: center;
        }

        .related a:hover {
            border-color: #39545e;
        }

        .related a img {
            max-width: 100%;
            opacity: 0.8;
        }

        .related a:hover img,
        .related a:active img {
            opacity: 1;
        }

        .related a h3 {
            margin: 0;
            padding: 0.5em 0 0.3em;
            max-width: 300px;
            text-align: left;
        }

        /* Demo ad design */
        body #cdawrap {
            background: none;
            top: 50px;
            border: none;
        }

        body #cdawrap a {
            color: #fff !important;
        }

        body #cda-remove {
            color: #fff;
        }

        @media screen and (max-width: 25em) {
            .codrops-header {
                font-size: 75%;
            }

            .codrops-icon span {
                display: none;
            }
        }

        .grid {
            position: relative;
            clear: both;
            margin: 0 auto;
            padding: 1em 0 4em;
            max-width: 1000px;
            list-style: none;
            text-align: center;
        }

        /* Common style */
        .grid figure {
            position: relative;
            float: left;
            overflow: hidden;
            margin: 10px 1%;
            min-width: 320px;
            max-width: 480px;
            max-height: 360px;
            width: 48%;
            height: auto;
            background: #3085a3;
            text-align: center;
            cursor: pointer;
        }

        .grid figure img {
            position: relative;
            display: block;
            min-height: 100%;
            max-width: 100%;
            opacity: 0.8;
        }

        .grid figure figcaption {
            padding: 2em;
            color: #fff;
            text-transform: uppercase;
            font-size: 1.25em;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
        }

        .grid figure figcaption::before,
        .grid figure figcaption::after {
            pointer-events: none;
        }

        .grid figure figcaption,
        .grid figure figcaption>a {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        /* Anchor will cover the whole item by default */
        /* For some effects it will show as a button */
        .grid figure figcaption>a {
            z-index: 1000;
            text-indent: 200%;
            white-space: nowrap;
            font-size: 0;
            opacity: 0;
        }

        .grid figure h2 {
            word-spacing: -0.15em;
            font-weight: 300;
        }

        .grid figure h2 span {
            font-weight: 800;
        }

        .grid figure h2,
        .grid figure p {
            margin: 0;
        }

        .grid figure p {
            letter-spacing: 1px;
            font-size: 68.5%;
        }

        /* Individual effects */

        /*---------------*/
        /***** Julia *****/
        /*---------------*/

        figure.effect-julia {
            background: #2f3238;
        }

        figure.effect-julia img {
            max-width: none;
            height: 400px;
            -webkit-transition: opacity 1s, -webkit-transform 1s;
            transition: opacity 1s, transform 1s;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
        }

        figure.effect-julia figcaption {
            text-align: left;
        }

        figure.effect-julia h2 {
            position: relative;
            padding: 0.5em 0;
        }

        figure.effect-julia p {
            display: inline-block;
            margin: 0 0 0.25em;
            padding: 0.4em 1em;
            background: rgba(255, 255, 255, 0.9);
            color: #2f3238;
            text-transform: none;
            font-weight: 500;
            font-size: 75%;
            -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
            transition: opacity 0.35s, transform 0.35s;
            -webkit-transform: translate3d(-360px, 0, 0);
            transform: translate3d(-360px, 0, 0);
        }

        figure.effect-julia p:first-child {
            -webkit-transition-delay: 0.15s;
            transition-delay: 0.15s;
        }

        figure.effect-julia p:nth-of-type(2) {
            -webkit-transition-delay: 0.1s;
            transition-delay: 0.1s;
        }

        figure.effect-julia p:nth-of-type(3) {
            -webkit-transition-delay: 0.05s;
            transition-delay: 0.05s;
        }

        figure.effect-julia:hover p:first-child {
            -webkit-transition-delay: 0s;
            transition-delay: 0s;
        }

        figure.effect-julia:hover p:nth-of-type(2) {
            -webkit-transition-delay: 0.05s;
            transition-delay: 0.05s;
        }

        figure.effect-julia:hover p:nth-of-type(3) {
            -webkit-transition-delay: 0.1s;
            transition-delay: 0.1s;
        }

        figure.effect-julia:hover img {
            opacity: 0.4;
            -webkit-transform: scale3d(1.1, 1.1, 1);
            transform: scale3d(1.1, 1.1, 1);
        }

        figure.effect-julia:hover p {
            opacity: 1;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }
    </style>

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- <h1>Awesome Image Hover Pure CSS Part II</h1> -->
    <div class="content">
       
        <div class="grid">
            <figure class="effect-julia">
                <img src="akash12.jpg" alt="img21" />
                <figcaption>
                    <h2>Akash <span>Takawane</span></h2>
                    <div>
                        <p>Name : Akash Takawane</p>
                        <p>Address : A/P-Pargaon <br> Tal-Daund Dist-Pune</p>
                        <p>Contact No : 9420150415</p>
                        <p>Pin Code : 412203</p><br>
                        <p>Prof : Web Developer</p>
                        <!-- <p>And dives into the morning light</p> -->
                    </div>
                    <!-- <a href="#">View more</a> -->
                </figcaption>
            </figure>
            <figure class="effect-julia">
                <img src="akash5.jpg" alt="img22" />
                <figcaption>
                    <h2>Abhishek <span>Chaudhari</span></h2>
                    <div>
                        <p>Name : Abhishek Chaudhari</p>
                        <p>Address : A/P-Pimplachiwadi <br> Tal-Daund Dist-Pune</p>
                        <p>Contact No : 8999964541</p>
                        <p>Pin Code : 412203</p><br>
                        <p>Prof : Web Developer</p>
                        <!-- <p>And dives into the morning light</p> -->
                    </div>
                    
                    <!-- <a href="#">View more</a> -->
                </figcaption>
            </figure>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3784.7536804642564!2d74.40067837701861!3d18.449489726579714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc3175820030f6f%3A0x4888da540a217f61!2sEknath%20Sitaram%20Divekar%20College!5e0!3m2!1sen!2sin!4v1707811512452!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    <!-- </div> -->




    <footer>
        <!-- <a href="#" target="_blank"><img class="social-media-img" src="./static/img/social_media/facebook.svg" alt="Facebook"></a> -->
        <!-- <a href="#" target="_blank"><img class="social-media-img" src="./static/img/social_media/github.svg" alt="GitHub"></a> -->
        <!-- <a href="#" target="_blank"><img class="social-media-img" src="./static/img/social_media/instagram.svg" alt="Instagram"></a> -->
        <a href="https://www.instagram.com/akash_takawane?igsh=NTc4MTIwNjQ2YQ==" class="fa fa-instagram">&nbsp;&nbsp;&nbsp;Instagram</a>
        <a href="#" class="fa fa-facebook">&nbsp;&nbsp;&nbsp;Facebook</a>
        <a href="#" class="fa fa-github">&nbsp;&nbsp;&nbsp;Github</a>
        <a href="#" class="fa fa-linkedin">&nbsp;&nbsp;&nbsp;LinkedIn</a>
        <a href="#" class="fa fa-twitter">&nbsp;&nbsp;&nbsp;Twitter</a>
        <a href="#" class="fa fa-youtube">&nbsp;&nbsp;&nbsp;YouTube</a>


        <!-- <a href="#"><img class="codecell-img" src="./static/img/codecell_logo.svg" alt="TSEC CodeCell"></a> -->

        <!-- <a href="#" target="_blank"><img class="social-media-img" src="./static/img/social_media/linkedin.svg" alt="LinkedIn"></a> -->
        <!-- <a href="#" target="_blank"><img class="social-media-img" src="./static/img/social_media/twitter.svg" alt="Twitter"></a> -->
        <!-- <a href="#" target="_blank"><img class="social-media-img" src="./static/img/social_media/youtube.svg" alt="YouTube"></a> -->
    </footer>
</body>

</html>