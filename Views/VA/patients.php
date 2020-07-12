<?php 
	include"header.php";
 ?>

<div class="container-fluid">

	<div class="card">
		<div class="card-header">
			<h2>All Patients</h2>
		</div>

		<div class="card-body">
			<table class="table table-bordered">
				<tr>
					<th>ID</th>
					<th>DATE</th>
					<th>FIRST NAME</th>
					<th>MIDDLE NAME</th>
					<th>LAST NAME</th>
					<th>GENDER</th>
					<th>ADDRESS</th>
					<th>CONTACT</th>
					<th>TREATMENT</th>
					<th>AMOUNT PAID</th>
					<th>ACTION</th>
				</tr>

				<?php foreach ($patients as $patient): ?>
					<tr>
						<td><?= $patient->id; ?></td>
						<td><?= $patient->regDate; ?></td>
						<td><?= $patient->fname; ?></td>
						<td><?= $patient->mname; ?></td>
						<td><?= $patient->lname; ?></td>
						<td><?= $patient->gender; ?></td>
						<td><?= $patient->address; ?></td>
						<td><?= $patient->contact; ?></td>
						<td><?= $patient->treatment; ?></td>
						<td><?= $patient->cost; ?></td>
						<td>
							<a href="/pedit?id=<?= $patient->id; ?>" class="btn btn-info">Edit</a>
							<a href="/pdelete?id=<?= $patient->id; ?>" class="btn btn-danger">Delete</a>
							
						</td>
					</tr>

				<?php endforeach ?>
			</table>
		</div>
	</div>

</div>