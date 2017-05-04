
<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Blog extends Controller {

	public function action_index()
	{
		$posts = ORM::factory('Post')->find_all();
		$view = View::factory('blog/index')->bind('Post', $posts);
	  $this->response->body($view);
	}

} // End Welcome
