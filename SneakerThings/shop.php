<link rel="stylesheet" href="css/style.css">
<?php
//Include the PHP functions to be used on the page
include('common.php');

//Output header
outputHeader("Shop");

?>
<!-- Site header --> <?php
//Output the navigation bar
Navbar();

//Main body
?>

<div class="big-container">
    <div class="sorting">
        <p>Sort by: <a href="#">Brand</a><a href="#">Price</a></p>
    </div>
    <input type="text" placeholder="Search products">
    <div class="products">
        <div class="container">
            <h1 class="shop-title">SHOP OUR NEW COLLECTION</h1>
            <p class="text-light">New trendy sketches just to match your summer outfits.</p>
            <div class="shop-product">

 <?php
include('vendor/autoload.php');

$mongoClient = new MongoDB\Client("mongodb://localhost:27017");
$db = $mongoClient->SneakerThings;

$name= filter_input(INPUT_GET, 'Brand', FILTER_SANITIZE_STRING);
 $findCriteria = [
     "Brand" => $name,
 ];
$cursor = $db->Products->find($findCriteria);
$Productss = $db->Products->find();

foreach ($Productss as $prods)
{
    echo '<div class="product">';
    echo '                <div class="product-content">';
    echo '                    <div class="product-img">';
    echo '                        <img src="' .$prods["Url"]. '" alt="product image">';
    echo '                   </div>';
    echo '                    <div class="product-btns">';
    echo '                        <button type="button" class="btn-cart" data-id="'.$prods['_id'].'"> add to cart <span>';
    echo '                 <i class="fas fa-plus"></i>';
    echo '                 </span>';
    echo '                        </button>';
    echo '                    </div>';
    echo '                </div>';
    echo '                <div class="product-info">';
    echo '                    <div class="product-info-top">';
    echo '                        <h2 class="sm-title">' .$prods["Brand"]. '</h2>';
    echo '                        <div class="rating">';
    echo '                    <span>';
    echo '                    <i class="fas fa-star"></i>';
    echo '                    </span>';
    echo '                            <span>';
    echo '                    <i class="fas fa-star"></i>';
    echo '                    </span>';
    echo '                            <span>';
    echo '                    <i class="fas fa-star"></i>';
    echo '                    </span>';
    echo '                            <span>';
    echo '                    <i class="fas fa-star"></i>';
    echo '                    </span>';
    echo '                            <span>';
    echo '                    <i class="far fa-star"></i>';
    echo '                    </span>';
    echo '                        </div>';
    echo '                    </div>';
    echo '                    <a href="#" class="product-name">' .$prods["Description"]. '</a>';
    echo '                    <p class="product-price">Rs ' .$prods["Price"]. '</p>';
    echo '                </div>';
    echo ' </div>';
}
?>
                <script>
                    $(document).on('click', '.btn-cart', function() {
                        var productId = $(this).data('id');
                        $.ajax({
                            url: 'scripts/cart_script.php',
                            method: 'POST',
                            data: {"productId": productId},
                            success: function(response) {
                                alert('Product added to cart!');
                            }
                        });
                    });
                </script>

                <!-- end of single product -->
            </div>
        </div>
    </div>
</div>
<div class = "bs-collection">
    <div class = "bs-container">
        <div class = "bs-collection-wrapper">
            <h1 class="best-sellers">Recommendations</h1>
            <p class = "text-light">Shop the best sellers of the season</p>
            <div class="shop-product">
                <!-- single product -->
                <div class="product">
                    <div class="product-content">
                        <div class="product-img">
                            <img src="assets/images/shoe-2.png" alt="product image">
                        </div>
                        <div class="product-btns">
                            <button type="button" class="btn-cart" onclick="addToBasket()"> add to cart <span>
                     <i class="fas fa-plus"></i>
                     </span>
                            </button>
                        </div>
                    </div>
                    <div class="product-info">
                        <div class="product-info-top">
                            <h2 class="sm-title">SKECHERS</h2>
                            <div class="rating">
                        <span>
                        <i class="fas fa-star"></i>
                        </span>
                                <span>
                        <i class="fas fa-star"></i>
                        </span>
                                <span>
                        <i class="fas fa-star"></i>
                        </span>
                                <span>
                        <i class="fas fa-star"></i>
                        </span>
                                <span>
                        <i class="far fa-star"></i>
                        </span>
                            </div>
                        </div>
                        <a href="#" class="product-name">WOMEN'S SUMMITS UNO 232248-TPE</a>
                        <p class="product-price">Rs 4,355.00</p>
                    </div>
                </div>
                <!-- single product -->
                <div class="product">
                    <div class="product-content">
                        <div class="product-img">
                            <img src="assets/images/shoe-1.png" alt="product image">
                        </div>
                        <div class="product-btns">
                            <button type="button" class="btn-cart"> add to cart <span>
                        <i class="fas fa-plus"></i>
                        </span>
                            </button>
                        </div>
                    </div>
                    <div class="product-info">
                        <div class="product-info-top">
                            <h2 class="sm-title">SKECHERS</h2>
                            <div class="rating">
                        <span>
                        <i class="fas fa-star"></i>
                        </span>
                                <span>
                        <i class="fas fa-star"></i>
                        </span>
                                <span>
                        <i class="fas fa-star"></i>
                        </span>
                                <span>
                        <i class="fas fa-star"></i>
                        </span>
                                <span>
                        <i class="far fa-star"></i>
                        </span>
                            </div>
                        </div>
                        <a href="#" class="product-name">Bounder-Intread 232377-BBK</a>
                        <p class="product-price">Rs 3,815.00</p>
                        <p class="product-price">Rs 3,433.5</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Site footer --> <?php
//Output the footer
outputFooter();

?>