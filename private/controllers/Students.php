<?php

/**
 * Home Controller
 */
class Students extends Controller
{
	
	function index($id = null)
	{
		echo "Students Page " . $id;
	}
}