<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scandiweb</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
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
           <select id="productType">
               <option  value="red" id="Dvd">Dvd</option>
               <option  value="yellow" id="Furniture">Furniture</option>
               <option  value="blue" id="Book">Book</option>
           </select>
        </td>
    </tr>
    </table>

    <div class="change">
    <div id="red" class="color"> 
       <div>
        <input type="text" placeholder="enter size in mb"/>   
       </div>    
    </div>
    <div id="yellow" class="col">
    <div>
        <input type="text" placeholder="enter height in cm"/>   
       </div>           
</div>
    <div id="blue" class="colr">
    <div>
        <input type="text" placeholder="enter book number"/>   
       </div>         
</div>
    </div>


    <div>
        <button type="submit" class="mt-5 btn btn-primary btn-sm">Submit</button>
        <button type="submit" class="mt-5 btn btn-danger btn-sm">Cancel</button>
    </div>
</form>


<script>
$(document).ready(function(){
    $('.col, .colr').hide();
    $('#productType').change(function(){
        $('.color ,.col ,.colr').hide();
        $('#' + $(this).val()).show();
    });
  
});
</script>
</body>
</html>