<?php
namespace FAAPI;

class Category
{
	// Get Items
	public function get($rest)
	{
		$req = $rest->request();
		include_once (API_ROOT . "/category.inc");

		$page = $req->get("page");

		if ($page == null) {
			category_all(null);
		} else {
			// If page = 1 the value will be 0, if page = 2 the value will be 1, ...
			$from = -- $page * RESULTS_PER_PAGE;
			category_all($from);
		}
	}

	// Get Specific Item by Stock Id
	public function getById($rest, $id)
	{
		include_once (API_ROOT . "/category.inc");
		category_get($id);
	}
	// Add Item
	public function post($rest)
	{
		include_once (API_ROOT . "/category.inc");
		category_add();
	}
	// Edit Specific Item
	public function put($rest, $id)
	{
		include_once (API_ROOT . "/category.inc");
		category_edit($id);
	}
	// Delete Specific Item
	public function delete($rest, $id)
	{
		include_once (API_ROOT . "/category.inc");
		category_delete($id);
	}
}