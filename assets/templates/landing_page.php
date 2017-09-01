[[$Header]]
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
            <div class="grid-x ticket-section-container">
                <div class="bird-left"></div>
                <section class="small-12 medium-10 medium-offset-1 ticket-section grid-x grid-margin-x">
                    <a href="#" class="ticket-btn tickets-preorder"></a>
                    <a href="#" class="ticket-btn tickets-last-year"></a>
                </section>
                <div class="bird-right"></div>
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

        [[$Footer]]