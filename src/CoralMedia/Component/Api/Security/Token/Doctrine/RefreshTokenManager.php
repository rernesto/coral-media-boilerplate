<?php


namespace CoralMedia\Component\Api\Security\Token\Doctrine;


use Doctrine\Persistence\ObjectManager;

class RefreshTokenManager extends \Gesdinet\JWTRefreshTokenBundle\Doctrine\RefreshTokenManager
{
    /**
     * RefreshTokenManager constructor.
     * @param ObjectManager $om
     * @param $class
     */
    public function __construct(ObjectManager $om, $class)
    {
        $this->objectManager = $om;
        $this->repository = $om->getRepository($class);
        $metadata = $om->getClassMetadata($class);
        $this->class = $metadata->getName();
    }
}