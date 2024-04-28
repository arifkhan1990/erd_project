// top language change button

let nav_eng_btn = document.getElementById("nav_en_btn");
let nav_bn_btn = document.getElementById("nav-bn-btn");

// footer bangla btn
let bangla_btn = document.getElementById("bangla_btn");
let english_btn = document.getElementById("language_en");
let navbar_brand = document.getElementById("navbar_brand");
let starting_content = document.getElementById("starting_content");
// sign in and register
//
let register = document.getElementById("register");
// let sign_in = document.getElementById("sign_in");
let eligible_candidates = document.getElementById("eligible_candidates");
// student box
let student_box_1 = document.getElementById("student_box_1");
let student_box_2 = document.getElementById("student_box_2");
let student_box_3 = document.getElementById("student_box_3");
// footer text

let footer_text_1 = document.getElementById("footer_text_1");

// ------------------------- english change ---------------------------------------

let english_navbar_brand = navbar_brand.innerHTML;
let english_starting_content = starting_content.innerHTML;
// sign in and register
// let english_sign_in = sign_in.innerText;
let enlish_register = register.innerText;
let english_eligible_candidates = eligible_candidates.innerText;
// student box
let english_student_box_1 = student_box_1.innerText;
let english_student_box_2 = student_box_2.innerText;
let english_student_box_3 = student_box_3.innerText;
// footer text
let english_footer_text_1 = footer_text_1.innerText;
console.log(english_footer_text_1);

// ------------------------ nav btn language change btn ----------------------

nav_eng_btn.addEventListener("click", function (e) {
  nav_en_btn.style.display = "none";
  nav_bn_btn.style.display = "inline-block";
  englishChange(e);
});

nav_bn_btn.addEventListener("click", function (e) {
  nav_bn_btn.style.display = "none";
  nav_en_btn.style.display = "inline-block";
  banglaChange(e);
});

// ------------------------------------------ end - nav btn language change btn

//  ------------------------ english change ----------------------------------------

language_en.addEventListener("click", function (e) {
  englishChange(e);
});

// ----------------------------------------------------------- end - english change

// ---------------------------- bangla change -------------------------------------

bangla_btn.addEventListener("click", function (e) {
  banglaChange(e);
});

// ------------------------------------------------------------ end - bangla change

// ------------------------- bangla function ----------------------------

function banglaChange(e) {
  e.preventDefault();

  navbar_brand.innerHTML = "বাংলাদেশ সুইডেন ট্রাস্ট ফান্ড";
  starting_content.innerHTML =
    "যোগ্য প্রার্থীদের একমুখী বিমান ভ্রমণের জন্য তহবিল।";
  register.innerHTML = "নিবন্ধন করুন";
  // sign_in.innerHTML = "সাইন ইন";
  eligible_candidates.innerHTML = "আবেদনযোগ্য প্রার্থী";
  student_box_1.innerHTML =
    "বাংলাদেশী শিক্ষার্থীরা যারা বিদেশী বিশ্ববিদ্যালয়/ শিক্ষাপ্রতিষ্ঠানে ভর্তি হয়েছে Under grad/Graduate/Post grad/ Ph.D স্তরের প্রোগ্রামের জন্য।";
  student_box_2.innerHTML =
    "যে সকল শিক্ষার্থীরা আগে বাংলাদেশ-সুইডেন ট্রাস্ট ফান্ড বা অন্য কোন উৎস থেকে ভ্রমণ অনুদান/বিমান টিকিট পাননি।";
  student_box_3.innerHTML =
    "যেসব শিক্ষার্থী কোনো পাবলিক পরীক্ষায় তৃতীয় বিভাগ/শ্রেণী/সমমানের জিপিএ পায়নি।";
  footer_text_1.innerHTML = "বাংলাদেশ সুইডেন ট্রাস্ট ফান্ড";
}

// ------------------------------------------------ end - bangla function

// ------------------------- english function ----------------------------

function englishChange(e) {
  e.preventDefault();

  navbar_brand.innerHTML = english_navbar_brand;
  starting_content.innerHTML = english_starting_content;
  // sign in and register
  register.innerText = enlish_register;
  // sign_in.innerHTML = english_sign_in;
  eligible_candidates.innerText = english_eligible_candidates;
  // student box
  student_box_1.innerText = english_student_box_1;
  student_box_2.innerText = english_student_box_2;
  student_box_3.innerText = english_student_box_3;
  // footer text
  footer_text_1.innerText = english_footer_text_1;
}

// ------------------------------------------------ end - english function
