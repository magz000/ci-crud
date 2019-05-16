<div class="container">
    <br>
    <a class="btn btn-success float-right" href="<?php echo base_url()?>index.php/user/create">Add User</a>
    <h3>List of Users</h3>
    <br>

    <div class="row">
        <?php
        foreach($users as $user) {
            $data['user'] = $user;
            $this->load->view('users/card_item', $data);
        }
        ?>
    </div>
</div>

