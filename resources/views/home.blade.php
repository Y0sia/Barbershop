@extends('layouts.barbershop')
@section('content')
    <div class="main__select">
        <div class="container">
            <div class="row">
                <select class="form-select main__form-barber" aria-label="Default select example">
                    <option value="0" selected>Выберите парикмахера</option>
                    @foreach($barbers as $barber)
                        <option value="{{ $barber->id }}">{{ $barber->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row">
            <div class="main__message col-md-12">
                <h3>Не выбран парикмахер</h3>
            </div>
        </div>
        <div class="container">
             <div class="row">
                 @foreach($barbers as $barber)
                     @foreach($shedules as $shedule)
                         @if($barber->id === $shedule->barber_id)
                             <form class="main__form__events" action="{{ route('shedule.make') }}" method="post">
                                 @csrf
                                 <div class="main__events main__events__id-{{ $barber->id }} col-md-12">
                                     <input class="status-{{ $shedule->status }}" type="submit" name="input_submit" value="{{ $shedule->id }}">
                                     <input class="status-{{ $shedule->status }}" type="hidden" name="shedule_id" value="{{ $shedule->id }}">
                                 </div>
                             </form>
                         @endif
                     @endforeach
                 @endforeach
            </div>
        </div>
@endsection
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br />
    @endif
