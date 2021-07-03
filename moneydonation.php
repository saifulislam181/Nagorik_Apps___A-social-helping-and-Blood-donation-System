<!--Donation page-->
<?php
include('config.php');
if(isset($_REQUEST['submit']))
{
     

        $name=$_REQUEST['name'];
        $email=$_REQUEST['email'];
        $phone=$_REQUEST['phone'];
        $ac=$_REQUEST['ac'];

        $amount=$_REQUEST['amount'];
        $payway=$_REQUEST['payway'];

        $sql="INSERT into  moneydonation(Name,Email,Phone,Account_No,Amount,Payment_Method) values('$name','$email','$phone','$ac','$amount','$payway')";
        if($conn->query($sql)==true)
        {
            $p='<div>Successfully Inserted</div>';
        }

        else
        {
            $p='<div class="alert alert-warning">Wrong Try</div>';
        } 
}

?>

<!DOCTYPE html>
<html>
    <head>
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
         <script src="https://kit.fontawesome.com/76235dc605.js" crossorigin="anonymous"></script>

         <style type="text/css">
             a{
                text-decoration: none;
                color: white;
             }
             #form{
                border-radius: 30px;
             }
         </style>
    </head>

    <body>
        <!--start donation header part-->
      <div class="container mt-4" id="sec1">
       
                <div class="form border border-success p-4" id="form">
                <form method='POST'>

                <div><h3 class="text-center text-success"><i class="pr-2 fas fa-donate"></i>Money Donation Form</h3></div>

                <label for="name">Name</label><br>
                <input type="text" name="name" class="form-control"><br>

                <label for="email">Email</label><br>
                <input type="email" name="email" class="form-control"required><br>

                <div class="row">
                    <div class="col-sm-6">
                         <label for="phone">Phone</label><br>
                        <input type="text" name="phone" class="form-control"><br>
                    </div>
                    <div class="col-sm-6">
                    <label for="ac">Account Number</label><br>
                <input type="text" name="ac" class="form-control" required><br>
            </div>
        </div>

                <div class="row">
                    <div class="col-sm-6">
                         <label for="amount">Amount</label><br>
                        <input type="number" name="amount" min=100 class="form-control"><br>
                    </div>
                    <div class="col-sm-6">
                    <label for="payway">Payment By</label><br>
                <input type="text" name="payway" class="form-control" required><br>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 mt-2">
                <button class="btn btn-success form-control" type="submit" name="submit"><i class="pr-1 fas fa-donate"></i>Donate</button>
            </div>

            <div class="col-sm-6">
                <button class=" mt-2 btn btn-danger form-control"><a href="donation.php">Cancel Donation</a><i class="pl-2 fas fa-arrow-left"></i></button>
            </div>

        </div>
               
               
           
            </form>
        </div>
        </div>

       <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>

</html>