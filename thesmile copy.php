<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>The Smile</title>

    <script>
        function func(){
            let total;
        const r1=document.getElementById('r1').value;
        const r2=document.getElementById('r2').value;
        const r3=document.getElementById('r3').value;

        if(document.getElementById('r1').checked){
            total = r1;
        }else if(document.getElementById('r2').checked){
            total = r2;
        }else if(document.getElementById('r3').checked){
            total = r3;
        }
        document.getElementById('total').innerHTML = "Total :"+total+"€(delivery included)";
        document.getElementById('tprice').innerHTML = "The Smile "+total+"€";
        }
        
    </script>

</head>
<body>

    <header class="main_header">
        <img src="images/logo-small.png">
        <a class="fa fa-comment" href=" other_pages/chat.html ">Chat</a>
            <a class="fa fa-phone" href=" other_pages/orderbyphone.html ">Order by phone</a>
            <a class="fa fa-cogs" href=" other_pages/order.html ">How to order</a>
            <a class="fa fa-camera" href=" other_pages/gallery.html ">Gallery</a>
            <a class="fa fa-bars" href=" other_pages/theflorist.html ">The florist</a>
            <a class="fa fa-envelope" href=" contact/contact.php ">Contact us</a>
            <a class="fa fa-home" href=" home.html ">Home</a>
    </header>

    <div class="container">
<?php

include 'db.php';

$sql = "SELECT * FROM flower";
$stmt=$conn->prepare($sql);
$stmt->execute();
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
$result = $stmt->fetchAll();
if(sizeof($result)!=0){
    foreach($result as $row){
        echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"/>';
    }
}

?>
        <div class="box1">
            <div class="box">
                <img src="images/the smile.jpg" alt="" width="80%">
                <p>Price (delivery included)</p><hr width="80%" align="left">
                <form action="" method="get" id="form1">
                <div  class="radio">
                <input type="radio" name="price" value="78.90" id="r1" data-dynamic="0" checked onclick="func()">Standard 78.90 € <i style='font-size:24px; margin-left: 330px; margin-top: -10px;' class="fa fa-info-circle"></i>
                </div><br>
                <div class="radio">
                <input type="radio" name="price" value="98.90" id="r2" data-dynamic="20" onclick="func()">Deluxe 98.90 € <i style='font-size:24px; margin-left: 330px; margin-top: -10px;' class="fa fa-info-circle"></i><br>
                </div><br>
                <div class="radio">
                <input type="radio" name="price" value="118.90" id="r3" data-dynamic="40" onclick="func()">Premium 118.90 € <i style='font-size:24px; margin-left: 330px; margin-top: -10px;' class="fa fa-info-circle"></i><br>
                </div><br>
            </form>
                <div id="total">Total: 78.90 €(delivery included)</div>
                <p id="tprice">The Smile 78.90 €</p>
            </div>
            <div class="box11">
                <h1 style="font-family: Playball;">The Smile</h1>
                <p style="font-weight: bold; font-family: sans-serif;">Bouquet of roses and mixed seasonal flowers in vivid colors, decorated with greenery. Suitable
                    for every occasion. Conveys joy.</p>
                <p style="font-size: 15px;"><i style='font-size:24px;' class="fa fa-info-circle"></i>Seasonal Flowers or Plants may be changed if unavailable. However, we will try to stick to the type of the
                    chosen flowers as much as possible. The vase is not included. The picture usually referring the "Deluxe"
                    arrangement.</p><br>
                <hr><br>
                <form action="" class="form2">
                    <div class="box1">
                        <div class="boxx"><label>Delivery date*</label></div>
                        <div><input type="date" name="deliverydate" id="" required></div>
                    </div><br>
                    <div class="box1">
                        <div class="boxx"> <label>Delivery time</label></div>
                        <div><input type="radio" name="time" id="" checked>Working Day - Free (9 a.m.-9p.m.) <i style='font-size:24px;' class="fa fa-info-circle"></i><br><br>
                            <input type="radio" name="time" id="">Sunday and Public Holidays 4.00 € <i style='font-size:24px;' class="fa fa-info-circle"></i><br></div>
                   </div><br>
                   <div class="box1">
                       <div class="boxx"><label>Quantity*</label></div>
                       <div><input type="number" name="quantity" id="" style="width: 40%;" required><br></div>
                    </div><br>
                    <div class="box1">
                        <div class="boxx"><label>Message</label><br><p style="font-size: 14px;">Out of ideas?Choose a message</p></div>
                        <div><textarea name="message" id="" cols="50" rows="10"></textarea><p style="font-size: 12px; color: grey;">250 characters remaining</p></div>
                    </div><br>
                    <div class="box1">
                        <div class="boxx"><label>Signature</label></div>
                        <div><input type="text" name="signature" id=""><p style="font-size: 12px; color: grey;">If the messaged is not signed,it will be delivered anonymously</p></div>
                    </div><br>
                    <input type="submit" value="Continue >>" style="color: white; background-color: marron;">

                </form>

            </div>
        </div>
    </div>
    
</body>
</html>