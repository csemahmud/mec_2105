<?php
    if(count($selected_products) > 0){
?>
<table class="table table-striped table-condensed table-bordered ">
    <thead>
            <tr>
                    <th>ID</th>
                    <th>Product Name</th>
                    <th>Publication Status</th>
                    <th>Actions</th>
            </tr>
    </thead>   
    <tbody>
        <?php foreach ($selected_products as $v_product) { ?>
          <tr>
                  <td><?php echo $v_product->product_id;?></td>
                  <td class="center"><?php echo $v_product->product_name;?></td>
                  <td class="center">
                      <?php if($v_product->pr_publication_status == 1) { ?>
                          <span class="label label-success">Published</span>
                      <?php } else { ?>
                          <span class="label label-important">Unpublished</span>
                      <?php } ?>
                  </td>
                  <td class="center">
                      <a class="btn btn-info" href="<?php echo base_url();?>product_controller/edit_product/<?php echo $v_product->product_id; ?>" title="Edit">
                                  <i class="icon-edit icon-white"></i>                                            
                          </a>
                      <a class="btn btn-danger" href="<?php echo base_url();?>product_controller/delete_product/<?php echo $v_product->product_id; ?>" title="Delete"
                         onclick="return confirm('Are you sure, you want to delete this product : <?php 
                              echo $v_product->product_name;
                         ?> ?')">
                                  <i class="icon-trash icon-white"></i>
                          </a>
                      <?php if($v_product->pr_publication_status == 1) { ?>
                      <a class="btn btn-danger" href="<?php echo base_url();?>product_controller/unpublish_product/<?php echo $v_product->product_id; ?>" title="Unpublish"
                         onclick="return confirm('Warning !!! All products under product : <?php 
                              echo $v_product->product_name;
                         ?> will be unpublished . Are you sure, you want to unpublish this  ?')">
                                  <i class="icon-eye-close icon-white"></i>         
                          </a>
                      <?php } else { ?>
                      <a class="btn btn-success" href="<?php echo base_url();?>product_controller/publish_product/<?php echo $v_product->product_id; ?>" title="Publish">
                                  <i class="icon-eye-open icon-white"></i>         
                          </a>
                      <?php } ?>
                  </td>
          </tr>
         <?php } ?> 
    </tbody>
</table>
<?php } else { ?>
<h1 class="error_message">
    No Product to show ....
</h1>
<?php } ?>