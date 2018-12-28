<aside>
	<div>
		<?php
		require File::build_path(array("view", static::$object, "groupList.php"));
		?>
	</div>
	<div>
		<?php
		require File::build_path(array("view", static::$object, "create.php"));
		
		if($tab_newLesson) {
			$size = sizeof($tab_newLesson);
			if($size > 1) {		// si il y a plus d'un cours non attribue a une journee
				for($i = 0; $i < $size - 1; $i++)	// boucle jusqu'à l'avant dernier cours
					ModelLesson::delete($tab_newLesson[$i]['idLesson']);	// on supprime le cours
			}
			$duration = $tab_newLesson[$size-1]['duration'] * 7;
			echo "<div id=\"{$tab_newLesson[$size-1]['idLesson']}\" style=\"height:{$duration}vh\" draggable=\"true\" ondragstart=\"drag(event)\">
					  <p>{$tab_newLesson[$size-1]['nameSubject']}</p>
					  <p>{$tab_newLesson[$size-1]['idRoom']}</p>
					  <p>{$tab_newLesson[$size-1]['nameTeacher']} {$tab_newLesson[$size-1]['firstNameTeacher']}</p>
				  </div>";
		}
		?>
	</div>
</aside>

<article>
	<?php
		require File::build_path(array("view", static::$object, "read.php"));
	?>
</article>
