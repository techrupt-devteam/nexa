<?php    

$title="NEXA Insurance | Maruti Suzuki NEXA Showroom in Nashik, Nagpur, Nanded | SEVA";	

?>
<?php 
 $pgDesc="Choose the best NEXA Insurance from SEVA Maruti Suzuki NEXA Car Showroom in Nashik, Nagpur, Nanded. NEXA Car Insurance for s cross, XL6, Ciaz, Ignis & Baleno.";

 $pgKeywords="Baleno, Baleno Price, Baleno Car, Xl6, S cross, 
 ciaz, baleno car price, ignis, maruti suzuki Baleno, Maruti Suzuki Xl6, NEXA, maruti suzuki xl6, Maruti XL6, baleno on road price, maruti xl6, maruti baleno, s cross price, NEXA Cars, ciaz car, ciaz price, maruti ignis, maruti suzuki ciaz, NEXA xl6, ignis price, maruti ciaz, maruti suzuki ignis, NEXA baleno, maruti s cross, Maruti Suzuki NEXA, Nashik, Nagpur, Nanded, NEXA insurance, Maruti NEXA Insurance, NEXA Car Insurance";

 include 'header.php'; 
?>
<style type="text/css">
.parsley-required {
	color: red;
}
.parsley-type {
	color:red;
}
.parsley-pattern {
	color: red;
}
.parsley-range {
	color: red;
}
.parsley-min {
	color: red;
}
</style>

<link rel="stylesheet" href="assets/css/testimonial.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css"/>

<main>

<div class="container">
  <div class="formsection">
    <form action="send_mail_insurance.php" method="post" data-parsley-validate="parsley" onsubmit="return submitUserForm();">
      <div class="my-4">
        <h5>Contact Information</h5>
      </div>
      <div class="row">
        <div class="form-group col-md-4">
          <label for="inputAddress">Full Name<span class="parsley-required">*</span></label>
          <input type="text" class="form-control" name="full_name" id="inputAddress" placeholder="Full your Name" required data-parsley-pattern="^[a-zA-Z.,/ $()]+$" data-parsley-pattern-message="Name should be in text only" data-parsley-required-message="Please Enter Name" >
        </div>
        <div class="form-group col-md-4">
          <label for="inputAddress2">Email <span class="parsley-required">*</span></label>
          <input type="text" class="form-control" name="email"  id="inputAddress2" placeholder="Enter your Email " required  data-parsley-type="email" data-parsley-required-message="Please Enter Email Id">
        </div>
        <div class="form-group col-md-4">
          <label for="inputAddress2">Phone No. <span class="parsley-required">*</span></label>
          <input type="text" class="form-control" name="phone_no" id="inputAddress2" placeholder="Enter your Phone No." required  data-parsley-type="digits" maxlength="10" data-parsley-pattern=^[6-9]\d{9}$ data-parsley-pattern-message="Mobile no should starts with 6/7/8/9 AND 10 Digit"  data-parsley-required-message="Please Enter Contact No">
        </div>
        <div class="form-group col-md-4">
          <label for="inputAddress2">Select City<span class="parsley-required">*</span></label>
          <select class="form-control" name="city"  aria-required="true" aria-invalid="false" required="">
            <option value="Nashik">Nashik</option>
            <option value="Nagpur">Nagpur</option>
            <option value="Nanded">Nanded</option>
          </select>
        </div>
        <div class="form-group col-md-4">
          <label for="inputAddress2">For Insurance<span class="parsley-required">*</span></label>
          <select class="form-control" name="for_insurance"  aria-required="true" aria-invalid="false" required="">
            <option value="New">New</option>
            <option value="Renew">Renew</option>
          </select>
        </div>
        <div class="form-group col-md-4">
          <label for="inputAddress2">Vehicle Registration<span class="parsley-required" style="color:red">*</span> </label>
          <input type="text" class="form-control" name="reg_no" id="" placeholder="Vehicle Registration" required data-parsley-required-message="Please enter your vehicle no ">
        </div>
      </div>
      <div class="row">
        <div class="form-group col-md-8">
          <div class="input-group">
            <div class="input-group-prepend"> <span class="input-group-text">Your Message</span> </div>
            <textarea class="form-control" name="s_message" aria-label="With textarea"></textarea>
          </div>
        </div>
        <div class="form-group col-md-4">
          <div class="g-recaptcha" data-sitekey="6LcuUwEVAAAAAOF4b4IxvoXTo3TN09aaviVw2xaw" data-callback="verifyCaptcha"></div>
          <div id="g-recaptcha-error"></div>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-8">
          <div class="form-check mt-3">
            <input type="checkbox" class="form-check-input" name="conditions" required id="exampleCheck1" data-parsley-required-message="Please indicate that you accept the Terms and Conditions">
            <label class="form-check-label" for="exampleCheck1"> I Agree With <a href="disclaimer.php" style="color: blue">Terms and Conditions.</a><span class="red">*</span></label>
          </div>
        </div>
      </div>
      <!--<button type="submit" class="button button-purple button-180 triggerBookAShowRoomVisitButton">Submit</button>-->
      <button type="submit" name="submit" class="new-button triggerBookAShowRoomVisitButton" value="Submit"><span> Submit </span></button>
    </form>
    </div>
    


    <section>
      <div class="demo">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="testimonial-slider" class="owl-carousel">
                        <div class="testimonial">
                            <div class="pic">
                                <img src="assets/images/insurance/fair_transparet_44.jpg" alt="">
                            </div>
                            <div class="testimonial-content">
                                <h3 class="title">Fair and Transparent <br/>
                                  Claim Settlement</h3>
                                <p class="description">
                                  All Electrical / Metal Parts are treated in their respective categories as “Electrical / Metal” and NOT as Plastic. The depreciation on Electrical / Metal parts ranges from 0% to 50% depending upon vehicle age (50% on 10+ year old vehicle) as per Indian Motor Tariff.
                                </p>
                            </div>
                        </div>
                        <div class="testimonial">
                            <div class="pic">
                                <img src="assets/images/insurance/quality_repair_43.jpg" alt="">
                            </div>
                            <div class="testimonial-content">
                                <h3 class="title">Quality Repairs at Authorised <br/>
                                  Dealer Workshops</h3>
                                <p class="description">
                                  Your car is repaired in authorised Maruti Suzuki service centres, which are state-of-the-art facilities manned by trained and experienced technicians, ensuring you get the best service. Only Maruti Genuine Parts are used, ensuring your car’s safety is not compromised in any way.
                                </p>
                            </div>
                        </div>

                        <div class="testimonial">
                          <div class="pic">
                              <img src="assets/images/insurance/no_hidden_charges_42.jpg" alt="">
                          </div>
                          <div class="testimonial-content">
                              <h3 class="title">No Hidden Charges</h3>
                              <p class="description">
                                Maruti Insurance Broking policies offer ZERO deduction for SALVAGE and No Filing / Processing Related Charges. Other policies may make significant deductions for salvage and may have file charges and various other charges such as inspection fee, etc.
                              </p>
                          </div>
                      </div>

                      <div class="testimonial">
                        <div class="pic">
                            <img src="assets/images/insurance/one_stop_shop_45.jpg" alt="">
                        </div>
                        <div class="testimonial-content">
                            <h3 class="title">One Stop Shop for <br/>
                              All Insurance Needs</h3>
                            <p class="description">
                              All services related to your Maruti Insurance Broking policy are delivered at your Doorstep. This results in considerable Saving of Time and Cost, and is Highly Convenient. In other policies, you need to do the running around or follow up with insurance companies yourself.
                            </p>
                        </div>
                    </div>

                    <div class="testimonial">
                      <div class="pic">
                          <img src="assets/images/insurance/customer_care_47.jpg" alt="">
                      </div>
                      <div class="testimonial-content">
                          <h3 class="title">Dedicated Customer Care</h3>
                          <p class="description">
                            Our customer care specialists are available from the morning till night. Our experts can assist you in case of claim initiation, policy renewal, grievance redressal, changes in policy or even for general queries.
                          </p>
                      </div>
                  </div>

                  <div class="testimonial">
                    <div class="pic">
                        <img src="assets/images/insurance/instant_policy_48.jpg" alt="">
                    </div>
                    <div class="testimonial-content">
                        <h3 class="title">Instant Policy Issuance</h3>
                        <p class="description">
                          You get your Maruti Insurance Broking policy instantly at the time of purchase of your vehicle. You can also download the policy directly from our website without having to wait for it to arrive later. Maruti Insurance Broking offers extremely easy ways for renewing your policy – you can renew it online, call our support centre, SMS your request, email policy details, write to us or visit the nearest dealership.
                        </p>
                    </div>
                </div>

                <div class="testimonial">
                  <div class="pic">
                      <img src="assets/images/insurance/cash_less_41.jpg" alt="">
                  </div>
                  <div class="testimonial-content">
                      <h3 class="title">Near Cash-less Accident <br/>
                        Repairs Pan-India</h3>
                      <p class="description">
                        You can avail Cash-less accident repairs across India, at Maruti Suzuki’s extensive network of dealers and service stations. You do not have to pay for the whole cost of repairs. You are charged only for the compulsory excess and applicable depreciation as per motor tariff. All other repairs and replacement costs are payable under the policy.
                      </p>
                    </div>
                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>

  <div class="my-5">
    <p class="alert alert-info text-justify">NEXA Insurance Broking Private Limited are Insurance Brokers licensed by IRDA. They take care of all your car insurance needs on a single window concept and are trusted for their customer centric approach and services.NEXA Insurance offers special Motor Insurance products from leading Insurance Companies like National Insurance, New India Assurance, ICICI Lombard, IffcoTokio, Royal Sundaram & Bajaj Allianz.</p>
    <p>You get near cash-less post-accident repairs at the vast service network of NEXA service stations across the country. NEXA service centres, equipped with state-of-the-art facilities and infrastructure, ensure quality repairs with NEXA Genuine Parts and trained technicians.</p>
    <p>NEXA Insurance also ensures excellent customer service with utmost fairness and transparency available to you across the country. No wonder, more than 90% customers buying a NEXA, prefer to buy a NEXA Insurance Policy for their car.</p>
    <div class="my-4">
      <h5>Advantages of NEXA Insurance</h5>
      
      <div class="my-3">
        <h6> Seamless services across nation</h6>
        <p> Its like “Free Roaming” – You get NEXA insurance services across India at all NEXA authorized dealers. These services include buying new policy, effecting renewals, endorsement issuance and claim settlement.</p>
      </div>
           
      
      <div class="my-3">
        <h6> Easy transfer of no-claim bonus</h6>
        <p> If you are renewing with NEXA Insurance for the first time, the entitled No Claim Bonus(NCB) is easily transferred to NEXA Insurance policy at the time of renewal.</p>
      </div>
    </div>
   
</div>
</div>
</main>
<script src='https://www.google.com/recaptcha/api.js'></script> 
<script src="assets/js/jquery1.12.0-min.js"></script> 
<script src="assets/js/parsley.js"></script> 
<script>
// document.getElementById('g-recaptcha-error').innerHTML = 'block';
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
</script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
 <script>
    $(document).ready(function(){
        $("#testimonial-slider").owlCarousel({
            items:1,
            itemsDesktop:[1000,1],
            itemsDesktopSmall:[979,1],
            itemsTablet:[768,1],
            margin:10,
            pagination:false,
            navigation:true,
            navigationText:["",""],
            autoPlay:true
        });
    });
</script>
<?php  

require_once('footer.php');

?>
