<footer>
    <div class="top">
        
        <div class="container">
            @foreach ($tags as $tag)
                <div class="item">
                    <img src="images/{{$tag['url']}}" alt="{{$tag['title']}}">
                    <div class="text">{{$tag['title']}}</div>
                </div>
            @endforeach
        </div>
        
    </div>
    
    <div class="middle">

        <div class="container">
            <div class="links">
                <div class="cols">
                    <div class="col">
                        <div class="col-top">
                            <h2>Dc Comics</h2>
                            <ul>
                                <li>Characters</li>
                                <li>Comics</li>
                                <li>Movies</li>
                                <li>TV</li>
                                <li>Games</li>
                                <li>Videos</li>
                                <li>News</li>
                            </ul>
                        </div>
                        <div class="col-bottom">
                            <h2>Shop</h2>
                            <ul>
                                <li>Shop DC</li>
                                <li>Shop DC Collectibles</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <h2>Dc</h2>
                        <ul>
                            <li>Terms Of Use</li>
                            <li>Privacy policy(New)</li>
                            <li>Ad choices</li>
                            <li>Advertising</li>
                            <li>Jobs</li>
                            <li>Subscriptions</li>
                            <li>Talent Workshops</li>
                            <li>CPSC Certificates</li>
                            <li>Ratings</li>
                            <li>Shop Helps</li>
                            <li>Contact Us</li>
                        </ul>
                    </div>
                    <div class="col">
                        <h2>Sites</h2>
                        <ul>
                            <li>DC</li>
                            <li>MAD Magazine</li>
                            <li>DC Kids</li>
                            <li>DC Universe</li>
                            <li>DC Power Visa</li>
                        </ul>
                    </div>
                </div>
                <div class="copyright">
                    <p>All Site Content TM and &copy; 2020 DC Entertainment, unless otherwise <a href="#">noted here</a>. All rights reserved.</p>
                    <a href="#">Cookies Settings</a>
                </div>
            </div>
            <div class="big-logo">
                <img src="images/dc-logo-bg.png" alt="big-logo">
            </div>
        </div>
            
    </div>

    <div class="bottom">
        <div class="container">
            <div class="sign-up">
                <span>Sign-up now!</span>
            </div>
            <div class="social">
                <span>follow us</span>
                <img src="images/footer-facebook.png" alt="facebook-logo">
                <img src="images/footer-twitter.png" alt="twitter-logo">
                <img src="images/footer-youtube.png" alt="youtube-logo">
                <img src="images/footer-pinterest.png" alt="pintarest-logo">
                <img src="images/footer-periscope.png" alt="periscope-logo">
            </div>
        </div>
    </div>
</footer>