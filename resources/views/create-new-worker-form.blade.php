<!DOCTYPE html>
dgsfgf

sdfgfsg
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@section('title-admin') Admin-form @endsection

    <h1> Test form </h1>

    <form action="{{route('new-worker-create')}}" method="POST">
        @csrf
        <h1>Регистрация</h1>
        <div><label> FIO
        <input type="text" name="name" id="name" placeholder="name of worker"/>
        </label></div>
        <div>
        <label> phone number
            <input type="text" name="phone-number" id="phone-number" placeholder="phone-number"/>
        </label></div>
        <div>
        <label>SMS
            <input type="checkbox" id="sms" name="sms checked /">
        </label></div>

<div>
    <label>
        <input type="date" name="date" id="date" placeholder="date" value="2018-07-22" min="1990-01-01"/>
    </label>
</div>

        <label>
            <input type="text" name="name" id="name" placeholder="name of worker"/>
        </label>
        <label>
            <input type="text" name="name" id="name" placeholder="name of worker"/>
        </label>
        <label>
            <input type="text" name="name" id="name" placeholder="name of worker"/>
        </label>
        <label>
            <input type="text" name="name" id="name" placeholder="name of worker"/>
        </label>

    </form>

</html>