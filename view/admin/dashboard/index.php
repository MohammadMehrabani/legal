<?php //print_r_debug_die($data['all']) ?>
			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header page-header-default">
					<div class="page-header-content">
						<div class="page-title">
							<h4><i class="icon-arrow-right6 position-left"></i> <span class="text-semibold">Datatables</span> - Data Sources</h4>
						</div>

						<div class="heading-elements">
							<div class="heading-btn-group">
								<a href="#" class="btn btn-link btn-float text-size-small has-text"><i class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
								<a href="#" class="btn btn-link btn-float text-size-small has-text"><i class="icon-calculator text-primary"></i> <span>Invoices</span></a>
								<a href="#" class="btn btn-link btn-float text-size-small has-text"><i class="icon-calendar5 text-primary"></i> <span>Schedule</span></a>
							</div>
						</div>
					</div>

					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
							<li><a href="datatable_data_sources.html">Datatables</a></li>
							<li class="active">Data sources</li>
						</ul>

						<ul class="breadcrumb-elements">
							<li><a href="#"><i class="icon-comment-discussion position-left"></i> Support</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="icon-gear position-left"></i>
									Settings
									<span class="caret"></span>
								</a>

								<ul class="dropdown-menu dropdown-menu-right">
									<li><a href="#"><i class="icon-user-lock"></i> Account security</a></li>
									<li><a href="#"><i class="icon-statistics"></i> Analytics</a></li>
									<li><a href="#"><i class="icon-accessibility"></i> Accessibility</a></li>
									<li class="divider"></li>
									<li><a href="#"><i class="icon-gear"></i> All settings</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">

					<!-- HTML sourced data -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">HTML (DOM) sourced data</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

						<div class="panel-body">
							Basic example of a datatable with <code>HTML (DOM)</code> sourced data. The foundation for DataTables is progressive enhancement, so it is very adept at reading table information directly from the <code>DOM</code>. This example shows how easy it is to add searching, ordering and paging to your HTML table by simply running DataTables with basic configuration on it.
						</div>

						<table class="table datatable-html">
							<thead>
								<tr>
					                <th>Name</th>
					                <th>Position</th>
					                <th>Age</th>
					                <th>Start date</th>
					                <th>Salary</th>
					                <th class="text-center">Actions</th>
					            </tr>
							</thead>
							<tbody>
							<?php foreach ($data['all'] as $value) {
						
							 ?>
								<tr>
					                <td><?= $value['user_id'] ?></td>
					                <td><?= $value['username'] ?></td>
					                <td><?= $value['first_name'] ?></td>
					                <td><?= $value['first_name'] ?></td>
					                <td><?= $value['last_name'] ?></td>
					                
					               
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
													<i class="icon-menu9"></i>
												</a>

												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
													<li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
													<li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
												</ul>
											</li>
										</ul>
									</td>
					            </tr>
		            		<?php } ?>
							</tbody>
						</table>
					</div>
					<!-- /HTML sourced data -->

					