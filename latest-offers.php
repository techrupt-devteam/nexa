<?php    
$title="Car Offers | Maruti Suzuki NEXA Showroom in Nashik, Nagpur, Nanded | SEVA";	
?>

<?php 
 $pgDesc="Latest Car Offers, Deals and Big Discounts at SEVA Maruti Suzuki NEXA Showroom in Nashik, Nagpur, Nanded. Maximum Benefits On S Cross, Baleno, Ignis, XL6 & Ciaz";
 
 $pgKeywords="Baleno, Baleno Price, Baleno Car, Xl6, S cross, 
 ciaz, baleno car price, ignis, maruti suzuki Baleno, Maruti Suzuki Xl6, NEXA, maruti suzuki xl6, Maruti XL6, baleno on road price, maruti xl6, maruti baleno, s cross price, NEXA Cars, ciaz car, ciaz price, maruti ignis, maruti suzuki ciaz, NEXA xl6, ignis price, maruti ciaz, maruti suzuki ignis, NEXA baleno, maruti s cross, NEXA Cars, Maruti Suzuki NEXA, Nashik, Nagpur, Nanded, NEXA, Maruti NEXA, NEXA Car, Maruti NEXA, Suzuki NEXA, NEXA showroom, NEXA showroom near me, NEXA car price, NEXA new car, NEXA price, NEXA experience, NEXA near me, maruti NEXA price, maruti NEXA cars, maruti NEXA showroom near me";
 
 include 'header.php'; 
 include('connection.php');
$sql = "SELECT * FROM `nexa_offers`";
$result = $conn->query($sql);
   
?>

<main>

  <div class="container">
  <div class="my-5">
  <h2 class="innerpageHeading">Latest Offers</h2>
  <div class="row">
  	 <?php 
          if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
   ?>
	<div class="my-5 col-md-6 col-xl-4">		
		 <a href="offer-enquiry.php?id=<?php echo $row['id'];?>"> 	
		<img src="https://marutiseva.com/<?php echo $row['image'];?>" class="resposive-img">
	</div>
	
<?php
      }
    }
    ?>
</div>
    
	
</div>
	
    
  </div>
  
  
  
</main>

<script src="assets/js/jquery1.12.0-min.js"></script> 

<?php  
require_once('footer.php');
?>
