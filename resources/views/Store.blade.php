<!DOCTYPE html>
<html>
<head>
	<title>SweetStar - Pastelería</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
</head>
<body>
	
<header>
		<h1>SweetStar</h1>
        @include('partials.nav')
	</header>

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

</style>


