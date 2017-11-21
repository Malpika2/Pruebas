<!DOCTYPE html>
<html lang="en">
<head>

    <style>
        /* Loading Spinner */
        .spinner{margin:0;width:70px;height:18px;margin:-35px 0 0 -9px;position:absolute;top:50%;left:50%;text-align:center}.spinner > div{width:18px;height:18px;background-color:#333;border-radius:100%;display:inline-block;-webkit-animation:bouncedelay 1.4s infinite ease-in-out;animation:bouncedelay 1.4s infinite ease-in-out;-webkit-animation-fill-mode:both;animation-fill-mode:both}.spinner .bounce1{-webkit-animation-delay:-.32s;animation-delay:-.32s}.spinner .bounce2{-webkit-animation-delay:-.16s;animation-delay:-.16s}@-webkit-keyframes bouncedelay{0%,80%,100%{-webkit-transform:scale(0.0)}40%{-webkit-transform:scale(1.0)}}@keyframes bouncedelay{0%,80%,100%{transform:scale(0.0);-webkit-transform:scale(0.0)}40%{transform:scale(1.0);-webkit-transform:scale(1.0)}}
    </style>


    <meta charset="UTF-8">
<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
<title> Inforganic &amp; Admin Template </title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.css">


<!-- HELPERS -->

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/helpers/animate.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/helpers/backgrounds.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/helpers/boilerplate.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/helpers/border-radius.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/helpers/grid.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/helpers/page-transitions.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/helpers/spacing.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/helpers/typography.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/helpers/utils.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/helpers/colors.css">

<!-- ELEMENTS -->

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/elements/badges.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/elements/buttons.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/elements/content-box.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/elements/dashboard-box.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/elements/forms.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/elements/images.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/elements/info-box.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/elements/invoice.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/elements/loading-indicators.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/elements/menus.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/elements/panel-box.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/elements/response-messages.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/elements/responsive-tables.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/elements/ribbon.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/elements/social-box.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/elements/tables.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/elements/tile-box.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/elements/timeline.css">



<!-- ICONS -->

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/icons/fontawesome/fontawesome.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/icons/linecons/linecons.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/icons/spinnericon/spinnericon.css">


<!-- WIDGETS -->

<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/widgets/accordion-ui/accordion.css"> -->
<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/widgets/calendar/calendar.css"> -->
<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/widgets/carousel/carousel.css"> -->
<!-- 
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/widgets/charts/justgage/justgage.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/widgets/charts/morris/morris.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/widgets/charts/piegage/piegage.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/widgets/charts/xcharts/xcharts.css"> -->

<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/widgets/chosen/chosen.css">
 --><!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/widgets/colorpicker/colorpicker.css">
 --><!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/widgets/datatable/datatable.css">
 --><!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/widgets/datepicker/datepicker.css">
 --><!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/widgets/datepicker-ui/datepicker.css">
 --><!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/widgets/daterangepicker/daterangepicker.css">
 -->
 <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/widgets/dialog/dialog.css"> -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/widgets/dropdown/dropdown.css">
<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/widgets/dropzone/dropzone.css"> -->
<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/widgets/file-input/fileinput.css"> -->
<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/widgets/input-switch/inputswitch.css"> -->
<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/widgets/input-switch/inputswitch-alt.css"> -->
<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/widgets/ionrangeslider/ionrangeslider.css"> -->
<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/widgets/jcrop/jcrop.css"> -->
<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/widgets/jgrowl-notifications/jgrowl.css"> -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/widgets/loading-bar/loadingbar.css">
<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/widgets/maps/vector-maps/vectormaps.css"> -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/widgets/markdown/markdown.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/widgets/modal/modal.css">
<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/widgets/multi-select/multiselect.css"> -->
<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/widgets/multi-upload/fileupload.css"> -->
<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/widgets/nestable/nestable.css"> -->
<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/widgets/noty-notifications/noty.css"> -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/widgets/popover/popover.css">
<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/widgets/pretty-photo/prettyphoto.css"> -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/widgets/progressbar/progressbar.css">
<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/widgets/range-slider/rangeslider.css"> -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/widgets/slidebars/slidebars.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/widgets/slider-ui/slider.css">
<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/widgets/summernote-wysiwyg/summernote-wysiwyg.css"> -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/widgets/tabs-ui/tabs.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/widgets/theme-switcher/themeswitcher.css">
<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/widgets/timepicker/timepicker.css"> -->
<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/widgets/tocify/tocify.css"> -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/widgets/tooltip/tooltip.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/widgets/touchspin/touchspin.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/widgets/uniform/uniform.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/widgets/wizard/wizard.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/widgets/xeditable/xeditable.css">

<!-- SNIPPETS -->

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/snippets/chat.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/snippets/files-box.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/snippets/login-box.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/snippets/notification-box.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/snippets/progress-box.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/snippets/todo.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/snippets/user-profile.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/snippets/mobile-navigation.css">

<!-- APPLICATIONS -->

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/applications/mailbox.css">

<!-- Admin theme -->

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/themes/admin/layout.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/themes/admin/color-schemes/default.css">

<!-- Components theme -->

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/themes/components/default.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/themes/components/border-radius.css">

<!-- Admin responsive -->

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/helpers/responsive-elements.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/helpers/admin-responsive.css">

    <!-- JS Core -->

<script type="text/javascript" src="<?php echo base_url();?>assets/js-core/jquery-core.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js-core/jquery-ui-core.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js-core/jquery-ui-widget.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js-core/jquery-ui-mouse.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js-core/jquery-ui-position.js"></script>
<!--<script type="text/javascript" src="../../assets/js-core/transition.js"></script>-->
<script type="text/javascript" src="<?php echo base_url();?>assets/js-core/modernizr.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js-core/jquery-cookie.js"></script>


<!-- Sign settings -->
  <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-39365077-1']);
    _gaq.push(['_trackPageview']);

    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
  </script>
<!-- end Sign settings --> 
    <script type="text/javascript">
        $(window).load(function(){
            setTimeout(function() {
                $('#loading').fadeOut( 400, "linear" );
            }, 300);
        });
    </script>
</head>
    <body>
        <div id="sb-site">
            <div class="sb-slidebar bg-black sb-left sb-style-overlay">
                <div class="scrollable-content scrollable-slim-sidebar">
                    <div class="pad10A">
                        <div class="divider-header">Online</div>
                        <ul class="chat-box">
                            <li>
                                <div class="status-badge">
                                    <img class="img-circle" width="40" src="<?php echo base_url();?>assets/image-resources/people/testimonial1.jpg" alt="">
                                    <div class="small-badge bg-green"></div>
                                </div>
                                <b>
                                    Grace Padilla
                                </b>
                                <p>On the other hand, we denounce...</p>
                                <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                            </li>
                        </ul>
                        <div class="divider-header">Idle</div>
                    </div>
                </div>
            </div>

        <div class="sb-slidebar bg-black sb-right sb-style-overlay">
            <div class="scrollable-content scrollable-slim-sidebar">
            <div class="pad15A">
                <a href="#" title="" data-toggle="collapse" data-target="#sidebar-toggle-1" class="popover-title">
                    Cloud status
                </a>
                <div id="sidebar-toggle-1" class="collapse in">
                    <div class="pad15A container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="text-center font-gray pad5B text-transform-upr font-size-12">New visits</div>
                                <div class="chart-alt-3 font-gray-dark" data-percent="55"><span>55</span>%</div>
                            </div>
                            <div class="col-md-4">
                                <div class="text-center font-gray pad5B text-transform-upr font-size-12">Bounce rate</div>
                                <div class="chart-alt-3 font-gray-dark" data-percent="46"><span>46</span>%</div>
                            </div>
                            <div class="col-md-4">
                                <div class="text-center font-gray pad5B text-transform-upr font-size-12">Server load</div>
                                <div class="chart-alt-3 font-gray-dark" data-percent="92"><span>92</span>%</div>
                            </div>
                        </div>
                        <div class="divider mrg15T mrg15B"></div>
                        <div class="text-center">
                            <a href="#" class="btn center-div btn-info mrg5T btn-sm text-transform-upr updateEasyPieChart">
                                <i class="glyph-icon icon-refresh"></i>
                                Update charts
                            </a>
                        </div>
                    </div>
                </div>

                <div class="clear"></div>

                <a href="#" title="" data-toggle="collapse" data-target="#sidebar-toggle-6" class="popover-title">
                    Latest transfers
                </a>
                <div id="sidebar-toggle-6" class="collapse in">

                    <ul class="files-box">
                        <li>
                            <i class="files-icon glyph-icon font-red icon-file-archive-o"></i>
                            <div class="files-content">
                                <b>blog_export.zip</b>
                                <div class="files-date">
                                    <i class="glyph-icon icon-clock-o"></i>
                                    added on <b>22.10.2014</b>
                                </div>
                            </div>
                            <div class="files-buttons">
                                <a href="#" class="btn btn-xs hover-info tooltip-button" data-placement="left" title="Download">
                                    <i class="glyph-icon icon-cloud-download"></i>
                                </a>
                                <a href="#" class="btn btn-xs hover-danger tooltip-button" data-placement="left" title="Delete">
                                    <i class="glyph-icon icon-times"></i>
                                </a>
                            </div>
                        </li>
                        <li class="divider"></li>
                    </ul>
                </div>
            </div>
            </div>
        </div>

        <div id="loading">
            <div class="spinner">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>

    <div id="page-wrapper">
        <div id="page-header" class="bg-gradient-9">
            <div id="mobile-navigation">
                <button id="nav-toggle" class="collapsed" data-toggle="collapse" data-target="#page-sidebar"><span></span></button>
                <a href="<?php echo base_url('inicio');?>" class="logo-content-small" title="MonarchUI"></a>
            </div>
        <div id="header-logo" class="logo-bg">
            <a href="<?php echo base_url('inicio'); ?>" class="logo-content-big" title="MonarchUI">
                Monarch <i>UI</i>
                <span>The perfect solution for user interfaces</span>
            </a>
            <a href="<?php echo base_url('inicio'); ?>" class="logo-content-small" title="MonarchUI">
                Monarch <i>UI</i>
                <span>The perfect solution for user interfaces</span>
            </a>
            <a id="close-sidebar" href="#" title="Close sidebar">
                <i class="glyph-icon icon-angle-left"></i>
            </a>
        </div>
            <div id="header-nav-left">
                <div class="user-account-btn dropdown">
                    <a href="#" title="My Account" class="user-profile clearfix" data-toggle="dropdown">
                        <img width="28" src="<?php base_url();?>assets/image-resources/gravatar.jpg" alt="Profile image">
                        <span>Thomas Barnes</span>
                        <i class="glyph-icon icon-angle-down"></i>
                    </a>
                    <div class="dropdown-menu float-left">
                        <div class="box-sm">
                            <div class="login-box clearfix">
                                <div class="user-img">
                                    <a href="#" title="" class="change-img">Change photo</a>
                                    <img src="<?php base_url();?>assets/image-resources/gravatar.jpg" alt="">
                                </div>
                                <div class="user-info">
                                    <span>
                                        Thomas Barnes
                                        <i>UX/UI developer</i>
                                    </span>
                                    <a href="#" title="Edit profile">Edit profile</a>
                                    <a href="#" title="View notifications">View notifications</a>
                                </div>
                            </div>
                            <div class="divider"></div>
                            <ul class="reset-ul mrg5B">
                                <li>
                                    <a href="#">
                                        <i class="glyph-icon float-right icon-caret-right"></i>
                                        View login page example

                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="glyph-icon float-right icon-caret-right"></i>
                                        View lockscreen example

                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="glyph-icon float-right icon-caret-right"></i>
                                        View account details

                                    </a>
                                </li>
                            </ul>
                            <div class="pad5A button-pane button-pane-alt text-center">
                                <a href="#" class="btn display-block font-normal btn-danger">
                                    <i class="glyph-icon icon-power-off"></i>
                                    Logout
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- #header-nav-left -->

    <div id="header-nav-right">
        <a href="#" class="hdr-btn popover-button" title="Search" data-placement="bottom" data-id="#popover-search">
            <i class="glyph-icon icon-search"></i>
        </a>
        <div class="hide" id="popover-search">
            <div class="pad5A">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search terms here ...">
                    <span class="input-group-btn">
                        <a class="btn btn-primary" href="#">Search</a>
                    </span>
                </div>
            </div>
        </div>
        <a href="#" class="hdr-btn" id="fullscreen-btn" title="Fullscreen">
            <i class="glyph-icon icon-arrows-alt"></i>
        </a>
        <a href="#" class="hdr-btn sb-toggle-left" id="chatbox-btn" title="Chat sidebar">
            <i class="glyph-icon icon-linecons-paper-plane"></i>
        </a>
        <div class="dropdown" id="notifications-btn">
            <a data-toggle="dropdown" href="#" title="">
                <span class="small-badge bg-yellow"></span>
                <i class="glyph-icon icon-linecons-megaphone"></i>
            </a>
            <div class="dropdown-menu box-md float-right">

                <div class="popover-title display-block clearfix pad10A">
                    Notifications
                    <a class="text-transform-cap font-primary font-normal btn-link float-right" href="#" title="View more options">
                        More options...
                    </a>
                </div>
                <div class="scrollable-content scrollable-slim-box">
                    <ul class="no-border notifications-box">
                        <li>
                            <span class="bg-danger icon-notification glyph-icon icon-bullhorn"></span>
                            <span class="notification-text">This is an error notification</span>
                            <div class="notification-time">
                                a few seconds ago
                                <span class="glyph-icon icon-clock-o"></span>
                            </div>
                        </li>
                        
                    </ul>
                </div>
                <div class="pad10A button-pane button-pane-alt text-center">
                    <a href="#" class="btn btn-primary" title="View all notifications">
                        View all notifications
                    </a>
                </div>
            </div>
        </div>
        <div class="dropdown" id="progress-btn">
            <a data-toggle="dropdown" href="#" title="">
                <span class="small-badge bg-azure"></span>
                <i class="glyph-icon icon-linecons-params"></i>
            </a>
            <div class="dropdown-menu pad0A box-sm float-right" id="progress-dropdown">
                <div class="scrollable-content scrollable-slim-box">
                    <ul class="no-border progress-box progress-box-links">
                        <li>
                            <a href="#" title="">
                                <b class="pull-right">23%</b>
                                <div class="progress-title">
                                    Finishing uploading files

                                </div>
                                <div class="progressbar-smaller progressbar" data-value="23">
                                    <div class="progressbar-value bg-blue-alt">
                                        <div class="progressbar-overlay"></div>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="pad5A button-pane button-pane-alt text-center">
                    <a href="#" class="btn display-block font-normal hover-green" title="View all notifications">
                        View all notifications
                    </a>
                </div>
            </div>
        </div>
        <div class="dropdown" id="cloud-btn">
            <a href="#" data-placement="bottom" class="tooltip-button sb-toggle-right" title="Statistics Sidebar">
                <i class="glyph-icon icon-linecons-cloud"></i>
            </a>
        </div>
        <div class="dropdown" id="dashnav-btn">
            <a href="#" data-toggle="dropdown" data-placement="bottom" class="popover-button-header tooltip-button" title="Dashboard Quick Menu">
                <i class="glyph-icon icon-linecons-cog"></i>
            </a>
            <div class="dropdown-menu float-right">
                <div class="box-sm">
                    <div class="pad5T pad5B pad10L pad10R dashboard-buttons clearfix">
                        <a href="#" class="btn vertical-button hover-blue-alt" title="">
                            <span class="glyph-icon icon-separator-vertical pad0A medium">
                                <i class="glyph-icon icon-dashboard opacity-80 font-size-20"></i>
                            </span>
                            Dashboard
                        </a>
                        <a href="#" class="btn vertical-button hover-green" title="">
                            <span class="glyph-icon icon-separator-vertical pad0A medium">
                                <i class="glyph-icon icon-tags opacity-80 font-size-20"></i>
                            </span>
                            Widgets
                        </a>
                        <a href="#" class="btn vertical-button hover-orange" title="">
                            <span class="glyph-icon icon-separator-vertical pad0A medium">
                                <i class="glyph-icon icon-fire opacity-80 font-size-20"></i>
                            </span>
                            Tables
                        </a>
                        <a href="#" class="btn vertical-button hover-orange" title="">
                            <span class="glyph-icon icon-separator-vertical pad0A medium">
                                <i class="glyph-icon icon-bar-chart-o opacity-80 font-size-20"></i>
                            </span>
                            Charts
                        </a>
                        <a href="#" class="btn vertical-button hover-purple" title="">
                            <span class="glyph-icon icon-separator-vertical pad0A medium">
                                <i class="glyph-icon icon-laptop opacity-80 font-size-20"></i>
                            </span>
                            Buttons
                        </a>
                        <a href="#" class="btn vertical-button hover-azure" title="">
                            <span class="glyph-icon icon-separator-vertical pad0A medium">
                                <i class="glyph-icon icon-code opacity-80 font-size-20"></i>
                            </span>
                            Panels
                        </a>
                    </div>
                    <div class="divider"></div>
                    <div class="pad5T pad5B pad10L pad10R dashboard-buttons clearfix">
                        <a href="#" class="btn vertical-button remove-border btn-info" title="">
                            <span class="glyph-icon icon-separator-vertical pad0A medium">
                                <i class="glyph-icon icon-dashboard opacity-80 font-size-20"></i>
                            </span>
                            Dashboard
                        </a>
                        <a href="#" class="btn vertical-button remove-border btn-danger" title="">
                            <span class="glyph-icon icon-separator-vertical pad0A medium">
                                <i class="glyph-icon icon-tags opacity-80 font-size-20"></i>
                            </span>
                            Widgets
                        </a>
                        <a href="#" class="btn vertical-button remove-border btn-purple" title="">
                            <span class="glyph-icon icon-separator-vertical pad0A medium">
                                <i class="glyph-icon icon-fire opacity-80 font-size-20"></i>
                            </span>
                            Tables
                        </a>
                        <a href="#" class="btn vertical-button remove-border btn-azure" title="">
                            <span class="glyph-icon icon-separator-vertical pad0A medium">
                                <i class="glyph-icon icon-bar-chart-o opacity-80 font-size-20"></i>
                            </span>
                            Charts
                        </a>
                        <a href="#" class="btn vertical-button remove-border btn-yellow" title="">
                            <span class="glyph-icon icon-separator-vertical pad0A medium">
                                <i class="glyph-icon icon-laptop opacity-80 font-size-20"></i>
                            </span>
                            Buttons
                        </a>
                        <a href="#" class="btn vertical-button remove-border btn-warning" title="">
                            <span class="glyph-icon icon-separator-vertical pad0A medium">
                                <i class="glyph-icon icon-code opacity-80 font-size-20"></i>
                            </span>
                            Panels
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <a class="header-btn" id="logout-btn" href="lockscreen-3.html" title="Lockscreen page example">
            <i class="glyph-icon icon-linecons-lock"></i>
        </a>

    </div><!-- #header-nav-right -->

</div>



    </div>
