<?php if(count($reports) == 0): ?>
	<p>No reports.</p>
<?php else: ?>
	<table>
		<thead>
			<tr>
				<th>Title</th>
				<th>Agreement Start Date</th>
				<th>Agreement End Date</th>
				<th>Message</th>
				<th>Type</th>
				<th>Renter Id</th>
				<th>Company Id</th>
				<th>Status</th>
				<th></th>
			</tr>
		</thead>

		<tbody>
			<?php foreach($reports as $report): ?>
				<tr>
					<td><?php echo $report->title; ?></td>
					<td><?php echo $report->agreement_start_date; ?></td>
					<td><?php echo $report->agreement_end_date; ?></td>
					<td><?php echo $report->message; ?></td>
					<td><?php echo $report->type; ?></td>
					<td><?php echo $report->renter_id; ?></td>
					<td><?php echo $report->company_id; ?></td>
					<td><?php echo $report->status; ?></td>
					<td>
						<a href="<?php echo URL::to('reports/view/'.$report->id); ?>">View</a>
						<a href="<?php echo URL::to('reports/edit/'.$report->id); ?>">Edit</a>
						<a href="<?php echo URL::to('reports/delete/'.$report->id); ?>" onclick="return confirm('Are you sure?')">Delete</a>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
<?php endif; ?>

<p><a class="btn success" href="<?php echo URL::to('reports/create'); ?>">Create new Report</a></p>