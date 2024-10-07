<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Exception;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function program()
    {
        //
        $pagetitle = 'اعضا';
        $users = User::orderBy('id', 'DESC')->get();
        return view('back/showUsersProgram', compact('pagetitle', 'users'));
    }

    public function index()
    {
        //
        $pagetitle = 'اعضا';
        $users = User::orderBy('id', 'DESC')->get();
        return view('back/showUsers', compact('pagetitle', 'users'));
    }
    public function userPage()
    {
        //
        $pagetitle = 'خوش آمدید';
        return view('front/userPage', compact('pagetitle'));
    }

    public function buy(int $month, int $status)
    {
        //
        $date = Carbon::now()->format('Y-m-d');
        $user = auth()->user()->id;
        try{
            User::where('id', $user)->update(['membership-period' => $month, 'status' => $status, 'membership-date' => $date]);
        }catch (Exception $exception){
            return redirect(route('userPage'))->with('warning', $exception->getCode());
        }
        $msg = 'خرید با موفقیت انجام شد';
        return redirect(route('userPage'))->with('success', $msg);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pagetitle = 'افزودن عضو';
        return view('back/insertUser', compact('pagetitle'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
            'name.required' => 'فیلد مشخصات اسمی را وارد نمایید',
            'code-melli.required' => 'فیلد کد ملی را وارد نمایید',
            'code-melli.unique' => 'قبلا شخصی با این کد ملی ثبت نام کرده است',
            'phone-number.required' => 'فیلد شماره تلفن را وارد نمایید',
            'gender.required' => 'لطفا جنسیت را مشخص نمایید',
            'password.required' => 'فیلد رمز عبور را وارد نمایید'
        ];
        $validatedData = $request->validate([
            'name' => 'required',
            'code-melli' => 'required|unique:users',
            'phone-number' => 'required',
            'gender' => 'required',
            'password' => 'required'
        ], $messages);
        $user = new User([
            'name' => $request->get('name'),
            'code-melli' => $request->get('code-melli'),
            'phone-number' => $request->get('phone-number'),
            'gender' => $request->get('gender'),
            'password' => Hash::make($request['password']),
            'telegram-code' => $request->get('telegram-code'),
            'membership-period' => $request->get('membership-period'),
            'status' => $request->get('status'),
            'membership-date' => $request->get('membership-date')
        ]);
        try{
            $user->save();
        }catch (Exception $exception){
            return redirect(route('create'))->with('warning', $exception->getCode());
        }
        $msg = 'ثبت نام با موفقیت انجام شد';
        return redirect(route('create'))->with('success', $msg);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
        $pagetitle = 'ویرایش عضو';
        return view('back/editUser', compact('pagetitle', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
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
            $user->update($request->all());
        }catch (Exception $exception){
            return redirect(route('show'))->with('warning', $exception->getCode());
        }
        $msg = 'ویرایش با موفقیت انجام شد';
        return redirect(route('show'))->with('success', $msg);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
        $user->delete();
        $msg = 'حذف با موفقیت انجام شد';
        return redirect(route('show'))->with('success', $msg);
    }
}
