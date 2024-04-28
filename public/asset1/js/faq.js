let month_1 = document.querySelectorAll("#month_1");
let month_1_info = document.querySelectorAll("#month_1_info");

let ques = document.querySelectorAll("#ques");
let ans = document.querySelectorAll("#ans");

let bn_btn = document.querySelector("#bn_btn");

let id = 1;

function bn() {

    id == 1 ? id = 0 : id = 1;

    if (id == 0) {

        bn_btn.innerText = "English";

        month_1[0].innerText = "জানুয়ারি - এপ্রিল";
        month_1_info[0].innerText = "৩০ এপ্রিল রাত ১১:৫৯ এর মধ্যে অনলাইনে আবেদন দাখিল করতে হবে। \n";

        month_1[1].innerText = "মে";
        month_1_info[1].innerText = "যাচাই-বাছাই এর পর সফল আবেদনকারীকে ৩১ মে এর মধ্যে ইমেইলের মাধ্যমে বার্তা প্রেরণ করা হবে।\n";

        month_1[2].innerText = "জুন";
        month_1_info[2].innerText = "৩০ জুনের মধ্যে সফল আবেদনকারীর ব্যাংক একাউন্টে বৃত্তির টাকা প্রেরণ করা হবে। \n";

        ques[0].innerText = "BSTF ফান্ড থেকে ভ্রমণ ভাতার জন্য আবেদনের এবং ফলাফলের সময়সীমা\n";
        ans[0].innerText = "২০২২ সাল থেকে প্রতি বছর জানুয়ারি মাসে বিজ্ঞপ্তি প্রচার করা হবে এবং আবেদনকারীকে জানুয়ারি থেকে এপ্রিল এই চার মাসের মধ্যে অন-লাইনে আবেদন সম্পন্ন করতে হবে। ৩০ এপ্রিল বাংলাদেশ সময় রাত ১১:৫৯ মিনিটের পর দাখিলকৃত আবেদন কোন অবস্থাতেই বিবেচিত হবে না। পরবর্তী মাস, অর্থাৎ মে মাসের মধ্যে আবেদন যাচাই-বাছাইয়ের পর ফলাফল শুধুমাত্র সফল আবেদনকারীকে ইমেইলের মাধ্যমে জানিয়ে দেয়া হবে। \n";

        ques[1].innerText = "সফল আবেদনকারী কিভাবে ভ্রমণ ভাতা প্রাপ্তির তথ্য নিশ্চিত হবেন";
        ans[1].innerText = "সফল আবেদনকারীকে ইমেইলের মাধ্যমে ভ্রমণ ভাতা প্রাপ্তির তথ্য জানানো হবে। সুতরাং সকল আবেদনকারীকে তার প্রদত্ত ইমেইলের ইনবক্স এবং স্প্যাম ফোল্ডারের দিকে সতর্কতার সাথে লক্ষ্য রাখার জন্য অনুরোধ জানানো যাচ্ছে। জুন মাসে প্রথম সপ্তাহের মধ্যে কোন ইমেইল না পেলে ধরে নিতে হবে আবেদন মঞ্জুর হয়নি এবং সে ক্ষেত্রে ফোন কিংবা ইমেইলের মাধ্যমে যোগাযোগের কোন প্রয়োজন নেই। তবে আবেদন মঞ্জুর হওয়া সংক্রান্ত ইমেইল পাবার পরও যদি ৩০ জুনের মধ্যে আবেদনকারী ভ্রমণ ভাতার টাকা তার নির্ধারিত ব্যাংক হিসাবে না পেয়ে থাকেন, তাহলে ইমেইল কিংবা ফোনের মাধ্যমে যোগাযোগ করতে পারবেন।";

        ques[2].innerText = "আবেদনের যোগ্যতা";
        ans[2].innerText = "অনলাইনে আবেদন দাখিলের পূর্ববর্তী বছরের এপ্রিল মাস থেকে আবেদন দাখিলের বছরের মার্চ মাসের মধ্যে যে সকল বাংলাদেশী শিক্ষার্থী বাংলাদেশ থেকে বিদেশের কোন বিশ্ববিদ্যালয়ে উচ্চ শিক্ষার জন্য গিয়েছেন শুধুমাত্র তারাই আবেদন করতে পারবেন। উদাহরণঃ ২০২১ সালের ০১ এপ্রিল থেকে ৩১ মার্চ ২০২২ সময়ের মধ্যে যে সকল শিক্ষার্থী বিদেশে উচ্চ শিক্ষার জন্য গিয়েছেন শুধুমাত্র তারাই ২০২২ সালের জানুয়ারি থেকে এপ্রিল সময়ের মধ্যে আবেদন করতে পারবেন। এ ক্ষেত্রে ১ এপ্রিল ২০২১ এর আগে কোন শিক্ষার্থী উচ্চ শিক্ষার জন্য বিদেশে গিয়ে থাকলে অথবা ৩১ মার্চ ২০২২ এর পরে উচ্চ শিক্ষার জন্য বিদেশ ভ্রমণের দিন নির্ধারিত থাকলে তার আবেদন গ্রহণ করা হবে না। \n" +
            "এছাড়া যারা একবার BSTF থেকে বৃত্তি প্রাপ্ত হয়েছেন অথবা অন্য কোন উৎস থেকে প্লেনের টিকেট পেয়েছেন তারা কোন অবস্থাতেই বিবেচিত হবেন না। তথ্য গোপন করে বা মিথ্যা তথ্য দিয়ে আবেদন করলে আইনানুগ ব্যবস্থা গ্রহণ করা হবে";

        ques[3].innerText = "ভ্রমণ ভাতার অর্থ কোন্‌ ব্যাংক একাউন্টে প্রেরিত হবে\n";
        ans[3].innerText = "ভ্রমণ ভাতার অর্থ শুধুমাত্র নিজের কিংবা নিকট আত্মীয়দের মধ্যে বাবা, মা, স্ত্রী/স্বামী, ভাই এবং বোনের ব্যাংক হিসাবের যে কোন একটিতে প্রেরণ করা হবে। আবেদনের সময় প্রার্থী সুনির্দিষ্টভাবে উল্লেখ করবেন কিভাবে তিনি ভ্রমণ ভাতার অর্থ পেতে চান এবং পরবর্তীতে সে অনুযায়ী অর্থ প্রেরণ করা হবে। উল্লেখিত ব্যক্তিগণ ছাড়া অন্য কারও ব্যাংক হিসাবে (যেমন- চাচা, বন্ধু ইত্যাদি) বিশেষ ক্ষেত্র ব্যতীত কোন অবস্থাতেই ভ্রমণ ভাতার অর্থ প্রেরণ করা হবে না। \n" +
            "আবেদনকারীর নির্ধারিত ব্যাংক হিসাব অবশ্যই বাংলাদেশে অবস্থিত কোন তফশীলী বাণিজ্যিক ব্যাংকে হতে হবে। সঠিক ব্যাংক হিসাব না প্রদান করা হলে এবং এর ফলে ভ্রমণ ভাতার অর্থ প্রেরণ সম্ভব না হলে আবেদন বাতিল বলে গণ্য হবে। \n";

        ques[4].innerText = "আবেদনের হার্ড কপি পাঠাতে হবে কি না";
        ans[4].innerText = "আবেদনের হার্ড কপি পাঠাবার প্রয়োজন নেই। সকল ডকুমেন্টের সফট্‌ কপি আবেদনকারী অনলাইন আবেদনের সময় আপলোড করবেন। তবে BSTF চাইলে পরবর্তীতে যে কোন ডকুমেন্টের হার্ড কপি প্রেরণ করতে হতে পারে। \n" +
            "\n";

        ques[5].innerText = "কি কি তথ্য এবং ডকুমেন্ট আবেদনের সময় দাখিল করতে হবে\n";
        ans[5].innerText = "আবেদনের সময় আবেদনকারীর পাসপোর্টের কপি (তথ্য পৃষ্ঠা এবং ইমিগ্রেশন সীলের পৃষ্ঠা সহ), জাতীয় পরিচয়পত্রের কপি (উভয় পাশ), শিক্ষাগত যোগ্যতার সনদ, নিজের এবং বাবা/মা-এর বার্ষিক আয়ের সনদ, নিজের ছবি, বিদেশে যে বিশ্ববিদ্যালয়ে ভর্তি হয়েছেন সেই বিশ্ববিদ্যালয়ের ভর্তি সনদ (ভর্তির তারিখ এবং কোর্সের নাম উল্লেখ সহ), প্লেন টিকেটের কপি, সকল বোর্ডিং পাশের কপি ইত্যাদি ডকুমেন্ট অনলাইনে দাখিল করতে হবে।    \n";

        ques[6].innerText = "অনলাইনে কিভাবে আবেদন করব? ";
        ans[6].innerText = "অনলাইন আবেদনের শুরুতে আবেদনকারী তার নিজের ইমেইলের মাধ্যমে একটি একাউন্ট তৈরি করে আবেদন প্রক্রিয়া শুরু করতে পারবেন। পরবর্তীতে আবেদনকারীর এ ইমেইলের মাধ্যমে যাবতীয় যোগাযোগ করা হবে বিধায় ইমেইল নির্বাচনের সময় সতর্কতা অবলম্বন করা অত্যাবশ্যক।";

        ques[7].innerText = "আবেদনের সময় প্রয়োজনীয় ডকুমেন্ট হাতের কাছে না থাকলে কি করব?";
        ans[7].innerText = "অনলাইন আবেদনের প্রতিটি ধাপ আবেদনকারী তার একাউন্টে সংরক্ষণ করতে পারবেন। সংরক্ষিত আবেদনের যে কোন পর্যায়ে যে কোন তথ্য আবেদনকারী সংশোধন কিংবা সংযোজন করতে পারবেন।  ফলে, হাতের কাছে কোন ডকুমেন্ট না থাকলে আবেদন সংরক্ষণ করে এবং পরবর্তীতে প্রয়োজনীয় ডকুমেন্ট সংগ্রহ করে সংরক্ষিত আবেদনে সংশোধন বা সংযোজন করা যাবে। তবে আবেদন প্রক্রিয়ার প্রতিটি ধাপ সম্পন্ন করে চূড়ান্ত দাখিলের পর এ সুযোগ দেয়া হবে না এবং ফলে আবেদন বাতিল হতে পারে। তাই আবেদনের প্রতিটি ধাপে সতর্কতার সাথে নির্দেশনা আনুযায়ী আবেদন প্রক্রিয়া সম্পন্ন কর উচিত।    \n";

        ques[8].innerText = "NID না থাকলে জন্ম নিবন্ধন দিয়ে আবেদন করা যাবে কিনা?\n";
        ans[8].innerText = "NID না থাকলে বা বিশেষ পরিস্হিতিতে অনলাইনে নিবন্ধিত জন্ম সনদ আবশ্যিকভাবে দাখিল করতে হবে। তবে এক্ষেত্রে আবেদনকারীর পাসপোর্টে উল্লেখিত ব্যক্তিগত নাম্বার এবং এ জন্ম সনদের নাম্বার একই হতে হবে। \n";

        ques[9].innerText = "আকাশপথে ভ্রমণ না করে বাসে কিংবা ট্রেনে বিদেশ ভ্রমণ করলে ভ্রমণ ভাতা পাওয়া যাবে কি না?\n";
        ans[9].innerText = "বাসে কিংবা ট্রেনে শুধুমাত্র ভারতে ভ্রমণের ক্ষেত্রে বৃত্তি পাওয়া যাবে। তবে এ ক্ষেত্রে বাস কিংবা ট্রেনে ভ্রমণের উপযুক্ত প্রমাণ দাখিল করা অত্যাবশ্যক। ";

        ques[10].innerText = "একই পরিবারের একাধিক ব্যক্তি আবেদনের সুযোগ পাবে কি না?";
        ans[10].innerText = "একই পরিবারে একাধিক যোগ্য প্রার্থী থাকলে সবাই আবেদনের সুযোগ পাবেন।";

        ques[11].innerText = "পাসপোর্টে বাংলাদেশ ইমিগ্রেশন কর্তৃক প্রদত্ত Departure সীল থাকলেও বিদেশের ইমিগ্রেশন কর্তৃক Arrival সীল না থাকলে কি হবে?\n";
        ans[11].innerText = "বিশ্বের কোন দেশের ইমিগ্রেশন কর্তৃক  Arrival সীল ব্যবহার না করার বিষয়টি যদি যথাযথ ভাবে প্রমাণীত হয়, তবে সংশ্লিষ্ট দেশে গমনকারীর ক্ষেত্রে তার পাসপোর্টে বিদেশের ইমিগ্রেশন কর্তৃক Arrival সীল না থাকলেও বিবেচনায় আসবে। তবে  Arrival সংক্রান্ত প্রমাণক দাখিল করতে হবে।\n";

        ques[12].innerText = "ভ্রমণ ভাতার অর্থ কি সব আবেদনকারীর জন্য সমান?";
        ans[12].innerText = "ভ্রমণ ভাতা প্লেনের টিকেটের মূল্যের আনুপাতিক হারে নির্ধারণ করা হয়। ফলে, ভ্রমণ ভাতার পরিমাণ আবেদনকারীর বিদেশে অবস্থানের উপর নির্ভর করে ভিন্ন ভিন্ন হতে পারে। প্রতিটি প্লেনের টিকেটের মূল্য সংশ্লিষ্ট এয়ারলাইন্সের সাথে যোগাযোগ করে এবং অন্যান্য পদ্ধতিতে যাচাই করা হবে। মিথ্যা তথ্য প্রদানের ক্ষেত্রে আবেদন বাতিল হবে এবং আইনানুগ ব্যবস্থা গ্রহণ করা হবে। ";

    } else {

        bn_btn.innerText = "বাংলা";

        month_1[0].innerText = "January to April";
        month_1_info[0].innerText = "Submission of application by 30 April 11:59 pm Bangaldesh time. \n";

        month_1[1].innerText = "May";
        month_1_info[1].innerText = "After assessment of application and selection of successful candidates, notification of awards will be sent to successful candidates by email on or before 31 May.\n";

        month_1[2].innerText = "June";
        month_1_info[2].innerText = "1. Scholarship will be transferred to successful candidate's bank account by 30 june \n";

        ques[0].innerText = "1. Timeline of submission of application for BSTF travel grant";
        ans[0].innerText = "From the year 2022, every year applicants will have to apply online between January and April. Any application submitted after 11:59 pm Bangladesh Time of 30 April will not be accepted. Within the next month, i.e., in May, applications will be assessed and notification of award will be sent only to the successful candidates by email.";

        ques[1].innerText = "2. How the applicant will receive notification of award of grant from BSTF";
        ans[1].innerText = "Successful candidates will receive notification by email. Therefore, all candidates are requested to keep an eye on the inbox as well as the spam folder of the email they provided in their application. If an applicant does not receive notification by the first week of June, it will imply that her/his application has not been approved and in that case, applicants are requested not to contact BSTF by email or phone to ask status of their application. However, if an applicant is notified of award of travel grant and yet the applicant does not receive the scholarship in the designated bank account by 30 June, BSTF may be contacted by email or phone.";

        ques[2].innerText = "3. Eligibility for application";
        ans[2].innerText = "Bangladeshi students who went abroad from Bangladesh for higher studies from the first day of April of the year preceding the application year until the end of March of the application year will be eligible to apply. Example: Applicants who went abroad between 01 April 2021 and 31 March 2022 will be eligible to apply for grant. Therefore, in this case, students who went abroad before 01 April 2021 or after 31 March 2022 will not be eligible to apply.";

        ques[3].innerText = "4. Designated bank account";
        ans[3].innerText = "Travel grant will be remitted only to any one of the applicant’s own, father’s, mother’s, spouse’s, brother’s, sister’s bank accounts. The applicant will clearly mention in the application how the money should be transferred and steps will be take accordingly. Any other bank account other than those mentioned in the preceding sentence shall not be eligible unless there is compelling reason. The designated bank account must be maintained with a scheduled commercial bank located in Bangladesh. If the bank account information is wrong and as a result travel grant cannot be sent to the designated bank account, the application will be considered rejected.";

        ques[4].innerText = "5. Whether hard copies of application documents are required to submit";
        ans[4].innerText = "No hard copies are required. Applicants will only need to upload soft copies of required documents through online application system. However, the applicants may still need to send hard copies of documents as and when BSTF requests for.";

        ques[5].innerText = "6. Documents that the applicants will need to submit online";
        ans[5].innerText = "Applicants will need to submit online copies of passport (information and pages with immigration seals), NID, educational certificates, annual income statement of self and/or parents, passport size photo, enrollment certificate (mentioning date of enrollment, course name, date of commencement of course etc.) issued by the foreign university in which applicant has been admitted, plane ticket, all boarding passes etc.";

        ques[6].innerText = "7. How to submit application online?";
        ans[6].innerText = "At the beginning of the online application, all applicants will need to create an account using their emails and later all communications to and from the BSTF will be done through this email. Therefore, the applicants are requested to choose email address carefully.";

        ques[7].innerText = "8. What should I do if I do not have the required documents at the time of online application?";
        ans[7].innerText = "Applicant will be able to save all the steps of the application at any time and then later the applicant will be able to add or replace any information or document to the saved application. Therefore, if any required document is not at hand at the time of application, the applicant will be able to return to the saved application and continue. However, applicants should note that once the application is finally submitted after completing all steps and review, the applicant will not be able to edit the application anymore and hence the application may be rejected. Therefore, the applicants should take extreme care at the time of submission of application.\n" +
            "\n";

        ques[8].innerText = "9. May I submit application using birth registration instead of NID?";
        ans[8].innerText = "Yes, if the birth registration can be verified online. However, in this case, the birth registration number must be exactly the same as the personal number mentioned in the applicant’s passport.";

        ques[9].innerText = "10. Can I apply for travel grant in case of travel by bus or train?";
        ans[9].innerText = "Travel by bus or train only to India will be eligible for application. Adequate supporting documents in this regard will need to be submitted.";

        ques[10].innerText = "11. Can there be more than one applicant from the same family?\n" +
            "\n";
        ans[10].innerText = "Yes, all the eligible applicants from the same family will be allowed to submit application separately.\n" +
            "\n";

        ques[11].innerText = "12. If there is only departure seal but no arrival seal in the passport, will the application be allowed?";
        ans[11].innerText = "If there is no arrival seal in the passport, reason for such case will be duly verified and if found that the foreign immigration does not put arrival seal in the passport, the application will be allowed. However, other related document in support of arrival will be required.\n" +
            "\n";

        ques[12].innerText = "13. Will all the successful applicants receive the same amount of travel grant?";
        ans[12].innerText = "Travel grant is generally determined based on the airfare. Therefore, amount of travel grant will differ from applicant to applicant based on their location abroad.";

    }

}
