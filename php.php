<?php
  class Foo {
      public $aMemberVar = 'aMemberVar Member Variable';
      public $aFuncName = 'aMemberFunc';
    
    
      function aMemberFunc() {
          print 'Inside `aMemberFunc()`';
      }
  }

  class JohnCarloGarceniego {
    function __constructor() {
      $this->nickName = 'Jols';
      $this->dayOfNBirthTimestamp =  766108800; // April 12 1994
      $this->email = 'johncarlogarceniego@gmail.com';
    }

    function workExperience() {
      return array(
        '2019-now' => 'Web Developer @ Siamese Graphics Desing Studio',
        '2018' => 'Talent Acquisition Assistant @ Convergys (OJT)',
        '2012-2015' => 'Technician @ Contact Live Photography',
      );
    }

    function education() {
      return array(
        '2015-2018' => 'AMA Computer College - Bachelor of Science in Computer Science',
        '2010-2012' => 'AMA Computer Learning Center - Diploma in Software Development',
        '2005-2010' => 'St. Joseph the Worker Community School - High School'
      );
    }

    function skills() {
      return array(
        'HTML/CSS', 'SASS', 'jQuery', 'JavaScript', 'AJAX/JSON', 
        'Bootstrap Design', 'PHP', 'MySQL', 'WordPress', 'Laravel', 
        'React', 'Photoshop', 'Adobe XD'
      )
    }
  }