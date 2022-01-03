@extends('layouts.app')

@section('content')

@guest
Zaloguj się, aby mieć dostęp
@else
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2></h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('eventview.create') }}" title="Utwórz fakturę"> <i class="fas fa-plus-circle"></i> Utwórz event
                    </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>id</th>
            <th>Nazwa eventu</th>
            <th>Data rozpoczęcia</th>
            <th>Data zakończenia</th>
            <th>Status eventu</th>
            <th>Slug eventu</th>
            <th>Organizator eventu</th>
            <th width="280px">Funkcje</th>
        </tr>
        @foreach ($events as $event)
            <tr>
                <td>{{ $event->id }}</td>
                <td>{{ $event->event_name }}</td>
                <td>{{ $event->start_date }}</td>
                <td>{{ $event->end_date }}</td>
                <td>{{ $event->event_status }}</td>
                <td>{{ $event->event_slug }}</td>
                <td>{{ $event->event_organizer }}</td>        
                <td>
                    <form action="{{ route('eventview.destroy', $event->id) }}" method="POST">

    

                        <a href="{{ route('eventview.edit', $event->id) }}" >
                            <i class="fas fa-edit  fa-lg"></i>Edytuj

                        </a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                            <i class="fas fa-trash fa-lg text-danger"></i>Usuń

                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {{ $events->links('pagination::bootstrap-4') }}
@endguest
@endsection