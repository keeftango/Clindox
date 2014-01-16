<?php include '../includes/head.php'; ?>

<?php include '../includes/nav.php'; ?>

<div class="breadcrumbs">
	<div class="breadcrumbs-inner">
		<div class="container">
			<ul class="breadcrumb">
            	<li><a href="#">Dashboard</a></li>
            	<li class="breadcrumb-separator"><i class="icon-chevron-right icon-blue"></i></li> 
            	<li>Manage User's</li>
            </ul>
		</div>
	</div>
</div>

<div class="container">

	<div class="page-header">
		<h1>Manage User's</h1>
	</div>
	
	<div class="row">
		<div class="span12">
			<div class="crf-header clearfix">
			
				<div class="pull-right">
					<a class="btn btn-primary" href="#"><i class="icon-user"></i> Add new user</a>
				</div><!-- /pull-right -->
				<h3>User list</h3>
				
			</div><!-- /crf-header -->
		</div><!-- /span12 -->
	</div><!-- /row -->

	<div class="row">
		<div class="span12">
			
			<table class="table table-bordered table-striped">
			  	<thead>
			    	<tr>
			      		<th>ID</th>
			      		<th>First name</th>
			      		<th>Last name</th>
			      		<th>Status</th>
			      		<th>Role</th>
			      		<th>email</th>
			      		<th>User action</th>
			    	</tr>
			  	</thead>
			  	<tbody>
			  		<tr>
				  		<td><a href="#">024567</a></td>
				  		<td>John</td>
				  		<td>Bloggs</td>
				  		<td><span class="label label-success">Active</span></td>
				  		<td>Investigator</td>
				  		<td><a href="#"><i class="icon-envelope"></i> john.bloggs@email.com</a></td>
				  		<td>
					  		<div class="btn-group">
								<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
							    	<i class="icon-cog icon-white"></i> Actions
							    	<span class="caret"></span>
							  	</a>
							  	<ul class="dropdown-menu">
									<li><a href="#user1" data-toggle="modal"><i class="icon-eye-open"></i> View Details</a></li>
									<li><a href="#"><i class="icon-th-list"></i> Assign to CRF</a></li>
									<li class="divider"></li>
									<li><a href="#"><i class="icon-remove"></i> Delete</a></li>
								</ul>
							</div>
				  		</td>
			  		</tr>
			  		<tr>
				  		<td><a href="#">024567</a></td>
				  		<td>John</td>
				  		<td>Bloggs</td>
				  		<td><span class="label label-warning">Inactive</span></td>
				  		<td>Investigator</td>
				  		<td><a href="#"><i class="icon-envelope"></i> john.bloggs@email.com</a></td>
				  		<td>
					  		<div class="btn-group">
								<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
							    	<i class="icon-cog icon-white"></i> Actions
							    	<span class="caret"></span>
							  	</a>
							  	<ul class="dropdown-menu">
									<li><a href="#"><i class="icon-eye-open"></i> View Details</a></li>
									<li><a href="#"><i class="icon-th-list"></i> Assign to CRF</a></li>
									<li class="divider"></li>
									<li><a href="#"><i class="icon-remove"></i> Delete</a></li>
								</ul>
							</div>
				  		</td>
			  		</tr>
			  		<tr>
				  		<td><a href="#">024567</a></td>
				  		<td>John</td>
				  		<td>Bloggs</td>
				  		<td><span class="label label-warning">Inactive</span></td>
				  		<td>Investigator</td>
				  		<td><a href="#"><i class="icon-envelope"></i> john.bloggs@email.com</a></td>
				  		<td>
					  		<div class="btn-group">
								<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
							    	<i class="icon-cog icon-white"></i> Actions
							    	<span class="caret"></span>
							  	</a>
							  	<ul class="dropdown-menu">
									<li><a href="#"><i class="icon-eye-open"></i> View Details</a></li>
									<li><a href="#"><i class="icon-th-list"></i> Assign to CRF</a></li>
									<li class="divider"></li>
									<li><a href="#"><i class="icon-remove"></i> Delete</a></li>
								</ul>
							</div>
				  		</td>
			  		</tr>
			  		<tr>
				  		<td><a href="#">024567</a></td>
				  		<td>John</td>
				  		<td>Bloggs</td>
				  		<td><span class="label label-success">Active</span></td>
				  		<td>Editor</td>
				  		<td><a href="#"><i class="icon-envelope"></i> john.bloggs@email.com</a></td>
				  		<td>
					  		<div class="btn-group">
								<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
							    	<i class="icon-cog icon-white"></i> Actions
							    	<span class="caret"></span>
							  	</a>
							  	<ul class="dropdown-menu">
									<li><a href="#"><i class="icon-eye-open"></i> View Details</a></li>
									<li><a href="#"><i class="icon-th-list"></i> Assign to CRF</a></li>
									<li class="divider"></li>
									<li><a href="#"><i class="icon-remove"></i> Delete</a></li>
								</ul>
							</div>
				  		</td>
			  		</tr>
			  		<tr>
				  		<td><a href="#">024567</a></td>
				  		<td>John</td>
				  		<td>Bloggs</td>
				  		<td><span class="label label-warning">Inactive</span></td>
				  		<td>Investigator</td>
				  		<td><a href="#"><i class="icon-envelope"></i> john.bloggs@email.com</a></td>
				  		<td>
					  		<div class="btn-group">
								<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
							    	<i class="icon-cog icon-white"></i> Actions
							    	<span class="caret"></span>
							  	</a>
							  	<ul class="dropdown-menu">
									<li><a href="#"><i class="icon-eye-open"></i> View Details</a></li>
									<li><a href="#"><i class="icon-th-list"></i> Assign to CRF</a></li>
									<li class="divider"></li>
									<li><a href="#"><i class="icon-remove"></i> Delete</a></li>
								</ul>
							</div>
				  		</td>
			  		</tr>
			  		<tr>
				  		<td><a href="#">024567</a></td>
				  		<td>John</td>
				  		<td>Bloggs</td>
				  		<td><span class="label label-success">Active</span></td>
				  		<td>Editor</td>
				  		<td><a href="#"><i class="icon-envelope"></i> john.bloggs@email.com</a></td>
				  		<td>
					  		<div class="btn-group">
								<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
							    	<i class="icon-cog icon-white"></i> Actions
							    	<span class="caret"></span>
							  	</a>
							  	<ul class="dropdown-menu">
									<li><a href="#"><i class="icon-eye-open"></i> View Details</a></li>
									<li><a href="#"><i class="icon-th-list"></i> Assign to CRF</a></li>
									<li class="divider"></li>
									<li><a href="#"><i class="icon-remove"></i> Delete</a></li>
								</ul>
							</div>
				  		</td>
			  		</tr>
			  		<tr>
				  		<td><a href="#">024567</a></td>
				  		<td>John</td>
				  		<td>Bloggs</td>
				  		<td><span class="label label-success">Active</span></td>
				  		<td>Investigator</td>
				  		<td><a href="#"><i class="icon-envelope"></i> john.bloggs@email.com</a></td>
				  		<td>
					  		<div class="btn-group">
								<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
							    	<i class="icon-cog icon-white"></i> Actions
							    	<span class="caret"></span>
							  	</a>
							  	<ul class="dropdown-menu">
									<li><a href="#"><i class="icon-eye-open"></i> View Details</a></li>
									<li><a href="#"><i class="icon-th-list"></i> Assign to CRF</a></li>
									<li class="divider"></li>
									<li><a href="#"><i class="icon-remove"></i> Delete</a></li>
								</ul>
							</div>
				  		</td>
			  		</tr>
			  		<tr>
				  		<td><a href="#">024567</a></td>
				  		<td>John</td>
				  		<td>Bloggs</td>
				  		<td><span class="label label-success">Active</span></td>
				  		<td>Investigator</td>
				  		<td><a href="#"><i class="icon-envelope"></i> john.bloggs@email.com</a></td>
				  		<td>
					  		<div class="btn-group">
								<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
							    	<i class="icon-cog icon-white"></i> Actions
							    	<span class="caret"></span>
							  	</a>
							  	<ul class="dropdown-menu">
									<li><a href="#"><i class="icon-eye-open"></i> View Details</a></li>
									<li><a href="#"><i class="icon-th-list"></i> Assign to CRF</a></li>
									<li class="divider"></li>
									<li><a href="#"><i class="icon-remove"></i> Delete</a></li>
								</ul>
							</div>
				  		</td>
			  		</tr>
			  		<tr>
				  		<td><a href="#">024567</a></td>
				  		<td>John</td>
				  		<td>Bloggs</td>
				  		<td><span class="label label-success">Active</span></td>
				  		<td>Investigator</td>
				  		<td><a href="#"><i class="icon-envelope"></i> john.bloggs@email.com</a></td>
				  		<td>
					  		<div class="btn-group">
								<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
							    	<i class="icon-cog icon-white"></i> Actions
							    	<span class="caret"></span>
							  	</a>
							  	<ul class="dropdown-menu">
									<li><a href="#"><i class="icon-eye-open"></i> View Details</a></li>
									<li><a href="#"><i class="icon-th-list"></i> Assign to CRF</a></li>
									<li class="divider"></li>
									<li><a href="#"><i class="icon-remove"></i> Delete</a></li>
								</ul>
							</div>
				  		</td>
			  		</tr>
			  		<tr>
				  		<td><a href="#">024567</a></td>
				  		<td>John</td>
				  		<td>Bloggs</td>
				  		<td><span class="label label-success">Active</span></td>
				  		<td>Investigator</td>
				  		<td><a href="#"><i class="icon-envelope"></i> john.bloggs@email.com</a></td>
				  		<td>
					  		<div class="btn-group">
								<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
							    	<i class="icon-cog icon-white"></i> Actions
							    	<span class="caret"></span>
							  	</a>
							  	<ul class="dropdown-menu">
									<li><a href="#"><i class="icon-eye-open"></i> View Details</a></li>
									<li><a href="#"><i class="icon-th-list"></i> Assign to CRF</a></li>
									<li class="divider"></li>
									<li><a href="#"><i class="icon-remove"></i> Delete</a></li>
								</ul>
							</div>
				  		</td>
			  		</tr>

			  	</tbody>
			</table>
		
			<div class="row">
				<div class="span6">
					<span class="page-amount">Showing 1-10 of 24 User's</span>
				</div>
				<div class="span6">
					<div class="pagination pull-right">
						<ul>
							<li>
								<a href="#">Previous</a>
							</li>
							<li class="active">
								<a href="#">1</a>
							</li>
							<li>
								<a href="#">2</a>
							</li>
							<li>
								<a href="#">3</a>
							</li>
							<li>
								<a href="#">4</a>
							</li>
							<li>
								<a href="#">Next</a>
							</li>
						</ul>
					</div><!-- /pagination -->
				</div>
			</div><!-- /row -->
			
		</div><!-- /span12 -->
	</div><!-- /row -->

</div><!-- /.container -->

<!-- MODALS START -->

<div class="modal hide" id="user1">
  	<div class="modal-header">
    	<button type="button" class="close" data-dismiss="modal"><i class="icon-remove"></i></button>
	    <h3>User Details</h3>
  	</div>
  	<div class="modal-body">
  		<p class="required-text">All fields are required unless otherwise stated</p>
    	<form class="form-horizontal">
    		<fieldset>
    			<div class="control-group">
    		  		<label class="control-label">User ID</label>
    		  		<div class="controls">
    		  			<span class="input-xlarge uneditable-input">0845642</span>    			  		
    		  		</div>
    			</div><!-- /control-group -->
    			<div class="control-group">
    		  		<label class="control-label" for="input01">First name</label>
    		  		<div class="controls">
    			  		<input class="input-xlarge" id="input01" value="Joe" />
    		  		</div>
    			</div><!-- /control-group -->
    			<div class="control-group">
    				<label class="control-label" for="input02">Last name</label>
    				<div class="controls">
    			  		<input class="input-xlarge" id="input02" value="Bloggs" />
    				</div>
    			</div><!-- /control-group -->
    			<div class="control-group">
    		  		<label class="control-label">Status</label>
    		  		<div class="controls">
    		  			<span class="input-xlarge uneditable-input">Active</span>    
    		  		</div>
    			</div><!-- /control-group -->
    			<div class="control-group">
					<label class="control-label">Role</label>
					<div class="controls">
						<label class="checkbox">
							<input type="checkbox" name="optionsCheckboxList1" value="option1">
							Investigator
                		</label>
                		<label class="checkbox">
                			<input type="checkbox" name="optionsCheckboxList2" value="option2">
                			Administrator (Authorisation required)
                		</label>
                		<label class="checkbox">
                			<input type="checkbox" name="optionsCheckboxList3" value="option3">
                			Editor
                		</label>
                		<label class="checkbox">
                			<input type="checkbox" name="optionsCheckboxList4" value="option4">
                			Auditor                		
                		</label>
                	</div>
    			</div><!-- /control-group -->
    			<div class="control-group">
    					<label class="control-label" for="input03">email</label>
    					<div class="controls">
    			  			<input class="input-xlarge" id="input03" value="joe.bloggs@email.com" />
    					</div>
    			</div><!-- /control-group -->
    			<div class="control-group">
    					<label class="control-label" for="input04">Password</label>
    					<div class="controls">
    			  			<input type="password" class="input-xlarge" id="input04" value="dsdsdsdsds" />
    					</div>
    			</div><!-- /control-group -->
    			<div class="control-group">
    					<label class="control-label" for="input05">Verify password</label>
    					<div class="controls">
    			  			<input type="password" class="input-xlarge" id="input05" value="dsdsdsdsds" />
    					</div>
    			</div><!-- /control-group -->
    		</fieldset>
    	</form>
  	</div>
  	<div class="modal-footer">
  		<div class="pull-left">
  			<a href="#" class="btn">Delete User</a>
  		</div>
    	<a href="#" class="btn" data-dismiss="modal">Close</a>
    	<a href="#" class="btn btn-primary">Save changes</a>
  	</div>
</div>

<!-- MODALS FINISH -->

<?php include '../includes/footer.php'; ?>