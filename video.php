<?php include('include/header.php'); ?>
<style>
.second article,
.second aside,
.second details,
.second figcaption,
.second figure,
.second footer,
.second header,
.second hgroup,
.second main,
.second nav,
.second section,
.second summary {
    display: block
}

.video {
	background-color: #f3f3f3 !important;
}

.second figure {
    margin: 0;
    padding: 0
}

.second p, .second
ol {
    width: 70%;
    margin: 2.5% auto;
    padding-left: 20px
}

.second ul li, .second
ol li {
    margin: 20px 0
}

.second p, .second
ul {
    padding-left: 0
}

.second header {
    margin-bottom: 5%
}

.second h1 {
    font-size: 48px;
    font-weight: 400;
    line-height: 1;
    text-transform: uppercase;
    letter-spacing: 1px;
    text-align: center;
    margin: 0
}


.second h2 {
    font-size: 18px;
    font-weight: 400;
    line-height: 1.25;
    color: #555;
    text-transform: uppercase;
    letter-spacing: 1px;
    text-align: center;
    padding: 5px 8px;
    margin: 0;
    white-space: nowrap
}

pre,
code {
    font-family: Monaco, Consolas, "Lucida Console", monospace;
    font-size: 16px;
    line-height: 2;
    overflow: auto;
    width: 75%;
    margin: 0 auto;
    padding: 10px;
    border-radius: 10px
}

@media (max-width: 1024px) {
    pre,
    code {
        width: 100%;
        font-size: 14px
    }
}

code {
    padding: 5px;
    vertical-align: 3px;
    white-space: nowrap
}

.second a {
    color: #fff;
    text-decoration: none;
    border-bottom: dotted 2px #fff
}

.second a:hover,
.second a:active,
.second a:focus {
    color: #fff;
    border-bottom: solid 2px #fff
}

section {
    padding: 10% 5%;
    width: 100%
}

.first {
    background: url(../images/bg.jpg) no-repeat center center fixed;
    -moz-background-size: cover;
    -o-background-size: cover;
    -webkit-background-size: cover;
    background-size: cover
}

.first p {
    width: 50%;
    margin: 10% auto;
    text-align: center
}

@media (max-width: 768px) {
    .first p {
        width: 90%
    }
}

.second .buttons {
    list-style-type: none;
    text-align: center
}

.second.buttons li {
    display: inline-block;
    margin: 0 25px;
    padding: 0
}

@media (max-width: 768px) {
    .buttons li {
        display: block;
        margin: 50px auto 0
    }
}

.second .buttons li a {
    font-size: 30px;
    color: #fff;
    padding: 20px;
    background: #bc8542;
    border: 2px solid #bc8542;
    border-radius: 10px;
    text-decoration: none;
    -moz-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    -webkit-transition: all 0.3s ease;
    transition: all 0.3s ease
}

@media (max-width: 1024px) {
    .buttons li a {
        padding: 15px;
        font-size: 22px
    }
}

.buttons li a:hover,
.buttons li a:active,
.buttons li a:focus {
    background: none;
    border: 2px solid #fff
}

.second h1 {
    color: #555
}

.third {
    background: #7c8b78
}

.third pre,
.third code {
    color: #1a1e19;
    text-shadow: 0 1px 0 #7c8b78;
    background: #6a7766
}

.fourth {
    background: #bc8542
}

.fourth pre,
.fourth code {
    color: #251a0d;
    text-shadow: 0 1px 0 #bc8542;
    background: #a07138
}

.fifth {
    background: #4892b5
}

.fifth pre,
.fifth code {
    color: #0e1c23;
    text-shadow: 0 1px 0 #4892b5;
    background: #3d7c9a
}

.sixth {
    background: #bb4b79
}

.sixth pre,
.sixth code {
    color: #2a101b;
    text-shadow: 0 1px 0 #bb4b79;
    background: #a23d67
}

.video {
    background: #fff;
    padding-bottom: 15px;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.15);
    width: 18%;
    margin: 1%;
    float: left;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    -webkit-transition: all 0.5s ease;
    transition: all 0.5s ease
}

@media (max-width: 1366px) {
    .video {
        width: 23%
    }
}

@media (max-width: 1024px) {
    .video {
        width: 31.333%
    }
}

@media (max-width: 768px) {
    .video {
        width: 48%
    }
}

@media (max-width: 480px) {
    .video {
        display: block;
        width: 96%;
        margin: 2%;
        float: none
    }
}

.video figure {
    height: 0;
    padding-bottom: 60%
}

.video img {
    width: 100%;
    opacity: 1
}

.video img:hover,
.video img:active,
.video img:focus {
    opacity: 0.75
}

img {
    max-width: 100%;
    height: auto
}

.clearfix {
    content: "";
    display: table;
    clear: both
}

footer {
    clear: both;
    background: #2b4f71;
    margin: 0;
    padding: 5%;
    text-align: center
}

.scroll-top:hover {
    color: #fff !important;
    background-color: #333;
    text-decoration: none;
    border-bottom: none
}

.scroll-top {
    display: none;
    position: fixed;
    bottom: 1rem;
    right: 1rem;
    width: 3.2rem;
    height: 3.2rem;
    line-height: 2;
    font-size: 1.4rem;
    color: #fff;
    background-color: rgba(0, 0, 0, 0.5);
    text-decoration: none;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius: 5px;
    border-bottom: none;
    text-align: center;
    cursor: pointer
}

.fancybox-close {
    border-bottom: none
}

.fancybox-close:hover,
.fancybox-close:active,
.fancybox-close:focus {
    border-bottom: none
}


/*! fancyBox v2.1.5 fancyapps.com | fancyapps.com/fancybox/#license */

.fancybox-wrap,
.fancybox-skin,
.fancybox-outer,
.fancybox-inner,
.fancybox-image,
.fancybox-wrap iframe,
.fancybox-wrap object,
.fancybox-nav,
.fancybox-nav span,
.fancybox-tmp {
    padding: 0;
    margin: 0;
    border: 0;
    outline: none;
    vertical-align: top
}

.fancybox-wrap {
    position: absolute;
    top: 0;
    left: 0;
    z-index: 8020
}

.fancybox-skin {
    position: relative;
    background: #f9f9f9;
    color: #444;
    text-shadow: none;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px
}

.fancybox-opened {
    z-index: 8030
}

.fancybox-opened .fancybox-skin {
    -webkit-box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
    -moz-box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5)
}

.fancybox-outer,
.fancybox-inner {
    position: relative
}

.fancybox-inner {
    overflow: hidden !important
}

.fancybox-type-iframe .fancybox-inner {
    -webkit-overflow-scrolling: touch
}

.fancybox-error {
    color: #444;
    font: 14px/20px "Helvetica Neue", Helvetica, Arial, sans-serif;
    margin: 0;
    padding: 15px;
    white-space: nowrap
}

.fancybox-image,
.fancybox-iframe {
    display: block;
    width: 100%;
    height: 100%
}

.fancybox-image {
    max-width: 100%;
    max-height: 100%
}

#fancybox-loading,
.fancybox-close,
.fancybox-prev span,
.fancybox-next span {
    background-image: url("../images/fb/fancybox_sprite.png")
}

#fancybox-loading {
    position: fixed;
    top: 50%;
    left: 50%;
    margin-top: -22px;
    margin-left: -22px;
    background-position: 0 -108px;
    opacity: 0.8;
    cursor: pointer;
    z-index: 8060
}

#fancybox-loading div {
    width: 44px;
    height: 44px;
    background: url("../images/fb/fancybox_loading.gif") center center no-repeat
}

.fancybox-close {
    position: absolute;
    top: -18px;
    right: -18px;
    width: 36px;
    height: 36px;
    cursor: pointer;
    z-index: 8040
}

.fancybox-nav {
    position: absolute;
    top: 0;
    width: 40%;
    height: 100%;
    cursor: pointer;
    text-decoration: none;
    background: transparent url("../images/fb/blank.gif");
    -webkit-tap-highlight-color: transparent;
    z-index: 8040
}

.fancybox-prev {
    left: 0
}

.fancybox-next {
    right: 0
}

.fancybox-nav span {
    position: absolute;
    top: 50%;
    width: 36px;
    height: 34px;
    margin-top: -18px;
    cursor: pointer;
    z-index: 8040;
    visibility: hidden
}

.fancybox-prev span {
    left: 10px;
    background-position: 0 -36px
}

.fancybox-next span {
    right: 10px;
    background-position: 0 -72px
}

.fancybox-nav:hover span {
    visibility: visible
}

.fancybox-tmp {
    position: absolute;
    top: -99999px;
    left: -99999px;
    max-width: 99999px;
    max-height: 99999px;
    overflow: visible !important
}

.fancybox-lock {
    overflow: hidden !important;
    width: auto
}

.fancybox-lock body {
    overflow: hidden !important
}

.fancybox-lock-test {
    overflow-y: hidden !important
}

.fancybox-overlay {
    position: absolute;
    top: 0;
    left: 0;
    overflow: hidden;
    display: none;
    z-index: 8010;
    background: url("../images/fb/fancybox_overlay.png")
}

.fancybox-overlay-fixed {
    position: fixed;
    bottom: 0;
    right: 0
}

.fancybox-lock .fancybox-overlay {
    overflow: auto;
    overflow-y: scroll
}

.fancybox-title {
    visibility: hidden;
    font: normal 13px/20px "Helvetica Neue", Helvetica, Arial, sans-serif;
    position: relative;
    text-shadow: none;
    z-index: 8050
}

.fancybox-opened .fancybox-title {
    visibility: visible
}

.fancybox-title-float-wrap {
    position: absolute;
    bottom: 0;
    right: 50%;
    margin-bottom: -35px;
    z-index: 8050;
    text-align: center
}

.fancybox-title-float-wrap .child {
    display: inline-block;
    margin-right: -100%;
    padding: 2px 20px;
    background: transparent;
    background: rgba(0, 0, 0, 0.8);
    -webkit-border-radius: 15px;
    -moz-border-radius: 15px;
    border-radius: 15px;
    text-shadow: 0 1px 2px #222;
    color: #FFF;
    font-weight: bold;
    line-height: 24px;
    white-space: nowrap
}

.fancybox-title-outside-wrap {
    position: relative;
    margin-top: 10px;
    color: #fff
}

.fancybox-title-inside-wrap {
    padding-top: 10px
}

.fancybox-title-over-wrap {
    position: absolute;
    bottom: 0;
    left: 0;
    color: #fff;
    padding: 10px;
    background: #000;
    background: rgba(0, 0, 0, 0.8)
}

@media only screen and (-webkit-min-device-pixel-ratio: 1.5),
only screen and (min--moz-device-pixel-ratio: 1.5),
only screen and (min-device-pixel-ratio: 1.5) {
    #fancybox-loading,
    .fancybox-close,
    .fancybox-prev span,
    .fancybox-next span {
        background-image: url("../images/fb/fancybox_sprite@2x.png");
        background-size: 44px 152px
    }
    #fancybox-loading div {
        background-image: url("../images/fb/fancybox_loading@2x.gif");
        background-size: 24px 24px
    }
}
</style>
<!-- welcome section -->
<!--breadcumb start here-->
<section class="xs-banner-inner-section parallax-window" style="background-image:url('assets/images/about_bg.jpg')">
	<div class="xs-black-overlay"></div>
	<div class="container">
		<div class="color-white xs-inner-banner-content">
			<h2>Video Gallery</h2>
			<p>Give a helping hand for poor people</p>
			<ul class="xs-breadcumb">
				<li class="badge badge-pill badge-primary"><a href="./" class="color-white"> Home /</a> About</li>
			</ul>
		</div>
	</div>
</section>
<!--breadcumb end here--><!-- End welcome section -->

<section class="second clearfix">

      <article class="video">
        <figure>
        <a class="fancybox fancybox.iframe" href="//www.youtube.com/embed/zH3ZohGnjcg"><img class="videoThumb" src="http://i1.ytimg.com/vi/zH3ZohGnjcg/mqdefault.jpg"></a>
        </figure>
        <h2 class="videoTitle">Kumru Ballad</h2>
      </article>

      <article class="video">
        <figure>
        <a class="fancybox fancybox.iframe" href="//player.vimeo.com/video/26890275"><img class="videoThumb" src="https://secure-b.vimeocdn.com/ts/178/010/178010767_295.jpg"></a>
        </figure>
        <h2 class="videoTitle">Kumru Orchestral</h2>
      </article>
      
      <article class="video">
        <figure>
        <a class="fancybox fancybox.iframe" href="//www.youtube.com/embed/paG__3FBLzI"><img class="videoThumb" src="http://i1.ytimg.com/vi/paG__3FBLzI/mqdefault.jpg"></a>
        </figure>
        <h2 class="videoTitle">Mesopotamia</h2>
      </article>
      
      <article class="video">
        <figure>
        <a class="fancybox fancybox.iframe" href="//www.youtube.com/embed/OF9fneQ50Us"><img class="videoThumb" src="http://i1.ytimg.com/vi/OF9fneQ50Us/mqdefault.jpg"></a>
        </figure>
        <h2 class="videoTitle">Kreutzer</h2>
      </article>
      
      <article class="video">
        <figure>
        <a class="fancybox fancybox.iframe" href="//www.youtube.com/embed/1swsXJuclGM"><img class="videoThumb" src="http://i1.ytimg.com/vi/1swsXJuclGM/mqdefault.jpg"></a>
        </figure>
        <h2 class="videoTitle">Bodrum</h2>
      </article>

      <article class="video">
        <figure>
        <a class="fancybox fancybox.iframe" href="//www.youtube.com/embed/WQ3Gf9PLUO8"><img class="videoThumb" src="http://i1.ytimg.com/vi/WQ3Gf9PLUO8/mqdefault.jpg"></a>
        </figure>
        <h2 class="videoTitle">Mesopotamia</h2>
      </article>

      <article class="video">
        <figure>
        <a class="fancybox fancybox.iframe" href="//player.vimeo.com/video/7533229"><img class="videoThumb" src="https://secure-b.vimeocdn.com/ts/326/392/32639200_295.jpg"></a>
        </figure>
        <h2 class="videoTitle">Symhpony in Red</h2>
      </article>

      <article class="video">
        <figure>
        <a class="fancybox fancybox.iframe" href="//www.youtube.com/embed/bYy1yKqspYs"><img class="videoThumb" src="http://i1.ytimg.com/vi/bYy1yKqspYs/mqdefault.jpg"></a>
        </figure>
        <h2 class="videoTitle">Paganini Jazz</h2>
      </article>
    </section>

<?php include('include/footer.php'); ?>