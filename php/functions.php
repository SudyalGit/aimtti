<?php

function setMeta($pageTitle, $pageDescription, $pageKeywords, $pageUrl, $pageImgUrl)
{
    echo '
    
<meta charset="UTF-8" />
<link rel="shortcut icon" href="' . $GLOBALS["favicon"] . '" type="image/x-icon" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />

<title>' . $pageTitle . '</title>

<meta name="description" content="' . $pageDescription . '" />
<meta name="keywords" content="' . $pageKeywords . '" />

<meta property="og:title" content="' . $pageTitle . '" />
<meta property="og:description" content="' . $pageDescription . '" />
<meta property="og:url" content="' . $pageUrl . '" />
<meta property="og:type" content="product" />
<meta property="og:image" content="' . $pageImgUrl . '" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="' . $pageTitle . '" />
<meta name="twitter:description" content="' . $pageDescription . '" />
<meta name="twitter:image" content="' . $pageImgUrl . '" />

<link rel="canonical" href="' . $pageUrl . '" />
    
    ';
}

function productListRender($productList)
{

    foreach ($productList as $product) {
        echo '
        
<tr>
    <td>
        <img src="https://www.aimtti.com/sites/default/files/styles/prod_cats/public/image/large/' . $product["ImageURL"] . '"
            alt="">
    </td>
    <td>
        <a href="' . $GLOBALS["domain"] . 'product-category' . $product["ProductURL"] . '">' . $product["ProductName"] . '</a>
        <br><br>
        <p>
            ' . $product["ProductDescription"] . '
        </p>
    </td>
</tr>

        ';
    }
}

function productCarousel($imgUrls)
{
    $index = 1;
    foreach ($imgUrls as $imgUrl) {
        echo '

<div class="mySlides">
    <img class="model-for-image cursor" data-img="" src="' . $imgUrl . '" alt="">
</div>

        ';
    }

    echo '
    
<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

    ';

    echo '<div class="row">';

    foreach ($imgUrls as $imgUrl) {
        echo '
    
<div class="column">
    <img class="demo cursor" src="' . $imgUrl . '" style="width:100%" onclick="currentSlide(' . $index++ . ')" alt="">
</div>

        ';
    }

    echo '</div>';
}

function modelListRender($modelList){

    foreach ($modelList as $model) {
        echo '
        
<tr>
    <td class="model-image">
        <img src="https://www.aimtti.com/sites/default/files/styles/medium/public/' . $model["ImageURL"] . '"
            alt="">
    </td>
    <td class="model-details">
        <h4>' . $model["ModelName"] . '</h4>
        <p>
            ' . $model["ModelDescription"] . '
        </p>
    </td>
    <td class="model-price">
        ' . $model["Price"] . ' €
    </td>
    <td class="add-to-quotation">
        <form action="">
            <label for="">Quantity</label>
            <br>
            <input type="number" min="1" name="" id="">
            <br>
            <input type="submit" name="" id="" value="Add to Quotation">
        </form>
    </td>
</tr>
        
        ';
    }
}