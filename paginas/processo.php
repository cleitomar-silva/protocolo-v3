
    <style>

        :root{
            --sidebar-width: 17rem;
        }

        main{
            overflow: hidden;
        }

        .kanban-container{
            width: calc(100vw - var(--sidebar-width));
            max-width: 100%;
            overflow: hidden;
            transition: width .3s ease;
        }

        .kanban-wrapper{
            display: flex;
            gap: 10px;
            overflow-x: auto;
            align-items: flex-start;
            height: calc(100vh - 180px);
        }

        .kanban-column {
            /*
            min-width: 340px;
            background: #f5f6f8;
            border-radius: 12px;
            padding: 12px;
            flex-shrink: 0;*/

            min-width: 340px;
            max-width: 340px;
            background: #f5f6f8;
            border-radius: 12px;
            /* padding: 12px; */
            display: flex;
            flex-direction: column;
            flex-shrink: 0;
        }

        /* Desktop grande */
        @media (min-width: 1200px){
            .kanban-column{
                min-width: 340px;
            }
        }

        /* Notebook */
        @media (max-width: 1199px){
            .kanban-column{
                min-width: 300px;
            }
        }

        /* Tablet */
        @media (max-width: 991px){

            :root{
                --sidebar-width: 0px;
            }

            .kanban-container{
                width: 100%;
            }

            .kanban-column{
                min-width: 280px;
            }
        }

        /* Celular */
        @media (max-width: 576px){

            .kanban-wrapper{
                gap: 10px;
            }

            .kanban-column{
                min-width: 85vw;
            }

            .kanban-card{
                padding: 12px;
            }

            .kanban-header{
                padding: 10px;
                font-size: .9rem;
            }
        }





        /*
           display: flex;
           gap: 16px;
           overflow-x: auto;
           padding-bottom: 10px;

           max-width: calc(100vw - 16rem);


        .kanban-wrapper {

            display: flex;
            gap: 16px;
            overflow-x: auto;
            padding-bottom: 20px;

            max-width: calc(100vw - 16rem);
        }

 */



        .kanban-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 12px;
            margin-bottom: 15px;
            background: #fff;
            border-radius: 10px;
            border-top: 4px solid;
            font-weight: 600;
        }

        .kanban-list {
            /*
            min-height: 500px;
            transition: all .2s ease;
            */
            flex: 1;
            overflow-y: auto;
            overflow-x: hidden;
            min-height: 300px;
            max-height: calc(100vh - 290px);

            padding-right: 4px;
            scrollbar-width: thin;
        }

        .kanban-card {
            background: #fff;
            border-radius: 10px;
            padding: 15px;
            margin-bottom: 12px;
            box-shadow: 0 2px 8px rgba(0,0,0,.06);
            cursor: grab;
            transition: .2s;
        }

        .kanban-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0,0,0,.10);
        }

        .kanban-card:active {
            cursor: grabbing;
        }

        .sortable-ghost {
            opacity: .4;
        }

        .sortable-drag {
            transform: rotate(3deg);
        }

        .drag-over {
            border: 2px dashed #0d6efd;
            border-radius: 10px;
            background: rgba(13,110,253,.05);
        }

        .border-success {
            border-color: #20c997 !important;
        }

        .border-warning {
            border-color: #fd7e14 !important;
        }

        .border-secondary {
            border-color: #83878a !important;

        }

        .border-primary {
            border-color: #6f42c1 !important;
        }
        .fs-14
        {
            font-size: 14px;
        }

        .fs-12
        {
            font-size: 12px;
        }

        .text-warning
        {
            color: #fd7e14 !important;
        }
        .text-primary
        {
            color: #6f42c1 !important;
        }
        .text-success {
            color: #20c997 !important;
        }



    </style>


<main class="container-fluid p-4 kanban-container ">

    <div class="mb-4">

        <p class="text-muted">Processos</p>
    </div>


    <div class="kanban-wrapper">

        <!-- APROVAÇÃO -->
        <div class="kanban-column">

            <div class="kanban-header border-success">
            <span class="fs-14 text-success">
                Aprovação (<span class="count">2</span>)
            </span>
            </div>

            <div class="kanban-list" data-status="aprovacao">

                <div class="kanban-card" data-id="1">
                    <h6 class="fw-bold fs-14">Angela Smith</h6>
                    <span class="badge bg-light text-dark">
                        Administrativo
                    </span>
                    <div class="mt-3 fs-12">
                        <small class="text-muted">
                            VALOR
                        </small>
                        <p><strong>R$ 1.000,00</strong></p>
                    </div>
                </div>
                <div class="kanban-card" data-id="2">
                    <h6 class="fw-bold fs-14">João Coelho</h6>
                    <span class="badge bg-light text-dark">
                        Comercial
                    </span>
                    <div class="mt-3 fs-12">
                        <small class="text-muted">
                            VALOR
                        </small>
                        <p><strong>R$ 7.000,00</strong></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- INFORMAÇÕES FALTANTES -->
        <div class="kanban-column">

            <div class="kanban-header border-warning">
                <span class="fs-14 text-warning">
                    Informações Faltantes (<span class="count">2</span>)
                </span>
            </div>
            <div class="kanban-list" data-status="informacoes">
                <div class="kanban-card" data-id="3">
                    <h6 class="fw-bold fs-14">Douglas Splitter</h6>
                    <span class="badge bg-light text-dark">
                        Comercial
                    </span>
                    <div class="mt-3 fs-12">
                        <small class="text-muted">VALOR</small>
                        <p><strong>R$ 2.000,00</strong></p>
                    </div>
                </div>
                <div class="kanban-card" data-id="4">
                    <h6 class="fw-bold fs-14">Patricia Meyer</h6>
                    <span class="badge bg-light text-dark">
                        Financeiro
                    </span>
                    <div class="mt-3 fs-12">
                        <small class="text-muted">VALOR</small>
                        <p><strong>R$ 8.000,00</strong></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- AGUARDANDO -->
        <div class="kanban-column">

            <div class="kanban-header border-secondary">
                <span class="fs-14 text-secondary">
                    Aguardando Pagamento (<span class="count">2</span>)
                </span>
            </div>

            <div class="kanban-list" data-status="aguardando">
                <div class="kanban-card" data-id="5">
                    <h6 class="fw-bold fs-14">Lucas Memphis</h6>
                    <div class="mt-3 fs-12">
                        <p><strong>R$ 3.000,00</strong></p>
                    </div>
                </div>
                <div class="kanban-card" data-id="6">
                    <h6 class="fw-bold fs-14">Angela Duarte</h6>
                    <div class="mt-3 fs-12">
                        <p><strong>R$ 9.000,00</strong></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- PAGAMENTO -->
        <div class="kanban-column">
            <div class="kanban-header border-primary">
                <span class="fs-14 text-primary">
                    Pagamento (<span class="count">2</span>)
                </span>
            </div>
            <div class="kanban-list" data-status="pagamento">
                <div class="kanban-card" data-id="7">
                    <h6 class="fw-bold fs-14">Anna Miller</h6>
                    <div class="mt-3 fs-12">
                        <p><strong>$ 4.000,00</strong></p>
                    </div>
                </div>
                <div class="kanban-card" data-id="8">
                    <h6 class="fw-bold fs-14">Marcia Torres</h6>
                    <div class="mt-3 fs-12">
                        <p> <strong>R$ 10.000,00</strong></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- PAGO -->
        <div class="kanban-column">
            <div class="kanban-header border-success">
                <span class="fs-14 text-success">
                    Pago (<span class="count">2</span>)
                </span>
            </div>
            <div class="kanban-list" data-status="pago">
                <div class="kanban-card" data-id="9">
                    <h6 class="fw-bold fs-14">Walter Chang</h6>

                    <div class="mt-3 fs-12">
                        <p> <strong>R$ 5.000,00</strong></p>
                    </div>
                </div>
                <div class="kanban-card" data-id="10">
                    <h6 class="fw-bold">Luiza Maria</h6>
                    <div class="mt-3">
                        <h6>R$ 11.000,00</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>



</main>
<!--
<script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.2/Sortable.min.js"></script> -->
<script src="node_modules/sortablejs/Sortable.min.js"></script>


<script>



    document.addEventListener('DOMContentLoaded', () => {

        const lists = document.querySelectorAll('.kanban-list');

        lists.forEach(list => {

            new Sortable(list, {

                group: 'kanban',

                animation: 200,

                ghostClass: 'sortable-ghost',

                dragClass: 'sortable-drag',

                onMove(evt) {

                    document
                        .querySelectorAll('.kanban-list')
                        .forEach(el => el.classList.remove('drag-over'));

                    evt.to.classList.add('drag-over');
                },

                onEnd(evt) {

                    document
                        .querySelectorAll('.kanban-list')
                        .forEach(el => el.classList.remove('drag-over'));

                    atualizarContadores();

                    const cardId = evt.item.dataset.id;
                    const novoStatus = evt.to.dataset.status;
                    const posicao = evt.newIndex;

                    console.log({
                        cardId,
                        novoStatus,
                        posicao
                    });

                    // Exemplo para salvar no backend
                    /*
                    fetch('/processos/mover', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify({
                            id: cardId,
                            status: novoStatus,
                            posicao: posicao
                        })
                    });
                    */
                }

            });

        });

        atualizarContadores();

    });

    function atualizarContadores() {

        document
            .querySelectorAll('.kanban-column')
            .forEach(coluna => {

                const total =
                    coluna.querySelectorAll('.kanban-card').length;

                coluna.querySelector('.count').textContent = total;

            });
    }

</script>

