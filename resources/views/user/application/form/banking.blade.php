<div class="form-row custom-spacing">
    <div class="form-group form-float col-6">
        <div class="form-line">
            <label class="form-label">Applicant's Passport number</label>
            <input type="text" class="form-control" id="passport_number" name="passport_number"
                placeholder="Enter Passport Number" required>
        </div>
    </div>
    <div class="form-group form-float col-6">
        <div class="form-line">
            <label class="form-label">Applicant's passport issue date</label>
            <input type="date" class="form-control" id="passport_issue" name="passport_issue" required>
        </div>
    </div>
</div>

<div class="form-row custom-spacing">
    <div class="form-group form-float col-6">
        <div class="form-line">
            <label class="form-label">Applicant's NID number</label>
            <input type="text" class="form-control" id="nid" name="nid" placeholder="Enter NID" required>
        </div>
    </div>
    <div class="form-group form-float col-6">
        <div class="form-line">
            <label class="form-label">Name of Bank in which stipend will be credited</label>
            <input type="text" class="form-control" id="name_of_bank" name="name_of_bank"
                placeholder="Enter Name of Bank" required>
        </div>
    </div>
</div>

<div class="form-row custom-spacing">
    <div class="form-group form-float col-6">
        <div class="form-line">
            <label class="form-label">Name of Branch</label>
            <input type="text" class="form-control" id="name_of_branch" name="name_of_branch"
                placeholder="Enter Name of Branch" required>
        </div>
    </div>
    <div class="form-group form-float col-6">
        <div class="form-line">
            <label class="form-label">Bank Account Number</label>
            <input type="text" class="form-control" id="bank_account_number" name="bank_account_number"
                placeholder="Enter Bank Account Number" required>
        </div>
    </div>
</div>

<div class="form-row custom-spacing">
    <div class="form-group form-float col-6">
        <div class="form-line">
            <label class="form-label">Name of Account</label>
            <input type="text" class="form-control" id="name_of_account" name="name_of_account"
                placeholder="Enter Name of Account" required>
        </div>
    </div>
    <div class="form-group form-float col-6">
        <div class="form-line">
            <label class="form-label">Bank Account Type</label>
            <input type="text" class="form-control" id="bank_account_type" name="bank_account_type"
                placeholder="Enter Bank Account Type" required>
        </div>
    </div>
</div>

<div class="form-row custom-spacing">
    <div class="form-group form-float col-6">
        <div class="form-line">
            <label class="form-label">Does the account belong to the applicant? <span
                    style="color: red;">**</span></label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="account_belongs" id="account_belongs_yes"
                    value="yes" required>
                <label class="form-check-label" for="account_belongs_yes">Yes</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="account_belongs" id="account_belongs_no"
                    value="no">
                <label class="form-check-label" for="account_belongs_no">No</label>
            </div>
        </div>
    </div>
    <div class="form-group form-float col-6">
        <div class="form-line">
            <label class="form-label">If the bank account does not belong to the applicant, who does it belong to? <span
                    style="color: red;">**</span></label>
            <select class="form-control" id="belongs_to" name="belongs_to" required>
                <option value="">Select</option>
                <option value="father">Father</option>
                <option value="mother">Mother</option>
                <option value="brother">Brother</option>
                <option value="sister">Sister</option>
                <option value="spouse">Spouse</option>
                <option value="not_applicable">Not Applicable</option>
            </select>
        </div>
    </div>
</div>
