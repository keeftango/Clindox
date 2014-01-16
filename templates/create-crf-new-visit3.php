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
							<span class="pull-right">1</span>
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
							<span class="pull-right">12</span>
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
							Visit 2<i class="icon-chevron-right pull-right"></i>
							<span class="pull-right">8</span>
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
							Visit 3<i class="icon-chevron-right pull-right"></i>
							<span class="pull-right">7</span>
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
					
					<h3 class="content-title">Baseline Visit</h3>
					
					<ul class="questions-list unstyled">
					
						<li class="question-box">
							<div class="questions-list-title">
								<h3>Question title <span class="question-ID">ID: 1</span></h3>
								<div class="btn-group">
									<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								    	<i class="icon-cog icon-white"></i> Actions
								    	<span class="caret"></span>
								  	</a>
								  	<ul class="dropdown-menu">
										<li><a href="#"><i class="icon-pencil"></i> Edit</a></li>
										<li><a href="#"><i class="icon-trash"></i> Delete</a></li>
										<li><a href="#"><i class="icon-plus"></i> Copy</a></li>
									</ul>
									<a class="btn"><i class="icon-arrow-up"></i></a>
									<a class="btn"><i class="icon-arrow-down"></i></a>
								</div>
								<p>Help Text. Lorum ipsum dolor sit amet.</p>
								<ul class="unstyled">
									<li>
										<input type="radio" name="radios2" value="" > 
										<label class="inline-element">Option 1</label>
									</li>
									<li>
										<input type="radio" name="radios2" value="" > 
										<label class="inline-element" >Option 2</label>
									</li>
									<li>
										<label class="radio inline">
											<input type="radio" id="optionsRadiosOther1" value="option1">
											Other
										</label>
										<input class="input-large inline-element">
									</li>
								</ul>								
							</div>
						</li><!-- /.question-box -->
						
						<li class="question-box">
							<div class="questions-list-title">
								<h3>Question title <span class="question-ID">ID: 2</span></h3>
								<div class="btn-group">
									<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								    	<i class="icon-cog icon-white"></i> Actions
								    	<span class="caret"></span>
								  	</a>
								  	<ul class="dropdown-menu">
										<li><a href="#"><i class="icon-pencil"></i> Edit</a></li>
										<li><a href="#"><i class="icon-trash"></i> Delete</a></li>
										<li><a href="#"><i class="icon-plus"></i> Copy</a></li>
									</ul>
									<a class="btn"><i class="icon-arrow-up"></i></a>
									<a class="btn"><i class="icon-arrow-down"></i></a>
								</div>
								<p>Help Text. Lorum ipsum dolor sit amet.</p>
								<ul class="unstyled inline-options clearfix">
									<li>
										<input type="radio" name="radios1" value="" > 
										<label class="inline-element" >Option 1</label>
									</li>
									<li>
										<input type="radio" name="radios1" value="" > 
										<label class="inline-element" >Option 2</label>
									</li>
									<li>
										<label class="radio inline">
											<input type="radio" id="optionsRadiosOther2" value="option1">
											Other
										</label>
										<input class="input-large inline-element">
									</li>
								</ul>								
							</div>
						</li><!-- /.question-box -->
						
						<li class="question-box">
							<div class="questions-list-title">
								<h3>Question title <span class="question-ID">ID: 3</span></h3>
								<div class="btn-group">
									<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								    	<i class="icon-cog icon-white"></i> Actions
								    	<span class="caret"></span>
								  	</a>
								  	<ul class="dropdown-menu">
										<li><a href="#"><i class="icon-pencil"></i> Edit</a></li>
										<li><a href="#"><i class="icon-trash"></i> Delete</a></li>
										<li><a href="#"><i class="icon-plus"></i> Copy</a></li>
									</ul>
									<a class="btn"><i class="icon-arrow-up"></i></a>
									<a class="btn"><i class="icon-arrow-down"></i></a>
								</div>
								<p>Help Text. Lorum ipsum dolor sit amet.</p>
								<ul class="unstyled">
									<li>
										<input type="checkbox" name="checkbox2" value="" > 
										<label class="inline-element" >Option 1</label>
									</li>
									<li>
										<input type="checkbox" name="checkbox2" value="" > 
										<label class="inline-element" >Option 2</label>
									</li>
									<li>
										<label class="checkbox inline">
											<input type="checkbox" id="optionsCheckboxOther1" value="option1">
											Other
										</label>
										<input class="input-large inline-element">
									</li>
								</ul>								
							</div>
						</li><!-- /.question-box -->
						
						<li class="question-box">
							<div class="questions-list-title">
								<h3>Question title <span class="question-ID">ID: 4</span></h3>
								<div class="btn-group">
									<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								    	<i class="icon-cog icon-white"></i> Actions
								    	<span class="caret"></span>
								  	</a>
								  	<ul class="dropdown-menu">
										<li><a href="#"><i class="icon-pencil"></i> Edit</a></li>
										<li><a href="#"><i class="icon-trash"></i> Delete</a></li>
										<li><a href="#"><i class="icon-plus"></i> Copy</a></li>
									</ul>
									<a class="btn"><i class="icon-arrow-up"></i></a>
									<a class="btn"><i class="icon-arrow-down"></i></a>
								</div>
								<p>Help Text. Lorum ipsum dolor sit amet.</p>
								<ul class="unstyled inline-options clearfix">
									<li>
										<input type="checkbox" name="checkbox1" value="" > 
										<label class="inline-element" >Option 1</label>
									</li>
									<li>
										<input type="checkbox" name="checkbox1" value="" > 
										<label class="inline-element" >Option 2</label>
									</li>
									<li>
										<label class="checkbox inline">
											<input type="checkbox" id="optionsCheckboxOther2" value="option1">
											Other
										</label>
										<input class="input-large inline-element">
									</li>
								</ul>								
							</div>
						</li><!-- /.question-box -->
						
						<li class="question-box">
							<div class="questions-list-title">
								<h3>Question title <span class="question-ID">ID: 5</span></h3>
								<div class="btn-group">
									<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								    	<i class="icon-cog icon-white"></i> Actions
								    	<span class="caret"></span>
								  	</a>
								  	<ul class="dropdown-menu">
										<li><a href="#"><i class="icon-pencil"></i> Edit</a></li>
										<li><a href="#"><i class="icon-trash"></i> Delete</a></li>
										<li><a href="#"><i class="icon-plus"></i> Copy</a></li>
									</ul>
									<a class="btn"><i class="icon-arrow-up"></i></a>
									<a class="btn"><i class="icon-arrow-down"></i></a>
								</div>
								<p>Help Text. Lorum ipsum dolor sit amet.</p>
								
								<select class="span3">
									<option>Option 1</option>
									<option>Option 2</option>
									<option>Option 3</option>
									<option>Option 4</option>
									<option>Option 5</option>
								</select>
																
							</div>
						</li><!-- /.question-box -->
						
						<li class="question-box">
							<div class="questions-list-title">
								<h3>Question title <span class="question-ID">ID: 6</span></h3>
								<div class="btn-group">
									<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								    	<i class="icon-cog icon-white"></i> Actions
								    	<span class="caret"></span>
								  	</a>
								  	<ul class="dropdown-menu">
										<li><a href="#"><i class="icon-pencil"></i> Edit</a></li>
										<li><a href="#"><i class="icon-trash"></i> Delete</a></li>
										<li><a href="#"><i class="icon-plus"></i> Copy</a></li>
									</ul>
									<a class="btn"><i class="icon-arrow-up"></i></a>
									<a class="btn"><i class="icon-arrow-down"></i></a>
								</div>
								<p>Help Text. Lorum ipsum dolor sit amet.</p>
								
								<table class="grid-table" >
									<tbody>
										<tr>
											<td class=""></td>
											<td class="ss-scalenumbers"><label class="ss-scalenumber">1</label></td>
											<td class="ss-scalenumbers"><label class="ss-scalenumber">2</label></td>
											<td class="ss-scalenumbers"><label class="ss-scalenumber">3</label></td>
											<td class="ss-scalenumbers"><label class="ss-scalenumber">4</label></td>
											<td class="ss-scalenumbers"><label class="ss-scalenumber">5</label></td>
											<td class=""></td>
										</tr>
										<tr class="ss-scalerow">
											<td class="ss-scalerow">Easy</td>
											<td class="ss-scalerow"><input type="radio" name="entry.2.group" id="1" value="1"></td>
											<td class="ss-scalerow"><input type="radio" name="entry.2.group" id="2" value="2"></td>
											<td class="ss-scalerow"><input type="radio" name="entry.2.group" id="3" value="3"></td>
											<td class="ss-scalerow"><input type="radio" name="entry.2.group" id="4" value="4"></td>
											<td class="ss-scalerow"><input type="radio" name="entry.2.group" id="5" value="5"></td>
											<td class="ss-scalerow">Hard</td>
										</tr>
									</tbody>
								</table>
																
							</div>
						</li><!-- /.question-box -->
						
						<li class="question-box">
							<div class="questions-list-title">
								<h3>Question title <span class="question-ID">ID: 7</span></h3>
								<div class="btn-group">
									<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								    	<i class="icon-cog icon-white"></i> Actions
								    	<span class="caret"></span>
								  	</a>
								  	<ul class="dropdown-menu">
										<li><a href="#"><i class="icon-pencil"></i> Edit</a></li>
										<li><a href="#"><i class="icon-trash"></i> Delete</a></li>
										<li><a href="#"><i class="icon-plus"></i> Copy</a></li>
									</ul>
									<a class="btn"><i class="icon-arrow-up"></i></a>
									<a class="btn"><i class="icon-arrow-down"></i></a>
								</div>
								<p>Help Text. Lorum ipsum dolor sit amet.</p>
								
								<table class="grid-table" >
									<thead>
										<tr>
											<td class="ss-gridnumbers"></td>
											<td class="ss-gridnumbers" style="width:8%;"></td>
											<td class="ss-gridnumbers">1</td>
											<td class="ss-gridnumbers">2</td>
											<td class="ss-gridnumbers">3</td>
											<td class="ss-gridnumbers">4</td>
											<td class="ss-gridnumbers">5</td>
											<td class="ss-gridnumbers" style="width:8%;"></td>
										</tr>
									</thead>
									<tbody>
										<tr class="ss-gridrow ss-grid-row-odd">
											<td class="ss-gridrow">Row name 1</td>
											<td class="ss-gridrow" style="width:8%;"></td>
											<td class="ss-gridrow"><input type="radio" name="entry.1.group" value="1"></td>
											<td class="ss-gridrow"><input type="radio" name="entry.1.group" value="2"></td>
											<td class="ss-gridrow"><input type="radio" name="entry.1.group" value="3"></td>
											<td class="ss-gridrow"><input type="radio" name="entry.1.group" value="4"></td>
											<td class="ss-gridrow"><input type="radio" name="entry.1.group" value="5"></td>
											<td class="ss-gridrow" style="width:8%;"></td>
										</tr>
										<tr class="ss-gridrow ss-grid-row-odd">
											<td class="ss-gridrow">Row name 2</td>
											<td class="ss-gridrow" style="width:8%;"></td>
											<td class="ss-gridrow"><input type="radio" name="entry.2.group" value="1"></td>
											<td class="ss-gridrow"><input type="radio" name="entry.2.group" value="2"></td>
											<td class="ss-gridrow"><input type="radio" name="entry.2.group" value="3"></td>
											<td class="ss-gridrow"><input type="radio" name="entry.2.group" value="4"></td>
											<td class="ss-gridrow"><input type="radio" name="entry.2.group" value="5"></td>
											<td class="ss-gridrow" style="width:8%;"></td>
										</tr>
										<tr class="ss-gridrow ss-grid-row-odd">
											<td class="ss-gridrow">Row name 3</td>
											<td class="ss-gridrow" style="width:8%;"></td>
											<td class="ss-gridrow"><input type="radio" name="entry.3.group" value="1"></td>
											<td class="ss-gridrow"><input type="radio" name="entry.3.group" value="2"></td>
											<td class="ss-gridrow"><input type="radio" name="entry.3.group" value="3"></td>
											<td class="ss-gridrow"><input type="radio" name="entry.3.group" value="4"></td>
											<td class="ss-gridrow"><input type="radio" name="entry.3.group" value="5"></td>
											<td class="ss-gridrow" style="width:8%;"></td>
										</tr>
									</tbody>
								</table>
																
							</div>
						</li><!-- /.question-box -->
								
					</ul>		
					
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