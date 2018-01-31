<div class="container">
    <?php 
    $userName = $_POST['username'];
    $password = $_POST['password'];
    $secu = new security();
    echo $secu->kenEncrypt($userName,$secu->encrypKey());
    echo '<br>';
    echo $secu->kenHashword($password,$secu->passwordSalt());
    ?>
    <div class="admin_login_form">
        <div class="admin_login_form_wrapper">
            <?php if (Session::hasFlash()) { ?><div class="Msgalert"><?php Session::flash(); ?></div><?php } ?>
            <h1 class="admin_login_form_header">Login <i class="fa fa-lock"></i></h1>
            <form action="" method="post" enctype="multipart/form-data">
                <input type="text" placeholder="Username " name="username" value="<?php echo $_POST['username']; ?>" class="username" id="username">
                <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" class="password" id="password">
                <input type="password" placeholder="Confirm Password" name="con_pass" value="<?php echo $_POST['con_pass']; ?>" class="con_pass" id="con_pass">
                <br>
                <input type="submit" value="Login" name="LoginBtn" class="loginBtn" id="loginBtn">
                <input type="reset" value="Cancel" class="loginBtn" >
            </form>
        </div>
    </div>
</div>