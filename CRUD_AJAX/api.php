<?php
	header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json; charset=UTF-8");
	header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");
	header("Access-Control-Max-Age: 3600");
	header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

	include_once "config.php";

	if (isset($_GET['action']) && $_GET['action']=='GET_ALL_DATA') {
		
		$query = "SELECT * FROM `crud_ajax`";

		$result = mysqli_query($conn, $query);

		if($result->num_rows==0) {
			echo json_encode(['status'=>404, 'data' => "No Record Found"]);
		} else {
			$response = array();
			while($responsep[] = mysqli_fetch_object($result)) {}

			$finalData = array_filter($responsep);
			echo json_encode(['status'=>200, 'data' => $finalData]);
		}

	}

	if (isset($_POST['action']) && $_POST['action']=='INSERT_DATA') { 

		$query = "INSERT INTO `crud_ajax`(`name`, `email`, `gender`, `hobby`, `city`) VALUES ('".$_POST['data']['name']."','".$_POST['data']['email']."','".$_POST['data']['gender']."','". implode(",", $_POST['data']['hobby'])."','".$_POST['data']['city']."')";
		$result = mysqli_query($conn, $query);

		if ($result) {
			echo json_encode(['status'=>true]);
		} else {
			echo json_encode(['status'=>false]);
		}
	}

	if (isset($_POST['action']) && $_POST['action']=='DELETE_USER') { 

		$query = "DELETE FROM `crud_ajax` WHERE id = ".$_POST['data'];
		$result = mysqli_query($conn, $query);

		if ($result) {
			echo json_encode(['status'=>true]);
		} else {
			echo json_encode(['status'=>false]);
		}
	}

	if (isset($_POST['action']) && $_POST['action']=='EDIT_USER') { 

		$query = "SELECT * FROM `crud_ajax` WHERE id = ".$_POST['data'];
		$result = mysqli_query($conn, $query);

		$responsep = mysqli_fetch_object($result);


		$hobby = explode(",", $responsep->hobby);

		// echo "<pre>";

		// print_r($hobby);
		?>

			<!-- Modal -->
		<div class="modal fade" id="exampleModal_EDIT" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Add New User</h5>
		        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		      </div>
		      <div class="modal-body">
		        <form method="post" id="myForm">
		            <div class="form-group">
		                <label>Name</label>
		                <input type="text" name="name" id="name_e" class="form-control" value="<?php echo $responsep->name; ?>">
		            </div>
		            <div class="form-group">
		                <label>Email</label>
		                <input type="text" name="email" id="email_e" class="form-control" value="<?php echo $responsep->email; ?>">
		            </div>
		            <div class="form-group mt-2">
		                <label>Gender</label>
		                <br>
		                <div class="form-check form-check-inline">
		                  <input class="form-check-input" type="radio"  name="gender" value="Male" <?php echo ($responsep->gender=='Male'? 'checked' : '') ?>>
		                  <label class="form-check-label">Male</label>
		                </div>
		                <div class="form-check form-check-inline">
		                  <input class="form-check-input" type="radio" name="gender"  value="Female" <?php echo ($responsep->gender=='Female' ? 'checked' : '') ?>>
		                  <label class="form-check-label">Female</label>
		                </div>
		            </div>
		            <div class="form-group mt-2">
		                <label>Hobby</label>
		                <br>
		                <div class="form-check form-check-inline">
		                  <input class="form-check-input" type="checkbox"  name="hobby" value="Cricket" <?php echo (in_array("Cricket", $hobby)) ? 'checked' : '' ?>>
		                  <label class="form-check-label">Cricket</label>
		                </div>
		                <div class="form-check form-check-inline">
		                  <input class="form-check-input" type="checkbox" name="hobby"  value="Football" <?php echo (in_array("Football", $hobby)) ? 'checked' : '' ?>>
		                  <label class="form-check-label">Football</label>
		                </div>
		            </div>
		            <div class="form-group">
		                <label>City</label>
		                <select name="city" id="city_id" class="form-control">
		                    <option value="">Select</option>
		                    <option value="Vadodara" <?php echo ($responsep->city=='Vadodara' ? 'selected' : ''); ?>>Vadodara</option>
		                    <option value="Surat" <?php echo ($responsep->city=='Surat' ? 'selected' : ''); ?>>Surat</option>
		                    <option value="Patna"> <?php echo ($responsep->city=='Patna' ? 'selected' : ''); ?>Patna</option>
		                    <option value="Nalanda" <?php echo ($responsep->city=='Nalanda' ? 'selected' : ''); ?>>Nalanda</option>
		                </select>
		            </div>
		            <div class="form-group mt-2">
		                <input type="submit" name="submit" class="btn btn-primary updateUser">
		            </div>
		            
		        </form>
		      </div>
		    </div>
		  </div>
		</div>


		<?php

		//echo json_encode(['data' => $responsep]);
	}

	if (isset($_POST['action']) && $_POST['action']=='UPDATE_USER') { 

		$query = "UPDATE ";
		$result = mysqli_query($conn, $query);

		if ($result) {
			echo json_encode(['status'=>true]);
		} else {
			echo json_encode(['status'=>false]);
		}
	}
?>