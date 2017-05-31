<?php
/**
 * Author: Joris Rietveld <jorisrietveld@gmail.com>
 * Created: 31-05-2017 21:25
 * Licence: GNU General Public licence version 3 <https://www.gnu.org/licenses/quick-guide-gplv3.html>
 */
declare(strict_types=1);

namespace RestBundle\Entity;

/**
 * @ORM\Entity
 * @ORM\Table(name="Plant")
 * @Gedmo\SoftDeleteable(fieldName="dateRemoved", timeAware=false)
 */
class Plant
{
    protected $id;
    protected $name;
    protected $moisterNeed;
    protected $dutchName;
    protected $description;
    protected $preferedLowerTemerature;
    protected $preferedUpperTemteratue;
    protected $preferedLuminosity;
    protected $dateAdded;
    protected $dateUpdated;
    protected $dateRemoved;
}