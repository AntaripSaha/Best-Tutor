<?php

namespace App\Http\Controllers\Tution;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use app\MajorSubject;
use App\Models\TutionInfoStore;
use App\ProfileEducation;
use App\User;
use Illuminate\Support\Facades\Redirect;

class TutorController extends Controller
{

    public function store(Request $req){
        
       $user = User::where('id', auth()->user()->id)->update([
                            'father_name'=>$req->father_name,
                            'father_no'=>$req->father_no,
                            'mother_name'=>$req->mother_name,
                            'mother_no'=>$req->mother_no,
                            'address'=>$req->address,
                            'date_of_birth'=>$req->date_of_birth,
                            'identity_type'=>$req->identity_type,
                            'national_id_card_number'=>$req->national_id_card_number,
                            'religion'=>$req->religion,
                            'nationality_id'=>$req->nationality_id,
                            'country_id'=>$req->country_id,
                            'mobile_num'=>$req->e_no,
                            'state_id'=>$req->state_id,
                            'city_id'=>$req->city_id,
       ]);
       return redirect()->back()->with('success', 'Information Updated Successfully');

       
    }
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
            $tutor->tutoring_place = serialize($req->tutoring_place);
            if($tutor->save()){
                return redirect()->back()->with('success', 'Information Updated Successfully');
            }
        }else{
            $tutor = TutionInfoStore::where('user_id', auth()->user()->id)->update([
                                    'category'=>serialize($req->category),
                                    'class' => serialize($req->class),
                                    'subject'=>serialize($req->subject),
                                    'place'=>serialize($req->place),
                                    'tutoring_place'=>serialize($req->tutoring_place)
                                ]);
            return redirect()->back()->with('success', 'Information Updated Successfully');
        }
    }

    public function education_store(Request $request)
    {
        // return $request;
        $profile_education = new ProfileEducation;
        $profile_education->user_id = auth()->user()->id;
        $profile_education->degree_level_id = $request->degree_id;
        $profile_education->degree_title = $request->degree_title;
        $profile_education->major = $request->major;
        $profile_education->institution = $request->institute_name;
        $profile_education->date_completion = $request->passing_year;
        $profile_education->degree_result = $request->result;
        $profile_education->from_date = $request->from_date;
        $profile_education->to_date = $request->to_date;
        if($profile_education->save()){
            
            return response()->json(['success'=>'Data Saved Successfully']);
        }
        
    }
    public function education_delete($id)
    {
        if(ProfileEducation::find($id)->delete()){
            // window.location.reload();
            return Redirect::to('home')->with('message','Operation Successful !');
        }
    }
}
