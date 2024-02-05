<div class="d-flex flex-column flex-lg-row h-lg-full bg-surface-secondary">
    <!-- Start Sidebar -->
    <?php include "./includes/sidebar.php";?>
    <!-- End Sidebar -->
    <div class="flex-lg-1 h-screen overflow-y-lg-auto">
        <!-- Start topbar -->
        <?php include "./includes/topbar.php";?>
        <!-- End topbar -->
        <!-- Start Admin Panel -->
        <?php 
        
            if(!isset($_GET['route'])){
                include "./pages/home.php";
            }else{
                $route = $_GET['route'];
                include "./pages/$route.php";
            }
        
        ?>
        <!-- End Admin Panel -->
    </div>
</div>