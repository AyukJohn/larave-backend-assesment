<?php

namespace App\Http\Repositories;

use App\Models\InfectedZombie as infected;

class infectedZombie
{


    public function infected()
    {
       $res = infected::where('status', 'is_infected')->get();
        // return response()->json($res);
        return responder()->success($res)->respond();

    }


    public function notInfected()
    {
       $res = infected::where('status', 'not_infected')->get();
        // return response()->json($res);
        return responder()->success($res)->respond();

    }


    public function createInfected($request)
    {
       $res = infected::create([
        'name'=> $request->name,
        'location'=>$request->location,
        'status'=>$request->status
       ]);
      
        // return response()->json($res);
        return responder()->success($res)->respond();
    }

    public function upDateStatus($request, $id){
        $infected = infected::find($id);
        $infected->status = $request->status;
        // var_dump($infected);
        $infected->save();

        // return response()->json($infected);
        return responder()->success($infected)->respond();

    }
}
