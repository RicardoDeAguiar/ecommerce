 <?php 

require_once("vendor/autoload.php");

$app = new \Slim\Slim();

$app->config('debug', true); //se tiver erro ele vai mostrar com o comando debug

$app->get('/', function() {
    
	$sql = new Hcode\DB\Sql();   //rota principal
	
    $results = $sql->select("SELECT * FROM tb_users");
	
	echo json_encode($results);
});

$app->run();   //executa

 ?>