<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\landlord\landlord_contact_infos;
use App\Models\landlord\landlord_driver_infos;
use App\Models\landlord\landlord_family_infos;
use App\Models\landlord\landlord_emergency_infos;
use App\Models\landlord\landlord_home_infos;
use App\Models\landlord\landlord_maid_infos;
use App\Models\landlord\landlord_personal_infos;


class LandlordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('landlord');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //personal info

                    $l_nid=$request->input('l_nid');
                    $reg_stat="pending";
                    $l_personal_name=$request->input('l_personal_name');
                    $l_personal_father_name=$request->input('l_personal_father_name');
                    $l_personal_photo=$request->input('l_personal_photo');
                    $l_personal_religion=$request->input('l_personal_religion');
                    $l_personal_dob=$request->input('l_personal_dob');
                    $l_personal_marital=$request->input('l_personal_marital');
                    $l_personal_permanent_addss=$request->input('l_personal_permanent_addss');
                    $l_personal_edu_status=$request->input('l_personal_edu_status');
                    $l_personal_occupation_detail=$request->input('l_personal_occupation_detail');
                    $l_personal_occu_addss=$request->input('l_personal_occu_addss');

                    $this->save_personal($l_nid,$reg_stat,$l_personal_name,$l_personal_father_name,$l_personal_photo,$l_personal_religion,$l_personal_dob,$l_personal_marital,$l_personal_permanent_addss,$l_personal_edu_status,$l_personal_occupation_detail,$l_personal_occu_addss);
                   
                    //home info
                    $l_home_info_flat=$request->input('l_home_info_flat');
                    $l_home_info_house=$request->input('l_home_info_house');
                    $l_home_info_road=$request->input('l_home_info_road');
                    $l_home_info_area=$request->input('l_home_info_area');
                    $l_home_info_section_bfock=$request->input('l_home_info_section_bfock');
                    $l_home_info_thana=$request->input('l_home_info_thana');
                    $l_home_info_post_code=$request->input('l_home_info_post_code');
                    $l_home_info_bill_photo=$request->input('l_home_info_bill_photo');

                    $this->save_home($l_nid,$l_home_info_flat,$l_home_info_house,$l_home_info_road,$l_home_info_area,$l_home_info_section_bfock,$l_home_info_thana,$l_home_info_post_code,$l_home_info_bill_photo);

                    //maid info
                    $l_maid_name=$request->input('l_maid_name');
                    $l_maid_nid=$request->input('l_maid_nid');
                    $l_maid_phone=$request->input('l_maid_phone');
                    $l_maid_prmt_addss=$request->input('l_maid_prmt_addss');
                    if($l_maid_name !=NULL && $l_maid_nid !=NULL && $l_maid_phone !=NULL && $l_maid_prmt_addss){
                    $this->save_maid($l_nid,$l_maid_name,$l_maid_nid,$l_maid_phone,$l_maid_prmt_addss);
                    }

                    //driver info
                    $l_driver_name=$request->input('l_driver_name');
                    $l_driver_nid=$request->input('l_driver_nid');
                    $l_driver_phone=$request->input('l_driver_phone');
                    $l_driver_prmt_addss =$request->input('l_driver_prmt_addss');
                    if($l_driver_name !=NULL && $l_driver_nid !=NULL && $l_driver_phone !=NULL && $l_driver_prmt_addss){
                    $this->save_driver($l_nid,$l_driver_name,$l_driver_nid,$l_driver_phone,$l_driver_prmt_addss);
                    }
                    //emergency info
                    $l_emergency_name=$request->input('l_emergency_name');
                    $l_emergency_nid=$request->input('l_emergency_nid');
                    $l_emergency_phone=$request->input('l_emergency_phone');
                    $l_emergency_prmt_addss=$request->input('l_emergency_prmt_addss');

                    $this->save_emergency($l_nid,$l_emergency_name,$l_emergency_nid,$l_emergency_phone,$l_emergency_prmt_addss);

                    //contact info
                    $l_passport=$request->input('l_passport');
                    $l_email=$request->input('l_email');
                    $l_phone=$request->input('l_phone');
                    if($l_passport==NULL|| $l_email==NULL )
                    {
                        $l_passport="N/A";
                        $l_email="N/A";
                    }
                    $this->save_contact($l_nid,$l_passport,$l_email,$l_phone);
          
            // family info

                    $l_personal_family_member=$request->input('l_personal_family_member');
                    for($i=0;$i<9;$i++)
                    {
                    $name=$i.'fname';
                    $phone=$i.'fphn';
                    $occu=$i.'foccu';
                    $age=$i.'fage';
                    $fname0=$request->input($name);
                    $fphn0=$request->input($phone);
                    $foccu0=$request->input($occu);
                    $fage0=$request->input($age);
                    
                
                        if($fname0!=NULL && $fphn0!=NULL && $foccu0!=NULL && $fage0!=NULL && $l_nid!=NULL)
                        {
                            $this->save_family($l_personal_family_member,$l_nid, $fname0,$fphn0, $foccu0,$fage0);
                        }
                    
                    }
            
            return view("success")->with('success','Data Inserted');
            
    }

public function save_contact($l_nid,$l_passport,$l_email,$l_phone){
    $landlord= new landlord_contact_infos;
    $landlord->l_nid=$l_nid;
    $landlord->l_passport=$l_passport;
    $landlord->l_email=$l_email;
    $landlord->l_phone=$l_phone;
    $landlord->save();
    unset($landlord);
}

public function save_driver($l_nid,$l_driver_name,$l_driver_nid,$l_driver_phone,$l_driver_prmt_addss){
    $landlord= new landlord_driver_infos;
    $landlord->l_nid=$l_nid;
    $landlord->l_driver_name=$l_driver_name;
    $landlord->l_driver_nid=$l_driver_nid;
    $landlord->l_driver_phone=$l_driver_phone;
    $landlord->l_driver_prmt_addss=$l_driver_prmt_addss;
    $landlord->save();
    unset($landlord);
}

public function save_emergency($l_nid,$l_emergency_name,$l_emergency_nid,$l_emergency_phone,$l_emergency_prmt_addss){
    $landlord= new landlord_emergency_infos;
    $landlord->l_nid=$l_nid;
    $landlord->l_emergency_name=$l_emergency_name;
    $landlord->l_emergency_nid=$l_emergency_nid;
    $landlord->l_emergency_phone=$l_emergency_phone;
    $landlord->l_emergency_prmt_addss=$l_emergency_prmt_addss;
    $landlord->save();
    unset($landlord);
}

public function save_family($l_personal_family_member,$l_nid, $fname0,$fphn0, $foccu0,$fage0){
    $landlord= new landlord_family_infos;
    $landlord->l_personal_family_member=$l_personal_family_member;
    $landlord->fname=$fname0;
    $landlord->fphn0=$fphn0;
    $landlord->foccu0=$foccu0;
    $landlord->fage0=$fage0;
    $landlord->l_nid=$l_nid;
    $landlord->save();
    unset($landlord);
}


public function save_home($l_nid,$l_home_info_flat,$l_home_info_house,$l_home_info_road,$l_home_info_area,$l_home_info_section_bfock,$l_home_info_thana,$l_home_info_post_code,$l_home_info_bill_photo)
{
    $landlord= new landlord_home_infos;
    $landlord->l_nid=$l_nid;
    $landlord->l_home_info_flat=$l_home_info_flat;
    $landlord->l_home_info_house=$l_home_info_house;
    $landlord->l_home_info_road=$l_home_info_road;
    $landlord->l_home_info_area=$l_home_info_area;
    $landlord->l_home_info_section_bfock=$l_home_info_section_bfock;
    $landlord->l_home_info_thana=$l_home_info_thana;
    $landlord->l_home_info_post_code=$l_home_info_post_code;
    $landlord->l_home_info_bill_photo=$l_home_info_bill_photo;
    $landlord->save();
    unset($landlord);
}


public function save_maid($l_nid,$l_maid_name,$l_maid_nid,$l_maid_phone,$l_maid_prmt_addss){
    $landlord= new landlord_maid_infos;
    $landlord->l_nid=$l_nid;
    $landlord->l_maid_name=$l_maid_name;
    $landlord->l_maid_nid=$l_maid_nid;
    $landlord->l_maid_phone=$l_maid_phone;
    $landlord->l_maid_prmt_addss=$l_maid_prmt_addss;
    $landlord->save();
    unset($landlord);
}

public function save_personal($l_nid,$reg_stat,$l_personal_name,$l_personal_father_name,$l_personal_photo,$l_personal_religion,$l_personal_dob,$l_personal_marital,$l_personal_permanent_addss,$l_personal_edu_status,$l_personal_occupation_detail,$l_personal_occu_addss){
    $landlord= new landlord_personal_infos;
    $landlord->l_nid=$l_nid;
    $landlord->reg_stat=$reg_stat;
    $landlord->l_personal_name=$l_personal_name;
    $landlord->l_personal_father_name=$l_personal_father_name;
    $landlord->l_personal_photo=$l_personal_photo;
    $landlord->l_personal_religion=$l_personal_religion;
    $landlord->l_personal_dob=$l_personal_dob;
    $landlord->l_personal_marital=$l_personal_marital;
    $landlord->l_personal_permanent_addss=$l_personal_permanent_addss;
    $landlord->l_personal_edu_status=$l_personal_edu_status;
    $landlord->l_personal_occupation_detail=$l_personal_occupation_detail;
    $landlord->l_personal_occu_addss=$l_personal_occu_addss;
    $landlord->save();
    unset($landlord);
}







    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
