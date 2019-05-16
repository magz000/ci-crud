<div class="container">

    <br>
    <h3>Create User</h3>
    <br>

    <?php
    $this->load->helper('form');

    echo form_open('user/update/'. $id);
    ?>

    <div class="form-group">
        <label for="first_name" class="col-sm-4 col-form-label"> First Name </label>

        <div class="col-md-6">
            <input id="first_name" type="first_name" class="form-control" name="first_name" value="<?php echo $user->first_name; ?>" required autofocus>
        </div>
    </div>

    <div class="form-group">
        <label for="last_name" class="col-sm-4 col-form-label"> Last Name </label>

        <div class="col-md-6">
            <input id="last_name" type="last_name" class="form-control" name="last_name" value="<?php echo $user->last_name; ?>"  required>
        </div>
    </div>

    <div class="form-group">
        <label for="contact_number" class="col-sm-4 col-form-label"> Contact Number </label>

        <div class="col-md-6">
            <input id="contact_number" type="contact_number" class="form-control" name="contact_number"  value="<?php echo $user->contact_number; ?>"  required>
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-6">
            <button type="submit" class="btn btn-success">Save</button>
        </div>
    </div>

    <?php
    echo form_close();
    ?>
</div>
