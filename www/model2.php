<?php
include("include/db.php");
$famID=$_GET['famID'];
$sel_pro = "SELECT * FROM `hire` WHERE id='$famID'";
$pro_sel = mysqli_query($conn,$sel_pro);
$fetch_sel =$pro_sel->fetch_array(MYSQLI_ASSOC); 


?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <div class="modal-header">
                <a href="#" data-dismiss="modal" class="class pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                <h3 class="modal-title"><?php echo $fetch_sel['subjects'];?>(<?php echo $fetch_sel['topic'];?>)</h3>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 product_img">

                        <img src="http://img.bbystatic.com/BestBuy_US/images/products/5613/5613060_sd.jpg" class="img-responsive">
                    </div>
                    <div class="col-md-6 product_content">
                        <h4>Project Id: <span><?php echo $fetch_sel['id'];?></span></h4>
                        <div class="rating">
                           
                            pages
                            (<?php echo $fetch_sel['pages'];?>) <span class="glyphicon glyphicon-star"></span>
                        </div>
                        <p><?php echo $fetch_sel['instruction'];?></p>
                        <h5 class="cost"><i class="fa fa-hourglass-end"></i>Date: <?php echo $fetch_sel['final_date'];?> </h5>
                        <h5 class="cost"><i class="fa fa-hourglass-end"></i>Time: <?php echo $fetch_sel['final_time'];?> </h5>
						<div class="row">
                           <form action="update_project.php" method="post">
						   <label>Enter Your Price<i class="fa fa-usd" style="font-size:24px"></i>:</label>
						   <input type="file" name="price">
						   <input type="hidden" name="pro_id" value="<?php echo $fetch_sel['id'];?>">
						  
                           <input type="submit" name="accept" class="btn btn-primary" value="Send Your Price">

						  </form>
                         
                       
                        </div>
                        <div class="space-ten"></div>
                      
                    </div>
                </div>
            </div>
        