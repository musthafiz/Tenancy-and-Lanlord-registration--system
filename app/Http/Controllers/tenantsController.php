<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tenantss;
use App\Models\tenant\tenants_family_info;
use App\Models\tenant\tenants_current_home;
use App\Models\tenant\tenants_previous_home;
use App\Models\tenant\tenants_emergency_contact;
use App\Models\tenant\tenants_maid_info;
use App\Models\tenant\tenants_driver_info;
use App\Models\tenant\tenants_personal_info;
use App\Models\tenant\tenants_contact_info;
class tenantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tenants');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $t_nid=$request->input('t_nid');
//  personal info
        $reg_stat="pending";
        $t_name=$request->input('t_name');
        $t_father_name=$request->input('t_father_name');
        $t_photo=$request->input('t_photo');
        $t_religion=$request->input('t_religion');
        $t_dob=$request->input('t_dob');
        $t_marital=$request->input('t_marital');
        $t_prmt_address=$request->input('t_prmt_address');
        $t_edu_stat=$request->input('t_edu_stat');
        $t_occu_detail=$request->input('t_occu_detail');
        $t_family_type=$request->input('t_family_type');
        $t_famaly_number=$request->input('t_famaly_number');
      $this->savepersonal_info($t_nid,$reg_stat,$t_name,$t_father_name,$t_photo,$t_religion,$t_dob,$t_marital,$t_prmt_address,$t_edu_stat,$t_occu_detail,$t_family_type);


        
        
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
        
       
            if($fname0!=NULL && $fphn0!=NULL && $foccu0!=NULL && $fage0!=NULL && $t_nid!=NULL)
            {
                $this->savedata($t_famaly_number,$t_nid, $fname0,$fphn0, $foccu0,$fage0);
            }
        
        }
    //    previous landlord details
        $t_prelandlord_name=$request->input('t_prelandlord_name');
        $t_prelandload_phone=$request->input('t_prelandload_phone');
        $t_prelandload_flat=$request->input('t_prelandload_flat');
        $t_prelandload_house=$request->input('t_prelandload_house');
        $t_prelandload_road=$request->input('t_prelandload_road');
        $t_prelandload_area=$request->input('t_prelandload_area');
        $t_prelandload_section_bfock=$request->input('t_prelandload_section_bfock');
        $t_prelandload_thana=$request->input('t_prelandload_thana');
        $t_prelandload_postcode=$request->input('t_prelandload_postcode');
        $t_prelandload_reason_change_home=$request->input('t_prelandload_reason_change_home');

        $this->saveprevious_home($t_nid,$t_prelandlord_name,$t_prelandload_phone,$t_prelandload_flat,$t_prelandload_house,$t_prelandload_road,$t_prelandload_area,$t_prelandload_section_bfock,$t_prelandload_thana,$t_prelandload_postcode,$t_prelandload_reason_change_home);

        // current landlord details
        $t_curr_home_landlord_name=$request->input('t_curr_home_landlord_name');
        $t_curr_home_phone=$request->input('t_curr_home_phone');
        $t_curr_home__flat=$request->input('t_curr_home__flat');
        $t_curr_home_house=$request->input('t_curr_home_house');
        $t_curr_home__road=$request->input('t_curr_home__road');
        $t_curr_home_area=$request->input('t_curr_home_area');
        $t_curr_home_section_bfock=$request->input('t_curr_home_section_bfock');
        $t_curr_home_thana=$request->input('t_curr_home_thana');
        $t_currhome_postcode=$request->input('t_currhome_postcode');
        $t_currhome_shift_date=$request->input('t_currhome_shift_date');

$this->savecurrent_home($t_nid,$t_curr_home_landlord_name,$t_curr_home_phone,$t_curr_home__flat,$t_curr_home_house,$t_curr_home__road,$t_curr_home_area,$t_curr_home_section_bfock,$t_curr_home_thana,$t_currhome_postcode,$t_currhome_shift_date);
        // Maid information
        $t_maid_name=$request->input('t_maid_name');
        $t_maid_nid=$request->input('t_maid_nid');
        $t_maid_phone=$request->input('t_maid_phone');
        $t_maid_addres=$request->input('t_maid_addres');

        if($t_maid_name!=NULL && $t_maid_nid!=NULL && $t_maid_phone!=NULL && $t_maid_addres!=NULL)
        {
        $this->savemaid_info($t_nid,$t_maid_name,$t_maid_nid,$t_maid_phone,$t_maid_addres);
        }

        // Driver information
        $t_driver_name=$request->input('t_driver_name');
        $t_driver_nid=$request->input('t_driver_nid');
        $t_driver_phone=$request->input('t_driver_phone');
        $t_driver_address=$request->input('t_driver_address');

        IF( $t_driver_name!=NULL && $t_driver_nid!=NULL && $t_driver_phone!=NULL && $t_driver_address!=NULL){
            $this->savedriver_info($t_nid,$t_driver_name,$t_driver_nid,$t_driver_phone,$t_driver_address);
        }

        // Emergency Contact
        $t_emergency_name=$request->input('t_emergency_name');
        $t_emergency_nid=$request->input('t_emergency_nid');
        $t_emergency_phone=$request->input('t_emergency_phone');
        $t_emergency_addess=$request->input('t_emergency_addess');
        $t_emergency_relation=$request->input('t_emergency_relation');

        $this->saveemercency_contact($t_nid,$t_emergency_name,$t_emergency_nid,$t_emergency_phone,$t_emergency_addess,$t_emergency_relation);
        
        
        // Contact Information
        $t_nid=$request->input('t_nid');
        $t_passport=$request->input('t_passport');
        $t_curr_home_code=$request->input('t_curr_home_code');
        $t_email=$request->input('t_email');
        $t_phone=$request->input('t_phone');

        if($t_passport==NULL|| $t_email==NULL )
                    {
                        $t_passport="N/A";
                        $t_email="N/A";
                    }

        $this->savecontactinfo($t_nid,$t_passport,$t_curr_home_code,$t_email,$t_phone);
        
        
        return view('success')->with('success','Data Inserted');
    }
    public function savedata($fnumber,$fnid,$fname,$fphn,$foccu,$fage)
    {
        $tenant=new tenants_family_info;
        $tenant->t_famaly_number=$fnumber;
        $tenant->fname=$fname;
        $tenant->fphn0=$fphn;
        $tenant->foccu0=$foccu;
        $tenant->fage0=$fage;
        $tenant->t_nid=$fnid;
        $tenant->save();
        unset($tenant);
    } 

    public function savecurrent_home($t_nid,$t_curr_home_landlord_name,$t_curr_home_phone,$t_curr_home__flat,$t_curr_home_house,$t_curr_home__road,$t_curr_home_area,$t_curr_home_section_bfock,$t_curr_home_thana,$t_currhome_postcode,$t_currhome_shift_date)
    {

        $tenant=new tenants_current_home;
        $tenant->t_nid=$t_nid;
        $tenant->t_curr_home_landlord_name=$t_curr_home_landlord_name;
        $tenant->t_curr_home_phone=$t_curr_home_phone;
        $tenant->t_curr_home__flat=$t_curr_home__flat;
        $tenant->t_curr_home_house=$t_curr_home_house;
        $tenant->t_curr_home__road=$t_curr_home__road;
        $tenant->t_curr_home_area=$t_curr_home_area;
        $tenant->t_curr_home_section_bfock=$t_curr_home_section_bfock;
        $tenant->t_curr_home_thana=$t_curr_home_thana;
        $tenant->t_currhome_postcode=$t_currhome_postcode;
        $tenant->t_currhome_shift_date=$t_currhome_shift_date;
        $tenant->save();
        unset($tenant);
    }
    public function saveprevious_home($t_nid,$t_prelandlord_name,$t_prelandload_phone,$t_prelandload_flat,$t_prelandload_house,$t_prelandload_road,$t_prelandload_area,$t_prelandload_section_bfock,$t_prelandload_thana,$t_prelandload_postcode,$t_prelandload_reason_change_home)
    {

        $tenant=new tenants_previous_home;
        $tenant->t_nid=$t_nid;
        $tenant->t_prelandlord_name=$t_prelandlord_name;
        $tenant->t_prelandload_phone=$t_prelandload_phone;
        $tenant->t_prelandload_flat=$t_prelandload_flat;
        $tenant->t_prelandload_house=$t_prelandload_house;
        $tenant->t_prelandload_road=$t_prelandload_road;
        $tenant->t_prelandload_area=$t_prelandload_area;
        $tenant->t_prelandload_section_bfock=$t_prelandload_section_bfock;
        $tenant->t_prelandload_thana=$t_prelandload_thana;
        $tenant->t_prelandload_postcode=$t_prelandload_postcode;
        $tenant->t_prelandload_reason_change_home=$t_prelandload_reason_change_home;
        $tenant->save();
        unset($tenant);
    }

    public function saveemercency_contact($t_nid,$t_emergency_name,$t_emergency_nid,$t_emergency_phone,$t_emergency_addess,$t_emergency_relation)
    {

        $tenant=new tenants_emergency_contact;
        $tenant->t_nid=$t_nid;
        $tenant->t_emergency_name=$t_emergency_name;
        $tenant->t_emergency_nid=$t_emergency_nid;
        $tenant->t_emergency_phone=$t_emergency_phone;
        $tenant->t_emergency_addess=$t_emergency_addess;
        $tenant->t_emergency_relation=$t_emergency_relation;
    
        $tenant->save();
        unset($tenant);
    }
    public function savemaid_info($t_nid,$t_maid_name,$t_maid_nid,$t_maid_phone,$t_maid_addres)
    {

        $tenant=new tenants_maid_info;
        $tenant->t_nid=$t_nid;
        $tenant->t_maid_name=$t_maid_name;
        $tenant->t_maid_nid=$t_maid_nid;
        $tenant->t_maid_phone=$t_maid_phone;
        $tenant->t_maid_addres=$t_maid_addres;
        $tenant->save();
        unset($tenant);
    }
    public function savedriver_info($t_nid,$t_driver_name,$t_driver_nid,$t_driver_phone,$t_driver_address)
    {

        $tenant=new tenants_driver_info;
        $tenant->t_nid=$t_nid;
        $tenant->t_driver_name=$t_driver_name;
        $tenant->t_driver_nid=$t_driver_nid;
        $tenant->t_driver_phone=$t_driver_phone;
        $tenant->t_driver_address=$t_driver_address;
        $tenant->save();
        unset($tenant);
    }
    public function savepersonal_info($t_nid,$reg_stat,$t_name,$t_father_name,$t_photo,$t_religion,$t_dob,$t_marital,$t_prmt_address,$t_edu_stat,$t_occu_detail,$t_family_type)
{

        $tenant=new tenants_personal_info;
        $tenant->t_nid=$t_nid;
        $tenant->reg_stat =$reg_stat;
        $tenant->t_name =$t_name;
        $tenant->t_father_name =$t_father_name;
        $tenant->t_photo =$t_photo;
        $tenant->t_religion =$t_religion;
        $tenant->t_dob =$t_dob;
        $tenant->t_marital =$t_marital;
        $tenant->t_prmt_address =$t_prmt_address;
        $tenant->t_edu_stat =$t_edu_stat;
        $tenant->t_occu_detail =$t_occu_detail;
        $tenant->t_family_type=$t_family_type;
        $tenant->save();
        unset($tenant);
    }
    

  public function savecontactinfo($t_nid,$t_passport,$t_curr_home_code,$t_email,$t_phone){
      $tenant=new tenants_contact_info;
      $tenant->t_nid=$t_nid;
      $tenant->t_passport=$t_passport;
      $tenant->t_curr_home_code=$t_curr_home_code;
      $tenant->t_email=$t_email;
      $tenant->t_phone=$t_phone;
      $tenant->save();
      unset($tenant);
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
