<?php
/**
 * Author: Joris Rietveld <jorisrietveld@gmail.com>
 * Created: 31-05-2017 14:49
 * Licence: GNU General Public licence version 3 <https://www.gnu.org/licenses/quick-guide-gplv3.html>
 */
declare(strict_types=1);

namespace StendenINF1I\WaterupRestApiBundle\Model;


class Hello
{
    private $greet;

    public function __construct()
    {
        $this->greet = 'Hello World!!!';
    }

    public function __toString()
    {
        return $this->greet;
    }
}