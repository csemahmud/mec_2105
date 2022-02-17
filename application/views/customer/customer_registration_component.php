<!--tabs-->
<div class="tabs m_bottom_45">
        <!--tabs navigation-->
        <nav>
                <ul class="tabs_nav horizontal_list clearfix">
                        <li><a href="#tab-1" class="bg_light_color_1 color_dark tr_delay_hover r_corners d_block">Login</a></li>
                        <li><a href="#tab-2" class="bg_light_color_1 color_dark tr_delay_hover r_corners d_block">Register</a></li>
                </ul>
        </nav>
        <section class="tabs_content shadow r_corners">
                <div id="tab-1">
                        <!--login form-->
                        <h5 class="fw_medium m_bottom_15">I am Already Registered</h5>
                        <form action="<?php echo base_url()?>customer_controller/customer_login" 
                              method="post" onsubmit="return validateStandard(this);">
                                <ul>
                                        <li class="clearfix m_bottom_15">
                                                <div class="half_column type_2 f_left">
                                                        <label for="login_email" class="m_bottom_5 d_inline_b">Email Address :</label>
                                                        <input type="text" id="login_email" name="login_email" regexp="JSVAL_RX_EMAIL"
                                                               err="Please Enter Valid Email Address ....." 
                                                               maxlength="100" placeholder="email.address@Qexample.com" required="required"
                                                               class="r_corners full_width m_bottom_5">
                                                        <a href="#" class="color_dark f_size_medium">Forgot your Email Address ?</a>
                                                </div>
                                                <div class="half_column type_2 f_left">
                                                        <label for="login_password" class="m_bottom_5 d_inline_b">Password :</label>
                                                        <input type="password" id="login_password" name="login_password"
                                                               regexp="JSVAL_RX_ALPHA_NUMERIC_WITHOUT_HIFANE"
                                                               err="Password Must Be Alpha Numeric Character without Hifane"
                                                               placeholder="Enter Password ....." required="required"
                                                               class="r_corners full_width m_bottom_5">
                                                        <a href="#" class="color_dark f_size_medium">Forgot your password?</a>
                                                </div>
                                        </li>
                                        <li class="m_bottom_15">
                                                <input type="checkbox" class="d_none" name="checkbox_4" id="checkbox_4"><label for="checkbox_4">Remember me</label>
                                        </li>
                                        <li><button class="button_type_4 r_corners bg_scheme_color color_light tr_all_hover">Log In</button></li>
                                </ul>
                        </form>
                </div>
        </section>
</div>
<!--tabs-->
<form name="customer_registration_form" action="<?php echo base_url();?>customer_controller/register_customer" 
      method="post" onsubmit="return validate_registraion(this);">
<div class="tabs m_bottom_45">
        <section class="tabs_content shadow r_corners">
                <div id="tab-2">
                    <h2 class="color_dark tt_uppercase m_bottom_25">Customer Registration</h2>

                                <ul>
                                        <li class="m_bottom_25">
                                                <label for="customer_email" class="m_bottom_5 d_inline_b">Email Address :</label>
                                                <input type="text" id="customer_email" name="customer_email" regexp="JSVAL_RX_EMAIL"
                                                       err="Please Enter Valid Email Address ....." 
                                                       maxlength="100" placeholder="email.address@Qexample.com" required="required"
                                                       onblur="check_email()" class="r_corners full_width m_bottom_5">
                                                <h3 id="message_unique_email" class="success_message"></h3>
                                                <h3 id="error_unique_email" class="error_message"></h3>
                                        </li>
                                        <li class="m_bottom_5">
                                                <label for="customer_password" class="m_bottom_5 d_inline_b">Password :</label>
                                                        <input type="password" id="customer_password" name="customer_password"
                                                               regexp="JSVAL_RX_ALPHA_NUMERIC_WITHOUT_HIFANE"
                                                               err="Password Must Be Alpha Numeric Character without Hifane"
                                                               placeholder="Enter Password ....." required="required"
                                                               class="r_corners full_width m_bottom_5">
                                        </li>
                                        <li>
                                                <label for="c_repeat_password" class="m_bottom_5 d_inline_b">Confirm Password :</label>
                                                        <input type="password" id="c_repeat_password" name="c_repeat_password" equals="customer_password"
                                                               regexp="JSVAL_RX_ALPHA_NUMERIC_WITHOUT_HIFANE"
                                                               err="Password and Confirm Password did not match"
                                                               onkeyup="match_value('c_repeat_password', 'customer_password', 'password_match')"
                                                               placeholder="Confirm Password ....." required="required"
                                                               class="r_corners full_width m_bottom_5">
                                                        <p id="password_match"></p>
                                        </li>
                                </ul>

                </div>
        </section>
</div>
<h2 class="color_dark tt_uppercase m_bottom_25">Bill Information</h2>
<div class="bs_inner_offsets bg_light_color_3 shadow r_corners m_bottom_45">
        <div class="row clearfix">
                    <div class="col-lg-6 col-md-6 col-sm-6 m_xs_bottom_30">
                            <h5 class="fw_medium m_bottom_15">Bill To</h5>

                                    <ul>
                                            <li class="m_bottom_15">
                                                    <label for="first_name" class="d_inline_b m_bottom_5">First Name :</label>
                                                    <input type="text" id="first_name" name="first_name"
                                                           regexp="JSVAL_RX_ALPHA" err="Please   Enter   Valid   First   Name   ....."
                                                           maxlength="50" required="required" placeholder="Enter First Name ....."
                                                           class="r_corners full_width">
                                            </li>
                                            <li class="m_bottom_15">
                                                    <label for="last_name" class="d_inline_b m_bottom_5">Last Name :</label>
                                                    <input type="text" id="last_name" name="last_name"
                                                           regexp="JSVAL_RX_ALPHA" err="Please   Enter   Valid   Last   Name   ....."
                                                           maxlength="50" required="required" placeholder="Enter Last Name ....."
                                                           class="r_corners full_width">
                                            </li>
                                            <li class="m_bottom_15">
                                                    <label for="mobile" class="d_inline_b m_bottom_5">Mobile No :</label>
                                                    <input type="text" id="mobile" name="mobile"
                                                           maxlength="14" required="required" placeholder="Enter Mobile No ....."
                                                           class="r_corners full_width">
                                            </li>
                                            <li class="m_bottom_15">
                                                    <label for="phone" class="d_inline_b m_bottom_5">Phone No :</label>
                                                    <input type="text" id="phone" name="phone"
                                                           maxlength="7" placeholder="Enter Phone No ....."
                                                           class="r_corners full_width">
                                            </li>
                                            <li class="m_bottom_15">
                                                    <label for="fax" class="d_inline_b m_bottom_5">Fax :</label>
                                                    <input type="text" id="fax" name="fax"
                                                           maxlength="7" placeholder="Enter Fax No ....."
                                                           class="r_corners full_width">
                                            </li>
                                            <li class="m_bottom_15">
                                                    <label for="company" class="d_inline_b m_bottom_5">Company Name :</label>
                                                    <input type="text" id="company" name="company"
                                                           maxlength="100" placeholder="Enter Company Name ....."
                                                           class="r_corners full_width">
                                            </li>
                                            <li class="m_bottom_15">
                                                    <label for="company" class="d_inline_b m_bottom_5">Address :</label>
                                                    <textarea name="address" rows="6" cols="44" 
                                                              placeholder="Enter Full Mailing Address..." required="required" 
                                                              spellcheck="true" tabindex="12"></textarea>
                                            </li>
                                            <li class="m_bottom_15">
                                                    <label for="city" class="d_inline_b m_bottom_5">City :</label>
                                                    <input type="text" id="city" name="city"
                                                           maxlength="50" placeholder="Enter City Name ....." required="required"
                                                           class="r_corners full_width">
                                            </li>
                                            <li class="m_bottom_15">
                                                    <label class="d_inline_b m_bottom_5">Country :</label>
                                                    <!--product name select-->
                                                    <div class="custom_select relative">
                                                            <select required="required" exclude=" " id="country" name="country" err="Please Select a valid country">
                                                                <option value=" ">Select Country...</option>
                                                                <script type="text/javascript">

                                                                    printCountryOptions();

                                                                </script>
                                                            </select>
                                                    </div>
                                            </li>
                                            <li class="m_bottom_15">
                                                    <label for="zip_code" class="d_inline_b m_bottom_5">ZIP / Postal Code :</label>
                                                    <input type="text" id="zip_code" name="zip_code" regexp="JSVAL_RX_NUMERIC"
                                                           maxlength="50" placeholder="Enter Zip Code ....." required="required"
                                                           err="ZIP Code Must be Numeric Values Only ..... No Hyphane " maxlength="7"
                                                           required="required"
                                                           class="r_corners full_width">
                                            </li>
                                            <li class="m_bottom_15">
                                                <button type="submit" class="button_type_4 r_corners bg_scheme_color color_light tr_all_hover">Register</button>
                                            </li>

                                    </ul>

                    </div>

                </div>
        </div>
</form>

<script type="text/javascript">
    document.forms["customer_registration_form"].elements["country"].value = "BD";
</script>

<script type="text/javascript">
    function match_value(input_id1, input_id2, input_id){
        if(document.getElementById(input_id1).value.length < document.getElementById(input_id2).value.length){
            document.getElementById(input_id).innerHTML = "<span> Type More .....  </span>";
        }
        else if(document.getElementById(input_id1).value.length !== document.getElementById(input_id2).value.length){
            document.getElementById(input_id).innerHTML = "<span class='error_message'>" + input_id2 + "   does not match </span>";
        }
        else {
            document.getElementById(input_id).innerHTML = "<span class='success_message'>" + input_id2 + "   has matched </span>";
        }
    }
</script>

<script type="text/javascript">
    
    var is_email_unique = true;
    
    function check_email() {
        
        is_email_unique = false;
        
        var customer_email = document.getElementById("customer_email").value;
        if(customer_email == ''){
            document.getElementById("message_unique_email").innerHTML = '';
            document.getElementById("error_unique_email").innerHTML = 'Email Address Can not be Empty';
            is_email_unique = false;
        }
        
        serverPage = '<?php echo base_url() ?>customer_controller/check_email/' + customer_email;
        xmlhttp.open("GET", serverPage);
        xmlhttp.onreadystatechange = function ()
        {
            if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
            {
                var email_count = xmlhttp.responseText;
                if(email_count == 0){
                    document.getElementById("message_unique_email").innerHTML = 'Email Address is available .';
                    document.getElementById("error_unique_email").innerHTML = '';
                    is_email_unique = true;
                } else {
                    document.getElementById("message_unique_email").innerHTML = '';
                    document.getElementById("error_unique_email").innerHTML = 'Error : Email Address already exists !!!';
                    is_email_unique = false;
                }
            }
        }
        
        xmlhttp.send(null);
    }
    
    function validate_registraion(current_form){
        if(is_email_unique == false){
            return false;
        }
        return validateStandard(current_form);
    }
</script>
