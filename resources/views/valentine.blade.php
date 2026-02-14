<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://img.icons8.com/emoji/48/heart-suit.png" type="image/x-icon">
    <title>For My Love ❤️</title>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <audio id="bgMusic" loop>
        <source src="{{ asset('music/music.mp3') }}" type="audio/mpeg">
    </audio>

    <div id="music-control" onclick="toggleMusic()">
        <span id="music-icon">🎵</span>
    </div>

    <section id="home" class="banner">
        <picture class="banner-img">
            <source media="(max-width: 767px)" srcset="{{ asset('images/mob_baaanner.png') }}">
            <img src="{{ asset('images/baaanner.png') }}" alt="To My Forever Valentine">
        </picture>

        <div class="banner-overlay"></div>

        <div class="banner-content">
            <h1>To My Forever Valentine❤️</h1>
            <p>Just a little space on the internet dedicated to my favorite person in the world. Happy Valentine's Day!</p>
        </div>
    </section>

    <section id="about" class="about">
        <div class="about-image">
            <img src="{{ asset('images/save_date_01.webp') }}" alt="Save the date">
        </div>
        <div class="about-content">
            <h2>Dear Love❤️,</h2>
            <p>I know you’re not really into Valentine’s Day… and honestly, love doesn’t need a special day ❤️. What we have is forever. Still… please accept this little gift from me, made just for you.</p>

            <p>You are my everything… my happiness, my comfort, my safe place 💕. <strong>Every time I look at you, I’m reminded of how lucky I am to walk through life by your side. You don't just share my life; you make it worth living.</strong></p>

            <p><strong>Beyond being my husband, you are my best friend. The one who knows my silences as well as my words. Thank you for the way you love me—patiently, selflessly, and completely. No matter where we go or what we do, as long as I'm with you, I am home.</strong></p>

            <p><strong>P.S.</strong> I don’t have money for fancy gifts, so I chose this way instead. Please don’t hate me… it’s all love, just for you. <strong>I hope this little digital memory brings a smile to your face today, just like you do for me every single day.</strong></p>
        </div>
    </section>

    <section id="special-note" class="note-section">
        <div class="note-container">
            <div class="floating-img left-img">
                <img src="{{ asset('images/baby_1.jpg') }}" alt="My Love">
            </div>
            <div class="center-note">
                <h3>To My Favorite Human</h3>
                <p>
                    "In your arms, I’ve found my home. <br>
                    In your eyes, I’ve found my future. <br>
                    Thank you for being the best husband <br>
                    and my greatest adventure."
                </p>
                <span class="signature">Forever Yours, Mmmmmaaa...</span>
            </div>
            <div class="floating-img right-img">
                <img src="{{ asset('images/baby_2.jpg') }}" alt="Soulmate">
            </div>
        </div>
    </section>


    <section id="media" class="media">
        <h2>Moments</h2>
        <div class="grid">
            <div class="media-card"><img src="{{ asset('images/moment_01.webp') }}" alt="Moment 1"></div>
            <div class="media-card"><img src="{{ asset('images/phuket_03.jpg') }}" alt="Moment 2"></div>
            <div class="media-card"><img src="{{ asset('images/moment_02.jpg') }}" alt="Moment 3"></div>
            <div class="media-card"><img src="{{ asset('images/moment_04.jpeg') }}" alt="Moment 4"></div>
            <div class="media-card"><img src="{{ asset('images/moment_05.jpeg') }}" alt="Moment 5"></div>
            <div class="media-card"><img src="{{ asset('images/save_date_04.webp') }}" alt="Moment 6"></div>
            <div class="media-card"><img src="{{ asset('images/moment_06.jpeg') }}" alt="Moment 7"></div>
            <div class="media-card"><img src="{{ asset('images/moment_07.jpeg') }}" alt="Moment 8"></div>
            <div class="media-card"><img src="{{ asset('images/moment_08.jpeg') }}" alt="Moment 9"></div>
            <div class="media-card"><img src="{{ asset('images/moment_09.jpeg') }}" alt="Moment 10"></div>
            <div class="media-card"><img src="{{ asset('images/moment_10.jpeg') }}" alt="Moment 11"></div>
            <div class="media-card"><img src="{{ asset('images/moment_11.jpeg') }}" alt="Moment 12"></div>
        </div>
    </section>

    <section id="wedding" class="wedding-gallery">
        <div class="section-header">
            <h2>Wedding Moments</h2>
            <div class="heart-divider">❤</div>
            <a href="https://peejaystories.wfolio.pro/disk/pranav-haritha-2p9zxv" target="_blank" class="btn-outline">View All Photos</a>
            <p>A glimpse into the day we said "I do."</p>
        </div>
        <div class="gallery-container">
            <div class="gallery-item"><img src="{{ asset('images/wedding/wedd2.webp') }}" alt="Wedding 1"></div>
            <div class="gallery-item"><img src="{{ asset('images/wedding/wedding_us_15.webp') }}" alt="Wedding 2"></div>
            <div class="gallery-item large"><img src="{{ asset('images/wedding/wedding_us_03.webp') }}" alt="Wedding 3"></div>
            <div class="gallery-item"><img src="{{ asset('images/wedding/wedding_us_04.webp') }}" alt="Wedding 4"></div>
            <div class="gallery-item"><img src="{{ asset('images/wedding/wedding_us_05.webp') }}" alt="Wedding 5"></div>
            <div class="gallery-item"><img src="{{ asset('images/wedding/wedding_us_06.webp') }}" alt="Wedding 6"></div>
            <div class="gallery-item"><img src="{{ asset('images/wedding/wedd_08.webp') }}" alt="Wedding 7"></div>
            <div class="gallery-item"><img src="{{ asset('images/wedding/wedding_us_11.webp') }}" alt="Wedding 8"></div>
            <div class="gallery-item"><img src="{{ asset('images/wedding/wedding_us_12.webp') }}" alt="Wedding 9"></div>
            <!-- <div class="gallery-item"><img src="{{ asset('images/wedding/wedding_us_13.webp') }}" alt="Wedding 10"></div>
            <div class="gallery-item"><img src="{{ asset('images/wedding/wedding_us_14.webp') }}" alt="Wedding 11"></div>
            <div class="gallery-item"><img src="{{ asset('images/wedding/wedding_us_10.webp') }}" alt="Wedding 12"></div>
            <div class="gallery-item"><img src="{{ asset('images/wedding/wedd_07.webp') }}" alt="Wedding 13"></div>
            <div class="gallery-item"><img src="{{ asset('images/wedding/wedd_05.webp') }}" alt="Wedding 14"></div> -->
        </div>
    </section>

    <section id="about-him" class="him-section">
        <div class="him-intro">
            <h2>About You ❤️</h2>
            <p>He’s the man who makes every day feel like a celebration.</p>
        </div>
        <div class="him-gallery">
            <div class="him-card">
                <img src="{{ asset('images/wedding/groom_01.webp') }}" alt="Smile">
                <div class="him-overlay"><span>The Best Smile</span></div>
            </div>
            <div class="him-card">
                <img src="{{ asset('images/wedding/groom_02.webp') }}" alt="World">
                <div class="him-overlay"><span>My Whole World</span></div>
            </div>
            <div class="him-card">
                <img src="{{ asset('images/him/him_06.jpg') }}" alt="Always">
                <div class="him-overlay"><span>Forever & Always</span></div>
            </div>
            <div class="him-card">
                <img src="{{ asset('images/him/him_09.jpg') }}" alt="Laughter">
                <div class="him-overlay"><span>Always making me laugh!</span></div>
            </div>
            <div class="him-card">
                <img src="{{ asset('images/him/him_10.jpg') }}" alt="Hugs">
                <div class="him-overlay"><span>The Best Hugs</span></div>
            </div>
        </div>
    </section>
    <section id="valentine-question" class="valentine-ask">
        <div class="ask-container">
            <h2>So, after all that...</h2>
            <h3>Will you be my Valentine? ❤️</h3>
            <div class="btn-group">
                <button id="yesBtn" class="btn-valentine">YES!</button>
                <button id="noBtn" class="btn-valentine no-btn">NO</button>
            </div>
        </div>
        <div id="heart-container"></div>
    </section>
    <footer>
        <p>Forever yours ❤️ | Made with love by Your Lovely Wife</p>
    </footer>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>