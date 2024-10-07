<?php

namespace App\Http\Controllers;

use App\Models\Monday;
use Illuminate\Http\Request;
use Exception;
use App\Models\User;

class MondayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function showProgram()
    {
        //
        $program = Monday::where('user-code-melli', auth()->user()->getAttribute('code-melli'))->first();
        if ($program != null){
            $pagetitle = 'برنامه ورزشی دوشنبه';
            return view('front/exercise-program', compact('pagetitle', 'program'));
        }else{
            return redirect(route('userPage'))->with('warning', "هنوز برنامه ای برای شما ثبت نشده است");
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(User $user,string $day)
    {
        //
        $pagetitle = 'برنامه ورزشی دوشنبه';
        return view('back/insertProgramSaturday', compact('pagetitle', 'user', 'day'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $messages = [
            'user-code-melli.unique' => 'کاربر قبلا دارای برنامه میباشد لطفا ابتدا برنامه ی قبلی را پاک نمایید',
            'first-exercise.required' => 'فیلد حرکت اول را وارد نمایید',
            'first-exercise-number.required' => 'فیلد تعداد حرکت اول را وارد نمایید',
            'second-exercise.required' => 'فیلد حرکت دوم را وارد نمایید',
            'second-exercise-number.required' => 'فیلد تعداد حرکت دوم را وارد نمایید',
            'third-exercise.required' => 'فیلد حرکت سوم را وارد نمایید',
            'third-exercise-number.required' => 'فیلد تعداد حرکت سوم را وارد نمایید'
        ];
        $validatedData = $request->validate([
            'user-code-melli' => 'unique:mondays',
            'first-exercise' => 'required',
            'first-exercise-number' => 'required',
            'second-exercise' => 'required',
            'second-exercise-number' => 'required',
            'third-exercise' => 'required',
            'third-exercise-number' => 'required',
        ], $messages);
        $monday = new Monday([
            'user-code-melli' => $request->get('user-code-melli'),
            'first-exercise' => $request->get('first-exercise'),
            'first-exercise-number' => $request->get('first-exercise-number'),
            'second-exercise' => $request->get('second-exercise'),
            'second-exercise-number' => $request->get('second-exercise-number'),
            'third-exercise' => $request->get('third-exercise'),
            'third-exercise-number' => $request->get('third-exercise-number'),
            'forth-exercise' => $request->get('forth-exercise'),
            'forth-exercise-number' => $request->get('forth-exercise-number'),
            'fifth-exercise' => $request->get('fifth-exercise'),
            'fifth-exercise-number' => $request->get('fifth-exercise-number'),
            'sixth-exercise' => $request->get('sixth-exercise'),
            'sixth-exercise-number' => $request->get('sixth-exercise-number'),
            'seventh-exercise' => $request->get('seventh-exercise'),
            'seventh-exercise-number' => $request->get('seventh-exercise-number'),
            'eighth-exercise' => $request->get('eighth-exercise'),
            'eighth-exercise-number' => $request->get('eighth-exercise-number')
        ]);
        try{
            $monday->save();
        }catch (Exception $exception){
            return redirect(route('program'))->with('warning', $exception->getCode());
        }
        $msg = 'برنامه با موفقیت ثبت شد';
        return redirect(route('program'))->with('success', $msg);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Monday  $monday
     * @return \Illuminate\Http\Response
     */
    public function show(Monday $monday)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Monday  $monday
     * @return \Illuminate\Http\Response
     */
    public function edit(Monday $monday)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Monday  $monday
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Monday $monday)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Monday  $monday
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
