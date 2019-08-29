<br/>
<br/>
<br/>
<br/>
<link rel="stylesheet" type="text/css" href="webroot/css/productDetail.css">
<link rel="stylesheet" type="text/css" href="webroot/css/comment.css">
<div class="container">
	<table  id="cart" class="table table-hover table-condensed">
		<form action="index.php?controller=order&action=buy" method="POST">
    				<thead>
						<tr>
							<th style="width:50%">Product</th>
							<th style="width:10%">Price</th>
							<th style="width:8%">Quantity</th>
							<th style="width:22%" class="text-center">Subtotal</th>
							<th style="width:10%"></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							
							<td data-th="Product">
								<div class="row">
									<div class="col-sm-2 hidden-xs"><img style="height: 100px;" src="webroot/uploads/products/<?php echo $productDetail['image']?> " alt="..." class="img-responsive"/></div>
									<div class="col-sm-10">
										<h4 class="nomargin" style="margin-left: 140px;"><?php echo $productDetail['name'] ?></h4>
										<p style="margin-left: 140px;"><?php echo $productDetail['description'];  ?></p>
									</div>
								</div>
							</td>
							<td data-th="Price"><?php echo $productDetail['price']; ?></td>
							<td data-th="Quantity">
								<input name="quantity" type="number" class="form-control text-center" value="1">
							</td>
							<td data-th="Subtotal" class="text-center"><?php echo $productDetail['price']; ?></td>
							<td class="actions" data-th="">
								<button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>
								<button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>								
							</td>
						</tr>
					</tbody>
					<tfoot>
						<tr class="visible-xs">
							<td class="text-center"><strong><?php echo $productDetail['price']; ?></strong></td>
						</tr>
						<tr>
							<td><a href="index.php?controller=product&action=list_product" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
							<td colspan="2" class="hidden-xs"></td>
							<td class="hidden-xs text-center"><strong><?php echo $productDetail['price']; ?></strong></td>
							<td><a name="buy" href="index.php?controller=order&action=buy&id=<?php echo $id; ?>" name= "buy" class="btn btn-success btn-block">Buy now <i class="fa fa-angle-right"></i></a></td>
							<td><input type="hidden" name="user_id"></td>
						</tr>
					</tfoot>
				</table>
			</form>
				<div class="col-xs-9">
                    <ul class="menu-items">
                        <li style="list-style-type: none;" class="active">More detail of Product</li>
                      
                    </ul>
                    <div style="width:100%;border-top:1px solid silver">
                        <p style="padding:15px;">
                            <small>
                            Stay connected either on the phone or the Web with the Galaxy S4 I337 from Samsung. With 16 GB of memory and a 4G connection, this phone stores precious photos and video and lets you upload them to a cloud or social network at blinding-fast speed. With a 17-hour operating life from one charge, this phone allows you keep in touch even on the go. 
        
                            With its built-in photo editor, the Galaxy S4 allows you to edit photos with the touch of a finger, eliminating extraneous background items. Usable with most carriers, this smartphone is the perfect companion for work or entertainment.
                            </small>
                        </p>
                        <small>
                            <ul>
                                <li>Super AMOLED capacitive touchscreen display with 16M colors</li>
                                <li>Available on GSM, AT T, T-Mobile and other carriers</li>
                                <li>Compatible with GSM 850 / 900 / 1800; HSDPA 850 / 1900 / 2100 LTE; 700 MHz Class 17 / 1700 / 2100 networks</li>
                                <li>MicroUSB and USB connectivity</li>
                                <li>Interfaces with Wi-Fi 802.11 a/b/g/n/ac, dual band and Bluetooth</li>
                                <li>Wi-Fi hotspot to keep other devices online when a connection is not available</li>
                                <li>SMS, MMS, email, Push Mail, IM and RSS messaging</li>
                                <li>Front-facing camera features autofocus, an LED flash, dual video call capability and a sharp 4128 x 3096 pixel picture</li>
                                <li>Features 16 GB memory and 2 GB RAM</li>
                                <li>Upgradeable Jelly Bean v4.2.2 to Jelly Bean v4.3 Android OS</li>
                                <li>17 hours of talk time, 350 hours standby time on one charge</li>
                                <li>Available in white or black</li>
                                <li>Model I337</li>
                                <li>Package includes phone, charger, battery and user manual</li>
                                <li>Phone is 5.38 inches high x 2.75 inches wide x 0.13 inches deep and weighs a mere 4.59 oz </li>
                            </ul>  
                        </small>
                    </div>
                </div>		
           






 <
<div class="container">

	<div class="row">
	</div>
    
    <div class="row">
    
    <div class="col-md-6">
    						<div class="widget-area no-padding blank">
								<div class="status-upload">
								<form action="index.php?controller=comment&action=add_comment" method="POST">
										<input type="hidden" name="user_id" value="<?php echo $productDetail['id'] ?>">
										<input type="hidden" name="product_id" value="<?php echo $productDetail['id']?>">
										<br/>
										<textarea placeholder="What are you doing right now?" name="content" ></textarea>
										<ul>
											<li><a title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Audio"><i class="fa fa-music"></i></a></li>
											<li><a title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Video"><i class="fa fa-video-camera"></i></a></li>
											<li><a title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Sound Record"><i class="fa fa-microphone"></i></a></li>
											<li><a title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Picture"><i class="fa fa-picture-o"></i></a></li>
										</ul>
										<button type="submit" name="comment" class="btn btn-success green"><i class="fa fa-share"></i> Share</button>
									</form>
								</div><!-- Status Upload  -->
							</div><!-- Widget Area -->
						</div>
        
    </div>
</div>




<style type="text/css">
	.card-inner{
    margin-left: 4rem;
}
</style>
<div class="container">
	<?php
				if ($commentList->num_rows > 0){
					while ($comment = $commentList->fetch_assoc()) {
			  	$id = $comment['id'];
				?>
	
	<div class="card">
	    <div class="card-body">
	        <div class="row">
        	    <div class="col-md-2">
        	        <img src="webroot/uploads/users/<?php echo $comment['avatar']?> " class="img img-rounded img-fluid"/>
        	        <p class="text-secondary text-center"><?php echo $comment['created']; ?></p>
        	    </div>
			    	    <div class="col-md-10">
			    	    		
        	        <p>
        	            <a class="float-left" href="https://maniruzzaman-akash.blogspot.com/p/contact.html"><strong><?php echo $comment['username']; ?></strong></a>
        	            <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                        <span class="float-right"><i class="text-warning fa fa-star"></i></span>
        	            <span class="float-right"><i class="text-warning fa fa-star"></i></span>
        	            <span class="float-right"><i class="text-warning fa fa-star"></i></span>

        	       </p>
        	       <div class="clearfix"></div>
        	        <p><?php echo  $comment['content']; ?></p>
        	        <p>
        	        	<a href="index.php?controller=comment&action=delete_comment&id=<?php echo $id ?>" class="float-right btn btn-outline-primary ml-2"> <i class="fa fa-reply"></i> Delete</a>
        	            <a href="index.php?controller=comment&action=reply&id=<?php echo $id; ?>" class="float-right btn btn-outline-primary ml-2"> <i class="fa fa-reply"></i> Reply</a>
        	            <a href="index.php?controller=comment&action=like&id=<?php echo $id ?>" class="float-right btn text-white btn-danger"> <i class="fa fa-heart"></i> Like</a>
        	       </p>
        	    </div>
	        </div>
	       
	    </div>
	</div>
	<?php }?>
	<?php }else {?>
		<div class="comment_detail">
			<p>----------------------------------------------------------------------------------</p>
			<p>No comment</p>

		</div>
	<?php }?>
</div>


