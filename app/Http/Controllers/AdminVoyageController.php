<?php

namespace App\Http\Controllers;

use App\AdminVoyage;
use Illuminate\Http\Request;
use App\Voyage;

class AdminVoyageController extends Controller
{

  public function __construct(){
    $this->middleware('auth');
    // $this->middleware('auth')->except('index');
    // $this->middleware('auth')->only('index','create');
  }
  //protected $fillable = ['destination', 'description', 'prix', 'image', 'titre'];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $voyages = Voyage::all();
      return view('admin.index', ['voyages' => $voyages]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // $validator = Voyage::make($request, [
      //   'destination'=> 'required|max:75',
      //   'description'=> 'required',
      //   'prix'=> 'required',
      //   'image'=> 'required',
      //   'titre'=> 'required|max:50',
      // ]);
      //
      // if ($validator->fails()) {
      //   return back()->withErrors($validator)->whithInput();
      // }

      $voyage = New Voyage;
      $voyage->destination = $request->input('destination');
      $voyage->description = $request->input('description');
      $voyage->prix = $request->input('prix');
      $voyage->image = $request->input('image');
      $voyage->titre = $request->input('titre');
      $voyage->save();
      return redirect('admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AdminVoyage  $adminVoyage
     * @return \Illuminate\Http\Response
     */
    public function show(Voyage $voyage)
    {
      $voyage = Voyage::findOrFail($voyage);
      return view('admin.show', ['voyage'=>$voyage]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AdminVoyage  $adminVoyage
     * @return \Illuminate\Http\Response
     */
    public function edit(Voyage $voyage)
    {

      $voyage = Voyage::findOrFail($voyage->id);
      return view('admin.edit', ['voyage'=>$voyage]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AdminVoyage  $adminVoyage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Voyage $voyage)
    {
      //dd($voyage);
      //$voyage = Voyage::find($voyage);
      $voyage->destination = $request->input('destination');
      $voyage->description = $request->input('description');
      $voyage->prix = $request->input('prix');
      $voyage->image = $request->input('image');
      $voyage->titre = $request->input('titre');
      $voyage->save();
      return redirect('admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AdminVoyage  $adminVoyage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Voyage $voyage)
    {
        $voyage->delete();
        return redirect('admin');
    }

    public function Search(Voyage $voyage){
      $search = \Request::get('the_search');
      $results = Voyage::where('destination', 'like', '%'.$search.'%')
                     ->orderBy('destination')
                     ->paginate(20);

      return view('admin/search', ['results'=>$results]);
    }
}
