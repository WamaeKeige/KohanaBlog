

<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

	public function action_index()
	{
		$posts = ORM::factory('post')->find_all();
		$view = View::factory('blog/index')
		->bind('posts' , $posts);
	 $this->response->body($view);
	}
	public function action_new(){
		if($_POST){
			try{
				$posts = ORM::factory('post');
				$posts->title=$_POST['title'];
				$posts->body=$_POST['body'];
				$posts->save();
				$this->redirect('blog/index.php');
			}
			catch (ORM_Validation_Exception $e){
				$errors = $e->errors('model');
			}
		}
		$view = View::factory('blog/new')->bind('errors', $errors)->bind('values',$_POST);
		$this->response->body($view);
	}

} // End Welcome
