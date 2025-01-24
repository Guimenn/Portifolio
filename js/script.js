document.addEventListener('DOMContentLoaded', () => {
  const typewriterElement = document.getElementById('typewriter-name');
  const phrases = ["Guilherme Vidichosqui Men"];
  let currentPhraseIndex = 0;
  let charIndex = 0;

  function typeWriterEffect() {
    const currentPhrase = phrases[currentPhraseIndex];
    if (charIndex < currentPhrase.length) {
      typewriterElement.textContent += currentPhrase.charAt(charIndex);
      charIndex++;
      setTimeout(typeWriterEffect, 100); // Velocidade de digitação
    } else {
      setTimeout(() => eraseEffect(), 2000); // Pausa após digitar
    }
  }

  function eraseEffect() {
    const currentPhrase = phrases[currentPhraseIndex];
    if (charIndex > 0) {
      typewriterElement.textContent = currentPhrase.substring(0, charIndex - 1);
      charIndex--;
      setTimeout(eraseEffect, 50); // Velocidade para apagar
    } else {
      currentPhraseIndex = (currentPhraseIndex + 1) % phrases.length; // Próxima frase
      setTimeout(typeWriterEffect, 500); // Pausa antes de digitar novamente
    }
  }

  // Inicia a animação
  typeWriterEffect();
});

var Cards = document.querySelectorAll(".card");
var JobCards2 = document.querySelectorAll(".card-job");
Cards.forEach((card) => {
  card.addEventListener("mouseover", () => {
    card.style.transform = "scale(1.1)";
    card.style.transition = "transform 0.3s ease-in-out";
  });
  card.addEventListener("mouseout", () => {
    card.style.transform = "scale(1)";
  });
});
JobCards2.forEach((card) => {
  card.addEventListener("mouseover", () => {
    card.style.transform = "scale(1.05)";
    card.style.transition = "transform 0.3s ease-in-out";

  });
  card.addEventListener("mouseout", () => {
    card.style.transform = "scale(1)";
  });
});

if (typeof ScrollReveal !== 'undefined') {
  ScrollReveal({
    duration: 400
  });

  const bottom = ['#tech', '.card', '.insta', '.git', '.whats', '.linkedin', '.name-projetos'];
  const left = ['.texts', '.text', '#left'];
  const right = ['.text-p', '#right'];
  const top = ['.feature-item', '#top'];

  const revealElements = (elements, options) => {
    elements.forEach((element) => {
      if (document.querySelector(element)) {
        ScrollReveal().reveal(element, options);
      }
    });
  };


  revealElements(bottom, {
    duration: 1000,
    distance: '60px',
    easing: 'ease-in-out',
    origin: 'bottom',
    delay: 200,
    interval: 250
  });

  revealElements(left, {
    duration: 2000,
    distance: '70px',
    easing: 'ease-in-out',
    origin: 'left'
  });

  revealElements(right, {
    duration: 2000,
    distance: '70px',
    easing: 'ease-in-out',
    origin: 'right'
  });

  revealElements(top, {
    duration: 2000,
    distance: '70px',
    easing: 'ease-in-out',
    origin: 'top'
  });
} else {
  console.error('ScrollReveal is not defined');
};
ScrollReveal().reveal(JobCards2, {
  duration: 2000,
  distance: '70px',
  easing: 'ease-in-out',
  origin: 'bottom',
  scale: 1.1,
  rotate: 30,
  delay: 600,
  interval: 500
}); 




