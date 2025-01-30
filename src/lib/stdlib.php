<?php
    function get_template($template) {
        switch ($template) {
            case 'landing':
                return 'src/templates/landing.php';
                break;
            case 'about':
                return 'src/templates/about.php';
                break;
            case 'resume':
                return 'src/templates/resume.php';
                break;
            case 'projects':
                return 'src/templates/projects.php';
                break;
            default:
                http_response_code(404);
                return 'src/templates/landing.php';
                break;
        }
    }
?>