<img class="width-100" src="http://www.technobuffalo.com/wp-content/uploads/2014/02/Candy-Crush-Map.jpg" />
<p>Hello, Jesse!</p>
<p>
	<strong>Users Registered</strong>
	<ul>
		<?php foreach($users as $user) : ?>
			<li><?php echo $user['username'] ?> </li>
		<?php endforeach; ?>
	</ul>
</p>