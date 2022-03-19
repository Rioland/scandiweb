<?php
class ProductController extends BaseController
{


public function __construct($requestMethod,$id)
{
 $this->requestMethod=$requestMethod;   
 $this->id=$id;
} 

private $requestMethod ="";
private  $id="";
  
    public function listAction()
    {
        $strErrorDesc = '';
        $prodModel = new ProductModel();
        if (strtoupper($this->requestMethod) == 'GET') {
            try {
                
 
                
                if (isset($this->id)) {
                    
                    $arrProd = $prodModel->getProductBy($this->id);
                    $data=array(
                        "error"=>false,
                        "message"=>"success",
                        "data"=>$arrProd
                    );
                    $responseData = json_encode($data);
                    $responseData;
                }else{
                    $arrProd = $prodModel->getProduct();
                    $data=array(
                        "error"=>false,
                        "message"=>"success",
                        "data"=>$arrProd
                    );
                    $responseData = json_encode($data);
                    $responseData;

                }
 
                
            } catch (Error $e) {
                $strErrorDesc = $e->getMessage().'Something went wrong! Please contact support.';
                $strErrorHeader = 'HTTP/1.1 500 Internal Server Error';
            }
        } else if (strtoupper($this->requestMethod) == 'POST') {
            if(isset($_POST['product_name']) and isset($_POST['product_price']) and isset($_POST['product_size']) and isset($_POST['sku']) and isset($_POST['type'])){
                $pname= $_POST['product_name'];
                $pprice= $_POST['product_price'];
                $psize= $_POST['product_size'];
                $ptype= $_POST['type'];
                $psku= $_POST['sku'];
                $values=array($pname,$pprice,$psize,$psku,$ptype);
                $resp=$prodModel->save($values);
                if($resp==true){
                    $data=array(
                        "error"=>true,
                        "message"=>"success",     
                    );
                }else{
                    $data=array(
                        "error"=>false,
                        "message"=>"something went wrong",     
                    );   
                }
                
                // $responseData = json_encode($data);
                // $responseData;
               }else{
                $data=array(
                    "error"=>true,
                    "message"=>"product_name,product_price,product_size,sku,type are not set",     
                );
                
               }
               $responseData = json_encode($data);
               $responseData;
            
        }else {
            $strErrorDesc = 'Method not supported';
            $strErrorHeader = 'HTTP/1.1 422 Unprocessable Entity';
        }
 
        // send output
        if (!$strErrorDesc) {
            $this->sendOutput(
                $responseData,
                array('Content-Type: application/json', 'HTTP/1.1 200 OK')
            );
        } else {
            $this->sendOutput(json_encode(array('error' => $strErrorDesc)), 
                array('Content-Type: application/json', $strErrorHeader)
            );
        }
    }
}