<?php

$id = $_REQUEST['id'];

if ($id == '') {
    include('views/index.php');
} else if ($id == 'pacientes') {
    include('views/pacientes.php');
} else if ($id == 'nuevo-paciente') {
    include('views/nuevo-paciente.php');
}


// if ($id = 'pacientes') {
//     include('views/pacientes.php');
// }

// if ($id = 'pacientes') {
//     include('views/pacientes.php');
// }

// if ($id = 'iconos') {
//     include('views/ui-icons-bootstrap-icons.html');
// }

// if ($id = 'modales') {
//     include('views/pacientes.php');
// }
