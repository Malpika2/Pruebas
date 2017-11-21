<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        /* Loading Spinner */
        .spinner{margin:0;width:70px;height:18px;margin:-35px 0 0 -9px;position:absolute;top:50%;left:50%;text-align:center}.spinner > div{width:18px;height:18px;background-color:#333;border-radius:100%;display:inline-block;-webkit-animation:bouncedelay 1.4s infinite ease-in-out;animation:bouncedelay 1.4s infinite ease-in-out;-webkit-animation-fill-mode:both;animation-fill-mode:both}.spinner .bounce1{-webkit-animation-delay:-.32s;animation-delay:-.32s}.spinner .bounce2{-webkit-animation-delay:-.16s;animation-delay:-.16s}@-webkit-keyframes bouncedelay{0%,80%,100%{-webkit-transform:scale(0.0)}40%{-webkit-transform:scale(1.0)}}@keyframes bouncedelay{0%,80%,100%{transform:scale(0.0);-webkit-transform:scale(0.0)}40%{transform:scale(1.0);-webkit-transform:scale(1.0)}}
    </style>
    <meta charset="UTF-8">
<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
<title> Login </title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">





    <script type="text/javascript">
        $(window).load(function(){
            setTimeout(function() {
                $('#loading').fadeOut( 400, "linear" );
            }, 300);
        });
    </script>



</head>
<body>
<div id="loading">
    <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
</div>

<style type="text/css">

    html,body {
        height: 100%;
    }

</style>
<div class="center-vertical bg-black">
    <div class="center-content row">
        <form action="<?php echo base_url('inicio'); ?>" id="login-validation" class="center-margin col-xs-11 col-sm-5" method="">
            <h3 class="text-center pad25B font-gray font-size-23">MonarchUI <span class="opacity-80">v1.0</span></h3>
            <div id="login-form" class="content-box">

                <div class="button-pane">
                    <button type="submit" class="btn btn-block btn-primary">Login</button>
                </div>
            </div>
        </form>

    </div>
</div>


    <!-- WIDGETS -->

<script type="text/javascript" src="../../assets/tether/js/tether.js"></script>
<script type="text/javascript" src="../../assets/bootstrap/js/bootstrap.js"></script>

<!-- Bootstrap Dropdown -->

<!-- <script type="text/javascript" src="../../assets/widgets/dropdown/dropdown.js"></script> -->

<!-- Bootstrap Tooltip -->

<!-- <script type="text/javascript" src="../../assets/widgets/tooltip/tooltip.js"></script> -->

<!-- Bootstrap Popover -->

<!-- <script type="text/javascript" src="../../assets/widgets/popover/popover.js"></script> -->

<!-- Bootstrap Progress Bar -->

<script type="text/javascript" src="../../assets/widgets/progressbar/progressbar.js"></script>

<!-- Bootstrap Buttons -->

<!-- <script type="text/javascript" src="../../assets/widgets/button/button.js"></script> -->

<!-- Bootstrap Collapse -->

<!-- <script type="text/javascript" src="../../assets/widgets/collapse/collapse.js"></script> -->

<!-- Superclick -->

<script type="text/javascript" src="../../assets/widgets/superclick/superclick.js"></script>

<!-- Input switch alternate -->

<script type="text/javascript" src="../../assets/widgets/input-switch/inputswitch-alt.js"></script>

<!-- Slim scroll -->

<script type="text/javascript" src="../../assets/widgets/slimscroll/slimscroll.js"></script>

<!-- Slidebars -->

<script type="text/javascript" src="../../assets/widgets/slidebars/slidebars.js"></script>
<script type="text/javascript" src="../../assets/widgets/slidebars/slidebars-demo.js"></script>

<!-- PieGage -->

<script type="text/javascript" src="../../assets/widgets/charts/piegage/piegage.js"></script>
<script type="text/javascript" src="../../assets/widgets/charts/piegage/piegage-demo.js"></script>

<!-- Screenfull -->

<script type="text/javascript" src="../../assets/widgets/screenfull/screenfull.js"></script>

<!-- Content box -->

<script type="text/javascript" src="../../assets/widgets/content-box/contentbox.js"></script>

<!-- Overlay -->

<script type="text/javascript" src="../../assets/widgets/overlay/overlay.js"></script>

<!-- Widgets init for demo -->

<script type="text/javascript" src="../../assets/js-init/widgets-init.js"></script>

<!-- Theme layout -->

<script type="text/javascript" src="../../assets/themes/admin/layout.js"></script>

<!-- Theme switcher -->

<script type="text/javascript" src="../../assets/widgets/theme-switcher/themeswitcher.js"></script>

</body>
</html>
