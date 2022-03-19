

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scandiweb</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="product">
        <h3>Product List</h3>

        <div class="btngroup">
            <a class="btn btn-primary btn-sm" href="addproduct.php">Add</a>
            <a id="delete-product-btn" href="#" class="btn btn-danger btn-sm">mass delete </a>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <!-- -->
            <?php
                $reponse=file_get_contents("http://localhost/scandi/api/index.php");
                $reponse=json_decode($reponse,true);
                if($reponse["error"]==false){
                  for ($i=0; $i <count($reponse["data"]) ; $i++) { 
                  $data= $reponse["data"][$i];
                //   print_r($data);
                  
                

            ?>
            <div class="col-3">
                <div class="card pl-3" style="width:12rem">
                    <input class="mt-3" type="checkbox" id="<?php echo $data["pid"] ?>" />
                    <ul>
                        <li><?php echo $data["sku"] ?></li>
                        <li><?php echo $data["product_name"] ?></li>
                        <li><?php echo $data["product_price"] ?></li>
                        <li><?php echo $data["product_size"] ?></li>
                    </ul>
                </div>
            </div>
            <?php
   }
}
            ?>
            <!-- -->
        </div>
    </div>

    <!--  end -->
</body>

</html>