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
            	<li>Components</li>
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
					<form class="form-search">
				      	<input type="text" class="input-medium search-query" placeholder="Search components…">
				      	<button type="submit" class="btn">Search</button>
					</form>
				</div>
				<h3>Components</h3>
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
				
					<h3 class="content-title">View and edit default and custom components</h3>
					
					<button class="btn" data-toggle="collapse" data-target="#filter-block">Filter Components</button>
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
						<span class="page-amount">Showing 1-10 of 34 Components</span>
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
					
					<ul class="questions-list unstyled">
					
						<li class="question-box">
							<div class="questions-list-title">
								<h3>Component title <span class="question-ID">Default Component</span></h3>
								<div class="btn-group">
									<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								    	<i class="icon-cog icon-white"></i> Actions
								    	<span class="caret"></span>
								  	</a>
								  	<ul class="dropdown-menu">
										<li><a href="#"><i class="icon-pencil"></i> Edit</a></li>
										<li><a href="#"><i class="icon-trash"></i> Delete</a></li>
										<li><a href="#"><i class="icon-plus"></i> Copy</a></li>
									</ul>
								</div>
							</div>
						</li><!-- /.question-box -->
						
						<li class="question-box">
							<div class="questions-list-title">
								<h3>Component title <span class="question-ID">Custom Component</span></h3>
								<p>Created in CRF: 737823 | CRF Name: Skin Grafting</p>
								<div class="btn-group">
									<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								    	<i class="icon-cog icon-white"></i> Actions
								    	<span class="caret"></span>
								  	</a>
								  	<ul class="dropdown-menu">
										<li><a href="#"><i class="icon-pencil"></i> Edit</a></li>
										<li><a href="#"><i class="icon-trash"></i> Delete</a></li>
										<li><a href="#"><i class="icon-plus"></i> Copy</a></li>
									</ul>
								</div>
							</div>
						</li><!-- /.question-box -->
						
						<li class="question-box">
							<div class="questions-list-title">
								<h3>Component title <span class="question-ID">Default Component</span></h3>
								<div class="btn-group">
									<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								    	<i class="icon-cog icon-white"></i> Actions
								    	<span class="caret"></span>
								  	</a>
								  	<ul class="dropdown-menu">
										<li><a href="#"><i class="icon-pencil"></i> Edit</a></li>
										<li><a href="#"><i class="icon-trash"></i> Delete</a></li>
										<li><a href="#"><i class="icon-plus"></i> Copy</a></li>
									</ul>
								</div>
							</div>
						</li><!-- /.question-box -->
						
						<li class="question-box">
							<div class="questions-list-title">
								<h3>Component title <span class="question-ID">Default Component</span></h3>
								<div class="btn-group">
									<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								    	<i class="icon-cog icon-white"></i> Actions
								    	<span class="caret"></span>
								  	</a>
								  	<ul class="dropdown-menu">
										<li><a href="#"><i class="icon-pencil"></i> Edit</a></li>
										<li><a href="#"><i class="icon-trash"></i> Delete</a></li>
										<li><a href="#"><i class="icon-plus"></i> Copy</a></li>
									</ul>
								</div>
							</div>
						</li><!-- /.question-box -->
						
						<li class="question-box">
							<div class="questions-list-title">
								<h3>Component title <span class="question-ID">Default Component</span></h3>
								<div class="btn-group">
									<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								    	<i class="icon-cog icon-white"></i> Actions
								    	<span class="caret"></span>
								  	</a>
								  	<ul class="dropdown-menu">
										<li><a href="#"><i class="icon-pencil"></i> Edit</a></li>
										<li><a href="#"><i class="icon-trash"></i> Delete</a></li>
										<li><a href="#"><i class="icon-plus"></i> Copy</a></li>
									</ul>
								</div>
							</div>
						</li><!-- /.question-box -->
						
						<li class="question-box">
							<div class="questions-list-title">
								<h3>Component title <span class="question-ID">Custom Component</span></h3>
								<p>Created in CRF: 737823 | CRF Name: Skin Grafting</p>
								<div class="btn-group">
									<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								    	<i class="icon-cog icon-white"></i> Actions
								    	<span class="caret"></span>
								  	</a>
								  	<ul class="dropdown-menu">
										<li><a href="#"><i class="icon-pencil"></i> Edit</a></li>
										<li><a href="#"><i class="icon-trash"></i> Delete</a></li>
										<li><a href="#"><i class="icon-plus"></i> Copy</a></li>
									</ul>
								</div>
							</div>
						</li><!-- /.question-box -->
						
						<li class="question-box">
							<div class="questions-list-title">
								<h3>Component title <span class="question-ID">Custom Component</span></h3>
								<p>Created in CRF: 737823 | CRF Name: Skin Grafting</p>
								<div class="btn-group">
									<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								    	<i class="icon-cog icon-white"></i> Actions
								    	<span class="caret"></span>
								  	</a>
								  	<ul class="dropdown-menu">
										<li><a href="#"><i class="icon-pencil"></i> Edit</a></li>
										<li><a href="#"><i class="icon-trash"></i> Delete</a></li>
										<li><a href="#"><i class="icon-plus"></i> Copy</a></li>
									</ul>
								</div>
							</div>
						</li><!-- /.question-box -->
						
						<li class="question-box">
							<div class="questions-list-title">
								<h3>Component title <span class="question-ID">Custom Component</span></h3>
								<p>Created in CRF: 737823 | CRF Name: Skin Grafting</p>
								<div class="btn-group">
									<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								    	<i class="icon-cog icon-white"></i> Actions
								    	<span class="caret"></span>
								  	</a>
								  	<ul class="dropdown-menu">
										<li><a href="#"><i class="icon-pencil"></i> Edit</a></li>
										<li><a href="#"><i class="icon-trash"></i> Delete</a></li>
										<li><a href="#"><i class="icon-plus"></i> Copy</a></li>
									</ul>
								</div>
							</div>
						</li><!-- /.question-box -->
						
						<li class="question-box">
							<div class="questions-list-title">
								<h3>Component title <span class="question-ID">Default Component</span></h3>
								<div class="btn-group">
									<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								    	<i class="icon-cog icon-white"></i> Actions
								    	<span class="caret"></span>
								  	</a>
								  	<ul class="dropdown-menu">
										<li><a href="#"><i class="icon-pencil"></i> Edit</a></li>
										<li><a href="#"><i class="icon-trash"></i> Delete</a></li>
										<li><a href="#"><i class="icon-plus"></i> Copy</a></li>
									</ul>
								</div>
							</div>
						</li><!-- /.question-box -->						
					</ul>		
					
					<div class="pagination-block clearfix">
						<span class="page-amount">Showing 1-10 of 34 Components</span>
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

<?php include '../includes/footer.php'; ?>