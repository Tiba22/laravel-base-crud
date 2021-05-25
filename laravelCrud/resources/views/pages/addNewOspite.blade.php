@extends('layouts.main-layout')
@section('pageTitle')
  Aggiungi Ospite
@endsection
@section('content')

  <main>
    <h1>
      Aggiungi un ospite
    </h1>

    <form method="POST" action="{{route('store')}}">

      @csrf
      @method('POST')
      <div>
        <div>
          <label for="name">
            Nome
          </label>
        </div>
        <input type="text" name="name">
      </div>
      <div>
        <div>
          <label for="lastname">
            Cognome
          </label>
        </div>
        <input type="text" name="lastname">
      </div>
      <div>
        <div>
          <label for="dateBirth">
            Data di nascita
          </label>
        </div>
        <input type="date" name="dateBirth">
      </div>
      <div>
        <div>
          <label for="documentType">
            Tipo di documento
          </label>
        </div>
        <input type="text" name="documentType">
      </div>
      <div>
        <div>
          <label for="documentNumber">
            Numero di documento
          </label>
        </div>
        <input type="text" name="documentNumber">
      </div>
      <div>
        <input type="submit">
      </div>
    </form>
    <a class="back" href="{{route('home')}}">
      Back to home
    </a>
  </main>

@endsection
