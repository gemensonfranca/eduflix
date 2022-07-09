@extends('layout.main')
@section('title', 'EduFlix - Um novo jeito de aprender!')

@section('content')
<div class="fundo_banner">
    <div class="linha">
        <div class="base_cast">
            <div class="cast1 coluna">
                <p class="master">Aqui começa sua tranformação!</p>
                <p class="seme">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, consequuntur temporibus debitis beatae delectus totam? Eveniet cum sunt optio vel laudantium, blanditiis.</p>
            </div>
            <!--  -->
            <div class="cast2 coluna">
                <div class="box_form">
                    <form action="/registro" method="POST">
                        @csrf
                        <!--  -->
                        <span class="txt">Nome</span>
                        <!--  -->
                        <input class="ipt" type="text" name="nome" placeholder="Seu nome">
                        <!--  -->
                        <span class="txt">E-mail</span>
                        <!--  -->
                        <input class="ipt" type="text" name="email" placeholder="usuario@gmail.com">
                        <!--  -->
                        <span class="txt">Usuário</span>
                        <!--  -->
                        <select name="usuario" class="slc">
                            <option value="estudante">Estudante</option>
                            <option value="profissional">Profissional</option>
                            <option value="associada">Associado</option>
                        </select>
                        <!--  -->
                        <span class="txt">Senha</span>
                        <!--  -->
                        <input class="ipt" type="password" name="senha" placeholder="Sua senha">
                        <!--  -->
                        <span class="txt">Confirmar senha</span>
                        <!--  -->
                        <input class="ipt" type="password" name="conf_senha" placeholder="Confirme a senha">
                        <!--  -->
                        <input class="button_submit" type="submit" value="Cadastre-se" name="cadastrar">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection