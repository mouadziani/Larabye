<?php

class Formation
{
	private $table = "formations";
	public $id;
	public $objectif;
	public $type;
	public $lieu;
	public $formateurs = [];
	??

	public function getFormateurs($id = $this->id)
	{
		$sql = "SELECT ${table}.* FROM formations, formateurs, formation_ligne WHERE ${table}.id = formation_ligne.formation_id AND formateurs.id = formation_ligne.formateur_id AND formations.id = :id";
		return getDatas($sql);
	}

	public function __construct($id = null, $objectif = null, $type = null, $lieu = null)
	{
		$this->id = $id;
		$this->objectif = $objectif;
		$this->type = $type;
		$this->lieu = $lieu;
	}

	public function getAll()
	{
		$sql = "SELECT * FROM {$this->table}";
		return getDatas($sql);
	}

	public function find($id)
	{
		$sql = "SELECT * FROM {$this->table} WHERE id = :id";
		$result = getData($sql, ['id' => $id]);
		if($result) {
			return new static($result->id, $result->objectif, $result->type, $result->lieu);
		}
		return null;
	}

	public function save()
	{
		$sql = "INSERT INTO {$this->table} (objectif, tyepe, lieu) VALUES (:objectif, :type, :lieu)";
		$params = ['objectif' => $this->objectif, 'type' => $this->type, 'lieu' => $this->lieu];
		return setData($sql, $params);
	}

	public function update()
	{
		$sql = "UPDATE {$this->table} SET objectif = :objectif, type = :type, lieu = :lieu WHERE id = :id";
		$params = ['id' => $this->id, 'objectif' => $this->objectif, 'type' => $this->type, 'lieu' => $this->lieu];
		return setData($sql, $params);
	}

	public function delete($id)
	{
		$sql = "DELETE FROM {$this->table} WHERE id = :id";
		return setData($sql, ['id' => $id]);
	}
}