<?php 
	
	include_once 'Model/CrudAjaxModel.php';

	class CrudAjaxController extends CrudAjaxModel
	{ 
		
		function __construct()
		{
			parent::__construct();

			if (isset($_SERVER['PATH_INFO'])) {
				
				switch ($_SERVER['PATH_INFO']) {
					case '/users':
						$result = $this->getAllData('crud_ajax');
						echo json_encode($result);
						break;

					case '/user':
						if (isset($_POST)) {
							echo json_encode($this->insertData($_POST['data'], 'crud_ajax'));
						}
						break;
					case '/delete':
						if (isset($_POST)) {
							echo json_encode($this->deleteDataById($_POST['data'], 'crud_ajax'));
						}
						break;

					case '/edit':
						if (isset($_POST)) {
							echo json_encode($this->getDataById($_POST['data'], 'crud_ajax'));
						}
					default:
						# code...
						break;
				}

			} else {
				include_once 'View/index.php';
			}
		}
	}

	$obj = new CrudAjaxController();
	
?>