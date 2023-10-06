<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\Member;
use Illuminate\Http\Request;
use App\Models\Group;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Return_;

class GroupController extends Controller
{
    //
    public function index(){
        $groups = DB::table('members')->leftJoin('groups','groups.group_id','=','members.group_id')->where('members.user_id','=', session('user_id'))->get();
        $data = compact('groups');
        return view('frontend.main.index')->with($data);
        
    }

    public function create(Request $request){
        
        $group = new Group();
        $group -> group_name = $request['groupname'];
        $group -> code = randomString(8);
        $group -> user_id = session('user_id');
        $group->save();
        $group_id = $group-> group_id;
        $member = new Member();
        $member -> group_id = $group_id;
        $member -> user_id = session('user_id');
        $member->save();
        return redirect('/');
    }

    public function join(Request $request){
        $code = $request['Code'];
        if($code !=''){
            $group = Group::where('code','=',$code)->first();
            if($group->user_id == session('user_id')){
                echo 'You are already in this group';
            }

            $member = Member::where('group_id','=', $group->group_id)->where('user_id','=', session('user_id'))->first();
            if($member){
                return redirect('/');
            }else{
                if($group->code == $code){
                    $member = New Member ();
                    $member->group_id = $group->group_id;
                    $member->user_id = session('user_id');
                    $member->save();
                    return redirect('/');
                }
            }

        }
    }

    public function delete($id){
        $member = Member::find($id);
        if(!is_null($member)){
            $member->delete();
        }
        $chat = Chat::find($id);
        if(!is_null($chat)){
            $chat->delete();
        }
        $group = Group::find($id);
        if(!is_null($group)){
            $group->delete();
        }

    
        return redirect()->back();
    }

    public function leave($id){
        $member = Member::where('group_id','=', $id)->where('user_id','=', session('user_id'))->first();
        if($member){
            $member->delete();
        }
        
        return redirect()->back();

    }
    

}


