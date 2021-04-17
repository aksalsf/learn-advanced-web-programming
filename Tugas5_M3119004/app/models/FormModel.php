<?php

class FormModel
{
	public $action; // merujuk pada lokasi file action form

	public $method; // mendefinisikan method form (GET/POST)

	public $submit;
	
	public $buttonText; // untuk tulisan pada tombol submit

	public $field = 0; // untuk menghitung jumlah field yang telah dibuat

	public $fields = []; // untuk menyimpan data-data field

	// Deklarasi contructor class Form
	public function __construct()
	{
		$this->action = "";
		$this->method = "POST";
		$this->submit = "submit";
		$this->buttonText = "submit";
	}

    public function set($action, $button, $method = "POST", $submit = "submit")
	{
		$this->action = $action;
		$this->buttonText = $button;
		$this->method = $method;
		$this->submit = $submit;
	}

	public function get()
	{
		$form = [
			'action' => $this -> action,
			'button' => $this -> buttonText,
			'method' => $this -> method,
			'submit' => $this -> submit,
		];
		return $form;
	}

	// Deklarasi function add_field
	public function addField($label, $name, $type, array $value = array(null), array $valueLabel = array(null))
	{
		$this->fields[$this->field]['label'] = $label;
		$this->fields[$this->field]['name'] = $name;
		$this->fields[$this->field]['type'] = $type;
		if ($type == "hidden") {
			$this->fields[$this->field]['value'] = $value;
		}
		if ($type == "select" || $type == "radio" || $type == "checkbox") {
			$this->fields[$this->field]['value'] = $value;
			$this->fields[$this->field]['valueLabel'] = $valueLabel;
		}
		$this->field++;
	}

	public function getFieldNumber()
	{
		return $this -> field;
	}
}