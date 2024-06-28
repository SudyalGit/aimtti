<?php $domain = "http://localhost/mywork/" ?>

<?php echo '
<header>
    <div class="header-top">
        <div class="header-top-left">
            <img src="' . $domain . 'assets/images/Aim-TTi-logo_220.png" alt="">
            <div class="slogan">Measurably better value</div>
        </div>

        <div class="header-top-right">
            <select class="select-currency" name="" id="currencySelector">
                <option value="INR">INR</option>
                <option value="EUR">EUR</option>
                <option value="USD">USD</option>
                <option value="GBP">GBP</option>
            </select>
            <a href=""><img class="login" src="' . $domain . 'assets/images/login.png" alt=""></a>
            <a class="cart" href="">
                <p>🛒&nbsp;Empty</p>
            </a>
        </div>
    </div>
    <div class="header-bottom">
        <a href="' . $domain . '">Home</a>
        <a href="' . $domain . 'products">Products</a>
        <a href="' . $domain . 'news">What\'s New</a>
        <a href="' . $domain . 'about-aim-tti">About Aim-TTi</a>
        <a href="' . $domain . 'product-catalogues-and-data-sheets">Catalogues</a>
        <a href="">Where to buy</a>
        <a href="' . $domain . 'support">Support</a>
        <a href="'. $domain .'contact-aim-tti-india">Contact Us</a>
    </div>
</header>
<div class="alert-msg">
    <div class="alert">
        <div>ITEM SUCCESSFULLY ADDED TO YOUR QUOTATION</div>
        <p class="alert-name">Name</p>
        <p class="alert-qty">Qty</p>
        <a href="' . $domain . 'cart"><button>Go to cart</button></a>
    </div>
</div>
';