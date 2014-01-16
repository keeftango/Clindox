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
						<li class="step-2 selected">Step 2 - Add Components</li>
						<li class="step-3">Step 3 - Design Visits</li>
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
					<h3>Components Added</h3>
				</div> <!-- /widget-header -->
				<ul class="nav nav-tabs nav-stacked">
					<li class="active">
						<a href="#">Component Name<i class="icon-remove pull-right"></i></a>
					</li>
				</ul>
			</div><!-- /widget -->
			
		</div><!-- /.span3 -->
		
		<div class="span9">
			
			<div class="widget">
				<div class="widget-content">
					
					<h3 class="content-title">Component Details</h3>
										
					<ul class="questions-list unstyled">
					
						<li class="question-box">
							<div class="questions-list-title">
								<h3>Component title <span class="question-ID">Default Component</span></h3>
								<div class="btn-group">
								  	<a class="btn" href="#"><i class="icon-plus icon-white"></i> Add</a>
								</div>
							</div>
						</li><!-- /.question-box -->
					</ul>	
					
					<p>Component description. Lorum ipsum dolor sit amet doctore amir ganyrts.</p>
					
					<form class="form-horizontal">
						<fieldset>
							<div class="control-group">
						    	<label class="control-label" for="select-crf">Lorum ipsum</label>
						    	<div class="controls">
							    	<select class="span3" id="select-crf">
						                <option>1</option>
						                <option>2</option>
						                <option>3</option>
						                <option>4</option>
						                <option>5</option>
						            </select>
						            <a class="helpIcon">Help</a>
							    </div>
							</div><!-- /.control-group -->
							<div class="control-group">
						    	<label class="control-label" for="input01">Lorum ipsum</label>
						    	<div class="controls">
						    		<input type="text" class="span2" id="input01">
						    		<a class="helpIcon">Help</a>
							    </div>
							</div><!-- /.control-group -->
							<div class="control-group">
						    	<label class="control-label" for="input02">Lorum ipsum</label>
						    	<div class="controls">
							    	<input type="text" class="input-xlarge" id="input02">
							    </div>
							</div><!-- /.control-group -->
						</fieldset>
					</form>
					
					<div class="button-actions clearfix">
						<a class="btn" href="#"><i class="icon-arrow-left"></i> Return to Component List</a>
						<div class="pull-right">
							<a class="btn" href="#"><i class="icon-pencil"></i> Edit Component</a>
							<a class="btn btn-primary" href="#"> Add Component</a>
						</div>
					</div>
					
				</div>
			</div>
			
		</div><!-- /.span9 -->
	</div><!-- /.row -->
		
</div><!-- /.container -->

<?php include '../includes/footer.php'; ?>