<?php include '../includes/head.php'; ?>

<?php include '../includes/nav.php'; ?>

<div class="container">

	<div class="page-header">
		<h1>Dashboard</h1>
	</div>
	
	<div class="row">
		<div class="span12">
			
			<div class="shortcuts">
				<a href="#" class="shortcut">
					<i class="shortcut-icon icon-edit"></i>
					<span class="shortcut-label">Input data into a CRF</span>
				</a>
				<a href="#" class="shortcut">
					<i class="shortcut-icon icon-list"></i>
					<span class="shortcut-label">Manage a current CRF</span>								
				</a>
				
				<a href="#" class="shortcut">
					<i class="shortcut-icon icon-list-alt"></i>
					<span class="shortcut-label">Create a CRF</span>	
				</a>
				
				<a href="#" class="shortcut">
					<i class="shortcut-icon icon-user"></i>
					<span class="shortcut-label">Add or manage patients</span>								
				</a>
				
				<a href="#" class="shortcut" >
					<i class="shortcut-icon icon-user-md"></i>
					<span class="shortcut-label">Add or manage investigators</span>
				</a>
				
				<a href="#" class="shortcut">
					<i class="shortcut-icon icon-th"></i>
					<span class="shortcut-label">View CRF Library</span>	
				</a>
			</div><!-- /shortcuts -->
			
		</div><!-- /span12 -->
	</div><!-- /row -->

	
	<div class="row">
	
		<div class="span6">
			<div class="widget widget-nopad">
				<div class="widget-header">
					<i class="icon-time"></i>
					<h3>Latest Activity</h3>
				</div> <!-- /widget-header -->
				<div class="widget-content">
					<h4 class="activity-date">Tuesday 14th March 2012</h4>
					<ul class="activity-list">
						<li>
							<div class="activity-type">
								<span class="label">Input data</span>
								<a href="#" class="activity-detail-title">CRF Heart Disease MPTO04</a>
							</div>
							<div class="activity-detail">									
								
								<p class="activity-detail-preview">Joe Bloggs added data to CRF Heart Disease MPTO04 at 6:00 pm December 14, 2011</p>
							</div>
						</li>
						<li>
							<div class="activity-type">
								<span class="label label-warning">Create CRF</span>
								<a href="#" class="activity-detail-title">CRF Heart Disease MPTO04</a>
							</div>
							<div class="activity-detail">										
								
								<p class="activity-detail-preview">Joe Bloggs added data to CRF Heart Disease MPTO04 at 6:00 pm December 14, 2011</p>
							</div>
						</li>
					</ul>

					<h4 class="activity-date">Wednesday 13th March 2012</h4>
					<ul class="activity-list">
						<li>
							<div class="activity-type">
								<span class="label label-warning">Create CRF</span>
								<a href="#" class="activity-detail-title">CRF Heart Disease MPTO04</a>
							</div>
							<div class="activity-detail">										
								
								<p class="activity-detail-preview">Joe Bloggs added data to CRF Heart Disease MPTO04 at 6:00 pm December 14, 2011</p>
							</div>
						</li>
						<li>
							<div class="activity-type">
								<span class="label label-success">Added patient</span>
								<a href="#" class="activity-detail-title">CRF Heart Disease MPTO04</a>
							</div>
							<div class="activity-detail">										
								
								<p class="activity-detail-preview">Joe Bloggs added data to CRF Heart Disease MPTO04 at 6:00 pm December 14, 2011</p>
							</div>
						</li>
					</ul>
				</div> <!-- /widget-content -->
			</div> <!-- /widget -->
			
			<a class="btn btn-primary dashbtn-margin" href="#">View all the latest CRF activity</a>
			
		</div><!-- /.span-6 -->
		
		<div class="span6">
		
			<div class="widget widget-table">
				<div class="widget-header">
					<i class="icon-list"></i>
					<h3>Your CRF's</h3>
				</div> <!-- /widget-header -->
				<div class="widget-content">
					<table class="table table-bordered table-striped">
					  	<thead>
					    	<tr>
					      		<th>CRF ID</th>
					      		<th>Title</th>
					      		<th>Status</th>
					      		<th>CRF Action</th>
					    	</tr>
					  	</thead>
					  	<tbody>
					    	<tr>
					      		<td>MPTO02</td>
					      		<td><a href="#">Skin grafting</a></td>
					      		<td>Draft</td>
					      		<td>
					      			<div class="btn-group">
										<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
									    	<i class="icon-cog icon-white"></i> Actions
									    	<span class="caret"></span>
									  	</a>
									  	<ul class="dropdown-menu">
											<li><a href="#"><i class="icon-pencil"></i> Edit</a></li>
											<li><a href="#"><i class="icon-trash"></i> Delete</a></li>
											<li><a href="#"><i class="icon-plus"></i> Copy</a></li>
											<li class="divider"></li>
											<li><a href="#"><i class="icon-user"></i> Add Patient</a></li>
											<li><a href="#"><i class="icon-user"></i> Add Investigator</a></li>
										</ul>
									</div>
								</td>
					    	</tr>
					    	<tr>
				    			<td>MPTO02</td>
					      		<td><a href="#">Skin grafting</a></td>
					      		<td>Draft</td>
					      		<td>
									<div class="btn-group">
										<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
									    	<i class="icon-cog icon-white"></i> Actions
									    	<span class="caret"></span>
									  	</a>
									  	<ul class="dropdown-menu">
											<li><a href="#"><i class="icon-pencil"></i> Edit</a></li>
											<li><a href="#"><i class="icon-trash"></i> Delete</a></li>
											<li><a href="#"><i class="icon-plus"></i> Copy</a></li>
											<li class="divider"></li>
											<li><a href="#"><i class="icon-user"></i> Add Patient</a></li>
											<li><a href="#"><i class="icon-user"></i> Add Investigator</a></li>
										</ul>
									</div>
								</td>
					    	</tr>
					    	<tr>
				    			<td>MPTO02</td>
					      		<td><a href="#">Skin grafting</a></td>
					      		<td>Draft</td>
					      		<td>
					      			<div class="btn-group">
										<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
									    	<i class="icon-cog icon-white"></i> Actions
									    	<span class="caret"></span>
									  	</a>
									  	<ul class="dropdown-menu">
											<li><a href="#"><i class="icon-pencil"></i> Edit</a></li>
											<li><a href="#"><i class="icon-trash"></i> Delete</a></li>
											<li><a href="#"><i class="icon-plus"></i> Copy</a></li>
											<li class="divider"></li>
											<li><a href="#"><i class="icon-user"></i> Add Patient</a></li>
											<li><a href="#"><i class="icon-user"></i> Add Investigator</a></li>
										</ul>
									</div>
								</td>
					    	</tr>
					    	<tr>
				    			<td>MPTO02</td>
					      		<td><a href="#">Skin grafting</a></td>
					      		<td>Draft</td>
					      		<td>
					      			<div class="btn-group">
										<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
									    	<i class="icon-cog icon-white"></i> Actions
									    	<span class="caret"></span>
									  	</a>
									  	<ul class="dropdown-menu">
											<li><a href="#"><i class="icon-pencil"></i> Edit</a></li>
											<li><a href="#"><i class="icon-trash"></i> Delete</a></li>
											<li><a href="#"><i class="icon-plus"></i> Copy</a></li>
											<li class="divider"></li>
											<li><a href="#"><i class="icon-user"></i> Add Patient</a></li>
											<li><a href="#"><i class="icon-user"></i> Add Investigator</a></li>
										</ul>
									</div>
								</td>
					    	</tr>
					    	<tr>
				    			<td>MPTO02</td>
					      		<td><a href="#">Skin grafting</a></td>
					      		<td>Draft</td>
					      		<td>
					      			<div class="btn-group">
										<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
									    	<i class="icon-cog icon-white"></i> Actions
									    	<span class="caret"></span>
									  	</a>
									  	<ul class="dropdown-menu">
											<li><a href="#"><i class="icon-pencil"></i> Edit</a></li>
											<li><a href="#"><i class="icon-trash"></i> Delete</a></li>
											<li><a href="#"><i class="icon-plus"></i> Copy</a></li>
											<li class="divider"></li>
											<li><a href="#"><i class="icon-user"></i> Add Patient</a></li>
											<li><a href="#"><i class="icon-user"></i> Add Investigator</a></li>
										</ul>
									</div>
								</td>
					    	</tr>
					  	</tbody>
					</table>
				</div> <!-- /widget-content -->
			</div> <!-- /widget -->
			
			<a class="btn btn-primary dashbtn-margin" href="#">Manage CRF's</a>
			
		</div><!-- /.span-6 -->
	
	</div><!-- /.row -->

</div><!-- /.container -->

<?php include '../includes/footer.php'; ?>