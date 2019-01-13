<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Student
 *
 * @author veerd
 */
class Student {
    
    //Constructor initializing the properties
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }
    
    //Setting email addresses
    function add_email($which, $address) {
        $this->emails[$which] = $address;
    }
    
    //Setting grades addresses
    function add_grade($grade) {
        $this->grades[] = grade;
    }
}
