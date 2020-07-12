<?php 
	include"header.php";
	
 ?>


<div class="container">
	<div class="row text-center my-4">
		<div class="col-12">
			<h1 style="font-weight: bolder; font-size: 50px; color: #03A13B">Update Patient Details</h1>
		</div></div>

		<form action="/pedit" method="post">
			<div class="form-row">
				<div class="input-group form-group col-4">
					<div class="input-group-prepend">
						<span class="input-group-text border-primary"><i class="fa fa-calendar"></i></span>
					</div>
					<input value="<?= $patient->regDate ?>" class="form-control border-primary" type="date" name="regDate" required>
				</div>
			</div>

			<div class="form-row my-4">
				<div class="input-group form-group col-4">
					<div class="input-group-prepend">
						<span class="input-group-text border-primary"><i class="fa fa-user"></i></span>
					</div>
					<input value="<?= $patient->fname ?>" class="form-control border-primary" type="text" name="fname" placeholder="First Name" required>
				</div>

				<div class="input-group form-group col-4">
					<div class="input-group-prepend">
						<span class="input-group-text border-primary"><i class="fa fa-user"></i></span>
					</div>
					<input value="<?= $patient->mname ?>" class="form-control border-primary" type="text" name="mname" placeholder="Middle Name" required>
				</div>

				<div class="input-group form-group col-4">
					<div class="input-group-prepend">
						<span class="input-group-text border-primary"><i class="fa fa-user"></i></span>
					</div>
					<input value="<?= $patient->lname ?>" class="form-control border-primary" type="text" name="lname" placeholder="Last Name" required>
				</div>
			</div>

			<div class="form-row my-4">
				<div class="input-group form-group col-4">
					<div class="input-group-prepend">
						<span class="input-group-text border-primary"><i class="fa fa-transgender"></i></span>
					</div>
					<input  value="<?= $patient->gender ?>" class="form-control border-primary" type="text" name="gender" required>
				</div>

				<div class="input-group form-group col-4">
					<div class="input-group-prepend">
						<span class="input-group-text border-primary"><i class="fa fa-address-card"></i></span>
					</div>
					<input value="<?= $patient->address ?>" class="form-control border-primary" type="text" name="address" placeholder="Address" required>
				</div>

				<div class="input-group form-group col-4">
					<div class="input-group-prepend">
						<span class="input-group-text border-primary"><i class="fa fa-phone"></i></span>
					</div>
					<input value="<?= $patient->contact ?>" class="form-control border-primary" type="text" name="contact" placeholder="Contacts" required>
				</div>
			</div>

			<div class="form-row my-4">
				<div class="input-group form-group col-4">
					<div class="input-group-prepend">
						<span class="input-group-text border-primary"><i class="fa fa-ambulance"></i></span>
					</div>
					<input value="<?= $patient->treatment ?>" class="form-control border-primary" type="text" name="treatment" placeholder="treatment" required>
				</div>

				<div class=" input-group form-group col-4">
					<div class="input-group-prepend">
						<span class="input-group-text border-primary"><i class="fa fa-dollar-sign"></i></span>
					</div>
					<input value="<?= $patient->cost ?>" class="form-control border-primary" type="number" name="cost" placeholder="Cost" required>
				</div>
			</div>

			<div class="form-row text-center">
				<div class="form-group col-6">
					<a href="/admini" class="btn btn-danger w-75">Cancel</a>
				</div>

				<div class="form-group col-6">
					<button class="btn btn-success w-75" type="submit" name="submit">Submit</button>
				</div>
			</div>

			<div class="form-row text-center">
				<div class="col">
				<a href="/patients" class="btn btn-primary w-75">View Patients</a>
			</div>
			</div>

		</form>
		

</div>
</body>
</html>