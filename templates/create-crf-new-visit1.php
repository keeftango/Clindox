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
					
					<h3 class="content-title">Baseline Visit  <i class="icon-arrow-right"></i>  <span class="section-name">Section Name</span></h3>
					
					<div class="button-actions visit-actions clearfix">
						
						<div class="btn-group">
							<a class="btn  btn-primary dropdown-toggle" data-toggle="dropdown" href="#">
						    	<i class="icon-plus"></i> Add Question or Item
						    	<span class="caret"></span>
						  	</a>
						  	<ul class="dropdown-menu">
								<li><a href="#">Create new Question</a></li>
								<li><a href="#">Select a Question from the Library</a></li>
								<li class="divider"></li>
								<li><a href="#">Add text</a></li>
								<li><a href="#">Add a seperating line</a></li>
							</ul>
						</div>
						
						<!--
						<div class="pull-right">
							<a class="btn btn-primary" href="#"><i class="icon-plus"></i> Add Question</a>
						</div>
						-->
					</div>
					
				</div>
			</div>
			
			<div class="widget">
				<div class="widget-content">
					<div class="button-actions visit-actions clearfix">
						<a class="pull-left" href="#">Save CRF as a draft</a>
						<div class="pull-right">
							Finished adding visits &amp; questions?
							<a class="btn btn-primary" href="#">Next Step <i class="icon-chevron-right"></i></a>
						</div>
					</div>
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