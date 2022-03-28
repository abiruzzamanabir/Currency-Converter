<?php
 include_once "./function.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Currency Convert</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/style.css">
</head>

<body>


    <div class="form-bg">
        <div class="container">
            <div class="row">
                <div class="col-6 m-auto mt-5">
                    <div class="form-container">
                        <div class="form-icon"><i class="fa fa-money"></i></div>
                        <h3 class="title">Currency Converter</h3>
                        <form action="" method="POST" class="form-horizontal">
                            <div class="form-group">
                                <label>Amount</label>
                                <input class="form-control mt-3" type="number" name="amount" placeholder="Enter Amount">
                            </div>
                            <div class="form-group">
                            <label>Currency</label>
                                <select class="form-select currency mt-3" name="currency" aria-label="Default select example">
                                    <option selected>Select Your Currency</option>
                                    <option value="usd">USD</option>
                                    <option value="rupee">RUPEE</option>
                                    <option value="euro">EURO</option>
                                    <option value="riyal">RIYAL</option>
                                    <option value="lira">LIRA</option>
                                </select>
                            </div>
                            <button type="submit" name="submit" class="btn btn-default">Convert</button>
                            <div class="mt-5 text-center">
                                <?php

                                    if(isset($_POST['submit']))
                                    {
                                        $amount=$_POST['amount'];
                                        $currency=$_POST['currency'];
                                        
                                        if(empty($amount) || empty($currency)){
                                            echo "<p class=\"alert alert-danger d-flex justify-content-between\">All Fields Are Required ! <button data-bs-dismiss=\"alert\" class=\"btn-close\"></button></p>";
                                        }
                                        else{
                                            $total=currencyConverter($amount,$currency);
                                            echo "<p class=\"alert alert-success d-flex justify-content-between\">$total <button data-bs-dismiss=\"alert\" class=\"btn-close\"></button></p>";
                                        }
                                    }
                                
                                ?>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>