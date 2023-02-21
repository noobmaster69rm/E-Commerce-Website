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

//Include libraries
include('../vendor/autoload.php');

//Create instance of MongoDB client, selecting database and collection(s)
$mongoClient = (new MongoDB\Client);
$db = $mongoClient->SneakerThings;
$collection = $db->Products;
$collection2 = $db->ProductsSale;

// Get the search query from the user
if (isset($_GET['search'])) {
    $search_query = $_GET['search'];
} else {
    $search_query = '';
}
//Search for matching results and if no data entered, display all products
if (!empty($search_query)) {
    $results = $collection->find(
        ['Keywords' => ['$regex' => $search_query, '$options' => 'i']]
    );
    $results2 = $collection2->find(
        ['Keywords' => ['$regex' => $search_query, '$options' => 'i']]
    );
} else {
    $results = $collection->find();
    $results2 = $collection2->find();
}

?>
<div class = "bs-collection">
    <div class = "bs-container">
        <div class = "bs-collection-wrapper">
            <form class=search-container action='search.php' method='get'>
                <br>
                <input id='search-bar' type='text' name='search' placeholder="Search for products">
                <input type='submit' value='Search'>
            </form>
            <div class="shop-product">

<?php

//finding products based on search criterias and displaying matching products
foreach ($results as $prods){
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
?>
<?php

//finding products based on search criterias and displaying matching products on sale
foreach ($results2 as $prods2) {
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

<?php
//Output the footer
outputFooter();

?>




