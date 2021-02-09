<?php    
$title="Booking Online | Maruti Suzuki NEXA Car Showroom in Nashik, Nagpur, Nanded | SEVA";  

 $pgDesc="Book A Car Online from SEVA Maruti Suzuki NEXA Car Showroom in Nashik, Nagpur, Nanded. Booking Online, Nexa Cars s cross, XL6, Ciaz, Ignis & Baleno is easy";
 $pgKeywords="Baleno, Baleno Price, Baleno Car, Xl6, S cross, 
 ciaz, baleno car price, ignis, maruti suzuki Baleno, Maruti Suzuki Xl6, NEXA, maruti suzuki xl6, Maruti XL6, baleno on road price, maruti xl6, maruti baleno, s cross price, Nexa Cars, ciaz car, ciaz price, maruti ignis, maruti suzuki ciaz, nexa xl6, ignis price, maruti ciaz, maruti suzuki ignis, nexa baleno, maruti s cross, Maruti Suzuki NEXA, Nashik, Nagpur, Nanded, Booking Online, Book a Car Online, Online Booking";
 include 'header.php'; 


$servername = "localhost";

$username = "root";
$password = "";


//$username = "marutise_new_sev";
//$password = "9sBAOYro4e5y";

$dbname = "marutise_new_seva";

 $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
        $data = date('d/m/Y h:i:s A');
        $sql = "SELECT `car` FROM nexa_product GROUP BY car";
        $result = $conn->query($sql);
?>

<script src='https://www.google.com/recaptcha/api.js'></script>
<script src="assets/js/jquery1.12.0-min.js"></script> 
<script src="assets/js/parsley.js"></script>
<script src="assets/js/bootstrap-datepicker.min.js"></script>


<script type="text/javascript">
  $( document ).ready(function() {
    $("#datepicker_today").datepicker({
        format: "yyyy-mm-dd" ,
        daysOfWeekDisabled: [0],
        startDate:'today',
        autoclose:'true',
      }).val();
  });
   var picker = document.getElementById('datepicker_today');
picker.addEventListener('input', function(e){
  var day = new Date(this.value).getUTCDay();
  if([0].includes(day)){
    e.preventDefault();
    this.value = '';
     document.getElementById('newdate').value('Sunday not Allowed.');
    console.log("hii");
  }else{
    document.getElementById('newdate').innerHTML = '';
  }
});
  function function_car()
  {
       var selectValue = $("#car").val();            
        $.ajax({
            url: 'https://nexa.marutiseva.com/admin/admin/getvarient',
            type: 'post',
            data: {id: selectValue},
            success: function (data) 
            {
              $("#varient").html(data);
            }
        });
  }

  function function_varient()
  {
       var selectValue = $("#varient").val();            
       var car = $("#car").val();            
        //$("#city_id_").empty();

        $.ajax({
            url: 'https://nexa.marutiseva.com/admin/admin/getcolor',
            type: 'post',
            data: {varient: selectValue,car: car},
            success: function (data) 
            {
              $("#__color").html(data);
            }
        });
  }

  function function_color()
  {
       var selectValue = $("#__color").val();            
       var varient = $("#varient").val();            
       var car = $("#car").val();            
        //$("#city_id_").empty();

        $.ajax({
            url: 'https://nexa.marutiseva.com/admin/admin/getprice',
            type: 'post',
            data: {id: selectValue, varient: varient, car: car},
            success: function (data) 
            {
              $("#roadprice_span").html(data);
              $("#roadprice").val(data);
            }
        });
  }
  function submitUserForm() {
    var response = grecaptcha.getResponse();
    // alert(response);die();
    if(response.length == 0) {
        document.getElementById('g-recaptcha-error').innerHTML = '<span style="color:red;">This field is required.</span>';
        return false;
    }
    return true;
}
 
function verifyCaptcha() {
    document.getElementById('g-recaptcha-error').innerHTML = '';
}
function handler(e){
  var date=e.target.value;
  var city = $("#city").val();
   $.ajax({
    url: "check_online_bookings.php", 
    type:'POST',
    dataType : 'html',
    data:{
    data1 : date, city: city // will be accessible in $_POST['data1'] & $_POST['city']
    },
    success: function(data){
      data = data.replace(/(\r\n|\n|\r)/gm,"");
      if(data=='true')
      {
        $("#datepicker_today").val("");
        document.getElementById('newdate').innerHTML = '<span style="color:red;">Please Select Next date as Todays Bookings are full.</span>';
      }else{
        document.getElementById('newdate').innerHTML = '';

      }
  }});
}

function check(e){
  var city=e.target.value;
  var date = $("#datepicker_today").val();
   $.ajax({
    url: "check_online_bookings.php", 
    type:'POST',
    dataType : 'html',
    data:{
    data1 : date, city: city // will be accessible in $_POST['data1'] & $_POST['city']
    },
    success: function(data){
      data = data.replace(/(\r\n|\n|\r)/gm,"");
      if(data=='true')
      {
        $("#datepicker_today").val("");
        document.getElementById('newdate').innerHTML = '<span style="color:red;">Please Select Next date as Todays Servicings are full.</span>';
      }else{
        document.getElementById('newdate').innerHTML = '';

      }
  }});
}

</script>
<style type="text/css">
  .parsley-required{
    color: red;
  }
  .parsley-min{
    color: red;
  }
</style>
<main>

  <div class="container">
  <div class="my-5">
  <h2 class="innerpageHeading">Online Booking</h2>
    <div class="formsection">
  <form action="payment.php" method="post" role="form" data-parsley-validate="parsley" enctype="multipart/form-data" onsubmit="return submitUserForm();">
    <div class="my-4"><h5>Contact Information</h5></div>
    <div class="form-row pb-3" style="border-bottom:1px solid #d0dbe5">
      <div class="form-group col-md-4">
        <label for="inputAddress">Full Name</label><span class="parsley-required">*</span>
        <input type="text" class="form-control" id="inputAddress" name="name" placeholder="Enter your Full Name" required="true" data-parsley-pattern="^[a-zA-Z.,/ $()]+$" data-parsley-pattern-message="Name should be in text only" data-parsley-required-message="Please enter name">
      </div>
      <div class="form-group col-md-4">
        <label for="inputAddress2">Email </label><span class="parsley-required">*</span>
        <input type="email" class="form-control" id="inputAddress2" name="email" placeholder="Enter your Email " required="" data-parsley-type="email" data-parsley-required-message="Please Enter Email Id">
      </div>
      <div class="form-group col-md-4">
        <label for="inputAddress2">Mobile No. </label><span class="parsley-required">*</span>
        <input type="number" class="form-control" id="inputAddress2" name="mobile" placeholder="Enter your Mobile No." required="" data-parsley-type="digits" maxlength="10" data-parsley-pattern=^[6-9]\d{9}$ data-parsley-pattern-message="Mobile no should starts with 6/7/8/9 AND 10 Digit" data-parsley-required-message="Please Enter Contact No">
      </div>
      <div class="form-group col-md-4">
        <label for="inputAddress2">Select City</label><span class="parsley-required">*</span>
      <select class="form-control" name="city" id="city" aria-required="true" aria-invalid="false" required="" onchange="check(event);">
      <option value="Nagpur">Nagpur</option>
        <option value="Nanded">Nanded</option>
        <option value="Nashik">Nashik</option>
        </select>
      </div>
       <div class="form-group col-md-4">

      <label for="inputPassword4">Date<span class="parsley-required" style="color: red">*</span></label>

      <input type="text" class="form-control" id="datepicker_today" name="date" placeholder="Date" required="true" data-parsley-required-message="Please Select a date" onchange="handler(event);">
    <div id="newdate" class="newdate"></div>

    </div>
      <div class="form-group col-md-4">
        <div>
          <label>Address</label>
          <textarea class="form-control" name="address" aria-label="With textarea" rows="1" data-parsley-errors-container="#error_address"></textarea>
        </div>
          
      </div>
    </div>
    <div class="my-4"><h5>Car Details</h5></div>
    <div class="form-row pb-3" style="border-bottom:1px solid #d0dbe5">
      <div class="form-group col-md-4">
        <label for="inputAddress2">Car </label><span class="parsley-required">*</span>
        <select id="car" name="car"  class="form-control" onchange="function_car()" aria-required="true" aria-invalid="false" required="" data-parsley-required-message="Please select car">
            <option value="">Select Car</option>
          <?php while($row = $result->fetch_assoc()) { ?>
            <option value="<?php echo $row['car'];?>"><?php echo $row['car'];?></option>
          <?php } ?>
        </select>
      </div>        
      <div class="form-group col-md-4">        
        <label for="inputAddress2"> Car Variant </label><span class="parsley-required">*</span>        
        <select id="varient" name="varient"  class="form-control" onchange="function_varient()" aria-required="true" aria-invalid="false" required="" data-parsley-required-message="Please select car varient">    
            <option value="">Select Variant</option> 
        </select>
      </div>
      <div class="form-group col-md-4">
        <label for="inputAddress2"> Color</label><span class="parsley-required">*</span>
        <select id="__color" class="form-control" onchange="function_color()" name="color" aria-required="true" aria-invalid="false" required="" data-parsley-required-message="Please select color" >
            <option value="">Select Color</option>
        </select>
      </div>
    <div class="form-group col-md-4">
      <label for="inputAddress2">Ex-showroom Cost</label><br><span id="roadprice_span">0.00</span>
    </div>
    
      <input type="hidden" class="form-control" name="roadprice" id="roadprice" placeholder="On Road Cost" required="">
    <div class="form-group col-md-4">
      <label for="inputAddress2">Any Special Request</label>
      <textarea class="form-control" name="special_request" aria-label="With textarea" rows="1"></textarea>
    </div>
    <div class="form-group col-md-4">
      <label for="inputAddress2">Do you Require Finance</label><span class="parsley-required">*</span>
      <div class="mt-2">
        <div class="custom-control custom-radio custom-control-inline">
          <input type="radio" id="customRadioInline1" name="finance" value="Yes" class="custom-control-input" data-parsley-errors-container="#error_finance"  required="" data-parsley-required-message="Please select need finance or not?">
          <label class="custom-control-label" for="customRadioInline1">Yes</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
          <input type="radio" id="customRadioInline2" name="finance" class="custom-control-input" value="No" required="" data-parsley-required-message="Please select need finance or not?">
          <label class="custom-control-label" for="customRadioInline2">No</label>
        </div>
         <span id="error_finance" class="parsley-required"></span>
      </div>
      </div>
    <!-- <div class="form-group col-md-4">
    <label for="inputAddress2">Receipt</label>
     <div class="mt-2">
     </div>
    </div> -->
    </div>
    <div class="my-4"><h5>Documents Required</h5></div>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="inputAddress2">Adhar Card</label>
          <div class="input-group mb-3">
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="inputGroupFile02" name="adhar_cart" data-parsley-errors-container="#error_adhar" >
              <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
            </div>
            <!--  <div class="input-group-append">
            <span class="input-group-text" id="">Upload</span>
            </div> -->
          </div>
            <span id="error_adhar" class="parsley-required"></span>
        </div>
        <div class="form-group col-md-4">
          <label for="inputAddress2">Pan Card</label>
          <div class="input-group mb-3">
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="inputGroupFile02" name="pan_card" data-parsley-errors-container="#error_pancard" >
              <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
            </div>
            <!-- <div class="input-group-append">
            <span class="input-group-text" id="">Upload</span>
            </div> -->
          </div>
            <span id="error_pancard" class="parsley-required"></span>
        </div>
      </div>
      <div class="form-row">
  <div class="form-group col-md-4">
      <div class="g-recaptcha" data-sitekey="6LcuUwEVAAAAAOF4b4IxvoXTo3TN09aaviVw2xaw" data-callback="verifyCaptcha"></div>
      <div id="g-recaptcha-error"></div>
    </div>
  <div class="form-group col-md-8">
    <div class="form-check mt-3">
        <input type="checkbox" class="form-check-input" name="conditions" required="true" id="exampleCheck1" data-parsley-required-message="Please indicate that you accept the Terms and Conditions">
        <label class="form-check-label" for="exampleCheck1"> I Agree With <a href="disclaimer.php" style="color: blue">Terms and Conditions.</a><span class="red">*</span></label>
      </div>
    </div>
  </div>  
        <span id="error_terms" class="parsley-required"></span>
      <button type="submit" class="button button-purple button-180 triggerBookAShowRoomVisitButton">Submit</button>
</form>
    </div>
</div>
  

  
  
  
</main>


<?php  
require_once('footer.php');
?>
