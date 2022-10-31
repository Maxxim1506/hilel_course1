<?php 

namespace Core\orm;
use Core\orm\common\Connector;

class Delete
{
	private $tableName;
	private $id;

	public function getId(): int
	{
		return $this->id;
	}

	public function setId($id): void
	{
		$this->id = $id;
	}

	public function getTableName(): string 
	{
		return $this->tableName;
	}

	public function setTableName($tableName): void 
	{
		$this->tableName = $tableName;
	}


	public function delete()
    {
        $sql = 'DELETE FROM ' .$this->tableName.  ' WHERE id = ' .$this->id;
        return $sql;
    }

    public function execute()
	{
		$connect = new Connector();
		$PDO = $connect->connect();
		return $PDO->query($this->delete());
	}

}