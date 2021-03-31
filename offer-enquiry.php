<?php    
$title="Car Offer Quote | Maruti Suzuki NEXA Showroom in Nashik, Nagpur, Nanded | SEVA"; 
?>
<script src="assets/js/jquery1.12.0-min.js"></script> 
<script src="assets/js/parsley.js"></script>
<?php 
 $pgDesc="Get A Car offer Quote or Enquiry about cars at SEVA Maruti Suzuki NEXA Car Showroom in Nashik, Nagpur, Nanded. Get A Quote Inquiry More Faster";
 
 $pgKeywords="Baleno, Baleno Price, Baleno Car, Xl6, S cross, 
 ciaz, baleno car price, ignis, maruti suzuki Baleno, Maruti Suzuki Xl6, NEXA, maruti suzuki xl6, Maruti XL6, baleno on road price, maruti xl6, maruti baleno, s cross price, NEXA Cars, Car offers, Car quote, CAr discount, NEXA xl6, ignis price, maruti ciaz, maruti suzuki ignis, NEXA baleno, maruti s cross, NEXA Cars, Maruti Suzuki NEXA, Nashik, Nagpur, Nanded, NEXA, Maruti NEXA, NEXA Car, Maruti NEXA, Suzuki NEXA, NEXA showroom, NEXA showroom near me, NEXA car price, NEXA new car, NEXA price, NEXA experience, NEXA near me, maruti NEXA price, maruti NEXA cars, maruti NEXA showroom near me";
 
include 'header.php'; 
include('connection.php');
date_default_timezone_set("Asia/Kolkata");
$id = $_GET['id'];

$data_ = date('d/m/Y h:i:s A');

$sql = "SELECT * FROM `nexa_offers` WHERE `id` = '".$id."' ";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()){
?>
<style type="text/css">
  .parsley-required{
    color: red;
  }
  .parsley-type{
    color:red;
  }
  .parsley-pattern{
    color: red;
  }
  .parsley-range{
    color: red;
  }
</style>
<main>

  <div class="container"> 
  <h2 class="innerpageHeading mt-5">Offer Enquiry</h2>
  <div class="my-5">
  
  
    
  <div class="formsection">
    <form action="payment_gateway.php" method="post" data-parsley-validate="parsley">
    <div class="my-4"><h5>Your Details</h5></div>
  <div class="form-row">
   
    <div class="form-group col-md-4">
    <label for="inputAddress2">Full Name  <span class="parsley-required" style="color:red">*</span></label>
     <input type="text" class="form-control" name="full_name" id="inputAddress" placeholder="Full Name" required="true" data-parsley-required-message="Please Enter Name"  data-parsley-pattern="^[a-zA-Z.,/ $()]+$" data-parsley-pattern-message="Name should be in text only">
    </div>
    <div class="form-group col-md-4">
    <label for="inputAddress2">Email  <span class="parsley-required" style="color:red">*</span></label>

    <input type="text" class="form-control" name="email" id="inputAddress2" placeholder="Enter your Email " required="true" data-parsley-required-message="Please Enter Email Id" data-parsley-type="email">  </div>
  <div class="form-group col-md-4">
    <label for="inputAddress2">Phone No  <span class="parsley-required" style="color:red">*</span></label>
    <input type="text" class="form-control" name="phone_no" id="inputAddress2" placeholder="Enter your Phone No." required="true" data-parsley-type="digits" maxlength="10" data-parsley-required-message="Please Enter Contact No" data-parsley-pattern=^[6-9]\d{9}$  data-parsley-pattern-message="Mobile no should starts with 6/7/8/9 AND 10 Digit">
    </div>
  

  </div>
  <div class="my-4"><h5>Car Details</h5></div>
    <div class="form-row">
   
    <div class="form-group col-md-4">
    <label for="inputAddress2">Car Model<span class="parsley-required" style="color:red">*</span></label>
     <input type="text" class="form-control" name="car_maker" id="car_maker" readonly="" value="<?php echo $row['car_maker'];?>">
    </div>
    
  <div class="form-group col-md-4">
    <label for="inputAddress2">Variant<span class="parsley-required" style="color:red">*</span></label>
    <input type="text" class="form-control" name="varient" id="varient" readonly=""  value="<?php echo $row['varient'];?>">
    </div>
  <div class="form-group col-md-4">
    <label for="inputAddress2">Color<span class="parsley-required" style="color:red">*</span></label>
    <input type="text" class="form-control" name="color" id="color" readonly=""  value="<?php echo $row['color'];?>">
    </div>

  </div>
<div class="form-group">
          <p style="font-size:12px"><span class="parsley-required">*</span><input type="checkbox" id="FormChkBoxBook6" name="FormChkBox" style="vertical-align: sub;" required="true" data-parsley-required-message="Please indicate that you accept the Terms and Conditions">
                    I agree <a href="disclaimer.php" style="color: blue">Terms and Conditions.</a> by clicking the ‘Continue’ button below and I am explicitly soliciting a call from Seva Maruti. Or its partners on my ‘Mobile’.</p>
          </div>
          
        <input type="submit" name="submit" class ="button button-purple button-180 triggerBookAShowRoomVisitButton" value="Submit">
</form>
    </div>
</div>
  
    
  </div>
  
  <?php
}
  ?>
  
</main>

<?php  
require_once('footer.php');
?>
