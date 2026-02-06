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
            --primary: #2563eb;
            --dark: #0f172a;
            --light: #f8fafc;
            --gray: #64748b;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; line-height: 1.6; color: var(--dark); background: var(--light); scroll-behavior: smooth; }
        
        /* Navigation */
        nav { background: white; padding: 1rem 5%; display: flex; justify-content: space-between; align-items: center; position: fixed; width: 100%; top: 0; z-index: 1000; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        .logo { font-size: 1.5rem; font-weight: bold; color: var(--primary); }
        nav ul { display: flex; list-style: none; }
        nav ul li { margin-left: 2rem; }
        nav ul li a { text-decoration: none; color: var(--dark); font-weight: 500; transition: 0.3s; }
        nav ul li a:hover { color: var(--primary); }

        /* Sections */
        section { padding: 100px 10%; min-height: 60vh; }

        /* Banner Section */
        /* Modified Banner Styles */
.banner { 
    height: 100vh; 
    position: relative; /* Container must be relative */
    overflow: hidden;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    color: white;
    padding: 0; /* Remove padding to let image fill edge-to-edge */
}

.banner-img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover; /* This makes the img act like a background-cover */
    z-index: 1;
}

.banner-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(15, 23, 42, 0.6); /* Darkens the image for text readability */
    z-index: 2;
}

.banner-content {
    position: relative;
    z-index: 3; /* Keeps text above image and overlay */
    padding: 0 10%;
}
        .banner h1 { font-size: 3.5rem; margin-bottom: 1rem; }
        .banner p { font-size: 1.2rem; margin-bottom: 2rem; max-width: 600px; }
        .btn { padding: 12px 30px; background: var(--primary); color: white; text-decoration: none; border-radius: 5px; font-weight: bold; }

        /* About Section */
        .about { display: flex; align-items: center; gap: 4rem; background: white; }
        .about-content { flex: 1; }
        .about-image { flex: 1; }
        .about-image img { width: 100%; border-radius: 12px; box-shadow: 0 20px 25px -5px rgba(0,0,0,0.1); }
        .about h2 { font-size: 2.5rem; margin-bottom: 1.5rem; color: var(--primary); }

        /* Media Section */
        .media { background: #f1f5f9; text-align: center; }
        .media h2 { margin-bottom: 3rem; font-size: 2.5rem; }
        .grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 20px; }
        .media-card { background: white; padding: 10px; border-radius: 8px; overflow: hidden; }
        .media-card img { width: 100%; height: 200px; object-fit: cover; border-radius: 4px; transition: 0.3s; }
        .media-card img:hover { transform: scale(1.05); }

        /* Footer */
        footer { padding: 2rem; text-align: center; background: var(--dark); color: white; }

        /* Mobile Responsive */
        @media (max-width: 768px) {
            .about { flex-direction: column; text-align: center; }
            .banner h1 { font-size: 2.2rem; }
            nav ul { display: none; } /* Simplified for example */
        }
        /* Wedding Gallery Styles */
.wedding-gallery {
    background-color: #fff;
    padding: 80px 10% 100px;
    text-align: center;
}

.section-header h2 {
    font-family: 'Georgia', serif;
    font-size: 2.5rem;
    color: #9f1239; /* Deep Rose color */
}

.heart-divider {
    color: #e11d48;
    font-size: 1.5rem;
    margin: 10px 0;
}

.gallery-container {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
    grid-auto-rows: 200px; /* Base height for rows */
    gap: 15px;
    margin-top: 40px;
}

.gallery-item {
    overflow: hidden;
    border-radius: 8px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.05);
}

/* Makes some images stand out taller */
.gallery-item.large {
    grid-row: span 2;
}

.gallery-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.gallery-item img:hover {
    transform: scale(1.1); /* Subtle zoom on hover */
}

/* Mobile Fix */
@media (max-width: 600px) {
    .gallery-container {
        grid-auto-rows: 250px;
    }
    .gallery-item.large {
        grid-row: span 1;
    }
}
/* Note Section Styles */
.note-section {
    background: #fff5f7; /* Very light pink blush */
    padding: 100px 5%;
    overflow: hidden;
}

.note-container {
    display: flex;
    align-items: center;
    justify-content: space-around;
    max-width: 1200px;
    margin: 0 auto;
    gap: 20px;
}

.center-note {
    flex: 1;
    text-align: center;
    padding: 40px;
    background: white;
    border-radius: 50% 50% 10px 10px; /* Slight heart-curve feel */
    box-shadow: 0 10px 30px rgba(225, 29, 72, 0.1);
    z-index: 2;
    animation: fadeIn 2s ease-in;
}

.center-note h3 {
    font-family: 'Georgia', serif;
    color: #e11d48;
    margin-bottom: 20px;
    font-size: 1.8rem;
}

.center-note p {
    font-style: italic;
    font-size: 1.1rem;
    line-height: 1.8;
    color: #4b5563;
}

.signature {
    display: block;
    margin-top: 20px;
    font-family: 'Cursive', sans-serif;
    color: #9f1239;
    font-weight: bold;
}

/* Floating Image Styles */
.floating-img {
    flex: 1;
    max-width: 300px;
    z-index: 1;
}

.floating-img img {
    width: 100%;
    border-radius: 20px;
    box-shadow: 0 15px 35px rgba(0,0,0,0.1);
    border: 5px solid white;
}

/* Animations */
.left-img {
    animation: float 6s ease-in-out infinite;
}

.right-img {
    animation: float 6s ease-in-out infinite reverse;
    animation-delay: 1s;
}

@keyframes float {
    0% { transform: translateY(0px) rotate(0deg); }
    50% { transform: translateY(-20px) rotate(2deg); }
    100% { transform: translateY(0px) rotate(0deg); }
}

@keyframes fadeIn {
    from { opacity: 0; transform: scale(0.9); }
    to { opacity: 1; transform: scale(1); }
}

/* Mobile View */
@media (max-width: 850px) {
    .note-container {
        flex-direction: column;
    }
    .floating-img {
        max-width: 80%;
    }
}
#music-control {
    position: fixed;
    bottom: 20px;
    right: 20px;
    width: 50px;
    height: 50px;
    background: #e11d48;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
    z-index: 2000;
    box-shadow: 0 4px 15px rgba(0,0,0,0.2);
    transition: transform 0.3s;
}

#music-control:hover {
    transform: scale(1.1);
}

#music-icon {
    color: white;
    font-size: 20px;
}
/* About Him Section */
/* Container adjustments for 5 photos */
.about-him {
    background: #ffffff;
    padding: 100px 5%;
    display: flex;
    flex-direction: column; /* Stack vertically on small screens */
    align-items: center;
    gap: 40px;
    overflow: hidden;
}

@media (min-width: 1024px) {
    .about-him {
        flex-direction: row;
        padding: 100px 10%;
    }
    .him-text { flex: 0.8; }
    .him-photos { flex: 1.2; }
}

.him-photos {
    position: relative;
    height: 500px;
    width: 100%;
    max-width: 600px;
    display: flex;
    justify-content: center;
}

.polaroid {
    position: absolute;
    background: white;
    padding: 10px 10px 20px 10px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    width: 170px; /* Made slightly smaller to fit 5 nicely */
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}

.polaroid img {
    width: 100%;
    height: 150px;
    object-fit: cover;
}

.caption {
    font-family: 'Cursive', sans-serif;
    font-size: 0.9rem;
    margin-top: 8px;
    color: #475569;
}

/* Unique Positions and Rotations for 5 photos */
.photo-1 { --rotation: -12deg; left: 0%;   top: 10%; animation: float-slow 6s infinite; }
.photo-2 { --rotation: 6deg;   left: 20%;  top: 5%;  animation: float-slow 6s infinite 1s; }
.photo-3 { --rotation: -4deg;  left: 40%;  top: 15%; animation: float-slow 6s infinite 2s; }
.photo-4 { --rotation: 10deg;  left: 60%;  top: 8%;  animation: float-slow 6s infinite 3.5s; }
.photo-5 { --rotation: -7deg;  left: 75%;  top: 20%; animation: float-slow 6s infinite 4.5s; }

.polaroid:hover {
    transform: scale(1.2) rotate(0deg) !important;
    z-index: 100 !important;
    box-shadow: 0 25px 50px rgba(0,0,0,0.2);
    animation: none;
}

@keyframes float-slow {
    0%, 100% { transform: translateY(0) rotate(var(--rotation)); }
    50% { transform: translateY(-15px) rotate(var(--rotation)); }
}

/* Mobile Tweaks */
@media (max-width: 768px) {
    .him-photos { height: 450px; }
    .polaroid { width: 140px; }
    /* Spread them a bit more vertically on mobile so they don't overlap too much */
    .photo-1 { left: 5%; top: 5%; }
    .photo-2 { left: 50%; top: 10%; }
    .photo-3 { left: 10%; top: 40%; }
    .photo-4 { left: 55%; top: 45%; }
    .photo-5 { left: 30%; top: 70%; }
}
.him-section {
    padding: 100px 5%;
    background: #fff;
    text-align: center;
}

.him-intro {
    max-width: 600px;
    margin: 0 auto 50px;
}

.him-intro h2 {
    font-size: 2.8rem;
    color: #e11d48;
    margin-bottom: 15px;
}

.him-gallery {
    display: flex;
    width: 100%;
    height: 450px;
    gap: 15px;
}

.him-card {
    position: relative;
    flex: 1; /* All start equal */
    overflow: hidden;
    border-radius: 20px;
    cursor: pointer;
    transition: all 0.6s cubic-bezier(0.25, 1, 0.5, 1);
    box-shadow: 0 10px 20px rgba(0,0,0,0.1);
}

.him-card img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.6s;
}

/* The Secret Sauce: Hover expansion */
.him-card:hover {
    flex: 4; /* Grows while others stay small */
}

.him-card:hover img {
    transform: scale(1.05);
}

/* Text Overlay */
.him-overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    padding: 30px 20px;
    background: linear-gradient(transparent, rgba(0,0,0,0.8));
    color: white;
    opacity: 0;
    transition: opacity 0.4s;
    text-align: left;
}

.him-card:hover .him-overlay {
    opacity: 1;
}

.him-overlay span {
    font-size: 1.2rem;
    font-weight: 600;
    letter-spacing: 1px;
    border-left: 3px solid #e11d48;
    padding-left: 10px;
}

/* Mobile Responsive: Stack them vertically or scroll */
@media (max-width: 768px) {
    .him-gallery {
        flex-direction: column;
        height: auto;
    }
    .him-card {
        flex: none;
        height: 250px;
        width: 100%;
    }
    .him-card:hover {
        flex: none; /* Disable expansion on mobile for better scrolling */
    }
    .him-overlay {
        opacity: 1; /* Always show text on mobile */
        padding: 15px;
    }
}
    </style>
</head>
<body>
<audio id="bgMusic" loop>
    <source src="music/music.mp3" type="audio/mpeg">
    Your browser does not support the audio element.
</audio>

<div id="music-control" onclick="toggleMusic()">
    <span id="music-icon">🎵</span>
</div>
    <!-- <nav>
        <div class="logo">GEMINI_CMS</div>
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#media">Media</a></li>
        </ul>
    </nav> -->

   <section id="home" class="banner">
    <img src="images/baaanner.png" alt="Office Banner" class="banner-img">
    
    <div class="banner-overlay"></div>
    
    <div class="banner-content">
        <h1>To My Forever Valentine❤️</h1>
        <p>Just a little space on the internet dedicated to my favorite person in the world. Happy Valentine's Day!</p>
    </div>
</section>
    <section id="about" class="about">
        <div class="about-image">
            <img src="images/save_date_01.jpg" alt="Team working">
        </div>
        <div class="about-content">
            <h2>Dear Love❤️,</h2>

                <p>I know you’re not really into Valentine’s Day… and honestly, love doesn’t need a special day ❤️. What we have is forever. Still… please accept this little gift from me, made just for you.</p>

                <p>You might be wondering, "What is she doing with a whole website?" 😅 Well… I wanted to show you in my own way how much I love you and how much you mean to me.</p>

                <p>You are amazing — so kind, so loving, so supportive, and a little wonderfully crazy. When you’re not with me, I’m counting every second until I see you again ⏳. Even now, even though you’re already my husband, I still have a crush on you. I still miss you. I still get butterflies.</p>

                <p>You are my everything… my happiness, my comfort, my safe place 💕.</p>

                <p><strong>P.S.</strong> I don’t have money for fancy gifts, so I chose this way instead. Please don’t hate me… it’s all love, just for you.</p>
        </div>
    </section>
    <section id="special-note" class="note-section">
    <div class="note-container">
        <div class="floating-img left-img">
            <img src="images/baby_1.dng" alt="My Love">
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
            <img src="images/baby_2.dng" alt="Soulmate">
        </div>
    </div>
</section>
    <section id="media" class="media">
        <h2>Moments</h2>
        <div class="grid">
            <!-- <div class="media-card">
                <img src="images/save_date_02.jpg" alt="Project 1">
            </div> -->
             <div class="media-card">
                <img src="images/moment_01.jpg" alt="Project 1">
            </div>
            <!-- <div class="media-card">
                <img src="images/save_date_03.jpg" alt="Project 2">
            </div> -->
             <div class="media-card">
                <img src="images/phuket_03.dng" alt="Project 2">
            </div>
            <div class="media-card">
                <img src="images/moment_02.dng" alt="Project 2">
            </div>
            <!-- <div class="media-card">
                <img src="images/moment_03.jpeg" alt="Project 2">
            </div> -->
            <div class="media-card">
                <img src="images/moment_04.jpeg" alt="Project 2">
            </div>
            <div class="media-card">
                <img src="images/moment_05.jpeg" alt="Project 2">
            </div>
            <div class="media-card">
                <img src="images/save_date_04.jpg" alt="Project 3">
            </div>
             <!-- <div class="media-card">
                <img src="images/save_date_05.jpg" alt="Project 3">
            </div>
            <div class="media-card">
                <img src="images/save_the_date_06.jpg" alt="Project 3">
            </div> -->
        </div>
    </section>

<section id="wedding" class="wedding-gallery">
    <div class="section-header">
        <h2>Wedding Moments</h2>
        <div class="heart-divider">❤</div>
        <div style="margin-bottom: 30px;">
            <a href="https://peejaystories.wfolio.pro/disk/pranav-haritha-2p9zxv" target="_blank" class="btn-outline">View All Photos</a>
        </div>
        <p>A glimpse into the day we said "I do."</p>
    </div>

    <div class="gallery-container">
        <div class="gallery-item"><img src="images/wedding/wedd2.jpg" alt="The Vows"></div>
        <div class="gallery-item"><img src="images/wedding/wedding_us_15.jpg" alt="Our First Dance"></div>
        <div class="gallery-item large"><img src="images/wedding/wedding_us_03.jpg" alt="The Kiss"></div>
        <div class="gallery-item"><img src="images/wedding/wedding_us_04.jpg" alt="Cake Cutting"></div>
        <div class="gallery-item"><img src="images/wedding/wedding_us_05.jpg" alt="With Family"></div>
        <div class="gallery-item"><img src="images/wedding/wedding_us_06.jpg" alt="Golden Hour"></div>
        <div class="gallery-item"><img src="images/wedding/wedding_us_10.jpg" alt="Golden Hour"></div>
        <div class="gallery-item"><img src="images/wedding/wedding_us_11.jpg" alt="Golden Hour"></div>
        <div class="gallery-item"><img src="images/wedding/wedding_us_12.jpg" alt="Golden Hour"></div>
        <div class="gallery-item"><img src="images/wedding/wedding_us_13.jpg" alt="Golden Hour"></div>
        <div class="gallery-item"><img src="images/wedding/wedding_us_14.jpg" alt="Golden Hour"></div>
    </div>
</section>
<section id="about-him" class="him-section">
    <div class="him-intro">
        <h2>About Him ❤️</h2>
        <p> He’s the man who makes every day feel like a celebration. Whether he’s being the most supportive partner or the biggest goofball in the room, he’s the heart of our home.</p>
    </div>

    <div class="him-gallery">
        <div class="him-card">
            <img src="images/wedding/groom_01.jpg" alt="The Best Smile">
            <div class="him-overlay">
                <span>The Best Smile</span>
            </div>
        </div>
        
        <div class="him-card">
            <img src="images/wedding/groom_02.jpg" alt="My Whole World">
            <div class="him-overlay">
                <span>My Whole World</span>
            </div>
        </div>

        <div class="him-card">
            <img src="images/him/him_06.jpg" alt="Forever & Always">
            <div class="him-overlay">
                <span>Forever & Always</span>
            </div>
        </div>

        <div class="him-card active"> <img src="images/him/him_09.jpg" alt="Laughter">
            <div class="him-overlay">
                <span>Always making me laugh!</span>
            </div>
        </div>

        <div class="him-card">
            <img src="images/him/him_10.jpg" alt="The Best Hugs">
            <div class="him-overlay">
                <span>The Best Hugs</span>
            </div>
        </div>
    </div>
</section>
    <footer>
        <p>Forever yours ❤️ | Made with love by Your Lovely Wife</p>
    </footer>

</body>
<script>
    const music = document.getElementById("bgMusic");

// Start music on first interaction
window.addEventListener('click', () => {
    if (music.paused) {
        music.play();
    }
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
</html>