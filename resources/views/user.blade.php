@extends('layouts.barbershop')
@section('content')
    <div class="container">
        <div class="row">
            <div class="main__login col-md-12">
                <form action="#" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="Email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="Email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="Password" class="form-label">Пароль</label>
                        <input type="password" class="form-control" id="Password" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary" name="login">Войти</button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="main__register col-md-12">
                <form action="#" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="Name" class="form-label">Имя</label>
                        <input type="text" class="form-control" id="Name" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="Email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="Email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="Password" class="form-label">Пароль</label>
                        <input type="password" class="form-control" id="Password" name="password">
                    </div>
                    <div class="mb-3">
                        <label for="ConfPassword" class="form-label">Повторите пароль</label>
                        <input type="password" class="form-control" id="ConfPassword" name="conf_password">
                    </div>
                    <button type="submit" class="btn btn-primary" name="register">Зарегистрироваться</button>
                </form>
            </div>
        </div>
    </div>
@endsection
