<?php
	include('head.php');
	?>
<div id="main-wrapper" class="wrapper">
	<?php
	include('main-menu.php');
	?>
			<div class="right-wraper fnt-12">
					
							<!--WELCOME TO SHIPPING INSTRUCTION WEB-->
						

						<div class="panel-wrapper">
							<div class="panel-wrapper panel panel-default">
						<?php foreach ($data_account as $view_data) {
									?>
							<div class="title-panel panel-heading">
								<h4>EDIT ACCOUNT</h4></span>
							</div>
							<div class="panel-body">
								<table class="table table-striped table-hover">
									<form method="POST" action="<?php echo base_url('User/update_account');?>" class="form" role="form">				
									<tr>

										<td >First Name </td>
										<td> <input type="text" disabled name="first_name" class="form-control" value="<?php echo $view_data->first_name;?>"></td>
										
									</tr>
									<tr>

										<td >Last Name </td>
										<td><input type="text" disabled name="last_name" class="form-control"  value="<?php echo $view_data->last_name;?>"></td>
										
									</tr>
									<tr>

										<td >Company Name </td>
										<td><input type="text" disabled class="form-control"  value="<?php echo $view_data->company;?>"></td>
										
									</tr>
									<tr>

										<td>Email </td>
										<td><input type="email" disabled name="email" class="form-control"  value="<?php echo $view_data->email;?>"></td>
										
									</tr>
									<tr>

										<td>Username </td>
										<td><input type="text"  name="username" disabled class="form-control"  value="<?php echo $view_data->username;?>"></td>
										
									</tr>
									<tr>

										<td>Password </td>
										<td><input type="password" disabled name="password" class="form-control"  value="<?php echo $view_data->password;?>"></td>
										
									</tr>
									<tr>
									<td colspan="2"><a href="<?php echo base_url('User/edit_account'); echo '/'; echo $user_id;?>" class="btn btn-default" >Edit Account </a></td>
									</tr>
									</form>

									

									<?php
								}
								?>
								</table>


							</div>
								


							</div>

							

							</div>
				</div>
				</div>


				</div>
			
		</div>

		<?php
	include('footer.php');
	?>