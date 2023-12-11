<!DocType html>
<html>

<header>

    <style>
        .product-list-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}

.product-card {
  width: 30%;
  margin-bottom: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
  padding: 10px;
  box-sizing: border-box;
}

.product-card img {
  width: 100%;
  height: auto;
  border-radius: 5px;
  margin-bottom: 10px;
}

.product-title {
  font-size: 20px;
  margin: 0;
}

.product-description {
  margin: 10px 0;
}

.product-price {
  font-weight: bold;
  margin: 0;
}
    </style>
</header>

<body>
    <div class="product-list-container">
        <div class="product-card">
          <img src="product-image.jpg" alt="Product Name">
          <h3 class="product-title">Product Name</h3>
          <p class="product-description">Product description goes here.</p>
          <p class="product-price">$10.00</p>
        </div>
        <!-- Add more product card elements here as needed -->
      </div>
</body>
</html>