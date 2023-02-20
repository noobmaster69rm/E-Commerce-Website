<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Edit Sale</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/9a86419779.js" crossorigin="anonymous"></script>
</head>

<! Header !>
<header>
    <div class="menu">
        <a href="home.php">Home</a>
        <a href="addProduct.php">Add Product</a>
        <a href="editProduct.html">Edit Product</a>
        <a href="customerOrders.html">Orders</a>
        <a href="#">Logout</a>
    </div>
</header>

<! Main body !>
<body>
<div class="main2">
    <div class="title"><span>Edit Sale Product</span></div>
    <form action="editSaleProduct_script.php" method="post">
        <div class="row">
            <input type="text" placeholder="Product ID" required>
        </div>
        <div class="row">
            <input type="text" placeholder="Description" name="description" required>
        </div>
        <div class="row">
            <input type="text" placeholder="Original Price" name="price1" required>
        </div>
        <div class="row">
            <input type="text" placeholder="Sale Price" name="price" required>
        </div>
        <div class="row">
            <input type="text" placeholder="Keywords" name="keywords" required>
        </div>
        <div class="row">
            <input type="text" placeholder="Image URL" name="url" required>
        </div>
        <div class="row button">
            <button id="reg-btn" type="submit">Save</button>
        </div>
        <a href="editProduct.html">Click to edit normal product -></a>
    </form>
</div>


</body>
</html>