<?php
	class PagesController {
		public function home() {
			$first_name = 'Anderson';
			$last_name = 'Brantes';

			require_once('views/pages/home.php');
		}

		public function error() {
			require_once('views/pages/error.php');
		}
	}
?>