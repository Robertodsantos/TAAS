<x-layout title="Chamados">

    <a class="btn btn-dark mb-2" href="/chamados/criar">Abrir Chamado</a>

      <div class="row">
        <div class="col-2">
            <ul class="list-group">
                @foreach ($chamados as $chamado)
                    <label for="">Nome</label>
                    <li class="list-group-item">{{ $chamado->nome }}</li>
                @endforeach
            </ul>
        </div>

        <div class="col-3">
            <ul class="list-group">
                @foreach ($chamados as $chamado)
                    <label for="">Email</label>
                    <li class="list-group-item">{{ $chamado->email }}</li>
                @endforeach
            </ul>
        </div>

        <div class="col-2">
          <ul class="list-group">
              @foreach ($chamados as $chamado)
                  <label for="">Celular</label>
                  <li class="list-group-item">{{ $chamado->celular }}</li>
              @endforeach
          </ul>
        </div>

        <div class="col-5">
          <ul class="list-group">
              @foreach ($chamados as $chamado)
                  <label for="">Problema Relatado</label>
                  <li class="list-group-item">{{ $chamado->problema }}</li>
              @endforeach
          </ul>
        </div>
      </div>
</x-layout>
