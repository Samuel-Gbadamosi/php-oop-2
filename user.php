<?php
    class user {

      public $id;
      public $nome;
      public $cognome;
      public $paese;
      public $lingua;
      public $eta;



      public function __construct($id){
        $this->id = $id;
      }

    }

    $user_one = new User (1);
    $user_one->nome = 'james';
    $user_one->cognome = 'bond';
    $user_one->paese = 'u.s.a';
    $user_one->lingua = 'English';
    $user_one->eta = '56';

    $user_two = new User (2);
    $user_two->nome = 'lucia';
    $user_two->cognome = 'badrosin';
    $user_two->paese = 'italy';
    $user_two->lingua = 'italian';
    $user_two->eta = '25';

    $user_three = new User (3);
    $user_three->nome = 'stephanie';
    $user_three->cognome = 'bradley';
    $user_three->paese = 'south-africa';
    $user_three->lingua = 'english';
    $user_three->eta = '18';


    $userslibrary = [$user_one,$user_two,$user_three];


var_dump($userslibrary);
