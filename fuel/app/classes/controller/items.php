<?php

class Controller_Items extends Controller_Template
{

	public function action_index()
	{
	    $item = Model_Item::find(1);
		$data["subnav"] = array('index'=> 'active' );
		$data['item'] = $item;
		$this->template->title = 'Items &raquo; index';
		$this->template->content = View::forge('items/index', $data);
	}

}
