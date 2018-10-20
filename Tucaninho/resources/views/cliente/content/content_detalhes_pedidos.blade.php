@extends('cliente.painel_cliente')

@section('content')
  <!-- Page Content -->
  <div class="container-fluid">
    @include('components.painel_navbar')

    <div class="row">

      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div class="card mt-4">
          <div class="card-body">
            <h3 class="card-title">Pedido massa</h3>
            <h4>R$200,99</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente dicta fugit fugiat hic aliquam itaque facere, soluta. Totam id dolores, sint aperiam sequi pariatur praesentium animi perspiciatis molestias iure, ducimus!</p>

          </div>
        </div>
        <!-- /.card -->

        <div class="card card-outline-secondary my-4">
          <div class="card-header">
            Ofertas
          </div>
          <div class="card-body">
            <p class="h4">R$150,00</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
            <small class="text-muted float-right">Posted by Anonymous on 3/1/17</small>
            <br>
            <button type="button" class="btn btn-warning">Aceitar Oferta</button>
            <hr>
            <p class="h4">R$149,99</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
            <small class="text-muted float-right">Posted by Anonymous on 3/1/17</small>
            <br>
            <button type="button" class="btn btn-warning">Aceitar Oferta</button>
            <hr>
            <p class="h4">R$145,80</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
            <small class="text-muted  float-right">Posted by Anonymous on 3/1/17</small>
            <br>
            <button type="button" class="btn btn-warning">Aceitar Oferta</button>
            <hr>
            <!-- <a href="#" class="btn btn-success">Fazer uma oferta</a> -->
          </div>
        </div>
        <!-- /.card -->

      </div>
      <!-- /.col-lg-9 -->

    </div>

  </div>
  <!-- /.container -->
@endsection
