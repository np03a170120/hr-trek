<?php include 'header.php'?>
<!-- main-banner -->
<div class="main-banner">
    <div class="header-top" style="background-image: url('./images/banner-image.png');">
        <div class="container">
            <div class="banner-content">
                <div class="hm-text">
                    <div class="hm-title">
                        <h2>discover</h2>
                        <h6>your amazing trip</h6>
                    </div>
                    <div class="hm-note">
                        <h6>Find great place to trek, hike & many more</h6>
                    </div>
                </div>
                <div class="search-filter">
                    <form method="GET">
                        <div class="filter-single">
                            <div class="front-icon">
                                <img src="./images/location.png" alt="">
                            </div>
                            <select name="cars" id="cars">
                                <option value="volvo">Destination</option>
                                <option value="saab">Saab</option>
                                <option value="mercedes">Mercedes</option>
                                <option value="audi">Audi</option>
                            </select>
                            <div class="back-icon">
                                <img src="./images/dropdown-icon.png" alt="">
                            </div>
                        </div>
                    </form>
                    <form method="GET">
                        <div class="filter-single">
                            <div class="front-icon">
                                <img src="./images/hiker.png" alt="">
                            </div>
                            <select name="cars" id="cars">
                                <option value="volvo">Activities</option>
                                <option value="saab">Saab</option>
                                <option value="mercedes">Mercedes</option>
                                <option value="audi">Audi</option>
                            </select>
                            <div class="back-icon">
                                <img src="./images/dropdown-icon.png" alt="">
                            </div>
                        </div>
                    </form>
                    <form method="GET">
                        <div class="filter-single">
                            <div class="front-icon">
                                <img src="./images/duration.png" alt="">
                            </div>
                            <select name="cars" id="cars">
                                <option value="volvo">Duration</option>
                                <option value="saab">Saab</option>
                                <option value="mercedes">Mercedes</option>
                                <option value="audi">Audi</option>
                            </select>
                            <div class="back-icon">
                                <img src="./images/dropdown-icon.png" alt="">
                            </div>

                    </form>
                </div>
            </div>
            <div class="highlight">
                <div class="highligt-text">
                    <h6>Or browse the hightlight</h6>
                </div>
                <ul class="activities-top">
                    <li><a href="#"><img src="./images/hiking.png" alt=""></a>
                        <div class="act-title">
                            <h6>hiking</h6>
                        </div>
                    </li>
                    <li><a href="#"><img src="./images/boat.png" alt=""></a>
                        <div class="act-title">
                            <h6>boating</h6>
                        </div>
                    </li>
                    <li><a href="#"><img src="./images/safari.png" alt=""></a>
                        <div class="act-title">
                            <h6>safari</h6>
                        </div>
                    </li>
                    <li><a href="#"><img src="./images/peak.png" alt=""></a>
                        <div class="act-title">
                            <h6>Trekking</h6>
                        </div>
                    </li>
                    <li class="view-more-highlights">
                        <form method="GET">
                            <div class="filter-single">
                                <select name="cars" id="cars">
                                    <option value="volvo">View More Activities </option>
                                    <option value="saab">Saab</option>
                                    <option value="mercedes">Mercedes</option>
                                    <option value="audi">Audi</option>
                                </select>
                            </div>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- main-trending-package -->
<section class="main-trending sec-padding">
    <div class="container">
        <div class="sec-title">
            <h2 id="firstWord">Trending package</h2>
        </div>
    </div>
</section>

<?php include 'footer.php'?>