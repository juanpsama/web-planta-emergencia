<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Form;

class CheckController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $forms_reversed = Form::all();
        $myArray = json_decode(json_encode($forms_reversed), true);//convert object to an array
        $forms_array = array_reverse($myArray);//reverse the array 
        $forms = json_decode(json_encode($forms_array), FALSE);//convert array to an object
        return view('checkforms.index', compact('forms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('checkforms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate_data = $request->validate([
            'name' => 'required',
            'hours' => 'required',
            'bateria' => 'required',
            'combustible' => 'required',
            'aceite' => 'required',
            'refrigerante' => 'required'
        ]);
        if ($request->hasFile('status')){
            $file =  $request->file('status');
            $file_name = time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $file_name);
        }
        $checkForm = new Form();
        $checkForm->foto = $file_name;
        $checkForm->name = $request->input('name');
        $checkForm->horas = $request->input('hours');
        $checkForm->bateria = $request->input('bateria');
        $checkForm->combustible = $request->input('combustible');
        $checkForm->aceite = $request->input('aceite');
        $checkForm->refrigerante = $request->input('refrigerante');
        
        if($request->input('arranque') == null){
            $checkForm->arranque = 'off';
        }else{
            $checkForm->arranque = $request->input('arranque');
        }

        if($request->input('automatico') == null){
            $checkForm->encendido_auto = 'off';
        }else{
            $checkForm->encendido_auto = $request->input('automatico');
        }
       
        $checkForm->save(); 
        //return 'saved';
        return redirect()->route('forms.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Form $form)
    {
        //return $form;
        return view('checkforms.show', compact('form'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Form $form)
    {
        //
    }
}
