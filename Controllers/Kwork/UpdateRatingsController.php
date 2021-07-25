<?php


namespace Controllers\Kwork;


use Controllers\BaseController;
use KworkManager;
use Symfony\Component\HttpFoundation\Request;

class UpdateRatingsController extends BaseController {

	public function __invoke(Request $request) {
		$updated = KworkManager::calculateRatings();
		$updated_category = KworkManager:: calculateCategoryRating();
		return $this->success(array_merge($updated, $updated_category));
	}
}