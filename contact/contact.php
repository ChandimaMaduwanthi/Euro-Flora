<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/style3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Contact</title>

</head>
<body style="background-color: white;">
    <header class="main_header">
        <img src="../images/logo-small.png">
        <a class="fa fa-comment" href="../ other_pages/chat.html ">Chat</a>
        <a class="fa fa-phone" href="../ other_pages/orderbyphone.html ">Order by phone</a>
        <a class="fa fa-cogs" href="../ other_pages/order.html ">How to order</a>
        <a class="fa fa-camera" href="../ other_pages/gallery.html ">Gallery</a>
        <a class="fa fa-bars" href="../ other_pages/theflorist.html ">The florist</a>
        <a class="fa fa-envelope" href="# ">Contact us</a>
        <a class="fa fa-home" href="../home.html ">Home</a>
    </header>
<div style="padding-left:100px; padding-right: 100px;">
    <img src="../images/euroflora-logo.png" alt="" style="margin-left: 30%;">
    <p style="font-size: 19px;">We are Online! Welcome to Instant Answer Messaging. During the opening hours of the shop, your
        request will be read and managed in real time. If you have already placed an order you can call the
        phone number dedicated to the customers, you received in the summary email.</p>

        <a href="view.php"><button>View</button></a>

        <form action="_contact.php" method="POST" enctype="multipart/form-data">
            <div class="box1">
                <div class="boxx"><label for="">Name*</label></div>
                <div><input type="text" name="names" id="" style="width: 1000px;" required></div>
            </div><br><br>
            <div class="box1">
                <div class="boxx"><label for="">E-Mail*</label></div>
                <div><input type="email" name="emails" id="" style="width: 1000px;" required></div>
            </div><br><br>
            <div class="box1">
                <div class="boxx"><label for="">Phone* </label></div>
                <div><select name="" id="" style="width: 500px;">
                    <option value="">Sri Lanka 94+</option>
                    <option value=""></option>
                    <option value=""></option>
                </select>
                <input type="tel" name="phone" id="" placeholder="Mobile number" style="width: 500px;" required pattern="[0-9]{10}"></div>
            </div><br><br>
            <div class="box1">
                <div class="boxx"><label for="">Order code</label></div>
                <div><input type="text" name="code" id="" placeholder="Enter the code received by email if available" style="width: 1000px;"></div>
            </div><br><br> 
            <div class="box1">
                <div class="boxx"><label>Message*</label><br></div>
                <div><textarea name="message" id="" cols="30" rows="10" required placeholder="Describe your request accurately to receive better info." style="width: 1000px;"></textarea></div>
            </div><br>
            <div class="box1">
                <div class="boxx"><label for="">Attachment</label></div>
                <div><input type="file" name="file" id=""></div>
            </div><br><br> 
            <input type="submit" value="Start">

        </form>

    </div>
</body>
</html>