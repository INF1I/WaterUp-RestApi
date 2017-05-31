<?php

namespace StendenINF1I\WaterupRestApiBundle\Entity;

use StendenINF1I\WaterupRestApiBundle\Model\AppClient as AppClientBase;

/**
 * AppUser
 */
class AppClient extends AppClientBase
{
    /**
     * @var int
     */
    protected $id;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}

