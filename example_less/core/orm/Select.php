<?php 
namespace Core\orm;
use Core\orm\common\Connector;
use Core\orm\Where;

class Select 
{
	protected $tableName;
	protected $columns = '*';
	protected $where;

	public function where($condition)
	{
		$this->where = new Where();
		$this->where->setWhere($condition); 

	}

	public function getTableName()
	{
		return $this->tableName;
	}

	public function setTableName($tableName): void
	{
		$this->tableName = $tableName;
	}

	public function setWhere($where): void
	{
		$this->where = $where;
	}

	public function getWhere()
	{
		return $this->where;
	}

	public function getColumns()
	{
		return $this->columns;
	}

	public function setColumns($columns): void
	{
		$this->columns = $columns;
	}

	public function getSQL()
	{
		$sql = 'SELECT ' . $this->columns . ' FROM ' . $this->tableName;

		if(!empty($this->where))
		{
			$sql .=$this->where->getWhere();
		} 
		var_dump($sql);
		return $sql;
	}
	public function execute()
	{
		$connect = new Connector();
		$PDO = $connect->connect();
		return $PDO->query($this->getSQL());
	}
}