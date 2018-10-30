@extends('cliente.painel_cliente')

@section('title')
    Detalhes do Pedido
@endsection

@section('content')
    <!-- Page Content -->
    <div class="container-fluid">
        @include('components.painel_navbar')

        <div class="row">

            <div class="col-md-12">

                @include('components.info_pedido', ['pedido' => $pedido, 'links' => $links])

                <div class="card card-outline-secondary my-4">
                    <div class="card-header">
                        Ofertas
                    </div>
                    <div class="card-body">
                        @foreach($ofertas as $oferta)
                            @include('components.info_oferta', ['oferta' => $oferta])
                        @endforeach
                    </div>
                </div>

            </div>

        </div>

    </div>

@endsection
