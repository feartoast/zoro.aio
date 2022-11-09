<?php
$c = new CONTENT();
$c->pre_html( '', '', 'bootstrap/css/bootstrap-grid', 'icons,table,tabs,buttons,alerts,inputs,color', 'zoro', 'jquery', '' );
global $options;
global $is_light;
$logo_light = !empty( $options['logo_light'] ) ? $options['logo_light'] : APPURL.'apps/'.APPDIR.'/assets/images/logo_light.svg';
$logo_dark = !empty( $options['logo_dark'] ) ? $options['logo_dark'] : APPURL.'apps/'.APPDIR.'/assets/images/logo_dark.svg';
$logo = $is_light ? $logo_light : $logo_dark;
global $user;
$user = $_SESSION['user'] ?? [];
?>
<header>
    <div class="box_wrap">
    <div class="row gx-0">
        <div class="col-12 col-md-6">
            <a href="<?php echo APPURL; ?>">
                <?php render_image( $logo, APPNAME.' Logo', 'brand', 'div' ); ?>
            </a>
        </div>
        <div class="col-12 col-md-6 tar">
            <?php
            if( !user_logged_in() ) {
                echo '<a class="link" href="'.APPURL.'login">'.T('Log In').'</a>';
                echo '<a class="link high" href="'.APPURL.'signup">'.T('Sign Up').'</a>';
            } else {
                if( $user['type'] == 'admin' ) {
                    echo '<a class="link" href="'.APPURL.'admin">'.T('Dashboard').'</a>';
                } else if( $user['type'] == 'publisher' ) {
                    echo '<a class="link" href="'.APPURL.'publisher">'.T('Dashboard').'</a>';
                } else if( $user['type'] == 'advertiser' ) {
                    echo '<a class="link" href="'.APPURL.'advertiser">'.T('Dashboard').'</a>';
                    echo '<a class="link cart_link" href="'.APPURL.'cart"><span>0</span> '.T('Cart').'</a>';
                }
                $c->logout_html( 'div', 'link cp', '<i class="mat-ico">logout</i>' );
            } ?>
        </div>
    </div>
    </div>
</header>
