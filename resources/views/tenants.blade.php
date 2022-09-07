@include('includes.register.header')
@include('includes.navbar')
@include('includes.register.p-tenants')




<form class="border rounded shadow" id="regForm" method="post" action="{{ route('form.formsubmit')  }}"
    style="margin-top: 50px;height: auto;padding-bottom: 60px;">
    {{ csrf_field() }}

    <div class="tab" style="text-align: center;">
        <h3 class="text-center" style="margin-bottom: 20px;">Personal Information&nbsp;</h3>
        <div class="form-group row"><label class="col-sm-12" for="name" style="text-align: left;">Your Name<input
                    class="form-control col-sm-12 required" type="text" id="name" name="t_name"
                    placeholder="Tenant's Name" required="" title="Tenant's Name"></label></div>
        <div class="form-group row"><label class="col-sm-12" for="fname" style="text-align: left;">Father's
                Name&nbsp;<input class="form-control col-sm-12 required" type="text" id="fname-4" name="t_father_name"
                    placeholder="Father's Name" required="" title="Fathers Name"></label></div>
        <div class="form-group row"><label class="col-sm-6" for="tphoto" style="text-align: left;">Your Photo<input
                    type="file" id="tphoto" class="col-sm-12 required-img" placeholder="Tenant's Photo" required=""
                    title="Tenant's Photo" style="margin-left: -12px;" name="t_photo"
                    onchange="fileValidation(&quot;tphoto&quot;);"></label>
            <label class="col-sm-6" for="religion" style="text-align: left;">Religion&nbsp;<select
                    class="form-control required col-sm-12" id="religion-3" name="t_religion" title="Religious">
                    <option value="Muslim">Muslim</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Christian">Christian</option>
                    <option value="Buddhist">Buddhist </option>
                </select></label>
        </div>
        <div class="form-group row"><label class="col-sm-6" for="birthdate" style="text-align: left;">Birth Date<input
                    class="form-control required-eigttin col-sm-12" id="birthdate-2" type="date" name="t_dob" min="18"
                    max="100" required="" title="Birth Date"></label><label class="col-sm-6" for="matstat"
                style="text-align: left;">Marital Status&nbsp;<select class="form-control required col-sm-12"
                    id="matstat-2" name="t_marital" title="Marital Status">
                    <option value="Married">Married</option>
                    <option value="Widowed">Widowed </option>
                    <option value="Bachelor">Bachelor</option>
                </select></label></div>
        <div class="form-group row"><label class="col-sm-12" for="permadd1" style="text-align: left;">Permanent
                Address&nbsp;<input class="form-control col-sm-12 required" type="text" id="permadd-10"
                    name="t_prmt_address" placeholder="Permanent Address" required=""
                    title="Permanent Address Line 1"></label></div>
        <div class="form-group row"><label class="col-sm-12" for="edustat" style="text-align: left;">Educational
                Status<input class="form-control col-sm-12 required" type="text" id="edustat-7" name="t_edu_stat"
                    placeholder="Educational Status" required="" title="Educational Status"></label></div>
        <div class="form-group row"><label class="col-sm-12" for="occu" style="text-align: left;">Occupation
                Details&nbsp;<input class="form-control col-sm-12 required" type="text" id="occu-1" name="t_occu_detail"
                    placeholder="Occupation Details" required="" title="Occupation name with details "></label></div>
        <div class="form-group row"><label class="col-sm-6" style="text-align: left;">Type of your Tenancy&nbsp;<select
                    class="form-control required" name="t_family_type">
                    <option value="Family" selected="">Family</option>
                    <option value="Mess" selected="">Mess</option>
                    <option value="Sublet">Sublet</option>
                </select></label>
            <label class="col-sm-6" style="text-align: left;">Number Of Family/Mess Member<input
                    class="form-control col-sm-12 required-num" type="number" id="fnumber" name="t_famaly_number"
                    placeholder="Number of Family/Mess Member" required="" title="Number of Famile/Mess Member"
                    onchange="myFunction()" autocomplete="false" min="1" max="8" value="1" step="1"></label>
        </div>
    </div>

    <div class="tab" style="text-align: center;">
        <h4 class="text-center" style="margin-bottom: 20px;">Family Information&nbsp;</h4>
        <div id="family"></div>
    </div>


    <div class="tab" style="text-align: center;">
        <h3 class="text-center" style="margin-bottom: 20px;">Previous Home Information </h3>
        <div class="form-group row"><label class="col-sm-6" style="text-align: left;">Landlord Name<input
                    class="form-control col-sm-12 required" type="text" name="t_prelandlord_name" placeholder="Name"
                    required title="Previous Landlord Name" /></label><label class="col-sm-6"
                style="text-align: left;">Landlord Phone<input class="form-control col-sm-12 required-bdnum" type="tel"
                    title="Previous Landlord Phone Number" name="t_prelandload_phone" placeholder="+880" /></label>
        </div>
        <div class="form-group row"><label class="col-sm-6" style="text-align: left;">Flat/Floor<input
                    class="form-control col-sm-12 required" type="text" name="t_prelandload_flat" placeholder="Flat"
                    required title="Flat/Floor" /></label><label class="col-sm-6" style="text-align: left;">House<input
                    class="form-control col-sm-12 required" type="text" name="t_prelandload_house" placeholder="House"
                    required title="House/Holding" /></label></div>
        <div class="form-group row"><label class="col-sm-6" style="text-align: left;">Road<input
                    class="form-control col-sm-12 required" type="text" placeholder="Road" required title="Road"
                    name="t_prelandload_road" /></label><label class="col-sm-6" style="text-align: left;">Area<select
                    class="form-control required" name="t_prelandload_area">
                    <option value="Mirpur" selected>Mirpur</option>
                    <option value="Uttara">Uttara</option>
                    <option value="Dhanmondi">Dhanmondi</option>
                    <option value="Gulshan">Gulshan</option>
                    <option value="Banani">Banani</option>
                    <option value="Badda">Badda</option>
                </select></label></div>
        <div class="form-group row"><label class="col-sm-12" style="text-align: left;">Section and Bfock<input
                    class="form-control col-sm-12 required" type="text" name="t_prelandload_section_bfock"
                    placeholder="Section and Bfock" required title="Section and Bfock" /></label></div>
        <div class="form-group row"><label class="col-sm-6" style="text-align: left;">Thana<input
                    class="form-control col-sm-12 required" type="text" name="t_prelandload_thana" placeholder="Thana"
                    required title="Thana" /></label><label class="col-sm-6" style="text-align: left;">Post Code<input
                    class="form-control col-sm-12 required" type="text" name="t_prelandload_postcode"
                    placeholder="Post Code" required title="Post Code" /></label></div>
        <div class="form-group row"><label class="col-sm-12" style="text-align: left;">Reason of Changing Home<input
                    class="form-control col-sm-12 required" type="text" name="t_prelandload_reason_change_home"
                    placeholder="Specify Reasons " required title="Reason of Changing Home" /></label></div>
    </div>

    <!-- Current Home Information -->

    <div class="tab" style="text-align: center;">
        <h4 class="text-center" style="margin-bottom: 20px;">Current Home Information </h4>
        <div class="form-group row"><label class="col-sm-6" style="text-align: left;">Landlord Name<input
                    class="form-control col-sm-12 required" type="text" name="t_curr_home_landlord_name"
                    placeholder="Name" required title="Previous Landlord Name" /></label>
            <label class="col-sm-6" style="text-align: left;">Landlord Phone<input
                    class="form-control col-sm-12 required-bdnum" type="tel" title="Previous Landlord Phone Number"
                    name="t_curr_home_phone" placeholder="+880" /></label>
        </div>
        <div class="form-group row"><label class="col-sm-6" style="text-align: left;">Flat/Floor<input
                    class="form-control col-sm-12 required" type="text" name="t_curr_home__flat" placeholder="Flat"
                    required title="Flat/Floor" /></label><label class="col-sm-6" style="text-align: left;">House<input
                    class="form-control col-sm-12 required" type="text" name="t_curr_home_house" placeholder="House"
                    required title="House/Holding" /></label></div>
        <div class="form-group row"><label class="col-sm-6" style="text-align: left;">Road<input
                    class="form-control col-sm-12 required" type="text" placeholder="Road" required title="Road"
                    name="t_curr_home__road" /></label><label class="col-sm-6" style="text-align: left;">Area<select
                    class="form-control required" name="t_curr_home_area">
                    <option value="Mirpur" selected>Mirpur</option>
                    <option value="Uttara">Uttara</option>
                    <option value="Dhanmondi">Dhanmondi</option>
                    <option value="Gulshan">Gulshan</option>
                    <option value="Banani">Banani</option>
                    <option value="Badda">Badda</option>
                </select></label></div>
        <div class="form-group row"><label class="col-sm-12" style="text-align: left;">Section and Bfock<input
                    class="form-control col-sm-12 required" type="text" name="t_curr_home_section_bfock"
                    placeholder="Section and Bfock" required title="Section and Bfock" /></label></div>
        <div class="form-group row"><label class="col-sm-6" style="text-align: left;">Thana<input
                    class="form-control col-sm-12 required" type="text" name="t_curr_home_thana" placeholder="Thana"
                    required title="Thana" /></label><label class="col-sm-6" style="text-align: left;">Post Code<input
                    class="form-control col-sm-12 required" type="text" name="t_currhome_postcode"
                    placeholder="Post Code" required title="Post Code" /></label></div>
        <div class="form-group row"><label class="col-sm-12" style="text-align: left;">Date of Shifting new Home<input
                    class="form-control col-sm-12 required" type="date" name="t_currhome_shift_date" /></label></div>
    </div>




    <!-- Maid Information -->
    <div class="tab" style="text-align: center;">
        <h3 class="text-center" style="margin-bottom: 20px;">Maid Information </h3>
        <div class="form-group row"><label class="col-sm-12" style="text-align: left;">Name<input
                    class="form-control col-sm-12" type="text" id="mtname" name="t_maid_name" placeholder="Name"
                    required title="Maid Name"
                    onchange="addclass(&quot;mtname&quot;,&quot;maidnumber&quot;,&quot;required-bdnum&quot;);" /></label>
        </div>
        <div class="form-group row"><label class="col-sm-6" style="text-align: left;">NID NO<input
                    class="form-control col-sm-12" type="text" name="t_maid_nid" placeholder="NID No" required
                    title="NID No" /></label><label class="col-sm-6" style="text-align: left;">Phone No<input
                    class="form-control col-sm-12" type="text" id="maidnumber" name="t_maid_phone"
                    placeholder="Phone No" required title="Phone No" /></label></div>
        <div class="form-group row"><label class="col-sm-12" style="text-align: left;">Permanent Address <input
                    class="form-control col-sm-12" type="text" name="t_maid_addres" placeholder="Address" required
                    title="Address" /></label></div>
    </div>


    <!-- Driver Information -->
    <div class="tab" style="text-align: center;">
        <h3 class="text-center" style="margin-bottom: 20px;">Driver Information </h3>
        <div class="form-group row"><label class="col-sm-12" style="text-align: left;">Name<input
                    class="form-control col-sm-12" type="text" id="dtname" name="t_driver_name" placeholder="Name"
                    required title="Driver Name"
                    onchange="addclass(&quot;dtname&quot;,&quot;drivermobile&quot;,&quot;required-bdnum&quot;);" /></label>
        </div>
        <div class="form-group row"><label class="col-sm-6" style="text-align: left;">NID NO<input
                    class="form-control col-sm-12" type="text" name="t_driver_nid" placeholder="NID No" required
                    title="NID No" /></label><label class="col-sm-6" style="text-align: left;">Phone No<input
                    class="form-control col-sm-12" type="text" id="drivermobile" name="t_driver_phone"
                    placeholder="Phone No" required title="Phone No" /></label></div>
        <div class="form-group row"><label class="col-sm-12" style="text-align: left;">Permanent Address <input
                    class="form-control col-sm-12" type="text" name="t_driver_address" placeholder="Address" required
                    title="Address" /></label></div>
    </div>

    <!-- Emergency Contact -->
    <div class="tab" style="text-align: center;">
        <h3 class="text-center" style="margin-bottom: 20px;">Emergency Contact </h3>
        <div class="form-group row"><label class="col-sm-12" style="text-align: left;">Name<input
                    class="form-control col-sm-12 required" type="text" name="t_emergency_name" placeholder="Name"
                    required title="Previous Landlord Name" /></label></div>
        <div class="form-group row"><label class="col-sm-6" style="text-align: left;">NID NO<input
                    class="form-control col-sm-12 required" type="text" name="t_emergency_nid" placeholder="NID No"
                    required title="NID No" /></label><label class="col-sm-6" style="text-align: left;">Phone No<input
                    class="form-control col-sm-12 required-bdnum" type="tel" name="t_emergency_phone" placeholder="+880"
                    required title="Phone No" /></label></div>
        <div class="form-group row"><label class="col-sm-12" style="text-align: left;">Permanent Address <input
                    class="form-control col-sm-12 required" type="text" name="t_emergency_addess"
                    placeholder="Permanent Address" required title="Permanent Address" /></label></div>
        <div class="form-group row"><label class="col-sm-12" style="text-align: left;">Relation<input
                    class="form-control col-sm-12 required" type="text" name="t_emergency_relation"
                    placeholder="Relation" required title="Relation" /></label></div>
    </div>

    <!-- Contact and ID Information -->
    <div class="tab" style="text-align: center;">
        <h3 class="text-center" style="margin-bottom: 20px;">Contact and ID Information </h3>
        <div class="form-group row"><label class="col-sm-12" style="text-align: left;">Your NID No<input
                    class="form-control col-sm-12 required" type="text" name="t_nid" placeholder="NID Card No" required
                    title="NID Card No" /></label></div>

        <div class="form-group row"><label class="col-sm-12" style="text-align: left;">Your Passport No (Optional)<input
                    class="form-control col-sm-12 " type="text" name="t_passport" placeholder="Passport No"
                    title="Passport No" /></label></div>

        <div class="form-group row"><label class="col-sm-12" style="text-align: left;">Your Current Home Code <input
                    class="form-control col-sm-12 required" type="text" name="t_curr_home_code" placeholder="Home Code"
                    required title="Home Code" /></label></div>

        <div class="form-group row"><label class="col-sm-12" style="text-align: left;">Your Email Address <input
                    class="form-control col-sm-12 " type="email" name="t_email" placeholder="Email"
                    title="Email" /></label></div>

        <div class="form-group row"><label class="col-sm-12" style="text-align: left;">Phone Number<input
                    class="form-control col-sm-12 required-bdnum" type="tel" name="t_phone" placeholder="+880" required
                    title="Phone Number" /></label></div>
        <p class="text-center" style="margin-bottom: 33px;font-size: 13px;">*Please Insert a valid phone number and
            email addresses or your application will be rejected ,And it will be required for notifying you about the
            progress of registration .</p>
    </div>
    <div class="mb-auto" style="float: right;">
        <div class="form-row" style="padding-bottom: 0px;">
            <div class="col" style="padding-bottom: 10px;"><button class="btn btn-primary" id="prevBtn" type="button"
                    style="margin-bottom: 0px;" onclick="nextPrev(-1)">Previous</button></div>
            <div class="col"><button class="btn btn-primary" id="nextBtn" type="button"
                    onclick="nextPrev(1)">Next</button></div>
        </div>
    </div>
</form>
</section>
</div>
@include('includes.modal')
@include('includes.register.scripts')