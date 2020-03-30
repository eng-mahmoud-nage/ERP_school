<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StudentAffairs\Place;
use App\DataTables\PlaceDataTable;

class PlaceController extends Controller 
{
/**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index(PlaceDataTable $dataTable)
  {
    return $dataTable->render('studentAffairs\place\all');

      // $records = Place::paginate(10);
      // return view('studentAffairs\place\all', compact('records'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
      $record = new Place();
    return view('studentAffairs\place\create&edit_place', compact('record'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
    $request->validate([
      'name_en' => 'unique:places',
      'name_ar' => 'unique:places',
  ]);
  
  if($request->name_ar==null && $request->name_en==null){
    return back()->with('danger', 'Please Input Data');
  }elseif($request->has('name_ar') && !$request->has('name_en')){
      $request->merge(['name_en' => $request->input('name_ar')]);
    }elseif(!$request->has('name_ar') && $request->has('name_en')){
      $request->merge(['name_ar' => $request->input('name_en')]);
    }

    $record = Place::create($request->all());

    return redirect(route('place.index'))->with('success', __('lang.inserted'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    $record = Place::find($id);
    return view('studentAffairs\place\create&edit_place', compact('record'));
  }


  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(Request $request, $id)
  {
    $request->validate([
        'name_ar' => 'unique:places,name_ar,'.$id,
        'name_en' => 'unique:places,name_en,'.$id,
    ]);

    if($request->name_ar==null && $request->name_en==null){
      return back()->with('danger', 'Please Input Data');
    }elseif($request->has('name_ar') && !$request->has('name_en')){
      $request->merge(['name_en' => $request->input('name_ar')]);
    }elseif(!$request->has('name_ar') && $request->has('name_en')){
      $request->merge(['name_ar' => $request->input('name_en')]);
    }

    $record = Place::find($id);
    $record->update($request->all());
    
    return redirect(route('place.index'))->with('success', __('lang.updated'));
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    $record = Place::find($id)->delete();
    return redirect(route('place.index'))->with('Warrning', __('lang.deleted'));
  }
  
}

?>