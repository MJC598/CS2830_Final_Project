<?php
//This is the same MenuComponent class we used in class

require_once('template.php');

class MenuComponent {
	protected $menuItems = array();
	protected $currentPage = '';

	public function __construct($menuItems, $currentPage, $temp) {
		$this->menuItems = $menuItems;
		$this->currentPage = $currentPage;
        $this->template = $temp;
	}
	
	public function generate() {
		$tmpl = new Template();
		$tmpl->menuItems = $this->menuItems;
		$tmpl->currentPage = $this->currentPage;
		$menuHTML = $tmpl->build($this->template);
		
//		$cssFile = "nav.css";
		
        //I could fix this if I have time, but I really don't want to break it rn
		$result = array();
//		$result['cssFile'] = $cssFile;
		$result['html'] = $menuHTML;
		
		return $result;
	}

}
?>