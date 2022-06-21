<?php

declare(strict_types=1);

namespace Doctrine\ORM\Tools\Console\Helper;

<<<<<<< HEAD
=======
use Doctrine\Deprecations\Deprecation;
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Helper\Helper;

/**
 * Doctrine CLI Connection Helper.
 *
<<<<<<< HEAD
 * @link    www.doctrine-project.org
=======
 * @deprecated This class will be removed in ORM 3.0 without replacement.
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
 */
class EntityManagerHelper extends Helper
{
    /**
     * Doctrine ORM EntityManagerInterface.
     *
     * @var EntityManagerInterface
     */
    protected $_em;

    public function __construct(EntityManagerInterface $em)
    {
<<<<<<< HEAD
=======
        Deprecation::triggerIfCalledFromOutside(
            'doctrine/orm',
            'https://github.com/doctrine/orm/pull/9641',
            'The %s class is deprecated and will be removed in ORM 3.0',
            self::class
        );

>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
        $this->_em = $em;
    }

    /**
     * Retrieves Doctrine ORM EntityManager.
     *
     * @return EntityManagerInterface
     */
    public function getEntityManager()
    {
        return $this->_em;
    }

    /**
     * {@inheritdoc}
     *
     * @return string
     */
    public function getName()
    {
        return 'entityManager';
    }
}
