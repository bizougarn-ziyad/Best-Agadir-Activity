<x-layout>
    <div class="pt-[107.05px] max-w-[1200px] mx-auto">
        <div class="containerAll md:flex md:justify-between md:px-5">
            <div class="container-description  flex flex-col justify-center md:justify-normal  md:mt-[50px] items-center ">
            <div class="w-full h-[400px] xl:h-[500px] flex flex-col justify-evenly xl:justify-between">
                <h1 class="text-center md:text-left font-bold px-1 text-[22px] xl:text-[55px] md:text-[30px] xl:w-[800px] md:w-[450px] lg:w-[500px]">Experience the <span class="text-orange-500 font-bold">real</span> Morocco, Right Here in Agadir!</h1>
                <p class="text-center md:text-left mt-6 text-[15px] px-3 xl:text-[22px] md:text-[16px] xl:w-[750px] md:w-[400px] lg:w-[450px]">Join us for an unforgettable journey through the vibrant culture, stunning landscapes, and rich history of Morocco, all from the comfort of Agadir.</p>
                <div class="flex justify-center md:justify-start mt-10 gap-1">
                    <div class="flex items-center px-5 gap-2">
                        <img src="{{ asset('images/star.png') }}" alt="Star-rating" class="w-[27px] xl:w-[35px]">
                        <div>
                            <p class="text-[13px] md:text-[15px] xl:text-[20px] font-bold">4.8<span class="text-[11px] text-gray-600 font-normal">/5</span></p>
                            <p class="text-[11px] md:text-[13px] xl:text-[18px] text-gray-600">Based on 1000+ reviews</p>
                        </div>
                    </div>
                    <div class="flex items-center px-4 gap-2">
                        <img src="{{ asset('images/price.png') }}" alt="price" class="w-[27px] xl:w-[40px]">
                        <div>
                            <p class="text-[13px] md:text-[15px] font-bold">Fair Prices</p>
                            <p class="text-[11px] md:text-[13px] xl:text-[18px] text-gray-600">No tourist markup</p>
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-center md:justify-start mt-15">
                    <button class="bg-orange-500 text-white px-6 py-2 sm:py-4 sm:px-7 rounded-[10px] hover:bg-orange-400 transition duration-300 cursor-pointer">Our Activities &#10230;</button>
                </div>
            </div>
        </div>

        <div class="container-activities flex flex-col justify-center lg:justify-normal md:mt-[30px] mx-auto">
            <div class="swiper mySwiper w-[320px] h-[500px] lg:w-[380px] xl:w-[450px] xl:h-[583px] pr-7 shadow-[0_1px_25px_rgba(0,0,0,0.1)] rounded-lg">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <p class="rounded-2xl w-10 h-5.2 text-center text-white  bg-orange-400 absolute right-4 top-2 z-100 text-[13px] xl:text-[17px] ">25€</p>
                        <img src="{{ asset('images/activity1.jpg') }} " alt="Activity 1" class="h-[213px] lg:w-full xl:h-[270px] lg:h-[240px]">
                        
                        <div class="mt-5 flex justify-center items-center gap-2">
                            <img src="{{ asset('images/secondstar.png') }}" alt="ratings" class="w-[15px] ">
                            <p class="text-[13px] xl:text-[17px]  font-bold m-0 p-0">4.7 <span class="text-gray-400 font-normal">(52 ratings)</span></p>
                        </div>
                        
                        <div class="flex flex-col px-4 mt-7 gap-2">
                            <p class="text-[13px] xl:text-[17px] font-bold">1h Sand Surf + Camel Ride + Moroccan Mint Tea + Dinner + Show .</p>
                            <p class="text-[13px] xl:text-[17px]  text-gray-600">Enjoy sand surfing, a camel ride, Moroccan mint tea, a tasty dinner, and a lively traditional show. All in one unforgettable experience.</p>
                        </div>
                        
                        <div class="flex justify-between items-center px-4 mt-5 gap-3">
                            <button class="bg-white text-black border border-gray-500 px-6 py-1 rounded-[20px] hover:bg-gray-200 transition duration-300 text-[13px] xl:text-[17px] w-[50%] cursor-pointer">Details</button>
                            <button class="bg-orange-500 text-white px-4 py-1 rounded-[20px] hover:bg-orange-400 transition duration-300 text-[13px] xl:text-[17px] cursor-pointer w-[50%]">Book Now</button>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <p class="rounded-2xl w-10 h-5.2 text-center text-white  bg-orange-400 absolute right-4 top-2 z-100 text-[13px] ">65€</p>      
                        <img src="{{ asset('images/activity3.jpg') }}" alt="Activity 3" class="h-[213px] lg:w-full xl:h-[270px] lg:h-[240px]">
                        
                        <div class="mt-5 flex justify-center items-center gap-2">
                            <img src="{{ asset('images/secondstar.png') }}" alt="ratings" class="w-[15px] ">
                            <p class="text-[13px] xl:text-[17px] font-bold m-0 p-0">4.9 <span class="text-gray-400 font-normal">(19 ratings)</span></p>
                        </div>
                        
                        <div class="flex flex-col px-4 mt-7 gap-2">
                            <p class="text-[13px] xl:text-[17px] font-bold">Buggy Adventure + 30min horse ride + Dinner + Crocodile park tour.</p>
                            <p class="text-[13px] xl:text-[17px] text-gray-600">Experience the thrill of driving a buggy through the stunning Moroccan desert. Enjoy a 30-minute horse ride, followed by a delicious dinner under the stars.</p>
                        </div>
                        
                        <div class="flex justify-between items-center px-4 mt-5 gap-3">
                            <button class="bg-white text-black border border-gray-500 px-6 py-1 rounded-[20px] hover:bg-orange-500 hover:text-white transition duration-300 text-[13px] xl:text-[17px] w-[50%] cursor-pointer">Details</button>
                            <button class="bg-orange-500 text-white px-4 py-1 rounded-[20px] hover:bg-orange-400 transition duration-300 text-[13px] xl:text-[17px] w-[50%] cursor-pointer">Book Now</button>
                        </div>
                    </div>
                    
                    <div class="swiper-slide">
                        <p class="rounded-2xl w-10 h-5.2 text-center text-white  bg-orange-400 absolute right-4 top-2 z-100 text-[13px]">45€</p>
                        <img src="{{ asset('images/activity2.jpg') }}" alt="Activity 2" class="h-[213px] lg:w-full xl:h-[270px] lg:h-[240px]">
                        <div class="mt-5 flex justify-center items-center gap-2">
                            <img src="{{ asset('images/secondstar.png') }}" alt="ratings" class="w-[15px] ">
                            <p class="text-[13px] xl:text-[17px] font-bold m-0 p-0">4.5 <span class="text-gray-400 font-normal">(27 ratings)</span></p>
                        </div>
                        
                        <div class="flex flex-col px-4 mt-7 gap-2">
                            <p class="text-[13px] xl:text-[17px] font-bold">Surf lessons with professional + Breakfast + Bus ride from your hotel.</p>
                            <p class="text-[13px] xl:text-[17px] text-gray-600">Join us for an unforgettable surfing experience in the beautiful Moroccan waves. Our professional instructors will guide you every step of the way.</p>
                        </div>
                        
                        <div class="flex justify-between items-center px-4 mt-5 gap-3">
                            <button class="bg-white text-black border border-gray-500 px-6 py-1 rounded-[20px] hover:bg-orange-500 hover:text-white transition duration-300 text-[13px] xl:text-[17px] w-[50%] cursor-pointer">Details</button>
                            <button class="bg-orange-500 text-white px-4 py-1 rounded-[20px] hover:bg-orange-400 transition duration-300 text-[13px] xl:text-[17px] w-[50%] cursor-pointer">Book Now</button>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next after:text-black"></div>
                <div class="swiper-button-prev after:text-black"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
        </div>
        
    </div>

</x-layout>
