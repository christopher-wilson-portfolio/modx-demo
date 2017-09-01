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

	<link rel="stylesheet" href="/assets/stylesheets/foundation.min.css" />

	<style>
        @media screen {
            :root {
                --color-grey1: #f2f2f2;
                --color-grey2: #eaeaea;
                --color-grey3: #d3d3d3;
                --color-grey4: #bfbfbf;
                --color-text-grey: #686b72;
                --color-green: #7f873f;
                --color-dark-green: #4c5438;

                --body-font: "Proxima Nova Bold", sans-serif;
                --heading-color: #000;
            }


            * {
                background-repeat: no-repeat;
                background-position: center;
            }
            body {
                background-color: #eaeaea;
                margin: 0 auto;
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
                background-size: cover;
                padding: 4rem 1rem 2rem;
            }
            header, .ticket-section {
                height: 50vh;
            }
            img, .slider-buttons { background-color: unset }
            main {
                max-width: 960px;
                margin: 0 auto;
            }
            .slider {
                background-color: unset;
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
            .ticket-section { width: 100%; height: 50vh; }

            @media (min-width: 960px) {
                header {
                    height: 30vh;
                    padding: 35px 45px;
                }
                .slider {
                    background-color: unset;
                    border-left: 1px solid white;

                    float: right;
                    height: 85%;
                    padding-left: 1rem;
                    margin-right: unset;
                }
                .ticket-btn {
                    width: 50% !important;
                }
                .ticket-section {
                    background: linear-gradient(to bottom, white, transparent);
                    box-shadow: 0 -10px 10px var(--color-text-grey);
                    height: 20vh;
                    margin-bottom: 4rem;
                }
            }
        }
	</style>

    <link rel="stylesheet" href="assets/stylesheets/landing-page.css">
</head>

<body>
	<div class="grid-x grid-padding-x">
        <header class="grid-x cell">
            <div class="cell small-10 small-offset-1">
                <img src="assets/images/big-ears-2016-logo.png"
                     alt="">
                <div class="slider">
                    <img src="assets/images/sample-quote1.png"
                         alt="">
                    <div class="slider-buttons">
                        <a href="#" class="btn-slider-left">
                        <a href="#" class="btn-slider-right">
                    </div>
                </div>
            </div>
        </header>
        <main class="cell">
            <div class="grid-x">
                <section class="small-12 medium-8 medium-offset-2 ticket-section grid-x grid-margin-x">
                    <a href="#" class="medium-5 ticket-btn tickets-preorder"></a>
                    <a href="#" class="medium-5 ticket-btn tickets-last-year"></a>
                </section>
            </div>

            <div class="grid-x grid-margin-x">
                <section class="medium-4 cell festival-news">
                    <h2>Festival News</h2>
                    [[!getFeed?
                    &url=`http://bigearsfestival.com/feed/`
                    &tpl=`rssTpl`
                    &limit=`3`
                    ]]
                </section>
                <section class="medium-8 cell video">
                    <div class="responsive-embed">
                        <iframe src="http://www.youtube.com/embed/W7qWa52k-nE" frameborder="0" allowfullscreen></iframe>
                    </div>
                </section>
            </div>
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
                <a href="[[*FacebookURL]]" class="link-facebook"></a>
                <a href="[[*TwitterURL]]" class="link-twitter"></a>
                <a href="[[*InstagramURL]]" class="link-instagram"></a>
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