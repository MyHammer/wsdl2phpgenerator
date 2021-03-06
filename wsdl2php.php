<?php
/**
 * @package Wsdl2PhpGenerator
 */
use Wsdl2PhpGenerator\Console\Application;
use Wsdl2PhpGenerator\Console\GenerateCommand;
use Wsdl2PhpGenerator\Generator;

require 'vendor/autoload.php';

$app = new Application('wsdl2php', '2.4.2');
$command = new GenerateCommand();
$command->setGenerator(Generator::getInstance());
$app->add($command);
$app->run();
