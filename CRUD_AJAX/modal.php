<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" id="name" class="form-control">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" id="email" class="form-control">
            </div>
            <div class="form-group mt-2">
                <label>Gender</label>
                <br>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio"  name="gender" value="Male">
                  <label class="form-check-label">Male</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="gender"  value="Female">
                  <label class="form-check-label">Female</label>
                </div>
            </div>
            <div class="form-group mt-2">
                <label>Hobby</label>
                <br>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox"  name="hobby" value="Cricket">
                  <label class="form-check-label">Cricket</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="hobby"  value="Football">
                  <label class="form-check-label">Football</label>
                </div>
            </div>
            <div class="form-group">
                <label>City</label>
                <select name="city" id="city" class="form-control">
                    <option value="">Select</option>
                    <option value="Vadodara">Vadodara</option>
                    <option value="Surat">Surat</option>
                    <option value="Patna">Patna</option>
                    <option value="Nalanda">Nalanda</option>
                </select>
            </div>
            <div class="form-group mt-2">
                <input type="submit" name="submit" class="btn btn-primary addNewUser">
            </div>
            
        </form>
      </div>
    </div>
  </div>
</div>