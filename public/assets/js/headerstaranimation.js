// Stars animation
window.addEventListener('DOMContentLoaded', () => {
  const stars = document.querySelectorAll('.star');

  stars.forEach(star => {
    const top = Math.random() * 90;
    const left = Math.random() * 90;

    star.style.top = `${top}%`;
    star.style.left = `${left}%`;

    const delay = Math.random() * 3;
    star.style.animationDelay = `${delay}s`;
  });
});