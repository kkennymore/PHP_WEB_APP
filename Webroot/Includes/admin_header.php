<div class="headerContainer" style="background: #000000;">
    <div class="container">
        <header>
            <ul style="border: none;">
                <li><a class="logo" style="background: #000000; border: none;" href="<?php if (urlArrayPos(1)) { echo '/' . urlArrayPos(1); } else { echo '/en'; }?>/home/"><?= Config::get('site_name') ?></a></li>
                <?php $menus = new Menu();
                if (isset($_SESSION['admin_username']) && isset($_SESSION['admin_pass'])) { ?>
                <?php  foreach ($menus->adminMenu() as $menu){ ?>
                <li><a  <?php if(urlArrayPos(2) === $menu['Link']){echo 'class="adminNavActive"';}?> title="<?php echo $menu['Label']; ?>" href="/<?php echo 'admin/'.$menu['Link'];?>/"><?php echo $menu['Label']; ?></a></li>
                <?php } ?>
                <div class="welAndLastlogWrapper">
                    <h2 class="welcome">Welcome <?php echo $_SESSION['admin_name'];?> <i class="fa fa-rocket"></i> You Logged in as <?php echo $_SESSION['admin_role'];?></h2>
                    <h3 class="lastLog">Last Logged in on <?php echo date('d M Y | Time: h:i:s a',$_SESSION['admin_last_logged_in']);?></h3>
                </div>
                <div class="admin_logout">
                    <a href="/users/admin_logout/">Logout <i class="fa fa-sign-out"></i></a>
                </div>
                <div class="adminTimeDisplay">
                    <script>autoPageLoad('.adminTimeDisplay', '/Webroot/Includes/time.php', 1000)</script>
                </div>
                
                <?php } ?>
            </ul>
        </header>

    </div>
</div>