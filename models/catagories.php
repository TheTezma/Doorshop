<?php

class Catagories {

	public static function all() {
      	$db = Db::getInstance();
      	$req = $db->query('SELECT * FROM categories ORDER BY name DESC');

      	foreach($req as $catagories) {
      		?>
      		<li ng-bind="<?= $catagories['id'] ?>">
      			<a href="/Doorshop/catagory/<?= $catagories['id'] ?>">
      				<?= $catagories['name'] ?>
      			</a>
      		</li>
      		<?php
      	}

	}

}

?>