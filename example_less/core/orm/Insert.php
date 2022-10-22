<?php 

namespace Core\orm;
use Core\orm\common\Connector;

class Insert
{
	private $tableName;
	private $column = [];
	private $values = [];

	public function getTableName(): string
	{
		return $this->tableName;
	}

	public function setTableName($tableName): void
	{
		$this->tableName = $tableName;
	}

	public function getColumn(): array
	{
		return $this->column;
	}

	public function setColumn($column): void
	{
		$this->column = $column;
	}

	public function getValues(): array
	{
		return $this->values;
	}

	public function setValues($values): void 
	{
		$this->values = $values;
	}

	public function getSQL($fields, $values)
	{
		$result = '';
		foreach ($values as $value) {
			if (empty($result)) {
				$result = "'" . $value . "'";
			}else{
				$result .= ",'" . $value . "'";
			}
		}
		return 'INSERT INTO ' . $this->tableName . ' (' .implode( ',', $fields) . ') VALUES (' . $result . ')';
	}

	public function execute()
	{
		$connect = new Connector();
		$PDO = $connect->connect();
		return $PDO->query($this->getSQL($this->column, $this->values));
	}
}