<?php 
	include_once 'model/CrudModel.php';
	class CrudController extends CrudModel
	{
		
		public function __construct() {
			parent::__construct();
			
			if(isset($_SERVER['PATH_INFO'])) {

				switch ($_SERVER['PATH_INFO']) {
					case '/create':
						include_once 'view/create.php';
						break;
					
					default:
						include_once 'view/404.php';
						break;
				}

			} else {
				
				$allData = $this->getAllData('crud_ajax');
				
				include_once 'view/index.php';
			}	
			
		}

		public function test() {
			echo "string";
		}
	}

	$object = new CrudController();

	// echo "<pre>";

	// print_r($object);
?>