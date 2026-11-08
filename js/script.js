const container = document.getElementById('slidesContainer');
const slides = document.querySelectorAll('.slide');
const dots = document.querySelectorAll('.indicator-dot');
const navLinks = document.querySelectorAll('.header-nav a');
let currentSlide = 0;

function goToSlide(index) {
    if (index < 0 || index >= slides.length) return;
    slides[index].scrollIntoView({ behavior: 'smooth' });
}

// Active State Observer for Slides
const observerOptions = {
    root: container,
    threshold: 0.5
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            const idx = parseInt(entry.target.getAttribute('data-index'), 10);
            currentSlide = idx;

            // Update Dots
            dots.forEach((dot, i) => {
                dot.classList.toggle('active', i === idx);
            });

            // Update Header Nav
            navLinks.forEach((link, i) => {
                link.classList.toggle('active', i === idx);
            });
        }
    });
}, observerOptions);

slides.forEach(slide => observer.observe(slide));

// Keyboard Navigation (Up / Down Arrow Keys)
window.addEventListener('keydown', (e) => {
    if (document.getElementById('cvModal').classList.contains('active')) {
        if (e.key === 'Escape') closeModal();
        return;
    }

    if (e.key === 'ArrowDown' || e.key === 'PageDown') {
        if (currentSlide < slides.length - 1) {
            goToSlide(currentSlide + 1);
            e.preventDefault();
        }
    } else if (e.key === 'ArrowUp' || e.key === 'PageUp') {
        if (currentSlide > 0) {
            goToSlide(currentSlide - 1);
            e.preventDefault();
        }
    }
});

// Modal Controls
function openModal() {
    document.getElementById('cvModal').classList.add('active');
}

function closeModal() {
    document.getElementById('cvModal').classList.remove('active');
}

function closeModalOnBackdrop(e) {
    if (e.target.id === 'cvModal') closeModal();
}

// Reliable Clipboard Copying
function copyToClipboard(text, message) {
    const temp = document.createElement('textarea');
    temp.value = text;
    document.body.appendChild(temp);
    temp.select();
    try {
        document.execCommand('copy');
        showToast(message || 'Copied to clipboard');
    } catch (err) {
        showToast('Failed to copy');
    }
    document.body.removeChild(temp);
}

function showToast(msg) {
    const toast = document.getElementById('toast');
    toast.textContent = msg;
    toast.classList.add('show');
    setTimeout(() => {
        toast.classList.remove('show');
    }, 2000);
}
