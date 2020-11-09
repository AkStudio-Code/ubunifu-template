<?php
use Triposhub\Ubunifu\Application\Model;

class Uview extends \Triposhub\Ubunifu\Application\View
{
    private $file;

    function __construct()
  {
      parent::__construct();
  }
    function render($filename, $model=[], $scripts=[]){
        $this ->file= $filename;
        if ($model) {
            foreach ($model as $key => $value) {
                $this->{$key} = $value;
            }
        }

        if ($scripts){
            foreach ($scripts as $key => $value) {
                $this->{$key} = $value;
            }
        }
    }
}