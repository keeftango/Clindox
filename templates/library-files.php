<?php include '../includes/head.php'; ?>

<?php include '../includes/nav.php'; ?>

<div class="breadcrumbs">
	<div class="breadcrumbs-inner">
		<div class="container">
			<ul class="breadcrumb">
            	<li><a href="#">Dashboard</a></li>
            	<li class="breadcrumb-separator"><i class="icon-chevron-right icon-blue"></i></li> 
            	<li><a href="#">Library</a></li>
            	<li class="breadcrumb-separator"><i class="icon-chevron-right icon-blue"></i></li> 
            	<li>Files and Images</li>
            </ul>
		</div>
	</div>
</div>

<div class="container">

	<div class="page-header">
		<h1>Library</h1>
	</div>
	
	<div class="row">
		<div class="span12">
			<div class="crf-header clearfix">
				<div class="pull-right">
					<div class="btn-group">
						<a class="btn btn-primary" data-toggle="modal" href="#uploadModal" ><i class="icon-upload"></i> Upload File</a>
					</div>
					<!--
					<form class="form-search">
				      	<input type="text" class="input-medium search-query" placeholder="Search components…">
				      	<button type="submit" class="btn">Search</button>
					</form>
					-->
				</div>
				<h3>Files and Images</h3>
			</div>
		</div>
	</div>
	
	<div class="row">
	
		<div class="span3">
		
			<ul class="nav nav-tabs nav-stacked">
				<li class="active">
					<a href="#">Default Questions <i class="icon-chevron-right pull-right"></i></a>
				</li>
				<li>
					<a href="#">Custom Questions <i class="icon-chevron-right pull-right"></i></a>
				</li>
				<li>
					<a href="#">CRF Templates <i class="icon-chevron-right pull-right"></i></a>
				</li>
				<li>
					<a href="#">Components <i class="icon-chevron-right pull-right"></i></a>
				</li>
				<li>
					<a href="#">Default CRF Themes <i class="icon-chevron-right pull-right"></i></a>
				</li>
				<li>
					<a href="#">Custom CRF Themes <i class="icon-chevron-right pull-right"></i></a>
				</li>
				<li>
					<a href="#">Files and Images <i class="icon-chevron-right pull-right"></i></a>
				</li>
			</ul>
			
		</div><!-- /.span3 -->
		
		<div class="span9">
		
			<div class="widget">
				<div class="widget-content">
				
					<h3 class="content-title">View and add Files and Images</h3>
					
					<button class="btn" data-toggle="collapse" data-target="#filter-block">Filter Files &amp; Images</button>
					<div id="filter-block" class="collapse">
						<form class="form-horizontal">
							<fieldset>
						    	<div class="control-group">
						    		<label class="control-label" for="select-patient1">Filter Criteria 1</label>
						    		<div class="controls">
						    			<select id="select-patient1">
						                	<option>-- Select option</option>
						                	<option>Option 1</option>
							                <option>Option 2</option>
						                	<option>Option 3</option>
						                	<option>Option 4</option>
						                	<option>Option 5</option>
						                	<option>Option 6</option>
						                </select>
						    		</div>
						    	</div>
						    	<div class="control-group">
						    		<label class="control-label" for="select-patient2">Filter Criteria 2</label>
						    		<div class="controls">
						    			<select id="select-patient2">
						                	<option>-- Select Option</option>
						                	<option>Option 1</option>
							                <option>Option 2</option>
						                	<option>Option 3</option>
						                	<option>Option 4</option>
						                	<option>Option 5</option>
						                	<option>Option 6</option>
						                </select>
						    		</div>
						    	</div>
					        	<div class="form-actions">
									<button type="submit" class="btn btn-primary">Update Results</button>
									<button class="btn">Clear Filter</button>
								</div>	
						  </fieldset>
						</form>
					</div><!-- /#filter-block -->	
									
					<div class="pagination-block clearfix">
						<span class="page-amount">Showing 1-9 of 34 Files and Images</span>
						<div class="pagination pull-right">
							<ul>
								<li>
									<a href="#"><i class="icon-chevron-left"></i></a>
								</li>
								<li>
									<a href="#"><i class="icon-chevron-right"></i></a>
								</li>
							</ul>
						</div><!-- /pagination -->
					</div>
					
					<ul class="thumbnails ">
				   		<li class="file-thumbnail">
				     		<div class="thumbnail">
				       		<img alt="placeholder image" src="http://placehold.it/201x160" >
				       		<div class="caption">
			         			<h5>File title</h5>
			         			<div class="btn-group">
									<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
										<i class="icon-cog icon-white"></i> Actions
										<span class="caret"></span>
									</a>
									<ul class="dropdown-menu">
										<li><a href="#">Edit</a></li>
										<li><a data-toggle="modal" href="#deleteModal" ><i class="icon-trash"></i> Delete</a></li>
										<li><a data-toggle="modal" href="#duplicateModal" ><i class="icon-plus"></i> Copy</a></li>
									</ul>
								</div>
				       		</div><!-- /.caption -->
				     		</div><!-- /.thumbnail -->
				   		</li>
				   		<li class="file-thumbnail">
				     		<div class="thumbnail">
				       		<img alt="placeholder image" src="http://placehold.it/201x160" >
				       		<div class="caption">
			         			<h5>File title</h5>
			         			<div class="btn-group">
									<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
										<i class="icon-cog icon-white"></i> Actions
										<span class="caret"></span>
									</a>
									<ul class="dropdown-menu">
										<li><a href="#">Edit</a></li>
										<li><a href="#">Copy</a></li>
										<li><a href="#">Delete</a></li>
									</ul>
								</div>
				       		</div><!-- /.caption -->
				     		</div><!-- /.thumbnail -->
				   		</li>
				   		<li class="file-thumbnail">
				     		<div class="thumbnail">
				       		<img alt="placeholder image" src="http://placehold.it/201x160" >
				       		<div class="caption">
			         			<h5>File title</h5>
			         			<div class="btn-group">
									<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
										<i class="icon-cog icon-white"></i> Actions
										<span class="caret"></span>
									</a>
									<ul class="dropdown-menu">
										<li><a href="#">Edit</a></li>
										<li><a href="#">Copy</a></li>
										<li><a href="#">Delete</a></li>
									</ul>
								</div>
				       		</div><!-- /.caption -->
				     		</div><!-- /.thumbnail -->
				   		</li>
				   		<li class="file-thumbnail">
				     		<div class="thumbnail">
				       		<img alt="placeholder image" src="http://placehold.it/201x160" >
				       		<div class="caption">
			         			<h5>File title</h5>
			         			<div class="btn-group">
									<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
										<i class="icon-cog icon-white"></i> Actions
										<span class="caret"></span>
									</a>
									<ul class="dropdown-menu">
										<li><a href="#">Edit</a></li>
										<li><a href="#">Copy</a></li>
										<li><a href="#">Delete</a></li>
									</ul>
								</div>
				       		</div><!-- /.caption -->
				     		</div><!-- /.thumbnail -->
				   		</li>
				   		<li class="file-thumbnail">
				     		<div class="thumbnail">
				       		<img alt="placeholder image" src="http://placehold.it/201x160" >
				       		<div class="caption">
			         			<h5>File title</h5>
			         			<div class="btn-group">
									<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
										<i class="icon-cog icon-white"></i> Actions
										<span class="caret"></span>
									</a>
									<ul class="dropdown-menu">
										<li><a href="#">Edit</a></li>
										<li><a href="#">Copy</a></li>
										<li><a href="#">Delete</a></li>
									</ul>
								</div>
				       		</div><!-- /.caption -->
				     		</div><!-- /.thumbnail -->
				   		</li>
				   		<li class="file-thumbnail">
				     		<div class="thumbnail">
				       		<img alt="placeholder image" src="http://placehold.it/201x160" >
				       		<div class="caption">
			         			<h5>File title</h5>
			         			<div class="btn-group">
									<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
										<i class="icon-cog icon-white"></i> Actions
										<span class="caret"></span>
									</a>
									<ul class="dropdown-menu">
										<li><a href="#">Edit</a></li>
										<li><a href="#">Copy</a></li>
										<li><a href="#">Delete</a></li>
									</ul>
								</div>
				       		</div><!-- /.caption -->
				     		</div><!-- /.thumbnail -->
				   		</li>
				   		<li class="file-thumbnail">
				     		<div class="thumbnail">
				       		<img alt="placeholder image" src="http://placehold.it/201x160" >
				       		<div class="caption">
			         			<h5>File title</h5>
			         			<div class="btn-group">
									<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
										<i class="icon-cog icon-white"></i> Actions
										<span class="caret"></span>
									</a>
									<ul class="dropdown-menu">
										<li><a href="#">Edit</a></li>
										<li><a href="#">Copy</a></li>
										<li><a href="#">Delete</a></li>
									</ul>
								</div>
				       		</div><!-- /.caption -->
				     		</div><!-- /.thumbnail -->
				   		</li>
				   		<li class="file-thumbnail">
				     		<div class="thumbnail">
				       		<img alt="placeholder image" src="http://placehold.it/201x160" >
				       		<div class="caption">
			         			<h5>File title</h5>
			         			<div class="btn-group">
									<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
										<i class="icon-cog icon-white"></i> Actions
										<span class="caret"></span>
									</a>
									<ul class="dropdown-menu">
										<li><a href="#">Edit</a></li>
										<li><a href="#">Copy</a></li>
										<li><a href="#">Delete</a></li>
									</ul>
								</div>
				       		</div><!-- /.caption -->
				     		</div><!-- /.thumbnail -->
				   		</li>
				   		<li class="file-thumbnail">
				     		<div class="thumbnail">
				       		<img alt="placeholder image" src="http://placehold.it/201x160" >
				       		<div class="caption">
			         			<h5>File title</h5>
			         			<div class="btn-group">
									<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
										<i class="icon-cog icon-white"></i> Actions
										<span class="caret"></span>
									</a>
									<ul class="dropdown-menu">
										<li><a href="#">Edit</a></li>
										<li><a href="#">Copy</a></li>
										<li><a href="#">Delete</a></li>
									</ul>
								</div>
				       		</div><!-- /.caption -->
				     		</div><!-- /.thumbnail -->
				   		</li>
				 	</ul><!-- /.thumbnails -->		
					
					<div class="pagination-block clearfix">
						<span class="page-amount">Showing 1-9 of 34 Files and Images</span>
						<div class="pagination pull-right">
							<ul>
								<li>
									<a href="#"><i class="icon-chevron-left"></i></a>
								</li>
								<li>
									<a href="#"><i class="icon-chevron-right"></i></a>
								</li>
							</ul>
						</div><!-- /pagination -->
					</div>		
					
				</div><!-- /.widget-content -->
			</div><!-- /.widget -->
					
		</div><!-- /.span9 -->
		
	</div><!-- /.row -->
		
</div><!-- /.container -->

<!-- Modal -->

<div id="uploadModal" class="modal hide fade">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal"><i class="icon-remove"></i></button>
		<h3>Upload a file</h3>
	</div>
	<div class="modal-body">
		<label class="control-label">Upload a file to add to your library</label>					
		<button class="btn">Choose file</button> No File chosen
	</div>
	<div class="modal-footer">
		<a href="#" class="btn" data-dismiss="modal">Cancel</a>
		<a href="#" class="btn btn-primary">Confirm Upload</a>
	</div>
</div>

<div id="deleteModal" class="modal hide fade">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal"><i class="icon-remove"></i></button>
		<h3>Confirm Deletion</h3>
	</div>
	<div class="modal-body">
		<h4>You are deleting this File...</h4>
		<p>File name</p>
		<p>This cannot be undone once you have cofirmed its deletion.</p>
	</div>
	<div class="modal-footer">
		<a href="#" class="btn" data-dismiss="modal">Cancel</a>
		<a href="#" class="btn btn-primary">Confirm</a>
	</div>
</div>

<div id="duplicateModal" class="modal hide fade">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal"><i class="icon-remove"></i></button>
		<h3>Confirm Duplication</h3>
	</div>
	<div class="modal-body">
		<h4>You are duplicating this File...</h4>
		<p>File name</p>
		<p>You will need to rename it, so it can be added to the File library.</p>
		<form class="form-horizontal">
		  	<fieldset>
		    	<div class="control-group">
		      		<label class="control-label" for="input01">New File name</label>
		      		<div class="controls">
		        		<input type="text" class="input-xlarge" id="input01">
		        		<!-- <p class="help-block">You can edit this later</p> -->
		      		</div>
		    	</div>
		  	</fieldset>
		</form>
	</div>
	<div class="modal-footer">
		<a href="#" class="btn" data-dismiss="modal">Cancel</a>
		<a href="#" class="btn btn-primary">Confirm</a>
	</div>
</div>

<?php include '../includes/footer.php'; ?>