<!DOCTYPE html>
<html>
<head>
	<title>SweetStar - Pastelería</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
</head>
<header>
		<h1>SweetStar</h1>
        @include('partials.nav')
	</header>

<body>
	
   
    <section id="cards">
        <div class="card">
          <img src="https://cdn.aarp.net/content/dam/aarp/home-and-family/your-home/2022/03/1140-bundt-cake-esp.imgcache.rev.web.700.402.jpg" alt="Torta de chocolate">
          <h2>Torta de chocolate</h2>
          <p>Un clásico irresistible</p>
        </div>
        <div class="card">
          <img src="https://cdn0.recetasgratis.net/es/posts/1/4/9/cheesecake_de_frutos_rojos_73941_600.webp" alt="Cheesecake de frutos rojos">
          <h2>Cheesecake de frutos rojos</h2>
          <p>La combinación perfecta de dulce y ácido</p>
        </div>
        <div class="card">
          <img src="https://www.clarin.com/img/2021/04/29/9lAb2baoa_1256x620__1.jpg" alt="Cupcakes">
          <h2>Cupcakes</h2>
          <p>Para una merienda divertida y sabrosa</p>
        </div>
      </section>
   

<div class="gallery">
  <div class="gallery-container">
    <div class="gallery-images">
      <div class="gallery-image">
        <img src="https://via.placeholder.com/300x200" alt="Imagen 1">
        <span>Pastel de chocolate</span>
      </div>
      <div class="gallery-image">
        <img src="https://via.placeholder.com/300x200" alt="Imagen 2">
        <span>Pastel de chocolate</span>
      </div>
      <div class="gallery-image">
        <img src="https://via.placeholder.com/300x200" alt="Imagen 3">
        <span>Pastel de chocolate</span>
      </div>
      <div class="gallery-image">
        <img src="https://via.placeholder.com/300x200" alt="Imagen 4">
        <span>Pastel de chocolate</span>
      </div>
      <div class="gallery-image">
        <img src="https://via.placeholder.com/300x200" alt="Imagen 5">
        <span>Pastel de chocolate</span>
      </div>
      <div class="gallery-image">
        <img src="https://via.placeholder.com/300x200" alt="Imagen 6">
        <span>Pastel de chocolate</span>
      </div>
      <div class="gallery-image">
        <img src="https://via.placeholder.com/300x200" alt="Imagen 7">
        <span>Pastel de chocolate</span>
      </div>
      <div class="gallery-image">
        <img src="https://via.placeholder.com/300x200" alt="Imagen 8">
        <span>Pastel de chocobanana</span>
      </div>
    </div>
  </div>
</div>


      
</body>
</html>

<style>
    header {
  background-color: #F8F8F8;
  border-bottom: 1px solid #EAEAEA;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 1rem;
}

h1 {
  font-family: 'Helvetica', sans-serif;
  font-size: 2rem;
  color: #333;
  margin: 0;
}

nav ul {
  list-style: none;
  margin: 0;
  padding: 0;
  display: flex;
}

nav li {
  margin-left: 1rem;
}

nav a {
  font-family: 'Helvetica', sans-serif;
  font-size: 1.2rem;
  color: #333;
  text-decoration: none;
  padding: 0.5rem;
  border-radius: 5px;
}

nav a:hover {
  background-color: #333;
  color: #fff;
}


#cards {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.card {
  flex-basis: 25%;
  display: flex;
  flex-direction: column;
  align-items: center;
  margin: 0 0.5rem;
  transition: transform 0.3s ease-in-out;
}

.card:hover {
  transform: translateY(-10px);
}

.card:first-child,
.card:last-child {
  flex-basis: 20%;
}

.card:nth-child(2) {
  flex-basis: 30%;
}

.card img {
  width: 100%;
  height: auto;
  border-radius: 10px;
}

.card h2 {
  font-size: 1.2rem;
  margin-top: 0.8rem;
}

.card p {
  font-size: 1rem;
  text-align: center;
}

.gallery {
  width: 100%;
  height: 400px;
  overflow: hidden;
  position: relative;
}

.gallery-container {
  display: flex;
  flex-wrap: nowrap;
  transition: transform 0.5s ease-in-out;
}

.gallery-images {
  display: flex;
  flex-wrap: nowrap;
  gap: 1rem;
  width: calc(4 * (300px + 1rem));
}

.gallery-image {
  display: flex;
  flex-direction: column;
  align-items: center;
}

.gallery-image img {
  width: 345px;
  height: auto;
  object-fit: cover;
  border-radius: 10px;
}

.gallery-image span {
  margin-top: 0.5rem;
  font-size: 0.8rem;
  font-weight: bold;
  text-align: center;
}


</style>


<script>const gallery = document.querySelector('.gallery');
const container = document.querySelector('.gallery-container');
const images = document.querySelectorAll('.gallery-images img');
const imageWidth = images[0].clientWidth + 16;
let mouseX = 0;

gallery.addEventListener('mousemove', e => {
  mouseX = e.clientX - gallery.offsetLeft;
  const maxScroll = container.scrollWidth - gallery.offsetWidth;
  const scrollX = mouseX / gallery.offsetWidth * maxScroll;
  container.style.transform = `translateX(-${scrollX}px)`;
});

</script>