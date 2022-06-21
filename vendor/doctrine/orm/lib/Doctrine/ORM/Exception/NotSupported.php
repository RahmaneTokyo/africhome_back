<?php

declare(strict_types=1);

namespace Doctrine\ORM\Exception;

<<<<<<< HEAD
=======
use function sprintf;

>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
final class NotSupported extends ORMException
{
    public static function create(): self
    {
        return new self('This behaviour is (currently) not supported by Doctrine 2');
    }

<<<<<<< HEAD
    public static function createForDbal3(): self
    {
        return new self('Feature was deprecated in doctrine/dbal 2.x and is not supported by installed doctrine/dbal:3.x, please see the doctrine/deprecations logs for new alternative approaches.');
=======
    public static function createForDbal3(string $context): self
    {
        return new self(sprintf(
            <<<'EXCEPTION'
Context: %s
Problem: Feature was deprecated in doctrine/dbal 2.x and is not supported by installed doctrine/dbal:3.x
Solution: See the doctrine/deprecations logs for new alternative approaches.
EXCEPTION
            ,
            $context
        ));
    }

    public static function createForPersistence3(string $context): self
    {
        return new self(sprintf(
            <<<'EXCEPTION'
Context: %s
Problem: Feature was deprecated in doctrine/persistence 2.x and is not supported by installed doctrine/persistence:3.x
Solution: See the doctrine/deprecations logs for new alternative approaches.
EXCEPTION
            ,
            $context
        ));
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
    }
}
