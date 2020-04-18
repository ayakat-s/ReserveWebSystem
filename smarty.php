<?php
require 'vendor/autoload.php';

class customSmarty
{
  private $smartyObj;

  public function __construct()
  {
    $this->smartyObj = new Smarty();
    $this->smartyObj->setTemplateDir('template')->setCacheDir('template/cache')->setCompileDir('templates_c')->setCacheDir('template/cache')->setConfigDir('template/configs');
  }

  public function display($templateName)
  {
    $this->smartyObj->display($templateName);
  }

  public function assign($key,$value)
  {
    $this->smartyObj->assign($key,$value);
  }

}