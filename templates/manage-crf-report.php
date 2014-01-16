<?php include '../includes/head.php'; ?>

<?php include '../includes/nav.php'; ?>

<div class="breadcrumbs">
	<div class="breadcrumbs-inner">
		<div class="container">
			<ul class="breadcrumb">
            	<li><a href="#">Dashboard</a></li>
            	<li class="breadcrumb-separator"><i class="icon-chevron-right icon-blue"></i></li> 
            	<li><a href="#">Manage CRF's</a></li>
            	<li class="breadcrumb-separator"><i class="icon-chevron-right icon-blue"></i></li> 
            	<li><a href="#">CRF MPT04 - Skin Grafting</a></li>
            	<li class="breadcrumb-separator"><i class="icon-chevron-right icon-blue"></i></li> 
            	<li>Report</li>
            </ul>
		</div>
	</div>
</div>

<div class="container">

	<div class="page-header">
		<h1>CRF MPT04 - Skin Grafting <!--<small>CRF MPT04 - Skin Grafting</small>--></h1>
	</div>
	
	<div class="row">
		<div class="span12">
			<div class="crf-header clearfix">
				
				<div class="pull-right">
					<a class="btn btn-primary" href="#"><i class="icon-edit"></i> Input data</a>
					<a href="#" class="btn"><i class="icon-print"></i></a>
					<a href="#" class="btn"><i class="icon-share"></i></a>
				</div>
				<h3>Report</h3>
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
					  	<h3 class="status-heading"><i class="icon-user"></i> 11 Patients</h3>
					</div>
				
				</div><!-- /widget-content -->
			</div><!-- /widget -->
		
			<div class="widget">
				<div class="widget-header">
					<i class="icon-list"></i>
					<h3>Visits &amp; Components</h3>
				</div> <!-- /widget-header -->				
				<ul class="nav nav-tabs nav-stacked">
					<li class="active">
						<a href="#">View all<i class="icon-chevron-right pull-right"></i></a>
					</li>
					<li>
						<a href="#">Component<i class="icon-chevron-right pull-right"></i> <span class="pull-right">12</span></a>
					</li>
					<li>
						<a href="#">Lorum ipsum dolor sit amet ameteur dis acet<i class="icon-chevron-right pull-right"></i> <span class="pull-right">12</span></a>
					</li>
					<li>
						<a href="#">Visit 1<i class="icon-chevron-right pull-right"></i> <span class="pull-right">12</span></a>
					</li>
					<li>
						<a href="#">Visit 2<i class="icon-chevron-right pull-right"></i> <span class="pull-right">12</span></a>
					</li>
					<li>
						<a href="#">Visit 3<i class="icon-chevron-right pull-right"></i> <span class="pull-right">12</span></a>
					</li>
					<li>
						<a href="#">Visit 4<i class="icon-chevron-right pull-right"></i> <span class="pull-right">12</span></a>
					</li>
					<li>
						<a href="#">Visit 5<i class="icon-chevron-right pull-right"></i> <span class="pull-right">12</span></a>
					</li>
					<li>
						<a href="#">Visit 6<i class="icon-chevron-right pull-right"></i> <span class="pull-right">12</span></a>
					</li>
					<li>
						<a href="#">Visit 7<i class="icon-chevron-right pull-right"></i> <span class="pull-right">12</span></a>
					</li>
					<li>
						<a href="#">Visit 8<i class="icon-chevron-right pull-right"></i> <span class="pull-right">12</span></a>
					</li>
					<li>
						<a href="#">Visit 9<i class="icon-chevron-right pull-right"></i> <span class="pull-right">12</span></a>
					</li>
				</ul>				
			</div><!-- /widget -->
		
			
			
		</div><!-- /.span3 -->
		
		<div class="span9">
		
			<div class="widget">
				<div class="widget-content">
					
					<h3 class="content-title">This CRF is 69&#37; complete</h3>
					
					<button class="btn" data-toggle="collapse" data-target="#filter-block">Filter results</button>
					<div id="filter-block" class="collapse">
						<form class="form-horizontal">
							<fieldset>
						    	<div class="control-group">
						    		<label class="control-label" for="select-patient1">By Patient(s)</label>
						    		<div class="controls">
						    			<select id="select-patient1">
						                	<option>-- Select Patient</option>
						                	<option>Patient Name 1</option>
							                <option>Patient Name 2</option>
						                	<option>Patient Name 3</option>
						                	<option>Patient Name 4</option>
						                	<option>Patient Name 5</option>
						                	<option>Patient Name 6</option>
						                </select>
						    			<ol>
						    				<li>Patient Name 1 <a href="#">remove</a></li>
						    				<li>Patient Name 2 <a href="#">remove</a></li>
						    			</ol>
						    		</div>
						    	</div>
						    	<div class="control-group">
						    		<label class="control-label" for="select-patient2">By Question(s)</label>
						    		<div class="controls">
						    			<select id="select-patient2">
						                	<option>-- Select Questions</option>
						                	<option>-- Visit 1</option>
						                	<option>Question 1</option>
							                <option>Question 2</option>
							                <option>Question 3</option>
							                <option>-- Visit 2</option>
							                <option>Question 4</option>
							                <option>Question 5</option>
						                </select>
						    			<ol>
						    				<li>Question Name 1 <a href="#">remove</a></li>
						    				<li>Question Name 2 <a href="#">remove</a></li>
						    			</ol>
						    		</div>
						    	</div>
						    	<div class="control-group">
					            	<label class="control-label">Additional Criteria</label>
					            	<div class="controls">
					            		<select id="select01" class="inline span2">
						                	<option>-- Age Range</option>
						                	<option>0 - 10</option>
							                <option>11 - 20</option>
						                	<option>21 - 30</option>
						                	<option>31 - 40</option>
						                </select>
						                <select id="select02" class="inline span2">
						                	<option>-- Centre Location</option>
						                	<option>Manchester</option>
							                <option>Sheffield</option>
						                	<option>Nottingham</option>
						                	<option>Newcastle</option>
						                </select>
						                <select id="select03" class="inline span2">
						                	<option>-- Gender</option>
						                	<option>Male</option>
							                <option>Female</option>
						                	<option>Both</option>
						                </select>
					            	</div>
					            </div>
				            	<div class="form-actions">
									<button type="submit" class="btn btn-primary">Update Results</button>
									<button class="btn">Clear Filter</button>
								</div>	
						  </fieldset>
						</form>
					</div><!-- /#filter-block -->

					<div class="pagination-block clearfix">
						<span class="page-amount pull-left">Showing 1-10 of 34 Questions</span>
						<div class="pagination pull-right">
							<ul>
								<li>
									<a href="#"><i class="icon-chevron-left"></i></a>
								</li>
								<li>
									<a href="#"><i class="icon-chevron-right"></i></a>
								</li>
							</ul>
						</div><!-- /pagination -->
					</div>
					
					<!-- CONTENT START -->
					
					<h3 class="report-title">Visit 1</h3>
					
					<table class="table table-condensed table-bordered table-report">
						<thead>
							<tr class="report-q-title">
								<!-- Colspan should change for how many options there are -->
								<th colspan="8">1. Question title</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th>&nbsp;</th>
								<th>Option 1</th>
								<th>option 2</th>
								<th>Option 3</th>
								<th>Option 4</th>
								<th>N/A</th>
								<th>Rating<br>Average</th>
								<th>Response<br>Count</th>
							</tr>
							<tr>
								<td>hard</td>
								<td>0.0&#37; (0)</td>
								<td>0.0&#37; (0)</td>
								<td>0.0&#37; (0)</td>
								<td>0.0&#37; (0)</td>
								<td>0.0&#37; (0)</td>
								<td>0.00</td>
								<td>0</td>
							</tr>
							<tr>
								<td>medium</td>
								<td>0.0&#37; (0)</td>
								<td>0.0&#37; (0)</td>
								<td>0.0&#37; (0)</td>
								<td>0.0&#37; (0)</td>
								<td>0.0&#37; (0)</td>
								<td>0.00</td>
								<td>0</td>
							</tr>
							<tr>
								<td>average</td>
								<td>0.0&#37; (0)</td>
								<td>0.0&#37; (0)</td>
								<td>0.0&#37; (0)</td>
								<td>0.0&#37; (0)</td>
								<td>0.0&#37; (0)</td>
								<td>0.00</td>
								<td>0</td>
							</tr>
							<tr>
								<td>soft</td>
								<td>0.0&#37; (0)</td>
								<td>0.0&#37; (0)</td>
								<td>0.0&#37; (0)</td>
								<td>0.0&#37; (0)</td>
								<td>0.0&#37; (0)</td>
								<td>0.00</td>
								<td>0</td>
							</tr>
						</tbody>
						<tfoot>
							<!-- Colspan should change for how many options there are -->
							<tr>
								<th colspan="7">answered question</th>
								<td><b>0</b></td>
							</tr>
							<tr>
								<th colspan="7">skipped question</th>
								<td><b>0</b></td>
							</tr>
						</tfoot>
					</table><!-- / Question 1 -->
					
					<table class="table table-condensed table-bordered table-report">
						<thead>
							<tr class="report-q-title">
								<!-- Colspan should change for how many options there are -->
								<th colspan="3">2. Question title</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th>&nbsp;</th>
								<th>Response<br>Percentage</th>
								<th>Response<br>Count</th>
							</tr>
							<tr>
								<td>Yes</td>
								<td>67.00&#37;</td>
								<td>7</td>
							</tr>
							<tr>
								<td>No</td>
								<td>33.00&#37;</td>
								<td>3</td>
							</tr>
							<tr>
								<td>Other</td>
								<td>0.00</td>
								<td>0</td>
							</tr>
						</tbody>
						<tfoot>
							<!-- Colspan should change for how many options there are -->
							<tr>
								<th colspan="2">answered question</th>
								<td><b>10</b></td>
							</tr>
							<tr>
								<th colspan="2">skipped question</th>
								<td><b>0</b></td>
							</tr>
						</tfoot>
					</table><!-- / Question 2 -->
					
					<h3 class="report-title">Visit 2</h3>
					
					<table class="table table-condensed table-bordered table-report">
						<thead>
							<tr class="report-q-title">
								<!-- Colspan should change for how many options there are -->
								<th colspan="3">3. Question title</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th>&nbsp;</th>
								<th>Response<br>Percentage</th>
								<th>Response<br>Count</th>
							</tr>
							<tr>
								<td>Yes</td>
								<td>67.00&#37;</td>
								<td>7</td>
							</tr>
							<tr>
								<td>No</td>
								<td>33.00&#37;</td>
								<td>3</td>
							</tr>
							<tr>
								<td>Other</td>
								<td>0.00</td>
								<td>0</td>
							</tr>
						</tbody>
						<tfoot>
							<!-- Colspan should change for how many options there are -->
							<tr>
								<th colspan="2">answered question</th>
								<td><b>10</b></td>
							</tr>
							<tr>
								<th colspan="2">skipped question</th>
								<td><b>0</b></td>
							</tr>
						</tfoot>
					</table><!-- / Question 3 -->
					
					<!-- CONTENT FINISH -->
					
					<div class="pagination-block clearfix">
						<span class="page-amount pull-left">Showing 1-10 of 34 Questions</span>
						<div class="pagination pull-right">
							<ul>
								<li>
									<a href="#"><i class="icon-chevron-left"></i></a>
								</li>
								<li>
									<a href="#"><i class="icon-chevron-right"></i></a>
								</li>
							</ul>
						</div><!-- /pagination -->
					</div>
				  	
				  	<div class="button-actions clearfix">
						<a class="btn btn-primary" href="#"><i class="icon-plus icon-white"></i> Add Patient</a>
					</div>
					
				</div><!-- /.widget-content -->
			</div><!-- /.widget -->
					
		</div><!-- /.span9 -->
	</div><!-- /.row -->
		
</div><!-- /.container -->

<?php include '../includes/footer.php'; ?>