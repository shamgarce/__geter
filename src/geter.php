<?php
namespace Sham\geter;


class geter
{
      private $_config;

      private static $instance;
      public static function getInstance($config = array())
      {
            !(self::$instance instanceof self) && self::$instance = new self($config);
            return self::$instance;
      }

      private function __construct($config = array())
      {
            $this->_config = $config;
      }

      public function checkClass($m,$a)
      {
            $classname =rtrim($this->_config['namespace'],'\\').'\\'.$m;
            $ff = get_class_methods($classname);
            if(!in_array($a,$ff))die('Error::out of Geter limit! FF :  '.$m.'.'.$a);
            $mo = new $classname;
            return $mo;
      }

      public function get($key='')
      {
            if(!$key) return '';
            $key = strtolower($key);
            $mc = explode('.',$key);
            $c = $mc[0];
            $a = $mc[1];
            $p = $mc[2];
            if(!$c || !$a) die('Geter::local error! $key : <b>'.$key.'</b>');
            //===========================================================
            $class = $this->checkClass($c,$a);        //检查 并且返回对象
            //===========================================================
            return $class->$a($p);
      }

}

