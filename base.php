<?php
require_once 'vendor/smarty/smarty/libs/Smarty.class.php';
require_once './env.php';
class base {
	public $smarty;
	public $pdo;
	public $id="" ;
	public $email="";
	public $pass="";
	public $passConf="";
	public function  __construct(){
//		session_start();
		$this->smarty = new Smarty();
		$this->smarty->template_dir = './templates';
		$this->smarty->compile_dir = './templates_c';
		$host = DB_HOST;
    	$db   = DB_NAME;
		$user = DB_USER;
		$pass = DB_PASS;

		$dsn = 'mysql:host=$host; dbname=$db;charset=utf8mb8';

		$this->pdo = new PDO($dsn,$user,$pass);//mediapro,mediapro
		$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		if (strpos($_SERVER['SCRIPT_NAME'], 'login2.php') === false &&
				strpos($_SERVER['SCRIPT_NAME'], 'indexAdmin.php') === false &&
				strpos($_SERVER['SCRIPT_NAME'], 'register.php') === false &&
				strpos($_SERVER['SCRIPT_NAME'], 'registered.php') === false) {
			if(!isset($_SESSION['email'])) {
				//$this->smarty->assign('user','ログインしてください。');
				//$this->smarty->display('loggedIn.tpl');
				header('Location:Login2.php');
				exit;
			}
		}
		$this->execute();//移動先のメソッド実行する
 	}
	public function makeDir($email) {
		$dir = 'upload';
		$this->makeDirectory($dir);
		$dir.= "/{$email}";
		$this->makeDirectory($dir);
		return $dir;
	}
	private function makeDirectory($dir) {
		if(!file_exists($dir)){
			mkdir($dir);
		}
	}
}
?>