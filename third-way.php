<?php

	$loggedIn = true;
	//this is the third way
	
?>
<div>
	<?php
		if ($loggedIn) {
	?>
		<h1>Welcome User</h1>
	<?php
		} else {
	?>
		<h1>Welcome Admin</h1>
	<?php
		}
	?>
</div>