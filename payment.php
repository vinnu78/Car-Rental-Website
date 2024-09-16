<?php 
session_start();

include("config.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/payment.css">
    <style type="text/css">
        .selectoption {
            padding: 10px 10px 10px 10px;
            border: 1px solid #ccc;
        }
        body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 800px;
    margin: 50px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

.row {
    display: flex;
    justify-content: space-between;
}

.col {
    flex: 1;
    padding: 10px;
}

.title {
    margin-bottom: 20px;
    font-size: 1.2em;
    color: #333;
}

.inputBox {
    margin-bottom: 15px;
}

.inputBox span {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
}

.inputBox input {
    width: 100%;
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
}

.selectoption {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.submit-btn {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
}

.submit-btn:hover {
    background-color: #0056b3;
}

    </style>
</head>
<body>
<?php
if(isset($_POST['checkout'])) {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $zip_code=$_POST['zip code'];
    $cname=$_POST['cardName'];
    $cnumber=$_POST['cardNumber'];
    $expM=$_POST['expM'];
    $expY=$_POST['expYear'];
    $cvv=$_POST['cvv'];
    $amount=$_POST['amount'];

    if($conn->connect_error) {
        die('Connection Failed :'.$conn->connect_error);
    } else {
        $sql = "INSERT INTO payment(amount,name,email,address,city,state,zip_code,card_name,card_number,exp_month,exp_year,cvv) VALUES ('$amount','$name','$email','$address','$city','$state','$zip_code','$cname','$cnumber','$expM','$expY','$cvv')";
        if ($conn->query($sql) === TRUE) {
            echo ("<script LANGUAGE='JavaScript'>
                window.alert('Successfully added!!!');
                window.location.href='bookingconfirm.php';
                </script>");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }
}
?>



<div class="container">
    <form method="POST">
        <div class="row">
            <div class="col">
                <h3 class="title">billing address</h3>
                <div class="inputBox">
                    <span>Amount You Pay :</span>
                    <input type="number" value="200.00" name="amount">
                </div>
                <div class="inputBox">
                    <span>Name :</span>
                    <input type="text"name="name">
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" value="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="enter email as correct order">
                </div>
                <div class="inputBox">
                    <span>address :</span>
                    <input type="text" name="address">
                </div>
                <div class="inputBox">
                    <span>city :</span>
                    <input type="text" placeholder="mumbai" name="city">
                </div>
                <div class="inputBox">
                    <span>duration: </span>
                    <input type="number" name="dur" min="1" max="30" id="name" placeholder="Enter Rent Period (in days)">
                </div>
                <div class="inputBox">
                    <span>phone number : </span>
                    <input type="tel" name="ph" maxlength="10" id="name" placeholder="Enter Your Phone Number">
                </div>
                <div class="flex">
                    <div class="inputBox">
                        <span>state :</span>
                        <input type="text" placeholder="india" name="state">
                    </div>
                    <div class="inputBox">
                        <span>zip code :</span>
                        <input type="text" placeholder="123 456" name="zip">
                    </div>
                </div>
            </div>
            <div class="col">
                <h3 class="title">payment</h3>
                <div class="inputBox">
                    <span>cards accepted :</span>
                    <img src="images/card_img.png" alt="">
                </div>
                <div class="inputBox">
                    <span>name on card :</span>
                    <input type="text" placeholder="mr. john deo" name="cardName" required>
                </div>
                <div class="inputBox">
                    <span>credit card number :</span>
                    <input type="number" placeholder="1111-2222-3333-4444" name="cardNumber" required>
                </div>
                <div class="inputBox">
                    <span>exp month :</span>
                    <input type="text" placeholder="january" name="expM" required>
                </div>
                <div class="flex">
                    <div class="inputBox">
                        <span>exp year :</span>
                        <input type="number" placeholder="2022" name="expYear" required>
                    </div>
                    <div class="inputBox">
                        <span>CVV :</span>
                        <input type="text" placeholder="1234" name="cvv" required>
                    </div>
                </div>
            </div>
        </div>
        <input type="submit" value="proceed to checkout" class="submit-btn" name="checkout">
    </form>
</div>

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="js/payment.js"></script>
</body>
</html>
