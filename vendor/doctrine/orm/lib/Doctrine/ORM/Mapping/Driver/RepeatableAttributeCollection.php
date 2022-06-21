<?php

declare(strict_types=1);

namespace Doctrine\ORM\Mapping\Driver;

use ArrayObject;
use Doctrine\ORM\Mapping\Annotation;

/**
<<<<<<< HEAD
 * @template-extends ArrayObject<int,Annotation>
=======
 * @template-extends ArrayObject<int, T>
 * @template T of Annotation
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
 */
final class RepeatableAttributeCollection extends ArrayObject
{
}
