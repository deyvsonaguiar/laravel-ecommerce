@extends('layout')

@section('title', 'Thank You')

@section('extra-css')

@endsection

@section('body-class', 'sticky-footer')

@section('content')

    <div class="container">
        <div class="thank-you-section">
            <h1>Obrigado pela sua <br>compra!</h1>
            <p>Uma confirmação foi enviada para o seu e-mail.</p>
            <div class="spacer"></div>
            <div>
                <a href="{{ url('/') }}" class="button">Home Page</a>
            </div>
        </div>
    </div>

@endsection
