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
            	<li><a href="#">Default Questions</a></li>
            	<li class="breadcrumb-separator"><i class="icon-chevron-right icon-blue"></i></li> 
            	<li>Edit Question - Question Name</li>
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
				<h3>Edit Question</h3>
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
				
					<h3 class="content-title">Question Name</h3>
					
					<form class="visit-question">
						<h4>Question Detail</h4>
						<fieldset>
							<label for="qTitle">Question Title</label>
							<input id="qTitle" type="text" class="span6">
							<label for="qHelp">Help Text</label>
							<input id="qHelp" type="text" class="span6">
						</fieldset>
						
						<h4>Question Type</h4>
						<fieldset class="question-type-fieldset">
							<div class="question-type-select">
								<select class="span3">
									<option>Multiple Choice</option>
									<option>Checkboxes</option>
									<option>Choose from a List</option>
									<option>Scale</option>
									<option>Grid</option>
								</select>
							</div>
							
							<ul class="unstyled">
								<li class="form-inline">
									<label class="radio">
										<input type="radio" id="optionsRadios1" value="option1">
									</label>
									<input id="multiple-choice1" type="text" class="span6">
									<a href="#" class=""><i class="icon-remove"></i></a>
								</li>
								<li class="form-inline">
									<label class="radio">
										<input type="radio" id="optionsRadios2" value="option2">
									</label>
									<input id="multiple-choice2" type="text" class="span6">
									<a href="#" class=""><i class="icon-remove"></i></a>
								</li>
							</ul>
							<div class="form-inline">
								<button class="btn">Add Option</button> or <a href="#">Add "Other"</a>
							</div>
							<div class="form-inline">
								<label class="checkbox">
									<input type="checkbox"> Make this a required question
								</label>
							</div>						
						</fieldset>
						
												<h4>Layout</h4>
						<fieldset>
							<label>Question Layout (If Applicable)</label>
							<label class="radio inline">
								<input type="radio" name="optionsRadios" id="LayoutRadio1" value="option1"> Vertical Layout											</label>
							<label class="radio inline">
								<input type="radio" name="optionsRadios" id="LayoutRadio2" value="option2"> Horizontal Layout
							</label>
						</fieldset>
					
					</form>
			
					<div class="button-actions visit-actions clearfix">
						<a class="btn"><i class="icon-arrow-left"></i> Return to Question List</a>
						<div class="pull-right">
							<a class="btn btn-primary" href="#">Save Question</a>
						</div>
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