<h2 class="color_dark tt_uppercase m_bottom_25">Shipment Information</h2>
<div class="bs_inner_offsets bg_light_color_3 shadow r_corners m_bottom_45">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                        <h5 class="fw_medium m_bottom_15">Ship To</h5>
                        <h5 class="fw_medium m_bottom_15">
                            <a href="<?php echo base_url(); ?>shipping_controller/shipping_same_as_billing">
                                Click for &LT;Shipping Same As Billing&GT;
                            </a>
                        </h5>
                        <form name="shipping_information_form" action="<?php echo base_url(); ?>shipping_controller/save_shipping_info"
                              onsubmit="return validateStandard(this);" method="post">
                                <ul>
                                        <li class="m_bottom_15">
                                                <label for="s_first_name" class="d_inline_b m_bottom_5 required">First Name : </label>
                                                <input type="text" id="s_first_name" name="s_first_name" regexp="JSVAL_RX_ALPHA" 
                                                       err="Please   Enter   Valid   First   Name   ...." maxlength="50"
                                                       required="required" placeholder="Enter First Name ....." class="r_corners full_width">
                                        </li>
                                        <li class="m_bottom_15">
                                                <label for="s_first_name" class="d_inline_b m_bottom_5 required">Last Name : </label>
                                                <input type="text" id="s_last_name" name="s_last_name" regexp="JSVAL_RX_ALPHA" 
                                                       err="Please   Enter   Valid   Last   Name   ...." maxlength="25"
                                                       required="required" placeholder="Enter Last Name ....." class="r_corners full_width">
                                        </li>
                                        <li class="m_bottom_15">
                                                <label for="s_email" class="d_inline_b m_bottom_5 required">Email : </label>
                                                <input type="text" id="s_email" name="s_email" regexp="JSVAL_RX_EMAIL" 
                                                       err="Please   Enter   Valid   Email   Address   ...." maxlength="100"
                                                       required="required" placeholder="email.address@gmail.com" 
                                                       class="r_corners full_width">
                                        </li>
                                        <li class="m_bottom_15">
                                                <label for="c_name_2" class="d_inline_b m_bottom_5">Company Name</label>
                                                <input type="text" id="c_name_2" name="" class="r_corners full_width">
                                        </li>
                                        <li class="m_bottom_15">
                                                <label for="f_name_2" class="d_inline_b m_bottom_5">First Name</label>
                                                <input type="text" id="f_name_2" name="" class="r_corners full_width">
                                        </li>
                                        <li class="m_bottom_15">
                                                <label for="m_name_2" class="d_inline_b m_bottom_5">Middle Name</label>
                                                <input type="text" id="m_name_2" name="" class="r_corners full_width">
                                        </li>
                                        <li class="m_bottom_15">
                                                <label for="l_name_2" class="d_inline_b m_bottom_5">Last Name</label>
                                                <input type="text" id="l_name_2" name="" class="r_corners full_width">
                                        </li>
                                        <li class="m_bottom_15">
                                                <label for="address_2" class="d_inline_b m_bottom_5">Address 1</label>
                                                <input type="text" id="address_2" name="" class="r_corners full_width">
                                        </li>
                                        <li class="m_bottom_15">
                                                <label for="address_1_2" class="d_inline_b m_bottom_5">Address 2</label>
                                                <input type="text" id="address_1_2" name="" class="r_corners full_width">
                                        </li>
                                        <li class="m_bottom_15">
                                                <label for="code_2" class="d_inline_b m_bottom_5">Zip / Postal Code</label>
                                                <input type="text" id="code_2" name="" class="r_corners full_width">
                                        </li>
                                        <li class="m_bottom_15">
                                                <label for="city_2" class="d_inline_b m_bottom_5">City</label>
                                                <input type="text" id="city_2" name="" class="r_corners full_width">
                                        </li>
                                        <li class="m_bottom_15">
                                                <label class="d_inline_b m_bottom_5">Country</label>
                                                <!--product name select-->
                                                <div class="custom_select relative">
                                                        <div class="select_title type_2 r_corners relative color_dark mw_0">Please select</div>
                                                        <ul class="select_list d_none"></ul>
                                                        <select name="product_name">
                                                                <option value="England">England</option>
                                                                <option value="Australia">Australia</option>
                                                                <option value="Austria">Austria</option>
                                                        </select>
                                                </div>
                                        </li>
                                        <li class="m_bottom_15">
                                                <label class="d_inline_b m_bottom_5">State / Province / Region</label>
                                                <!--product name select-->
                                                <div class="custom_select relative">
                                                        <div class="select_title type_2 r_corners relative color_dark mw_0">Please select</div>
                                                        <ul class="select_list d_none"></ul>
                                                        <select name="product_name">
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                        </select>
                                                </div>
                                        </li>
                                        <li class="m_bottom_15">
                                                <label for="phone_2" class="d_inline_b m_bottom_5">Phone</label>
                                                <input type="text" id="phone_2" name="" class="r_corners full_width">
                                        </li>
                                        <li class="m_bottom_15">
                                                <label for="m_phone_2" class="d_inline_b m_bottom_5">Mobile Phone</label>
                                                <input type="text" id="m_phone_2" name="" class="r_corners full_width">
                                        </li>
                                        <li>
                                                <label for="fax_2" class="d_inline_b m_bottom_5">Fax</label>
                                                <input type="text" id="fax_2" name="" class="r_corners full_width">
                                        </li>
                                </ul>
                        </form>
                </div>
            
            
            <div class="col-lg-6 col-md-6 col-sm-6 m_xs_bottom_30">
                        <h5 class="fw_medium m_bottom_15">Bill To</h5>
                        <form>
                                <ul>
                                        <li class="m_bottom_15">
                                                <label for="c_name_1" class="d_inline_b m_bottom_5">Company Name</label>
                                                <input type="text" id="c_name_1" name="" class="r_corners full_width">
                                        </li>
                                        <li class="m_bottom_15">
                                                <label class="d_inline_b m_bottom_5">Title</label>
                                                <!--product name select-->
                                                <div class="custom_select relative">
                                                        <div class="select_title type_2 r_corners relative color_dark mw_0">Mr</div>
                                                        <ul class="select_list d_none"></ul>
                                                        <select name="product_name">
                                                                <option value="Mr 1">Mr 1</option>
                                                                <option value="Ms">Ms</option>
                                                        </select>
                                                </div>
                                        </li>
                                        <li class="m_bottom_15">
                                                <label for="f_name_1" class="d_inline_b m_bottom_5 required">First Name</label>
                                                <input type="text" id="f_name_1" name="" class="r_corners full_width">
                                        </li>
                                        <li class="m_bottom_15">
                                                <label for="m_name_1" class="d_inline_b m_bottom_5 required">Middle Name</label>
                                                <input type="text" id="m_name_1" name="" class="r_corners full_width">
                                        </li>
                                        <li class="m_bottom_15">
                                                <label for="l_name_1" class="d_inline_b m_bottom_5 required">Last Name</label>
                                                <input type="text" id="l_name_1" name="" class="r_corners full_width">
                                        </li>
                                        <li class="m_bottom_15">
                                                <label for="address_1" class="d_inline_b m_bottom_5 required">Address 1</label>
                                                <input type="text" id="address_1" name="" class="r_corners full_width">
                                        </li>
                                        <li class="m_bottom_15">
                                                <label for="address_1_1" class="d_inline_b m_bottom_5 required">Address 2</label>
                                                <input type="text" id="address_1_1" name="" class="r_corners full_width">
                                        </li>
                                        <li class="m_bottom_15">
                                                <label for="code_1" class="d_inline_b m_bottom_5 required">Zip / Postal Code</label>
                                                <input type="text" id="code_1" name="" class="r_corners full_width">
                                        </li>
                                        <li class="m_bottom_15">
                                                <label for="city_1" class="d_inline_b m_bottom_5 required">City</label>
                                                <input type="text" id="city_1" name="" class="r_corners full_width">
                                        </li>
                                        <li class="m_bottom_15">
                                                <label class="d_inline_b m_bottom_5 required">Country</label>
                                                <!--product name select-->
                                                <div class="custom_select relative">
                                                        <div class="select_title type_2 r_corners relative color_dark mw_0">Please select</div>
                                                        <ul class="select_list d_none"></ul>
                                                        <select name="product_name">
                                                                <option value="England">England</option>
                                                                <option value="Australia">Australia</option>
                                                                <option value="Austria">Austria</option>
                                                        </select>
                                                </div>
                                        </li>
                                        <li class="m_bottom_15">
                                                <label class="d_inline_b m_bottom_5 required">State / Province / Region</label>
                                                <!--product name select-->
                                                <div class="custom_select relative">
                                                        <div class="select_title type_2 r_corners relative color_dark mw_0">Please select</div>
                                                        <ul class="select_list d_none"></ul>
                                                        <select name="product_name">
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                        </select>
                                                </div>
                                        </li>
                                        <li class="m_bottom_15">
                                                <label for="phone_1" class="d_inline_b m_bottom_5">Phone</label>
                                                <input type="text" id="phone_1" name="" class="r_corners full_width">
                                        </li>
                                        <li class="m_bottom_15">
                                                <label for="m_phone_1" class="d_inline_b m_bottom_5">Mobile Phone</label>
                                                <input type="text" id="m_phone_1" name="" class="r_corners full_width">
                                        </li>
                                        <li>
                                                <label for="fax_1" class="d_inline_b m_bottom_5">Fax</label>
                                                <input type="text" id="fax_1" name="" class="r_corners full_width">
                                        </li>
                                </ul>
                        </form>
                </div>
            
            
            
                
            
            
            
            
            
            
        </div>
</div>
<h2 class="tt_uppercase color_dark m_bottom_30">Shipment Information</h2>
<div class="bs_inner_offsets bg_light_color_3 shadow r_corners m_bottom_45">
        <figure class="block_select clearfix relative m_bottom_15">
                <input type="radio" checked name="radio_1" class="d_none">
                <img src="images/shipment_logo.jpg" alt="" class="f_left m_right_20 f_mxs_none m_mxs_bottom_10">
                <figcaption>
                        <h5 class="color_dark fw_medium m_bottom_15 m_sm_bottom_5">Shipment Method 1</h5>
                        <p>Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, consecvtetuer. </p>
                </figcaption>
        </figure>
        <hr class="m_bottom_20">
        <figure class="block_select clearfix relative">
                <input type="radio" name="radio_1" class="d_none">
                <img src="images/shipment_logo.jpg" alt="" class="f_left m_right_20 f_mxs_none m_mxs_bottom_10">
                <figcaption>
                        <h5 class="color_dark fw_medium m_bottom_15 m_sm_bottom_5">Shipment Method 2</h5>
                        <p>Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros.</p>
                </figcaption>
        </figure>
</div>
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                       