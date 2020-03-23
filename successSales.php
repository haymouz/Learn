<?php
include "includes/header.php";
include "includes/sidebar.php";
?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Icons</li>
			</ol>
		</div><!--/.row-->			
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Daily Sales</div>
					<div class="panel-body">
						<div class="col-md-1"></div>
						<div class="col-md-10">
							<form role="form">
								<div class="col-md-6">
										

										<div class="form-group">
											<label>Customer's Name:</label>
											<input class="form-control" type="text" name="" placeholder="Name">
										</div>
											
										<div class="form-group">
											<label>Title:</label>
											<select name="cat" class="form-control">
								              <option>-Select Book Title-</option>
								              <?php while($row = $cats->fetch_array()) :?> 
								              <option value="<?php echo $row['id'];?>"><?php echo $row['title'];?></option>
								            <?php endwhile; ?>
								            </select>
										</div>

										<div class="form-group">
											<label>Author:</label>
											<select name="cat" class="form-control">
								              <option>-Select Book Author-</option>
								              <?php while($row = $cats1->fetch_array()) :?> 
								              <option value="<?php echo $row['id'];?>"><?php echo $row['author'];?></option>
								            <?php endwhile; ?>
								            </select>
										</div>
											
										<div class="form-group">
											<label>Quantity:</label>
											<input class="form-control" type="number" name="qty" min-length="1">
										</div>
								</div>
								<div class="col-md-6">
										<div class="form-group">
											<label>Price per Copy:</label>
											<input class="form-control" placeholder="Book Price">
										</div>

										<div class="form-group">
											<label>Total Price:</label>
											<input class="form-control" placeholder="Book Price">
										</div>

										<div class="form-group">
											<label>Selects</label>
											<select class="form-control">
												<option>--Select--</option>
												<option value="1">Uniben Bookshop</option>
												<option value="2">Lecturer Book</option>
											</select>
										</div>
																		
										
										<button type="submit" class="btn btn-primary" class="pull-right"> Submit Button </button>								
								</div>
							</form>
						<div class="col-md-1"></div>

					</div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->
		
	</div><!--/.main-->