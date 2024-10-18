<?php

session_start();

if($_SESSION['last_page'] != null)
    $_SESSION['current_page'] = $_SESSION['last_page'];
$_SESSION['current_page'] = basename($_SERVER['PHP_SELF']);
include 'header.php';
include 'footer.php';

?>

<!doctype html>
<html>
<head>
    <!-- TemplateInfo codeOutsideHTMLIsLocked="true"-->
<?php writeHead(); ?>
    <!-- TemplateBeginEditable name="Title" --><title>Home | Mahayana Living</title><!-- TemplateEndEditable -->
</head>
<body>
    
<?php writeHeader(); ?>

<main>
    <!-- TemplateBeginEditable name="Main" -->Main<!-- TemplateEndEditable -->
</main>

<footer>
    <?php writeFooter(); ?>
</footer>

</body>
</html>