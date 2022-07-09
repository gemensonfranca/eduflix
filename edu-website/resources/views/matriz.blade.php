@extends('layout.log')
@section('titlelog', 'EduFlix - Inscritos')

@section('contentlog')
    <div class="fundo_corpo">
        <div class="linha">
            <div class="linha_painel">
                <div class="col_painel1 coluna">
                    <p class="titulo_painel">Todos os cursos</p> 
                </div>
                <div class="col_painel1 coluna">
                    <a href="/cursos"><button class="bt_new_curso2">Ver todos</button></a>
                </div>
            </div>
            <!--  -->
            <div class="corpo_curso">
                <div class="base_lista">
                    <table>
                        <tr>
                            <td class="tx1"><p class="list_txt">Curso</p></td>
                            <td class="tx2"><p class="list_txt">Data de início</p></td>
                            <td class="tx3"><p class="list_txt">Data de termino</p></td>
                            <td class="tx4"><p class="list_txt">Valor</p></td>
                            <td class="tx5"><p class="list_txt">Quantidade</p></td>
                            <td class="tx6"><p class="list_txt"></p></td>
                        </tr>
                    </table>
                    <!--  -->
                    <hr>
                    <!--  -->
                    @foreach($cursos as $curso)
                    <table>
                        <tr>
                            <td class="tx1"><p class="list_tx">{{ $curso->nome }}</p></td>
                            <td class="tx2"><p class="list_tx">{{ $curso->inicio }}</p></td>
                            <td class="tx3"><p class="list_tx">{{ $curso->termino }}</p></td>
                            <td class="tx4"><p class="list_tx">R${{ $curso->valor }}</p></td>
                            <td class="tx5"><p class="list_tx">{{ $curso->quantidade }}</p></td>
                            <td class="tx6">
                                <ul class="out">
                                    <li><a href=""><button class="edt_bt">Editar</button></a></li>
                                    <li><a href="/curso/{{ $curso->id }}"><button class="exc_bt">Excluir</button></a></li>
                                </ul>
                            </td>
                        </tr>
                    </table>
                    <!--  -->
                    <hr class="rule" size="1px" color="#cdcdcd">
                    @endforeach
                    <!--  -->
                </div>
            </div>
        </div>
    </div>
@endsection