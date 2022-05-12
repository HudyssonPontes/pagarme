<?php

namespace Source\Models;

class user extends DataLayer{

    public function __construct(){
        parent::__construct(entity: "users", ["first_name", "last_name", "email"]);
    }
}

?>