<?php
	namespace App\Http\Controllers;
	

	class PostController extends Controller
	{
		public function show($id)
		{	
			$users = [
			'user1' => 'Махачкала',
			'user2' => 'Кизилюрт',
			'user3' => 'Хасавюрт',
			'user4' => 'Кизляр',
			'user5' => 'Дербент',
		];
			return $users[$id];
		}
	}

?>