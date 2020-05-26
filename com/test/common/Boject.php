<?php

namespace com\test\common;

class Boject{
    // ... code ...
    public $zz = 1;
}



class Tsring extends Boject {
    // ... code ...
}

$ob = new Tsring();
var_dump($ob.$zz);
?>