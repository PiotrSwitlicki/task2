@extends('layouts.app')

@section('content')
@guest
Zaloguj się, aby mieć dostęp
@else
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit event</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('eventview.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('eventview.update', ['eventview' => $eventview->id]) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">           

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nazwa eventu:</strong>
                    <input type="text" name="event_name" class="form-control" placeholder="" value="{{ $eventview->event_name }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Data rozpoczęcia:</strong>
                    <input type="text" name="start_date" class="form-control" placeholder="" value="{{ $eventview->start_date }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Data zakończenia:</strong>
                    <input type="text" name="end_date" class="form-control" placeholder="" value="{{ $eventview->end_date }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Status eventu:</strong>
                    <input type="text" name="event_status" class="form-control" placeholder="" value="{{ $eventview->event_status }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Slug eventu:</strong>
                    <input type="text" name="event_slug" class="form-control" placeholder="" value="{{ $eventview->event_slug }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>

        </div>

    </form>
@endguest

@endsection

