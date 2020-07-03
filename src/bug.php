<?php

use App\Entity\Player;
use phpDocumentor\Reflection\DocBlockFactory;
use phpDocumentor\Reflection\Types\ContextFactory;

require __DIR__.'/../vendor/autoload.php';

$docBlockFactory = DocBlockFactory::createInstance();
$contextFactory = new ContextFactory();

$reflectionProperty = new \ReflectionProperty(Player::class, 'commissionType');

$reflector = $reflectionProperty->getDeclaringClass();
$f = $contextFactory->createFromReflector($reflector);

echo $docBlockFactory->create($reflectionProperty, $f)->getTags()[0]->getType();
