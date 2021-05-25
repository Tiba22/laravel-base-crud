@extends('layouts.main-layout')
@section('pageTitle')
  Home Page
@endsection
@section('content')

  <main>
    <h1>
      Lista Ospiti
    </h1>
    <table>
      <tr>
        <th>
          ID
        </th>
        <th>
          NAME
        </th>
        <th>
          LASTNAME
        </th>
      </tr>
      @foreach ($ospiti as $ospite)
        <tr>
          <td>
            <a href="{{route('ospite', $ospite -> id)}}">
              {{$ospite -> id}}
            </a>
          </td>
          <td>
            <a href="{{route('ospite', $ospite -> id)}}">
              {{$ospite -> name}}
            </a>
          </td>
          <td>
            <a href="{{route('ospite', $ospite -> id)}}">
              {{$ospite -> lastname}}
            </a>
          </td>
        </tr>
      @endforeach
    </table>
    <a class="addNew" href="{{route('addNewOspite')}}">
      Add new ospite
    </a>
  </main>

@endsection
