<?php
include "includes/header.php";
include "includes/sidebar.php";?>


<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Sort Sales with date & Author</li>
			</ol>
		</div><!--/.row-->			
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Sort Sales with date & Author</div>
					<div class="panel-body">
						<div class="col-md-1"></div>
							<div class="col-md-10">

								<form method="post" action="#">
									<div class="form-group">
										<label>Author:</label>
										<select name="Author" class="form-control">
											<option value="" selected>Select date</option>
											<?php while($row = $catAuthor->fetch_array()) :?> 
								              <option value="<?php echo $row['author'];?>"><?php echo $row['author'];?></option>
								            <?php endwhile; ?>	
										</select>
									</div>

									<div class="form-group">
										<label>Date:</label>
										<select name="datte" class="form-control">
											<option value="" selected>Select date</option>
											<?php while($row = $cats3->fetch_array()) :?> 
								              <option value="<?php echo $row['Datte'];?>"><?php echo $row['Datte'];?></option>
								            <?php endwhile; ?>	
										</select>
									</div>

									<button type="submit" name="submit" class="btn btn-primary" class="pull-right"> Check Report </button>								
									</form>

									
									<?php
											if(isset($_POST['submit'])){
											$rsf = strip_tags($_POST['datte']);
											$rsf2 = strip_tags($_POST['Author']);
											echo $rsf;
											echo $rsf2;
											$query = "SELECT * FROM salesrec where Datte='$rsf' and author='$rsf2'";
											$cat = $db->select($query);	
											echo ' <table class="table table-responsive" >
									<tr>
										<th>Customer Name</th>
										<th>Book Title</th>
										<th>Author</th>
										<th>Quantity</th>
										<th>Price</th>
										<th>Total Price</th>
										<th>Book Type</th>
										<th>Date</th>
									</tr>';
									while($row = $cat->fetch_array()){
										echo '<tr><td>'.$row['cname'].'</td>'
										.'<td>'.$row['title'].'</td>'
										.'<td>'.$row['author'].'</td>'
										.'<td>'.$row['qty'].'</td>'
										.'<td>'.$row['price'].'</td>'
										.'<td>'.$row['tprice'].'</td>'
										.'<td>'.$row['bookType'].'</td>'
										.'<td>'.$row['Datte'].'</td> </tr>';
										}

										}?>
								</table>							
							<div class="col-md-1"></div>
						</div>
					</div>
				</div><!-- /.col-->
			</div><!-- /.row -->
			
		</div><!--/.main-->