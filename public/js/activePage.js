document.addEventListener('DOMContentLoaded', function () {
  let searchBox = document.querySelector('#search-box');
  let images = document.querySelectorAll('.item');
  let container = document.querySelector('.container-gallery');
  let originalContainerHeight;

  // Menyimpan tinggi asli container saat halaman dimuat
  originalContainerHeight = container.offsetHeight;

  searchBox.addEventListener('input', function () {
    let value = searchBox.value.toLowerCase();

    images.forEach(filter => {
      let title = filter.querySelector('img').getAttribute('data-title').toLowerCase();
      let displayStyle = title.includes(value) || value === '' ? 'block' : 'none';
      filter.style.display = displayStyle;
    });

     // Mengatur posisi scroll ke elemen .container-gallery
     if (value !== '') {
      container.style.height = originalContainerHeight + 'px';
      container.scrollIntoView({
        behavior: 'smooth'
      });
    } else {
      // Mengembalikan tinggi container ke nilai asli jika hasil pencarian kosong
      container.style.height = '';

      // Mengembalikan posisi halaman ke semula tanpa efek scroll
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    }
  });
});

function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}

