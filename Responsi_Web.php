<?php
session_start();
    
    include("connection.php");
    include("function.php");
    
        $user_data = check_login($con);


    include_once 'header.php';
?>

    <section class="mainS swiper mySwiper">
        <div class="wrapper swiper-wrapper">
            <div class="slide swiper-slide"> 
                <img src="Slider aset/zelda-quiz.large.jpg" alt="" class="image">
                <div class="image-data">
                    <span class="text">The legend of zelda</span>
                    <h2>
                    What the different  <br />
                    beetwen two zelda games?
                </h2>
                <a href="#" class="button">View More</a>
                </div>
            </div>
            <div class="slide swiper-slide"> 
                <img src="Slider aset/Nihonkoku-Shoukan-1.jpg" alt="" class="image">
                <div class="image-data">
                    <span class="text">Nihonkoku Shoukan</span>
                    <h2>
                    Why each update of novel chapter <br />
                    take so long?
                </h2>
                <a href="#" class="button">View More</a>
                </div>
            </div>
            <div class="slide swiper-slide"> 
                <img src="Slider aset/MAKOTO.webp" alt="" class="image">
                <div class="image-data">
                    <span class="text">Makoto Shinkai</span>
                    <h2>
                    Philosophy used <br />
                    in each Makoto Shinkai work
                </h2>
                <a href="#" class="button">View More</a>
                </div>
            </div>
        </div>
        <div class="swiper-button-next nav-btn"></div>
        <div class="swiper-button-prev nav-btn"></div>
        <div class="swiper-pagination"></div>
    </section>

    <section class="sec-search">
        <div class="box">
            <input type="checkbox" id="check">
            <div class="search-box">
                <input type="text" placeholder="Explore More...">
                <label for="check" class="icon">
                    <i class="fas fa-search"></i>
                </label>
            </div>
        </div>
    </section>

    <section class="sec-card ">
        <div class="container swiper">
            <div class="slide-container">
                <div class="card-wrapper swiper-wrapper">
                    <div class="card swiper-slide">
                        <div class="image-box">
                            <img src="card aset/6AblOemYujqckAkDxp3HayeAyMVhtg16jgdCFahzhpg.webp" alt="" />
                        </div>
                        <div class="profile-details">
                            <div class="name-job">
                                <h3 class="name">Live Action</h3>
                            </div>
                        </div>
                    </div>

                    <div class="card swiper-slide">
                        <div class="image-box">
                            <img src="card aset/ab67616d00001e02279eb9c3d3b195dc118510f5.jpeg" alt="" />
                        </div>
                        <div class="profile-details">
                            <div class="name-job">
                                <h3 class="name">Music</h3>
                            </div>
                        </div>
                    </div>

                    <div class="card swiper-slide">
                        <div class="image-box">
                            <img src="card aset/Featured-Manga-Like-Vagabond-Musashi-Guts.avif" alt="" />
                        </div>
                        <div class="profile-details">
                            <div class="name-job">
                                <h3 class="name">Manga</h3>
                            </div>
                        </div>
                    </div>

                    <div class="card swiper-slide">
                        <div class="image-box">
                            <img src="card aset/GAC_HowlsMovingCastle.jpg" alt="" />
                        </div>
                        <div class="profile-details">
                            <div class="name-job">
                                <h3 class="name">Anime</h3>
                            </div>
                        </div>
                    </div>

                    <div class="card swiper-slide">
                        <div class="image-box">
                            <img src="card aset/Sfa-Sfa3-Sf4-sf3-street-fighter-9839247-762-600.jpg" alt="" />
                        </div>
                        <div class="profile-details">
                            <div class="name-job">
                                <h3 class="name">Game</h3>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <section class="sec-news">
        <div class="news-container">
            <h1 class="berita">News</h1>
            <div id="news-container">

                <div class="news-item">
                    <div class="news-image">
                        <img src="news aset/ranking-of-kings_ssvc.600.webp" alt="Gambar Berita 1">
                    </div>
                    <div class="news-content">
                        <h2 class="news-title">Ranking of Kings Is The Ultimate Underdog Anime</h2>
                        <p class="news-desc">Wit Studio's 2021 masterpiece deserves more praise.</p>
                        <span class="news-date">19 June 2023</span>
                    </div>
                </div>

                <div class="news-item">
                    <div class="news-image">
                        <img src="news aset/gnvk6tmrjxzultxc9qblha_pqbr.600.webp" alt="Gambar Berita 2">
                    </div>
                    <div class="news-content">
                        <h2 class="news-title">Hideo Kojima Sets Sights on Outer Space to Create An Out-Of-This-World Game</h2>
                        <p class="news-desc">The game designer also wants to create a self-destructive game.</p>
                        <span class="news-date">18 June 2023</span>
                    </div>
                </div>

                <div class="news-item">
                    <div class="news-image">
                        <img src="news aset/henry-cavill-bids-final-farewell-to-netflixs-the-witcher_nw4t.600.webp" alt="Gambar Berita 3">
                    </div>
                    <div class="news-content">
                        <h2 class="news-title">Henry Cavill Bids Final Farewell to Netflix's The Witcher</h2>
                        <p class="news-desc">Season 3 will be his last.</p>
                        <span class="news-date">17 June 2023</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class= "pertama">
            <a href="logout.php" target="_blank">
                <button class="Go-button">
                <span>Log Out</span>
                </button>
            </a>
        </div>
    </section>

    <script src="header.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    
    <script src="slider.js"></script>

    <script src="card.js"></script>

<?php
    include_once 'footer.php';
?>