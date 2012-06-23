<?php if(count($renters) == 0): ?>
	<p>No renters.</p>
<?php else: ?>
	<table>
		<thead>
			<tr>
				<th>Name</th>
				<th>Driver License Number</th>
				<th>Driver License State</th>
				<th>Date Of Birth</th>
				<th></th>
			</tr>
		</thead>

		<tbody>
			<?php foreach($renters as $renter): ?>
				<tr>
					<td><?php echo $renter->name; ?></td>
					<td><?php echo $renter->driver_license_number; ?></td>
					<td><?php echo $renter->driver_license_state; ?></td>
					<td><?php echo $renter->date_of_birth; ?></td>
					<td>
						<a href="<?php echo URL::to('renters/view/'.$renter->id); ?>">View</a>
						<a href="<?php echo URL::to('renters/edit/'.$renter->id); ?>">Edit</a>
						<a href="<?php echo URL::to('renters/delete/'.$renter->id); ?>" onclick="return confirm('Are you sure?')">Delete</a>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
<?php endif; ?>

<p><a class="btn success" href="<?php echo URL::to('renters/create'); ?>">Create new Renter</a></p>