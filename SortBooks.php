<?php
include "includes/header.php";
include "includes/sidebar.php";
?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">List of Available Books</li>
			</ol>
		</div><!--/.row-->			
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Sort Available Books</div>
					<div class="panel-body">
						<div class="col-md-1"></div>
						<div class="col-md-10">

								<table class="table table-responsive" >
										<tr>
											<th>Aurthor</th>
											<th>Book Title</th>
											<th>Price</th>
											<th>Book Type</th>
											<th>No of Available Books</th>
										</tr>

										<?php while($row = $cats->fetch_array()) :?> 
											<tr>
												<td> <?php echo $row['Author'];?></td>
												<td> <?php echo $row['Title'];?></td>
												<td> <?php echo $row['PriceCopy'];?></td>
												<td> <?php echo $row['BookType'];?></td>
												<td> <?php echo $row['NoOfBooksAvail'];?></td>
											</tr>
										<?php endwhile; ?>
								</table>							
							<div class="col-md-1"></div>
						</div>
			</div><!-- /.col-->
		</div><!-- /.row -->
		
	</div><!--/.main-->