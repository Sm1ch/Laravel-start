<?php
	namespace App\Http\Controllers;
	use Illuminate\Support\Facades\DB;

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
			$users = DB::table('player')->get();
			
			foreach ($users as $user) {
				dump($user->id);
				dump($user->first_name);
			}
		}
	}
?>