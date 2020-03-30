<?php 

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\StudentAffairs\AcademicYear;
use App\DataTables\AcademicYearDataTable;

class AcademicYearController extends Controller 
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index(AcademicYearDataTable $dataTable)
  {
    return $dataTable->render('studentAffairs\academicyear\all');

      // $records = AcademicYear::paginate(10);
      // return view('studentAffairs\academicyear\all', compact('records'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
      $record = new AcademicYear();
    return view('studentAffairs\academicyear\create&edit_academicyear', compact('record'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
    $request->validate([
      'year' => 'unique:academicyears',
  ]);
  $ay = 0;
  if($request->active == 'on'){
    $ay=1;
    AcademicYear::where('active', 1)->update(['active' => 0]);
  }

    $record = new AcademicYear();
    $record->year = $request->year;
    $record->active = $ay;
    $record->save();
    return redirect(route('academicyear.index'))->with('success', __('lang.inserted'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    $record = AcademicYear::find($id);
    return view('studentAffairs\academicyear\create&edit_academicyear', compact('record'));
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
        'year' => 'unique:academicyears,year,'.$id,
    ]);
    $ay = 0;
    if($request->active == 'on'){
      $ay=1;
      AcademicYear::where('active', 1)->update(['active' => 0]);
    }

      $record = AcademicYear::find($id);
      $record->active = $ay;
      $record->year = $request->year;
      $record->save();
    
    return redirect(route('academicyear.index'))->with('success', __('lang.updated'));
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    $record = AcademicYear::find($id)->delete();
    return redirect(route('academicyear.index'))->with('Warrning', __('lang.deleted'));
  }
  
  
  
}

?>