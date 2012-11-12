<?php

Class Form {

	private $form = NULL;

	function __construct($action = NULL, $method = 'POST', $enctype = NULL)
	{
		if ($method != 'POST' && $enctype != NULL) {
			throw new Exception('Form method MUST be POST for an enctype to be set');
		}
		$enctype = (empty($enctype)) ? null : " enctype=\"{$enctype}\"";
		$this->form .= "<form action=\"{$action}\" method=\"{$method}\"{$enctype}>\n";
	}

	/*
	* $name parameter required
	* $type parameter default text
	* $value default null
	* $placeholder default null
	*/

	public function input($name = NULL, $type = 'text', $value = NULL, $placeholder = NULL, $extras = NULL)
	{
		$params = NULL;

		if (empty($name)) {
			throw new Exception('Name parameter should be specified');
		}

		if ($extras != NULL) {
			if (!is_array($extras)) {
				throw new Exception('"Extras" parameter should be array');
			}
			foreach ($extras as $key => $val) {
				$key = htmlspecialchars($key);
				$params .= "{$key}=\"{$val}\" ";
			}
		}

		$value       = (empty($value)) ? NULL : " value=\"{$value}\"";
		$placeholder = (empty($placeholder)) ? NULL : " placeholder=\"{$placeholder}\"";

		$input = "<input type=\"{$type}\" name=\"{$name}\"{$value}{$placeholder} {$params}/>\n";

		$this->form .= $input;
		
	}

	public function submit($value = 'Submit', $name = NULL)
	{
		$name  = (empty($name)) ? NULL : " name=\"{$namee}\"";
		$input = "<input type=\"submit\"{$name} value=\"{$value}\"/>\n";

		$this->form .= $input;
	}

	public function textarea($name = NULL, $extras = NULL)
	{
		if (empty($name)) {
			throw new Exception('Name parameter should be specified');
		}

		$params = NULL;
		if ($extras != NULL) {
			if (!is_array($extras)) {
				throw new Exception('"Extras" parameter should be array');
			}
			foreach ($extras as $key => $val) {
				$key = htmlspecialchars($key);
				$params .= " {$key}=\"{$val}\"";
			}
		}

		$textarea = "<textarea name=\"{$name}\"{$params}></textarea>\n";

		$this->form .= $textarea;
	}

	public function select($name = NULL, $options = NULL)
	{
		if (empty($name)) {
			throw new Exception('Name parameter should not be null');
		}
		if (!is_array($options)) {
			throw new Exception('Options parameter should be array');
			exit;
		}

		$select = "<select name=\"{$name}\">\n";

		foreach ($options as $key => $value) {
			$select .= "<option value=\"{$key}\">{$value}</option>\n";
		}

		$select .= '</select>';

		$this->form .= $select;
	}

	public function label($text, $for = NULL)
	{
		$label = "<label for=\"{$for}\">{$text}</label>\n";

		$this->form .= $label;
	}

	public function br()
	{
		/*
		* Breaks should not be used for styling
		* This is just for rapid development purposes
		*/

		$this->form .= "<br/>\n";
	}

	public function show()
	{
		$this->form .= '</form>';

		return $this->form;
	}
}







