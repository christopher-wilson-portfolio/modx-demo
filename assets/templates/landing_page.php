<?php /** @var MODX $modx */ ?>
[[!include? &file=`assets/templates/_partials/_header.php`]]
<!doctype html>
<html lang="en">
<head>
	<base href="[[++site_url]]" />

	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible"
	      content="ie=edge">
	<title>[[*pagetitle]]</title>

	<link rel="stylesheet"
	      href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/css/foundation.min.css"
	      integrity="sha256-GSio8qamaXapM8Fq9JYdGNTvk/dgs+cMLgPeevOYEx0="
	      crossorigin="anonymous" />

	<style>
        * {
            background-repeat: no-repeat;
            background-position: center;
        }
        body {
            background-color: #eaeaea;
        }
        div { background-color: unset; }
        h1, h2 {
            font-family: "Nimbus Sans Cond Reg", sans-serif;
        },
        h2 {
            font-size: 24px;
            line-height: 27px;
            color: #000;
            margin-bottom: 10px;
        }
        header {
            background-image: url('assets/images/big-ears-festival-2016-header.jpg');
            padding: 4rem 1rem 2rem;
        }
        header, .ticket-section {
            height: 50vh;
        }
        img, .slider-buttons { background-color: unset }
        main {
            max-width: 960px;
        }
        .tickets-preorder {
            background-image: url("assets/images/buy-2016-pre-sale-tickets.png")
        }
        .tickets-preorder:hover {
            background-image: url("assets/images/buy-2016-pre-sale-tickets-hover.png")
        }
        .tickets-last-year {
            background-image: url("assets/images/see-last-years-event.png");
        }
        .tickets-last-year:hover {
            background-image: url("assets/images/see-last-years-event-hover.png");
        }
        .ticket-btn {
            display: inline-block;
            height: 25vh;
            width: 100%;
        }
        .ticket-section {
            width: 100%;
            height: 50vh;
        }
	</style>

    <link rel="stylesheet" href="assets/stylesheets/landing-page.css">
</head>

<body>
	<div class="grid-x grid-padding-x">
        <header class="cell">
            <img src="assets/images/big-ears-2016-logo.png"
                 alt="">
            <img src="assets/images/sample-quote1.png"
                 alt="">
            <div class="slider-buttons">
                <img src="assets/images/slider-arcell-left.png" class="btn-slider-left" alt="">
                <img src="assets/images/slider-arcell-right.png" class="btn-slider-right" alt="">

            </div>
        </header>
        <main class="cell">
            <section class="ticket-section">
                <a href="#" class="ticket-btn tickets-preorder"></a>
                <a href="#" class="ticket-btn tickets-last-year"></a>
            </section>

            <section class="festival-news">
                <h2>Festival News</h2>
                [[!getFeed?
                    &url=`http://bigearsfestival.com/feed/`
                    &tpl=`rssTpl`
                    &limit=`3`
                ]]
            </section>
            <section class="video">
                <iframe src="http://www.youtube.com/embed/W7qWa52k-nE"
                        width="560" height="315" frameborder="0" allowfullscreen></iframe>
            </section>
        </main>

        <footer class="footer cell">
            <h2>Stay Connected</h2>

            <div>
                <form action="" method="post" class="subscribe">
                    <div class="row">
                        <div class="input-group">
                            <input class="input-group-field" type="email" placeholder="Email Address" value="[[!+fi.email]]">
                            <div class="input-group-button">
                                <input type="submit" class="button postfix" value="Sign Up" />
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="social-media-links">

            </div>
        </footer>
    </div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/js/foundation.min.js"
	        integrity="sha256-mRYlCu5EG+ouD07WxLF8v4ZAZYCA6WrmdIXyn1Bv9Vk="
	        crossorigin="anonymous"></script>
	<script src="https://use.typekit.net/uxc6ivz.js"></script>

	<script>try{Typekit.load({ async: true });}catch(e){}</script>
	<script type="text/javascript">

	</script>
</body>
</html>