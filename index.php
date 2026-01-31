<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raven L. Torres</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>

<!-- Start Screen -->
<div id="start-screen" class="start-screen">
    <h1>click anywhere to proceed...</h1>
</div>

<!-- Overlay -->
<div class="overlay"></div>

<!-- Center Content -->
<div id="center-content" class="center-content">
    <div class="left-column">
        <!-- Mini Player -->
        <div id="mini-player" class="mini-player">
            <div class="album-wrapper">
                <img src="album/album1.jpg" alt="Album Cover" class="album-cover">
                <div class="volume-container">
                    <button class="volume-button" title="Mute/Unmute">
                        <i class="fas fa-volume-up"></i>
                    </button>
                    <input type="range" class="volume-slider" min="0" max="1" step="0.01" value="0.5" title="Volume">
                </div>
            </div>
            <input type="range" class="seek-bar" min="0" max="100" value="0" title="Seek">
            <div class="player-controls">
                <button class="prev" title="Previous"><i class="fas fa-backward"></i></button>
                <button class="play" title="Play/Pause"><i class="fas fa-play"></i></button>
                <button class="next" title="Next"><i class="fas fa-forward"></i></button>
            </div>
        </div>
    </div>

    <div class="right-column">
        <!-- Profile -->
        <img src="prof.jpg" alt="Profile Picture" class="profile-pic">
        <h1>Raven L. Torres</h1>

     <div class="social-icons">
            <a href="https://github.com/ravestorres" title="GitHub"><i class="fab fa-github"></i></a>

    <a href="https://www.facebook.com/kingpandaraves/" title="Facebook"><i class="fab fa-facebook-f"></i></a>
    <a href="https://www.instagram.com/kingraves/" title="Instagram"><i class="fab fa-instagram"></i></a>
    <a href="#" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
    <a href="https://www.youtube.com/@pandapandafaves" title="YouTube Channel 1"><i class="fab fa-youtube"></i></a>
    <a href="https://www.youtube.com/@pandapandafavoritesxoxo" title="YouTube Channel 2"><i class="fab fa-youtube"></i></a>
    <a href="https://open.spotify.com/user/8alhlmny42u1qypw0xi7djwu0?nd=1&dlsi=46c83ae44c494cd6" title="Spotify"><i class="fab fa-spotify"></i></a>
    <a href="https://www.last.fm/user/jaebumx1" title="Last.fm"><i class="fab fa-lastfm"></i></a>
    <a href="https://www.tiktok.com/@pandapandafaves" title="TikTok Account 1"><i class="fab fa-tiktok"></i></a>
    <a href="https://www.tiktok.com/@jaebumx2" title="TikTok Account 2"><i class="fab fa-tiktok"></i></a>
</div>

        <!-- Enter Site -->
        <div class="nav-button">
            <a href="#" id="enter-site">Enter Site</a>
        </div>

        <!-- Navigation Menu -->
        <div id="nav-menu" class="nav-menu">
            <a href="#about" title="About" class="active"><i class="fas fa-user"></i></a>
            <a href="#projects" title="Projects"><i class="fas fa-briefcase"></i></a>
            <a href="#certificates" title="Certificates"><i class="fas fa-certificate"></i></a>
            <a href="#portfolio" title="Portfolio"><i class="fas fa-folder-open"></i></a>
        </div>
    </div>
</div>

<!-- Main Content (Hidden initially) -->
<div id="main-content" class="main-content hidden">
    <!-- About Section -->
    <section id="about" class="section show">
        <div class="card">
           <center><h2>About Me</h2></center> 
            <p>Hello! I'm Raven L. Torres, a passionate developer and creative professional. With expertise in web development and design, I create engaging digital experiences that blend form and function seamlessly.</p>
            <p>My journey in tech started with a curiosity for how things work, which evolved into a passion for building solutions that make a difference. I believe in clean code, intuitive design, and continuous learning.</p>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="section">
        <div class="card">
            <h2>Projects</h2>
            <p>Explore my latest projects and contributions on GitHub. From web applications to creative coding experiments, you'll find a variety of work that showcases my skills and passion for development.</p>
            <center>
            <a href="https://github.com/ravestorres" target="_blank" class="project-link">
                <i class="fab fa-github"></i> View My GitHub Profile
            </a>
</center>
      
    </section>

  <!-- Certificates Section (3 items only) -->
<section id="certificates" class="section">
    <div class="card">
        <h2>Certificates</h2>
        <p>Professional certifications and achievements that validate my skills and knowledge in various domains.</p>
        
        <div class="certificate-gallery">
            <!-- Certificate 1 -->
            <div class="certificate-item">
                <img src="cert/cert1.png" alt="Certificate 1" class="certificate-image">
                <div class="certificate-overlay">
                    <h3 class="certificate-title">Web Development</h3>
                    <p class="certificate-description">Full Stack Development Certification</p>
                </div>
            </div>
            
            <!-- Certificate 2 -->
            <div class="certificate-item">
                <img src="cert/cert2.png" alt="Certificate 2" class="certificate-image">
                <div class="certificate-overlay">
                    <h3 class="certificate-title">Cloud Computing</h3>
                    <p class="certificate-description">AWS Certified Solutions Architect</p>
                </div>
            </div>
            
            <!-- Certificate 3 -->
            <div class="certificate-item">
                <img src="cert/cert3.png" alt="Certificate 3" class="certificate-image">
                <div class="certificate-overlay">
                    <h3 class="certificate-title">Cyber Security</h3>
                    <p class="certificate-description">Certified Ethical Hacker</p>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="section">
        <div class="card">
            <h2>Portfolio</h2>
            <p>A collection of my creative works, designs, and projects that demonstrate my skills and artistic vision.</p>
            
            <div class="gallery">
                <!-- Portfolio Item 1 -->
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="Web Design Project">
                </div>
                
                <!-- Portfolio Item 2 -->
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1551650975-87deedd944c3?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="Mobile App Design">
                </div>
                
                <!-- Portfolio Item 3 -->
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="Brand Identity">
                </div>
                
                <!-- Portfolio Item 4 -->
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1545235617-9465d2a55698?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="UI Components">
                </div>
                
                <!-- Portfolio Item 5 -->
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1545235617-9465d2a55698?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="Dashboard Design">
                </div>
                
                <!-- Portfolio Item 6 -->
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="E-commerce Design">
                </div>
                
                <!-- Portfolio Item 7 -->
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1551650975-87deedd944c3?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="Logo Design">
                </div>
                
                <!-- Portfolio Item 8 -->
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="Illustration Work">
                </div>
                
                <!-- Portfolio Item 9 -->
                <div class="gallery-item">
                    <div class="gallery-placeholder">
                        <i class="fas fa-plus-circle"></i>
                        <p class="placeholder-text">More projects coming soon!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; 2025 Raven L. Torres. All rights reserved.</p>
    </footer>
</div>

<script>
// Audio will be declared globally so all functions can access it
let audio;

document.addEventListener('DOMContentLoaded', () => {
    const startScreen = document.getElementById('start-screen');
    const overlay = document.querySelector('.overlay');
    const centerContent = document.getElementById('center-content');
    const mainContent = document.getElementById('main-content');
    const navMenu = document.getElementById('nav-menu');
    const socials = document.querySelector('.social-icons');
    const enterBtn = document.getElementById('enter-site');
    const enterDiv = document.querySelector('.nav-button');
    const sections = document.querySelectorAll('.section');
    const navLinks = document.querySelectorAll('.nav-menu a');

    // Start Screen Click
    startScreen.addEventListener('click', () => {
        startScreen.classList.add('hide');
        setTimeout(() => {
            overlay.style.display = 'none';
        }, 600);
        centerContent.classList.add('fade-in');
    });

    // Enter Site Button
    enterBtn.addEventListener('click', e => {
        e.preventDefault();
        
        // Move the center content up
        centerContent.classList.add('moved-up');
        
        // Hide social icons and enter button
        if (socials) socials.style.display = 'none';
        if (enterDiv) enterDiv.style.display = 'none';
        
        // Show navigation menu
        navMenu.style.display = 'flex';
        
        // Show main content and auto-scroll to about section
        mainContent.classList.remove('hidden');
        setTimeout(() => {
            mainContent.classList.add('show');
            
            // Show only the about section initially
            sections.forEach(section => section.classList.remove('show'));
            document.getElementById('about').classList.add('show');
            
            // Set about as active
            setActiveNav('about');
            
            // Smooth scroll to about section
            setTimeout(() => {
                document.getElementById('about').scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }, 300);
        }, 100);
    });

    // Function to set active navigation
    function setActiveNav(sectionId) {
        navLinks.forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('href') === `#${sectionId}`) {
                link.classList.add('active');
            }
        });
    }

    // Navigation menu
    navLinks.forEach(link => {
        link.addEventListener('click', e => {
            e.preventDefault();
            const targetId = link.getAttribute('href').substring(1);
            const targetSection = document.getElementById(targetId);
            
            if (targetSection) {
                // Update active navigation
                setActiveNav(targetId);
                
                // Hide all sections first
                sections.forEach(section => section.classList.remove('show'));
                
                // Special handling for projects (GitHub redirect)
                if (targetId === 'projects') {
                    window.open('https://github.com/ravestorres', '_blank');
                    // Still show the projects section
                    setTimeout(() => {
                        targetSection.classList.add('show');
                        targetSection.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }, 100);
                } else {
                    // Show target section after a short delay
                    setTimeout(() => {
                        targetSection.classList.add('show');
                        
                        // Scroll to target section
                        targetSection.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }, 100);
                }
            }
        });
    });

    // Mini Player functionality
    const tracks = [
        { 
            src: 'NewJeans - Ditto.mp3', 
            cover: 'album/album1.jpg' 
        }
    ];
    
    let currentTrack = 0;
    audio = new Audio();
    audio.volume = 0.5;
    
    const playBtn = document.querySelector('.play');
    const prevBtn = document.querySelector('.prev');
    const nextBtn = document.querySelector('.next');
    const volumeSlider = document.querySelector('.volume-slider');
    const volumeButton = document.querySelector('.volume-button');
    const seekBar = document.querySelector('.seek-bar');
    const albumCover = document.querySelector('.album-cover');

    // Load first track
    loadTrack(currentTrack);

    function loadTrack(index) {
        if (tracks[index]) {
            audio.src = tracks[index].src;
            albumCover.src = tracks[index].cover;
            audio.load();
            audio.currentTime = 0;
            playBtn.innerHTML = '<i class="fas fa-play"></i>';
        }
    }

    playBtn.addEventListener('click', () => {
        if (audio.paused) {
            audio.play().catch(e => console.log('Audio play failed:', e));
            playBtn.innerHTML = '<i class="fas fa-pause"></i>';
        } else {
            audio.pause();
            playBtn.innerHTML = '<i class="fas fa-play"></i>';
        }
    });

    prevBtn.addEventListener('click', () => {
        currentTrack = (currentTrack - 1 + tracks.length) % tracks.length;
        loadTrack(currentTrack);
        if (!audio.paused) {
            audio.play();
        }
    });

    nextBtn.addEventListener('click', () => {
        currentTrack = (currentTrack + 1) % tracks.length;
        loadTrack(currentTrack);
        if (!audio.paused) {
            audio.play();
        }
    });

    // Volume control
    if (volumeSlider) {
        volumeSlider.addEventListener('input', () => {
            audio.volume = volumeSlider.value;
            if (volumeButton) {
                updateVolumeIcon(audio.volume);
            }
        });
    }

    // Volume button click to mute/unmute
    if (volumeButton) {
        volumeButton.addEventListener('click', () => {
            if (audio.volume > 0) {
                audio.dataset.lastVolume = audio.volume;
                audio.volume = 0;
                if (volumeSlider) volumeSlider.value = 0;
                volumeButton.innerHTML = '<i class="fas fa-volume-mute"></i>';
            } else {
                const lastVolume = audio.dataset.lastVolume || 0.5;
                audio.volume = lastVolume;
                if (volumeSlider) volumeSlider.value = lastVolume;
                updateVolumeIcon(lastVolume);
            }
        });
    }

    // Function to update volume icon based on volume level
    function updateVolumeIcon(volume) {
        if (!volumeButton) return;
        
        if (volume === 0) {
            volumeButton.innerHTML = '<i class="fas fa-volume-mute"></i>';
        } else if (volume < 0.3) {
            volumeButton.innerHTML = '<i class="fas fa-volume-down"></i>';
        } else {
            volumeButton.innerHTML = '<i class="fas fa-volume-up"></i>';
        }
    }

    // Initialize volume icon
    if (volumeButton) {
        updateVolumeIcon(audio.volume);
    }

    // Update volume icon when slider changes
    if (volumeSlider && volumeButton) {
        volumeSlider.addEventListener('input', () => {
            updateVolumeIcon(parseFloat(volumeSlider.value));
        });
    }

    audio.addEventListener('timeupdate', () => {
        if (audio.duration && !isNaN(audio.duration)) {
            const progress = (audio.currentTime / audio.duration) * 100;
            seekBar.value = progress;
        }
    });

    seekBar.addEventListener('input', () => {
        if (audio.duration && !isNaN(audio.duration)) {
            const seekTime = (seekBar.value / 100) * audio.duration;
            audio.currentTime = seekTime;
        }
    });

    audio.addEventListener('ended', () => {
        playBtn.innerHTML = '<i class="fas fa-play"></i>';
    });

    audio.addEventListener('play', () => {
        playBtn.innerHTML = '<i class="fas fa-pause"></i>';
    });

    audio.addEventListener('pause', () => {
        playBtn.innerHTML = '<i class="fas fa-play"></i>';
    });

    // Handle audio loading errors
    audio.addEventListener('error', (e) => {
        console.error('Audio error:', e);
        alert('Error loading audio file. Please check the file path.');
    });
});

</script>

</body>
</html>