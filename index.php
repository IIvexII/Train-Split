<!-- Header -->
<?php include "includes/header.php"; ?>

<!-- Page Changing functionality -->
<?php
    if(isset($_GET['page']))
    {
        $page = $_GET['page'];

        switch($page)
        {
            case "selectTime": 
                include "includes/selectTime.php";
                break;

            default:    // Default Page
                include "includes/carousel.php";
                break;
        }
    }
    else
    {
        // Default page
        include "includes/carousel.php";  
    }
?>

<!-- Footer -->
<?php include "includes/footer.php"; ?>
