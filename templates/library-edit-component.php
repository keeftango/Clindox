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
            	<li><a href="#">Components</a></li>
            	<li class="breadcrumb-separator"><i class="icon-chevron-right icon-blue"></i></li> 
            	<li>Edit Component - Component Name</li>
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
				<h3>Edit Component</h3>
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
				
					<h3 class="content-title">Component Name</h3>
					
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
							<a class="btn btn-primary" href="#">Save Component</a>
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
		        		<input type="text" class="input-xlarge" id="input-name">
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