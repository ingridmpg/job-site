@extends('layout')

@section('content')
    <div>
        <h1>{{$heading}}</h1>

        @if(count($jobs) == 0)
        <h3>No Jobs for now, come back later...</h3>
        @endif
        
        @foreach($jobs as $job)
        <h2>
            <a href="/jobs/{{$job['id']}}">
                {{$job['title']}}
            </a>
        </h2>
        <p>
            {{$job['description']}}
        </p>
        @endforeach
        
    </div>
@endsection

