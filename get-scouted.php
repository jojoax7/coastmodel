<?php
	$include_js = '
<script src="js/formValidation.min.js"></script>
<script src="js/framework/bootstrap.min.js"></script>
<script src="js/validation.js"></script>
<script src="js/moment.min.js"></script>
<script src="js/jquery.ui.widget.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/jquery.fileupload.js"></script>
<script src="js/jquery.fileupload-ui.js"></script>
<script src="js/jquery.iframe-transport.js"></script>
<script src="js/upload.js"></script>
';

ob_start();
?>
<div class="container">
	<div class="get-scouted row">
		<div class="col-md-6">
			<div class="row text-scouted">
				<div>
						<h5 class="">READY TO GET SCOUTED? YOU'RE IN THE RIGHT PLACE.</br>
							BE BRAVE!</h5>
						<p class="">BRAVE MODEL MGMT tips to Getting Scouted:
						Professional model scouts are looking for something different than you might expect. We
						don't want to see you in your fanciest outfit with lots of makeup on. We are looking for a
						blank canvas.</p>
						<h5 class=""><b>Please note the following:</b></h5>
						<p class="">You should never pay to attend a casting.<br>
						You should never share photos in the nude or in lingerie.<br>
						ALL BRAVE MODELS representatives correspond via email domains that end with
						bravemodelmgmt.com. If you are contacted by anyone claming to be a representative of BRAVE
						MODEL MGMT, do not respond without first verifying their identity by promptly calling us
						directly at +90850 2257200 ande we'll be happy to assist you.<br>
						You should always verify the identity of individuals who host casting through the BRAVE
						MODEL MGMT casting platform.</p>

						<h5 class="">Brave Model MGMT tips for Being Scouted:</h5>
						<p class="">Have a clean face with absolutely no makeup on.</br>
						Pull your hair back.</br>
						Wear a form fitting outfit like skinny jeans and a tank top.</br>
						We need to see the shape of your body.</p>

						<p class="">Professional model scouts are looking for something different than you  might expect.</br>
							We don't want to see you in your fanciest outfit with lots of makeup on. We are looking for a blank canvas.</p>

						<h5>SAMPLE IMAGES BELOW.</h5>
						<div class="imgexamples">
							<div class="container samplefotos" style="text-align:left;">
								<img class="foto1" src="images/get-scouted/1.jpg" width="150" heigth="200" style="margin-right: 15px;">
								<img class="foto2" src="images/get-scouted/2.jpg" width="150" heigth="200" style="margin-right: 15px;">
								<img class="foto3" src="images/get-scouted/3.jpg" width="150" heigth="200" style="margin-right: 15px;">
							</div>
						</div>
				</div>
			</div>
		</div>
		<div class="col-md-6 ps0">
			<form id="loginForm" method="post" >
				<div class="space">
					<div class="formulario-gscouted moreinfo">
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
							        <label class="control-label">NAME</label>
							        <div class="">
							            <input type="text" class="form-control" name="name"/>
							        </div>
							    </div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label class="control-label">LAST NAME</label>
							        <div class="">
							            <input type="text" class="form-control" name="lastname"/>
							        </div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label class="control-label">EMAIL</label>
							        <div class="">
							            <input type="text" class="form-control" name="email"/>
							        </div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label class="control-label">DATE OF BIRTH</label>
									<div class="row">
										<div class="col-xs-4" style="padding-right: 0;">
									  		<select class="form-control input-sm dateFields border-radius: 0px;" name="bd_day" id="bd_day" style=" border-radius: 0px !important;border-radius: 0px !important;-webkit-appearance: none !important;padding: 0px 10px;text-align: center;">
									  			<option value="">dd</option>
									  			<option value="01">01</option><option value="02">02</option><option value="03">03</option><option value="04">04</option><option value="05">05</option><option value="06">06</option><option value="07">07</option><option value="08">08</option><option value="09">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option>
									  		</select>
										</div>
										<div class="col-xs-4" style="padding: 0;">
									  		<select class="form-control input-sm dateFields" id="bd_month" name="bd_month" style=" border-radius: 0px !important;border-radius: 0px !important;-webkit-appearance: none !important;padding: 0px 10px;text-align: center;">
									  			<option value="">mm</option>
									  			<option value="01">01</option><option value="02">02</option><option value="03">03</option><option value="04">04</option><option value="05">05</option><option value="06">06</option><option value="07">07</option><option value="08">08</option><option value="09">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option>						  		</select>
										</div>
										<div class="col-xs-4" style="padding: 0;">
									  		<select class="form-control input-sm dateFields" id="bd_year" name="bd_year" style=" border-radius: 0px !important;border-radius: 0px !important;-webkit-appearance: none !important;padding: 0px 10px;text-align: center;">
									  			<option value="">yyyy</option>
									  			<option value="2016">2016</option><option value="2015">2015</option><option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option><option value="1949">1949</option><option value="1948">1948</option><option value="1947">1947</option><option value="1946">1946</option><option value="1945">1945</option><option value="1944">1944</option><option value="1943">1943</option><option value="1942">1942</option><option value="1941">1941</option><option value="1940">1940</option><option value="1939">1939</option><option value="1938">1938</option><option value="1937">1937</option><option value="1936">1936</option><option value="1935">1935</option><option value="1934">1934</option><option value="1933">1933</option><option value="1932">1932</option><option value="1931">1931</option><option value="1930">1930</option><option value="1929">1929</option><option value="1928">1928</option><option value="1927">1927</option>						  		</select>
										</div>
									</div>
										 <!-- <input type="text" class="form-control" name="birthday" placeholder="" /> -->
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label class="control-label">CURRENT CITY</label>
						        	<div class="">
						            	<input type="text" class="form-control" name="city"/>
						        	</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label class="control-label">PHONE NUMBER</label>
							        <div class="">
							            <input type="text" class="form-control" name="phone"/>
							        </div>
								</div>
							</div>
						</div>
					</div>
					<p class="aboutme">
						<span>ABOUT ME (UP TO 250 CHARACTERS)</span></br>
						<textarea class="form-control aboutme" maxlength="250" name="aboutme"></textarea>
					</p>
					<div class="row moreinfo">
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">HEIGHT</label>
						        <div class="">
						            <input type="text" class="form-control" name="height"/>
						        </div>
							</div>
							<div class="form-group">
								<label class="control-label">WAIST</label>
						        <div class="">
						            <input type="text" class="form-control" name="waist"/>
						        </div>
							</div>
							<div class="form-group">
								<label class="control-label">DRESS</label>
						        <div class="">
						            <input type="text" class="form-control" name="dress"/>
						        </div>
							</div>
							<div class="form-group">
								<label class="control-label">HAIR</label>
						        <div class="">
						            <input type="text" class="form-control" name="hair"/>
						        </div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">BUST</label>
						        <div class="">
						            <input type="text" class="form-control" name="bust"/>
						        </div>
							</div>
								<div class="form-group">
								<label class="control-label">HIPS</label>
						        <div class="">
						            <input type="text" class="form-control" name="hips"/>
						        </div>
							</div>
							<div class="form-group">
								<label class="control-label">SHOES</label>
						        <div class="">
						            <input type="text" class="form-control" name="shoes"/>
						        </div>
							</div>

							<div class="form-group">
								<label class="control-label">EYES</label>
						        <div class="">
						            <input type="text" class="form-control" name="eyes"/>
						        </div>
							</div>
						</div>
					</div>
					</br>
					<div class="select-images">
						<div class="mesgEmail" id="mesgEmail" style="display:none;">
							<b>thank you for contacting Brave model management. our team will review your materials and will get in touch if we're interested in representing you, or if we have any questions. best of luck!</b>
						</div>
						<div class="adjHidden" id="adjHidden">
							<p class=" attach">Attach up to <span style="font-size:17px;">4</span> images </br>(max size <span style="font-size:17px;">2</span> mb each)</p>
						</div>
						<div class="rowbs hiddenCampos hide-btn-model">
							<div class="col-xs-12 text-primary btnimage" style="padding-left: 0px">
								<div class="form-group alignC" style="margin:0px;">
						            <!-- The container for the uploaded files -->
						            <div id="files" class="files mb10 picround">
						            </div>
						            <div id="photo_notif" class="control-label text-center"></div>
						            <!-- The global progress bar -->
						            <div id="progress" class="progress" style="display:none;">
						                <div class="progress-bar progress-bar-success"></div>
						            </div>
						            	</br>
						            <!-- The fileinput-button span is used to style the file input field as button -->
						            <span class="btn btn-sm btn-success fileinput-button in" style="margin-top:10px;float:none; font-family: 'Gotham-Light', 'Century Gothic', Verdana, sans-serif;">
						                <span id="uploadphoto-label"><i class="fa fa-plus s14"></i> &nbsp;Add Image</span>
						                <!-- The file input field used as target for the file upload widget -->
						                <input id="uploadphoto" type="file" name="files[]" multiple>
						            </span>
	       				 		</div>

						        <input type="hidden" id="photoBU" value="">
						        <input type="hidden" id="photoTB" value="1">
						        <input type="hidden" id="path" value="tmp">
						        <input type="hidden" id="photo" value="" name="photo">
						        <input type="hidden" id="uptype" name="uptype" value="photo_talent">
							</div>
						</div>
					</div>
				</br>
					<hr>
						<div class="row send hide-btn-model">
							<div class="col-md-8">
								<button type="submit" class="btn btn-primary" style="margin-top:24px;font-family: 'Gotham-Light', 'Century Gothic', Verdana, sans-serif;">Submit</button>
							</div>
							<div class="col-md-2"></div>
						</div>
				</div>
			</form>
		</div>
</div>

</div>



<?php
$content  .= ob_get_clean();
?>
