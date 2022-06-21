<?= "<?php\n" ?>

namespace <?= $namespace; ?>;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class <?= $class_name ?> extends KernelTestCase
{
    public function testSomething(): void
    {
        $kernel = self::bootKernel();

        $this->assertSame('test', $kernel->getEnvironment());
<<<<<<< HEAD
        //$routerService = <?= $use_legacy_container_property ? 'self::$container' : 'static::getContainer()'; ?>->get('router');
        //$myCustomService = <?= $use_legacy_container_property ? 'self::$container' : 'static::getContainer()'; ?>->get(CustomService::class);
=======
        // $routerService = <?= $use_legacy_container_property ? 'self::$container' : 'static::getContainer()'; ?>->get('router');
        // $myCustomService = <?= $use_legacy_container_property ? 'self::$container' : 'static::getContainer()'; ?>->get(CustomService::class);
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
    }
}
