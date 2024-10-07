<?php

namespace App\Http\Controllers;

use App\Models\Saturday;
use Illuminate\Http\Request;
use Exception;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Sunday;
use App\Models\Monday;
use App\Models\Tuesday;
use App\Models\Wednesday;
use App\Models\Thursday;

class SaturdayController extends Controller
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
        $program = Saturday::where('user-code-melli', auth()->user()->getAttribute('code-melli'))->first();
        $dateNow = Carbon::parse(now());
        $membershipDate = Carbon::parse(auth()->user()->getAttribute('membership-date'));
        $period = auth()->user()->getAttribute('membership-period');
        $lastDate = 30*$period;
        $date = $membershipDate->addDays($lastDate);
        $diff = $date->diffInDays($dateNow);
        if ($program != null){
            $pagetitle = 'برنامه ورزشی شنبه';
            return view('front/exercise-program', compact('pagetitle', 'program', 'diff'));
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
        $pagetitle = 'برنامه ورزشی شنبه';
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
            'user-code-melli' => 'unique:saturdays',
            'first-exercise' => 'required',
            'first-exercise-number' => 'required',
            'second-exercise' => 'required',
            'second-exercise-number' => 'required',
            'third-exercise' => 'required',
            'third-exercise-number' => 'required',
        ], $messages);
        $saturday = new Saturday([
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
            $saturday->save();
        }catch (Exception $exception){
            return redirect(route('program'))->with('warning', $exception->getCode());
        }
        $msg = 'برنامه با موفقیت ثبت شد';
        return redirect(route('program'))->with('success', $msg);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Saturday  $saturday
     * @return \Illuminate\Http\Response
     */
    public function show(Saturday $saturday)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Saturday  $saturday
     * @return \Illuminate\Http\Response
     */
    public function edit(Saturday $saturday)
    {
        //

        $pagetitle = 'ویرایش عضو';
        return view('back/editSaturday', compact('pagetitle', 'saturday'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Saturday  $saturday
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Saturday $saturday)
    {
        //
        $messages = [
            'name.required' => 'فیلد مشخصات اسمی را وارد نمایید',
            'code-melli.required' => 'فیلد کد ملی را وارد نمایید',
            'phone-number.required' => 'فیلد شماره تلفن را وارد نمایید',
            'gender.required' => 'لطفا جنسیت را مشخص نمایید',
            'password.required' => 'فیلد رمز عبور را وارد نمایید'
        ];
        $validatedData = $request->validate([
            'name' => 'required',
            'code-melli' => 'required',
            'phone-number' => 'required',
            'gender' => 'required',
            'password' => 'required'
        ], $messages);
        try{
            $saturday->update($request->all());
        }catch (Exception $exception){
            return redirect(route('show'))->with('warning', $exception->getCode());
        }
        $msg = 'ویرایش با موفقیت انجام شد';
        return redirect(route('show'))->with('success', $msg);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Saturday  $saturday
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
        $deletedRow = $user->getAttribute('code-melli');
        $saturday = Saturday::where('user-code-melli', $deletedRow)->delete();
        $sunday = Sunday::where('user-code-melli', $deletedRow)->delete();
        $monday = Monday::where('user-code-melli', $deletedRow)->delete();
        $tuesday = Tuesday::where('user-code-melli', $deletedRow)->delete();
        $wednesday = Wednesday::where('user-code-melli', $deletedRow)->delete();
        $thursday = Thursday::where('user-code-melli', $deletedRow)->delete();
        $msg = 'حذف با موفقیت انجام شد';
        return redirect(route('program'))->with('success', $msg);
    }
}
