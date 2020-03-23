 <?php
 include "includes/header.php";
 include "includes/sidebar.php";

if(isset($_POST['submit2'])){
	$Author = $_POST['Author'];
	$Title = $_POST['Title'];
	$PriceCopy = $_POST['PriceCopy'];
	$BookType = $_POST['BookType'];
	$query = "INSERT INTO debit (Author, Title, PriceCopy, BookType) VALUES ('$Author', '$Title', '$PriceCopy', '$BookType')";
	echo "Haymouz";

	$run = $db->insert($query);
} 

?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Register New Books</li>
			</ol>
		</div><!--/.row-->			
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Register New Books</div>
					<div class="panel-body">
						<div class="col-md-1"></div>
						<div class="col-md-10">
							<form role="form" action="" method="post" class="registration-form">
								<div class="col-md-6">
										
										<div class="form-group">
											<label>Author's Name:</label>
											<input name="Author" class="form-control" type="text"  placeholder="Name">
										</div>

										<div class="form-group">
											<label>Book Title:</label>
											<input name="Title" class="form-control" type="text"  placeholder="Book Title">
										</div>
											
										<div class="form-group">
											<label>Price Per Copy:</label>
											<input name="PriceCopy" class="form-control" type="text"  placeholder="Price Per Copy">
										</div>
											
								</div>
								<div class="col-md-6">
										
										<div class="form-group">
											<label>Book Type</label>
											<select name="BookType" class="form-control">
												<option>--Select--</option>
												<option value="Uniben Bookshop">Uniben Bookshop</option>
												<option value="Lecturer Book">Lecturer Book</option>
											</select>

										</div>
											<button name="submit2" type="submit" class="btn btn-primary" class="pull-right"> Submit Button </button>								
										</div>
							</form>
						<div class="col-md-1"></div>

					</div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->
		
	</div><!--/.main-->