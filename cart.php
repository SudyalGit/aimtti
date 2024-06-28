<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="<?php echo $domain; ?>favicon.ico" type="image/vnd.microsoft.icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart Example</title>
</head>

<body>
    <h1>Product List</h1>
    <div id="products">
        <div class="product">
            <h2>Product 1</h2>
            <button onclick="addToCart('Product 1', 100)">Add to Cart</button>
        </div>
        <div class="product">
            <h2>Product 2</h2>
            <button onclick="addToCart('Product 2', 150)">Add to Cart</button>
        </div>
    </div>
    <h2>Cart</h2>
    <div id="cart"></div>

    <script>
        // Function to add item to the cart
        function addToCart(productName, productPrice) {
            let cart = JSON.parse(localStorage.getItem('cart')) || [];

            // Check if product already in cart
            let product = cart.find(item => item.name === productName);
            if (product) {
                product.quantity += 1;
            } else {
                cart.push({
                    name: productName,
                    price: productPrice,
                    quantity: 1
                });
            }

            localStorage.setItem('cart', JSON.stringify(cart));
            displayCart();
        }

        // Function to display cart items
        function displayCart() {
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            let cartElement = document.getElementById('cart');
            cartElement.innerHTML = '';

            cart.forEach(item => {
                let cartItem = document.createElement('div');
                cartItem.textContent = `${item.name} - ${item.quantity} x $${item.price}`;
                cartElement.appendChild(cartItem);
            });
        }

        // Display cart on page load
        window.onload = displayCart;
    </script>
</body>

</html>