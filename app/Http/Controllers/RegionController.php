<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StudentAffairs\Region;
use App\DataTables\RegionDataTable;

class RegionController extends Controller 
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index(RegionDataTable $dataTable)
  {
    return $dataTable->render('studentAffairs\region\all');

      // $records = Region::paginate(10);
      // return view('studentAffairs\region\all', compact('records'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
      $record = new Region();
    return view('studentAffairs\region\create&edit_region', compact('record'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
    $request->validate([
      'name_en' => 'unique:regions',
      'name_ar' => 'unique:regions',
  ]);
  
  if($request->name_ar==null && $request->name_en==null){
    return back()->with('danger', 'Please Input Data');
  }elseif($request->has('name_ar') && !$request->has('name_en')){
      $request->merge(['name_en' => $request->input('name_ar')]);
    }elseif(!$request->has('name_ar') && $request->has('name_en')){
      $request->merge(['name_ar' => $request->input('name_en')]);
    }

    $record = Region::create($request->all());

    return redirect(route('region.index'))->with('success', __('lang.inserted'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    $record = Region::find($id);
    return view('studentAffairs\region\create&edit_region', compact('record'));
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
        'name_ar' => 'unique:regions,name_ar,'.$id,
        'name_en' => 'unique:regions,name_en,'.$id,
    ]);

    if($request->name_ar==null && $request->name_en==null){
      return back()->with('danger', 'Please Input Data');
    }elseif($request->has('name_ar') && !$request->has('name_en')){
      $request->merge(['name_en' => $request->input('name_ar')]);
    }elseif(!$request->has('name_ar') && $request->has('name_en')){
      $request->merge(['name_ar' => $request->input('name_en')]);
    }

    $record = Region::find($id);
    $record->update($request->all());
    
    return redirect(route('region.index'))->with('success', __('lang.updated'));
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    $record = Region::find($id)->delete();
    return redirect(route('region.index'))->with('Warrning', __('lang.deleted'));
  }
  
  
}

?>