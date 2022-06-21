<?php
declare(strict_types=1);

namespace Lcobucci\Clock;

use DateTimeImmutable;
<<<<<<< HEAD

interface Clock
=======
use StellaMaris\Clock\ClockInterface;

interface Clock extends ClockInterface
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
{
    public function now(): DateTimeImmutable;
}
