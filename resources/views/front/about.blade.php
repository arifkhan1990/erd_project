<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <link rel="stylesheet" href={{ asset('asset1/style.css') }} />
    <link rel="stylesheet" href="{{ asset('assets/css/landing.css') }}" />

    <!-- google  font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;700&family=Poppins:wght@400;500;700&display=swap"
        rel="stylesheet" />
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/f44f162d78.js" crossorigin="anonymous"></script>
    <title>About</title>
</head>

<body>

    {{--  ---------------- extended navbar -------------------  --}}
    <x-navbar></x-navbar>
    {{--  ---------------- extended navbar -------------------  --}}
    <section class="shadow-lg container">
        <!-- about -->
        <div class="container px-2">
            <h3 class="text-primary text-center text-font mt-5 pt-4" id="about">About Us</h3>
            <div
                class="
            d-flex
            justify-content-center
            align-item-center
            mx-5
            mt-5
            rounded-3
          ">
                <p class="text-font p-4 text-align" id="about_us_content">
                    The Bangladesh-Sweden Trust Fund (BSTF) was established in 1984 with
                    grants from the Swedish International Development Agency (SIDA).
                    With a view to developing human resources in Bangladesh, one-way
                    travel grant is being provided to Bangladeshi students studying
                    abroad. Operations of the BSTF are run by a 12-member committee,
                    members of which are from both the public and the private sectors.
                    The Secretary of the Economic Relations Division is the Chair of the
                    committee.
                </p>
            </div>
        </div>
    </section>

    <!-- contact -->
    <section class="shadow-lg container">
        <h3 class="text-primary text-center text-font mt-5 pt-4" id="contact_us">Contact Us</h3>
        <div class="m-4 p-2">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div
                        class="
                d-flex
                justify-content-center
                align-item-center
                mx-5
                mt-5
                rounded-3
              ">
                        <p class="text-font p-4 text-align" id="contact_us_content">
                            Member-Secretary <br />
                            Bangladesh-Sweden Trust Fund (BSTF) Committee <br />
                            Economic Relations Division, Ministry of Finance <br />
                            Government of the People’s Republic of Bangladesh <br />
                            Block-16, Room-27, Sher-e-Bangla Nagar <br />
                            Dhaka-1207 <br />
                            Phone-+880248117635, Fax-+88029180788 <br />
                            E-mail-bstf@erd.gov.bd <br />
                            web-www.erd.gov.bd <br />
                        </p>
                    </div>
                </div>

                <div class="col-lg-6 col-12">
                    <div class="d-flex justify-content-cener align-items-center pb-3">
                        <iframe height="400" width="400" id="gmap_canvas"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.3000097590834!2d90.3784248146248!3d23.77232879385602!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c751a359373f%3A0x668315c0d5a7db06!2sPlanning%20Commission%2C%20General%20Economic%20Division!5e0!3m2!1sen!2sbd!4v1645692198577!5m2!1sen!2sbd"
                            frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- footer -->
    <footer class="footer-bg p-5">
        <div class="d-flex justify-content-center align-item-center border-bottom">
            <h5 class="text-center text-white p-4">Bangladesh Sweden Trust Fund</h5>
            <div>
                {{--          <button class="mt-3 btn btn-outline-light rounded-pill px-3"> --}}
                {{--            <small>English</small> --}}
                {{--          </button> --}}
            </div>
        </div>

        <p class="text-center text-white mt-4">
            <small>Design And Developed by SIS inflexionpoint BD for Economics Relations
                Division.</small>
        </p>
    </footer>


    {{-- ------------------------------- english to bangla script ------------------------------ --}}

    <script>
        let about_us = document.querySelector("#about");
        let about_us_content = document.querySelector("#about_us_content");
        let contact_us = document.querySelector("#contact_us");
        let contact_us_content = document.querySelector("#contact_us_content");
        let bn_btn = document.querySelector("#bn_btn");

        let id = 1;

        function bn() {

            id == 1 ? id = 0 : id = 1;

            if (id == 0) {

                bn_btn.innerText = "English";
                about_us.innerHTML = "আমাদের সম্পর্কে";
                about_us_content.innerHTML =
                    "সুইডিশ ইন্টারন্যাশনাল ডেভেলপমেন্ট এজেন্সি’র (SIDA) সহায়তায় বাংলাদেশ-সুইডেন ট্রাস্ট ফান্ড (BSTF) ১৯৮৪ সনে গঠিত হয়। বাংলাদেশের জনসম্পদ উন্নয়নে সহায়তা করার লক্ষ্যে এ ট্রাস্ট ফান্ড থেকে ১৯৯৬ সাল হতে নিয়মিতভাবে বিদেশে অধ্যয়নরত বাংলাদেশী শিক্ষার্থীদেরকে বৃত্তি হিসেবে এক পথের আংশিক ভ্রমণ ব্যয় প্রদান করা হয়। বর্তমানে সরকারী ও বেসরকারী খাতের ১২ সদস্যের একটি কমিটি দ্বারা এ ফান্ডের যাবতীয় কর্মকান্ড পরিচালিত হচ্ছে। অর্থনৈতিক সম্পর্ক বিভাগের সচিব পদাধিকার বলে এ কমিটির সভাপতি।";
                contact_us.innerHTML = "যোগাযোগ";
                contact_us_content.innerText = `সদস্য-সচিব
        বাংলাদেশ-সুইডেন ট্রাস্ট ফান্ড (বিএসটিএফ) কমিটি
        অর্থনৈতিক সম্পর্ক বিভাগ, অর্থ মন্ত্রণালয়
        শেরেবাংলা নগর, ঢাকা-১২০৭
        ব্লক-১৬, রুম-২৭
        ফোন-+৮৮০২৪৮১১৭৬৩৫, ফ্যাক্স-+৮৮০২৯১৮০৭৮৮
        ই-মেইল-bstf@erd.gov.bd
                ওয়েব-www.erd.gov.bd
        `;
            } else {
                bn_btn.innerText = "বাংলা";
                about_us.innerHTML = "About Us";
                about_us_content.innerHTML =
                    "The Bangladesh-Sweden Trust Fund (BSTF) was established in 1984 with grants from the Swedish International Development Agency (SIDA). With a view to developing human resources in Bangladesh, one-way travel grant is being provided to Bangladeshi students studying abroad. Operations of the BSTF are run by a 12-member committee, members of which are from both the public and the private sectors. The Secretary of the Economic Relations Division is the Chair of the committee.";
                contact_us.innerHTML = "Contact Us";
                contact_us_content.innerText = `Member-Secretary
            Bangladesh -Sweden Trust Fund (BSTF) Committee
            Economic Relations Division, Ministry of Finance
            Government of the People’s Republic of Bangladesh
            Block-16, Room-27, Sher-e-Bangla Nagar
            Dhaka-1207
            Phone-+880248117635, Fax-+88029180788
            E-mail-bstf@erd.gov.bd
            web-www.erd.gov.bd`;
            }

        }
    </script>

    {{-- ------------------------------- english to bangla script ------------------------------ --}}


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <script src="/about.js"></script>
</body>

</html>
