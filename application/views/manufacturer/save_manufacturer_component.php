<div>
        <ul class="breadcrumb">
                <li>
                        <a href="#">Home</a> <span class="divider">/</span>
                </li>
                <li>
                        <a href="#">Manufacturer</a>
                </li>
        </ul>
</div>

<div class="row-fluid sortable">
        <div class="box span12">
                <div class="box-header well" data-original-title>
                        <h2>
                            <?php
                                switch($function){
                                    case "Add":
                            ?>
                            <i class="icon-plus"></i>
                            <?php
                                        break;
                                    case "Update":
                                        break;

                            ?>
                            <i class="icon-edit"></i>
                                <?php 
                                }
                                echo $function;
                                ?> Manufacturer
                        </h2>
                        <div class="box-icon">
                                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
                        </div>
                </div>
                <div class="box-content">
                    <h3 class="success_message">
                        <?php
                            $message = $this->session->userdata("message");
                            if($message != NULL){
                                echo $message;
                                $this->session->unset_userdata("message");
                            }
                        ?>
                    </h3>
                    <h3 class="error_message">
                        <?php
                            $error = $this->session->userdata("error");
                            if($error != NULL){
                                echo $error;
                                $this->session->unset_userdata("error");
                            }
                        ?>
                    </h3>
                    <form name="save_manufacturer_form" action="<?php echo base_url();?>manufacturer_controller/<?php
                              switch ($function){
                              case "Add":
                                  echo "save";
                                  break;
                              case "Update":
                                  echo "update";
                                  break;
                              }
                              ?>_manufacturer" method="post" class="form-horizontal" onsubmit="return check_is_name_unique()">
                          <fieldset>
                              <legend><?php echo $function;?> Manufacturer</legend>
                              <?php if(isset($manufacturer_info->manufacturer_id)) { ?>
                              <input type="hidden" id="manufacturer_id" name="manufacturer_id" value="<?php echo $manufacturer_info->manufacturer_id;?>">
                              <?php } ?>
                                <div class="control-group">
                                  <label class="control-label" for="typeahead">Manufacturer Name :  </label>
                                  <div class="controls">
                                      <input type="text" class="span6 typeahead" id="manufacturer_name" name="manufacturer_name" value="<?php
                                        if(isset($manufacturer_info->manufacturer_name)){
                                            echo $manufacturer_info->manufacturer_name;
                                        }
                                        ?>" required="required" tabindex="1" onblur="check_manufacturer_name()">
                                      <span class="required"><strong>*</strong></span>
                                      <h3 id="message_unique_name" class="success_message"></h3>
                                      <h3 id="error_unique_name" class="error_message"></h3>

                                  </div>
                                </div>

                                <div class="control-group">
                                  <label class="control-label" for="manufacturer_description">Manufacturer Description : </label>
                                  <div class="controls">
                                      <textarea class="cleditor" id="manufacturer_description" name="manufacturer_description" rows="3" tabindex="2">
                                          <?php
                                            if(isset($manufacturer_info->manufacturer_description)){
                                                echo $manufacturer_info->manufacturer_description;
                                        }
                                          ?>
                                      </textarea>
                                  </div>
                                </div>
                                <div class="control-group">
                                      <label class="control-label" for="selectError3">Publication Status : </label>
                                      <div class="controls">
                                          <select id="mn_publication_status" name="mn_publication_status" tabindex="3">
                                              <option value="0">Unpublished</option>
                                              <option value="1">Published</option>
                                        </select>
                                      </div>
                                </div>
                                <div class="form-actions">
                                    <button type="submit" class="btn btn-primary" tabindex="4">Save Manufacturer</button>
                                    <button type="reset" class="btn" tabindex="6">Reset</button>
                                </div>
                          </fieldset>
                        </form>   

                </div>
        </div><!--/span-->

</div><!--/row-->

<script type="text/javascript">
    
    document.forms["save_manufacturer_form"].elements["mn_publication_status"].value 
            = "<?php
                if(isset($manufacturer_info->publication_status)){
                    echo $manufacturer_info->publication_status;
                } else {
                    echo "1";
                }
            ?>";
    
</script>
<script type="text/javascript">
 
 var is_name_unique = true;
 
 function check_manufacturer_name() {
     
     var manufacturer_name = document.getElementById("manufacturer_name").value;
     
     var serverPage = "<?php echo base_url();?>manufacturer_controller/";
     
    <?php if(isset($manufacturer_info->manufacturer_id)) { ?>
        serverPage = serverPage + "check_name_considering_id/" + "<?php echo $manufacturer_info->manufacturer_id;?>" + "/" + manufacturer_name;
    <?php } else { ?>
        serverPage = serverPage + "check_manufacturer_name/" + manufacturer_name;
    <?php } ?>
        
    console.log(serverPage);
    xmlhttp.open("GET", serverPage);
    xmlhttp.onreadystatechange = function (){
        console.log(xmlhttp.readyState);
        console.log(xmlhttp.status);
        
        if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
            var name_count = xmlhttp.responseText;
            
            if(name_count == 0){
                document.getElementById("message_unique_name").innerHTML = 'Manufacturer name available';
                document.getElementById("error_unique_name").innerHTML = '';
                is_name_unique = true;
            } else {
                document.getElementById("message_unique_name").innerHTML = '';
                document.getElementById("error_unique_name").innerHTML = 'Error : Manufacturer name must be unique !!!';
                is_name_unique = false;
            }
        }
    }
    
    xmlhttp.send(null);
     
 }
 
 function check_is_name_unique(){
     return is_name_unique;
 }
</script>