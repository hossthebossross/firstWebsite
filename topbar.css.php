<?php
header( 'Content-Type: text/css' );

$color      = '#fff';
#$background    = '#1A3A59';
$background    = '#597EA2';
$grad_end    = '#000';
$border      = '#fff';
$hover      = '#4F6752';
$focus      = '#674F67521';
?>

/* we need this to make room for the top bar */
body {
  padding-top: 40px;
}

/* wrap the whole thing up, nice and tight */
#topbar {
    background: <?php echo $background; ?>;
    background: -moz-linear-gradient(<?php echo $background; ?>, <?php echo $grad_end; ?>);
    background: -ms-linear-gradient(<?php echo $background; ?>, <?php echo $grad_end; ?>);
    background: -o-linear-gradient(<?php echo $background; ?>, <?php echo $grad_end; ?>);
    background: -webkit-linear-gradient(<?php echo $background; ?>, <?php echo $grad_end; ?>);
    background: linear-gradient(<?php echo $background; ?>, <?php echo $grad_end; ?>);
    left: 0;
    overflow: visible;
    padding-left: 15px;
    position: fixed;
    right: 0;
    top: 0;
    z-index: 10000;
    }

/* where the real work happens */
#topbar ul {
    font: bold 16px Verdana, Arial;
    list-style: none;
    margin: 0;
    padding: 0;
    }

#topbar ul li {
    display: block;
    float: left;
    position: relative;
    }

#topbar li ul { display: none; }
#topbar ul li a {
    background: <?php echo $background; ?>;
    background: -moz-linear-gradient(<?php echo $background; ?>, <?php echo $grad_end; ?>);
    background: -ms-linear-gradient(<?php echo $background; ?>, <?php echo $grad_end; ?>);
    background: -o-linear-gradient(<?php echo $background; ?>, <?php echo $grad_end; ?>);
    background: -webkit-linear-gradient(<?php echo $background; ?>, <?php echo $grad_end; ?>);
    background: linear-gradient(<?php echo $background; ?>, <?php echo $grad_end; ?>);
    color: <?php echo $color; ?>;
    display: block;
    margin-left: 1px;
    padding: 8px 15px 9px 15px;
    text-decoration: none;
    white-space: nowrap;
    }

#topbar ul li a:hover {
    background: <?php echo $hover; ?>;
    }

#topbar li:hover ul {
    display: block;
    position: absolute;
    }

#topbar li:hover li {
    border-top: 1px solid <?php echo $border; ?>;
    float: none;
    font-size: 14px;
    }

#topbar li:hover a { background: <?php echo $hover; ?>; }
#topbar li:hover li a:hover { background: <?php echo $focus; ?>; }
