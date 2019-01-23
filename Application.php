<?php 

$host = $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'];
echo $host;
define('INCLUDE_PATH_FULL', $host.'/mvc/Views/pages/templates/');

class Application{
	public function executar(){
		$url = isset($_GET['url']) ? explode('/',$_GET['url'])[0] : 'Home';
		$url = ucfirst($url);
		$url.="Controllers";
		if (file_exists('Controllers/'.$url.'.php')){
			$className = 'Controllers\\'.$url;
			// echo $className;
			// echo "<br>";
			// echo "Estou carregando a class:".$url;
			$controller = new $className;
			$controller->executar();
		}else{
			die("Não existe esse controlador!");
		}
	}
}
?>