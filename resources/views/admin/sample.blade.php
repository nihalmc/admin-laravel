@extends ('layouts.admin')
@section ('content')

<div class="modal fade" id="addTask" tabindex="-1" role="dialog" aria-labelledby="addTaskLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
		
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="addTaskLabel">Add Salesman</h4>
			</div>
			<form action="" method="post"  enctype="multipart/form-data">
				@csrf
			<div class="modal-body">
				<div class="row">
					<div class="col-lg-12">
						<div class="form-group">
							<label for="inputName">Salesman Name</label>
							<input type="text" class="form-control" name="name" id="name" placeholder="Salesman Name" >
						</div>
					</div>
					<div class="form-group col-lg-12">
						<label for="inputName" class="control-label">Email</label>
						<input type="email" class="form-control" name="email" id="email" placeholder="Email"   >
					</div>
					<div class="form-group col-lg-12">
						<label for="inputName" class="control-label">Mobile</label>
						<input type="text" class="form-control" id="phone" name="phone" placeholder="Mobile"  >
					</div>
					<div class="form-group col-lg-6">
						<label for="inputName" class="control-label">UserName</label>
						<input type="text" class="form-control" name="username" id="username" placeholder="UserName"  >
					</div>
					<div class="form-group col-lg-6">
						<label for="inputPassword" class="control-label">Password</label>
						<input type="password"  class="form-control" name="password" id="inputPassword" placeholder="Password">
					</div>
				
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default waves-effect waves-light" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary waves-effect waves-light">Add New</button>
			</div>
		
		</div>
	</form>
	</div>
</div>
<div id="wrapper">
	<div class="main-content">
		<h4 class="box-title">Salesman</h4>
		

		<div class="row small-spacing">
			<div class="col-12">
				
					<div class="box-content">
					
						<button type="button" class="btn btn-default waves-effect waves-light mb-3" data-toggle="modal" data-target="#addTask">+ Add New</button>
				
						
						<div class="dropdown js__drop_down">
							
							<a href="#" class="dropdown-icon glyphicon glyphicon-option-vertical js__drop_down_button"></a>
							
						</div>
						
						<!-- /.dropdown js__dropdown -->
						<table id="example" class="table table-striped table-bordered display" style="width:100%">
						<thead>
							<tr>
								<th>Salesman Name</th>
								<th>UserName</th>
								<th>Email</th>
								<th>Phone</th>
								<th>Actions</th>
								
							</tr>
						</thead>
						<tbody>
							
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td>
		<!-- edit -->
									<a data-toggle="modal" data-target="#editTask_" class="fa-hover waves-effect"><i class="fas fa-edit"></i></a>

<a data-toggle="modal" data-target="#deleteTask_" class="fa-hover waves-effect"><i class="fas fa-trash-alt"></i></a>
								</td>
							</tr>
						
							</tbody>
							</table>
							</div>
							<!-- /.main-content -->
							</div><!--/#wrapper -->
							
							</div>
							<!-- /.box-content -->
							</div>
							
							<!-- /.col-12 -->
						</div>
						<!-- /.row small-spacing -->	
							
					
						<div class="modal fade" id="editTask_" tabindex="-1" role="dialog" aria-labelledby="editTaskLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
								
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<h4 class="modal-title" id="addTaskLabel">Add Salesman</h4>
									</div>
									<form action="" method="post">
										@csrf
										@method('PUT')
									<div class="modal-body">
										<div class="row">
											<div class="col-lg-12">
												<div class="form-group">
													<label for="inputName">Salesman Name</label>
													<input type="text" class="form-control" name="name" id="name" placeholder="Salesman Name" value=""  >
												</div>
											</div>
											<div class="form-group col-lg-12">
												<label for="inputName" class="control-label">Email</label>
												<input type="email" class="form-control" name="email" id="email" placeholder="Email" value=""   >
											</div>
											<div class="form-group col-lg-12">
												<label for="inputName" class="control-label">Mobile</label>
												<input type="text" class="form-control" id="phone" name="phone" placeholder="Mobile" value=""  >
											</div>
											<div class="form-group col-lg-6">
												<label for="inputName" class="control-label">UserName</label>
												<input type="text" class="form-control" name="username" id="username" placeholder="UserName" value=""  >
											</div>
											<div class="form-group col-lg-6">
												<label for="inputPassword" class="control-label">Password</label>
												<input type="password"  class="form-control" name="password" id="inputPassword" placeholder="Password">
											</div>
										
										</div>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default waves-effect waves-light" data-dismiss="modal">Close</button>
										<button type="submit" class="btn btn-primary waves-effect waves-light">Save changes</button>
									</div>
								
								</div>
							</form>
							</div>
						</div>



<div class="modal fade" id="deleteTask_" tabindex="-1" role="dialog" aria-labelledby="deleteTaskLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
		
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="deleteTaskLabel">Add Salesman</h4>
			</div>
			<form action="" method="post">
				@csrf
				@method ('DELETE')
			<div class="modal-body">
				Delete   ?
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default waves-effect waves-light" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary waves-effect waves-light">Delete</button>
			</div>
		
		</div>
	</form>
	</div>
</div>



	

        @endsection
