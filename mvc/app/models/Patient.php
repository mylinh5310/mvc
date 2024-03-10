<?php
class Patient{
    private $id;
    private $fullname;
    private $gender;
    private $dateOfBirth;
    private $address;
    private $mobile;

    /**
     * @param $id
     * @param $fullname
     * @param $gender
     * @param $dateOfBirth
     * @param $address
     * @param $mobile
     */
    public function __construct($id, $fullname, $gender, $dateOfBirth, $address, $mobile)
    {
        $this->id = $id;
        $this->fullname = $fullname;
        $this->gender = $gender;
        $this->dateOfBirth = $dateOfBirth;
        $this->address = $address;
        $this->mobile = $mobile;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getFullname()
    {
        return $this->fullname;
    }

    /**
     * @param mixed $fullname
     */
    public function setFullname($fullname)
    {
        $this->fullname = $fullname;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param mixed $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * @return mixed
     */
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    /**
     * @param mixed $dateOfBirth
     */
    public function setDateOfBirth($dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * @param mixed $mobile
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
    }
    // getall


}