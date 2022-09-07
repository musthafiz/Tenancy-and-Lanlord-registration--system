@include('includes.register.header')
@include('includes.navbar')
@include('includes.register.p-landlord')

<!--Main form-->
<form class="border rounded shadow" id="regForm" method="post" data-toggle="modal" action="{{route('register.tenant')}}""
    style=" margin-top: 50px;height: auto;padding-bottom: 60px;">
    <!--Contact information -->
    {{ csrf_field() }}

    <div class="tab" style="text-align: center;">
        <h3 class="text-center" style="margin-bottom: 20px;">Personal Information&nbsp;</h3>
        <div class="form-group row"><label class="col-sm-12" for="name" style="text-align: left;">Your Name<input
                    class="form-control col-sm-12 required" type="text" id="name" name="l_personal_name"
                    placeholder="Landlod's Name" required="" title="Landlod's Name"></label></div>
        <div class="form-group row"><label class="col-sm-12" for="fname" style="text-align: left;">Father's
                Name&nbsp;<input class="form-control col-sm-12 required" type="text" id="fname"
                    name="l_personal_father_name" placeholder="Father's Name" required="" title="Fathers Name"></label>
        </div>
        <div class="form-group row"><label class="col-sm-6" for="tphoto" style="text-align: left;">Your Photo<input
                    type="file" id="lphoto" class="col-sm-12 required-img" placeholder="" required=""
                    title="Landlord's Photo" style="margin-left: -12px;" name="l_personal_photo"
                    onchange="fileValidation(&quot;lphoto&quot;);"></label>
            <label class="col-sm-6" for="religion" style="text-align: left;">Religion&nbsp;<select
                    class="form-control required col-sm-12" id="religion" name="l_personal_religion" title="Religious">
                    <option value="Muslim">Muslim</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Christian">Christian</option>
                    <option value="Buddhist">Buddhist </option>
                </select></label>
        </div>
        <div class="form-group row"><label class="col-sm-6" for="birthdate" style="text-align: left;">Birth Date<input
                    class="form-control required col-sm-12 required-eigttin" id="birthdate" type="date"
                    name="l_personal_dob" min="18" max="100" required="" title="Birth Date"></label>
            <label class="col-sm-6" for="matstat" style="text-align: left;">Marital Status&nbsp;<select
                    class="form-control required col-sm-12" id="matstat" name="l_personal_marital"
                    title="Marital Status">
                    <option value="Married">Married</option>
                    <option value="Widowed">Widowed </option>
                    <option value="Bachelor">Bachelor</option>
                </select></label>
        </div>
        <div class="form-group row"><label class="col-sm-12" for="permadd1" style="text-align: left;">Permanent
                Address&nbsp;<input class="form-control col-sm-12 required" type="text" id="permadd1"
                    name="l_personal_permanent_addss" placeholder="Permanent Address" required=""
                    title="Permanent Address Line 1"></label></div>
        <div class="form-group row"><label class="col-sm-12" for="edustat" style="text-align: left;">Educational
                Status<input class="form-control col-sm-12 required" type="text" id="edustat-2"
                    name="l_personal_edu_status" placeholder="Educational Status" required=""
                    title="Educational Status"></label></div>
        <div class="form-group row"><label class="col-sm-12" for="occu" style="text-align: left;">Occupation
                Details&nbsp;<input class="form-control col-sm-12 required" type="text" id="occu-1"
                    name="l_personal_occupation_detail" placeholder="Occupation Details" required=""
                    title="Occupation name with details "></label></div>
        <div class="form-group row"><label class="col-sm-12" for="occuadd" style="text-align: left;">Occupancy Address
                <input class="form-control col-sm-12 required" type="text" id="occuadd-1" name="l_personal_occu_addss"
                    placeholder="Occupancy Address" required="" title="Occupancy Address"></label></div>
        <div class="form-group row"><label class="col-sm-12" style="text-align: left;">Number Of Family Member<input
                    class="form-control col-sm-12 required" type="number" id="fnumber" name="l_personal_family_member"
                    placeholder="Number of Family Member" required="" title="Number of Famile Member"
                    onchange="myFunction()" min="1" max="8" value="1"></label></div>
    </div>

    <!--Family Information -->
    <div class="tab" style="text-align: center;">
        <h3 class="text-center" style="margin-bottom: 20px;">Family Information&nbsp;</h3>
        <div id="family"></div>
    </div>

    <!--Home Information -->
    <div class="tab" style="text-align: center;">
        <h3 class="text-center" style="margin-bottom: 20px;">Home Information&nbsp;</h3>
        <div class="form-group row"><label class="col-sm-6" style="text-align: left;">Flat/Floor<input
                    class="form-control col-sm-12 required" type="text" name="l_home_info_flat" placeholder="Flat"
                    required="" title="Flat/Floor"></label><label class="col-sm-6" style="text-align: left;">House<input
                    class="form-control col-sm-12 required" type="text" name="l_home_info_house" placeholder="House"
                    required="" title="House/Holding"></label>
        </div>
        <div class="form-group row"><label class="col-sm-6" style="text-align: left;">Road<input
                    class="form-control col-sm-12 required" type="text" name="l_home_info_road" placeholder="Road"
                    required="" title="Road"></label><label class="col-sm-6" style="text-align: left;">Area<select
                    class="form-control required" name="l_home_info_area">
                    <option value="Mirpur" selected="">Mirpur</option>
                    <option value="Uttara">Uttara</option>
                    <option value="Dhanmondi">Dhanmondi</option>
                    <option value="Gulshan">Gulshan</option>
                    <option value="Banani">Banani</option>
                    <option value="Badda">Badda</option>
                </select></label></div>
        <div class="form-group row"><label class="col-sm-12" style="text-align: left;">Section and
                Bfock<input class="form-control col-sm-12 required" type="text" name="l_home_info_section_bfock"
                    placeholder="Section and Bfock" required="" title="Section and Bfock"></label></div>
        <div class="form-group row"><label class="col-sm-6" style="text-align: left;">Thana<input
                    class="form-control col-sm-12 required" type="text" name="l_home_info_thana" placeholder="Thana"
                    required="" title="Thana"></label><label class="col-sm-6" style="text-align: left;">Post Code<input
                    class="form-control col-sm-12 required" type="text" name="l_home_info_post_code"
                    placeholder="Post Code" required="" title="Post Code"></label>
        </div>
        <div class="form-group row"><label class="col-sm-12" style="text-align: left;">Your Electric Bill
                /Gas Bill Photo&nbsp;<input type="file" id="gasbil" class="required-img col-sm-12"
                    style="margin-right: 0px;margin-left: -12px;" name="l_home_info_bill_photo"
                    onchange="fileValidation(&quot;gasbil&quot;);"></label></div>
    </div>
    <!--Maid information-->
    <div class="tab" style="text-align: center;">
        <h3 class="text-center" style="margin-bottom: 20px;">Maid Information&nbsp;</h3>
        <div class="form-group row"><label class="col-sm-12" style="text-align: left;">Name<input
                    class="form-control col-sm-12" type="text" id="mlname" name="l_maid_name" placeholder="Name"
                    required="" title="Maid Name"
                    onchange="addclass(&quot;mlname&quot;,&quot;mlphone&quot;,&quot;required-bdnum&quot;);"></label>
        </div>
        <div class="form-group row"><label class="col-sm-6" style="text-align: left;">NID NO<input
                    class="form-control col-sm-12" type="text" name="l_maid_nid" placeholder="NID No" required=""
                    title="NID No"></label><label class="col-sm-6" style="text-align: left;">Phone
                No<input class="form-control col-sm-12" type="text" id="mlphone" name="l_maid_phone"
                    placeholder="Phone No" required="" title="Phone No"></label></div>
        <div class="form-group row"><label class="col-sm-12" style="text-align: left;">Permanent
                Address&nbsp;<input class="form-control col-sm-12" type="text" name="l_maid_prmt_addss"
                    placeholder="Address" required="" title="Address"></label></div>
    </div>
    <!--Driver information-->
    <div class="tab" style="text-align: center;">
        <h3 class="text-center" style="margin-bottom: 20px;">Driver Information&nbsp;</h3>
        <div class="form-group row"><label class="col-sm-12" style="text-align: left;">Name<input
                    class="form-control col-sm-12" type="text" id="dlname" name="l_driver_name" placeholder="Name"
                    required="" title="Driver name"
                    onchange="addclass(&quot;dlname&quot;,&quot;dlphone&quot;,&quot;required-bdnum&quot;);"></label>
        </div>
        <div class="form-group row"><label class="col-sm-6" style="text-align: left;">NID NO<input
                    class="form-control col-sm-12" type="text" name="l_driver_nid" placeholder="NID No" required=""
                    title="NID No"></label><label class="col-sm-6" style="text-align: left;">Phone
                No<input class="form-control col-sm-12" type="text" id="dlphone" name="l_driver_phone"
                    placeholder="Phone No" required="" title="Phone No"></label></div>
        <div class="form-group row"><label class="col-sm-12" style="text-align: left;">Permanent
                Address&nbsp;<input class="form-control col-sm-12" type="text" name="l_driver_prmt_addss"
                    placeholder="Address" required="" title="Address"></label></div>
    </div>
    <!--Emergency contact -->
    <div class="tab" style="text-align: center;">
        <h3 class="text-center" style="margin-bottom: 20px;">Emergency Contact&nbsp;</h3>
        <div class="form-group row"><label class="col-sm-12" style="text-align: left;">Name<input
                    class="form-control col-sm-12 required" type="text" name="l_emergency_name" placeholder="Name"
                    required="" title="Previous Landlord Name"></label></div>
        <div class="form-group row"><label class="col-sm-6" style="text-align: left;">NID NO<input
                    class="form-control col-sm-12 required" type="text" name="l_emergency_nid" placeholder="NID No"
                    required="" title="NID No"></label><label class="col-sm-6" style="text-align: left;">Phone No<input
                    class="form-control col-sm-12 required-bdnum" type="tel" name="l_emergency_phone" placeholder="+880"
                    required="" title="Phone No"></label>
        </div>
        <div class="form-group row"><label class="col-sm-12" style="text-align: left;">Permanent
                Address&nbsp;<input class="form-control col-sm-12 required" type="text" name="l_emergency_prmt_addss"
                    placeholder="Permanent Address" required="" title="Permanent Address"></label></div>
        <div class="form-group row"><label class="col-sm-12" style="text-align: left;">Relation<input
                    class="form-control col-sm-12 required" type="text" name="l_emergency_relation"
                    placeholder="Relation" required="" title="Relation"></label></div>
    </div>
    <!--Contact information -->
    <div class="tab" style="text-align: center;">
        <h3 class="text-center" style="margin-bottom: 20px;">Contact and ID Information&nbsp;</h3>
        <div class="form-group row"><label class="col-sm-12" style="text-align: left;">Your NID No<input
                    class="form-control col-sm-12 required" type="text" name="l_nid" placeholder="NID Card No"
                    required="" title="NID Card No"></label></div>

        <div class="form-group row"><label class="col-sm-12" style="text-align: left;">Your Passport No
                (Optional)<input class="form-control col-sm-12 " type="text" name="l_passport"
                    placeholder="Passport No"  title="Passport No"></label></div>

        <div class="form-group row"><label class="col-sm-12" style="text-align: left;">Your Email
                Address&nbsp;<input class="form-control col-sm-12 " type="email" name="l_email"
                    placeholder="Email"  title="Email"></label></div>

        <div class="form-group row"><label class="col-sm-12" style="text-align: left;">Phone Number<input
                    class="form-control col-sm-12 required-bdnum" type="tel" name="l_phone" placeholder="+880"
                    required="" title="Phone Number"></label></div>
        <p class="text-center" style="margin-bottom: 33px;font-size: 13px;">*Please Insert a valid phone
            number and email addresses or your application will be rejected ,And it will be required for
            notifying you the progress of registration .</p>
    </div>
    <!--Next Previous button -->
    <div class="mb-auto" style="float: right;">
        <div class="form-row" style="padding-bottom: 0px;">
            <div class="col" style="padding-bottom: 10px;"><button class="btn btn-primary" id="prevBtn" type="button"
                    onclick="nextPrev(-1)" style="margin-bottom: 0px;">Previous</button></div>
            <div class="col"><button class="btn btn-primary" id="nextBtn" type="button" onclick="nextPrev(1)"
                    name="registration">Next</button></div>
        </div>
    </div>
</form>
</section>
</div>
@include('includes.modal')
@include('includes.register.scripts')