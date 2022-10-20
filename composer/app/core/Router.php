<?php 


namespace App\Core;

class Router
    {
        public $var;

        public function setVar($value)
        {
            $this->var = $value;
        }

        public function run()
        {
            return var_export($this->var);
        }
    }