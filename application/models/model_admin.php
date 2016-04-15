<?php

class Model_Admin extends Model
{
	private $blogArray;
	
	public function get_data()
	{	
		$this->blogSelect();
		return $this->blogArray;
		
	}
	
	public function new_data($title,$description){
		$status=$this->blogInsert($title,$description);
		return $status;
	}
	
	public function update_data($title,$description,$id){
		$status=$this->blogUpdate($title,$description,$id);
		return $status;
	}
	
	public function delete_data($id){
		$status=$this->blogDelete($id);
		return $status;
	}
	
	public function getSingleArticle($id){
		$data=$this->blogSelectById($id);
		return $data;
	}
	
	private function blogSelect(){
		parent::dbConnect();
		
		$strSQL = "SELECT id, title, description FROM crud_blog";
		$objQuery = mysql_query($strSQL);
		$intNumField = mysql_num_fields($objQuery);
		$this->blogArray = array();
		while($obResult = mysql_fetch_array($objQuery))
			{
		$arrCol = array();
		for($i=0;$i<$intNumField;$i++)
			{
			$arrCol[mysql_field_name($objQuery,$i)] = $obResult[$i];
		}
		array_push($this->blogArray,$arrCol);
			}
		parent::dbClose();
	}
	
	private function blogUpdate($title,$description,$id){
		parent::dbConnect();
		$strSQL = "UPDATE crud_blog SET title='" .$title. "', description='" .$description. "' WHERE id='" .$id. "'";
		
		$update = mysql_query($strSQL);
		parent::dbClose();
		return $update;
	}
	
	private function blogInsert($title,$description){
		parent::dbConnect();
		$strSQL = "INSERT INTO crud_blog (title, description) VALUES ('" .$title. "','" .$description. "')";
		$insert = mysql_query($strSQL);
		parent::dbClose();
		return $insert;
	}
	
	private function blogDelete($id){
		parent::dbConnect();
		$strSQL = "DELETE FROM crud_blog WHERE id='" .$id. "'";
		$insert = mysql_query($strSQL);
		parent::dbClose();
		return $insert;
	}
	
	private function blogSelectById($id){
		parent::dbConnect();
		$strSQL = "SELECT id, title, description FROM crud_blog WHERE id='" . $id . "'";
		$objQuery = mysql_query($strSQL);
		$data = mysql_fetch_array($objQuery);
		return $data;
	}
	

}
