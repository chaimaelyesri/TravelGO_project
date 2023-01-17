<footer>
    <div class="container margin_60_35">
        <div class="row">
            <div class="col-lg-5 col-md-12 p-r-5">
                <p><img src="/frontend/img/logo-color.png" width="140" height="20" data-retina="true" alt=""></p>
                <p>Mea nibh meis philosophia eu. Duis legimus efficiantur ea sea. Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu. Nihil facilisi indoctum an vix, ut delectus expetendis vis.</p>
                <div class="follow_us">
                    <ul>
                        <li>Follow us</li>
                        <li><a href="#0"><i class="ti-facebook"></i></a></li>
                        <li><a href="#0"><i class="ti-twitter-alt"></i></a></li>
                        <li><a href="#0"><i class="ti-google"></i></a></li>
                        <li><a href="#0"><i class="ti-pinterest"></i></a></li>
                        <li><a href="#0"><i class="ti-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 ml-lg-auto">
                <h5>Useful links</h5>
                <ul class="links">
                    <li><a href="/about">About</a></li>
                    <li><a href="/login">Login</a></li>
                    <li><a href="/register">Register</a></li>
                    <li><a href="/blog">News &amp; Events</a></li>
                    <li><a href="/contact">Contacts</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5>Contact with Us</h5>
                <ul class="contacts">
                    <li><a href="tel://61280932400"><i class="ti-mobile"></i> + 61 23 8093 3400</a></li>
                    <li><a href="mailto:info@TravelGO.com"><i class="ti-email"></i> info@TravelGO.com</a></li>
                </ul>
                <div id="newsletter">
                    <h6>Newsletter</h6>
                    <div id="message-newsletter"></div>
                    <form action="/addtolist" method="post" class="subscribe-form">
                        @if (\Session::has('news_message'))
                            <p>{!! \Session::get('news_message') !!}</p>
                        @else
                        <div class="form-group">
                            @csrf
                            <input type="email" name="email" id="email_newsletter" class="form-control" placeholder="Your email">
                            <input type="submit" value="Submit" id="submit-newsletter">
                        </div>
                            @endif
                    </form>
                </div>
            </div>
        </div>
        <!--/row-->
        <hr>
        <div class="row">
            <div class="col-lg-6">
                <ul id="footer-selector">
                    <li>
                        <div class="styled-select" id="lang-selector">
                            <select>
                                <option value="English" selected>English</option>
<!--                                <option value="French">French</option>
                                <option value="Spanish">Spanish</option>
                                <option value="Russian">Russian</option>-->
                            </select>
                        </div>
                    </li>
                    <li>
                        <div class="styled-select" id="currency-selector">
                            <select>
                                <option value="US Dollars" selected>US Dollars</option>
                                <option value="Euro">Euro</option>
                            </select>
                        </div>
                    </li>
                    <li><img src="/frontend/img/cards_all.svg" alt=""></li>
                </ul>
            </div>
            <div class="col-lg-6">
                <ul id="additional_links">
                    <li><a href="/terms_and_conditions">Terms and conditions</a></li>
                    <li><a href="#0">Privacy</a></li>
                    <li><span>© {{date("Y")}} TravelGO</span></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!--/footer-->
</div>
<!-- page -->

<!-- Sign In Popup -->
<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">
    <div class="small-dialog-header">
        <h3>Sign In</h3>
    </div>
    <form action="{{ route('login') }}" method="post">
        @csrf
        <div class="sign-in-wrapper">
            <p class="text-center"><img src="/frontend/img/logo_small.png" width="50" height="50" data-retina="true"  alt="" class=" m-1"></p>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" id="email">
                <i class="icon_mail_alt"></i>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" id="password" value="">
                <i class="icon_lock_alt"></i>
            </div>
            <div class="clearfix add_bottom_15">
                <div class="checkboxes float-left">
                    <label class="container_check">Remember me
                        <input type="checkbox" {{ old('remember') ? 'checked' : '' }}>
                        <span class="checkmark"></span>
                    </label>
                </div>
                <div class="float-right mt-1"><a id="forgot" href="{{ route('password.request') }}">Forgot Password?</a></div>
            </div>
            <div class="text-center"><input type="submit" value="Log In" class="btn_1 full-width"></div>
            <div class="text-center">
                Don’t have an account? <a href="{{ route('register') }}">Sign up</a>
            </div>
            <div id="forgot_pw">
                <div class="form-group">
                    <label>Please confirm login email below</label>
                    <input type="email" class="form-control" name="email_forgot" id="email_forgot">
                    <i class="icon_mail_alt"></i>
                </div>
                <p>You will receive an email containing a link allowing you to reset your password to a new preferred one.</p>
                <div class="text-center"><input type="submit" value="Reset Password" class="btn_1"></div>
            </div>
        </div>
    </form>
    <!--form -->
</div>
<!-- /Sign In Popup -->

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>

<div id="toTop"></div><!-- Back to top button -->

<!-- COMMON SCRIPTS -->
<script src="/frontend/js/jquery-2.2.4.min.js"></script>
<script src="/frontend/js/common_scripts.js"></script>
<script src="/frontend/js/main.js"></script>
<script src="/frontend/assets/validate.js"></script>

<!-- FlexSlider -->
<script defer src="/frontend/js/jquery.flexslider.js"></script>
<script>
    $(window).load(function() {
        'use strict';
        $('#carousel_slider').flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: false,
            slideshow: false,
            itemWidth: 280,
            itemMargin: 25,
            asNavFor: '#slider'
        });
        $('#slider').flexslider({
            animation: "fade",
            controlNav: false,
            animationLoop: false,
            slideshow: false,
            sync: "#carousel_slider",
            start: function(slider) {
                $('body').removeClass('loading');
            }
        });
    });
</script>
