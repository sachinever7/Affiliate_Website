<?php require ('connection.php');
include_once("flipkartApiClass1.php");

// Get affiliateID and token from https://affiliate.flipkart.com/
// Set flipkart affiliateID and token
$affiliateID = 'sachineve';
$token = '19f06b0c78c44b5c95dd3409ca53f24f';
$fkObj = new flipkartApi($affiliateID, $token); 

// fetch flipkart offer
$searchJsonURL = 'https://affiliate-api.flipkart.net/affiliate/1.0/search.json?query=shoes&resultCount=3';

$result = flipkartApi::getData($searchJsonURL, 'json');
if(!$result) {
        echo "<h3>There is no offer, Or Error on flipkart api server please contact to flipkart affiliate team..</h3>";
    }
//print all json data
echo json_encode($result);

//fetch all the array value
    foreach($result['products'] as $resultSet) {
        $product_name=$resultSet['productBaseInfoV1']['title'];
        $product_long_desc=$resultSet['productBaseInfoV1']['productDescription'];
        $product_cost_price=$resultSet['productBaseInfoV1']['maximumRetailPrice']['amount'];
        $product_selling_price=$resultSet['productBaseInfoV1']['flipkartSellingPrice']['amount'];
        $product_main_image=$resultSet['productBaseInfoV1']['imageUrls']['200x200'];
        $product_link=$resultSet['productBaseInfoV1']['productUrl'];
        $brand_name=$resultSet['productBaseInfoV1']['productBrand'];
        $discount=$resultSet['productBaseInfoV1']['discountPercentage'];

        $query="INSERT INTO products(product_name,product_long_desc,product_cost_price,product_selling_price,product_main_image,product_link,brand_name,discount)VALUES(?,?,?,?,?,?,?,?)";
        $stmt=$con->prepare($query);
        $stmt->bind_param("ssddsssd",$product_name,$product_long_desc,$product_cost_price,$product_selling_price,$product_main_image,$product_link,$brand_name,$discount);
        $stmt->execute();
    }
?>