// les variables qui va prendre le id de la page php 

const html = document.documentElement;
const canvas = document.getElementById("hero-lightpass");
const context = canvas.getContext("2d");

const frameCount = 148;
const currentFrame = index => (
    `https://www.apple.com/105/media/us/airpods-pro/2019/1299e2f5_9206_4470_b28e_08307a42f19b/anim/sequence/large/01-hero-lightpass/${index.toString().padStart(4, '0')}.jpg`
)

const preloadImages = () => {
    for (let i = 1; i < frameCount; i++) {
        const img = new Image();
        img.src = currentFrame(i);
    }
};

const img = new Image()
img.src = currentFrame(1);
canvas.width = 1158;
canvas.height = 770;
img.onload = function () {
    context.drawImage(img, 0, 0);
}

const updateImage = index => {
    img.src = currentFrame(index);
    context.drawImage(img, 0, 0);
}

// regarde la la hauteur quand on scroll

window.addEventListener('scroll', () => {
    const scrollTop = html.scrollTop;
    const maxScrollTop = html.scrollHeight - window.innerHeight;
    const scrollFraction = scrollTop / maxScrollTop;
    console.log(scrollFraction);

    // fonction qui permet de changer le css quand on est arrivé à la fin de l'animation
    function end(scrollFraction) {
        if (scrollFraction >= 1) {

            document.querySelector("#hero-lightpass").style.position = "relative";
            document.querySelector("#hero-lightpass").style.top = "50%";
            document.querySelector("#hero-lightpass").style.transform = "translate(-50%, 10%)";
            document.querySelector("#hello").style.color = "white";

        } else {
            document.querySelector("#hero-lightpass").style.position = "fixed";
            document.querySelector("#hero-lightpass").style.top = "50%";
            document.querySelector("#hero-lightpass").style.transform = "translate(-50%, -50%)";

            document.querySelector("#hello").style.color = "black";

        }
    }
    end(scrollFraction);
    const frameIndex = Math.min(
        frameCount - 1,
        Math.ceil(scrollFraction * frameCount)
    );

    requestAnimationFrame(() => updateImage(frameIndex + 1))
});





preloadImages()