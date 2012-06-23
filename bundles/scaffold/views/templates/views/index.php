<?php echo '<?php'; ?> if(count($<?php echo $plural; ?>) == 0): ?>
	<p>No <?php echo str_replace('_', ' ', $plural); ?>.</p>
<?php echo '<?php else: ?>'.PHP_EOL; ?>
	<table>
		<thead>
			<tr>
<?php foreach($fields as $field => $type): ?>
				<th><?php echo ucwords(str_replace('_', ' ', $field)); ?></th>
<?php endforeach; ?>
				<th></th>
			</tr>
		</thead>

		<tbody>
			<?php echo '<?php'; ?> foreach($<?php echo $plural; ?> as $<?php echo $singular; ?>): ?>
				<tr>
<?php foreach($fields as $field => $type): ?>
<?php if($type != 'boolean'): ?>
					<td><?php echo '<?php'; ?> echo $<?php echo $singular; ?>-><?php echo $field; ?>; ?></td>
<?php else: ?>
					<td><?php echo '<?php'; ?> echo ($<?php echo $singular; ?>-><?php echo $field; ?>) ? 'True' : 'False'; ?></td>
<?php endif; ?>
<?php endforeach; ?>
					<td>
						<a href="<?php echo '<?php'; ?> echo URL::to('<?php echo $plural; ?>/view/'.$<?php echo $singular; ?>->id); ?>">View</a>
						<a href="<?php echo '<?php'; ?> echo URL::to('<?php echo $plural; ?>/edit/'.$<?php echo $singular; ?>->id); ?>">Edit</a>
						<a href="<?php echo '<?php'; ?> echo URL::to('<?php echo $plural; ?>/delete/'.$<?php echo $singular; ?>->id); ?>" onclick="return confirm('Are you sure?')">Delete</a>
					</td>
				</tr>
			<?php echo '<?php endforeach; ?>'.PHP_EOL; ?>
		</tbody>
	</table>
<?php echo '<?php endif; ?>'.PHP_EOL; ?>

<p><a class="btn success" href="<?php echo '<?php'; ?> echo URL::to('<?php echo $plural; ?>/create'); ?>">Create new <?php echo str_replace('_', ' ', $singular_class); ?></a></p>