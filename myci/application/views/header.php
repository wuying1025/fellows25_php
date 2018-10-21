<h1>
    欢迎:
    <?php
        $user = $this->session->userdata('user');
        echo $user->name
    ?>
</h1>