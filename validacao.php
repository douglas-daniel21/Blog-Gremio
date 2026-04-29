<?php

namespace Douglas\Blog;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Translation\FileLoader; 
use Illuminate\Translation\Translator;
use Illuminate\Validation\Factory;

class Validation{
    private $fileLoader;

    private $translator;

    private $factory;

    public function __construct(){
        $this->fileLoader = new FileLoader(new Filesystem(),"");
        $this->translator = new Translator(this->fileLoader,"");
        $this->factory = new Factory($this->translator);
    }

    public function validator(array $data, array $rules, array $messages):Validator{
        return $this->factory->make($data,$rules,$messages)->validate;
    }
}