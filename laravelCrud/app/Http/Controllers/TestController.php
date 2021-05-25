<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ospiti;

class TestController extends Controller
{
  public function home()
  {
    $ospiti = Ospiti::all();

    return view('pages.home', compact('ospiti'));

  }

  public function ospite($id)
  {
    $ospite = Ospiti::findOrFail($id);

    return view('pages.ospite', compact('ospite'));

  }

  public function addNewOspite()
  {

    return view('pages.addNewOspite');

  }

  public function store(Request $request)
  {
    $validate = $request -> validate([
      'name' => 'nullable',
      'lastname' => 'nullable',
      'date_of_birth' => 'nullable',
      'document_type' => 'nullable',
      'document_number' => 'nullable'
    ]);

    $ospite = Ospiti::create($validate);

    return redirect() -> route('ospite', $ospite -> id);
  }
}
