<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
    @section('content')
        <div class="case-study-gallery">
            @foreach($projets as $projet)
                <div class="case-study col-3" style="background-image: url('{{$projet->image}}')">
                    <figure>
{{--                        <img class="case-study__img" src="{{ $projet->image }}" alt="" />--}}
                    </figure>
                    <div class="case-study__overlay">
                        <h2 class="case-study__title">{{ $projet->titre }}</h2>
                        <a class="case-study__link" href="#">Découvrir</a>
                    </div>
                </div>
{{--                <div class="card 1">--}}
{{--                    <div class="card_image"> <img src="{{$projet->image}}" /> </div>--}}
{{--                    <div class="card_title title-white">--}}
{{--                        <p>{{$projet->titre}}</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
            @endforeach
        </div>
    @endsection
</x-app-layout>
