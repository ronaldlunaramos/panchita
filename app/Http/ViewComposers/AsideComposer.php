<?php

namespace App\Http\ViewComposers;
use Illuminate\Contracts\View\View;
Use App\Category;
Use App\Tag;


class AsideComposer {

	public function compose(View $view) {
		$categories=Category::orderBy('name','DESC')->get();
		$tags=Tag::orderBy('name','DESC')->get();
		$view->with('categories',$categories)
		->with('tags',$tags);
	}
}