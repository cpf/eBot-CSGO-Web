<?php

function tablePagination($pager, $url, $name = "page", $add = "") {
	if (strpos($url, '?')) {
		$char = '&';
	} else {
		$char = '?';
	}
	echo "<ul>";
	if ($pager->haveToPaginate()) {
		echo "<li>";
		echo "<a href=\"" . url_for($url . $char . "$name=" . $pager->getPreviousPage()) . "$add\">";
		echo "\t&lt; ";
		echo __("Prev");
		echo "</a>";
		echo "</li>";


		foreach ($pager->getLinks(10) as $page) {

			if ($page == $pager->getPage()) {
				echo "<li class=\"active\">";
				echo "<a href=\"#\">" . $page . "</a>";
			} else {
				echo "<li>";
				echo "<a href=\"" . url_for($url . $char . "$name=" . $page) . "$add\">";
				echo $page;
				echo "</a>";
			}
			echo "</li>";
		}

		echo "<li>";
		echo "<a href=\"" . url_for($url . $char . "$name=" . $pager->getNextPage()) . "$add\">";
		echo "\t";
		echo __("Next");
		echo " &gt;";
		echo "</a>";
		echo "</li>";
	}
	echo "</ul>";
}
?>

