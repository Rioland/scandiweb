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
  
<form id="product_form">
<table>
    <tr>
        <td>
           <p>SKU</p> 
        </td>
        <td>
          <input type="text"/> 
        </td>
    </tr>
    <tr>
        <td>
           <p>Name</p> 
        </td>
        <td>
           <input type="text"/> 
        </td>
    </tr>
    <tr>
        <td>
           <p>Price</p> 
        </td>
        <td>
           <input type="text"/> 
        </td>
    </tr>
    <tr>
        <td>
           <p>Product Type</p> 
        </td>
        <td>
           <select  onchange = "typeswitcher()" id="productType">
               <option id="Dvd">Dvd</option>
               <option id="Furniture">Furniture</option>
               <option id="Book">Book</option>
           </select>
        </td>
    </tr>
    </table>

    <div class="change">
       <!--- Dvd -->
        <div class="Dvd">
        <table>
        <tr>
        <td>
           <p>Size(MB)</p> 
        </td>
        <td>
           <input id="size" type="text"/> 
        </td>
    </tr> 
        </table>
        </div>
       <!--- Furniture -->
       <div class="Furniture">
        <table>
    <tr>
        <td>
           <p>Height (CM)</p> 
        </td>
        <td>
           <input id="height" type="text"/> 
        </td>
    </tr> 
    <tr>
        <td>
           <p>Width (CM)</p> 
        </td>
        <td>
           <input id="width" type="text"/> 
        </td>
    </tr> 
    <tr>
        <td>
           <p>Length (CM)</p> 
        </td>
        <td>
           <input id="weight" type="text"/> 
        </td>
    </tr> 
        </table>
        </div>
          <!--- Book -->
          <div class="Book">
        <table>
        <tr>
        <td>
           <p>Weight (KG)</p> 
        </td>
        <td>
           <input id="weight" type="text"/> 
        </td>
    </tr> 
        </table>
        </div>
    </div>
</form>


<script>
    function typeswitcher(){
  let myswitch = document.getElementById('productType').value;
    console.log(myswitch);
    }
</script>
</body>
</html>