<div class="form-row">
    <div class="form-group form-float col-6">
        <div class="form-line">
            <label class="form-label">Applicant's first name (as in passport) <span style="color: red;">**</span></label>
            <input type="text" class="form-control" id="first_name" aria-describedby="emailHelp"
                placeholder="Enter first Name" name="fname" class="@error('fname') is-invalid @enderror" required />
        </div>
    </div>
    <div class="form-group form-float col-6">
        <div class="form-line">
            <label class="form-label">Applicant's last name (as in passport)<span style="color: red;">**</span></label>
            <input type="text" class="form-control" id="last_name" aria-describedby="emailHelp"
                placeholder="Enter last name" name="lname" class="@error('lname') is-invalid @enderror" />
        </div>
    </div>
</div>
<div class="form-row">
    <div class="form-group form-float col-6">
        <div class="form-line">
            <label class="form-label">Applicant's Image</label>
            <input type="file" class="form-control-file" id="image" name="image"
                class="@error('image') is-invalid @enderror" />
        </div>
    </div>
    <div class="form-group form-float col-6">
        <div class="form-line">
            <label class="form-label">Gender<span style="color: red;">**</span></label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="male" value="male" />
                <label class="form-check-label" for="exampleRadios1">
                    Male
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="female" value="female" />
                <label class="form-check-label" for="exampleRadios1">
                    Female
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="other" value="other" />
                <label class="form-check-label" for="exampleRadios1">
                    Other
                </label>
            </div>
        </div>
    </div>
</div>
<div class="form-row">
    <div class="form-group form-float col-6">
        <div class="form-line">
            <label class="form-label">Digital Signature Image [ 300px * 300px ]<span
                    style="color: red;">**</span></label>
            <input type="file" class="form-control-file" id="image" name="digital_signature_image"
                class="@error('digital_signature_image') is-invalid @enderror" required />
        </div>
    </div>
    <div class="form-group form-float col-6">
        <div class="form-line">
            <label class="form-label">Passport Image [ 300px * 80px ]<span style="color: red;">**</span></label>
            <input type="file" class="form-control-file" id="image" name="passport_image"
                class="@error('passport_image') is-invalid @enderror" required>
        </div>
    </div>
</div>
<div class="form-row">
    <div class="form-group form-float col-6">
        <div class="form-line">
            <label class="form-label">NID Image<span style="color: red;">**</span></label>
            <input type="file" class="form-control-file" id="image" name="nid_image"
                class="@error('nid_image') is-invalid @enderror" required />
        </div>
    </div>
    <div class="form-group form-float col-6">
        <div class="form-line">
            <label class="form-label">Certification Image<span style="color: red;">**</span></label>
            <input type="file" class="form-control-file" id="image" name="certification_image"
                class="@error('certification_image') is-invalid @enderror" required />
        </div>
    </div>
</div>

<div class="form-row">
    <div class="form-group form-float col-6">
        <div class="form-line">
            <label class="form-label">Applicant's date of birth<span style="color: red;">**</span></label>
            <input type="date" class="form-control" id="dob" aria-describedby="emailHelp"
                placeholder="Enter Your Answer" name="dob"
                max='{{ Carbon\Carbon::now()->subYear(10)->toDateString() }}'
                class="@error('dob') is-invalid @enderror" required />
        </div>
    </div>
    <div class="form-group form-float col-6">
        <div class="form-line">
            <label class="form-label">Applicant's mother's name (as in passport)<span
                    style="color: red;">**</span></label>
            <input type="text" class="form-control" id="mothers_name" aria-describedby="emailHelp"
                placeholder="Enter Your Answer" name="mothers_name"
                class="@error('mothers_name') is-invalid @enderror" required />
        </div>
    </div>
</div>
<div class="form-row">
    <div class="form-group form-float col-6">
        <div class="form-line">
            <label class="form-label">Applicant's mother's NID number<span style="color: red;">**</span></label>
            <input type="number" class="form-control" id="mothers_nid" placeholder="Enter Your Answer"
                name="mothers_nid"
                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                maxlength="17" minlength="10" min="0" class="@error('mothers_nid')
is-invalid
@enderror"
                required />
        </div>
    </div>
    <div class="form-group form-float col-6">
        <div class="form-line">
            <label class="form-label">Details of mother's profession including name of office,
                designation, phone and email<span style="color: red;">**</span></label>
            <input type="text" class="form-control" id="mothers_profession" aria-describedby="emailHelp"
                placeholder="Enter Your Answer" name="mothers_profession"
                class="@error('mothers_profession') is-invalid @enderror" required />
        </div>
    </div>

</div>

<div class="form-row">
    <div class="form-group form-float col-6">
        <div class="form-line">
            <label class="form-label">Mother's gross monthly income<span style="color: red;">**</span></label>
            <input type="number" class="form-control" id="mothers_gross_income" aria-describedby="emailHelp"
                placeholder="Enter Your Answer" name="mothers_gross_income" min="0"
                class="@error('mothers_gross_income') is-invalid @enderror" required />
        </div>
    </div>
    <div class="form-group form-float col-6">
        <div class="form-line">
            <label class="form-label">Applicant's father's name (as in passport)<span
                    style="color: red;">**</span></label>
            <input type="text" class="form-control" id="fathers_name" aria-describedby="emailHelp"
                placeholder="Enter Your Answer" name="fathers_name"
                class="@error('fathers_name') is-invalid @enderror" required />
        </div>
    </div>
</div>



<div class="form-row">
    <div class="form-group form-float col-6">
        <div class="form-line">
            <label class="form-label">Details of father's profession including name of office,
                designation, phone and email<span style="color: red;">**</span></label>
            <input type="text" class="form-control" id="fathers_profession" aria-describedby="emailHelp"
                placeholder="Enter Your Answer" name="fathers_profession"
                class="@error('fathers_profession') is-invalid @enderror" required />
        </div>
    </div>
    <div class="form-group form-float col-6">
        <div class="form-line">
            <label class="form-label">Applicant's father's gross monthly income<span
                    style="color: red;">**</span></label>
            <input type="number" class="form-control" id="fathers_gross_income" aria-describedby="emailHelp"
                placeholder="Enter Your Answer" name="fathers_gross_income" min="0"
                class="@error('fathers_gross_income') is-invalid @enderror" required />
        </div>
    </div>


</div>

<div class="form-row">
    <div class="form-group form-float col-6">
        <div class="form-line">
            <label class="form-label">Applicant's contact address in Bangladesh<span
                    style="color: red;">**</span></label>
            <input type="text" class="form-control" id="contact_address" aria-describedby="emailHelp"
                placeholder="Enter Your Answer" name="contact_address"
                class="@error('contact_address') is-invalid @enderror" required />
        </div>
    </div>
    <div class="form-group form-float col-6">
        <div class="form-line">
            <label class="form-label">Applicant's permanent address in Bangladesh (as in passport)<span
                    style="color: red;">**</span></label>
            <input type="text" class="form-control" id="permanent_address" aria-describedby="emailHelp"
                placeholder="Enter Your Answer" name="permanent_address"
                class="@error('permanent_address') is-invalid @enderror" required />
        </div>
    </div>

</div>

<div class="form-row">
    <div class="form-group form-float col-6">
        <div class="form-line">
            <label class="form-label">Applicant's current phone number (with country code and city
                code)<span style="color: red;">**</span></label>
            <input id="phone" name="phone_number" type="tel" class="form-control" required />
        </div>
    </div>
</div>
