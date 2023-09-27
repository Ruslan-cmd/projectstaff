<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Polzovatel;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class WorkerController extends Controller
{
   public function create(Request $request){
       $this->validationData($request);
        $polzovatel = [
            'name' => $request['name'],
            'phone-number' => $request['phone-number'],
            'date' => $request['date'],
            'sms' => $request['sms'],
            'email' => $request['email'],
            'skype' => $request['skype'],
            'status' => $request['status'],
            'functionality' => $request['functionality'],
            'prior' => $request['prior'],
            'phone' => $request['phone'],
        ];
        $worker = Polzovatel::create($polzovatel);
        $conpany = Company::where('name', $request['company'])->get();
        $worker->companies()->attach($conpany);

            dd('created');
   }

   public function show(){
       $conpanies = Company::all();

       return view('create-new-worker-form',['companies' => $conpanies]);

   }

    /**
     * @throws ValidationException
     */
    public function validationData(Request $request){

       $this->validate($request,[
           'name' => 'required|string|max:40',
           'phone-number' =>'numeric|max_digits:10',
           'email'=>'max:30',
           'skype'=>'max:30',
           'status'=>'required|max:30',
           'functionality'=>'max:50',
           'prior'=>'required|integer|max_digits:3',
           'phone'=>'min_digits:3|max_digits:3'
       ], [
           'name.required' =>'Введите инициалы нового сотрудника',
           'name.string' =>'Инициалы сотрудника не должны содержать цифры',
           'name.max_digits' =>'Превышено максимальное колличество символов',

           'phone-number.numeric' =>'Мобильный телефон не должен содержать буквы',
           'phone-number.max_digits' =>'Превышено максимальное колличество символов',

           'email.max_digits'=>'Превышено максимальное колличество символов',

           'skype.max_digits'=>'Превышено максимальное колличество символов',

           'status.required' =>'Введите должность нового сотрудника',
           'status.max_digits'=>'Превышено максимальное колличество символов',

           'functionality.max_digits'=>'Превышено максимальное колличество символов',

           'prior.required' =>'Введите приоритет',
           'prior.integer' => 'Приоритет должен являться численным значением',
           'prior.max_digits' => 'Превышено максимальное колличество символов',

           'phone.min_digits' =>'Превышено минимальное колличество символов',
           'phone.max_digits' =>'Превышено максимальное колличество символов',
       ]);
   }
}
