<?php

start_session();

//$_SESSION['form_submitted'] = false;
$form = "";
buildForm();
$thanks = "Thanks for contacting us! We will be in touch with you soon!";

if(isset($_POST['submit'])){
    $_SESSION['name'] = $_POST['name'];
    
    $_SESSION['form'] = $form;
    $_SESSION['form_submited'] = true;
    $_SESSION['thanks'] = $thanks;
}

function buildForm(){
    $form = 
    '
    <form name="form" method="POST" action="form.php">
    <table>
        <th colspan="2"><legend>Contact Us</legend></th>
        <colgroup>
            <col span="1" style="width: 30%;">

        </colgroup>
        <tr>
            <td class="labels"><label for="name">Full Name: </label></td>
            <td><input type="text" name="name" id="name"></td>
        </tr>
        <tr>
            <td class="labels"><label for="address1">Address 1: </label></td>
            <td><input type="text" name="address1" id="address1"></td>
        </tr>
        <tr>
            <td class="labels"><label for="address2">Address 2: </label></td>
            <td><input type="text" name="address2" id="address2"></td>
        </tr>
        <tr>
            <td class="labels"><label for="cityStateZip">City, State, Zip: </label></td>
            <td><input type="text" name="cityStateZip" id="cityStateZip"></td>
        </tr>
        <tr>
            <td><label for="myEmail">Email Address: </label></td>
            <td><input type="email" name="myEmail" id="myEmail"></td>
        </tr>
        <tr>
            <td class="labels"><label for="myPhone">Phone Number: </label></td>
            <td><input type="tel" name="myPhone" id="myPhone"></td>
        </tr>
        <tr>
            <td colspan="2"><label for="comments">Comments and/or Suggestions: </label></td>
        </tr>
        <tr>
            <td colspan="2"><textarea name="comments" id="comments" rows="5" cols="50"></textarea></td>
        </tr>
        <tr style="align-content: center;">
            <td><button type="reset" id="reset">Reset</button></td>
            <td><button type="submit" id="submit">Submit</button></td>
        </tr>
    </table>
    </form>
    
    ';
}

?>