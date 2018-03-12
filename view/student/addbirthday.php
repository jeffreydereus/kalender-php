<h1>Toevoegen van birthday</h1>

<?php
    $jaartal = date('Y');
?>
    <form name="frmRegistration" method="post" action="<?= URL ?>student/addbd" class="formr">
        <fieldset>
            <legend>Voer hier uw informatie in.</legend>
                <p>Uw naam:
                    <input type="text" style="margin-left: 77px" required class="demoInputBox" name="Name" value="<?php if(isset($_POST['Name'])) echo $_POST['Name']; ?>"></p>

                <p>Uw geboortedag:
                    <input type="number" style="margin-left: 33px" required min="1" max="31" class="demoInputBox" name="birthday" value="<?php if(isset($_POST['birthday'])) echo $_POST['birthday']; ?>"></p>

                <p>Uw geboorte maand:
                    <input type="number" style="margin-left: 11px" required min="1" max="12" class="demoInputBox" name="Birthmonth" value="<?php if(isset($_POST['Birthmonth'])) echo $_POST['Birthmonth']; ?>"></p>
                <p>Uw geboorte jaar:
                    <input type="number" style="width: 50px; margin-left: 30px" min="1" max="<?php $jaartal ?>" class="demoInputBox" name="Birthyear" value="<?php if(isset($_POST['Birthyear'])) echo $_POST['Birthyear']; ?>"></p>
                <p><input type="checkbox" required>Ik ga akkoord met de <a target="_blank" href="<?= URL ?>student/voorwaarden">voorwaarden</a> voor het toevoegen</p>
                <input type="submit" name="register-user" value="Register" class="btnRegister">
        </fieldset>
    </form>