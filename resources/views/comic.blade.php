@extends('layouts/app')

@section('content')
    <div class="my_preview">
        <div class="container-lg">
            <div>
                <div class="my_poster2">
                    <img src="https://static.wikia.nocookie.net/marvel_dc/images/6/64/Batman_Three_Jokers_Collected.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="my_description">
        <div class="container-lg d-flex gap-3">
            <div>
                <h1>Batman: Three Jokers #1</h1>
                <p>Thirty years after Batman: The Killing Joke changed comics forever, Three Jokers reexamines the myth of who, or what, The Joker is and what is at the heart of his eternal battle with Batman. New York Times bestselling writer Geoff Johns and Jason Fabok, the writer/artist team that waged the “Darkseid War” in the pages of Justice League, reunite to tell the ultimate story of Batman and The Joker! After years of anticipation starting in DC Universe: Rebirth #1, the epic miniseries you’ve been waiting for is here: find out why there are three Jokers, and what that means for the Dark Knight and the Clown Prince of Crime. It’s a mystery unlike any Batman has ever faced!</p>
            </div>
            <div>
                <h5 class="text-uppercase text-secondary text-end">advertisement</h5>
                <div>
                    <img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="my_specs">
        <div class="container-lg ">
            <div class="d-flex gap-5 my_pb">
                <div class="w-50">
                    <div class="py-3 my_bb">
                        <h4>Talent</h4>
                    </div>
                    <div class="py-1 my_bb">
                        testo
                    </div>
                    <div class="py-1 my_bb">
                        testo
                    </div>
                </div>
                <div class="w-50">
                    <div class="py-3 my_bb">
                        <h4>Specs</h4>
                    </div>
                    <div class="py-1 my_bb">
                        testo
                    </div>
                    <div class="py-1 my_bb">
                        testo
                    </div>
                </div>
            </div>
        </div>
        <div class="my_shop">

        </div>
    </div>
@endsection