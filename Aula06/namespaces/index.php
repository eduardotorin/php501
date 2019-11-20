<?php

require_once "controllers/landing.php";
require_once "models/landing.php";

use controllers\landing AS ControllersLanding;
use models\landing AS ModelsLanding;
use models\Data;

$landing = new ControllersLanding;
$landing->get_landing();

$landing = new ModelsLanding;
$landing->get_landing();

$data = new Data;
$data->get_data();

