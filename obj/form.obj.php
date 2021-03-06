<?php
/**
* Object FORM
* @author	Alyx Association <info@alyx.it>
* @version	Factory
* @package	Object
* @copyright	Alyx Association 2008-2010
* @license GNU Public License
* You can find documentation and sourcecode on the JAMP official website
* http://jamp.alyx.it/
*/

class ClsObj_form extends ClsObject {
	/**
	* @var $container Array containing the child objects
	*/
	var $child = array();

	/**
	* Construct
	* @param string $id ID object
	*/
	public function __construct($id)
	{
		$this->property["id"]				= array("value" => $id,  "inherit" => false, "html" => true);
		$this->property["action"]			= array("value" => "#",  "inherit" => false, "html" => true);
		$this->property["method"]			= array("value" => null, "inherit" => false, "html" => true);
		$this->property["enctype"]			= array("value" => null, "inherit" => false, "html" => true);
		$this->property["target"]			= array("value" => null, "inherit" => false, "html" => true);
		$this->property["accept-charset"]		= array("value" => null, "inherit" => false, "html" => true);
		$this->property["name"]				= array("value" => null, "inherit" => false, "html" => true);
		$this->property["accesskey"]			= array("value" => null, "inherit" => false, "html" => true);
		$this->property["style"]				= array("value" => null, "inherit" => false, "html" => true);
		$this->property["tabindex"]			= array("value" => null, "inherit" => false, "html" => true);
				
		// Not supported in HTML5
		$this->property["onreset"]			= array("value" => null, "inherit" => false, "html" => true);
		$this->property["onsubmit"]			= array("value" => null, "inherit" => false, "html" => true);
		
		// Attribute HTML 5
		$this->property["contenteditable"]		= array("value" => null, "inherit" => false, "html" => true);
		$this->property["contextmenu"]		= array("value" => null, "inherit" => false, "html" => true);
		$this->property["draggable"]			= array("value" => null, "inherit" => false, "html" => true);		
		$this->property["dropzone"]			= array("value" => null, "inherit" => false, "html" => true);
		$this->property["hidden"]			= array("value" => null, "inherit" => false, "html" => true);
		$this->property["spellcheck"]			= array("value" => null, "inherit" => false, "html" => true);
		$this->property["translate"]			= array("value" => null, "inherit" => false, "html" => true);
		
		// Events HTML 5
		$this->property["oncontextmenu"]		= array("value" => null, "inherit" => false, "html" => true);
		$this->property["onfocus"]			= array("value" => null, "inherit" => false, "html" => true);
		$this->property["onformchange"]		= array("value" => null, "inherit" => false, "html" => true);
		$this->property["onforminput"]		= array("value" => null, "inherit" => false, "html" => true);
		$this->property["oninput"]			= array("value" => null, "inherit" => false, "html" => true);
		$this->property["oninvalid"]			= array("value" => null, "inherit" => false, "html" => true);				
	}

	/**
	* Generate the code pdf
	* @param string $pdf Class PDF
	*/
	public function codePDF($pdf)
	{
	}

	/**
	* Generate the code text
	*/
	public function codeTXT()
	{
	}

	/**
	* Generate the code html
	* @param string $tab Tabs
	*/
	public function codeHTML($tab = "")
	{
		$code = "";
		if (!empty($this->property["label"]["value"])) $code .= $this->property["label"]["value"];
		$code .= "\n$tab<form ".$this->getProperty("html", true, false).">";
		foreach ($this->child as $obj) $code .= $obj->codeHTML($tab."\t");
		$code .= "\n$tab</form>";
		return $code;
	}

	/**
	* The function is called after each setting of a property
	* @param string $name Name property
	*/
	protected function setPropertyAfter($name)
	{
	}
}
?>