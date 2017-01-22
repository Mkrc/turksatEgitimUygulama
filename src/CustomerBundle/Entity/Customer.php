<?php

namespace CustomerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Customer
 *
 * @ORM\Table(name="customer")
 * @ORM\Entity(repositoryClass="CustomerBundle\Repository\CustomerRepository")
 */
class Customer
{
    const NATIONALITY_TURKEY = 'turkey';
    const NATIONALITY_OTHER = 'other';

    const GENDER_MALE = 'male';
    const GENDER_FEMALE = 'female';

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
     * @ORM\Column(name="nationality", type="string", length=100, columnDefinition="ENUM('turkey', 'other')")
     */
    private $nationality;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=100)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=100)
     */
    private $lastname;

    /**
     * @var integer
     *
     * @ORM\Column(name="vatnumber", type="bigint")
     */
    private $vatnumber;


    /**
     * @var string
     *
     * @ORM\Column(name="gender", type="string", length=100, columnDefinition="ENUM('male', 'female')")
     */
    private $gender;
    
    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * @var string
     *
     * @ORM\Column(name="father_name", type="string", length=180)
     */
    private $fatherName;


    /**
     * @var string
     *
     * @ORM\Column(name="mother_name", type="string", length=180)
     */
    private $motherName;


    /**
     * @var string
     *
     * @ORM\Column(name="birth_place", type="string", length=180)
     */
    private $birthPlace;


    /**
     * @var string
     *
     * @ORM\Column(name="birthday", type="date", length=180)
     */
    private $birthday;

    /**
     * @var string
     *
     * @ORM\OneToOne(targetEntity="Document", cascade={"persist"})
     * @ORM\JoinColumn(name="document_id", referencedColumnName="id")
     */
    private $document;

    /**
     * Set firstname
     *
     * @param string $firstname
     *
     * @return Customer
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @return string
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * @param string $birthday
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
    }

    /**
     * @return string
     */
    public function getBirthPlace()
    {
        return $this->birthPlace;
    }

    /**
     * @param string $birthPlace
     */
    public function setBirthPlace($birthPlace)
    {
        $this->birthPlace = $birthPlace;
    }

    /**
     * @return string
     */
    public function getFatherName()
    {
        return $this->fatherName;
    }

    /**
     * @param string $fatherName
     */
    public function setFatherName($fatherName)
    {
        $this->fatherName = $fatherName;
    }

    /**
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param string $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * @return string
     */
    public function getMotherName()
    {
        return $this->motherName;
    }

    /**
     * @param string $motherName
     */
    public function setMotherName($motherName)
    {
        $this->motherName = $motherName;
    }

    /**
     * @return int
     */
    public function getVatnumber()
    {
        return $this->vatnumber;
    }

    /**
     * @param int $vatnumber
     */
    public function setVatnumber($vatnumber)
    {
        $this->vatnumber = $vatnumber;
    }


    /**
     * @return string
     */
    public function getNationality()
    {
        return $this->nationality;
    }

    /**
     * @param string $nationality
     */
    public function setNationality($nationality)
    {
        $this->nationality = $nationality;
    }

    public static function getNationalityList() {
        return array(
            'Türkiye' => self::NATIONALITY_TURKEY,
            'Yabancı' => self::NATIONALITY_OTHER
        );
    }

    public static function getGenderList() {
        return array(
            'Erkek' => self::GENDER_MALE,
            'Kadın' => self::GENDER_FEMALE

        );
    }

    /**
     * @return string
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * @param string $document
     */
    public function setDocument(Document $document)
    {
        $this->document = $document;
    }

    /**
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param string $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }
}

