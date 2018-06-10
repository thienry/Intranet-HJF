<?php

use \Thiago\PageAdmin;
use \Thiago\Model\User;
use \Thiago\Model\Post;

$app->get('/admin', function() {

	User::verifyLogin();

	$user = new User();

	$user = User::getFromSession();

	$post = Post::listAllLimit();

	$posts = new Post();

	$page = new PageAdmin();

	$page->setTpl("index", array(
		"user"=>$user->getValues(),
		"posts"=>$posts->getValues(),
		"posts"=>Post::checkList($post)
	));

});

$app->get('/admin/login', function() {

	$page = new PageAdmin([
		"header"=>false,
		"footer"=>false
	]);

	$erro = isset($_GET['erro']) ? $_GET['erro'] : 0;

	$page->setTpl("login", [
		"erro"=>$erro
	]);
});

$app->post('/admin/login', function() {

	User::login($_POST["login"], $_POST["senha"]);

	header("Location: /admin");
	exit;

});

$app->get('/admin/logout', function() {

	User::logout();

	header("Location: /admin/login");
	exit;

});

$app->get("/admin/ausente", function() {
 
	if ($_SESSION[User::SESSION] && (int)$_SESSION[User::SESSION]["id_user"] > 0 &&	(bool)$_SESSION[User::SESSION]["id_user"] === true
	) {
	
		$user = new User();
	 
		$user->get((int)$_SESSION[User::SESSION]['id_user']);
		
		$_SESSION[User::SESSION]['inausente'] = true;
		
		$page = new PageAdmin([
			"header"=>false,
			"footer"=>false,
			'data'=>array(
				'user'=>$user->getValues()
		   )
		]);
		
		$page->setTpl("admin-ausente", [
			'users'=>$user,
		]);
	
	}
   
});

?>