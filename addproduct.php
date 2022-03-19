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

    <table>
        <tr>
            <td>
                <p>SKU</p>
            </td>
            <td>
                <input type="text" id="sku" />
            </td>
        </tr>
        <tr>
            <td>
                <p>Name</p>
            </td>
            <td>
                <input type="text" id="name" />
            </td>
        </tr>
        <tr>
            <td>
                <p>Price</p>
            </td>
            <td>
                <input type="text" id="price" />
            </td>
        </tr>
        <tr>
            <td>
                <p>Product Type</p>
            </td>
            <td>
                <select id="productType">
                    <option value="red" id="Dvd">Dvd</option>
                    <option value="yellow" id="Furniture">Furniture</option>
                    <option value="blue" id="Book">Book</option>
                </select>
            </td>
        </tr>
    </table>

    <div class="change">
        <div class="color">
            <div>
                <input type="text" id="size" placeholder="enter size in mb" />
            </div>
        </div>

    </div>


    <div>
        <button type="button" id="submit" class="mt-5 btn btn-primary btn-sm">Submit</button>
        <button type="reset" class="mt-5 btn btn-danger btn-sm">Cancel</button>
    </div>



    <script>
        $(document).ready(function() {
           

            $("#submit").click(function(e) {
                e.preventDefault();
                var name = $("#name").val();
                var sku = $("#sku").val();
                var price = $("#price").val();
                var productType = $("#productType").val();
                var size = $("#size").val();

                if (name && sku && price && productType && size) {
                    $.ajax({
                        type: "post",
                        url: "api/index.php",
                        data: {
                            "product_name":name,
                            "product_price":price,
                            "product_size":size,
                            "sku":sku,
                            "type":productType
                        },
                        dataType: "text",
                        success: function (response) {
                            const obj = JSON.parse(response);
                            alert(obj.message);
                        }
                    });

                }else{
                    alert("All fields are required")
                }

            });

        });
    </script>
</body>

</html>