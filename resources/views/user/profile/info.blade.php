        <div class="row">
            <div class="col-md-3 col-6 b-r">
                <strong>Full Name</strong>
                <br>
                <p class="text-muted">{{ $user->personal->fname }} {{ $user->personal->lname }}</p>
            </div>
            <div class="col-md-3 col-6 b-r">
                <strong>Mobile</strong>
                <br>
                <p class="text-muted">{{ $user->personal->phone_number }}</p>
            </div>
            <div class="col-md-3 col-6 b-r">
                <strong>Email</strong>
                <br>
                <p class="text-muted">{{ $user->email }}</p>
            </div>
            <div class="col-md-3 col-6">
                <strong>Location</strong>
                <br>
                <p class="text-muted">{{ $user->personal->contact_address }}</p>
            </div>
        </div>
        <p class="m-t-30">{{ $user->personal->bio }}</p>
        <div class="section-title">Education</div>
        <ul>
            <li>SSC Exam Result: {{ $user->educational->ssc_exam_result }} ({{ $user->educational->ssc_passing_year }})</li>
            <li>HSC Exam Result: {{ $user->educational->hsc_exam_result }} ({{ $user->educational->hsc_passing_year }})</li>
            <li>Bachelor's Degree: {{ $user->educational->bachelors_degree_result }}</li>
        </ul>
        <div class="section-title">Experience</div>
        <ul>
            <li>Course for Applicant: {{ $user->educational->course_for_applicant }}</li>
            <li>Degree After Completion: {{ $user->educational->degree_after_completion }}</li>
            <li>Duration of Course: {{ $user->educational->duration_of_course }}</li>
            <li>Date of Commencement: {{ $user->educational->date_of_commencement }}</li>
        </ul>
        <div class="section-title">Travel</div>
        <ul>
            <li>Airlines Name: {{ $user->travel->airlines_name }}</li>
            <li>Ticket Number: {{ $user->travel->ticket_number }}</li>
            <li>Date of Departure: {{ $user->travel->date_of_departure }}</li>
            <li>Port of Embarkation: {{ $user->travel->port_of_embarkation }}</li>
            <li>Name of City: {{ $user->travel->name_of_city }}</li>
            <li>Date of Arrival: {{ $user->travel->date_of_arrival }}</li>
            <li>Port of Disembarkation: {{ $user->travel->port_of_disembarkation }}</li>
            <li>Name of City 2: {{ $user->travel->name_of_city_2 }}</li>
            <li>Approximate Distance: {{ $user->travel->approximate_distance }}</li>
        </ul>
        <div class="section-title">Banking</div>
        <ul>
            <li>Name of Bank: {{ $user->banking->name_of_bank }}</li>
            <li>Name of Branch: {{ $user->banking->name_of_branch }}</li>
            <li>Bank Account Number: {{ $user->banking->bank_account_number }}</li>
            <li>Name of Account: {{ $user->banking->name_of_account }}</li>
            <li>Bank Account Type: {{ $user->banking->bank_account_type }}</li>
            <li>Account Belongs To: {{ $user->banking->account_belongs }}</li>
            <li>Belongs To: {{ $user->banking->belongs_to }}</li>
        </ul>
        <div class="section-title">Documents</div>
        <div class="row">
            <div class="col-md-3 mb-3">
                <div class="card">
                    <div class="card-body text-center">
                        <strong>Digital Signature</strong>
                        <a href="{{ asset('storage/' . $user->personal->digital_signature_image) }}" target="_blank">
                            <img src="{{ asset('storage/' . $user->personal->digital_signature_image) }}" class="img-fluid mt-2" alt="Digital Signature">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card">
                    <div class="card-body text-center">
                        <strong>Passport Image</strong>
                        <a href="{{ asset('storage/' . $user->personal->passport_image) }}" target="_blank">
                            <img src="{{ asset('storage/' . $user->personal->passport_image) }}" class="img-fluid mt-2" alt="Passport Image">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card">
                    <div class="card-body text-center">
                        <strong>NID Image</strong>
                        <a href="{{ asset('storage/' . $user->personal->nid_image) }}" target="_blank">
                            <img src="{{ asset('storage/' . $user->personal->nid_image) }}" class="img-fluid mt-2" alt="NID Image">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card">
                    <div class="card-body text-center">
                        <strong>Certification Image</strong>
                        <a href="{{ asset('storage/' . $user->personal->certification_image) }}" target="_blank">
                            <img src="{{ asset('storage/' . $user->personal->certification_image) }}" class="img-fluid mt-2" alt="Certification Image">
                        </a>
                    </div>
                </div>
            </div>
        </div>