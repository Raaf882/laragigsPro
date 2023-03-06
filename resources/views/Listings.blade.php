@extends('layout')

@section('content')
@include('partials._hero')
@include('partials._search')

    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

        @unless(count($listings) == 0)
            @foreach ($listings as $listing)
                <x-listing-cards :Listing="$listing"  />
            @endforeach
        @else
            <p>NO Listings found</p>
        @endunless
    </div>
@endsection
