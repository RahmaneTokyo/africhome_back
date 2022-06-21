<?= "<?php\n" ?>

namespace <?= $namespace; ?>;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

class <?= $class_name ?> extends AbstractExtension
{
    public function getFilters(): array
    {
        return [
            // If your filter generates SAFE HTML, you should add a third
            // parameter: ['is_safe' => ['html']]
<<<<<<< HEAD
            // Reference: https://twig.symfony.com/doc/2.x/advanced.html#automatic-escaping
=======
            // Reference: https://twig.symfony.com/doc/3.x/advanced.html#automatic-escaping
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
            new TwigFilter('filter_name', [$this, 'doSomething']),
        ];
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('function_name', [$this, 'doSomething']),
        ];
    }

    public function doSomething($value)
    {
        // ...
    }
}
