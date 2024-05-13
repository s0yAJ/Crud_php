<?php

class Integrante{
    public $Id = 0;
    public $Name = '';
    public $LastName = '';
    public $Email = '';
    public $Phone = '';
    public $Skill = '';
    public $Language = '';

    function __construct($id = null, $name = '',$lastName = '',$email = '',$phone = '',$skill = '',$language = '')
    {
        $this->Id = $id;
        $this->Name = $name;
        $this->LastName = $lastName;
        $this->Email = $email;
        $this->Skill = $skill;
        $this->Phone = $phone;
        $this->Language = $language;
    }
}