<?php
include("include/db.php");
$famID=$_GET['famID'];
$sel_pro = "SELECT * FROM `complete_pro` WHERE  pro_id='$famID'";
$pro_sel = mysqli_query($conn,$sel_pro);
$fetch_sel =$pro_sel->fetch_array(MYSQLI_ASSOC); 


?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <div class="modal-header">
                <a href="#" data-dismiss="modal" class="class pull-right"><span class="glyphicon glyphicon-remove"></span></a>
            <h3>Just Wait, Its Loading...</h3>
			
			</div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 product_img">

                         <iframe src="images/complete/<?php echo $fetch_sel['file'];?>" style="width:500px; height:350px;" frameborder="0"></iframe>
				
                    </div>
                    
                </div>
            </div>
        