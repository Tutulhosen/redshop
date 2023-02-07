<?php
if (isset($header)) {
    echo $header;
}
?>

<body class="page-template-default page page-id-126 um-page-register um-page-loggedout woocommerce-no-js">

    <!-- Preloader -->

    <!-- Page Wrapper -->
    <div id="page-wrap">

        <?php
        if (isset($menu)) {
            echo $menu;
        }
        ?>

        <!-- Page Content -->
        <div id="page-content">


            <div class="sidebar-alt-wrap">
                <div class="sidebar-alt-close image-overlay"></div>
                <aside class="sidebar-alt">

                    <div class="sidebar-alt-close-btn">
                        <span></span>
                        <span></span>
                    </div>

                    <div class="bard-widget"><p></p></div>		
                </aside>
            </div>
            <div class="main-content clear-fix boxed-wrapper" data-sidebar-sticky="1">

                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
                <!-- Main Container -->
                <div class="main-container">

                    <article id="page-126" class="post-126 page type-page status-publish hentry">

                        <header class="post-header">
<!--                            <h1 class="page-title">Login</h1>-->
                        </header>
<!--                        <div class="post-content">
                            <div class="um um-register um-118">-->

                                <!--<div class="um-form">-->

                                    <div class="row">
                                        <h2></h2>
                                        <div class="form-group text-center">
                                            <?php
                                            if ($this->session->userdata('exception')) {
                                                ?>
                                                <p class="error-message" style="color:red"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> 
                                                    <?php
                                                    echo $this->session->userdata('exception');
                                                    $this->session->unset_userdata('exception');
                                                    ?>
                                                </p>
                                            <?php } ?>
                                            <?php if ($this->session->userdata('success')) { ?>
                                                <p class="success-message" style="color:green"><i class="fa fa-check-circle" aria-hidden="true"></i>
                                                    <?php
                                                    echo $this->session->userdata('success');
                                                    $this->session->unset_userdata('success');
                                                    ?>
                                                </p>
                                            <?php } ?>
                                        </div>
                                        <div class="col-md-2"></div>
                                        <div class="col-md-8">
                                        <form>
                                            <div class="form-group text-center">   
                                                <a style="color:white" href="<?php echo base_url(); ?>login" class="btn btn-info btn-lg" target="_blank">Login</a>
                                            </div>
                                        </form>
                                            </div>
                                        <div class="col-sm-2"></div>
                                    </div>

                                <!--</div>-->

<!--                            </div><style type="text/css">
                                .um-118.um {
                                    max-width: 550px;
                                }</style>
                        </div>-->
                    </article>


                </div><!-- .main-container -->


                <?php
                if (isset($right_sidebar)) {
                    echo $right_sidebar;
                }
                ?>
            </div><!-- #page-content -->

        </div><!-- #page-content -->


        <?php
        if (isset($footer)) {
            echo $footer;
        }
        ?>