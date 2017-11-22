 <?php 

require_once("vendor/autoload.php"); //tras as dependencias que o projeto precisa

use \Slim\Slim;   //carrega as namespace que eu preciso dentro de milhares
use \Hcode\Page;
use \Hcode\PageAdmin;

$app = new \Slim\Slim(); //rota nova aplicação

$app->config('debug', true); //se tiver erro ele vai mostrar com o comando debug

$app->get('/', function() {  //chamada padrão
	
	$page = new Page();  //coloca o header 
	
	$page->setTpl("index");  //carrega o conteudo do index e o destrutor que vai no rodapé
    
});

$app->get('/admin', function() {  //chamada padrão
	
	$page = new PageAdmin();  //coloca o header 
	
	$page->setTpl("index");  //carrega o conteudo do index e o destrutor que vai no rodapé
    
});


$app->run();   //executa

 ?>