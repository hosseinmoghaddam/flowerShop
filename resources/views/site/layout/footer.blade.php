<!--Footer Start-->
<footer id="footer">
    <div class="fpart-first">
        <div class="container">
            <div class="row">
                <div class="contact col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <h5>در باره فروشگاه گلها</h5>
                    <p>سایتی که می توانید هر گلی که مورد نظرتان هست را تهیه کنید</p>
                
                </div>
                <div class="column col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <h5>اطلاعات</h5>
                    <ul>
                        <li><a href="{{ route('about') }}">درباره ما</a></li>
                    </ul>
                </div>
                <div class="column col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <h5>خدمات مشتریان</h5>
                    <ul>
                        <li><a href="{{ route('contact') }}">تماس با ما</a></li>
                        <li><a href="{{ route('index') }}">بازگشت</a></li>
                    </ul>
                </div>
                <div class="column col-lg-2 col-md-2 col-sm-3 col-xs-12">
                    <h5>حساب من</h5>
                    <ul>
                        <li><a href="{{ url('login') }}">حساب کاربری</a></li>
                        <li><a href="{{ route('care') }}">تاریخچه سفارشات</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="fpart-second">
        <div class="container">
            <div id="powered" class="clearfix">
                <div class="powered_text pull-left flip">
                    <p>کپی رایت © 2018 | تمام حقوق این است مربوط است به دانشگاه بزرگمهر</p>
                </div>
                <div class="social pull-right flip"> <a href="#" target="_blank"> <img data-toggle="tooltip" src="/site/image/socialicons/facebook.png" alt="Facebook" title="Facebook"></a> <a href="#" target="_blank"> <img data-toggle="tooltip" src="/site/image/socialicons/twitter.png" alt="Twitter" title="Twitter"> </a> <a href="#" target="_blank"> <img data-toggle="tooltip" src="/site/image/socialicons/google_plus.png" alt="Google+" title="Google+"> </a> <a href="#" target="_blank"> <img data-toggle="tooltip" src="/site/image/socialicons/pinterest.png" alt="Pinterest" title="Pinterest"> </a> <a href="#" target="_blank"> <img data-toggle="tooltip" src="/site/image/socialicons/rss.png" alt="RSS" title="RSS"> </a> </div>
            </div>
            <div class="bottom-row">
                <div class="custom-text text-center">
                    <p>متنی در باره گل ها</p>
                </div>
                <div class="payments_types"> <a href="#" target="_blank"> <img data-toggle="tooltip" src="/site/image/payment/payment_paypal.png" alt="paypal" title="PayPal"></a> <a href="#" target="_blank"> <img data-toggle="tooltip" src="/site/image/payment/payment_american.png" alt="american-express" title="American Express"></a> <a href="#" target="_blank"> <img data-toggle="tooltip" src="/site/image/payment/payment_2checkout.png" alt="2checkout" title="2checkout"></a> <a href="#" target="_blank"> <img data-toggle="tooltip" src="/site/image/payment/payment_maestro.png" alt="maestro" title="Maestro"></a> <a href="#" target="_blank"> <img data-toggle="tooltip" src="/site/image/payment/payment_discover.png" alt="discover" title="Discover"></a> <a href="#" target="_blank"> <img data-toggle="tooltip" src="/site/image/payment/payment_mastercard.png" alt="mastercard" title="MasterCard"></a> </div>
            </div>
        </div>
    </div>
    <div id="back-top"><a data-toggle="tooltip" title="بازگشت به بالا" href="javascript:void(0)" class="backtotop"><i class="fa fa-chevron-up"></i></a></div>
</footer>
<!--Footer End-->
<!-- Twitter Side Block Start 
<div id="twitter_footer" class="twit-right sort-order-1">
    <div class="twitter_icon"><i class="fa fa-twitter"></i></div>
    <a class="twitter-timeline" href="https://twitter.com/" data-chrome="nofooter noscrollbar transparent" data-theme="light" data-tweet-limit="2" data-related="twitterapi,twitter" data-aria-polite="assertive" data-widget-id="347621595801608192">توییت های @</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</div>
 Twitter Side Block End -->
<!-- Facebook Side Block Start 
<div id="facebook" class="fb-right sort-order-2">
    <div class="facebook_icon"><i class="fa fa-facebook"></i></div>
    <div class="fb-page" data-href="https://www.facebook.com/harnishdesign/" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true" data-show-posts="false">
        <div class="fb-xfbml-parse-ignore">
            <blockquote cite="https://www.facebook.com/harnishdesign/"><a href="https://www.facebook.com/harnishdesign/">هارنیش دیزاین</a></blockquote>
        </div>
    </div>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
</div>
 Facebook Side Block End -->
</div>
<!-- JS Part Start-->
<script type="text/javascript" src="/site/js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="/site/js/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/site/js/jquery.easing-1.3.min.js"></script>
<script type="text/javascript" src="/site/js/jquery.dcjqaccordion.min.js"></script>
<script type="text/javascript" src="/site/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="/site/js/custom.js"></script>
<!-- JS Part End-->

@yield("page-specific-plugin-scripts")


@yield("inline-scripts")


</body>
</html>