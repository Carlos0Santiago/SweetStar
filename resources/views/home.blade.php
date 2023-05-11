<!DOCTYPE html>
<html lang="en">
@include('partials.nav2')

<head>
  <meta charset="UTF-8">
  <title>Pastelería SweetStar</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.0/css/bootstrap.min.css">
  <style>
    body {
      background-color: #ffffff;
    }

    .hero-image {
      background-image: url('https://images.unsplash.com/photo-1603384358453-e337643f75fa?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1237&q=80'); /* Cambia la URL por la imagen de tu elección */
      background-size: cover;
      background-position: center;
      height: 900px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }

    .hero-text {
      color: #ffffff;
      font-size: 60px;
      font-weight: bold;
      text-align: center;
    }

    .slogan {
      color: #ffffff;
      font-size: 24px;
      text-align: center;
      margin-top: 20px;
    }
  </style>
</head>
<body>
  <div class="hero-image">
    <h1 class="hero-text">SweetStar</h1>
    <p class="slogan">LA MAGIA DEL SABOR EN CADA BOCADO</p>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>
