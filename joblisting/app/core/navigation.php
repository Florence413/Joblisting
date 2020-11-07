<nav class="navbar navbar-default desktop-menu logo-left">
    <div class="container-fluid navbar-inner">
        <div class="navbar-logo">
            <a href="index" class="logo-link d-flex align-items-center" data-aos="zoom-in"
               data-aos-delay="1000" data-aos-easing="ease-in-out" data-aos-duration="700">
                <img src="assets/logos/lightlogo.jpg" alt="" class="logo-img logo-light">
                <img src="assets/logos/lightlogo.jpg" alt="" class="logo-img logo-dark">
            </a>
        </div>
        <div class="navbar-menu">
            <ul class="navbar-menu-list">
                
                <?php
                if($user->is_loggedin()!="") { ?>
                <?php
                if ($userRow['accounttype'] == 'writer') {
                    ?>
                    <li class="menu-primary-item menu-item-has-children">
                        <a href="home" class="mobile-menu-toggle ">Home</a>
                    </li>
                    <?php
                }
                ?>
                <li class="menu-primary-item menu-item-has-children">
                    <a href="account" class="mobile-menu-toggle">Account</a>
                </li>
                <?php }else {?>
                <?php } ?> 
                <li class="menu-primary-item menu-item-has-children">
                    <a href="support" class="mobile-menu-toggle">Support</a>
                </li>
             
                <?php
                if($user->is_loggedin()!="") { ?>
                <li class="menu-primary-item menu-item-has-children">
                    <a href="logout.php?logout=true" class="mobile-menu-toggle">Logout</a>
                </li>
                <?php }else {?>
                <li class="menu-primary-item menu-item-has-children">
                    <a href="login" class="mobile-menu-toggle">Login</a>
                </li>
                <?php } ?>                            

            </ul>

            <div class="navbar-search align-items-center justify-content-center">
                
                
<?php
    $stmt = $auth_user->runQuery("SELECT * FROM users  WHERE user_id='".$userRow['user_id']."' ");
    $stmt->execute(array());
    $users=$stmt->fetchAll(PDO::FETCH_OBJ);
    foreach ($users as $user) {
        if ($user->accounttype == "writer") {
            ?>
                <h2 style="color:#fff;">$ <?php echo number_format($userRow['wallet'], 2); ?></h2>
            <?php
        }
    }
?>  
            </div>
        </div>
        <button class="hamburger justify-content-center align-items-center hamburger--spin" type="button">
            <span class="hamburger-box">
              <span class="hamburger-inner"></span>
            </span>
        </button>
    </div>
</nav>