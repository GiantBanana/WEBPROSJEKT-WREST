<?php 

function suggestatributeen (){
    if(!isset($_POST["submit"])) {
        echo "If you have any suggestions for changes we should make to the application, the wREST-standard, our website or anything else, please fill out the form below. <br /><br /><br /><br />";
        echo "<form action='SUGGEST-ATTRIBUTE-ENGLISH.html' method='POST'>";
        echo "Make change to: <br />";
        echo "<select required name='type'>";
        echo "<option disabled selected value> -- select an option -- </option>";
        echo "<option value='Application'>Application</option>";
        echo "<option value='wREST-Standard'>wREST-Standard</option>";
        echo "<option value='Website'>Website</option>";
        echo "<option value='Other'>Other</option>";
        echo "</select> <br />";
        echo "Subject: <br /> <input type='text' name='subject' maxlength='20' required/> <br />"; 
        echo "Describe change (500 char max): <br />";
        echo "<textarea maxlength='500' name='description'></textarea><br />";
        echo "Name: <br /> <input type='text' name='name' maxlength='50' required/> <br />";
        echo "Email: <br /> <input type='email' name='email' required/> <br />";
        echo "reCAPTCHA comming here! <br />";
        echo "<input type='submit' name='submit' /> <br /> <br />";
        echo "</form";
    } 
    if(isset($_POST["submit"])) {    
        $name = $_POST['name'];
        $headers = $_POST['email'];
        $to = "s311516@stud.hioa.no";
        $subject = $_POST['type'] .  " - " . $_POST['subject'];
        $message = $_POST['description'];
        echo "Thank you " . $name . " for your suggestion! We value your feedback and every sugestion will be reviewed and considered.";
        //mail($to,$subject,$message,$headers);
    }
}

?>






