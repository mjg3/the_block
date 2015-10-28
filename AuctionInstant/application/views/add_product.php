<html>
    <head>
        <title>Add a Product</title>

    </head>
    <body>
      <?php echo form_open_multipart('products/do_upload');?>
        <input type="text" name="name" placeholder="name">
        <input type="textarea" name="description" placeholder="description">
        <input type="text" name="starting_price" placeholder="price">
        <input type="file" name="userfile" size="20">
        <input type="submit" value="Add Your Product!">
      </form>
    </body>
</html>
