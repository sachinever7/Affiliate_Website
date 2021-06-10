<?php
require('connection.php');
include_once("flipkartApiClass.php");

// Get affiliateID and token from https://affiliate.flipkart.com/
// Set flipkart affiliateID and token
$affiliateID = '<AFFILATE ID>';
$token = '<TOKEN>';
$fkObj = new flipkartApi($affiliateID, $token);

// fetch flipkart offer
$reportJsonURL = 'https://affiliate-api.flipkart.net/affiliate/report/orders/detail/json?startDate=2014-01-01&endDate=2020-06-14&status=approved&offset=0';

$result = flipkartApi::getData($reportJsonURL, 'json');
if(!$result) {
        echo "<h3>There is no offer, Or Error on flipkart api server please contact to flipkart affiliate team..</h3>";
    }
//print all json data
echo json_encode($result);

//fetch all the array value
    foreach($result['orderList'] as $resultSet) {
        $productId=$resultSet['productId'];
        $price=$resultSet['price'];
        $quantity=$resultSet['quantity'];
        $status=$resultSet['status'];
        $amount=$resultSet['tentativeCommission']['amount'];
        $affExtParam1=$resultSet['affExtParam1'];
        $affExtParam2=$resultSet['affExtParam2'];
        $orderDate=$resultSet['orderDate'];
        $title=$resultSet['title'];
        $commissionRate=$resultSet['commissionRate'];
        $salesChannel=$resultSet['salesChannel'];
        $customerType=$resultSet['customerType'];

        $query="INSERT INTO json_report(affExtParam1,affExtParam2,title,price,commissionRate,quantity,amount,orderDate,status,salesChannel,customerType,productId)VALUES(?,?,?,?,?,?,?,?,?,?,?,?)";
        $stmt=$con->prepare($query);
        $stmt->bind_param("sssddddsssss",$affExtParam1,$affExtParam2,$title,$price,$commissionRate,$quantity,$amount,$orderDate,$status,$salesChannel,$customerType,$productId);
        $stmt->execute();
    }
?>
