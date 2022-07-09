@extends('layout.log')
@section('titlelog', 'EduFlix - Inscritos')

@section('contentlog')
    <div class="fundo_corpo">
        <div class="linha">
            <div class="linha_painel">
                <div class="col_painel1 coluna">
                    <p class="titulo_painel">Inscritos</p> 
                </div>
                <div class="col_painel1 coluna">
                    <p class="number_cur">1 Inscrito</p>
                </div>
            </div>
            <!--  -->
            <div class="corpo_curso">
                <div class="base_lista">
                    <table>
                        <tr>
                            <td class="td1"><p class="list_txt">Inscrito</p></td>
                            <td class="td2"><p class="list_txt">Data de inscrição</p></td>
                            <td class="td3"><p class="list_txt">Categoria</p></td>
                            <td class="td4"><p class="list_txt">CPF</p></td>
                            <td class="td5"><p class="list_txt">E-mail</p></td>
                            <td class="td6"><p class="list_txt">UF</p></td>
                            <td class="td7"><p class="list_txt">Status</p></td>
                            <td class="td8"><p class="list_txt">Total</p></td>
                            <td class="td9"><p class="list_txt"></p></td>
                        </tr>
                    </table>
                    <!--  -->
                    <hr>
                    <!--  -->
                    <table>
                        <tr>
                            <td class="td1"><p class="list_tx">Usuário Teste</p></td>
                            <td class="td2"><p class="list_tx">06/07/2022</p></td>
                            <td class="td3"><p class="list_tx">Estudante</p></td>
                            <td class="td4"><p class="list_tx">000.000.000-00</p></td>
                            <td class="td5"><p class="list_tx">usuario@gmail.com</p></td>
                            <td class="td6"><p class="list_tx">PE</p></td>
                            <td class="td7"><p class="list_tx">Pago</p></td>
                            <td class="td8"><p class="list_tx">R$500,00</p></td>
                            <td class="td9">
                                <ul class="out">
                                    <li><button class="edt_bt">Editar</button></li>
                                    <li><button class="exc_bt">Excluir</button></li>
                                </ul>
                            </td>
                        </tr>
                    </table>
                    <!--  -->
                    <hr class="rule" size="1px" color="#cdcdcd">
                    <!--  -->
                </div>
            </div>
        </div>
    </div>
@endsection