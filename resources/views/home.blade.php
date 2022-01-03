@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                @guest
                   Zaloguj się, aby mieć dostęp
                 @else  
                 <a href="{{ url('/eventview') }}" class="btn btn-xs btn-info pull-right">Zobacz, dodaj, edytuj eventy</a>
                 @endguest
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}


                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
