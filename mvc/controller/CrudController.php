<?php 
	include_once 'model/CrudModel.php';
	class CrudController extends CrudModel
	{
		
		public function __construct() {
			parent::__construct();
			
			if(isset($_SERVER['PATH_INFO'])) {

				switch ($_SERVER['PATH_INFO']) {
					case '/create':

                        if (isset($_POST['submit'])) {

                            $data = $_POST;
                            $result = $this->insertData($data,'crud_ajax');
                            if($result['status']) {
                               header("Location: http://localhost/Lecture/mvc/");
                            }
                        }

						include_once 'view/create.php';
						break;

                    case '/delete':
                        if(isset($_GET['id'])) {
                            $result = $this->deleteDataById($_GET['id'],'crud_ajax');
                            if($result['status']) {
                                header("Location: http://localhost/Lecture/mvc/");
                            }
                        }
                    case '/edit':
                        if(isset($_GET['id'])) {
                            $result = $this->getDataById($_GET['id'],'crud_ajax');

                            include_once 'view/edit.php';
                        }
//					default:
//						include_once 'view/404.php';
//						break;
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