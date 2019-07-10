<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request as request;
class WeekOneController extends Controller{
	public function home(){
		return view('home');
	}
	public function add(){
		$title = $_GET['title'];
		$content = $_GET['content'];
		$author = $_GET['author'];
		$count = $_GET['count'];
		$data = DB::table('book')->insert(['title'=>$title,'content'=>$content,'author'=>$author,'count'=>$count]);
		// if($data){
		// 	return view('show');
		// }
		if($data){
			json_encode(['code'=>200,'data'=>$data,'msg'=>'添加成功']);
			return redirect('/api/show');
		}else{
			return json_encode(['code'=>40001,'msg'=>'添加失败']);
		}
	}
	public function show(){
		$data = DB::table('book')->get();
		// print_r($data);die;
		return view('show',['data'=>$data]);
	}

	public function delete(request $request){
		$id = $request->id;
		$data = DB::table('book')->where('id',$id)->delete();
		if($data){
			return json_encode(['code'=>200,'msg'=>'删除成功']);
		}else{
			return json_encode(['code'=>40002,'msg'=>'删除失败']);
		}
	}
}
