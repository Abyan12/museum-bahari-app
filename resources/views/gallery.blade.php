@extends('layouts.user')

@section('gallery')

<h1 id="galleryHeaderText">GALLERY</h1>
  <section>
    <div class="container-gallery">
      <div class="header-h">
        <form>
          <input type="text" placeholder="Search" id="search-box">
        </form>
      </div>
      <div class="gallery">
        <div class="item">
          <a href="#">
          <img src="assets/logo_x.png" alt="image" id="imageGallery" data-title="food">
            <h3>Koleksi 1</h3>
          </a>
        </div>
        <div class="item">
          <a href="#">
            <img src="assets/logo_x.png" alt="image" id="imageGallery" data-title="food">
            <h3>Koleksi 2</h3>
          </a>
        </div>
        <div class="item">
          <a href="#">
          <img src="assets/logo_x.png" alt="image" id="imageGallery" data-title="perahu">
            <h3>Koleksi 3</h3>
          </a>
        </div>
        <div class="item">
          <a href="#">
          <img src="assets/logo_x.png" alt="image" id="imageGallery" data-title="kapal">
            <h3>Koleksi 4</h3>
          </a>
        </div>
        <div class="item">
          <a href="#">
          <img src="assets/logo_x.png" alt="image" id="imageGallery" data-title="perahu">
            <h3>Koleksi 5</h3>
          </a>
        </div>
        <div class="item">
          <a href="#">
          <img src="assets/logo_x.png" alt="image" id="imageGallery" data-title="kapal">
            <h3>Koleksi 6</h3>
          </a>
        </div>
        <div class="item">
          <a href="#">
          <img src="assets/logo_x.png" alt="image" id="imageGallery" data-title="kapal">
            <h3>Koleksi 7</h3>
          </a>
        </div>
        <div class="item">
          <a href="#">
          <img src="assets/logo_x.png" alt="image" id="imageGallery" data-title="perahu">
            <h3>Koleksi 8</h3>
          </a>
        </div>
      </div>
    </div>
  </section>

@endsection