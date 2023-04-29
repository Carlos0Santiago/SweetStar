<div class="product-grid">
  <div class="product-card">
    <div class="product-image">
      <img src="ruta-de-la-imagen.jpg" alt="Nombre del producto">
      <div class="product-discount">-20%</div>
      <button class="add-to-cart">Agregar al carrito</button>
    </div>
    <div class="product-info">
      <h3>Nombre del producto</h3>
      <span class="price"><del>$80.00</del> $64.00</span>
    </div>
  </div>
  <!-- Repetir el código de la tarjeta de producto para los productos restantes -->
</div>


<style>
  .product-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  grid-gap: 20px;
  margin: 20px;
}

.product-card {
  background-color: white;
  border-radius: 10px;
  box-shadow: 0 2px 4px rgba(0,0,0,0.2);
  overflow: hidden;
}

.product-image {
  position: relative;
}

.product-image img {
  display: block;
  height: 100%;
  object-fit: cover;
  width: 100%;
}

.product-discount {
  background-color: #f89c2e;
  border-radius: 0 10px 0 10px;
  color: white;
  font-size: 18px;
  font-weight: bold;
  left: 0;
  padding: 10px;
  position: absolute;
  top: 0;
}

.product-info {
  padding: 20px;
}

.product-info h3 {
  font-size: 20px;
  margin: 0;
}

.price {
  display: block;
  font-size: 18px;
  margin: 10px 0 20px;
}

.price del {
  color: #999;
  font-size: 16px;
  margin-right: 10px;
  text-decoration: line-through;
}

.add-to-cart {
  background-color: #2ecc71;
  border: none;
  border-radius: 5px;
  color: white;
  cursor: pointer;
  font-size: 16px;
  margin-top: 10px;
  padding: 10px 20px;
  position: absolute;
  bottom: 20px;
  right: 20px;
}

</style>



<script>

const addToCartButtons = document.querySelectorAll('.add-to-cart');
const cart = [];

addToCartButtons.forEach(button => {
  button.addEventListener('click', () => {
    const productCard = button.closest('.product-card');
    const productName = productCard.querySelector('h3').textContent;
    const productPrice = productCard.querySelector('.price').textContent;
    
    cart.push({
      name: productName,
      price: productPrice
    });
    
    console.log(cart);
  });
});


</script>