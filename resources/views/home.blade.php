@extends('template')

@section('contenido')

<div class="container sm">
  <br><br>
    <h1>NOTICIAS</h1>
  <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="10000">
        <a href="https://elpais.com/eps/2022-10-15/leer-libros-prohibidos.html">
        <img src="https://imagenes.elpais.com/resizer/6P1hpLuGyh8afpDx1dQWyIDCXps=/1960x0/cloudfront-eu-central-1.images.arcpublishing.com/prisa/EI3APSYPH5C4LHB6SO3GRYZQ6A.jpg" class="d-block w-100" alt="notice1"></a>
        <div class="carousel-caption d-none d-md-block  mt-7">
          <h5>Leer libros prohibidos</h5>
          <p>Con intolerable osadía, las bibliotecas públicas cobijan en su silencio la algarabía de las innumerables voces</p>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <a href="https://elpais.com/cultura/2022-10-04/la-doble-cara-del-marques-de-santillana.html">
        <img src="https://imagenes.elpais.com/resizer/8upCZue8yUYGERl1ZGtzSDfUsE8=/980x0/cloudfront-eu-central-1.images.arcpublishing.com/prisa/YVTSBGCX7LRU2SHYKCPO7N6PHQ.jpg" class="d-block w-100" alt="notice2"></a>
        <div class="carousel-caption d-none d-md-block text-white mt-7">
          <h5>La doble cara del marqués de Santillana</h5>
          <p>El Museo del Prado inaugura una exposición dedicada a Íñigo López de Mendoza, donde se muestran 23 joyas bibliográficas y pictóricas propiedad del noble</p>
        </div>
      </div>
      <div class="carousel-item">
        <a href="https://elpais.com/mexico/2022-09-10/pareja-en-papel.html">
        <img src="https://imagenes.elpais.com/resizer/cAD5I8SuAyLqxmO3Ij63GJs5-Es=/980x0/cloudfront-eu-central-1.images.arcpublishing.com/prisa/5YUTCBOMOZDK5ILMEZKD4IQD5A.jpeg" class="d-block w-100" alt="notice3"></a>
        <div class="carousel-caption d-none d-md-block  mt-7">
          <h5>Pareja en papel</h5>
          <p>Nos hemos leído todo el tiempo, incluso antes de conocernos. Releemos en silencio los mejores párrafos y hemos editado con inmensa comodidad los pasajes más horribles de nuestra historia</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>
  @stop