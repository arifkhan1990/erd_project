<div class="form-row custom-spacing">
    <div class="form-group form-float col-6">
        <div class="form-line">
            <label class="form-label">SSC Exam Result Type<span style="color: red;">**</span></label>
            <select class="form-control" id="ssc_result_type" name="ssc_result_type" onchange="toggleSscResultOptions()">
                <option value="">Select Result Type</option>
                <option value="division">Division</option>
                <option value="gpa">GPA</option>
            </select>
        </div>
    </div>
    <div class="form-group form-float col-6" id="ssc_division_options" style="display:none;">
        <div class="form-line">
            <label class="form-label">SSC Exam Result (Division)<span style="color: red;">**</span></label>
            <select class="form-control" id="ssc_exam_result_division" name="ssc_exam_result_division">
                <option value="1st">1st Division</option>
                <option value="2nd">2nd Division</option>
                <option value="3rd">3rd Division</option>
            </select>
        </div>
    </div>
    <div class="form-group form-float col-6" id="ssc_gpa_options" style="display:none;">
        <div class="form-line">
            <label class="form-label">SSC Exam Result (GPA)<span style="color: red;">**</span></label>
            <div class="d-flex">
                <input type="number" class="form-control" id="ssc_exam_result_gpa" name="ssc_exam_result_gpa"
                    placeholder="Enter GPA" min="0" step="0.01" />
                <span class="mx-2">/</span>
                <input type="number" class="form-control" id="ssc_exam_result_gpa_max" name="ssc_exam_result_gpa_max"
                    placeholder="Enter Max GPA" min="0" step="0.01" />
            </div>
        </div>
    </div>
    <div class="form-group form-float col-6">
        <div class="form-line">
            <label class="form-label">SSC Passing Year<span style="color: red;">**</span></label>
            <input type="text" class="form-control datepicker" id="ssc_passing_year"
                placeholder="Enter SSC Passing Year" name="ssc_passing_year" required />
        </div>
    </div>
</div>

<div class="form-row custom-spacing">
    <div class="form-group form-float col-6">
        <div class="form-line">
            <label class="form-label">HSC Exam Result Type<span style="color: red;">**</span></label>
            <select class="form-control" id="hsc_result_type" name="hsc_result_type"
                onchange="toggleHscResultOptions()">
                <option value="">Select Result Type</option>
                <option value="division">Division</option>
                <option value="gpa">GPA</option>
            </select>
        </div>
    </div>
    <div class="form-group form-float col-6" id="hsc_division_options" style="display:none;">
        <div class="form-line">
            <label class="form-label">HSC Exam Result (Division)<span style="color: red;">**</span></label>
            <select class="form-control" id="hsc_exam_result_division" name="hsc_exam_result_division">
                <option value="1st">1st Division</option>
                <option value="2nd">2nd Division</option>
                <option value="3rd">3rd Division</option>
            </select>
        </div>
    </div>
    <div class="form-group form-float col-6" id="hsc_gpa_options" style="display:none;">
        <div class="form-line">
            <label class="form-label">HSC Exam Result (GPA)<span style="color: red;">**</span></label>
            <div class="d-flex">
                <input type="number" class="form-control" id="hsc_exam_result_gpa" name="hsc_exam_result_gpa"
                    placeholder="Enter GPA" min="0" step="0.01" />
                <span class="mx-2">out of</span>
                <input type="number" class="form-control" id="hsc_exam_result_gpa_max" name="hsc_exam_result_gpa_max"
                    placeholder="Enter Max GPA" min="0" step="0.01" />
            </div>
        </div>
    </div>
    <div class="form-group form-float col-6">
        <div class="form-line">
            <label class="form-label">HSC Passing Year<span style="color: red;">**</span></label>
            <input type="text" class="form-control datepicker" id="hsc_passing_year"
                placeholder="Enter HSC Passing Year" name="hsc_passing_year" required />
        </div>
    </div>
</div>
<div class="form-row custom-spacing">
    <div class="form-group form-float col-6">
        <div class="form-line">
            <label class="form-label">Last academic degree obtained <span style="color: red;">**</span></label>
            <select class="form-control" id="academic_degree" name="academic_degree" required>
                <option value="">Select</option>
                <option value="Bachelor's">Bachelor's</option>
                <option value="Master's">Master's</option>
                <option value="PhD">PhD</option>
                <option value="Diploma">Diploma</option>
                <option value="HSC">HSC</option>
                <option value="O level">O level</option>
                <option value="Other">Other</option>
            </select>
        </div>
    </div>
    <div class="form-group form-float col-6">
        <div class="form-line">
            <label class="form-label">Result of bachelor's degree (write CGPA or division/class OR write "not
                applicable" if not done yet) <span style="color: red;">**</span></label>
            <input type="text" class="form-control" id="bachelors_degree_result" name="bachelors_degree_result"
                placeholder="Enter Your Answer" required>
        </div>
    </div>
</div>

<div class="form-row custom-spacing">
    <div class="form-group form-float col-6">
        <div class="form-line">
            <label class="form-label">Country to which applicant is planning to study/studying <span
                    style="color: red;">**</span></label>
            <input type="text" class="form-control" id="study_country" name="study_country"
                placeholder="Enter Your Answer" required>
        </div>
    </div>
    <div class="form-group form-float col-6">
        <div class="form-line">
            <label class="form-label">Name of university <span style="color: red;">**</span></label>
            <input type="text" class="form-control" id="name_of_university" name="name_of_university"
                placeholder="Enter Your Answer" required>
        </div>
    </div>
</div>

<div class="form-row custom-spacing">
    <div class="form-group form-float col-12">
        <div class="form-line">
            <label class="form-label">Postal address of university, educational institution in which applicant is
                studying <span style="color: red;">**</span></label>
            <textarea class="form-control" id="portal_address_of_university" name="portal_address_of_university"
                placeholder="Enter Your Answer" required></textarea>
        </div>
    </div>
</div>

<div class="form-row custom-spacing">
    <div class="form-group form-float col-6">
        <div class="form-line">
            <label class="form-label">Phone number of university/educational institution (with country and city code)
                <span style="color: red;">**</span></label>
            <input type="tel" class="form-control" id="phone_number_of_university"
                name="phone_number_of_university" placeholder="Enter Your Answer" required>
        </div>
    </div>
    <div class="form-group form-float col-6">
        <div class="form-line">
            <label class="form-label">Email address of university/educational institution <span
                    style="color: red;">**</span></label>
            <input type="email" class="form-control" id="email_address_of_university"
                name="email_address_of_university" placeholder="Enter Your Answer" required>
        </div>
    </div>
</div>

<div class="form-row custom-spacing">
    <div class="form-group form-float col-6">
        <div class="form-line">
            <label class="form-label">Course in which applicant is studying/planning to study <span
                    style="color: red;">**</span></label>
            <input type="text" class="form-control" id="course_for_applicant" name="course_for_applicant"
                placeholder="Enter Your Answer" required>
        </div>
    </div>
    <div class="form-group form-float col-6">
        <div class="form-line">
            <label class="form-label">Degree that will be conferred after completion of the course <span
                    style="color: red;">**</span></label>
            <input type="text" class="form-control" id="degree_after_completion" name="degree_after_completion"
                placeholder="Enter Your Answer" required>
        </div>
    </div>
</div>

<div class="form-row custom-spacing">
    <div class="form-group form-float col-6">
        <div class="form-line">
            <label class="form-label">Duration of the course (in years) <span style="color: red;">**</span></label>
            <input type="number" class="form-control" id="duration_of_course" name="duration_of_course"
                placeholder="Enter Your Answer" min="1" required>
        </div>
    </div>
    <div class="form-group form-float col-6">
        <div class="form-line">
            <label class="form-label">Date of commencement of the course <span style="color: red;">**</span></label>
            <input type="date" class="form-control" id="date_of_commencement" name="date_of_commencement"
                placeholder="mm/dd/yyyy" required>
        </div>
    </div>
</div>

<div class="form-row custom-spacing">
    <div class="form-group form-float col-6">
        <div class="form-line">
            <label class="form-label">Is the applicant a full-time student? <span
                    style="color: red;">**</span></label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="applicant_status" id="full_time"
                    value="Yes" required>
                <label class="form-check-label" for="full_time">Yes</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="applicant_status" id="part_time"
                    value="No" required>
                <label class="form-check-label" for="part_time">No</label>
            </div>
        </div>
    </div>
    <div class="form-group form-float col-6">
        <div class="form-line">
            <label class="form-label">If the applicant is a part-time student, then how long in week is the working
                hours? <span style="color: red;">**</span></label>
            <select class="form-control" id="working_hours" name="working_hours" required>
                <option value="Not applicable">Not applicable</option>
                <option value="10 or less">10 or less</option>
                <option value="10 - 30">10 - 30</option>
                <option value="more than 30">more than 30</option>
            </select>
        </div>
    </div>
</div>

<div class="form-row custom-spacing">
    <div class="form-group form-float col-6">
        <div class="form-line">
            <label class="form-label">Is the applicant receiving scholarship from the university/education institution?
                <span style="color: red;">**</span></label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="applicant_receiving" id="scholarship_yes"
                    value="Yes" required>
                <label class="form-check-label" for="scholarship_yes">Yes</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="applicant_receiving" id="scholarship_no"
                    value="No" required>
                <label class="form-check-label" for="scholarship_no">No</label>
            </div>
        </div>
    </div>
    <div class="form-group form-float col-6">
        <div class="form-line">
            <label class="form-label">Amount of scholarship in US dollar per year <span
                    style="color: red;">**</span></label>
            <select class="form-control" id="scholarship_amount" name="scholarship_amount" required>
                <option value="Equal or less than USD 12000">Equal or less than USD 12000</option>
                <option value="More than USD 12000">More than USD 12000</option>
                <option value="Not applicable">Not applicable</option>
            </select>
        </div>
    </div>
</div>

<div class="form-row custom-spacing">
    <div class="form-group form-float col-12">
        <div class="form-line">
            <label class="form-label">Has the applicant already finished her/his course at the time of this application
                <span style="color: red;">**</span></label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="finished_status" id="course_finished_yes"
                    value="yes" required>
                <label class="form-check-label" for="course_finished_yes">Yes</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="finished_status" id="course_ongoing"
                    value="Course ongoing" required>
                <label class="form-check-label" for="course_ongoing">Course ongoing</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="finished_status" id="course_not_started"
                    value="Course has not started yet" required>
                <label class="form-check-label" for="course_not_started">Course has not started yet</label>
            </div>
        </div>
    </div>
</div>


<script>
    function toggleSscResultOptions() {
        var resultType = document.getElementById('ssc_result_type').value;
        document.getElementById('ssc_division_options').style.display = (resultType === 'division') ? 'block' : 'none';
        document.getElementById('ssc_gpa_options').style.display = (resultType === 'gpa') ? 'block' : 'none';
    }

    function toggleHscResultOptions() {
        var resultType = document.getElementById('hsc_result_type').value;
        document.getElementById('hsc_division_options').style.display = (resultType === 'division') ? 'block' : 'none';
        document.getElementById('hsc_gpa_options').style.display = (resultType === 'gpa') ? 'block' : 'none';
    }
</script>
