const backgroundImage = document.getElementById('background-image');

const imagePaths = [
    'imagens/imagem1.png',
    'imagens/imagem2.jpeg',
    'imagens/imagem3.jpg'
];

let currentImageIndex = 0;

function changeBackground() {
    const imageUrl = imagePaths[currentImageIndex];
    backgroundImage.style.backgroundImage = `url(${imageUrl})`;

    currentImageIndex = (currentImageIndex + 1) % imagePaths.length;
}

function autoChangeBackground() {
    changeBackground();
    setTimeout(autoChangeBackground, 10000);
}

autoChangeBackground();