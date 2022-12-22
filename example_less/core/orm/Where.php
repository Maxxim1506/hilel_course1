<?php 

namespace Core\orm;

class Where 
{
	protected $where = ' where ';

	public function getWhere(): string
	{
		return $this->where;
	}

	public function setWhere($where):void 
	{
		if(is_array($where))
		{

		}else{
			$this->where = $where;
		}
		
	}

}