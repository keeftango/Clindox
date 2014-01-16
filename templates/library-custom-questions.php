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
            	<li>Custom Questions</li>
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
				      	<input type="text" class="input-medium search-query" placeholder="Search questions…">
				      	<button type="submit" class="btn">Search</button>
					</form>
				</div>
				<h3>Custom Questions</h3>
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
				
					<h3 class="content-title">View and add custom Questions, added when creating CRF's</h3>
					
					<button class="btn" data-toggle="collapse" data-target="#filter-block">Filter Questions</button>
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
						<span class="page-amount">Showing 1-10 of 112 Question's</span>
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
								<h3>Question title <span class="question-ID">ID: 1</span></h3>
								<p>Created in CRF: 737823 | CRF Name: Skin Grafting</p>
								<div class="btn-group">
									<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								    	<i class="icon-cog icon-white"></i> Actions
								    	<span class="caret"></span>
								  	</a>
								  	<ul class="dropdown-menu">
										<li><a href="#"><i class="icon-pencil"></i> Edit</a></li>
										<li><a data-toggle="modal" href="#deleteModal" ><i class="icon-trash"></i> Delete</a></li>
										<li><a data-toggle="modal" href="#duplicateModal" ><i class="icon-plus"></i> Copy</a></li>
									</ul>
								</div>
								<a href="#" data-toggle="collapse" data-target="#answer1">View Answer options</a>
							</div>
							<div id="answer1" class="collapse">
								<div class="questions-list-answer">
									<p>Help Text. Lorum ipsum dolor sit amet.</p>
									<ul class="unstyled">
										<li>
											<input type="radio" name="radios2" value="" > 
											<label class="inline-element" >Option 1</label>
										</li>
										<li>
											<input type="radio" name="radios2" value="" > 
											<label class="inline-element" >Option 2</label>
										</li>
										<li>
											<label class="radio inline">
												<input type="radio" id="optionsRadiosOther" value="option1">
												Other
											</label>
											<input class="input-large inline-element">
										</li>
									</ul>
								</div>
							</div>
						</li><!-- /.question-box -->
						
						<li class="question-box">
							<div class="questions-list-title">
								<h3>Question title <span class="question-ID">ID: 1</span></h3>
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
								<a href="#">View Answer options</a>
							</div>
						</li><!-- /.question-box -->
						
						<li class="question-box">
							<div class="questions-list-title">
								<h3>Question title <span class="question-ID">ID: 1</span></h3>
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
								<a href="#">View Answer options</a>
							</div>
						</li><!-- /.question-box -->
						
						<li class="question-box">
							<div class="questions-list-title">
								<h3>Question title <span class="question-ID">ID: 1</span></h3>
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
								<a href="#">View Answer options</a>
							</div>
						</li><!-- /.question-box -->
						
						<li class="question-box">
							<div class="questions-list-title">
								<h3>Question title <span class="question-ID">ID: 1</span></h3>
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
								<a href="#">View Answer options</a>
							</div>
						</li><!-- /.question-box -->
						
						<li class="question-box">
							<div class="questions-list-title">
								<h3>Question title <span class="question-ID">ID: 1</span></h3>
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
								<a href="#">View Answer options</a>
							</div>
						</li><!-- /.question-box -->
						
						<li class="question-box">
							<div class="questions-list-title">
								<h3>Question title <span class="question-ID">ID: 1</span></h3>
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
								<a href="#">View Answer options</a>
							</div>
						</li><!-- /.question-box -->
						
						<li class="question-box">
							<div class="questions-list-title">
								<h3>Question title <span class="question-ID">ID: 1</span></h3>
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
								<a href="#">View Answer options</a>
							</div>
						</li><!-- /.question-box -->
						
						<li class="question-box">
							<div class="questions-list-title">
								<h3>Question title <span class="question-ID">ID: 1</span></h3>
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
								<a href="#">View Answer options</a>
							</div>
						</li><!-- /.question-box -->						
					</ul>		
					
					<div class="pagination-block clearfix">
						<span class="page-amount">Showing 1-10 of 112 Question's</span>
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

<div id="deleteModal" class="modal hide fade">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal"><i class="icon-remove"></i></button>
		<h3>Confirm Deletion</h3>
	</div>
	<div class="modal-body">
		<h4>You are deleting this question...</h4>
		<p>Question name</p>
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
		<h4>You are duplicating this question...</h4>
		<p>Question name</p>
		<p>You will need to rename it, so it can be added to the Custom Question library.</p>
		<form class="form-horizontal">
		  	<fieldset>
		    	<div class="control-group">
		      		<label class="control-label" for="input01">New Question name</label>
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