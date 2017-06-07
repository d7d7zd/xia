<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Info;

class InfoController extends Controller
{
    public function getList(){
//        $list =  Info::all();
//        $list = array('name'=> 'zhangwei', 'age'=> '8');
        $list = Info::all(['title', 'id']);
        return view('admin.info', ['list'=> $list]);
    }

    public function add(){
        return view('admin.add');
    }

    public function delete(Request $request){
        $id =  $request-> input('id');
        Info::destroy($id);
        return redirect('infoList');

    }

    public function update(Request $request){
        $id = $request -> input('id');
        $li = Info::find($id);
        return view('admin.add', ['li'=> $li]);
    }

    public function updated(Request $request){
        $li = Info::find($request -> id);
        $newLi = $request -> input();
        $li -> title = $newLi['title'];
        $li ->class = $newLi['class'];
        $li -> content = $newLi['content'];
        $li -> save();
        return  redirect('infoList');
    }

    public function detail(Request $request){
       $id = $request-> input('id');
       $li =  Info::find($id);
       return  view('admin.detail', ['li'=> $li]);
    }

    public function newInfo(Request $request){
        $array = $request-> input();
        $newInfo = new Info();
        $newInfo -> title = $array['title'];
        $newInfo ->class = $array['class'];
        $newInfo -> content = $array['content'];

        $bool = $newInfo-> save();
        if($bool){
            return redirect('infoList');

        } else return '失败';
    }

    public function getInfo(Request $request){
        $where = $request ->input('where');
        $li =  Info::where('class', $where)-> first();
        return view('font.info', ['li'=> $li]);
    }
}
