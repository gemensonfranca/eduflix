@extends('layout.log')
@section('titlelog', 'EduFlix - Meu painel')

@section('contentlog')
    <div class="fundo_corpo">
        <div class="linha">
            <div class="linha_painel">
                <div class="col_painel1 coluna">
                    <p class="titulo_painel">Meus cursos</p> 
                </div>
                <div class="col_painel1 coluna">
                    <a href="/cursos"><button class="bt_new_curso2">+ Mais curso</button></a>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="corpo_curso">
            <!--  -->
            
        </div>
    </div>
@endsection