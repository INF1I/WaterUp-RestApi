<?php
/**
 * Author: Joris Rietveld <jorisrietveld@gmail.com>
 * Created: 31-05-2017 15:37
 * Licence: GNU General Public licence version 3 <https://www.gnu.org/licenses/quick-guide-gplv3.html>
 */
declare(strict_types=1);

namespace StendenINF1I\WaterupRestApiBundle\Model;

use FOS\UserBundle\Model\User as BaseUser;

class AppClient extends BaseUser
{
    /**
     * @var string
     */
    protected $id;

    /**
     * Customer constructor.
     * @param $id
     */
    public function __construct()
    {
        $this->id = $this->id ? $this->id : uniqid();
        parent::__construct();
    }

    /**
     * Get id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
}