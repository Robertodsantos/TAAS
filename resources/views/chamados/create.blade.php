<x-layout title="Abrir Chamado">
    <form action="/chamados/salvar" method="post">
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" id="nome" name="nome" class="form-control">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" id="email" name="email" class="form-control">
            <label for="celular" class="form-label">Celular</label>
            <input type="text" id="celular" name="celular" class="form-control">
            <label for="problema" class="form-label">Problema</label>
            <input type="text" id="problema" name="problema" class="form-control">
        </div>


        <button type="submit" class="btn btn-primary">Criar Chamado</button>

    </form>
    <div>
        <div class="mt-4">
            <button type="button" class="btn btn-outline-warning" onClick="copiarTexto()">Chamado via whatsapp</button>
        </div>
    <!-- <h9><strong>Para contato segue o meu WhtasApp</strong></h9> -->
    <a class="whatsapp-link"
       href="https://api.whatsapp.com/send?phone=5511938005675&text=Aberto%20o%20Chamado=%20Problema%20na%20maquina%20recepção"
       target="_blank">
        <!--<i width="120" class="fa fa-whatsapp"></i>-->
        <i width="120" class="fa-brands fa-whatsapp fa-5x"></i>
    </a>
    </div>

</x-layout>
