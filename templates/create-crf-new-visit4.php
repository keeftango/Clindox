<?php include '../includes/head.php'; ?>

<?php include '../includes/nav.php'; ?>

<div class="breadcrumbs">
	<div class="breadcrumbs-inner">
		<div class="container">
			<ul class="breadcrumb">
            	<li><a href="#">Dashboard</a></li>
            	<li class="breadcrumb-separator"><i class="icon-chevron-right icon-blue"></i></li> 
            	<li><a href="#">Create CRF</a></li>
            	<li class="breadcrumb-separator"><i class="icon-chevron-right icon-blue"></i></li> 
            	<li>Create New CRF</li>
            </ul>
		</div>
	</div>
</div>

<div class="container">

	<div class="page-header">
		<h1>Create New CRF <small>CRF MPT04 - Skin Grafting</small></h1>
	</div>
	
	<div class="row">
		<div class="span12">
			<div class="crf-header clearfix">
				
				<div class="signup-steps step-1 clearfix">
					<ol>
						<li class="step-1">Step 1 - Main Details</li>
						<li class="step-2">Step 2 - Add Components</li>
						<li class="step-3 selected">Step 3 - Design Visits</li>
						<li class="step-4">Step 4 - CRF Created</li>
					</ol>
				</div>
				
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="span3">
		
			<div class="widget">
				<div class="widget-header">
					<i class="icon-cog"></i>
					<h3>Visits Added</h3>
				</div> <!-- /widget-header -->
				<ul class="nav nav-tabs nav-stacked nav-visits">
					<li class="active">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							Baseline Visit<i class="icon-chevron-right pull-right"></i>
						</a>
						<ul class="dropdown-menu section-dropdown">
					     	<li><a href="#">Section name 1</a></li>
					     	<li><a href="#">Section name 2</a></li>
					     	<li><a href="#">Section name 3</a></li>
					     	<li><a href="#">Section name 4</a></li>
					     	<li><a data-toggle="modal" href="#sectionModal"><i class="icon-plus"></i> Add Section</a></li>
					    </ul>
					</li>
					<li>
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							Visit 1<i class="icon-chevron-right pull-right"></i>
						</a>
						<ul class="dropdown-menu section-dropdown">
					     	<li><a href="#">Section name 1</a></li>
					     	<li><a href="#">Section name 2</a></li>
					     	<li><a href="#">Section name 3</a></li>
					     	<li><a href="#">Section name 4</a></li>
					     	<li><a data-toggle="modal" href="#sectionModal"><i class="icon-plus"></i> Add Section</a></li>
					    </ul>
					</li>
					<li><a data-toggle="modal" href="#visitModal"><i class="icon-plus"></i> Add Visit</a></li>
				</ul>
			</div><!-- /widget -->
			
		</div><!-- /.span3 -->
		
		<div class="span9">
			
			<div class="widget">
				<div class="widget-content">
					
					<h3 class="content-title">Add Question from Library to Baseline Visit  <i class="icon-arrow-right"></i>  <span class="section-name">Section Name</span></h3>
					
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
					</div><!-- /pagination-block -->
					
					<ul class="questions-list unstyled">
					
						<li class="question-box">
							<div class="questions-list-title">
								<h3>Question title <span class="question-ID">ID: 1</span></h3>
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
					</div><!-- /pagination-block -->	
					
				</div>
			</div>
			
		</div><!-- /.span9 -->
	</div><!-- /.row -->
		
</div><!-- /.container -->

<!-- Modal -->

<div id="visitModal" class="modal hide fade">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal"><i class="icon-remove"></i></button>
		<h3>Add a Visit</h3>
	</div>
	<div class="modal-body">
		<form>
			<label>New Visit Name</label>
			<input type="text" class="span6" placeholder="Type a name for your Visit...">
			<span class="help-block">Example block-level help text here.</span>
  		</form>
	</div>
	<div class="modal-footer">
		<a href="#" class="btn" data-dismiss="modal">Cancel</a>
		<a href="#" class="btn btn-primary">Add Visit</a>
	</div>
</div>

<div id="sectionModal" class="modal hide fade">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal"><i class="icon-remove"></i></button>
		<h3>Add new Section to xxxxxx Visit</h3>
	</div>
	<div class="modal-body">
		<form>
			<label>New Section Name</label>
			<input type="text" class="span6" placeholder="Type a name for your Visit...">
			<span class="help-block">Example block-level help text here.</span>
  		</form>
	</div>
	<div class="modal-footer">
		<a href="#" class="btn" data-dismiss="modal">Cancel</a>
		<a href="#" class="btn btn-primary">Add Section</a>
	</div>
</div>

<?php include '../includes/footer.php'; ?>