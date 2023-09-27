<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@section('title-admin') Admin-form @endsection
    <form action="{{route('new-worker-create')}}" method="POST">
        @csrf
        <h1>Форма создания сотрудника</h1>

        <div><label> FIO
        <input type="text" name="name" id="name" placeholder="name of worker"/>
        </label></div>
        @error('name')
        {{$message}}
        @enderror
        <div>
        <label> phone number
            <input type="text" name="phone-number" id="phone-number" placeholder="phone-number"/>
        </label></div>
        @error('phone-number')
        {{$message}}
        @enderror
        <div>
        <label>SMS
            <input type="checkbox" id="sms" name="sms checked /">
        </label></div>
        @error('sms')
        {{$message}}
        @enderror
        <div>

         <label> birthday
          <input type="date" name="date" id="date" placeholder="date" value="2018-07-22" min="1990-01-01"/>
         </label>
        </div>
        @error('date')
        {{$message}}
        @enderror
        <div>
        <label> EMAIL
            <input type="email" name="email" id="email" placeholder="email"/>
        </label></div>
        @error('email')
        {{$message}}
        @enderror
        <div>
        <label> SKYPE
            <input type="text" name="skype" id="skype" placeholder="skype"/>
        </label></div>
        @error('skype')
        {{$message}}
        @enderror
        <div> <label> STATUS
            <input type="text" name="status" id="status" placeholder="status"/>
        </label></div>
        @error('status')
        {{$message}}
        @enderror
        <div> <label>FUNCTIONALITY
            <input type="text" name="functionality" id="functionality" placeholder="functionality"/>
        </label></div>
        @error('functionality')
        {{$message}}
        @enderror
        <div> <label>PRIOTITY
                <input type="number" name="prior" id="prior" placeholder="prior"/>
            </label></div>
        @error('prior')
        {{$message}}
        @enderror
        <div> <label>Phone
                <input type="text" name="phone" id="phone" placeholder="phone"/>
            </label>
        </div>
        @error('phone')
        {{$message}}
        @enderror
        <div>
            <select name="company" id="company">
            @foreach($companies as $company)
                    <option>{{$company->name}}</option>
            @endforeach
            </select>
        </div>
    <input type="submit" value="Создать сотрудника" />
    </form>

</html>