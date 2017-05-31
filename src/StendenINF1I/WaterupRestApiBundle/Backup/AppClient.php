<?php
/**
 * Author: Joris Rietveld <jorisrietveld@gmail.com>
 * Created: 31-05-2017 15:40
 * Licence: GNU General Public licence version 3 <https://www.gnu.org/licenses/quick-guide-gplv3.html>
 */
declare(strict_types=1);

namespace StendenINF1I\WaterupRestApiBundle\Entity;

use StendenINF1I\WaterupRestApiBundle\Model\AppClient as AppClientBase;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(AppClient)
 */
class AppClient extends AppClientBase
{

}