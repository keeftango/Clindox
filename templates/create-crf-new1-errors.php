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
		<h1>Create New CRF <!--<small>CRF MPT04 - Skin Grafting</small>--></h1>
	</div>
	
	<div class="row">
		<div class="span12">
			<div class="crf-header clearfix">
				
				<div class="signup-steps step-1 clearfix">
					<ol>
						<li class="step-1 selected">Step 1 - Main Details</li>
						<li class="step-2">Step 2 - Add Components</li>
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
					<i class="icon-bookmark"></i>
					<h3>Status</h3>
				</div> <!-- /widget-header -->
				<div class="widget-content status-widget">
				
					<div class="status status-draft">
						<h3 class="status-heading"><i class="icon-refresh"></i> Draft</h3>
					</div>
				
				</div><!-- /widget-content -->
			</div><!-- /widget -->
			
		</div><!-- /.span3 -->
		
		<div class="span9">
			
			<div class="widget">
				<div class="widget-content">
					<h3 class="content-title">CRF Details</h3>
					
					<!-- Error Start -->
					<div class="alert alert-error">
						<h4><i class="icon-warning-sign"></i> The following errors have occured</h4>
						<p>These fields will have to be completed in order to continue</p>
						<ul>
							<li>Please complete the Header Content section</li>
							<li>Please complete the Footer Content section</li>
						</ul>
  					</div>
					<!-- Error End -->
					
					 <form class="form-horizontal">
					 	<fieldset>
					    	<div class="control-group">
						    	<label class="control-label" for="select-crf">CRF Type</label>
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
							<div class="control-group error">
						    	<label class="control-label" for="input01">CRF ID</label>
						    	<div class="controls">
						    		<input type="text" class="span2" id="input01">
						    		<a class="helpIcon">Help</a>
						    		<span class="help-inline">Please correct the error</span>
							    </div>
							</div><!-- /.control-group -->
							<div class="control-group">
						    	<label class="control-label" for="input02">CRF Title</label>
						    	<div class="controls">
							    	<input type="text" class="input-xlarge" id="input02">
							    </div>
							</div><!-- /.control-group -->
							<div class="control-group error">
						    	<label class="control-label" for="header-content">Header Content</label>
						    	<div class="controls">
						    		<textarea class="span5" id="header-content" rows="4"></textarea>
						    		<a class="helpIcon">Help</a>
						    		<span class="help-inline">Please correct the error</span>
							    </div>
							</div><!-- /.control-group -->
							<div class="control-group error">
						    	<label class="control-label" for="footer-content">Footer Content</label>
						    	<div class="controls">
						    		<textarea class="span5" id="footer-content" rows="4"></textarea>
						    		<a class="helpIcon">Help</a>
						    		<span class="help-inline">Please correct the error</span>
							    </div>
							</div><!-- /.control-group -->
							<div class="control-group error">
						    	<label class="control-label" for="title-page">Title Page</label>
						    	<div class="controls">
						    		<textarea class="span5" id="title-page" rows="5"></textarea>
						    		<a class="helpIcon">Help</a>
						    		<span class="help-inline">Please correct the error</span>
							    </div>
							</div><!-- /.control-group -->
						</fieldset>
					</form>
					<h3 class="content-title">CRF Theme Styling</h3>
					
					<ul class="nav nav-tabs">
					  	<li class="active"><a href="#theme" data-toggle="tab">Theme Styles</a></li>
					  	<li><a href="#custom" data-toggle="tab">Custom Themes</a></li>
					</ul>
					
					<div class="tab-content tab-overflow">
					  	<div class="tab-pane active" id="theme">
					  		<ul class="thumbnails ">
						   		<li class="file-thumbnail">
						     		<div class="thumbnail">
						       		<img alt="placeholder image" src="http://placehold.it/201x160" >
						       		<div class="caption">
					         			<h5>File title</h5>
						       		</div><!-- /.caption -->
						     		</div><!-- /.thumbnail -->
						   		</li>
						   		<li class="file-thumbnail">
						     		<div class="thumbnail">
						       		<img alt="placeholder image" src="http://placehold.it/201x160" >
						       		<div class="caption">
					         			<h5>File title</h5>
						       		</div><!-- /.caption -->
						     		</div><!-- /.thumbnail -->
						   		</li>
						   		<li class="file-thumbnail">
						     		<div class="thumbnail">
						       		<img alt="placeholder image" src="http://placehold.it/201x160" >
						       		<div class="caption">
					         			<h5>File title</h5>
						       		</div><!-- /.caption -->
						     		</div><!-- /.thumbnail -->
						   		</li>
				   			</ul>
					  	</div><!-- /#theme -->
					  	
					  	<div class="tab-pane" id="custom">
						  	<ul class="thumbnails ">
						   		<li class="file-thumbnail">
						     		<div class="thumbnail">
						       		<img alt="placeholder image" src="http://placehold.it/201x160" >
						       		<div class="caption">
					         			<h5>File title</h5>
						       		</div><!-- /.caption -->
						     		</div><!-- /.thumbnail -->
						   		</li>
						   		<li class="file-thumbnail">
						     		<div class="thumbnail">
						       		<img alt="placeholder image" src="http://placehold.it/201x160" >
						       		<div class="caption">
					         			<h5>File title</h5>
						       		</div><!-- /.caption -->
						     		</div><!-- /.thumbnail -->
						   		</li>
						  	</ul>
					  	</div><!-- /#custom -->
					</div><!-- /.tab-content -->
					
					<form class="form">
					 	<fieldset>
							<label class="control-label">Upload your logo to add to your CRF design</label>
							<button class="btn">Choose file</button> No File chosen
					 	</fieldset>
					</form>
					
					<div class="button-actions clearfix">
						<a class="pull-left" href="#">Save CRF as a draft</a>
						<div class="pull-right">
							<a class="btn" href="#"><i class="icon-search"></i> Preview CRF Cover</a>
							<a class="btn btn-primary" href="#">Next Step <i class="icon-chevron-right"></i></a>
						</div>
					</div>
					
				</div>
			</div>
			
		</div><!-- /.span9 -->
	</div><!-- /.row -->
		
</div><!-- /.container -->

<?php include '../includes/footer.php'; ?>