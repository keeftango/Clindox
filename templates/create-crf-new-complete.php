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
						<li class="step-3">Step 3 - Design Visits</li>
						<li class="step-4 selected">Step 4 - CRF Created</li>
					</ol>
				</div>
				
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="span3">
			
			<div class="widget">
				<div class="widget-header">
					<i class="icon-bookmark"></i>
					<h3>Status</h3>
				</div> <!-- /widget-header -->
				<div class="widget-content status-widget">
				
					<div class="status status-success">
						<h3 class="status-heading"><i class="icon-ok"></i> CRF Created</h3>
					</div>
				
				</div><!-- /widget-content -->
			</div><!-- /widget -->
			
		</div><!-- /.span3 -->
		
		<div class="span9">
			
			<div class="widget">
				<div class="widget-content">
					
					<h3 class="content-title"><i class="icon-ok"></i> CRF 737823 - Skin Grafting <span>Created</span></h3>
					
					<p>You are now able to manage and input data into yor new CRF. It is located within the mange CRF section.</p>
					<div class="button-actions visit-actions clearfix">
						<a class="btn btn-primary" href="#">Return to Dashboard</a>
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