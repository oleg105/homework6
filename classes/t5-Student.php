<?php

require 'classes/t5-User.php';

class Student extends User
{
    private $stipendia;
    private $course;

    /**
     * @return mixed
     */
    public function getStipendia()
    {
        return $this->stipendia;
    }

    /**
     * @param mixed $stipendia
     */
    public function setStipendia($stipendia): void
    {
        $this->stipendia = $stipendia;
    }

    /**
     * @return mixed
     */
    public function getCourse()
    {
        return $this->course;
    }

    /**
     * @param mixed $course
     */
    public function setCourse($course): void
    {
        $this->course = $course;
    }


}