@extends('layout.log')
@section('titlelog', 'EduFlix - Nossos cursos')

@section('contentlog')
    <div class="fundo_corpo">
        <div class="linha_cursos">
            <div class="linha_painel">
                <!--  -->
                <div class="col_painel1 coluna">
                    <p class="titulo_painel">Nossos cursos</p> 
                </div>
                <!--  -->
                <div class="col_painel1 coluna">
                    <button class="bt_new_curso">+ Novo curso</button>
                </div>
                <!-- MODAL CADASTRO -->
                <div class="modal_cdt">
                    <p class="fechar">✕</p>
                    <div class="box_cdt">
                        <form action="/cadastro" method="POST" enctype="multipart/form-data">
                            @csrf
                            <span class="txt">Nome do curso</span>
                            <!--  -->
                            <input class="ipt" type="text" name="nome" placeholder="Nome do curso">
                            <!--  -->
                            <span class="txt">Descrição</span>
                            <!--  -->
                            <textarea class="texta" name="descricao" placeholder="Descrição"></textarea>
                            <!--  -->
                            <span class="txt">Valor</span>
                            <!--  -->
                            <input class="ipt" type="text" name="valor" placeholder="0.00">
                            <!--  -->
                            <div class="linha_modal">
                                <!--  -->
                                <div class="col_model1 coluna">
                                    <!--  -->
                                    <span class="txt">Início</span>
                                    <!--  -->
                                    <input class="ipt" name="inicio" type="text" placeholder="00/00/0000">
                                </div>
                                <!--  -->
                                <div class="col_model2 coluna">
                                    <!--  -->
                                    <span class="txt">Termino</span>
                                    <!--  -->
                                    <input class="ipt" name="termino" type="text" placeholder="00/00/0000">
                                </div>
                            </div>
                            <!--  -->
                            <div class="linha_modal">
                                <!--  -->
                                <div class="col_model1 coluna">
                                    <!--  -->
                                    <span class="txt">Quantidade de inscritos</span>
                                    <!--  -->
                                    <input class="ipt" name="quantidade" type="text" placeholder="Quantidade máxima">
                                </div>
                                <!--  -->
                                <div class="col_model2 coluna">
                                    <!--  -->
                                    <span class="txt">Upload de material</span>
                                    <!--  -->
                                    <input class="ipt" name="upload" type="file">
                                </div>
                            </div>
                            <!--  -->
                            <input class="button_submit" type="submit" value="Cadastrar curso" name="cadastrar">
                        </form>
                    </div>
                </div>
            </div>
            <!--  -->
            <div class="corpo_cursos">
                @foreach($cursos as $curso)
                    <div class="curso coluna">
                        <!--  -->
                        <div class="imagem_curso">
                            <img src="" alt="">
                        </div>
                        <!--  -->
                        <div class="descricao">
                            <div class="desc_curso">
                                <p class="nome_curso">{{ $curso->nome }}</p>
                            </div>
                            <!--  -->
                            <div class="desc_curso">
                                <div class="cur1 coluna"><p class="preco">R${{ $curso->valor }}</p></div>
                                <!--  -->
                                <div class="cur1 coluna"><p class="alunos">{{ $curso->quantidade }} vagas</p></div>
                            </div>
                            <!--  -->
                            <div class="desc_curso">
                                <span>{{ $curso->descricao }}</span>
                            </div>
                            <!--  -->
                            <a href="/curso/{{ $curso->id }}"><button class="bt_curso_opt">Quero estudar</button></a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection