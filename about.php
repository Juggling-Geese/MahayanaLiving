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
    <!-- InstanceBeginEditable name="Title" --><title>About Us | Mahayana Living</title><!-- InstanceEndEditable -->
</head>
<body>
    
<?php writeHeader(); ?>

<main>
    <!-- InstanceBeginEditable name="Main" -->
    <div id="box">
        <img id="about" src="images/responsible-hands.jpg" alt="Multigenerational Hands Holding Dirt with Sprout">
        <div>We believe in creating sustainable practices in our world and learning to lean into the Earth. Leaning into the Earth is learning how to live with it, learning how to sustainably harvest its resources, and learning how to use them for the true benefit of all living things in a responsible manner. We learn how to both lean on the Earth, while helping to sustain it as stewards of the bounty that the Earth provides. To this end, we are committed to bringing organic and all-natural essential oils and personal care products to you. We sell straight and blended essential oils, as well as a small selection of personal care products and we are committed to  high quality standards. We strongly believe that what goes into our plants – light, water, soil, and love – comes out in our harvest, and we harness those good intentions and naturally made nutrients for our own lives.</div>
    </div>
    <!-- InstanceEndEditable -->
</main>

<footer>
    <?php writeFooter(); ?>
</footer>

</body>
<!-- InstanceEnd --></html>