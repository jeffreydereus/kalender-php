<?php

require(ROOT . "model/StudentModel.php");

function index()
{
	render("student/index", array(
		'bday' => getAllBirthdays()
	));

}

function addbirthday(){
    render("student/addbirthday"
    );
}

function delete(){
    $id = $_GET['id'];
    deleteR($id);
}

function update(){
    render("student/update", array(
        'bday' => updateP()
    ));
}

function UpdatePBJ(){
    render("student/updatePBJ"
    );
}

function addbd(){
    render("student/addBdP"
    );
}

function voorwaarden(){
    render("student/voorwaarden");
}