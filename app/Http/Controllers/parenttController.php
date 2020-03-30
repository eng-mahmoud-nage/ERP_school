<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StudentAffairs\Parentt;

class parenttController extends Controller
{
    /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index(Request $request)
  {

    if($request->has('parent_phone')){
      $name = Parentt::where('parent_phone', $request->parent_phone)->first();
      if($name) $parent_name  = $name['parent_name_'.app()->getLocale()];
      else 
      $parent_name  = 'Not Found';
      
            return ResponseJson(1, $parent_name);


    }
      // return $dataTable->render('studentAffairs\admin\all');
      $records = Parentt::paginate(10);
      return view('studentAffairs\student\all', compact('records'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
      $record = new Parentt();
    return view('studentAffairs\student\create&edit_student', compact('record'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {


    $request->validate([

  ]);

    $parent = Parentt::create($request->all());

    return redirect(route('student.index'))->with('success',__('lang.inserted'));
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    $record = Parentt::find($id);
    return view('studentAffairs\student\create&edit_student', compact('record'));
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
        'name_ar' => 'required',
        'name_en' => 'required',
        'email' => 'required|email|unique:admins,email,'.$id,
    ]);

    $record = Parentt::find($id);
    $request->merge(['password' => Hash::make($request->input('password'))]);

    $record->update($request->all());
    // $user->syncRoles($request->input('role_list'));
    // $user->syncPermissions($request->input('permission_list'));
    return redirect(route('student.index'))->with('success', __('lang.updated'));
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    $record = Parentt::find($id)->delete();
    return redirect(route('student.index'))->with('Warrning', __('lang.deleted'));
  }

    // public function login(Request $request)
    // {
    //     $request->validate([
    //         'email' => 'required|exists:admins',
    //         'password' => 'required'
    //     ]);
        

    //     $record = Student::where('email', $request->email)->first();
    //     if ($record) {
    //         if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password, 'active' => 1])) {                
    //           return redirect('/');
    //         } else {
    //             return redirect('/sys-login')->with('danger', 'this user not found in our system');
    //         }
    //     }
    // }
  
  
}
