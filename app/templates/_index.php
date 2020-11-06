<?php
require_once '../vendor/autoload.php';

$title = 'Posso?';
$description = 'Algumas respostas a algumas perguntas se posso?';
include 'includes/head.php';

$config = HTMLPurifier_Config::createDefault();
$purifier = new HTMLPurifier($config);

$word = $_GET['posso'] ? htmlentities($purifier->purify($_GET['posso']), ENT_QUOTES, 'UTF-8') : false;

$troll = false;
if(preg_match('/casa|isolamento|isolado|confinado|confinamento/i', $word)){
    $troll = true;
}

?>

<div class="container">
    <?php if($troll): ?>
        <div class="row mt-3">
            <div class="col-12 text-center">
                <p class="nop">Não te estiques!</p>
                <p class="pp">Se estás <strong>infectado</strong>, <strong>a aguardar teste</strong> ou <strong>a aguardar resultado do teste</strong> FICA EM ISOLAMENTO!</p>
            </div>
        </div>
    <?php else: ?>
        <?php if($word): ?>
            <div class="row mt-3 border-bottom">
                <div class="col-12 text-center">
                    <p class="pp">"Posso <u><?= $word ?></u> se estiver <strong>infectado</strong>?"</p>
                    <p class="nop">NÃO</p>
                </div>
            </div>

            <div class="row mt-5 border-bottom">
                <div class="col-12 text-center">
                    <p class="pp">"Posso <u><?= $word ?></u> se estiver a <strong>aguardar teste</strong>?"</p>
                    <p class="nop">NÃO</p>
                </div>
            </div>

            <div class="row mt-5 border-bottom">
                <div class="col-12 text-center">
                    <p class="pp">"Posso <u><?= $word ?></u> se estiver a <strong>aguardar resultado de teste</strong>?"</p>
                    <p class="nop">NÃO</p>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-12 text-center">
                    <form method="get">
                        <p class="mb-0 pp">Tens dúvidas? Pergunta o que podes fazer:</p>

                        <!-- Material input -->
                        <div class="md-form mt-0">
                            <input type="text" id="posso" name="posso" class="form-control">
                            <label for="posso">ir às compras</label>
                        </div>

                        <button type="submit" class="btn btn-primary">Perguntar</button>

                    </form>
                </div>
            </div>
        <?php else: ?>
            <div class="row mt-5">
                <div class="col-12 text-center">
                    <form method="get">
                        <p class="mb-0 pp">Tens dúvidas? Pergunta o que podes fazer:</p>

                        <!-- Material input -->
                        <div class="md-form mt-0">
                            <input type="text" id="posso" name="posso" class="form-control">
                            <label for="posso">ir às compras</label>
                        </div>

                        <button type="submit" class="btn btn-primary">Perguntar</button>

                    </form>
                </div>
            </div>

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


            <div class="row mt-5">
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
        <?php endif; ?>
    <?php endif; ?>


</div>

<?php include 'includes/foot.php'; ?>