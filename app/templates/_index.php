<?php
require_once '../vendor/autoload.php';

$title = 'Posso?';
$description = 'Algumas respostas a algumas perguntas se posso?';
include 'includes/head.php';

?>

<div class="container">
    <div class="row mt-3 border-bottom">
        <div class="col-12 text-center">
            <p class="pp">"Posso (...)* se estiver <strong>infectado</strong>?"</p>
            <p class="nop">NÃO</p>
        </div>
    </div>

    <div class="row mt-5 border-bottom">
        <div class="col-12 text-center">
            <p class="pp">"Posso (...)* se estiver a <strong>aguardar teste</strong>?"</p>
            <p class="nop">NÃO</p>
        </div>
    </div>

    <div class="row mt-5 border-bottom">
        <div class="col-12 text-center">
            <p class="pp">"Posso (...)* se estiver a <strong>aguardar resultado de teste</strong>?"</p>
            <p class="nop">NÃO</p>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <p>Os campos assinalados por <strong>*</strong> podem incluir-se:</p>
            <ul>
                <li>Ir às compras</li>
                <li>Ir ao centro de saúde</li>
                <li>Ir à farmácia</li>
                <li>Ir visitar os pais</li>
                <li>Ir visitar alguém</li>
                <li>Ir viajar de transportes públicos</li>
                <li>Ir a locais públicos</li>
                <li>Sair de casa</li>
            </ul>
        </div>
    </div>
</div>

<?php include 'includes/foot.php'; ?>