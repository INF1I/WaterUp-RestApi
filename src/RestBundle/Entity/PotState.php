<?php
/**
 * Author: Joris Rietveld <jorisrietveld@gmail.com>
 * Created: 31-05-2017 21:27
 * Licence: GNU General Public licence version 3 <https://www.gnu.org/licenses/quick-guide-gplv3.html>
 */
declare(strict_types=1);

namespace RestBundle\Entity;

/**
 * @ORM\Entity
 * @ORM\Table(name="PotState")
 * @Gedmo\SoftDeleteable(fieldName="dateRemoved", timeAware=false)
 */
class PotState
{
    protected $id;
    protected $potId;
    protected $plantId;
    protected $waterLevel;
    protected $soilMoisture;
    protected $dateMeasurement;
    protected $dateRemoved;
}