const galleryImages = document.querySelectorAll('.gallery-link');
const mainImage = document.getElementById('gallery-main');
galleryImages.forEach((img) => {
   img.addEventListener('click', function () {
      mainImage.setAttribute('src',this.src);
   })
});

