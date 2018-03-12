<?php
require(ROOT . "model/StudentModel.php");

function index()
{
    render("student/index", array(
        'bday' => getAllBirthdays()
    ));

}

