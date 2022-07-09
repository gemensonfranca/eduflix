@extends('layout.log')
@section('titlelog', 'EduFlix - Inscritos')

@section('contentlog')
    <div class="fundo_corpo">
        <div class="linha">
            <div class="lado_a coluna">
                <!--  -->
                <div class="exb_img_curso"></div>
                <!--  -->
                <div class="linha_exb">
                    <p class="titulo_curso">{{ $curso->nome }}</p>
                </div>
                <!--  -->
                <div class="linha_exb">
                    <p>{{ $curso->descricao }}</p>
                </div>
                <!--  -->
                <div class="linha_exb">
                    <!--  -->
                    <div class="lin1 coluna"><p class="xx1">R${{ $curso->valor }}</p></div>
                    <!--  -->
                    <div class="lin1 coluna"><p class="xx2">{{ $curso->quantidade }} vagas</p></div>
                </div>
            </div>
            <div class="lado_b coluna">
                <!--  -->
                <div class="box_form">
                    <form action="" method="">
                        <!--  -->
                        <span class="txt">Nome do curso</span>
                        <!--  -->
                        <input class="ipt" type="text" placeholder="Nome do curso">
                        <!--  -->
                        <span class="txt">Descrição</span>
                        <!--  -->
                        <textarea class="texta" name="" placeholder="Descrição"></textarea>
                        <!--  -->
                        <span class="txt">Início das inscrições</span>
                        <!--  -->
                        <input class="ipt" type="text" placeholder="00/00/0000">
                        <!--  -->
                        <span class="txt">Término das inscrições</span>
                        <!--  -->
                        <input class="ipt" type="text" placeholder="00/00/0000">
                        <!--  -->
                        <span class="txt">Quantidade máxima de inscritos</span>
                        <!--  -->
                        <input class="ipt" type="text" placeholder="300">
                        <!--  -->
                        <span class="txt">Upload de material</span>
                        <!--  -->
                        <input class="" type="file" placeholder="material">
                        <!--  -->
                        <input class="button_submit" type="submit" value="Cadastre-se" name="">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection