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
					
					<h3 class="content-title">Create Question for Baseline Visit <i class="icon-arrow-right"></i>  <span class="section-name">Section Name</span></h3>
					
					<form class="visit-question">
						<h4>Question Detail</h4>
						<fieldset>
							<label for="qTitle">Question Title</label>
							<input id="qTitle" type="text" class="span6">
							<label for="qHelp">Help Text</label>
							<input id="qHelp" type="text" class="span6">
						</fieldset>
						
						<h4>Question Type</h4>
						<p class="alert-error">
								!-- DEVELOPER NOTES --!<br />
								Below are the various options that can appear from the drop down. The user selects a "Question Type" from the drop down and the options appear.
							</p>
						
						<!-- QUESTION OPTION -->
						<p class="alert-error"> MULTIPLE CHOICE</p>
						
						<fieldset class="question-type-fieldset">
							<div class="question-type-select">
								<select class="span3">
									<option>Multiple Choice</option>
									<option>Checkboxes</option>
									<option>Choose from a List</option>
									<option>Scale</option>
									<option>Grid</option>
								</select>
								<label class="checkbox inline-element">
									<input type="checkbox" name="GoToQuestion" value="option1">
									Go to question based on answer
								</label>
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
						
						<!-- QUESTION OPTION -->
						<p class="alert-error"> MULTIPLE CHOICE - With "Go To question" and "Other" selected</p>
						
						<fieldset class="question-type-fieldset">
							<div class="question-type-select">
								<select class="span3">
									<option>Multiple Choice</option>
									<option>Checkboxes</option>
									<option>Choose from a List</option>
									<option>Scale</option>
									<option>Grid</option>
								</select>
								<label class="checkbox inline-element">
									<input type="checkbox" name="GoToQuestion" value="option1" checked="checked">
									Go to question based on answer
								</label>
							</div>
							
							<ul class="unstyled">
								<li class="form-inline">
									<label class="radio">
										<input type="radio" id="optionsRadios3" value="option3">
									</label>
									<input id="multiple-choice3" type="text" class="span6">
									<div class="btn-group inline-element">
										<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
											Continue to...
											<span class="caret"></span>
										</a>
										<ul class="dropdown-menu">
											<li><a href="#">Question 1</a></li>
											<li><a href="#">Question 2</a></li>
											<li><a href="#">Question 3</a></li>
										</ul>
									</div>
									<a href="#" class=""><i class="icon-remove"></i></a>
								</li>
								<li class="form-inline">
									<label class="radio">
										<input type="radio" id="optionsRadios4" value="option4" >
									</label>
									<input id="multiple-choice4" type="text" class="span6">
									<div class="btn-group inline-element">
										<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
											Continue to...
											<span class="caret"></span>
										</a>
										<ul class="dropdown-menu">
											<li><a href="#">Question 1</a></li>
											<li><a href="#">Question 2</a></li>
											<li><a href="#">Question 3</a></li>
										</ul>
									</div>
									<a href="#" class=""><i class="icon-remove"></i></a>
								</li>
								<li class="form-inline">
									<label class="radio">
										<input type="radio" id="optionsRadiosOther" value="option1">
										Other
									</label>
									<span class="input-large uneditable-input inline-element">Their answer</span>
									<div class="btn-group inline-element">
										<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
											Continue to...
											<span class="caret"></span>
										</a>
										<ul class="dropdown-menu">
											<li><a href="#">Question 1</a></li>
											<li><a href="#">Question 2</a></li>
											<li><a href="#">Question 3</a></li>
										</ul>
									</div>
									<a href="#" class=""><i class="icon-remove"></i></a>
								</li>
							</ul>
							<div class="form-inline">
								<button class="btn">Add Option</button>
							</div>
							<div class="form-inline">
								<label class="checkbox">
									<input type="checkbox"> Make this a required question
								</label>
							</div>						
						</fieldset>
						
						<!-- QUESTION OPTION -->
						<p class="alert-error"> CHECKBOXES</p>
						
						<fieldset class="question-type-fieldset">
							<div class="question-type-select">
								<select class="span3">
									<option>Checkboxes</option>
									<option>Multiple Choice</option>
									<option>Choose from a List</option>
									<option>Scale</option>
									<option>Grid</option>
								</select>
								<label class="checkbox inline-element">
									<input type="checkbox" name="GoToQuestion" value="option1">
									Go to question based on answer
								</label>
							</div>
							
							<ul class="unstyled">
								<li class="form-inline">
									<label class="checkbox">
										<input type="checkbox" id="optionsRadios5" value="option5">
									</label>
									<input id="checkbox1" type="text" class="span6">
									<a href="#" class=""><i class="icon-remove"></i></a>
								</li>
								<li class="form-inline">
									<label class="checkbox">
										<input type="checkbox" id="optionsRadios6" value="option6">
									</label>
									<input id="checkbox2" type="text" class="span6">
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
						
						<!-- QUESTION OPTION -->
						<p class="alert-error">CHOOSE FROM LIST</p>
						
						<fieldset class="question-type-fieldset">
							<div class="question-type-select">
								<select class="span3">
									<option>Choose from a List</option>
									<option>Checkboxes</option>
									<option>Multiple Choice</option>
									<option>Scale</option>
									<option>Grid</option>
								</select>
								<label class="checkbox inline-element">
									<input type="checkbox" name="GoToQuestion" value="option1">
									Go to question based on answer
								</label>
							</div>
							
							<ol>
								<li class="form-inline">
									<input id="list1" type="text" class="span6">
									<a href="#" class=""><i class="icon-remove"></i></a>
								</li>
								<li class="form-inline">
									<input id="list2" type="text" class="span6">
									<a href="#" class=""><i class="icon-remove"></i></a>
								</li>
							</ol>
							<div class="form-inline">
								<button class="btn">Add Option</button>
							</div>
							<div class="form-inline">
								<label class="checkbox">
									<input type="checkbox"> Make this a required question
								</label>
							</div>						
						</fieldset>
						
						<!-- QUESTION OPTION -->
						<p class="alert-error">SCALE</p>
						
						<fieldset class="question-type-fieldset">
							<div class="question-type-select">
								<select class="span3">
									<option>Scale</option>
									<option>Choose from a List</option>
									<option>Checkboxes</option>
									<option>Multiple Choice</option>
									<option>Grid</option>
								</select>
							</div>
							
							<div class="form-inline question-scale">
								<label>Scale</label>
								<select class="span1">
									<option>1</option>
								</select>
								to
								<select class="span1">
									<option>5</option>
									<option>6</option>
									<option>7</option>
									<option>8</option>
									<option>9</option>
									<option>10</option>
									<option>15</option>
									<option>20</option>
								</select>
							</div>
							
							<label>Labels (Optional)</label>
							<ul class="unstyled">
								<li class="form-inline">
									1.
									<input id="scale1" type="text" class="span6">
								</li>
								<li class="form-inline">
									5.
									<input id="scale2" type="text" class="span6">
								</li>
							</ul>
							<div class="form-inline">
								<button class="btn">Add Option</button>
							</div>
							<div class="form-inline">
								<label class="checkbox">
									<input type="checkbox"> Make this a required question
								</label>
							</div>						
						</fieldset>
						
						<!-- QUESTION OPTION -->
						<p class="alert-error">GRID</p>
						
						<fieldset class="question-type-fieldset">
							<div class="question-type-select">
								<select class="span3">
									<option>Grid</option>
									<option>Scale</option>
									<option>Choose from a List</option>
									<option>Checkboxes</option>
									<option>Multiple Choice</option>
								</select>
							</div>
							
							<div class="form-inline question-scale">
								<label>Columns</label>
								<select class="span1">
									<option>5</option>
									<option>6</option>
									<option>7</option>
									<option>8</option>
									<option>9</option>
									<option>10</option>
									<option>15</option>
									<option>20</option>
								</select>
							</div>
							<ul class="unstyled">
								<li class="form-inline">
									<label>Column 1 Label</label>
									<input id="column1" type="text" class="span6">
								</li>
								<li class="form-inline">
									<label>Column 2 Label</label>
									<input id="column2" type="text" class="span6">
								</li>
								<li class="form-inline">
									<label>Column 3 Label</label>
									<input id="column3" type="text" class="span6">
								</li>
								<li class="form-inline">
									<label>Column 4 Label</label>
									<input id="column4" type="text" class="span6">
								</li>
								<li class="form-inline">
									<label>Column 5 Label</label>
									<input id="column5" type="text" class="span6">
								</li>
							</ul>
							<hr />
							<ul class="unstyled">
								<li class="form-inline">
									<label>Row 1 Label</label>
									<input id="row1" type="text" class="span6">
								</li>
							</ul>
							<div class="form-inline">
								<button class="btn">Add Row</button>
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
						
						<fieldset>
							<div class="form-inline">
								<label class="checkbox">
									<input type="checkbox"> Add Question to Library
								</label>
							</div>	
						</fieldset>
					
					</form>
			
					<div class="button-actions visit-actions clearfix">
						<a class="btn"><i class="icon-arrow-left"></i> Return to Visit</a>
						<div class="pull-right">
							<a class="btn" href="#">Save &amp; Add Next Question</a>
							<a class="btn btn-primary" href="#">Save Question</a>
						</div>
					</div>
					
				</div>
			</div>
			
		</div><!-- /.span9 -->
	</div><!-- /.row -->
		
</div><!-- /.container -->

<?php include '../includes/footer.php'; ?>