@extends ('layouts.admin')
@section ('content')

<div id="wrapper">
	<div class="main-content">
        <h1 class="page-title">CHANGE PASSWORD</h1>
		<div class="row small-spacing">
			<div class="col-12">
				<div class="box-content">
					<form data-toggle="validator"  method="post" action="{{ route('change.password') }}" enctype="multipart/form-data">
					
						<div class="form-group">
							<div class="row">
								<div class="form-group col-md-12">
                                    <label for="inputPassword" class="control-label">Current Password</label>
									<input type="password" data-minlength="8" class="form-control" id="inputPassword" name="old_password"  placeholder="Password">
									<div class="help-block">Minimum of 8 characters</div>
								</div>
                                
                            </div>
                            
                            <div class="row">
                                
								<div class="form-group col-md-6">
                                    <label for="inputPassword" class="control-label">New Password</label>
									<input type="password" data-minlength="8" class="form-control" name="new_password" id="inputPassword" placeholder="Password">
								</div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword" class="control-label">Confirm Password</label>
									<input type="password" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" name="confirm_password" data-match-error="Whoops, these don't match" placeholder="Confirm">
									<div class="help-block with-errors"></div>
								</div>
							</div>
                        
						</div>
						
						<div class="form-group">
							<button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
						</div>
					</form>
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-12 -->
		</div>
		<!-- /.row small-spacing -->		
	</div>
	<!-- /.main-content -->
</div><!--/#wrapper -->


    @endsection
