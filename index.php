<?php
    /**
     * PDXChambers CMS - A simple CMS built with PHP and MySQL by Julien Chambers
     * 
     * License: GPL v3.0
     */
    require_once 'src/lib/stdlib.php';
?>
<!doctype html>
<html lang="en-us">
    <?php include_once 'src/templates/head.php'; ?>
    <body>
        <?php
            include_once 'src/templates/header.php';
            include_once 'src/templates/navigation.php';
            // TODO Add function to switch between templates based on navigation.
            if (!isset($_GET['page'])) {
                $_GET['page'] = 'landing';
            }
            include get_template($_GET['page']);
                
            include_once 'src/templates/footer.php'; 
        ?>   
    </body>
</html>