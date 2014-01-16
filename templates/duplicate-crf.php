<?php include '../includes/head.php'; ?>

<?php include '../includes/nav.php'; ?>

<div class="breadcrumbs">
	<div class="breadcrumbs-inner">
		<div class="container">
			<ul class="breadcrumb">
            	<li><a href="#">Dashboard</a></li>
            	<li class="breadcrumb-separator"><i class="icon-chevron-right icon-blue"></i></li> 
            	<li><a href="#">Copy CRF</a></li>
            	<li class="breadcrumb-separator"><i class="icon-chevron-right icon-blue"></i></li> 
            	<li>CRF MPT04 - Skin Grafting</li>
            </ul>
		</div>
	</div>
</div>

<div class="container">

	<div class="page-header">
		<h1>CRF MPT04 - Skin Grafting <small>Copy CRF</small></h1>
	</div>
	
	<div class="row">
		<div class="span12">
			<div class="crf-header clearfix">
				
				<div class="pull-right">
					<a class="btn btn-primary" href="#"><i class="icon-edit"></i> Copy CRF</a>
				</div>
				<h3>CRF Overview</h3>
				
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
						<h3 class="status-heading"><i class="icon-refresh"></i> CRF Active</h3>
					</div>
					<div class="status">
					  	<h3 class="status-heading"><i class="icon-user"></i> 3 Investigators</h3>
					</div>
					<div class="status">
					  	<h3 class="status-heading"><i class="icon-user"></i> 11 Patients</h3>
					</div>
				
				</div><!-- /widget-content -->
			</div><!-- /widget -->
		
			<ul class="nav nav-tabs nav-stacked">
				<li class="active">
					<a href="#">CRF Overview<i class="icon-chevron-right pull-right"></i></a>
				</li>
				<li>
					<a href="#">Input data <i class="icon-chevron-right pull-right"></i></a>
				</li>
			</ul>
			
		</div><!-- /.span3 -->
		
		<div class="span9">
		
			<div class="widget">
				<div class="widget-content">
				
					<p>Last modified: 6:00 pm December 14, 2011</p>
					<ul class="nav nav-tabs">
					  	<li class="active"><a href="#main" data-toggle="tab">Main details</a></li>
					  	<li><a href="#components" data-toggle="tab">Components</a></li>
					  	<li><a href="#visits" data-toggle="tab">Visits</a></li>
					  	<li><a href="#investigators" data-toggle="tab">Investigators</a></li>
					  	<li><a href="#patients" data-toggle="tab">Patients</a></li>
					  	<li><a href="#notes" data-toggle="tab">Attached notes &amp; Files</a></li>
					</ul>
					
					<div class="tab-content tab-overflow">
					  	<div class="tab-pane active" id="main">
						  	
						  	<form class="form-horizontal">
						  		<fieldset>
							  		<div class="control-group">
								  		<label class="control-label" for="input01">CRF Type</label>
								  		<div class="controls">
									  		<input class="input-xlarge" id="input01" />
								  		</div>
							  		</div><!-- /control-group -->
							  		<div class="control-group">
								  		<label class="control-label" for="input02">CRF ID</label>
								  		<div class="controls">
									  		<input class="input-xlarge" id="input02" />
								  		</div>
							  		</div><!-- /control-group -->
							  		<div class="control-group">
								  		<label class="control-label" for="input03">CRF Title</label>
								  		<div class="controls">
									  		<input class="input-xlarge" id="input03" />
								  		</div>
							  		</div><!-- /control-group -->
							  		<div class="control-group">
								  		<label class="control-label" for="textarea01">Header Content</label>
								  		<div class="controls">
									  		<textarea class="input-xlarge" id="textarea01" rows="3"></textarea>
								  		</div>
							  		</div><!-- /control-group -->
							  		<div class="control-group">
								  		<label class="control-label" for="textarea02">Footer Content</label>
								  		<div class="controls">
									  		<textarea class="input-xlarge" id="textarea02" rows="3"></textarea>
								  		</div>
							  		</div><!-- /control-group -->
							  		<div class="control-group">
								  		<label class="control-label">Title Page</label>
								  		<div class="controls">
									  		<button class="btn" type="button">Preview front cover</button>
									  		<button class="btn" type="button"><i class="icon-pencil"></i> Edit</button>
								  		</div>
							  		</div><!-- /control-group -->
							  		<div class="control-group">
								  		<label class="control-label">Theme styling</label>
								  		<div class="controls">
									  		<button class="btn" type="button">Theme name</button>
									  		<button class="btn" type="button"><i class="icon-pencil"></i> Edit</button>
								  		</div>
							  		</div><!-- /control-group -->
							  		<div class="control-group">
								  		<label class="control-label">Custom logo</label>
								  		<div class="controls">
									  		<button class="btn">Choose file</button> No File chosen
								  		</div>
							  		</div><!-- /control-group -->
							  		<div class="form-actions">
								  		<button type="submit" class="btn btn-primary">Save changes</button>
								  		<button class="btn">Cancel</button>
								  	</div><!-- /form-actions -->
						  		</fieldset>
						  	</form>
						  	
					  	</div><!-- /#main -->
					  	
					  	<div class="tab-pane" id="components">
					  	
					  		<h3 class="content-title">Components selected for this CRF</h3>
						  	
						  	<div class="list-block clearfix">
						  		<span class="list-block-title">Medicine log</span>
						  		<span class="list-block-sub">Custom</span>
						  		<div class="block-btn-toolbar pull-right">
							  		<div class="btn-group">
							  			<a class="btn" href="#"><i class="icon-pencil"></i> Edit</a>
							  		</div>
							  		<div class="btn-group">
										<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
									    	<i class="icon-cog icon-white"></i> Actions
									    	<span class="caret"></span>
									  	</a>
									  	<ul class="dropdown-menu">
											<li><a href="#"><i class="icon-arrow-up"></i> Move up</a></li>
											<li><a href="#"><i class="icon-arrow-down"></i> Move down</a></li>
											<li><a href="#"><i class="icon-trash"></i> Delete</a></li>
											<li><a href="#"><i class="icon-plus"></i> Copy</a></li>
										</ul>
									</div>
							  	</div><!-- /pull-right -->
						  	</div><!-- /.list-block -->
						  	
						  	<div class="list-block clearfix">
						  		<span class="list-block-title">Termination section</span>
						  		<div class="block-btn-toolbar pull-right">
							  		<div class="btn-group">
							  			<a class="btn" href="#"><i class="icon-pencil"></i> Edit</a>
							  		</div>
							  		<div class="btn-group">
										<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
									    	<i class="icon-cog icon-white"></i> Actions
									    	<span class="caret"></span>
									  	</a>
									  	<ul class="dropdown-menu">
											<li><a href="#"><i class="icon-arrow-up"></i> Move up</a></li>
											<li><a href="#"><i class="icon-arrow-down"></i> Move down</a></li>
											<li><a href="#"><i class="icon-trash"></i> Delete</a></li>
											<li><a href="#"><i class="icon-plus"></i> Copy</a></li>
										</ul>
									</div>
							  	</div><!-- /pull-right -->
						  	</div><!-- /.list-block -->
						  	
						  	<div class="list-block clearfix">
						  		<span class="list-block-title">Signature</span>
						  		<span class="list-block-sub">Custom</span>
						  		<div class="block-btn-toolbar pull-right">
							  		<div class="btn-group">
							  			<a class="btn" href="#"><i class="icon-pencil"></i> Edit</a>
							  		</div>
							  		<div class="btn-group">
										<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
									    	<i class="icon-cog icon-white"></i> Actions
									    	<span class="caret"></span>
									  	</a>
									  	<ul class="dropdown-menu">
											<li><a href="#"><i class="icon-arrow-up"></i> Move up</a></li>
											<li><a href="#"><i class="icon-arrow-down"></i> Move down</a></li>
											<li><a href="#"><i class="icon-trash"></i> Delete</a></li>
											<li><a href="#"><i class="icon-plus"></i> Copy</a></li>
										</ul>
									</div>
							  	</div><!-- /pull-right -->
						  	</div><!-- /.list-block -->
						  	
						  	<a class="btn btn-primary" href="#"><i class="icon-plus icon-white"></i> Add Component</a>
						  	
					  	</div><!-- /#components -->
					  	
					  	<div class="tab-pane" id="visits">
						  	
						  	<h3 class="content-title">Visits created for this CRF</h3>
						  	
						  	<div class="list-block clearfix">
						  		<span class="list-block-title">Baseline visit</span>
						  		<span class="list-block-sub"> 11 Questions</span>
						  		<div class="block-btn-toolbar pull-right">
							  		<div class="btn-group">
							  			<a class="btn" href="#"><i class="icon-pencil"></i> Edit</a>
							  		</div>
							  		<div class="btn-group">
										<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
									    	<i class="icon-cog icon-white"></i> Actions
									    	<span class="caret"></span>
									  	</a>
									  	<ul class="dropdown-menu">
											<li><a href="#"><i class="icon-arrow-up"></i> Move up</a></li>
											<li><a href="#"><i class="icon-arrow-down"></i> Move down</a></li>
											<li><a href="#"><i class="icon-trash"></i> Delete</a></li>
											<li><a href="#"><i class="icon-plus"></i> Copy</a></li>
										</ul>
									</div>
							  	</div><!-- /pull-right -->
						  	</div><!-- /.list-block -->
						  	
						  	<div class="list-block clearfix">
						  		<span class="list-block-title">Visit 1</span>
						  		<span class="list-block-sub"> 3 Questions</span>
						  		<div class="block-btn-toolbar pull-right">
							  		<div class="btn-group">
							  			<a class="btn" href="#"><i class="icon-pencil"></i> Edit</a>
							  		</div>
							  		<div class="btn-group">
										<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
									    	<i class="icon-cog icon-white"></i> Actions
									    	<span class="caret"></span>
									  	</a>
									  	<ul class="dropdown-menu">
											<li><a href="#"><i class="icon-arrow-up"></i> Move up</a></li>
											<li><a href="#"><i class="icon-arrow-down"></i> Move down</a></li>
											<li><a href="#"><i class="icon-trash"></i> Delete</a></li>
											<li><a href="#"><i class="icon-plus"></i> Copy</a></li>
										</ul>
									</div>
							  	</div><!-- /pull-right -->
						  	</div><!-- /.list-block -->
						  	
						  	<div class="list-block clearfix">
						  		<span class="list-block-title">Visit 2</span>
						  		<span class="list-block-sub"> 9 Questions</span>
						  		<div class="block-btn-toolbar pull-right">
							  		<div class="btn-group">
							  			<a class="btn" href="#"><i class="icon-pencil"></i> Edit</a>
							  		</div>
							  		<div class="btn-group">
										<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
									    	<i class="icon-cog icon-white"></i> Actions
									    	<span class="caret"></span>
									  	</a>
									  	<ul class="dropdown-menu">
											<li><a href="#"><i class="icon-arrow-up"></i> Move up</a></li>
											<li><a href="#"><i class="icon-arrow-down"></i> Move down</a></li>
											<li><a href="#"><i class="icon-trash"></i> Delete</a></li>
											<li><a href="#"><i class="icon-plus"></i> Copy</a></li>
										</ul>
									</div>
							  	</div><!-- /pull-right -->
						  	</div><!-- /.list-block -->
						  	
						  	<div class="list-block clearfix">
						  		<span class="list-block-title">Visit 3</span>
						  		<span class="list-block-sub"> 8 Questions</span>
						  		<div class="block-btn-toolbar pull-right">
							  		<div class="btn-group">
							  			<a class="btn" href="#"><i class="icon-pencil"></i> Edit</a>
							  		</div>
							  		<div class="btn-group">
										<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
									    	<i class="icon-cog icon-white"></i> Actions
									    	<span class="caret"></span>
									  	</a>
									  	<ul class="dropdown-menu">
											<li><a href="#"><i class="icon-arrow-up"></i> Move up</a></li>
											<li><a href="#"><i class="icon-arrow-down"></i> Move down</a></li>
											<li><a href="#"><i class="icon-trash"></i> Delete</a></li>
											<li><a href="#"><i class="icon-plus"></i> Copy</a></li>
										</ul>
									</div>
							  	</div><!-- /pull-right -->
						  	</div><!-- /.list-block -->
						  	
						  	<div class="list-block clearfix">
						  		<span class="list-block-title">Visit 4</span>
						  		<span class="list-block-sub"> 4 Questions</span>
						  		<div class="block-btn-toolbar pull-right">
							  		<div class="btn-group">
							  			<a class="btn" href="#"><i class="icon-pencil"></i> Edit</a>
							  		</div>
							  		<div class="btn-group">
										<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
									    	<i class="icon-cog icon-white"></i> Actions
									    	<span class="caret"></span>
									  	</a>
									  	<ul class="dropdown-menu">
											<li><a href="#"><i class="icon-arrow-up"></i> Move up</a></li>
											<li><a href="#"><i class="icon-arrow-down"></i> Move down</a></li>
											<li><a href="#"><i class="icon-trash"></i> Delete</a></li>
											<li><a href="#"><i class="icon-plus"></i> Copy</a></li>
										</ul>
									</div>
							  	</div><!-- /pull-right -->
						  	</div><!-- /.list-block -->
						  	
						  	<a class="btn btn-primary" href="#"><i class="icon-plus icon-white"></i> Add Visit</a>
						  	
					  	</div><!-- /#visits -->
					  	
						<div class="tab-pane" id="investigators">
							
							<h3 class="content-title">Investigators assigned to your CRF</h3>
						  	
						  	<div class="list-block clearfix">
						  		<span class="list-block-title">Joe Bloggs</span>
						  		<span class="list-block-sub"> ID: 144768</span>
						  		<div class="block-btn-toolbar pull-right">
							  		<div class="btn-group">
										<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
									    	<i class="icon-cog icon-white"></i> Actions
									    	<span class="caret"></span>
									  	</a>
									  	<ul class="dropdown-menu">
											<li><a href="#"><i class="icon-eye-open"></i> View details</a></li>
											<li><a href="#"><i class="icon-arrow-up"></i> Move up</a></li>
											<li><a href="#"><i class="icon-arrow-down"></i> Move down</a></li>
											<li><a href="#"><i class="icon-trash"></i> Delete</a></li>
											<li><a href="#"><i class="icon-plus"></i> Copy</a></li>
										</ul>
									</div>
							  	</div><!-- /pull-right -->
						  	</div><!-- /.list-block -->
						  	
						  	<div class="list-block clearfix">
						  		<span class="list-block-title">Jane Stevens</span>
						  		<span class="list-block-sub"> ID: 142567</span>
						  		<div class="block-btn-toolbar pull-right">
							  		<div class="btn-group">
										<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
									    	<i class="icon-cog icon-white"></i> Actions
									    	<span class="caret"></span>
									  	</a>
									  	<ul class="dropdown-menu">
											<li><a href="#"><i class="icon-eye-open"></i> View details</a></li>
											<li><a href="#"><i class="icon-arrow-up"></i> Move up</a></li>
											<li><a href="#"><i class="icon-arrow-down"></i> Move down</a></li>
											<li><a href="#"><i class="icon-trash"></i> Delete</a></li>
											<li><a href="#"><i class="icon-plus"></i> Copy</a></li>
										</ul>
									</div>
							  	</div><!-- /pull-right -->
						  	</div><!-- /.list-block -->
						  	
						  	<div class="list-block clearfix">
						  		<span class="list-block-title">Rebecca Swanson</span>
						  		<span class="list-block-sub"> ID: 245788</span>
						  		<div class="block-btn-toolbar pull-right">
							  		<div class="btn-group">
										<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
									    	<i class="icon-cog icon-white"></i> Actions
									    	<span class="caret"></span>
									  	</a>
									  	<ul class="dropdown-menu">
											<li><a href="#"><i class="icon-eye-open"></i> View details</a></li>
											<li><a href="#"><i class="icon-arrow-up"></i> Move up</a></li>
											<li><a href="#"><i class="icon-arrow-down"></i> Move down</a></li>
											<li><a href="#"><i class="icon-trash"></i> Delete</a></li>
											<li><a href="#"><i class="icon-plus"></i> Copy</a></li>
										</ul>
									</div>
							  	</div><!-- /pull-right -->
						  	</div><!-- /.list-block -->
						  	
						  	<a class="btn btn-primary" href="#"><i class="icon-plus icon-white"></i> Add Investigator</a>
							
						</div><!-- /#investigators -->
						
						<div class="tab-pane" id="patients">
						
							<h3 class="content-title">Patients assigned to your CRF, and their visit progress</h3>
							
							<div class="list-block clearfix">
						  		<span class="list-block-title pull-left">Male</span>
						  		<span class="list-block-sub pull-left"> ID: 245788</span>
						  		<div class="patient-visits pull-left">
							  		<ul>
								  		<li><a href="#" class="complete">1</a></li>
								  		<li><a href="#" class="complete">2</a></li>
								  		<li><a href="#" class="complete">3</a></li>
								  		<li><a href="#" class="complete">4</a></li>
								  		<li><a href="#" class="in-progress">5</a></li>
								  		<li><a href="#">6</a></li>
								  		<li><a href="#">7</a></li>
								  		<li><a href="#">8</a></li>
								  		<li><a href="#">9</a></li>
							  		</ul>
						  		</div>
						  		<div class="block-btn-toolbar pull-right">
							  		<div class="btn-group">
										<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
									    	<i class="icon-cog icon-white"></i> Actions
									    	<span class="caret"></span>
									  	</a>
									  	<ul class="dropdown-menu">
											<li><a href="#"><i class="icon-eye-open"></i> View details</a></li>
											<li><a href="#"><i class="icon-arrow-up"></i> Move up</a></li>
											<li><a href="#"><i class="icon-arrow-down"></i> Move down</a></li>
											<li><a href="#"><i class="icon-trash"></i> Delete</a></li>
											<li><a href="#"><i class="icon-plus"></i> Copy</a></li>
										</ul>
									</div>
							  	</div><!-- /pull-right -->
						  	</div><!-- /.list-block -->
						  	
						  	<div class="list-block clearfix">
						  		<span class="list-block-title pull-left">Male</span>
						  		<span class="list-block-sub pull-left"> ID: 346790</span>
						  		<div class="patient-visits pull-left">
							  		<ul>
								  		<li><a href="#" class="complete">1</a></li>
								  		<li><a href="#" class="complete">2</a></li>
								  		<li><a href="#" class="complete">3</a></li>
								  		<li><a href="#" class="complete">4</a></li>
								  		<li><a href="#" class="in-progress">5</a></li>
								  		<li><a href="#">6</a></li>
								  		<li><a href="#">7</a></li>
								  		<li><a href="#">8</a></li>
								  		<li><a href="#">9</a></li>
							  		</ul>
						  		</div>
						  		<div class="block-btn-toolbar pull-right">
							  		<div class="btn-group">
										<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
									    	<i class="icon-cog icon-white"></i> Actions
									    	<span class="caret"></span>
									  	</a>
									  	<ul class="dropdown-menu">
											<li><a href="#"><i class="icon-eye-open"></i> View details</a></li>
											<li><a href="#"><i class="icon-arrow-up"></i> Move up</a></li>
											<li><a href="#"><i class="icon-arrow-down"></i> Move down</a></li>
											<li><a href="#"><i class="icon-trash"></i> Delete</a></li>
											<li><a href="#"><i class="icon-plus"></i> Copy</a></li>
										</ul>
									</div>
							  	</div><!-- /pull-right -->
						  	</div><!-- /.list-block -->
						  	
						  	<div class="list-block clearfix">
						  		<span class="list-block-title pull-left">Male</span>
						  		<span class="list-block-sub pull-left"> ID: 173508</span>
						  		<div class="patient-visits pull-left">
							  		<ul>
								  		<li><a href="#" class="complete">1</a></li>
								  		<li><a href="#" class="complete">2</a></li>
								  		<li><a href="#" class="complete">3</a></li>
								  		<li><a href="#" class="complete">4</a></li>
								  		<li><a href="#" class="in-progress">5</a></li>
								  		<li><a href="#">6</a></li>
								  		<li><a href="#">7</a></li>
								  		<li><a href="#">8</a></li>
								  		<li><a href="#">9</a></li>
							  		</ul>
						  		</div>
						  		<div class="block-btn-toolbar pull-right">
							  		<div class="btn-group">
										<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
									    	<i class="icon-cog icon-white"></i> Actions
									    	<span class="caret"></span>
									  	</a>
									  	<ul class="dropdown-menu">
											<li><a href="#"><i class="icon-eye-open"></i> View details</a></li>
											<li><a href="#"><i class="icon-arrow-up"></i> Move up</a></li>
											<li><a href="#"><i class="icon-arrow-down"></i> Move down</a></li>
											<li><a href="#"><i class="icon-trash"></i> Delete</a></li>
											<li><a href="#"><i class="icon-plus"></i> Copy</a></li>
										</ul>
									</div>
							  	</div><!-- /pull-right -->
						  	</div><!-- /.list-block -->
						  	
						  	<div class="list-block clearfix">
						  		<span class="list-block-title pull-left">Female</span>
						  		<span class="list-block-sub pull-left"> ID: 197346</span>
						  		<div class="patient-visits pull-left">
							  		<ul>
								  		<li><a href="#" class="complete">1</a></li>
								  		<li><a href="#" class="complete">2</a></li>
								  		<li><a href="#" class="complete">3</a></li>
								  		<li><a href="#" class="complete">4</a></li>
								  		<li><a href="#" class="in-progress">5</a></li>
								  		<li><a href="#">6</a></li>
								  		<li><a href="#">7</a></li>
								  		<li><a href="#">8</a></li>
								  		<li><a href="#">9</a></li>
							  		</ul>
						  		</div>
						  		<div class="block-btn-toolbar pull-right">
							  		<div class="btn-group">
										<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
									    	<i class="icon-cog icon-white"></i> Actions
									    	<span class="caret"></span>
									  	</a>
									  	<ul class="dropdown-menu">
											<li><a href="#"><i class="icon-eye-open"></i> View details</a></li>
											<li><a href="#"><i class="icon-arrow-up"></i> Move up</a></li>
											<li><a href="#"><i class="icon-arrow-down"></i> Move down</a></li>
											<li><a href="#"><i class="icon-trash"></i> Delete</a></li>
											<li><a href="#"><i class="icon-plus"></i> Copy</a></li>
										</ul>
									</div>
							  	</div><!-- /pull-right -->
						  	</div><!-- /.list-block -->
						  	
						  	<div class="list-block clearfix">
						  		<span class="list-block-title pull-left">Male</span>
						  		<span class="list-block-sub pull-left"> ID: 753861</span>
						  		<div class="patient-visits pull-left">
							  		<ul>
								  		<li><a href="#" class="complete">1</a></li>
								  		<li><a href="#" class="complete">2</a></li>
								  		<li><a href="#" class="complete">3</a></li>
								  		<li><a href="#" class="complete">4</a></li>
								  		<li><a href="#" class="in-progress">5</a></li>
								  		<li><a href="#">6</a></li>
								  		<li><a href="#">7</a></li>
								  		<li><a href="#">8</a></li>
								  		<li><a href="#">9</a></li>
							  		</ul>
						  		</div>
						  		<div class="block-btn-toolbar pull-right">
							  		<div class="btn-group">
										<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
									    	<i class="icon-cog icon-white"></i> Actions
									    	<span class="caret"></span>
									  	</a>
									  	<ul class="dropdown-menu">
											<li><a href="#"><i class="icon-eye-open"></i> View details</a></li>
											<li><a href="#"><i class="icon-arrow-up"></i> Move up</a></li>
											<li><a href="#"><i class="icon-arrow-down"></i> Move down</a></li>
											<li><a href="#"><i class="icon-trash"></i> Delete</a></li>
											<li><a href="#"><i class="icon-plus"></i> Copy</a></li>
										</ul>
									</div>
							  	</div><!-- /pull-right -->
						  	</div><!-- /.list-block -->
						  	
						  	<div class="list-block clearfix">
						  		<span class="list-block-title pull-left">Female</span>
						  		<span class="list-block-sub pull-left"> ID: 254688</span>
						  		<div class="patient-visits pull-left">
							  		<ul>
								  		<li><a href="#" class="complete">1</a></li>
								  		<li><a href="#" class="complete">2</a></li>
								  		<li><a href="#" class="complete">3</a></li>
								  		<li><a href="#" class="complete">4</a></li>
								  		<li><a href="#" class="in-progress">5</a></li>
								  		<li><a href="#">6</a></li>
								  		<li><a href="#">7</a></li>
								  		<li><a href="#">8</a></li>
								  		<li><a href="#">9</a></li>
							  		</ul>
						  		</div>
						  		<div class="block-btn-toolbar pull-right">
							  		<div class="btn-group">
										<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
									    	<i class="icon-cog icon-white"></i> Actions
									    	<span class="caret"></span>
									  	</a>
									  	<ul class="dropdown-menu">
											<li><a href="#"><i class="icon-eye-open"></i> View details</a></li>
											<li><a href="#"><i class="icon-arrow-up"></i> Move up</a></li>
											<li><a href="#"><i class="icon-arrow-down"></i> Move down</a></li>
											<li><a href="#"><i class="icon-trash"></i> Delete</a></li>
											<li><a href="#"><i class="icon-plus"></i> Copy</a></li>
										</ul>
									</div>
							  	</div><!-- /pull-right -->
						  	</div><!-- /.list-block -->
						  	
						  	<a class="btn btn-primary" href="#"><i class="icon-plus icon-white"></i> Add Patient</a>
							
						</div><!-- /#patients -->
						
						<div class="tab-pane" id="notes">
						
							<h5 class="note-title">Visit 1 - Q1 - Question Title</h5>
							<table class="table table-bordered table-striped">
							  	<thead>
							    	<tr>
							      		<th></th>
							      		<th>File name</th>
							      		<th>Submitted by</th>
							      		<th>Date</th>
							    	</tr>
							  	</thead>
							  	<tbody>
							    	<tr>
							      		<td><i class="icon-file"></i></td>
							      		<td><a href="#">Notes</a></td>
							      		<td><a href="#">Joe Bloggs</a></td>
							      		<td>25th February 2012</td>
							    	</tr>
							    	<tr>
						    			<td><i class="icon-file"></i></td>
						    			<td><a href="#">lab-report-february.pdf</a></td>
						    			<td><a href="#">Jane Bloggs</a></td>
						    			<td>25th February 2012</td>
							    	</tr>
							  	</tbody>
							</table>
							
							<h5 class="note-title">Visit 11 - Q4 - Question Title</h5>
							<table class="table table-bordered table-striped">
							  	<thead>
							    	<tr>
							      		<th></th>
							      		<th>File name</th>
							      		<th>Submitted by</th>
							      		<th>Date</th>
							    	</tr>
							  	</thead>
							  	<tbody>
							    	<tr>
						    			<td><i class="icon-file"></i></td>
						    			<td><a href="#">Notes</a></td>
						    			<td><a href="#">Joe Bloggs</a></td>
						    			<td>25th February 2012</td>
							    	</tr>
							    	<tr>
							    		<td><i class="icon-file"></i></td>
							    		<td><a href="#">lab-report-february.pdf</a></td>
							    		<td><a href="#">Jane Bloggs</a></td>
							    		<td>25th February 2012</td>
							    	</tr>
							  	</tbody>
							</table>
							
							<h5 class="note-title">Visit 2 - Q3 - Question Title</h5>
							<table class="table table-bordered table-striped">
							  	<thead>
							    	<tr>
							      		<th></th>
							      		<th>File name</th>
							      		<th>Submitted by</th>
							      		<th>Date</th>
							    	</tr>
							  	</thead>
							  	<tbody>
							    	<tr>
						    			<td><i class="icon-file"></i></td>
						    			<td><a href="#">Notes</a></td>
						    			<td><a href="#">Joe Bloggs</a></td>
						    			<td>25th February 2012</td>
							    	</tr>
							    	<tr>
							    		<td><i class="icon-file"></i></td>
							    		<td><a href="#">lab-report-february.pdf</a></td>
							    		<td><a href="#">Jane Bloggs</a></td>
							    		<td>25th February 2012</td>
							    	</tr>
							  	</tbody>
							</table>
							
						
						</div><!-- /#notes -->
						
					</div><!-- /.tab-content -->
				</div><!-- /.widget-content -->
			</div><!-- /.widget -->
					
		</div><!-- /.span9 -->
	</div><!-- /.row -->
		
</div><!-- /.container -->

<?php include '../includes/footer.php'; ?>