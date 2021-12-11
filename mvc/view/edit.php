<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">


</head>
<body>
<div class="container">
    <form method="post" id="myForm">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" id="name" class="form-control" value="<?php echo $result->name; ?>">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" id="email" class="form-control" value="<?php echo $result->email; ?>">
        </div>
        <div class="form-group mt-2">
            <label>Gender</label>
            <br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio"  name="gender" value="Male"
                        <?php echo ($result->gender=='Male' ? 'checked': '' ); ?>>
                <label class="form-check-label">Male</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender"  value="Female"
                    <?php echo ($result->gender=='Female' ? 'checked': '' ); ?>>
                <label class="form-check-label">Female</label>
            </div>
        </div>
        <div class="form-group mt-2">
            <label>Hobby</label>
            <br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox"  name="hobby[]" value="Cricket"
                    <?php
                        if (in_array("Cricket",explode(",", $result->hobby))) echo "checked";
                    ?>>
                <label class="form-check-label">Cricket</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="hobby[]"  value="Football"
                    <?php
                    if (in_array("Football",explode(",", $result->hobby))) echo "checked";
                    ?>
                >
                <label class="form-check-label">Football</label>
            </div>
        </div>
        <div class="form-group">
            <label>City</label>
            <select name="city" id="city" class="form-control">
                <option value="">Select</option>
                <option value="Vadodara" <?php echo ($result->city=='Vadodara' ? 'selected' : ''); ?>>Vadodara</option>
                <option value="Surat" <?php echo ($result->city=='Surat' ? 'selected' : ''); ?>>Surat</option>
                <option value="Patna" <?php echo ($result->city=='Patna' ? 'selected' : ''); ?>>Patna</option>
                <option value="Nalanda" <?php echo ($result->city=='Nalanda' ? 'selected' : ''); ?>>Nalanda</option>
            </select>
        </div>
        <div class="form-group mt-2">
            <input type="submit" name="submit" class="btn btn-primary addNewUser">
        </div>

    </form>
</div>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
-->
</body>
</html>