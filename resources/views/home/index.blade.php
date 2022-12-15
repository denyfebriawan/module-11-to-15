@extends('templates.index')


@section('content')
    {{-- {{ dd($session) }} --}}

    <div class="card" style="width: 18rem;">

        <div class="card-body">
            <h5 class="card-title">{{ $nama }}</h5>
            {{-- <p class="card-text">{{$session['pesan']}}</p> --}}
            <a href="{{ url('get-pesan') }}" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
@endsection
