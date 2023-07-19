const images2 = [...document.querySelectorAll('.image2')];

// popup2
const popup2 = document.querySelector('.popup2');
const closeBtn2 = document.querySelector('.close-btn2');
const imageName2 = document.querySelector('.image-name2');
const largeImage2 = document.querySelector('.large-image2');
const indexImage2 = document.querySelector('.index2');
const leftArrow2 = document.querySelector('.left-arrow2');
const rightArrow2 = document.querySelector('.right-arrow2');

let index2 = 1;

images2.forEach((item, i) => {
    item.addEventListener('click', () => {
        updateImage2(item.getAttribute('src'), i);
        popup2.classList.toggle('active');
    });
});

const updateImage2 = (path, i) => {
    largeImage2.src = path;
    imageName2.innerHTML = '';
    indexImage2.innerHTML = ``;
    index2 = i;
};

closeBtn2.addEventListener('click', () => {
    popup2.classList.toggle('active');
});

leftArrow2.addEventListener('click', () => {
    if (index2 > 0) {
        updateImage2(images2[index2 - 1].getAttribute('src'), index2 - 1);
    }
});

rightArrow2.addEventListener('click', () => {
    if (index2 < images2.length - 1) {
        updateImage2(images2[index2 + 1].getAttribute('src'), index2 + 1);
    } else {
        updateImage2(images2[0].getAttribute('src'), 0);
    }
});