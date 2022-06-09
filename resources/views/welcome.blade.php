<!DOCTYPE html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        @include('frontlayouts.title')
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        @include('frontlayouts.css')
    </head>
    <body>
        <!-- Google Tag Manager (noscript) -->
        <noscript
            ><iframe
            src="https://www.googletagmanager.com/ns.html?id=GTM-5JCTSSF"
            height="0"
            width="0"
            style="display: none; visibility: hidden"
            ></iframe
            ></noscript>
        <!-- End Google Tag Manager (noscript) -->
        <!--====================  header area ====================-->
        @include('frontlayouts.menu')
        <!--====================  End of header area  ====================-->
        <div id="main-wrapper">
            <div class="site-wrapper-reveal">
                <div
                    class="preview-hero-area preview-hero-bg position-relative section-space--ptb_120" id="section-demos"
                    >
                    @include('frontlayouts.header')
                </div>
                <!--===========  feature-images-wrapper  Start =============-->
                <div class="feature-images-wrapper position-relative" id="mission">
                    @include('frontlayouts.slider')
                </div>
                <!--===========  feature-images-wrapper  End =============-->
                <!--===========  feature-images-wrapper  Start =============-->
                <div class="feature-images-wrapper section-space--ptb_100" id="services">
                    @include('frontlayouts.services')
                </div>
                <!--===========  feature-images-wrapper  End =============-->
                <!--======== Preview Item Page section Start ============-->
                <div
                    class="preview-item-area section-space--ptb_100 bg-gray" id="gallery"
                    id="section-demos"
                    >
                    @include('frontlayouts.gallery')
                </div>
                <!--======== Preview Item Page section End ============-->
                <!--======== Preview RTL section Start ============-->
                <div class="rtl-section-wrap section-space--ptb_100 layout-section-bg" id="contact">
                    @include('frontlayouts.contact')
                </div>
                <!--======== Preview RTL section End ============-->
                <!--======= Layouts section Start =======-->
                <div
                    class="layouts-section-wrap section-space--pt_100 section-space--pb_60"
                    >
                    @include('frontlayouts.message1')
                </div>
                <!--======= Layouts section End =======-->
                <!--======= Layouts section Start =======-->
                <div
                    class="layouts-section-wrap layout-section-bg section-space--pt_120 section-space--pb_120"
                    >
                    @include('frontlayouts.message2')
                </div>
                <!--======= Layouts section End =======-->
                <!--======= Layouts section Start =======-->
                <div
                    class="layouts-section-wrap section-space--pt_100 section-space--pb_60" id="blog"
                    >
                    @include('frontlayouts.blog')
                </div>
                <!--======= Layouts section End =======-->
                <!--======= Layouts section Start =======-->
                <div
                    class="layouts-section-wrap layout-section-bg section-space--pt_80" id="events"
                    >
                    @include('frontlayouts.events')
                </div>
                <!--======= Layouts section End =======-->
            </div>
            <footer class="footer-area-preview">
                @include('frontlayouts.footer')
            </footer>
        </div>
        <!-- Start Toolbar -->
        <!-- End Toolbar -->
        <!--====================  scroll top ====================-->
        <a href="#" class="scroll-top" id="scroll-top">
        <i class="arrow-top fal fa-long-arrow-up"></i>
        <i class="arrow-bottom fal fa-long-arrow-up"></i>
        </a>
        <!--====================  End of scroll top  ====================-->
        <!--====================  mobile menu overlay ====================-->
       @include('frontlayouts.mobile-menu')
        <!--====================  End of mobile menu overlay  ====================-->
        <!--====================  search overlay ====================-->
        @include('frontlayouts.search')
        <!--====================  End of search overlay  ====================-->
        <!-- JS
            ============================================ -->
        <!-- Modernizer JS -->
        @include('frontlayouts.javascript')
    </body>
</html>