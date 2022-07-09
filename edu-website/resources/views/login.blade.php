@extends('layout.main')
@section('title', 'EduFlix - Login')

@section('content')
<div class="fundo_corpo">
    <div class="linha">
        <div class="base-login">
            <div class="box_form2">
                <!--  -->
                <p class="title">Entre</p>
                <form action="" method="">
                    <span class="txt">E-mail</span>
                    <!--  -->
                    <input class="ipt" type="text" placeholder="usuario@gmail.com">
                    <!--  -->
                    <span class="txt">Senha</span>
                    <!--  -->
                    <input class="ipt" type="password" placeholder="********">
                    <!--  -->
                    <input class="button_submit" type="submit" value="Cadastre-se" name="">
                </form>
                <center><p class="recupera"><a href="">Esqueci minha senha</a></p></center> 
            </div>
        </div>
    </div>
</div>
@endsection