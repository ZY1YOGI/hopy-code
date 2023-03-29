<x-app-layout title="Home">

  <x-section name="home" class="relative flex border-b-4 max-md:flex-col border_gradient">
    <span class="absolute left-0 bottom-0 z-[-1]">
      <svg width="217" height="229" viewBox="0 0 217 229" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M-64 140.5C-64 62.904 -1.096 1.90666e-05 76.5 1.22829e-05C154.096 5.49924e-06 217 62.904 217 140.5C217 218.096 154.096 281 76.5 281C-1.09598 281 -64 218.096 -64 140.5Z" fill="url(#paint0_linear_1179_5)" />
        <defs>
          <linearGradient id="paint0_linear_1179_5" x1="76.5" y1="281" x2="76.5" y2="1.22829e-05" gradientUnits="userSpaceOnUse">
            <stop stop-color="#3056D3" stop-opacity="0.08" />
            <stop offset="1" stop-color="#C4C4C4" stop-opacity="0" />
          </linearGradient>
        </defs>
      </svg>
    </span>

    <div class="flex flex-col items-center justify-center w-full min-h-full max-md:order-2">
      <h3 class="m-5 font-mono text-3xl font-bold dark:text-white">Al-Jazira</h3>
      <p class="px-5 text-center dark:text-teal-100 max-md:px-1">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos
        expedita quia, architecto quaerat sapiente fugit
        Doloremque.
      </p>
      <div class="flex justify-center my-5 mt-3 space-x-5">
        <button type="button" class="px-5 py-2 text-teal-500 bg-gray-700 dark:hover:bg-transparent hover:bg-teal-900 dark:bg-white dark:text-teal-700 outline outline-2 outline-offset-4 rounded-3xl">Get Started</button>
        <button type="button" class="px-5 py-1 text-teal-500 dark:text-white hover:bg-teal-50 dark:hover:bg-teal-100 dark:hover:text-gray-900 transition-al outline outline-2 outline-offset-1 rounded-3xl">Watch Video</button>
      </div>
    </div>

    <div class="flex flex-col items-center justify-center w-full h-full">
      <h3 class="m-5 font-mono text-2xl font-bold dark:text-white">Al-Jazira</h3>

      <img src={{ Vite::asset('resources/image/logo.png') }} class="hero-img" />
      <p class="m-5 font-mono dark:text-teal-50">Sport IS AlWAYS FOR EVERYONE</p>
    </div>

  </x-section>

  <x-section name="clients">
    <div class="grid items-center grid-cols-6 max-sm:grid-cols-3 container mx-auto rounded-b-2xl bg-[#e5eaff] dark:bg-[#0b101d] border-b border-teal-600 overflow-hidden">
      @for($i = 1; $i < 7; $i++) <div class="text-center cursor-pointer" data-aos="fade-left">
        <img src={{ Vite::asset("resources/image/clients/client-$i.png") }} class="client-img" />
    </div>
    @endfor
    </div>
  </x-section>

  <x-section name="services">
    <x-slot:title>SPORTS</x-slot:title>
    <x-slot:description>We Hold Championships In Most Sports And We Are Always In Progress ( WALKING | RUNNING | SWIMMING | FITNESS )</x-slot:description>
    <div class="container mx-auto">
      <div class="mt-8 grid grid-cols-4 gap-10 max-lg:gap-3 max-sm:grid-cols-2 max-lg:grid-cols-3 max-lg:px-[3%]">

        <x-services-card title="Walking" id="walking" img="resources/image/1.png">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae a iste labore.
        </x-services-card>

        <x-services-card title="Running" id="running" img="resources/image/2.svg">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae a iste labore.
        </x-services-card>

        <x-services-card title="Swimming" id="swimming" img="resources/image/3.svg">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae a iste labore.
        </x-services-card>

        <x-services-card title="Fitness" id="fitness" img="resources/image/4.svg">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae a iste labore.
        </x-services-card>

      </div>
    </div>
  </x-section>

  <x-section name="events">
    <x-slot:title>EVENTS</x-slot:title>
    <x-slot:description>We Are Constantly Doing Events, Tournaments And Awards</x-slot:description>



    <swiper-container pagination="true" class="container px-1 pb-8 mx-auto" space-between="10">
      @for($i = 0; $i < 4; $i++)

        <swiper-slide class="px-3 transition-all duration-300 rounded-lg shadow cursor-grab shadow-teal-900 hover:shadow-lg hover:shadow-teal-700 hover:drop-shadow-xl">

          <div class="flex justify-between my-3">
            <h3 class="dark:text-white">Events: 2022 | 2023</h3>
            <h3 class="dark:text-white">Event Expir: 2023/3/29</h3>
          </div>

          <img class="rounded-lg max-h-[50vh] mx-auto shadow hover:shadow-lg hover:shadow-teal-900/50 transition-all ease-in-out duration-300 hover:rounded-xl hover:-translate-y-3" src="https://blog.myfitnesspal.com/wp-content/uploads/2019/06/8-Charity-Walking-Events-That-Give-Your-Steps-Extra-Meaning.jpg">

          <div class="flex items-center justify-between text-sm my-5 font-mono dark:text-white">
            <ul>
              <li class="dark:text-white">Date: <span class="font-semibold text-shadow">6/13</span></li>
              <li class="dark:text-white">Records: <span class="font-semibold text-shadow">982</span></li>
              <li class="dark:text-white">Average Age: <span class="font-semibold text-shadow">14:26</span></li>
            </ul>
            <ul>
              <li class="dark:text-white">Date Expir: <span class="font-semibold text-shadow">6/17</span></li>
              <li class="dark:text-white">Final Records: <span class="font-semibold text-shadow">3500</span></li>
              <li class="dark:text-white">Sponsored: <span class="font-semibold text-shadow">7</span></li>
            </ul>
          </div>

          <swiper-container class="flex items-center justify-center my-5 text-center" loop="true" autoplay="true" autoplay-delay="850">
            <swiper-slide class="px-3 py-1 text-sm font-semibold text-gray-600 bg-gray-200 rounded-full shadow dark:bg-gray-800 dark:text-teal-50 shadow-indigo-600">#Al-Jazira</swiper-slide>
            <swiper-slide class="px-3 py-1 text-sm font-semibold text-gray-600 bg-gray-200 rounded-full shadow dark:bg-gray-800 dark:text-teal-50 shadow-indigo-600">#Jazira Championships</swiper-slide>
            <swiper-slide class="px-3 py-1 text-sm font-semibold text-gray-600 bg-gray-200 rounded-full shadow dark:bg-gray-800 dark:text-teal-50 shadow-indigo-600">#Al-Jazira</swiper-slide>
          </swiper-container>

          <button class="w-full py-2 my-3 border border-indigo-700 rounded-xl dark:text-white text-shadow hover:bg-indigo-50">
            Registration
          </button>
        </swiper-slide>

      @endfor
    </swiper-container>



  </x-section>



  {{-- <x-section name="members">
    <div class="container mx-auto">
      <div class="text-center">
        <h1 class="text-3xl font-bold py-2 dark:text-white decoration-slice underline underline-offset-[5px] decoration-teal-700 tracking-widest cursor-pointer" data-aos="fade-up" data-aos-delay="200">
          MEMBERS
        </h1>
        <p class="text-gray-700 capitalize dark:text-gray-300" data-aos="fade-down">
          Team Members By Sport Also, You Can Also Find The Profile Of Each Player
        </p>
      </div>

    </div>

    <div class="my-5 slide-container swiper">
      <div class="slide-content" id="slide-2">
        <div class="card-wrapper swiper-wrapper">


          <div class="space-y-3 transition-all duration-300 shadow cursor-pointer swiper-slide rounded-3xl hover:-translate-y-8 hover:drop-shadow-xl hover:shadow-lg hover:shadow-teal-800 shadow-teal-700">
            <div class="image-content">
              <div class="card-image">
                <img src="https://scontent.fcai19-4.fna.fbcdn.net/v/t39.30808-6/312634594_937538920548035_4089581225912862516_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=09cbfe&_nc_eui2=AeETeQ07uj4_VS5Zm6ihGY41Lqhn2jUJlHUuqGfaNQmUdepcgsmt1B8AiBzhgEB3q0sWX9T3UOLL88otu9j22fqf&_nc_ohc=6qQQXI8on3AAX_EFKxW&_nc_ht=scontent.fcai19-4.fna&oh=00_AfD8GXQPxIE3Lr-nrbL3QFqYgNN_uAwfwiZJ8mdYA6NnOw&oe=64221FC4" alt="" class="card-img">
              </div>
            </div>

            <div class="px-3 card-content">
              <h2 class="text-xl font-bold text-shadow dark:text-white">Name: Youssef Amjad</h2>
              <h2 class="text-lg font-bold dark:text-gray-50">Age: 17</h2>
              <h2 class="text-lg font-bold dark:text-gray-50">Date of Join: 2018/4/19</h2>
              <p class="text-gray-800 dark:text-gray-100">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, expedita.
              </p>
              <button class="px-6 py-2 my-5 text-sm font-bold text-white transition bg-black dark:bg-white dark:text-gray-800 hover:bg-gray-800 dark:hover:bg-gray-300 rounded-xl">View Profile</button>
            </div>
          </div>

          <div class="space-y-3 transition-all duration-300 shadow cursor-pointer swiper-slide rounded-3xl hover:-translate-y-8 hover:drop-shadow-xl hover:shadow-lg hover:shadow-teal-800 shadow-teal-700">
            <div class="image-content">
              <div class="card-image">
                <img src="https://scontent-hbe1-1.xx.fbcdn.net/v/t39.30808-6/278585971_1349267745584306_3883382694868068589_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=174925&_nc_eui2=AeHPyqlGL-lLKGMGOzR2K8EOm9_LXyE-IO2b38tfIT4g7YkXxdcmXXG4tbuS792ObdI3DJJpGHvLhx37OZg3YEO5&_nc_ohc=ceUlyfJHfb4AX9QrSWg&_nc_ht=scontent-hbe1-1.xx&oh=00_AfCncUyZUS4YkR1QRjK1mLCLRshRzNLH_qZTAfaqIetchg&oe=64226BB9" alt="" class="card-img">
              </div>
            </div>

            <div class="px-3 card-content">
              <h2 class="text-xl font-bold text-shadow dark:text-white">Name: Ramadan</h2>
              <h2 class="text-lg font-bold dark:text-gray-50">Age: 18</h2>
              <h2 class="text-lg font-bold dark:text-gray-50">Date of Join: 2018/7/13</h2>
              <p class="text-gray-800 dark:text-gray-100">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, expedita.
              </p>
              <button class="px-6 py-2 my-5 text-sm font-bold text-white transition bg-black dark:bg-white dark:text-gray-800 hover:bg-gray-800 dark:hover:bg-gray-300 rounded-xl">View Profile</button>
            </div>
          </div>

          <div class="space-y-3 transition-all duration-300 shadow cursor-pointer swiper-slide rounded-3xl hover:-translate-y-8 hover:drop-shadow-xl hover:shadow-lg hover:shadow-teal-800 shadow-teal-700">
            <div class="image-content">
              <div class="card-image">
                <img src="https://scontent-hbe1-1.xx.fbcdn.net/v/t39.30808-6/274115256_966646744258740_7300237964114379081_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=174925&_nc_eui2=AeE3HMo6miE4_ZncvifouDYimy2PHbuK3SabLY8du4rdJrueQ6f1QX24kAGwBldKntCg_VnNkX6YiLesO2N-8UAD&_nc_ohc=Rqrum7QKR4QAX99eAI-&_nc_ht=scontent-hbe1-1.xx&oh=00_AfAGYW7LVg_78BOfs421Z-3EEiCNqO9FcketxgysYphqYQ&oe=64241375" alt="" class="card-img">
              </div>
            </div>

            <div class="px-3 card-content">
              <h2 class="text-xl font-bold text-shadow dark:text-white">Name: Youssef Ali</h2>
              <h2 class="text-lg font-bold dark:text-gray-50">Age: 17</h2>
              <h2 class="text-lg font-bold dark:text-gray-50">Date of Join: 2020/9/27</h2>
              <p class="text-gray-800 dark:text-gray-100">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, expedita.
              </p>
              <button class="px-6 py-2 my-5 text-sm font-bold text-white transition bg-black dark:bg-white dark:text-gray-800 hover:bg-gray-800 dark:hover:bg-gray-300 rounded-xl">View Profile</button>
            </div>
          </div>

          <div class="space-y-3 transition-all duration-300 shadow cursor-pointer swiper-slide rounded-3xl hover:-translate-y-8 hover:drop-shadow-xl hover:shadow-lg hover:shadow-teal-800 shadow-teal-700">
            <div class="image-content">
              <div class="card-image">
                <img src="https://scontent-hbe1-1.xx.fbcdn.net/v/t1.6435-9/206058860_1179363045917545_3680445484697069179_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=174925&_nc_eui2=AeGRxayn3a_5kTGRL7ko0NPjMtWC9LXZF8Uy1YL0tdkXxYctjrw1WWUi2M37COpKO51yhchau8leb8Jd3g15pu0p&_nc_ohc=O0uR-82laxoAX-YWajD&_nc_ht=scontent-hbe1-1.xx&oh=00_AfDRvBwCMls7qjVYgt6y2XJUc25M3VxM-4rLhaAONFSYiQ&oe=6445863B" alt="" class="card-img">
              </div>
            </div>

            <div class="px-3 card-content">
              <h2 class="text-xl font-bold text-shadow dark:text-white">Name: Mahmoud Nasser</h2>
              <h2 class="text-lg font-bold dark:text-gray-50">Age: 19</h2>
              <h2 class="text-lg font-bold dark:text-gray-50">Date of Join: 2021/2/9</h2>
              <p class="text-gray-800 dark:text-gray-100">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, expedita.
              </p>
              <button class="px-6 py-2 my-5 text-sm font-bold text-white transition bg-black dark:bg-white dark:text-gray-800 hover:bg-gray-800 dark:hover:bg-gray-300 rounded-xl">View Profile</button>
            </div>
          </div>

          <div class="space-y-3 transition-all duration-300 shadow cursor-pointer swiper-slide rounded-3xl hover:-translate-y-8 hover:drop-shadow-xl hover:shadow-lg hover:shadow-teal-800 shadow-teal-700">
            <div class="image-content">
              <div class="card-image">
                <img src="https://scontent.fcai19-4.fna.fbcdn.net/v/t39.30808-6/334217714_887369302317092_2480428421081419036_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=09cbfe&_nc_eui2=AeEHPdppvbiokVgFnn0_35iN9_pK6kCLEd_3-krqQIsR3zc_SJuIcgAS0ilTX8f86N9b2iAeee1a960ln5o-00wG&_nc_ohc=ACmRiMBJNQgAX9o_R6k&_nc_ht=scontent.fcai19-4.fna&oh=00_AfAFNz0wrnrS2i5vcE88sa3nSet3A_YCoEuU2t49pSHmBA&oe=6422899C" alt="" class="card-img">
              </div>
            </div>

            <div class="px-3 card-content">
              <h2 class="text-xl font-bold text-shadow dark:text-white">Name: Nour El Deen</h2>
              <h2 class="text-lg font-bold dark:text-gray-50">Age: 15</h2>
              <h2 class="text-lg font-bold dark:text-gray-50">Date of Join: 2020/9/27</h2>
              <p class="text-gray-800 dark:text-gray-100">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, expedita.
              </p>
              <button class="px-6 py-2 my-5 text-sm font-bold text-white transition bg-black dark:bg-white dark:text-gray-800 hover:bg-gray-800 dark:hover:bg-gray-300 rounded-xl">View Profile</button>
            </div>
          </div>

          <div class="space-y-3 transition-all duration-300 shadow cursor-pointer swiper-slide rounded-3xl hover:-translate-y-8 hover:drop-shadow-xl hover:shadow-lg hover:shadow-teal-800 shadow-teal-700">
            <div class="image-content">
              <div class="card-image">
                <img src="https://scontent.fcai19-4.fna.fbcdn.net/v/t39.30808-6/336179457_535779202041194_7029809670843135935_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=09cbfe&_nc_eui2=AeEl_oesdkKEToEkXhncJTgdNak5r5K1SFg1qTmvkrVIWGR8o951ghCFt3Qa3pYHOUtuPcvm3pUUYoJy16IM2Nu6&_nc_ohc=_smeiRQx9kwAX_5ltPF&_nc_ht=scontent.fcai19-4.fna&oh=00_AfCqnrDpmHEIOiE1odxpkpDOl6e43_lYPeXTpfuNpQdZSA&oe=64228E58" alt="" class="card-img">
              </div>
            </div>

            <div class="px-3 card-content">
              <h2 class="text-xl font-bold text-shadow dark:text-white">Name: Amer Nagi</h2>
              <h2 class="text-lg font-bold dark:text-gray-50">Age: 23</h2>
              <h2 class="text-lg font-bold dark:text-gray-50">Date of Join: 2016/7/28</h2>
              <p class="text-gray-800 dark:text-gray-100">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, expedita.
              </p>
              <button class="px-6 py-2 my-5 text-sm font-bold text-white transition bg-black dark:bg-white dark:text-gray-800 hover:bg-gray-800 dark:hover:bg-gray-300 rounded-xl">View Profile</button>
            </div>
          </div>

          <div class="space-y-3 transition-all duration-300 shadow cursor-pointer swiper-slide rounded-3xl hover:-translate-y-8 hover:drop-shadow-xl hover:shadow-lg hover:shadow-teal-800 shadow-teal-700">
            <div class="image-content">
              <div class="card-image">
                <img src="https://scontent.fcai19-4.fna.fbcdn.net/v/t1.6435-9/147439704_266192558265192_1120734632100799361_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=09cbfe&_nc_eui2=AeEaCYqZjmtlYIexPvqFZvW8Vmf0Bh2Uw7tWZ_QGHZTDu-bdthmslhqAmphfmJizDAX2dlaNMAD2Py_gysQ0sDs8&_nc_ohc=7XFqXKQao9UAX9nH-2l&_nc_ht=scontent.fcai19-4.fna&oh=00_AfADqW8PqJNbNM2y8_1RXL4TbZxs-9Ud5qiIF4rkeir3SQ&oe=6445B37D" alt="" class="card-img">
              </div>
            </div>

            <div class="px-3 card-content">
              <h2 class="text-xl font-bold text-shadow dark:text-white">Name: Mahmoud Aref</h2>
              <h2 class="text-lg font-bold dark:text-gray-50">Age: 01</h2>
              <h2 class="text-lg font-bold dark:text-gray-50">Date of Join: 2021/8/17</h2>
              <p class="text-gray-800 dark:text-gray-100">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, expedita.
              </p>
              <button class="px-6 py-2 my-5 text-sm font-bold text-white transition bg-black dark:bg-white dark:text-gray-800 hover:bg-gray-800 dark:hover:bg-gray-300 rounded-xl">View Profile</button>
            </div>
          </div>


        </div>

        <div class="swiper-button-next swiper-navBtn"></div>
        <div class="swiper-button-prev swiper-navBtn"></div>
        <div class="swiper-pagination"></div>
      </div>
    </div>

  </x-section> --}}



</x-app-layout>

{{-- <div class="overflow-hidden transition-all duration-300 rounded-lg swiper-slide hover:-translate-y-8 hover:drop-shadow-xl">
  <h3 class="py-2">Event 2023/3/29</h3>
  <img class="rounded-md" src="https://www.topendsports.com/sport/athletics/images/steeplechase2-freeimages.jpg" alt="">
  <div class="space-y-1 dark:text-white">
    <h4>Event Time: 7:30</h4>
    <h4>Number of Recordse: 982</h4>
    <h4>Average Age: 14:26</h4>
    <button class="px-6 py-2 my-5 text-sm font-bold text-white transition bg-black dark:bg-white dark:text-gray-800 hover:bg-gray-800 dark:hover:bg-gray-300 rounded-xl">Registration</button>
  </div>
</div>

<div class="overflow-hidden transition-all duration-300 rounded-lg swiper-slide hover:-translate-y-8 hover:drop-shadow-xl">
  <h3 class="py-2">Event 2023/3/29</h3>
  <img class="rounded-md" src="https://scontent.fcai19-4.fna.fbcdn.net/v/t39.30808-6/336379518_2476263985859764_1384411115719461428_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeEBS3Jh-cMDAyJeZChumhXrxjzKTLrXHfrGPMpMutcd-mUUnmFcP1ES61FJdalkreCdvetU-46rzhg9w10AJU45&_nc_ohc=BwU1dsxZteYAX_u18qQ&_nc_ht=scontent.fcai19-4.fna&oh=00_AfC-Lxt7i1Zif-e56UZH5wJuOT1IeujeKPsIEEFL6Vxf6Q&oe=64229836" alt="">
  <div class="space-y-1 dark:text-white">
    <h4>Event Time: 7:30</h4>
    <h4>Number of Recordse: 982</h4>
    <h4>Average Age: 14:26</h4>
    <button class="px-6 py-2 my-5 text-sm font-bold text-white transition bg-black dark:bg-white dark:text-gray-800 hover:bg-gray-800 dark:hover:bg-gray-300 rounded-xl">Registration</button>
  </div>
</div>

<div class="overflow-hidden transition-all duration-300 rounded-lg swiper-slide hover:-translate-y-8 hover:drop-shadow-xl">
  <h3 class="py-2">Event 2023/3/29</h3>
  <img class="rounded-md" src="https://swimming.events/assets/macclesfieldswimming-85c9baf4116f9d8e981bd18687710abf0a62b25d68f2c652d9adf45ecd851a43.jpg" alt="">
  <div class="space-y-1 dark:text-white">
    <h4>Event Time: 7:30</h4>
    <h4>Number of Recordse: 982</h4>
    <h4>Average Age: 14:26</h4>
    <button class="px-6 py-2 my-5 text-sm font-bold text-white transition bg-black dark:bg-white dark:text-gray-800 hover:bg-gray-800 dark:hover:bg-gray-300 rounded-xl">Registration</button>
  </div>
</div>

<div class="overflow-hidden transition-all duration-300 rounded-lg swiper-slide hover:-translate-y-8 hover:drop-shadow-xl">
  <h3 class="py-2">Event 2023/3/29</h3>
  <img class="rounded-md" src="https://scontent.fcai19-4.fna.fbcdn.net/v/t39.30808-6/335048940_884592169419603_7534709806163262050_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeFf91OBuYJE8_YsuQFGbKV3jnpXnpsgMQ6OeleemyAxDovUL5RFsExSaW7a8i0LJG36UrytKzsIWZcpkXR7Njrk&_nc_ohc=JaMKIqhOGz8AX9zK9Np&_nc_ht=scontent.fcai19-4.fna&oh=00_AfAkXqWjxO2MHaJQVUAq2UwwZrJD94fL0iDdadQoL7btig&oe=6422D7C1" alt="">
  <div class="space-y-1 dark:text-white">
    <h4>Event Time: 7:30</h4>
    <h4>Number of Recordse: 982</h4>
    <h4>Average Age: 14:26</h4>
    <button class="px-6 py-2 my-5 text-sm font-bold text-white transition bg-black dark:bg-white dark:text-gray-800 hover:bg-gray-800 dark:hover:bg-gray-300 rounded-xl">Registration</button>
  </div>
</div> --}}
