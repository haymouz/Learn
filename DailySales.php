<?php
include "includes/header.php";
include "includes/sidebar.php";

if(isset($_POST['submit'])){
	$cname = $_POST['cname'];
	$title = $_POST['title'];
	$author = $_POST['author'];
	$qty = $_POST['qty'];
	$price = $_POST['price'];
	$tprice = $_POST['tprice'];
	$bookType = $_POST['bookType'];
	$datte = $_POST['datte'];
	// $urlAddr = 'EduQual';
	echo NoOfBooksAvail;
	if(intval(NoOfBooksAvail)<$qty){
		echo "Out of stock";
	}
	$query1 = "UPDATE debit set NoOfBooksAvail = NoOfBooksAvail - '$qty' where title='$title' limit 1";
	$cats10 = $db->update($query1);

	$query = "INSERT INTO salesrec (cname,title,author,qty,price,tprice,bookType, datte) VALUES ('$cname', '$title', '$author','$qty','$price', '$tprice', '$bookType', '$datte')";
	      

	$run = $db->insert($query);
}


 ?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Daily Sales</li>
			</ol>
		</div><!--/.row-->			
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Daily Sales</div>
					<div class="panel-body">
						<div class="col-md-1"></div>
						<div class="col-md-10">
							<form role="form" action="" method="post" class="registration-form">
								<div class="col-md-6">
										

										<div class="form-group">
											<label>Customer's Name:</label>
											<input name="cname" class="form-control" type="text" placeholder="Name">
										</div>
											
										<div class="form-group">
											<label>Title:</label>
											<select name="title" class="form-control">
								              <option>-Select Book Title-</option>
								              <?php while($row = $cats->fetch_array()) :?> 
								              <option value="<?php echo $row['Title'];?>"><?php echo $row['Title'];?></option>
								            <?php endwhile; ?>
								            </select>
										</div>

										<div class="form-group">
											<label>Author:</label>
											<select name="author" class="form-control">
								              <option>-Select Book Author-</option>
								              <?php while($row = $cats1->fetch_array()) :?> 
								              <option value="<?php echo $row['Author'];?>"><?php echo $row['Author'];?></option>
								            <?php endwhile; ?>
								            </select>
										</div>
											
										<div class="form-group">
											<label>Quantity:</label>
											<input name="qty" class="form-control" type="number" min-length="1">
										</div>
								</div>
								<div class="col-md-6">

										<div class="form-group">
											<label>Price per Copy:</label>
											<select name="price" class="form-control">
								              <option>-Select Book Price-</option>
								              <?php while($row = $cats2->fetch_array()) :?> 
								              <option value="<?php echo $row['PriceCopy'];?>"><?php echo $row['PriceCopy'];?></option>
								            <?php endwhile; ?>
								            </select>
										</div>

										<div class="form-group">
											<label>Total Price:</label>
											<input name="tprice" class="form-control" type="text"  placeholder="Total Price">
										</div>

										<div class="form-group">
											<label>Date:</label>
											<input name="datte" class="form-control" type="date"  placeholder="mm/dd/yyyy">
										</div>

										<div class="form-group">
											<label>Book Type</label>
											<select name="bookType" class="form-control">
												<option>--Select--</option>
												<option value="Uniben Bookshop">Uniben Bookshop</option>
												<option value="Lecturer Book">Lecturer Book</option>
											</select>
										</div>
																		
										
										<button type="submit" name="submit" class="btn btn-primary" class="pull-right"> Submit Button </button>								
								</div>
							</form>
						<div class="col-md-1"></div>

					</div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->
		
	</div><!--/.main-->