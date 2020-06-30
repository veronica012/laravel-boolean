@extends('layouts.app')

@section('content')
    <div class="jumbotron-container">
        <div class="row">
            <div class="jumbotron">
                <div class="left">
                    <h1>Diventa
                        <strong>sviluppatore web</strong>
                    </h1>
                    <h2>Trasformiamo la tua passione in una carriera. Se non trovi lavoro, ti rimborsiamo.</h2>
                    <p>
                        <ul>
                            <li class="paragraph">
                                <strong>6 mesi </strong>
                                di corso intensivo online in diretta</li>
                            <li class="paragraph">
                                <strong>Nessuna competenza </strong>
                                di programmazione richiesta</li>
                            <li class="paragraph">Siamo certi del tuo successo, altrimenti
                                <strong> ti rimborsiamo</strong></li>
                        </ul>
                    </p>
                </div>
                <div class="right">
                    <img src="{{ asset('images/pc-black-gif.gif') }}" alt="black pc" id="jumbo-img">
                </div>

            </div>
        </div>
    </div>
@endsection

@section('page-title', 'Homepage')
