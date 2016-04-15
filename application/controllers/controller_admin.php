<?php

class Controller_Admin extends Controller
{
	
	function __construct()
	{
		$this->model = new Model_Admin();
		$this->view = new View();
	}
	
	function action_delete()
	{
		session_start();
				if ( $_SESSION['admin'] == "12345" )
		{
		if(isset($_POST['id']))
		{
			$id = $_POST['id'];
			$status=$this->model->delete_data($id);
			if ($status){
				$data["delete_status"] = "success";
			}else{
				$data["delete_status"] = "fail";
			}
			}else{
				Route::ErrorPage404();
			}
			$this->view->generate('delete_view.php', 'template_view.php', $data);
		}
		else
		{
			session_destroy();
			Route::ErrorPage404();
		}

}


	function action_update()
	{
		session_start();
		if ( $_SESSION['admin'] == "12345" )
		{
			if(isset($_POST['id']))
			{
				$id = $_POST['id'];
				$data=$this->model->getSingleArticle($id);
				$this->view->generate('update_view.php', 'template_view.php', $data);
			}
		}	
		else
		{
			session_destroy();
			Route::ErrorPage404();
		}

		
	}
	
	function action_save()
	{
		session_start();
		if ( $_SESSION['admin'] == "12345" )
		{

		if(isset($_POST['title']) && isset($_POST['description']) && isset($_POST['id']))
			{
			$title = $_POST['title'];
			$description =$_POST['description'];
			$id = $_POST['id'];
			$status=$this->model->update_data($title, $description,$id);
		
		//$data = $this->model->get_data();
			if ($status){
				$data["updatedata_status"] = "success";
			}else{
				$data["updatedata_status"] = "fail";
			}
			}else{
				$data["newdata_status"] = "";
			}
			$this->view->generate('articlesave_view.php', 'template_view.php', $data);
		
		}	
		else
		{
			session_destroy();
			Route::ErrorPage404();
		}
	}

	function action_index()
	{
		session_start();
		
		/*
		Для простоты, в нашем случае, проверяется равенство сессионной переменной admin прописанному
		в коде значению — паролю. Такое решение не правильно с точки зрения безопасности.
		Пароль должен храниться в базе данных в захешированном виде, но пока оставим как есть.
		*/
		if ( $_SESSION['admin'] == "12345" )
		{
			
			$data = $this->model->get_data();	
			$this->view->generate('admin_view.php', 'template_view.php',$data);
		}
		else
		{
			session_destroy();
			Route::ErrorPage404();
		}

	}
	
	// Действие для разлогинивания администратора
	function action_logout()
	{
		session_start();
		session_destroy();
		header('Location:/');
	}

}
