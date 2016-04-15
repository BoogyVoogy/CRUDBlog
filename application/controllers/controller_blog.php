<?php

class Controller_Blog extends Controller
{

	function __construct()
	{
		$this->model = new Model_Blog();
		$this->view = new View();
	}
	
	function action_index()
	{
		$data = $this->model->get_data();		
		$this->view->generate('blog_view.php', 'template_view.php', $data);
	}
	
	
	function action_add()
	{
		

		if(isset($_POST['title']) && isset($_POST['description']))
			{
			$title = $_POST['title'];
			$description =$_POST['description'];
			$status=$this->model->new_data($title, $description);
		
		
			if ($status){
				$data["newdata_status"] = "success";
			}else{
				$data["newdata_status"] = "fail";
			}
			}else{
				$data["newdata_status"] = "";
			}
			$this->view->generate('articleadd_view.php', 'template_view.php', $data);
		
	}
}
