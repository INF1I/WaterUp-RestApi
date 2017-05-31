<?php
/**
 * Author: Joris Rietveld <jorisrietveld@gmail.com>
 * Created: 31-05-2017 21:30
 * Licence: GNU General Public licence version 3 <https://www.gnu.org/licenses/quick-guide-gplv3.html>
 */
declare(strict_types=1);

namespace RestBundle\Entity;

/**
 * @ORM\Entity
 * @ORM\Table(name="Warning")
 * @Gedmo\SoftDeleteable(fieldName="dateRemoved", timeAware=false)
 */
class Warning
{
    protected $id;
    protected $potStateId;
    protected $type;
    protected $dateRemoved;
}