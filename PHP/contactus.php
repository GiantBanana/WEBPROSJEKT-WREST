<?php 

function suggestatributeen (){
    if(!isset($_POST["submit"])) {
        echo "If you have any suggestions for changes we should make to the extension, the wREST-standard, our website or anything else, please fill out the form below. <br /><br /><br /><br />";
        echo "<form action='SUGGEST-ATTRIBUTE-ENGLISH.html' method='POST'>";
        echo "Subject: <br /> <input type='text' name='subject' maxlength='20' aria-label='subject' required/> <br />"; 
        echo "Make change to: <br />";
        echo "<select required name='type' aria-label='make change to'>";
        echo "<option disabled selected value> -- select an option -- </option>";
        echo "<option value='Extension'>Extension</option>";
        echo "<option value='wREST-Standard'>wREST-Standard</option>";
        echo "<option value='Website'>Website</option>";
        echo "<option value='Other'>Other</option>";
        echo "</select> <br />";
        echo "Describe change (500 char max): <br />";
        echo "<textarea maxlength='500' name='description' aria-label='describe change 500 char max'></textarea><br />";
        echo "Name: <br /> <input type='text' name='name' maxlength='50' aria-label='name' required/> <br />";
        echo "Email: <br /> <input type='email' name='email' aria-label='email' required/> <br />";
        echo "<br />";
        echo "<input value='Send suggestion change' type='submit' name='submit' aria-label='send suggestion change' /> <br /> <br />";
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

function suggestatributeno (){
    if(!isset($_POST["submit"])) {
        echo "Hvis du har noen forslag til endringer vi kan gjøre på utvidelsen, standarden, nettsiden vår eller noe annet, vennligst fyll ut sjemaet under. <br /><br /><br /><br />";
        echo "<form action='SUGGEST-ATTRIBUTE-ENGLISH.html' method='POST'>";
        echo "Emne: <br /> <input type='text' name='subject' maxlength='20' aria-label='emne' required/> <br />"; 
        echo "Gjør endring på: <br />";
        echo "<select required name='type' aria-label='gjør endring til'>";
        echo "<option disabled selected value> -- gjør et valg -- </option>";
        echo "<option value='Utvidelsen'>Utvidelsen</option>";
        echo "<option value='wREST-Standarden'>wREST-Standarden</option>";
        echo "<option value='Nettsiden'>Nettsiden</option>";
        echo "<option value='Annet'>Annet</option>";
        echo "</select> <br />";
        echo "Beskriv endring (500 karakterer max): <br />";
        echo "<textarea maxlength='500' name='description' aria-label='beskriv ønsket endring maks 500 karakterer'></textarea><br />";
        echo "Navn: <br /> <input type='text' name='name' maxlength='50' aria-label='navn' required/> <br />";
        echo "Epost: <br /> <input type='email' name='email' aria-label='epost' required/> <br />";
        echo "<br />";
        echo "<input value='Send endringsforslag' type='submit' name='submit' aria-label='send endringsforslag' /> <br /> <br />";
        echo "</form";
    } 
    if(isset($_POST["submit"])) {    
        $name = $_POST['name'];
        $headers = $_POST['email'];
        $to = "s311516@stud.hioa.no";
        $subject = $_POST['type'] .  " - " . $_POST['subject'];
        $message = $_POST['description'];
        echo "Takk " . $name . " for ditt forslag! Vi setter pris på din tilbakemelding og alle forslag vil bli gjennomgått og vurdert.";
        //mail($to,$subject,$message,$headers);
    }
}


?>






