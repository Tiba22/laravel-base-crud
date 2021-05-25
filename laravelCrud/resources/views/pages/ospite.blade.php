@extends('layouts.main-layout')
@section('pageTitle')
  Dettagli Ospite
@endsection
@section('content')

  <main>
    <h1>
      Dettagli Ospite
    </h1>
    <table>
      <tr>
        <th>
          id
        </th>
        <th>
          Name
        </th>
        <th>
          Lastname
        </th>
        <th>
          Date of birth
        </th>
        <th>
          Document type
        </th>
        <th>
          Document number
        </th>
      </tr>
      <tr>
        <td>
          {{$ospite -> id}}
        </td>
        <td>
          {{$ospite -> name}}
        </td>
        <td>
          {{$ospite -> lastname}}
        </td>
        <td>
          {{$ospite -> date_of_birth}}
        </td>
        <td>
          {{$ospite -> document_type}}
        </td>
        <td>
          {{$ospite -> document_number}}
        </td>
      </tr>
    </table>
    <a class="back" href="{{route('home')}}">
      Back to home
    </a>
  </main>

@endsection
