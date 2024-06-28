console.log("product-carousel running!");

let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides((slideIndex += n));
}

function currentSlide(n) {
  showSlides((slideIndex = n));
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("demo");
  let captionText = document.getElementById("caption");
  if (n > slides.length) {
    slideIndex = 1;
  }
  if (n < 1) {
    slideIndex = slides.length;
  }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex - 1].style.display = "block";
  dots[slideIndex - 1].className += " active";
}

console.log("modal also running!");
let modal = document.getElementById("myModal");
let img = document.querySelectorAll(".model-for-image");
// console.log(img);
let modalImg = document.getElementById("img01");

for (let i = 0; i < img.length; i++) {
  img[i].onclick = function () {
    modal.style.display = "block";
    modalImg.src = this.dataset.img;
    modalImg.alt = this.alt;
  };
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function () {
  modal.style.display = "none";
};

document.addEventListener("keydown", function (event) {
  if (event.key === "Escape" || event.keyCode === 27) {
    modal.style.display = "none";
  }
});

const modelTitleProduct = document.getElementById("model-title-product");
const modelTitleOptions = document.getElementById("model-title-options");
const modelTitleAccessories = document.getElementById(
  "model-title-accessories"
);
const modelTitleData = document.getElementById("model-title-data");

function changeModelTitle(e) {
  console.log(e.target.dataset.id);
  // display block of element with id of e.target.dataset.id
  document
    .getElementById(e.target.dataset.id)
    .classList.remove("hide");

    if(e.target.dataset.id === "model-title-product"){
      modelTitleOptions.classList.add("hide");
      modelTitleAccessories.classList.add("hide");
      modelTitleData.classList.add("hide");
    }
    if(e.target.dataset.id === "model-title-options"){
      modelTitleProduct.classList.add("hide");
      modelTitleAccessories.classList.add("hide");
      modelTitleData.classList.add("hide");
    }
    if(e.target.dataset.id === "model-title-accessories"){
      modelTitleProduct.classList.add("hide");
      modelTitleOptions.classList.add("hide");
      modelTitleData.classList.add("hide");
    }
    if(e.target.dataset.id === "model-title-data"){
      modelTitleProduct.classList.add("hide");
      modelTitleOptions.classList.add("hide");
      modelTitleAccessories.classList.add("hide");
    } 
    
}
