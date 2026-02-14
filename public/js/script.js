        const music = document.getElementById("bgMusic");
        window.addEventListener('click', () => {
            if (music.paused) music.play();
        }, {
            once: true
        });

        function toggleMusic() {
            if (music.paused) {
                music.play();
                document.getElementById("music-icon").innerText = "🎵";
            } else {
                music.pause();
                document.getElementById("music-icon").innerText = "🔇";
            }
        }
       document.addEventListener('DOMContentLoaded', function() {
    const noBtn = document.getElementById('noBtn');
    const yesBtn = document.getElementById('yesBtn');
    const questionText = document.querySelector('.ask-container h3');
    const subHeader = document.querySelector('.ask-container h2'); // "So, after all that..."

    // --- 1. No Button Logic ---
    const moveButton = () => {
        const x = Math.random() * (window.innerWidth - noBtn.offsetWidth - 20);
        const y = Math.random() * (window.innerHeight - noBtn.offsetHeight - 20);
        
        noBtn.style.position = 'fixed';
        noBtn.style.left = `${x}px`;
        noBtn.style.top = `${y}px`;
        noBtn.style.zIndex = "1000";
    };

    noBtn.addEventListener('mouseover', moveButton);
    noBtn.addEventListener('touchstart', (e) => {
        e.preventDefault();
        moveButton();
    });

    // --- 2. Yes Button Logic ---
    yesBtn.addEventListener('click', () => {
        // Hide the elements you requested
        subHeader.style.display = 'none'; // Hides "So, after all that..."
        yesBtn.style.display = 'none';    // Hides the Yes button
        noBtn.style.display = 'none';     // Hides the No button if it's floating
        
        // Update the main text
        questionText.innerHTML = "Yay! I knew you'd say yes! 🥰❤️<br><small style='font-size: 1rem; color: #64748b;'>You're stuck with me forever!</small>";
        
        // Trigger Hearts
        for (let i = 0; i < 50; i++) {
            setTimeout(createHeart, i * 100);
        }
    });

    // --- 3. Heart Animation ---
    function createHeart() {
        const heart = document.createElement('div');
        heart.classList.add('floating-heart');
        heart.innerHTML = '❤️';
        heart.style.left = Math.random() * 100 + 'vw';
        heart.style.top = '100vh';
        heart.style.fontSize = (Math.random() * 20 + 20) + 'px';
        
        document.body.appendChild(heart);
        
        setTimeout(() => {
            heart.remove();
        }, 3000);
    }
});

// Separate Music Logic (Keep this if you want)
function toggleMusic() {
    const music = document.getElementById("bgMusic");
    const icon = document.getElementById("music-icon");
    if (music.paused) {
        music.play();
        icon.innerText = "🎵";
    } else {
        music.pause();
        icon.innerText = "🔇";
    }
}