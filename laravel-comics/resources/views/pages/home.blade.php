@extends('layouts.app')

@section('page-title', 'Trains')


@section('main-content')
    <h3>
        sono la sezione main content
    </h3>
    <ul>
        @foreach ($trains as $train)
        <li>
            <p>
            {{ $train->Azienda }}, {{ $train->Stazione_di_arrivo }},
            {{ $train->Stazione_di_arrivo }},
            {{ $train->Orario_di_arrivo }},
            {{ $train->Orario_di_partenza }},
            {{ $train->Codice_Treno }},
            {{ $train->Numero_Carrozze }},
            {{ $train->orario}},
            {{ $train->Cancellato}},
            {{ $train->data}}
            </p>
        </li>
        @endforeach
    </ul>
@endsection
