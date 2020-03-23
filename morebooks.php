<?php
include "includes/header.php";
include "includes/sidebar.php";



 ?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Add more books to stock</li>
			</ol>
		</div><!--/.row-->			
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Add More Books To Stock</div>
					<div class="panel-body">
						<div class="col-md-1"></div>
						<div class="col-md-10">
							<form role="form" action="" method="post" class="registration-form">
							<?php

								if(isset($_POST['updateqty'])){
									$bookid = intval(strip_tags($_POST['title']));
									$bookqty = intval(strip_tags($_POST['qty']));

									$query1 = "UPDATE debit set NoOfBooksAvail = NoOfBooksAvail + '$bookqty' where id='$bookid' limit 1";
									$cats7 = $db->update($query1);
									//$run = $db->insert($query);

									if($cats7 == TRUE){
										echo "<div class='alert alert-success text-center'><i class='fa fa-check'></i> Success, quantity updated</div>";

									}
									else{
										echo "<div class='alert alert-danger text-center'><i class='fa fa-remove'></i> Error, an unknown error occured</div>";
									}
								}

							?>

								<div class="col-md-6">
											
										<div class="form-group">
											<label>Title:</label>
											<select name="title" required class="form-control">
								              <option>-Select Book Title-</option>
								              <?php while($row = $cats->fetch_array()) :?> 
								              <option value="<?php echo $row['id'];?>"><?php echo $row['Title'];?></option>
								            <?php endwhile; ?>
								            </select>
										</div>

								</div>

								<div class="col-md-6">

										<div class="form-group">
											<label>Quantity:</label>
											<input name="qty" class="form-control" type="number" min-length="1">
										</div>




										
																		
										
										<button type="submit" name="updateqty" class="btn btn-primary long-btn" > Submit Button </button>								
								</div>
							</form>
						<div class="col-md-1"></div>

					</div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->
		
	</div><!--/.main-->