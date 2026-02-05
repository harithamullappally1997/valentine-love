<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>For My Love ❤️</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #fde2e4, #e2ece9, #bee1e6); /* pastel theme */
            color: #5a4a4a;
            text-align: center;
            overflow-x: hidden;
        }

        /* Banner */
       .banner {
    height: 100vh;
    background: linear-gradient(rgba(255,255,255,.6), rgba(255,255,255,.6));
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 20px;
}
.hero-banner {
    width: 100%;
    height: 90vh; /* adjusts nicely on all screens */
    background-image: url("{{ asset('images/baaanner.png') }}");
    background-size: cover;        /* keeps aspect ratio */
    background-position: center;   /* crops nicely */
    background-repeat: no-repeat;
}
        .banner h1 { font-size: 3.5rem; margin-bottom: 10px; }
        .banner p { font-size: 1.4rem; }

        .container {
    max-width: 1200px;
    margin: auto;
    padding: 80px 24px;
}

        .card {
    background: rgba(255,255,255,0.85);
    padding: 50px;
    border-radius: 28px;
    margin-bottom: 80px;
    box-shadow: 0 12px 40px rgba(0,0,0,0.05);
}
section.content-section {
    padding: 100px 0;
}

        /* Floating hearts */
        .heart {
            position: fixed;
            bottom: -20px;
            font-size: 22px;
            animation: floatUp 6s linear infinite;
            pointer-events: none;
        }
        @keyframes floatUp {
            0% { transform: translateY(0); opacity: 1; }
            100% { transform: translateY(-110vh); opacity: 0; }
        }

        /* Gallery */
        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
        }
       .gallery img {
    width: 100%;
    height: 280px;
    object-fit: cover;
    border-radius: 24px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.08);
}


        /* Valentine Question */
        .question {
            margin-top: 40px;
        }
        .btn {
            padding: 14px 36px;
            border-radius: 30px;
            border: none;
            font-size: 16px;
            cursor: pointer;
            margin: 15px;
        }
        .yes { background: #ffcad4; color: #6b3a3a; font-weight: bold; box-shadow: 0 6px 15px rgba(0,0,0,0.1); }
        .no { background: #b8e0d2; color: #355f5b; position: absolute; box-shadow: 0 6px 15px rgba(0,0,0,0.1); }

        footer {
            background: rgba(255,255,255,0.6);
            padding: 25px 10px;
            margin-top: 80px;
            font-size: 0.95rem;
            color: #6b5b5b;
        }
        body {
    margin: 0;
    font-family: 'Segoe UI', sans-serif;
    background: #fff6f0; /* matches banner warmth */
    color: #4a3f3f;
}
h1, h2 {
    font-weight: 700;
    letter-spacing: -0.5px;
}

h2 {
    margin-bottom: 30px;
}

p {
    font-size: 1.05rem;
    line-height: 1.8;
}

    </style>
</head>
<body>

<!-- Background music AUTO -->
<audio id="music"  autoplay loop muted playsinline>
    <source src="{{ asset('music/music.mp3') }}" type="audio/mpeg">
</audio>

<!-- Banner -->
<!-- <section class="banner" 
">
<picture>
    <img src="{{ asset('images/banner.png') }}" >
</picture>
    <h1>Happy Valentine’s Day ❤️</h1>
    <p>Pranav, my forever love</p>
    <h3 id="countdown"></h3>
</section> -->
<section class="hero-banner"></section>
<!-- Love Letter Section -->
<!-- Love Letter Section -->
<!-- Love Letter Section -->
<section class="content-section" id="loveLetter" style="padding: 0; background: linear-gradient(135deg, #fde2e4, #e2ece9, #bee1e6);">
    <div class="container" style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; max-width: 1200px; margin: auto; padding: 80px 24px; gap: 40px;">

        <!-- Left: Love Letter Text -->
        <div style="flex: 1; min-width: 300px; text-align: left;">
            <div class="card" style="padding: 40px; border-radius: 28px; background: rgba(255,255,255,0.85); box-shadow: 0 12px 40px rgba(0,0,0,0.05);">
                <p>Dear Love,</p>

                <p>I know you’re not really into Valentine’s Day… and honestly, love doesn’t need a special day ❤️. What we have is forever. Still… please accept this little gift from me, made just for you.</p>

                <p>You might be wondering, "What is she doing with a whole website?" 😅 Well… I wanted to show you in my own way how much I love you and how much you mean to me.</p>

                <p>You are amazing — so kind, so loving, so supportive, and a little wonderfully crazy. When you’re not with me, I’m counting every second until I see you again ⏳. Even now, even though you’re already my husband, I still have a crush on you. I still miss you. I still get butterflies.</p>

                <p>You are my everything… my happiness, my comfort, my safe place 💕.</p>

                <p><strong>P.S.</strong> I don’t have money for fancy gifts, so I chose this way instead. Please don’t hate me… it’s all love, just for you.</p>
            </div>
        </div>

        <!-- Right: Image -->
        <div style="flex: 1; min-width: 300px;">
            <img src="/mnt/data/af9c5057-7faa-4b5c-936f-80319ec3dad2.png" 
                 alt="Love Image" 
                 style="width: 100%; height: auto; border-radius: 28px; box-shadow: 0 12px 40px rgba(0,0,0,0.05); object-fit: cover;">
        </div>

    </div>
</section>



<section class="content-section">
<div class="container">

    <!-- Typed Love Letter -->
    <div class="card">
        <p id="typedText"></p>
    </div>

    <!-- Valentine Question -->
    <div class="card question">
        <h2>Will you be my Valentine? 💖</h2>
        <button class="btn yes" onclick="yesClick()">Yes ❤️</button>
        <button class="btn no" id="noBtn">No 😜</button>
    </div>

    <!-- Photo Gallery -->
    <div class="card">
        <h2>Our Memories 📸</h2>
        <div class="gallery">
            <img src="https://images.unsplash.com/photo-1529626455594-4ff0802cfb7e">
            <img src="https://images.unsplash.com/photo-1500530855697-b586d89ba3ee">
            <img src="https://images.unsplash.com/photo-1517841905240-472988babdf9">
        </div>
    </div>

</div>
</section>
<footer>
    <p>Forever yours ❤️ | Made with love by Your Lovely Wife</p>
</footer>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const noBtn = document.querySelector('.no');
    const questionSection = document.querySelector('.question');

    if (!noBtn || !questionSection) return;

    noBtn.addEventListener('mouseover', () => {
        const sectionRect = questionSection.getBoundingClientRect();
        const btnRect = noBtn.getBoundingClientRect();

        const maxX = sectionRect.width - btnRect.width;
        const maxY = sectionRect.height - btnRect.height;

        const randomX = Math.random() * maxX;
        const randomY = Math.random() * maxY;

        noBtn.style.left = randomX + 'px';
        noBtn.style.top = randomY + 'px';
    });
});
document.addEventListener('click', () => {
    const music = document.getElementById('music');
    if (!music) return;

    music.muted = false;
    music.volume = 0;
    music.play();

    let vol = 0;
    const fade = setInterval(() => {
        if (vol < 0.45) {
            vol += 0.015;
            music.volume = vol;
        } else {
            clearInterval(fade);
        }
    }, 250);
}, { once: true });
</script>


</body>
</html>
