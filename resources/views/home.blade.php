@extends('layouts.app')

@section('content')
        <pagina tamanho="9">
                <painel titulo="Compomente Laravel">
                     <migalhas v-bind:lista="{{$listaMigalhas}}"></migalhas>
                    <div class="row">

                        <div class="col-md-4">
                            <caixa qtd="280" titulo="Novos Pedidos" url="{{route('artigos.index')}}" cor="#0f802c" icone="ion ion-pie-graph">
                                
                            </caixa>
                        </div>

                        <div class="col-md-4">
                             <caixa qtd="420" titulo="Amigos" url="#" cor="#f39c12" icone="ion ion-person-add">
                                
                            </caixa>
                        </div>

                        <div class="col-md-4">
                            <caixa qtd="569" titulo="Mensagens" url="#" cor="#00c0ef" icone="ion ion-bag">
                                
                            </caixa>
                        </div>

                    </div>
                    

                </painel>
            </pagina>
@endsection
