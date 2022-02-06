<?php

error_reporting(E_ALL);
ini_set('display_errors', true);

require('../../fx/button.php');
require('../../fx/command.php');
require('customer-service.php');
require('add-customer-button.php');

$customerService = new CustomerService('amyr');
$addCustomerCommand = new AddCustomerButton($customerService);
$button = new Button($addCustomerCommand);
$button->click();