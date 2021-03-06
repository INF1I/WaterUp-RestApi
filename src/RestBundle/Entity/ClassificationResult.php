<?php
/**
 * Author: Joris Rietveld <jorisrietveld@gmail.com>
 * Created: 31-05-2017 22:09
 * Licence: GNU General Public licence version 3 <https://www.gnu.org/licenses/quick-guide-gplv3.html>
 */
declare(strict_types=1);

namespace RestBundle\Entity;

use \Doctrine\ORM\Mapping as ORM;
use \Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity
 * @ORM\Table(name="ClassificationResult")
 * @Gedmo\SoftDeleteable(fieldName="dateRemoved", timeAware=false)
 */
class ClassificationResult
{
    /**
     * This column holds the unique record identification code that is generated by the database upon record creation.
     *
     * @var int
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * This attribute contains an reference to the unique identification code of the Picture entity.
     *
     * @var int
     * @ORM\Column(type="int" name="picture_id")
     * @ORM\OneToOne(targetEntity="RestBundle\Entity\Picture")
     */
    protected $picture;

    /**
     * This attribute contains an timestamp from the creation of this record, that is when an picture was
     * uploaded trough the API and classified by an neural network.
     *
     * @var \DateTime
     * @ORM\Column(type="datetime", name="date_classified")
     * @Gedmo\Timestampable(on="create")
     */
    protected $dateClassified;

    /**
     * This column holds the timestamp of the date the record was soft deleted. The record will still exist in the
     * database but marked as unactive.
     *
     * @var \DateTime
     * @ORM\Column(name="date_removed", type="datetime", nullable=true)
     */
    protected $dateRemoved;
}
