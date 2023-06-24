<?php

namespace App\Http\Controllers;

use App\Models\Form;

use Illuminate\Http\Request;
use App\Http\Requests\StoreFormRequest;
use App\Http\Requests\UpdateFormRequest;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function form_store(Request $request)
    {
        // dd($request);

        $form = new Form();

        $form->name = $request->name;
        $form->email = $request->email;
        $form->number = $request->number;
        $form->location = $request->location;
        $form->message = $request->message;

        $form->save();

        return redirect()->back()->with('success','Message sended successfully');
    }

 
}
