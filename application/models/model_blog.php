<?php

class Model_Blog extends Model
{
	private $blogArray;
	
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
	
	private function blogInsert($title,$description){
		parent::dbConnect();
		$strSQL = "INSERT INTO crud_blog (title, description) VALUES ('" .$title. "','" .$description. "')";
		$insert = mysql_query($strSQL);
		parent::dbClose();
		return $insert;
	}
	
	public function get_data()
	{	
		$this->blogSelect();
		return $this->blogArray;
		
	}
	
	public function new_data($title,$description){
		$status=$this->blogInsert($title,$description);
		return $status;
	}

}
