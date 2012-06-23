<?php if(count($companies) == 0): ?>
	<p>No companies.</p>
<?php else: ?>
	<table>
		<thead>
			<tr>
				<th>Name</th>
				<th>Address</th>
				<th>City</th>
				<th>State</th>
				<th>Zipcode</th>
				<th>Phone</th>
				<th>Email</th>
				<th>Fax</th>
				<th>Date Joined</th>
				<th>Contact Name</th>
				<th></th>
			</tr>
		</thead>

		<tbody>
			<?php foreach($companies as $company): ?>
				<tr>
					<td><?php echo $company->name; ?></td>
					<td><?php echo $company->address; ?></td>
					<td><?php echo $company->city; ?></td>
					<td><?php echo $company->state; ?></td>
					<td><?php echo $company->zipcode; ?></td>
					<td><?php echo $company->phone; ?></td>
					<td><?php echo $company->email; ?></td>
					<td><?php echo $company->fax; ?></td>
					<td><?php echo $company->date_joined; ?></td>
					<td><?php echo $company->contact_name; ?></td>
					<td>
						<a href="<?php echo URL::to('admin/companies/view/'.$company->id); ?>">View</a>
						<a href="<?php echo URL::to('admin/companies/edit/'.$company->id); ?>">Edit</a>
						<a href="<?php echo URL::to('admin/companies/delete/'.$company->id); ?>" onclick="return confirm('Are you sure?')">Delete</a>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
<?php endif; ?>

<p><a class="btn success" href="<?php echo URL::to('admin/companies/create'); ?>">Create new Company</a></p>
