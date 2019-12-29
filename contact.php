<?php

session_start();

if($_SESSION['last_page'] != null)
    $_SESSION['current_page'] = $_SESSION['last_page'];
$_SESSION['current_page'] = basename($_SERVER['PHP_SELF']);
include 'header.php';
include 'footer.php';

?>

<!doctype html>
<html><!-- InstanceBegin template="/Templates/template.dwt.php" codeOutsideHTMLIsLocked="true" -->
<head>
    
<?php writeHead(); ?>
    <!-- InstanceBeginEditable name="Title" --><title>Contact Us | Mahayana Living</title><!-- InstanceEndEditable -->
</head>
<body>
    
<?php writeHeader(); ?>

<main>
    <!-- InstanceBeginEditable name="Main" -->

<div class="box">
        <img id="about" src="images/responsible-hands.jpg" alt="Multigenerational Hands Holding Dirt with Sprout">
        <div class="formwrapper">
        <div>We would love to hear from you! Please fill out the form below.</div>
        <?php
            include 'form.php';
            //echo $Form;
            //echo $ThankYou;
        ?>
        </table>
        </form>
        </div>
    </div>
    
    <!-- InstanceEndEditable -->
</main>

<footer>
    <?php writeFooter(); ?>
</footer>

</body>
<!-- InstanceEnd --></html>