<?php

namespace App\Http\Controllers\Tution;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use app\MajorSubject;
use App\Models\TutionInfoStore;

class TutorController extends Controller
{

    public function category(Request $req){
        // return $req;

        $tutor = TutionInfoStore::where('user_id', auth()->user()->id)->get();


        if(count($tutor) == 0){
            $tutor = new TutionInfoStore();
            $tutor->user_id = auth()->user()->id;
            $tutor->category = serialize($req->category);
            $tutor->class = serialize($req->class);
            $tutor->subject = serialize($req->subject);
            $tutor->place = serialize($req->place);
            if($tutor->save()){
                return redirect()->back()->with('success', 'Information Updated Successfully');
            }

        }else{
            $tutor = TutionInfoStore::where('user_id', auth()->user()->id)->update([
                                    'category'=>serialize($req->category),
                                    'class' => serialize($req->class),
                                    'subject'=>serialize($req->subject),
                                    'place'=>serialize($req->place)
                                ]);
           
            return redirect()->back()->with('success', 'Information Updated Successfully');
            

        }
        

    }
}
