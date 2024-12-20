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

let projetos = [
  {
    title: "Rimac",
    image: "./img/rimac.png",
    link: "https://guimenn.github.io/Rimac"
  },
  {
    title: "Bugatti",
    image: "./img/Bugatti.png", 
    link: "https://guimenn.github.io/Bugatti"
  }
];
let nameProjetos = document.querySelector(".name-projetos");
let imageProjeto = document.querySelector(".image-projetos");

projetos.forEach(projeto => {
  // Criação do item de lista para o projeto
  let projetoLi = document.createElement("li");
  projetoLi.classList.add("li-projeto", "cursor-pointer", "font-semibold", "transition", "duration-300");

  const img = new Image();
  img.src = projeto.image; // Isso pré-carrega a imagem

  let projetoLink = document.createElement("a");
  projetoLink.setAttribute("href", projeto.link);
  projetoLink.setAttribute("target", "_blank");
  projetoLink.classList.add("projeto-link");

  let projetoDiv = document.createElement("div");
  projetoDiv.classList.add("projeto-container");

  let projetoH4 = document.createElement("h4");
  projetoH4.textContent = projeto.title;
  projetoH4.classList.add("projeto-title");

  let setaH4 = document.createElement("h4");
  setaH4.textContent = "➜";
  setaH4.classList.add("seta-title");

  let setaDIV = document.createElement("div");
  setaDIV.classList.add("seta-container");

  setaDIV.appendChild(setaH4);

  projetoDiv.appendChild(setaDIV);
  projetoDiv.appendChild(projetoH4);
  projetoLink.appendChild(projetoDiv);
  projetoLi.appendChild(projetoLink);

  nameProjetos.appendChild(projetoLi);

  // Criar a camada de fundo da imagem
  let backgroundLayer = document.createElement("div");
  backgroundLayer.classList.add("background-layer");
  imageProjeto.appendChild(backgroundLayer);

  // Inicialização dos estilos de transição e opacidade
  setaH4.style.transform = "translateX(-100%)";
  setaH4.style.opacity = "0";

  // Evento de hover para mostrar a imagem como background
  projetoLi.addEventListener("mouseenter", () => {
    // Exibe a seta e empurra o título
    setaH4.style.transform = "translateX(0)";
    setaH4.style.opacity = "1";
    setaH4.style.visibility = "visible";
    setaH4.style.transition = "0.25s ease-in-out";

    projetoH4.style.transform = "translateX(24px)";
    projetoH4.style.transition = "0.35s ease-in-out";

    backgroundLayer.style.transition = "opacity 0.5s ease-in-out"; // A transição da opacidade da camada de fundo
    backgroundLayer.style.opacity = "1"; // Torna a camada visível

    backgroundLayer.style.backgroundImage = `url(${projeto.image})`;
    backgroundLayer.style.backgroundSize = "cover";
    backgroundLayer.style.backgroundPosition = "center";
    backgroundLayer.style.backgroundRepeat = "no-repeat";
  });

  // Evento de hover para remover a imagem de background
  projetoLi.addEventListener("mouseleave", () => {
    // Esconde a seta e retorna o título para a posição original
    setaH4.style.transform = "translateX(-100%)";
    setaH4.style.opacity = "0";

    projetoH4.style.transform = "translateX(0)";

    backgroundLayer.style.transition = "opacity 0.5s ease-in-out"; // Transição suave da opacidade
    backgroundLayer.style.opacity = "0"; // Torna a camada invisível
  });
});
