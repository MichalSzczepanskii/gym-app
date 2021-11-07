@extends('layouts.default')

@section('content')
    <div id="welcome" class="background-text h-2/4 md:h-2/5 lg:h-4/5 flex flex-col justify-center gap-y-9 items-center">
        <div class="text-center">
            <h2 class="font-bold text-white text-5xl md:text-6xl lg:text-7xl">{{__('welcome.welcome-part1')}}<br/> {{__('welcome.welcome-part2')}}</h2>
        </div>
        <a href="#" class="bg-purple-600 text-white block px-8 py-4 rounded-full text-lg md:text-xl
        lg:px-10 lg:py-6 border-2 border-transparent hover:border-purple-700 hover:bg-white hover:text-purple-700">
            {{__('welcome.see-benefits')}}
        </a>
    </div>
    <div class="my-7 lg:flex lg:flex-row lg:justify-center lg:items-center lg:my-32">
        <div class="lg:w-1/2">
            <img src="{{asset('img/welcome2.jpg')}}" class="m-auto w-4/5 md:w-3/5 lg:w-3/5" alt="workout">
        </div>
        <div class="px-8 md:flex md:flex-col md:items-center lg:w-2/5 lg:items-start">
            <h2 class="font-bold text-purple-600 text-5xl text-center md:text-left my-5">{{__('welcome.meet-your-body')}}</h2>
            <p class="text-justify leading-loose text-lg md:w-3/4">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eget lectus urna. Nulla magna tortor, bibendum in molestie sed, gravida nec felis. Sed id egestasegestas risus, ut imperdiet augue.
            </p>
            <a href="#" class="w-full block py-4 text-purple-600 border-2 border-purple-600 rounded-full text-center font-bold mt-5 md:w-2/4
            hover:border-transparent hover:text-white hover:bg-purple-700">
                {{__('welcome.view-faq')}}
            </a>
        </div>
    </div>

    <div id="motivation" class="my-7 background-text h-3/5 md:h-2/4 lg:h-4/5 flex flex-col justify-center items-center px-8">
        <div class="text-center md:flex md:flex-col items-center">
            <h2 class="font-bold text-white text-5xl md:w-3/4 lg:w-full lg:text-6xl">{{__('welcome.become-more.title')}}</h2>
            <p class="text-white text-lg leading-loose font-medium md:w-3/4 lg:w-3/5">{{__('welcome.become-more.description')}}</p>
        </div>
        <a href="#" class="w-full block py-4 text-white bg-purple-600 rounded-full text-center font-medium mt-5 md:w-2/4 lg:w-1/6
        border-2 border-transparent hover:border-purple-700 hover:bg-white hover:text-purple-700">
            {{__('welcome.become-more.button')}}
        </a>
    </div>

    <div class="my-7 lg:flex lg:flex-row-reverse lg:justify-center lg:items-center lg:my-32">
        <div class="lg:w-1/2">
            <img src="{{asset('img/welcome4.jpg')}}" class="m-auto w-4/5 md:w-3/5 lg:w-4/5" alt="workout">
        </div>
        <div class="px-8 md:flex md:flex-col md:items-center lg:w-2/6 lg:items-start">
            <h2 class="font-bold text-purple-600 text-5xl text-center md:text-left my-5">{{__('welcome.facilities')}}</h2>
            <p class="text-justify leading-loose text-lg md:w-5/6">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eget lectus urna. Nulla magna tortor, bibendum in molestie sed, gravida nec felis. Sed id egestasegestas risus, ut imperdiet augue.
            </p>
            <a href="#" class="w-full block py-4 text-purple-600 border-2 border-purple-600 rounded-full text-center font-bold mt-5 md:w-2/4
            hover:border-transparent hover:text-white hover:bg-purple-700">
                {{__('welcome.learn-more')}}
            </a>
        </div>
    </div>

    <div class="mt-20 px-8 pb-16 bg-gradient-to-t from-purple-200 lg:mt-44">
        <div>
            <h2 class="text-3xl font-semibold text-gray-700 text-center lg:text-5xl">{{__('welcome.reviews.title1')}}<br/>{{__('welcome.reviews.title2')}}</h2>
            <p class="text-gray-700 text-center lg:text-2xl lg:py-2">{{__('welcome.reviews.subtitle')}}</p>
        </div>
        <div class="md:flex md:flex-wrap md:gap-x-5 md:justify-center">
            <div class="bg-white px-8 py-7 rounded-lg shadow-lg my-6 md:w-80 md:flex-shrink-0 lg:w-96">
                <h2 class="text-purple-600 text-3xl font-semibold text-center">17kg lost!</h2>
                <div class="flex pt-4">
                    <p class="font-bold text-6xl text-purple-300 pr-2" style="font-family: Times New Roman, serif">&lsquo;&lsquo;</p>
                    <p class="text-justify py-5 leading-7 pr-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eget lectus urna. Nulla magna tortor, bibendum in molestie sed, gravida nec felis. Sed id egestasegestas risu.</p>
                </div>
                <div class="flex justify-center items-center gap-x-4">
                    <img src="{{asset('img/person1.jpg')}}" class="w-14 h-14 rounded-full" alt="Person">
                    <span class="font-semibold text-gray-700">James John</span>
                </div>
            </div>
            <div class="bg-white px-8 py-7 rounded-lg shadow-lg my-6 md:w-80 md:flex-shrink-0 lg:w-96">
                <h2 class="text-purple-600 text-3xl font-semibold text-center">8kg lost!</h2>
                <div class="flex pt-4">
                    <p class="font-bold text-6xl text-purple-300 pr-2" style="font-family: Times New Roman, serif">&lsquo;&lsquo;</p>
                    <p class="text-justify py-5 leading-7 pr-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eget lectus urna. Nulla magna tortor, bibendum in molestie sed, gravida nec felis. Sed id egestasegestas risu.</p>
                </div>
                <div class="flex justify-center items-center gap-x-4">
                    <img src="{{asset('img/person2.jpg')}}" class="w-14 h-14 rounded-full" alt="Person">
                    <span class="font-semibold text-gray-700">Mary Patricia</span>
                </div>
            </div>
            <div class="bg-white px-8 py-7 rounded-lg shadow-lg my-6 md:w-80 md:flex-shrink-0 lg:w-96">
                <h2 class="text-purple-600 text-3xl font-semibold text-center">43kg lost!</h2>
                <div class="flex pt-4">
                    <p class="font-bold text-6xl text-purple-300 pr-2" style="font-family: Times New Roman, serif">&lsquo;&lsquo;</p>
                    <p class="text-justify py-5 leading-7 pr-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eget lectus urna. Nulla magna tortor, bibendum in molestie sed, gravida nec felis. Sed id egestasegestas risu.</p>
                </div>
                <div class="flex justify-center items-center gap-x-4">
                    <img src="{{asset('img/person3.jpg')}}" class="w-14 h-14 rounded-full" alt="Person">
                    <span class="font-semibold text-gray-700">Robert Micheal</span>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-gray-200 py-10 text-center">
        <h2 class="font-bold text-purple-700 text-5xl pt-7">{{__('welcome.social')}}</h2>
        <div class="flex items-center justify-center gap-x-7 py-8 lg:gap-x-24">
            <a href="#">
                <span class="w-24 block h-24 rounded-full bg-white text-purple-700 flex justify-center
                hover:bg-purple-50 border-2 border-transparent hover:border-purple-700">
                    <img src="{{asset('img/facebook.svg')}}" width="34%" alt="facebook" class="mainColorSVG">
                </span>
            </a>
            <a href="#">
                <span class="w-24 block h-24 rounded-full bg-white text-purple-700 flex justify-center
                hover:bg-purple-50 border-2 border-transparent hover:border-purple-700">
                    <img src="{{asset('img/youtube.svg')}}" width="34%" alt="youtube" class="mainColorSVG">
                </span>
            </a>
            <a href="#">
                <span class="w-24 block h-24 rounded-full bg-white text-purple-700 flex justify-center
                hover:bg-purple-50 border-2 border-transparent hover:border-purple-700">
                    <img src="{{asset('img/instagram.svg')}}" width="34%" alt="instagram" class="mainColorSVG">
                </span>
            </a>
        </div>
    </div>
@endsection