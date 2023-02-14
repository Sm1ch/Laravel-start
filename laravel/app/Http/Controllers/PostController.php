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
	// 		return view('test', ['name' => 'Къоз', 'surname' => 'Къозов']); Проверял передачу данных с помощью blade 
	// 	}
	// }

	// class PostController extends Controller
	// {
	// 	public function show()
	// 	{
	// 		return view('test', ['text' => 'Тут могла быть реклама легких колясок']);
	// 	}
	// }

	// class PostController extends Controller
	// {
	// 	public function show()
	// 	{
	// 		return view('test', ['arr' => [1, 2]]);
	// 	}
	// }

	class PostController extends Controller 
	{
		public function show()
		{
			return view('test', 
		 [
				[
					'text' => 'text1',
					'href' => 'href1',
				],
				[
					'text2' => 'text2',
					'href2' => 'href2',
				],
				[
					'text3' => 'text3',
					'href3' => 'href3',
				],
		] 	
		);
		}
	}
?>