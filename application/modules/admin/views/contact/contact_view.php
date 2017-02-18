<form class="form-horizontal" action="<?php echo site_url('admin/contact'); ?>" method="post">

	<div class="row">

		<div class="col-md-12">

			<div class="box">

				<div class="box-title">

					<h3><i class="fa fa-bars"></i><?php echo lang_key("Contact Us") ?> </h3>

					<div class="box-tool">



						<a href="#" data-action="collapse"><i class="fa fa-chevron-up"></i></a>



						<a href="#" data-action="close"><i class="fa fa-times"></i></a>
					</div>

				</div>

				<div class="box-content">

					<?php echo $this->session->flashdata('msg'); ?>

					<input type="hidden" name="id" value="<?php echo !empty($contact->id)?$contact->id:''; ?>"/>

					<div class="form-group">



						<label class="col-sm-3 col-lg-2 control-label">
							<?php echo lang_key('Name'); ?>
						</label>


						<div class="col-sm-9 col-lg-10 controls">



							<input type="text" name="name" value="<?php echo !empty($contact->name)?$contact->name:''; ?>" placeholder="Name" class="form-control">



							<span class="help-inline">&nbsp;</span>



							<?php echo form_error('name'); ?>



						</div>



					</div>

					<div class="form-group">



						<label class="col-sm-3 col-lg-2 control-label">
							<?php echo lang_key('Phone No'); ?>
						</label>







						<div class="col-sm-9 col-lg-10 controls">



							<input type="text" name="ph" value="<?php echo !empty($contact->ph)?$contact->ph:''; ?>" placeholder="Phone No" class="form-control">



							<span class="help-inline">&nbsp;</span>



							<?php echo form_error('ph'); ?>



						</div>



					</div>

					<div class="form-group">



						<label class="col-sm-3 col-lg-2 control-label">
							<?php echo lang_key('email'); ?>
						</label>







						<div class="col-sm-9 col-lg-10 controls">



							<input type="email" name="email" value="<?php echo !empty($contact->email)?$contact->email:''; ?>" placeholder="Email" class="form-control">



							<span class="help-inline">&nbsp;</span>



							<?php echo form_error('email'); ?>



						</div>



					</div>

					<div class="form-group">



						<label class="col-sm-3 col-lg-2 control-label">
							<?php echo lang_key('Zip Code'); ?>
						</label>

						<div class="col-sm-9 col-lg-10 controls">



							<input type="text" name="zip_code" value="<?php echo !empty($contact->zip_code)?$contact->zip_code:''; ?>" placeholder="Zip Code" class="form-control">



							<span class="help-inline">&nbsp;</span>



							<?php echo form_error('zip_code'); ?>



						</div>



					</div>

					<div class="form-group">



						<label class="col-sm-3 col-lg-2 control-label">
							<?php echo lang_key('Address'); ?>
						</label>


						<div class="col-sm-9 col-lg-10 controls">



							<textarea name="address" placeholder="Address" class="form-control"><?php echo !empty($contact->address)?$contact->address:''; ?></textarea>



							<span class="help-inline">&nbsp;</span>



							<?php echo form_error('address'); ?>



						</div>



					</div>

					<div class="row">

						<div class="col-sm-9 col-lg-10 controls">



							<button class="btn btn-primary" type="submit"><i



								class="fa fa-check"></i><?php echo lang_key("Add") ?></button>



						</div>
					</div>
				</div>

			</div>

		</div>

	</div>

</form>

<br/>
<div class="row">



	<div class="col-md-12">



		<div class="box">



			<div class="box-title">



				<h3><i class="fa fa-bars"></i> All Contacts</h3>



				<div class="box-tool">



					<a href="#" data-action="collapse"><i class="fa fa-chevron-up"></i></a>





				</div>



			</div>



			<div class="box-content">



				<?php $this->load->helper('text');?>



				<?php echo $this->session->flashdata('msg');?>




				<div id="no-more-tables">



					<table class="table table-hover">



						<thead>



							<tr>



								<th class="numeric">#</th>



								<th class="numeric">Name</th>



								<th class="numeric">Phone No</th>



								<th class="numeric">Email</th>



								<th class="numeric">Actions</th>



							</tr>



						</thead>



						<tbody>



							<?php $i=1;foreach($contacts->result() as $row):?>



							<tr>



								<td data-title="#" class="numeric">
									<?php echo $i;?>
								</td>



								<td data-title="Name" class="numeric">
									<?php echo $row->name;?>
								</td>



								<td data-title="Phone No" class="numeric">
									<?php echo $row->ph;?>
								</td>



								<td data-title="Email" class="numeric">

									<?php echo $row->email;?>

								</td>



								<td data-title="Action" class="numeric">



									<a href="<?php echo site_url('admin/contact/edit/'.$row->id);?>"><i class="fa fa-edit"></i> Edit</a>&nbsp;|&nbsp;

									<a style="color:red" href="<?php echo site_url('admin/contact/delete/'.$row->id);?>"><i class="fa fa-trash-o"></i> Delete</a>



								</td>



							</tr>



							<?php $i++;endforeach;?>



						</tbody>



					</table>

				</div>


			</div>



		</div>



	</div>



</div>