<!-- Messenger Chat Plugin Code -->
<div id="fb-root"></div>

<!-- Your Chat Plugin code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
    var chatbox = document.getElementById('fb-customer-chat');
    chatbox.setAttribute("page_id", "783984938304704");
    chatbox.setAttribute("attribution", "biz_inbox");
</script>

<!-- Your SDK code -->
<script>
    window.fbAsyncInit = function() {
        FB.init({
            xfbml            : true,
            version          : 'v15.0'
        });
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<footer style="padding: 10px 0;
    background: #1c1c1c;height: max-content">
    <div class="">
        <div class="container" style="color: #eee">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <aside id="text-5" class="widget widget_text"><h4 class="widget-title">Subscribers</h4>
                        <div class="textwidget"><p>If you studied any course from LEMA , show your information <a
                                    href="http://lema.com.ly/compuer1/Login_v12/index2.html">here</a></p>
                        </div>
                    </aside>
                </div>
                <div class="col-md-4 col-sm-6">
                    <aside id="recent-posts-5" class="">
                        <h4 class="widget-title">Recent Posts</h4>
                        <ul class="list-group list-unstyled" >
                            <li>
                                <a href="/activities" class="text-decoration-none text-white">Upcoming Exams:</a>
                            </li>
                            <li>
                                <a href="/activities" class="text-decoration-none text-white">Upcoming Courses:</a>
                            </li>
                            <li>
                                <a href="#" class="text-decoration-none text-white">https://lema.org.ly/?p=1979</a>
                            </li>
                        </ul>

                    </aside>
                </div>
                <div class="col-md-4 col-sm-6">
                    <aside id="text-6" class="widget widget_text"><h4 class="widget-title">Contact Us</h4>
                        <div class="textwidget">
                            <div class="item">
                                <div class="contact-info">
                                    <div class="contact-title">Office Location</div>
                                    <div class="contact-title mx-3">{{\App\Models\Contact::first()->address}}</div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="contact-info">
                                    <div class="contact-title">Contact Number</div>
                                    <div class="text mx-3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a target="_blank" href="tel:{{\App\Models\Contact::first()->phone}}">{{\App\Models\Contact::first()->phone}} </a></div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="contact-info">
                                    <div class="contact-title">Contact Email</div>
                                    <div class="text mx-3 "><a href="">{{\App\Models\Contact::first()->email}}</a></div>
                                    <div class="text mx-3 "><a href="">{{\App\Models\Contact::first()->second_email}}</a></div>
                                    <div class="text"></div>
                                </div>
                            </div>

                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>


    <div class="botfooter">
        <div class="container">
            <div class="row">

                <div class="col-md-12 text-center">
                    <div class="copyright text-white">
                        <p>Powered By LEMA | <a target="_blank" rel="nofollow" href="http://lema.org.ly">LEMA</a>
                        </p>
                    </div>
                </div>


            </div>
        </div>
    </div>
</footer>
