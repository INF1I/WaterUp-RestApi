<?php
/**
 * Author: Joris Rietveld <jorisrietveld@gmail.com>
 * Created: 31-05-2017 21:31
 * Licence: GNU General Public licence version 3 <https://www.gnu.org/licenses/quick-guide-gplv3.html>
 */
declare(strict_types=1);

namespace RestBundle\Entity;

/**
 * @ORM\Entity
 * @ORM\Table(name="Picture")
 * @Gedmo\SoftDeleteable(fieldName="dateRemoved", timeAware=false)
 * @Gedmo\Uploadable
 */
class Picture
{
    protected $id;
    protected $clientPot;
    protected $dateTaken;
    protected $path;
    protected $fileName;
    protected $mimeType;
    protected $size;
    protected $dateClassified;
    protected $classifiedAsPlant;
    protected $dateRemoved;
}