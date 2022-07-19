<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Support\Facades\Validator;

class APIController extends Controller
{
    function create(Request $req)
    {
        $validator = Validator::make($req->all(),[
            "title"=>"required",
            "dcr"=>"required",
            "type"=>"required",
            "date"=>"required"
        ],[
            "name.required"=>"Please provide name"
        ]);
        if($validator->fails()){
            return response()->json($validator->errors());
        }
        $ns = new News();
        $ns->title = $req->title;
        $ns->dcr = $req->dcr;
        $ns->type = $req->type;
        $ns->date = $req->date;
        $ns->save();
        return response()->json(["msg"=>"Success","data"=>$ns]);
    }

    function readall(Request $req)
    {    
        $ns = News::all();
        return response()->json(["msg"=>"Success","data"=>$ns]);
    }

    function readone(Request $req)
    {
        $validator = Validator::make($req->all(),[
            "id"=>"required"
        ]);
        if($validator->fails()){
            return response()->json($validator->errors());
        }

        $ns = News::all();
        $ns = News::where('id',$req->id)->first();
        return response()->json(["msg"=>"Success","data"=>$ns]);
    }

    function update(Request $req)
    {
        $validator = Validator::make($req->all(),[
            "id"=>"required",
            "title"=>"required",
            "dcr"=>"required",
            "type"=>"required",
            "date"=>"required"
        ]);
        if($validator->fails()){
            return response()->json($validator->errors());
        }

        $ns = News::all();
        $ns = News::where('id', $req->id)->update(['title' => $req->title, 'dcr' => $req->dcr, 'type' => $req->type, 'date' => $req->date]);

        $ns1 = News::all();
        return response()->json(["msg"=>"Success","data"=>$ns1]);
    }

    function delete(Request $req)
    {
        $validator = Validator::make($req->all(),[
            "id"=>"required"
        ]);
        if($validator->fails()){
            return response()->json($validator->errors());
        }

        $ns = News::all();
        $ns = News::where('id', $req->id)->delete();

        $ns1 = News::all();
        return response()->json(["msg"=>"Success","data"=>$ns1]);
    }

    function readtype(Request $req)
    {
        $validator = Validator::make($req->all(),[
            "type"=>"required"
        ]);
        if($validator->fails()){
            return response()->json($validator->errors());
        }

        $ns = News::all();
        $ns = News::where('type',$req->type)->get();
        return response()->json(["msg"=>"Success","data"=>$ns]);
    }

    function readdate(Request $req)
    {
        $validator = Validator::make($req->all(),[
            "date"=>"required"
        ]);
        if($validator->fails()){
            return response()->json($validator->errors());
        }

        $ns = News::all();
        $ns = News::where('date',$req->date)->get();
        return response()->json(["msg"=>"Success","data"=>$ns]);
    }

    function readdatetype(Request $req)
    {
        $validator = Validator::make($req->all(),[
            "date"=>"required",
            "type"=>"required"
        ]);
        if($validator->fails()){
            return response()->json($validator->errors());
        }

        $ns = News::all();
        $ns = News::where('date',$req->date)->where('type',$req->type)->get();
        return response()->json(["msg"=>"Success","data"=>$ns]);
    }
}

