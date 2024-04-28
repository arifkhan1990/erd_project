let message_title = document.querySelector("#message_title");
let board_member_1 = document.querySelector("#board_member_1");
let board_member_1_speech = document.querySelector("#board_member_1_speech");

let board_member_2 = document.querySelector("#board_member_2");
let board_member_2_speech = document.querySelector("#board_member_2_speech");

let bn_btn = document.querySelector("#bn_btn");

let id = 1;

function bn() {
    bn_btn.innerText = "English";

    id == 1 ? id = 0 : id = 1;

    if (id == 0) {
        message_title.innerText = "মাননীয় অর্থমন্ত্রীর বাণী";
        board_member_1.innerText = `আ হ ম মুস্তফা কামাল, এফসিএ, এমপি
            মাননীয় অর্থমন্ত্রী
            `;
        board_member_1_speech.innerText = `আন্তর্জাতিক শিক্ষার মাধ্যমে শিক্ষার্থীদের আন্তর্জাতিক সংস্কৃতি ও সভ্যতার সাথে যোগাযোগ ঘটে, তাদের অভিজ্ঞতা সমৃদ্ধ হয় এবং শিক্ষার্থীগণ সঠিকভাবে নিজেদের গড়ে তোলার সুযোগ পান। আমি আশা করি, বাংলাদেশ-সুইডেন ট্রাস্ট ফান্ড-এর ভ্রমণ অনুদান উচ্চশিক্ষার জন্য বিদেশে গমনকারী বাংলাদেশি শিক্ষার্থীদের উৎসাহিত করবে। উচ্চশিক্ষা লাভের পর জাতির পিতা বঙ্গবন্ধু শেখ মুজিবুর রহমান-এর স্বপ্নের সুখী সমৃদ্ধ সোনার বাংলা বিনির্মাণে প্রত্যেকে তাঁর অর্জিত জ্ঞান সক্রিয়ভাবে কাজে লাগাবেন, আমি এই আশাবাদ ব্যক্ত করছি।
জয় বাংলা, জয় বঙ্গবন্ধু
বাংলাদেশ চিরজীবী হোক।
`;
        board_member_2.innerText = `ফাতিমা ইয়াসমিন
সচিব, অর্থনৈতিক সম্পর্ক বিভাগ
`;
        board_member_2_speech.innerText = `একবিংশ শতাব্দীর সূচনা এবং চতুর্থ শিল্প বিপ্লব একদিকে যেমন নতুন প্রজন্মের জন্য খুলে দিয়েছে অমিত সম্ভাবনার দ্বার, তেমনি একই সাথে কঠিন হয়েছে দ্রুত পরিবর্তনশীল প্রযুক্তির প্রেক্ষাপটে বৈশ্বিক চ্যালেঞ্জ মোকাবেলা করে নিজেকে ভবিষ্যতের জন্য গড়ে তোলা। আমি আনন্দিত যে বাংলাদেশ-সুইডেন ট্রাস্ট ফান্ড বাংলাদেশের মেধাবী শিক্ষার্থীদের বিদেশে উচ্চ শিক্ষার ক্ষেত্রে সহায়তা প্রদানের মাধ্যমে আমাদের ভবিষ্যত প্রজন্মকে গড়ে তোলার কাজে ভূমিকা রাখতে পারছে। বিদেশে লব্ধ জ্ঞান ও অভিজ্ঞতা আমাদের শিক্ষার্থীদের পেশাগত উৎকর্ষ অর্জনে সহায়তা করবে এবং ভবিষ্যতের জন্য সঠিক দিকনির্দেশনা দেবে। আমার দৃঢ় বিশ্বাস বিশ্বায়নের হাত ধরে বাংলাদেশ উন্নয়নের ধারায় যে দুর্বার গতিতে এগিয়ে চলেছে, আমাদের ছাত্র-ছাত্রীরা তা আরও এগিয়ে নেবে এবং বিদেশে বাংলাদেশের ভাবমূর্তি উজ্জ্বল করতে কার্যকর ভূমিকা রাখবে।
`;


    } else {
        bn_btn.innerText = "বাংলা";

        message_title.innerText = "Message from Board Members";
        board_member_1.innerText = `A H M Mustafa Kamal, FCA, MP
Hon'ble Minister, Ministry of Finance
            `;

        board_member_1_speech.innerText = `The sphere of international education is a crossroad of progress and free-thinking that offers the students a unique opportunity to get acquainted with international cultures and civilizations. It also enables the students to prepare themselves to serve the motherland as well as the global community. I hope that the travel grant from the Bangladesh-Sweden Trust Fund will serve as a useful aid for the Bangladeshi students pursuing higher studies abroad. I urge upon everyone to dedicate their knowledge and efforts to build a ‘Sonar Bangla’, as envisaged by the Father of the Nation Bangabandhu Sheikh Mujibur Rahman, where our citizens will enjoy progress and prosperity.

Joy Bangla, Joy Bangabandhu
May Bangladesh Live Forever.`;

        board_member_2.innerText = `Fatima Yasmin
Secretary, Economic Relations Division
`;

        board_member_2_speech.innerText = `The turn of the century and the dawn of the fourth industrial revolution have opened immense opportunities for the young generation. At the same time, it is now far more challenging to survive in the competitive global markets because of the rapid changes and evolution of technology. I am happy that the Bangladesh-Sweden Trust Fund has been providing financial aid to our meritorious students to support their initiatives in pursuing higher studies abroad. The knowledge and experience that they will acquire abroad will guide them in enhancing professional aptitudes. I firmly believe that our young generation will play pivotal role to further brighten the image of Bangladesh and carry forward the vibrant development process that the country has been passing through while getting increasingly integrated with the global economy.`;

    }

}
