<?php
    $jaartal = date('Y');

    foreach ($bday as $birthdays => $value) {
        $idPN = $value['person'];
        $idM = $value['month'];
        $idY = $value['year'];
        $idD = $value['day'];
    }
?>

<h1>Update: <?= $idPN ?>.</h1>
<form name="frmRegistration" method="post" action="<?= URL ?>student/updatePBJ?id= <?= $value['id'] ?>" class="formr">
    <fieldset>
        <legend>Verander hier uw informatie.</legend>
        <p>Uw geboortedag:
            <input style="margin-left: 30px" type="number" required min="1" max="31" class="demoInputBox" name="birthday" value="<?= $idD ?>"></p>
        <p>Uw geboorte maand:
            <input style="margin-left: 6px" type="number" required min="1" max="12" class="demoInputBox" name="Birthmonth" value="<?= $idM ?>"></p>
        <p>Uw geboorte jaar:
            <input style="margin-left: 24px" type="number" required min="1" max="<?php $jaartal ?>" class="demoInputBox" name="Birthyear" value="<?= $idY ?>"></p>
        <p><input type="checkbox" required>
            Ik ga akkoord met het veranderen van: <?= $idPN ?>.</p>
        <input style="" type="submit" name="register-user" value="Verander" class="btnRegister">
    </fieldset>
</form>