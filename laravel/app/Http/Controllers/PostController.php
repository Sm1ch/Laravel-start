<?php
	namespace App\Http\Controllers;
	

	// class PostController extends Controller
	// {
	// 	public function show($id)
	// 	{	
	// 		$users = [
	// 		'user1' => 'Махачкала',
	// 		'user2' => 'Кизилюрт',
	// 		'user3' => 'Хасавюрт',
	// 		'user4' => 'Кизляр',
	// 		'user5' => 'Дербент',
	// 	];
	// 		return $users[$id];
	// 	}
	// }
	
	// class PostController extends Controller
	// {
	// 	public function show()
	// 	{
	// 		return view('test', ['name' => 'Къоз', 'surname' => 'Къозов']);
	// 	}
	// }
	class PostController extends Controller
	{
		public function show()
		{
			return view('test', ['text' => 'Тут могла быть реклама легких колясок']);
		}
	}
?>