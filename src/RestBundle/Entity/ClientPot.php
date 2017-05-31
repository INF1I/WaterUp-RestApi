<?php
/**
 * Author: Joris Rietveld <jorisrietveld@gmail.com>
 * Created: 31-05-2017 21:23
 * Licence: GNU General Public licence version 3 <https://www.gnu.org/licenses/quick-guide-gplv3.html>
 */
declare(strict_types=1);

namespace RestBundle\Entity;

/**
 * @ORM\Entity
 * @ORM\Table(name="ClientPot")
 * @Gedmo\SoftDeleteable(fieldName="dateRemoved", timeAware=false)
 */
class ClientPot
{
    protected $id;
    protected $client;
    protected $pot;
    protected $coupleDate;
    protected $dateRemoved;
}