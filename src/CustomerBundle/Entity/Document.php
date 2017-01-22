<?php
/**
 * Created by PhpStorm.
 * User: mkrc
 * Date: 22/01/2017
 * Time: 15:14
 */

namespace CustomerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Customer
 *
 * @ORM\Table(name="customer_document")
 * @ORM\Entity
 */
class Document
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="doc_date", type="date")
     */
    private $docDate;

    /**
     * @var string
     *
     * @ORM\Column(name="doc_number", type="string")
     */
    private $docNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="doc_place", type="string")
     */
    private $docPlace;
    
    /**
     * @var string
     *
     * @ORM\ManyToOne(targetEntity="DocumentType", cascade={"persist"})
     */
    private $docType;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getDocDate()
    {
        return $this->docDate;
    }

    /**
     * @param string $docDate
     */
    public function setDocDate($docDate)
    {
        $this->docDate = $docDate;
    }

    /**
     * @return string
     */
    public function getDocNumber()
    {
        return $this->docNumber;
    }

    /**
     * @param string $docNumber
     */
    public function setDocNumber($docNumber)
    {
        $this->docNumber = $docNumber;
    }

    /**
     * @return string
     */
    public function getDocPlace()
    {
        return $this->docPlace;
    }

    /**
     * @param string $docPlace
     */
    public function setDocPlace($docPlace)
    {
        $this->docPlace = $docPlace;
    }

    /**
     * @return string
     */
    public function getDocType()
    {
        return $this->docType;
    }

    /**
     * @param string $docType
     */
    public function setDocType(DocumentType $docType)
    {
        $this->docType = $docType;
    }

    public function __toString()
    {
        return $this->getDocNumber();
    }
}