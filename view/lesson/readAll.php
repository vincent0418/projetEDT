<aside>
	<div>
		<?php
		require File::build_path(array("view", static::$object, "groupList.php"));
		?>
	</div>
	<div>
		<?php
		require File::build_path(array("view", static::$object, "create.php"));
		?>
	</div>
</aside>

<article>
	<?php
		require File::build_path(array("view", static::$object, "read.php"));
	?>
</article>
