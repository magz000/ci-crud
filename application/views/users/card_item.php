<div class="user col-md-6">
    <div class="card">
        <div class="card-body">
            <h5><?php echo $user->first_name .' '. $user->last_name; ?></h5>
            <p>Contact Number: <?php echo $user->contact_number; ?></p>

            <a class="btn btn-warning" href="<?php echo base_url() . 'index.php/user/edit/' . $user->id ; ?>">Edit</a>
            <a class="btn btn-danger" href="<?php echo base_url() . 'index.php/user/delete/' . $user->id ; ?>">Delete</a>

        </div>
    </div>
</div>