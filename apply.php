<?php
  ob_start();
?>
<div class="container">
  <div id="image" class="row" style="position: relative;z-index: 0;">
    <div class="col-md-2 col-md-offset-8">
      <img src="images/apply/45eade857027e6aa7acee6c3d9c7f2d3.jpg" height="auto" width="90%" style="float:right">
    </div>
  </div>
  <div id="title+image" class="row" style="position:relative;width:80%;margin-top:-30%">
    <div class="col-md-6 col-md-offset-6" style="margin-top: -48%;overflow:hidden;float: left;">
      <img src="images/apply/bigstock-Beautiful-sexy-surfer-girl-on-63542227.jpg" style="margin-left: -70px;" height="auto" width="130%">
    </div>
    <div style="margin-top: -48%;" class="col-md-6">
      <p class="titulo" style="font-size:6.5em;position: relative;">Apply to<br>Coast.</p>
      <p class="titulo" style="font-size:1.5em;margin-top:1%">Please complete the following fields.</p>
    </div>
  </div>
  <div id="form" class="row">
    <form>
      <div class="row" style="margin-right: -4.7%;margin-left: 0.3%;">
        <div id="col1" class="col-md-6">
          <div id="Gender" class="row">
            <div class="col-md-2">
              <label class="label-apply"> Gender</p>
            </div>
            <div class="col-md-7">
              <select  style="width: 50%;">
                <option value="Female">Female</option>
                <option value="Male">Male</option>
              </select> 
            </div>
          </div>
          <div id="Forename" class="row">
            <div class="col-md-2">
              <label class="label-apply"> Forename</p>
            </div>
            <div class="col-md-7">
              <input type="text" class="form-apply" name="name"/>
            </div>
          </div>
          <div id="Surname" class="row">
            <div class="col-md-2">
              <label class="label-apply"> Surname</p>
            </div>
            <div class="col-md-7">
              <input type="text" class="form-apply" name="lastname"/>
            </div>
          </div>
          <div id="Address" class="row">
            <div class="col-md-2">
              <label class="label-apply"> Address</p>
            </div>
            <div class="col-md-7">
              <input type="text" class="form-apply">
            </div>
          </div>
          <div id="City" class="row">
            <div class="col-md-2">
              <label class="label-apply"> City</p>
            </div>
            <div class="col-md-7">
              <input type="text" class="form-apply">
            </div>
          </div>
          <div id="ZipCode" class="row">
            <div class="col-md-2">
              <label class="label-apply"> Zip/Post Code</p>
            </div>
            <div class="col-md-7">
              <input type="text" class="form-apply">
            </div>
          </div>
          <div id="Country" class="row">
            <div class="col-md-2">
              <label class="label-apply"> Country</p>
            </div>
            <div class="col-md-7">
              <input type="text" class="form-apply">
            </div>
          </div> 
          <div id="Phone" class="row">
            <div class="col-md-2">
              <label class="label-apply"> Phone<p></p>
            </label></div>
            <div class="col-md-1" style="width: 20%;">
              <input class="form-apply" style="width:100%" type="text" value="+44">
            </div>
            <div class="col-md-4" style="margin: 0;padding: 0;">
              <input class="form-apply" style="width:105%" type="text">
            </div>
          </div>
          <div id="Email" class="row">
            <div class="col-md-2">
              <label class="label-apply"> Email</p>
            </div>
            <div class="col-md-7">
              <input type="email" class="form-apply">
            </div>
          </div> 
          <div id="Birthday" class="row">
            <div class="col-md-2">
              <label class="label-apply"> Date of birth</p>
            </div>
             <?php
                $days = range(1, 31);
                $months = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
                $years = range(date('Y'),1930);
                $eyes = array("Amber","Black","Blue","Blue Green","Blue Grey","Brown","Brown Coffee", "Dark Brown", "Green", "Green Brown", "Green Grey", "Grey", "Hazel","Honey","Light Blue","Light Brown");
                $hair = array("Hairless","Ash Blonde","Auburn","Black","Blonde","Brown","Brown Coffee","Cendre","Chestnut","Dark","Dark Black","Dark Blonde","Dark Brown","Grey","Grey Black","Light Blonde","Light Brown","Medium Blonde","Platinum Blonde","Red","Red Blonde","Red Brown","Salt and Pepper","Strawberry Blonde");
              ?>
            <div class="col-md-2" style="width: 15%;padding: 0 0 0 15px;">
              <select name="day" style="width: 100%;">
                <?php
                  foreach($days as $day) {
                ?>
                    <option value="<?php echo($day); ?>"><?php echo($day);?></option>
                <?php
                 }
                ?>
              </select>
            </div>
            <div class="col-md-2" style="width: 28%;">
              <select name="months" style="width: 100%;">
                <?php
                  foreach($months as $month) {
                ?>
                    <option value="<?php echo($month); ?>"><?php echo($month);?></option>
                <?php
                 }
                ?>
              </select>
            </div>
            <div class="col-md-2" style="width: 12%;padding: 0;">
            <select  style="width: 100%;">
              <?php
               $starting_year  = date('Y', strtotime('-100 year'));
               $current_year = date('Y');
               for($starting_year; $starting_year <= $current_year; $starting_year++) {
                   echo '<option value="'.$starting_year.'"';
                   if( $starting_year ==  $current_year ) {
                          echo ' selected="selected"';
                   }
                   echo ' >'.$starting_year.'</option>';
               }    
               ?>           
             </select>
            </div>
          </div>        
        </div>
        <div id="col2" class="col-md-6" style="margin-top: 4%;">
          <div id="Height" class="row">
            <div class="col-md-2">
              <label class="label-apply"> Height</p>
            </div>
            <div class="col-md-7">
              <input type="text" class="form-apply">
            </div>
          </div>
          <div id="Weight" class="row">
            <div class="col-md-2">
              <label class="label-apply"> Weight</p>
            </div>
            <div class="col-md-7">
              <input type="text" class="form-apply">
            </div>
          </div>
          <div id="Eyes" class="row">
            <div class="col-md-2">
              <label class="label-apply"> Eyes</p>
            </div>
            <div class="col-md-7">
              <select name="eyes" style="width: 100%;">
                <?php
                  foreach($eyes as $oneeyes) {
                ?>
                    <option value="<?php echo($oneeyes); ?>"><?php echo($oneeyes);?></option>
                <?php
                 }
                ?>
              </select>
            </div>
          </div>
          <div id="Hair" class="row">
            <div class="col-md-2">
              <label class="label-apply"> Hair</p>
            </div>
            <div class="col-md-7">
              <select name="eyes" style="width: 100%;">
                <?php
                  foreach($hair as $onehair) {
                ?>
                    <option value="<?php echo($onehair); ?>"><?php echo($onehair);?></option>
                <?php
                 }
                ?>
              </select>
            </div>
          </div>
          <div id="Shoes" class="row">
            <div class="col-md-2">
              <label class="label-apply"> Shoes</p>
            </div>
            <div class="col-md-7">
              <input type="text" class="form-apply">
            </div>
          </div>
          <div id="FacebookLink" class="row">
            <div class="col-md-2">
              <label class="label-apply"> Facebook link</p>
            </div>
            <div class="col-md-7">
              <input type="text" class="form-apply">
            </div>
          </div>
          <div id="Note" class="row">
            <div class="col-md-2">
              <label class="label-apply"> Note</p>
            </div>
            <div class="col-md-7">
              <textarea rows="4" style="width: 100%;resize: none;"></textarea>
            </div>
          </div> 
        </div>
      </div>
      <div class="row" style="margin-top:5%;margin-right: -4.7%;margin-left: 0.3%;">
        <div class="row">
          <div class="col-xs-6 col-sm-3" style="overflow: hidden;">
            <a href="#"><img src="images/apply/Coast Upload Rectangle.jpg" width="100%" height="auto"></a>
          </div>
          <div class="col-xs-6 col-sm-3" style="overflow: hidden;">
            <a href="#"><img src="images/apply/Coast Upload Rectangle.jpg" width="100%" height="auto"></a>
          </div>
          <div class="col-xs-6 col-sm-3" style="overflow: hidden;">
            <a href="#"><img src="images/apply/Coast Upload Rectangle.jpg" width="100%" height="auto"></a>
          </div>
          <div class="col-xs-6 col-sm-3" style="overflow: hidden;">
            <a href="#"><img src="images/apply/Coast Upload Rectangle.jpg" width="100%" height="auto"></a>
          </div>
        </div>
        <div class="row" style="margin-top:1%">
          <div class="col-xs-6 col-sm-3" style="overflow: hidden;">
            <p class="texto">Full face portrait.<br>
            Straight shoulders.</p>
          </div>
          <div class="col-xs-6 col-sm-3" style="overflow: hidden;">
            <p class="texto">3/4 face portrait.<br>
            Straight shoulders.</p>
          </div>
          <div class="col-xs-6 col-sm-3" style="overflow: hidden;">
            <p class="texto">Profile.<br>
            Straight back.</p>
          </div>
          <div class="col-xs-6 col-sm-3" style="overflow: hidden;">
            <p class="texto">Full lenght pictures.<br>
            Slim jeans.</p>
          </div>
        </div>
        <div class="row" style="margin-top:2%">
          <div class="col-md-3 col-md-offset-8" style="margin-left: 72%;overflow: hidden;">
            <button class="btn-apply">SEND MY APPLICATION</button>
          </div>
        </div>
      </div> 
      <div class="row">
        <div class="col-md-3">
          <div class="row">
            <p class="titulo" style="font-size: 4.8em;">Visit<br>Coast<br>Models.</p>
          </div>
          <div class="row">
            <p class="text-apply">If you would prefer to come in<br> and see us we have a daily walk-<br>
            in time of 2:00pm until 4:00pm.</p>
          </div>
          <div class="row">
            <p class="text-apply">Under 16's will need to be<br>
            accompanied by a parent or<br>
            guardian.</p>
          </div>
        </div>
        <div class="col-md-9" style="width: 74%;">
          <div class="row">
            <p class="titulo" style="font-size:1.5em;padding:4% 0 1% 0">General Warning to New Models.</p>
          </div>         
          <div class="row">
            <p class="text-apply">
              Coast models continue to provide safety advice for all new and aspiring models. Our professionalism and authenticity, which we believe are key, makes it our priority to inform of continued unscrupulous indiduais targeting new models and people using social media and direct approach tactics falsely using Coast Models<br> and other leading acency brands.
            </p>
          </div>
          <div class="row">
            <p class="text-apply" style="color:black">Be aware there are many individuals, fake photographers and scouts using the internet claiming to be affiliated or members of Coast Models. Should you be contacted by anyone claiming to be any of the above, you should first contact our office immediately so we can verify their identity.</p>
          </div>
          <div class="row">
            <p class="text-apply" style="color:black">Coast Models never conducts interviews via Skype, never requests nude or lingerie photos and never requires any money from applicants.</p>
          </div>
          <div class="row">
            <p class="text-apply">If at any time someone claiming to be a booker, scout or manager of ANY model agency contacts you, inform your parents or a responsible adult.</p>
          </div>
          <div class="row">
            <p class="text-apply">Coast Models would like to wish you the all the best with your career.</p>
          </div>
        </div>
      </div>
      
    </form>
  </div>
</div>
<?php
  $content .= ob_get_clean();
?>
