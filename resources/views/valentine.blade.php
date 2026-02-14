<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://img.icons8.com/emoji/48/heart-suit.png" type="image/x-icon">
    <title>For My Love ❤️</title>
    <style>
        /* Base Styles */
        :root {
            --primary: #e11d48;
            --dark: #0f172a;
            --light: #f8fafc;
            --gray: #64748b;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: var(--dark);
            background: var(--light);
            scroll-behavior: smooth;
            overflow-x: hidden;
        }

        /* --- Banner Section --- */
        /* --- Updated Banner Section --- */
.banner {
    min-height: 100vh; /* Changed from height to min-height */
    position: relative;
    overflow: hidden;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    color: white;
    padding: 100px 20px; /* Added padding for mobile breathing room */
}

.banner-img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center; /* Ensures the middle of the photo stays visible */
    z-index: 1;
}

/* Mobile specific tweaks */
@media (max-width: 768px) {
    .banner {
        min-height: 60vh; /* Shorter height on mobile looks better */
    }
    .banner h1 {
        font-size: 2.2rem; /* Specific size for mobile */
    }
}

        .banner-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(15, 23, 42, 0.6);
            z-index: 2;
        }

        .banner-content {
            position: relative;
            z-index: 3;
            padding: 0 20px;
        }

        .banner h1 {
            font-size: clamp(2rem, 8vw, 3.5rem);
            margin-bottom: 1rem;
        }

        /* --- About Section --- */
        section {
            padding: 80px 5%;
        }

        .about {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 2rem;
            background: white;
        }

        @media (min-width: 768px) {
            .about {
                flex-direction: row;
                padding: 100px 10%;
                gap: 4rem;
            }

            .about-content,
            .about-image {
                flex: 1;
            }

            .about-content {
                text-align: left;
            }

            .about h2 {
                text-align: left;
            }
        }

        .about-image img {
            width: 100%;
            border-radius: 12px;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
        }

        /* --- Special Note Section Fix --- */
        .note-section {
            background: #fff5f7;
            padding: 80px 5%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .note-container {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            max-width: 1200px;
            width: 100%;
            gap: 40px;
        }

        .center-note {
            flex: 0 1 500px;
            text-align: center;
            padding: 50px 40px;
            background: white;
            border-radius: 50% 50% 20px 20px;
            box-shadow: 0 15px 35px rgba(225, 29, 72, 0.1);
            z-index: 2;
            min-width: unset; width: 100%;
            animation: noteFadeIn 1.5s ease-out;
        }

        .floating-img {
            flex: 0 1 300px;
        }

        .floating-img img {
            width: 100%;
            height: auto;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            border: 8px solid white;
        }

        .left-img {
            animation: float-left 6s ease-in-out infinite;
        }

        .right-img {
            animation: float-right 6s ease-in-out infinite;
        }

        @keyframes float-left {
            0%, 100% { transform: translateY(0px) rotate(-2deg); }
            50% { transform: translateY(-20px) rotate(1deg); }
        }

        @keyframes float-right {
            0%, 100% { transform: translateY(0px) rotate(2deg); }
            50% { transform: translateY(-25px) rotate(-1deg); }
        }

        @keyframes noteFadeIn {
            from { opacity: 0; transform: translateY(20px) scale(0.95); }
            to { opacity: 1; transform: translateY(0) scale(1); }
        }

        @media (max-width: 900px) {
            .note-container { flex-direction: column; gap: 30px; }
            .center-note { order: 1; border-radius: 20px; width: 100%; }
            .left-img { order: 2; }
            .right-img { order: 3; }
            .floating-img { max-width: 80%; }
        }

        /* --- Header Styles --- */
        .section-header, .him-intro, .media h2 {
            text-align: center;
            margin-bottom: 40px;
            width: 100%;
        }

        .section-header h2, .him-intro h2, .media h2, .about h2 {
            font-family: 'Georgia', serif;
            font-size: clamp(2rem, 5vw, 2.8rem);
            color: #9f1239;
            margin-bottom: 10px;
        }

        .heart-divider { color: #e11d48; font-size: 1.5rem; margin: 10px 0; display: block; }

        /* --- Media Grid --- */
        .media { background: #f1f5f9; text-align: center; }
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 15px;
        }

        .media-card { background: white; padding: 10px; border-radius: 8px; }
        .media-card img { width: 100%; height: 250px; object-fit: cover; border-radius: 4px; }

        /* --- Wedding Gallery --- */
        .wedding-gallery { background: #fff; text-align: center; }
        .gallery-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            grid-auto-rows: 250px;
            gap: 10px;
        }

        .gallery-item img { width: 100%; height: 100%; object-fit: cover; border-radius: 8px; }
        @media (min-width: 768px) { .gallery-item.large { grid-row: span 2; grid-column: span 1; } }

        /* --- About Him Gallery --- */
        .him-section { padding: 80px 5%; background: #fff; text-align: center; }
        .him-gallery { display: flex; flex-direction: column; gap: 15px; width: 100%; }
        .him-card { position: relative; height: 300px; border-radius: 20px; overflow: hidden; cursor: pointer; transition: all 0.5s ease; }
        .him-card img { width: 100%; height: 100%; object-fit: cover; }
        @media (min-width: 768px) {
            .him-gallery { flex-direction: row; height: 450px; }
            .him-card { flex: 1; }
            .him-card:hover { flex: 3; }
        }
        .him-overlay { position: absolute; bottom: 0; left: 0; width: 100%; padding: 20px; background: linear-gradient(transparent, rgba(0, 0, 0, 0.8)); color: white; text-align: left; }

        /* --- Controls --- */
        #music-control {
            position: fixed; bottom: 20px; right: 20px; width: 50px; height: 50px;
            background: var(--primary); border-radius: 50%; display: flex;
            justify-content: center; align-items: center; cursor: pointer; z-index: 2000;
        }

        footer { padding: 2rem; text-align: center; background: var(--dark); color: white; }
        .btn-outline { display: inline-block; padding: 10px 20px; border: 2px solid var(--primary); color: var(--primary); text-decoration: none; border-radius: 30px; transition: 0.3s; margin-bottom: 20px; }
        .btn-outline:hover { background: var(--primary); color: white; }
    </style>
</head>

<body>
    <audio id="bgMusic" loop>
        <source src="{{ asset('music/music.mp3') }}" type="audio/mpeg">
    </audio>

    <div id="music-control" onclick="toggleMusic()">
        <span id="music-icon">🎵</span>
    </div>

    <section id="home" class="banner">
        <img src="{{ asset('images/baaanner.png') }}" alt="Banner" class="banner-img">
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
            <p>You are my everything… my happiness, my comfort, my safe place 💕.</p>
            <p><strong>P.S.</strong> I don’t have money for fancy gifts, so I chose this way instead. Please don’t hate me… it’s all love, just for you.</p>
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
            <div class="gallery-item"><img src="{{ asset('images/wedding/wedding_us_10.webp') }}" alt="Wedding 7"></div>
            <div class="gallery-item"><img src="{{ asset('images/wedding/wedding_us_11.webp') }}" alt="Wedding 8"></div>
            <div class="gallery-item"><img src="{{ asset('images/wedding/wedding_us_12.webp') }}" alt="Wedding 9"></div>
            <div class="gallery-item"><img src="{{ asset('images/wedding/wedding_us_13.webp') }}" alt="Wedding 10"></div>
            <div class="gallery-item"><img src="{{ asset('images/wedding/wedding_us_14.webp') }}" alt="Wedding 11"></div>
            <div class="gallery-item"><img src="{{ asset('images/wedding/wedd_05.webp') }}" alt="Wedding 12"></div>
            <div class="gallery-item"><img src="{{ asset('images/wedding/wedd_07.webp') }}" alt="Wedding 13"></div>
            <div class="gallery-item"><img src="{{ asset('images/wedding/wedd_08.webp') }}" alt="Wedding 14"></div>
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

    <footer>
        <p>Forever yours ❤️ | Made with love by Your Lovely Wife</p>
    </footer>

    <script>
        const music = document.getElementById("bgMusic");
        window.addEventListener('click', () => {
            if (music.paused) music.play();
        }, { once: true });

        function toggleMusic() {
            if (music.paused) {
                music.play();
                document.getElementById("music-icon").innerText = "🎵";
            } else {
                music.pause();
                document.getElementById("music-icon").innerText = "🔇";
            }
        }
    </script>
</body>
</html>