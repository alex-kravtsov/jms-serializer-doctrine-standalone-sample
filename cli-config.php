<?php

require_once __DIR__ . "/init.inc.php";

return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($entityManager);
