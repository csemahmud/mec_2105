<div>
        <ul class="breadcrumb">
                <li>
                        <a href="#">Home</a> <span class="divider">/</span>
                </li>
                <li>
                        <a href="#">Manage Categories</a>
                </li>
        </ul>
</div>

<div class="row-fluid sortable">		
        <div class="box span12">
                <div class="box-header well" data-original-title>
                        <h2><i class="icon-edit"></i> Category Manager</h2>
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
                        <table class="table table-striped table-condensed table-bordered ">
                          <thead>
                                  <tr>
                                          <th>ID</th>
                                          <th>Category Name</th>
                                          <th>Publication Status</th>
                                          <th>Actions</th>
                                  </tr>
                          </thead>   
                          <tbody>
                              <?php foreach ($all_categories as $v_category) { ?>
                                <tr>
                                        <td><?php echo $v_category->category_id;?></td>
                                        <td class="center"><?php echo $v_category->category_name;?></td>
                                        <td class="center">
                                            <?php if($v_category->ct_publication_status == 1) { ?>
                                                <span class="label label-success">Published</span>
                                            <?php } else { ?>
                                                <span class="label label-important">Unpublished</span>
                                            <?php } ?>
                                        </td>
                                        <td class="center">
                                            <a class="btn btn-info" href="<?php echo base_url();?>category_controller/edit_category/<?php echo $v_category->category_id; ?>" title="Edit">
                                                        <i class="icon-edit icon-white"></i>                                            
                                                </a>
                                            <a class="btn btn-danger" href="<?php echo base_url();?>category_controller/delete_category/<?php echo $v_category->category_id; ?>" title="Delete"
                                               onclick="return confirm('Are you sure, you want to delete this category : <?php 
                                                    echo $v_category->category_name;
                                               ?> ?')">
                                                        <i class="icon-trash icon-white"></i>
                                                </a>
                                            <?php if($v_category->ct_publication_status == 1) { ?>
                                            <a class="btn btn-danger" href="<?php echo base_url();?>category_controller/unpublish_category/<?php echo $v_category->category_id; ?>" title="Unpublish"
                                               onclick="return confirm('Warning !!! All products under category : <?php 
                                                    echo $v_category->category_name;
                                               ?> will be unpublished . Are you sure, you want to unpublish this  ?')">
                                                        <i class="icon-eye-close icon-white"></i>         
                                                </a>
                                            <?php } else { ?>
                                            <a class="btn btn-success" href="<?php echo base_url();?>category_controller/publish_category/<?php echo $v_category->category_id; ?>" title="Publish">
                                                        <i class="icon-eye-open icon-white"></i>         
                                                </a>
                                            <?php } ?>
                                        </td>
                                </tr>
                               <?php } ?> 
                          </tbody>
                  </table>            
                </div>
        </div><!--/span-->

</div><!--/row-->