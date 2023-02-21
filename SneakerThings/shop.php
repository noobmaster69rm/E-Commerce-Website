<link rel="stylesheet" href="css/style.css">
<?php
//Include the PHP functions to be used on the page
include('common.php');

//Output header
outputHeader("Shop");

?>
<!-- Site header -->
<?php
//Output the navigation bar
Navbar();

//Main body
?>

<div class = "bs-collection">
    <div class = "bs-container">
        <div class = "bs-collection-wrapper">
            <h1 class="best-sellers">Recommendations</h1>
            <p class = "text-light">The best prices in town</p>
            <div class="shop-product">

<?php
include('../vendor/autoload.php');

$mongoClient = (new MongoDB\Client);
$db = $mongoClient->SneakerThings;

$Productss2 = $db->ProductsSale->find();

//Loading products on sale from db and outputting on page
foreach ($Productss2 as $prods2) {
                    echo '<div class="product">
                            <div class="product-content">
                                <div class="product-img">
                                    <img src="' . $prods2["Url"] . '" alt="product image">
                                </div>
                                <div class="product-btns">
                                    <button type="button" class="btn-cart" data-id="' . $prods2['_id'] . '"> add to cart <span>
                                    <i class="fas fa-plus"></i>
                                        </span>
                                    </button>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="product-info-top">
                                    <h2 class="sm-title">' . $prods2["Brand"] . '</h2>
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
                                <a href="#" class="product-name">' . $prods2["Description"] . '</a>
                                <p class="product-price1">Rs ' . $prods2["Original Price"] . '</p>
                                <p class="product-price">Rs ' . $prods2["Price"] . '</p>
                            </div>
                            <div class="off-info">
                                <h2 class="sm-title">SALE !</h2>
                            </div>
                    </div>';
                }
?>
            </div>
        </div>
    </div>
</div>

<div class="big-container">
    <div class="products">
        <div class="container">
            <h1 class="shop-title">SHOP OUR NEW COLLECTION</h1>
            <p class="text-light">New trendy sketches just to match your summer outfits.<br><br></p>
            <div class="sorting">
                <p>Sort by: <a href="shop.php?link=1">Descending Price</a><a href="shop.php?link=2">Ascending Price</a></p>
            </div>
            <div class="shop-product">


 <?php
include('vendor/autoload.php');

$mongoClient = (new MongoDB\Client);
$db = $mongoClient->SneakerThings;

$Productss = $db->Products->find();

// Sorting Collections by ascending/descending price
$optionsAsc = ['sort' => ['Price' => 1]];
$optionsDsc = ['sort' => ['Price' => -1]];

$productsAscending = $db->Products->find([], $optionsAsc);
$productsDescending = $db->Products->find([], $optionsDsc);

// load products from db, sort by descending and display products
if($_GET['link']=='1'){
     foreach ($productsDescending as $prods)
     {
         echo '<div class="product">
            <div class="product-content">
                <div class="product-img">
                    <img src="' .$prods["Url"]. '" alt="product image">
                </div>
                <div class="product-btns">
                    <button type="button" class="btn-cart" data-id="'.$prods['_id'].'"> add to cart <span>
                    <i class="fas fa-plus"></i>
                    </span>
                    </button>
                </div>
            </div>
            <div class="product-info">
                <div class="product-info-top">
                    <h2 class="sm-title">' .$prods["Brand"]. '</h2>
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
            <a href="#" class="product-name">' .$prods["Description"]. '</a>
            <p class="product-price">Rs ' .$prods["Price"]. '</p>
        </div>
    </div>';
     }
 }

// load products from db, sort by ascending and display products
else if($_GET['link']=='2'){
    foreach ($productsAscending as $prods)
    {
        echo '<div class="product">
            <div class="product-content">
                <div class="product-img">
                    <img src="' .$prods["Url"]. '" alt="product image">
                </div>
                <div class="product-btns">
                    <button type="button" class="btn-cart" data-id="'.$prods['_id'].'"> add to cart <span>
                    <i class="fas fa-plus"></i>
                    </span>
                    </button>
                </div>
            </div>
            <div class="product-info">
                <div class="product-info-top">
                    <h2 class="sm-title">' .$prods["Brand"]. '</h2>
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
            <a href="#" class="product-name">' .$prods["Description"]. '</a>
            <p class="product-price">Rs ' .$prods["Price"]. '</p>
        </div>
    </div>';
    }
}

//Display products without sorting
else{
    foreach ($Productss as $prods)
    {
        echo '<div class="product">
            <div class="product-content">
                <div class="product-img">
                    <img src="' .$prods["Url"]. '" alt="product image" data-url="' .$prods["Url"]. '">
                </div>
                <div class="product-btns">
                    <button type="button" class="btn-cart" data-id="'.$prods['_id'].'"> add to cart <span>
                    <i class="fas fa-plus"></i>
                    </span>
                    </button>
                </div>
            </div>
            <div class="product-info">
                <div class="product-info-top">
                    <h2 class="sm-title">' .$prods["Brand"]. '</h2>
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
            <a href="#" class="product-name">' .$prods["Description"]. '</a>
            <p class="product-price">Rs ' .$prods["Price"]. '</p>
        </div>
    </div>';
    }
}
?>
                <!-- AJAX script to send form data to backend -->
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

<!-- Site footer -->
<?php
//Output the footer
outputFooter();

?>