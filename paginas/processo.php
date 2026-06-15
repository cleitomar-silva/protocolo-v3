
<link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">
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
        border-radius: 2px;
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
    /*
        MENU
    */
    .topbar {
        height: 70px;
        width: 100%;
        background: #ffffff;
        border-bottom: 1px solid #e5e7eb;

        display: flex;
        justify-content: space-between;
        align-items: center;

        padding: 0 24px;
    }

    .menu-left {
        display: flex;
        align-items: center;
        gap: 28px;
    }

    .logo-area {
        height: 70px;
        display: flex;
        align-items: center;
        gap: 10px;

        padding: 0 8px;
        font-weight: 600;
        cursor: pointer;

        position: relative;
    }

    .logo-area.active::after {
        content: "";
        position: absolute;
        bottom: 0;
        left: 0;

        width: 100%;
        height: 3px;

        background: #111827;
    }

    .top-menu {
        display: flex;
        gap: 24px;
    }

    .menu-item-c {
        text-decoration: none;
        color: #6b7280;

        display: flex;
        align-items: center;
        gap: 8px;

        font-size: 15px;
        /* transition: .2s; */

        position: relative;

        padding: 24px 0;
        transition: color .25s ease;
    }

    .menu-item-c::after {
        content: "";

        position: absolute;
        left: 50%;
        bottom: 0;

        width: 0;
        height: 3px;

        background: #111827;
        border-radius: 999px;

        transform: translateX(-50%);
        transition: width .25s ease;
    }

    .menu-item-c:hover {
        color: #111827!important;



    }
    .menu-item-c:hover::after {
        width: 100%;
    }



    .menu-right {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .search-box {
        width: 280px;
        height: 42px;
        border-radius: 24px;
        background: #f3f4f6;

        display: flex;
        align-items: center;

        padding: 0 14px;
        gap: 10px;
    }

    .search-box input {
        border: none;
        background: transparent;
        outline: none;
        width: 100%;
    }

    .small-icon {
        font-size: 12px;
    }
    @media (max-width: 900px) {
        .top-menu {
            display: none;
        }

        .search-box {
            width: 180px;
        }
    }

    .search-btn {
        border: none;
        background: transparent;
        cursor: pointer;

        display: flex;
        align-items: center;
        justify-content: center;

        padding: 0;
        font-size: 16px;
    }
    .filter-btn{
        width: 42px;
        height: 42px;

        border: none;
        border-radius: 12px;

        background: #f3f4f6;
        color: #4b5563;

        display: flex;
        align-items: center;
        justify-content: center;

        cursor: pointer;
        transition: all .2s ease;
    }

    .filter-btn i{
        font-size: 18px;
    }

    .filter-btn:hover{
        background: #e5e7eb;
        color: #111827;
        transform: translateY(-1px);
    }

    .filter-btn:active{
        transform: scale(.97);
    }

</style>

<header class="topbar">
    <div class="menu-left">

        <nav class="top-menu">
            <a href="#" class="menu-item-c">
                <i class="bi bi-grid"></i>
                Relatórios
            </a>

            <a href="#" class="menu-item-c">
                <i class="bi bi-card-list"></i>
                Novo
            </a>

            <a href="#" class="menu-item-c">
                <i class="bi bi-arrow-left-right"></i>
                Movimentação
            </a>

            <a href="#" class="menu-item-c">
                <i class="bi bi-pie-chart"></i>
                Painéis
            </a>
        </nav>
    </div>

    <div class="menu-right">
        <form class="search-box" action="">
            <input type="text"  placeholder="Procurar cards">
            <button type="submit" class="search-btn">
                <i class="bi bi-search"></i>
            </button>
        </form>
        <button type="button" class="filter-btn" title="Filtros">
            <i class="bi bi-funnel-fill"></i>
        </button>
    </div>
</header>
<main class="container-fluid p-4 pt-2 kanban-container ">


    <div class="kanban-wrapper">

        <!-- Pendente -->
        <div class="kanban-column">

            <div class="kanban-header border-primary">
                <span class="fs-14 text-primary">
                    Pendente (<span class="count">2</span>)
                </span>
            </div>

            <div class="kanban-list" data-status="pendente">

                <div class="kanban-card" data-id="1">
                    <h6 class="fw-bold fs-14">Recurso de Glosa</h6>
                    <span class="badge bg-light text-dark">
                        202402070036
                    </span>
                    <div class="mt-2 fs-12">
                        <small class="text-muted">
                            SETOR
                        </small>
                        <p><strong>Financeiro</strong></p>
                    </div>
                    <div class=" fs-12">
                        <small class="text-muted">
                            PESSOA
                        </small>
                        <p><strong>Angela Smith</strong></p>
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

        <!-- Em andamento -->
        <div class="kanban-column">

            <div class="kanban-header border-warning">
                <span class="fs-14 text-warning">
                    Em andamento (<span class="count">2</span>)
                </span>
            </div>
            <div class="kanban-list" data-status="em-andamento">
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

        <!-- Bloqueado -->
        <div class="kanban-column">

            <div class="kanban-header border-danger">
                <span class="fs-14 text-danger">
                    Bloqueado (<span class="count">2</span>)
                </span>
            </div>

            <div class="kanban-list" data-status="bloqueado">
                <div class="kanban-card" data-id="5">
                    <h6 class="fw-bold fs-14">Lucas Memphis</h6>
                    <span class="badge bg-light text-dark">
                        Logistica
                    </span>
                    <div class="mt-3 fs-12">
                        <p><strong>R$ 3.000,00</strong></p>
                    </div>
                </div>
                <div class="kanban-card" data-id="6">
                    <h6 class="fw-bold fs-14">Angela Duarte</h6>
                    <span class="badge bg-light text-dark">
                        Contas medicas
                    </span>
                    <div class="mt-3 fs-12">
                        <p><strong>R$ 9.000,00</strong></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Finalizado -->
        <div class="kanban-column">
            <div class="kanban-header border-success">
                <span class="fs-14 text-success">
                    Finalizado (<span class="count">2</span>)
                </span>
            </div>
            <div class="kanban-list" data-status="finalizado">
                <div class="kanban-card" data-id="7">
                    <h6 class="fw-bold fs-14">Anna Miller</h6>
                    <span class="badge bg-light text-dark">
                        Tecnologia da informação
                    </span>
                    <div class="mt-3 fs-12">
                        <p><strong>$ 4.000,00</strong></p>
                    </div>
                </div>
                <div class="kanban-card" data-id="8">
                    <h6 class="fw-bold fs-14">Marcia Torres</h6>
                    <span class="badge bg-light text-dark">
                        Operacional
                    </span>
                    <div class="mt-3 fs-12">
                        <p> <strong>R$ 10.000,00</strong></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Cancelado -->
        <div class="kanban-column">
            <div class="kanban-header border-secondary">
                <span class="fs-14 text-secondary">
                    Cancelado (<span class="count">2</span>)
                </span>
            </div>
            <div class="kanban-list" data-status="cancelado">
                <div class="kanban-card" data-id="9">
                    <h6 class="fw-bold fs-14">Walter Chang</h6>
                    <span class="badge bg-light text-dark">
                        RH
                    </span>
                    <div class="mt-3 fs-12">
                        <p> <strong>R$ 5.000,00</strong></p>
                    </div>
                </div>
                <div class="kanban-card" data-id="10">
                    <h6 class="fw-bold">Luiza Maria</h6>
                    <span class="badge bg-light text-dark">
                        Atendimento
                    </span>
                    <div class="mt-3">
                        <h6>R$ 11.000,00</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>



</main>

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

