<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StudentAffairs\Nationality;
use App\DataTables\NationalityDataTable;

class NationalityController extends Controller 
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index(NationalityDataTable $dataTable)
  {
    return $dataTable->render('studentAffairs\nationality\all');

      // $records = Nationality::paginate(10);
      // return view('studentAffairs\nationality\all', compact('records'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
      $record = new Nationality();
    return view('studentAffairs\nationality\create&edit_nationality', compact('record'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
    $request->validate([
      'name_en' => 'unique:nationalities',
      'name_ar' => 'unique:nationalities',
  ]);
  
  if($request->name_ar==null && $request->name_en==null){
    return back()->with('danger', 'Please Input Data');
  }elseif($request->has('name_ar') && !$request->has('name_en')){
      $request->merge(['name_en' => $request->input('name_ar')]);
    }elseif(!$request->has('name_ar') && $request->has('name_en')){
      $request->merge(['name_ar' => $request->input('name_en')]);
    }

    $record = Nationality::create($request->all());

    return redirect(route('nationality.index'))->with('success', __('lang.inserted'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    $record = Nationality::find($id);
    return view('studentAffairs\nationality\create&edit_nationality', compact('record'));
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
        'name_ar' => 'unique:nationalities,name_ar,'.$id,
        'name_en' => 'unique:nationalities,name_en,'.$id,
    ]);

    if($request->name_ar==null && $request->name_en==null){
      return back()->with('danger', 'Please Input Data');
    }elseif($request->has('name_ar') && !$request->has('name_en')){
      $request->merge(['name_en' => $request->input('name_ar')]);
    }elseif(!$request->has('name_ar') && $request->has('name_en')){
      $request->merge(['name_ar' => $request->input('name_en')]);
    }

    $record = Nationality::find($id);
    $record->update($request->all());
    
    return redirect(route('nationality.index'))->with('success', __('lang.updated'));
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    $record = Nationality::find($id)->delete();
    return redirect(route('nationality.index'))->with('Warrning', __('lang.deleted'));
  }
  
  
}

?>