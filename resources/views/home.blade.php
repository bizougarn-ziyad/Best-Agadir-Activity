<x-layout>
    <main>
    <div class="container-description h-[calc(100dvh-107px)]">
        <div class="w-full h-auto flex flex-col justify-center mt-20">
        <h1 class="text-center font-bold px-3 text-[22px]">Experience the <span class="text-orange-500 font-bold">real</span> Morocco, Right Here in Agadir!</h1>
        <p class="text-center mt-6 text-[15px] px-3">Join us for an unforgettable journey through the vibrant culture, stunning landscapes, and rich history of Morocco, all from the comfort of Agadir.</p>
        <div class="flex justify-center mt-10 gap-1">
            <div class="flex items-center px-5 gap-2">
                <img src="{{ asset('images/star.png') }}" alt="Star-rating" class="w-[27px]">
                <div>
                    <p class="text-[13px] font-bold">4.8<span class="text-[11px] text-gray-600 font-normal">/5</span></p>
                    <p class="text-[11px] text-gray-600">Based on 1000+ reviews</p>
                </div>
            </div>
            <div class="flex items-center px-4 gap-2">
                <img src="{{ asset('images/price.png') }}" alt="price" class="w-[27px]">
                <div>
                    <p class="text-[13px] font-bold">Fair Prices</p>
                    <p class="text-[11px] text-gray-600">No tourist markup</p>
                </div>
            </div>
        </div>
        <div class="flex items-center justify-center mt-15">
            <button class="bg-orange-500 text-white px-6 py-2 rounded-[20px] hover:bg-orange-400 transition duration-300">Our Activities &#10230;</button>
        </div>
        </div>
    </div>

    <div class="container-activities h-[calc(100dvh-72px)] w-[320px] mx-auto">
        <h2 class="text-center font-bold text-[22px] mb-7 text-orange-500">Best selling activities</h2>
        <div class="swiper mySwiper w-[320px] h-[500px] shadow-[0_1px_25px_rgba(0,0,0,0.1)] rounded-lg">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <p class="rounded-2xl w-10 h-5.2 text-center text-white  bg-orange-400 absolute right-4 top-2 z-100 text-[13px]">25€</p>
                    <img src="{{ asset('images/activity1.jpg') }} " alt="Activity 1" class="h-[213px]">
                    
                    <div class="mt-5 flex justify-center items-center gap-2">
                        <img src="{{ asset('images/secondstar.png') }}" alt="ratings" class="w-[15px] ">
                        <p class="text-[13px] font-bold m-0 p-0">4.7 <span class="text-gray-400 font-normal">(52 ratings)</span></p>
                    </div>
                    
                    <div class="flex flex-col px-4 mt-7 gap-2">
                        <p class="text-[13px] font-bold">1h Sand Surf + Camel Ride + Moroccan Mint Tea + Dinner + Show .</p>
                        <p class="text-[13px] text-gray-600">Enjoy sand surfing, a camel ride, Moroccan mint tea, a tasty dinner, and a lively traditional show. All in one unforgettable experience.</p>
                    </div>
                    
                    <div class="flex justify-between items-center px-4 mt-5 gap-3">
                        <button class="bg-white text-black border border-gray-500 px-6 py-1 rounded-[20px] hover:bg-orange-500 hover:text-white transition duration-300 text-[13px] w-[50%]">Details</button>
                        <button class="bg-orange-500 text-white px-4 py-1 rounded-[20px] hover:bg-orange-400 transition duration-300 text-[13px] w-[50%]">Book Now</button>
                    </div>
                </div>
                <div class="swiper-slide">
                    <p class="rounded-2xl w-10 h-5.2 text-center text-white  bg-orange-400 absolute right-4 top-2 z-100 text-[13px]">65€</p>      
                    <img src="{{ asset('images/activity3.jpg') }}" alt="Activity 3" class="h-[213px]">
                    
                    <div class="mt-5 flex justify-center items-center gap-2">
                        <img src="{{ asset('images/secondstar.png') }}" alt="ratings" class="w-[15px] ">
                        <p class="text-[13px] font-bold m-0 p-0">4.9 <span class="text-gray-400 font-normal">(19 ratings)</span></p>
                    </div>
                    
                    <div class="flex flex-col px-4 mt-7 gap-2">
                        <p class="text-[13px] font-bold">Buggy Adventure + 30min horse ride + Dinner.</p>
                        <p class="text-[13px] text-gray-600">Experience the thrill of driving a buggy through the stunning Moroccan desert. Enjoy a 30-minute horse ride, followed by a delicious dinner under the stars.</p>
                    </div>
                    
                    <div class="flex justify-between items-center px-4 mt-5 gap-3">
                        <button class="bg-white text-black border border-gray-500 px-6 py-1 rounded-[20px] hover:bg-orange-500 hover:text-white transition duration-300 text-[13px] w-[50%]">Details</button>
                        <button class="bg-orange-500 text-white px-4 py-1 rounded-[20px] hover:bg-orange-400 transition duration-300 text-[13px] w-[50%]">Book Now</button>
                    </div>
                </div>
                
                <div class="swiper-slide">
                    <p class="rounded-2xl w-10 h-5.2 text-center text-white  bg-orange-400 absolute right-4 top-2 z-100 text-[13px]">45€</p>
                    <img src="{{ asset('images/activity2.jpg') }}" alt="Activity 2" class="h-[213px]">
                    <div class="mt-5 flex justify-center items-center gap-2">
                        <img src="{{ asset('images/secondstar.png') }}" alt="ratings" class="w-[15px] ">
                        <p class="text-[13px] font-bold m-0 p-0">4.5 <span class="text-gray-400 font-normal">(27 ratings)</span></p>
                    </div>
                    
                    <div class="flex flex-col px-4 mt-7 gap-2">
                        <p class="text-[13px] font-bold">Surf lessons with professional + Breakfast + Bus ride from your hotel.</p>
                        <p class="text-[13px] text-gray-600">Join us for an unforgettable surfing experience in the beautiful Moroccan waves. Our professional instructors will guide you every step of the way.</p>
                    </div>
                    
                    <div class="flex justify-between items-center px-4 mt-5 gap-3">
                        <button class="bg-white text-black border border-gray-500 px-6 py-1 rounded-[20px] hover:bg-orange-500 hover:text-white transition duration-300 text-[13px] w-[50%]">Details</button>
                        <button class="bg-orange-500 text-white px-4 py-1 rounded-[20px] hover:bg-orange-400 transition duration-300 text-[13px] w-[50%]">Book Now</button>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next after:text-black"></div>
            <div class="swiper-button-prev after:text-black"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</main>

</x-layout>
