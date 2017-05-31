<?php
/**
 * Author: Joris Rietveld <jorisrietveld@gmail.com>
 * Created: 31-05-2017 22:09
 * Licence: GNU General Public licence version 3 <https://www.gnu.org/licenses/quick-guide-gplv3.html>
 */
declare(strict_types=1);

namespace RestBundle\Entity;

/**
 * @ORM\Entity
 * @ORM\Table(name="ClassificationResult")
 * @Gedmo\SoftDeleteable(fieldName="dateRemoved", timeAware=false)
 */
class ClassificationResult
{
    protected $id;
    protected $picture;
    protected $dateClassified;
    protected $dateRemoved;
}