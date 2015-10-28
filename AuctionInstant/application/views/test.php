<?php ?>

<html>
<head>
<title>Upload Form</title>
</head>
<body>


<?php var_dump($product_info); ?>

<h1>Product Name: <?=$product_info['name']; ?> </h1>
<h1>Product Description: <?=$product_info['description']; ?> </h1>
<h1>Product Starting Price: <?=$product_info['starting_price']; ?> </h1>
<h1>Product:</h1>
 <img src="<?=$product_info['image'];?>"
</body>
</html>
