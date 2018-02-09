@extends('layouts.app')

@section('content')
        <pagina tamanho="12">
                <painel titulo="Lista de Artigos">
                    
                    
                    
                    <migalhas v-bind:lista="{{$listaMigalhas}}"></migalhas>

                    

                    <tabela-lista 

                    v-bind:titulos="['#', 'Título', 'Descrição']"
                    v-bind:itens="{{$listaArtigos}}"
                    ordem = "asc" ordemcol = "1"
                    criar="#criar" detalhe="#detalhe" editar="#editar" deletar="#deletar" token="12345"
                    modal="sim"
                    ></tabela-lista>

                </painel>
        </pagina>
    <modal nome="adicionar"> 
        <painel titulo="Adicionar">
            <formulario css="" action="" method="post" enctype="" token="">

                <div class="form-group">
                    <label for="titulo">Título</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título">
                </div>
                <div class="form-group">
                    <label for="titulo">Descrição</label>
                    <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Descrição">
                </div>
                <button class="btn btn-info">Adicionar</button>
            </formulario>
        </painel>
    </modal>

    <modal nome="editar"> 
        <painel titulo="Editar">
            <formulario css="" action="" method="post" enctype="" token="">

                <div class="form-group">
                    <label for="titulo">Título</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título">
                </div>
                <div class="form-group">
                    <label for="titulo">Descrição</label>
                    <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Descrição">
                </div>
                <button class="btn btn-info">Atualizar</button>
            </formulario>
        </painel>
    </modal>

    <modal nome="detalhes"> 
        <painel titulo="Detalhes">
            <formulario css="" action="" method="post" enctype="" token="">

                <div class="form-group">
                    <label for="titulo">Título</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título">
                </div>
                <div class="form-group">
                    <label for="titulo">Descrição</label>
                    <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Descrição">
                </div>
                <button class="btn btn-info">Adicionar</button>
            </formulario>
        </painel>
    </modal>
@endsection
