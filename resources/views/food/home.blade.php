@extends('layouts.app')

@section('content')

<!-- Modal -->
<div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Adicionar ao Carrinho</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <img src="{{ asset('images/food/hamburguer.jpg') }}" class="img-fluid rounded" alt="Lanche">
                        </div>
                        <div class="col-lg-7">
                            <div class="d-flex flex-column h-100 justify-content-between">
                                <div>
                                    <h1 class="font-weight-bold">Nome do Produto</h1>
                                    <h2 class="text-danger">R$ 10,00</h2>
                                    <p class="text-muted">Descrição do produto Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                                <div>
                                    <h3>Quantidade</h3>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-outline-secondary" type="button" id="minusBtn">-</button>
                                        </div>
                                        <input type="text" class="form-control text-center" id="qty" value="1">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary" type="button" id="plusBtn">+</button>
                                        </div>
                                    </div>
                                    <h3>Observações</h3>
                                    <textarea class="form-control" rows="3" id="observations"></textarea>
                                </div>
                                <button id="addCartBtn" class="btn btn-primary btn-lg btn-block mt-3">Adicionar ao Carrinho</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section id="secao-categories" class="sticky-top bg-white border border-light">
    <div class="container">
        <div class="row">
            <div class="col-md-1 d-flex align-items-center justify-content-center">
                <i id="btn-categories-left" class="fa fa-chevron-left text-danger hide"></i>
            </div>
            <div class="col-md-10" style="position: relative;">
                <ul class="nav nav-pills nav-categorias d-flex" style="font-family: Arial, sans-serif; font-size: 20px; overflow-x: auto;">
                    <li class="nav-item active"><a class="nav-link text-danger" data-toggle="pill" href="#destaque">DESTAQUE</a></li>
                    <li class="nav-item"><a class="nav-link text-danger" data-toggle="pill" href="#promocao-do-dia">PROMOÇÃO DO DIA</a></li>
                    <li class="nav-item"><a class="nav-link text-danger" data-toggle="pill" href="#opcoes-mais-em-conta">OPÇÕES MAIS EM CONTA</a></li>
                    <li class="nav-item"><a class="nav-link text-danger" data-toggle="pill" href="#artesanal">ARTESANAL</a></li>
                    <li class="nav-item"><a class="nav-link text-danger" data-toggle="pill" href="#combos">COMBOS</a></li>
                    <!-- Adicione outras categorias aqui -->
                </ul>
            </div>
            <div class="col-md-1 d-flex align-items-center justify-content-center">
                <i id="btn-categories-right" class="fa fa-chevron-right text-danger"></i>
            </div>
        </div>
    </div>
</section>







<div class="accordion" id="foodAccordion">
    <div class="card mt-2 m-3">
        <div class="card-header" id="heading1">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                    DESTAQUE
                </button>
            </h2>
        </div>

        <div id="collapse1" class="collapse show" aria-labelledby="heading1" data-parent="#foodAccordion">
            <div class="card-body">
                <div class="row">
                    <!-- Alimentos da Categoria 1 -->
                
                    <div class="col-lg-3 mb-4">
                        <div class="card" style="cursor: pointer;">
                            <img src="{{ asset('images/food/hamburguer.jpg') }}" class="card-img-top" alt="Lanche">
                            <div class="card-body">
                                <h5 class="card-title">Hambúrguer Clássico</h5>
                                <p class="card-text">R$ 10,00</p>
                                <p class="card-text">Um delicioso hambúrguer preparado com ingredientes frescos e suculentos.</p>
                                <!-- Adicionar botão de adicionar ao carrinho, etc. -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-4">
                        <div class="card" style="cursor: pointer;">
                            <img src="{{ asset('images/food/hamburguer.jpg') }}" class="card-img-top" alt="Lanche">
                            <div class="card-body">
                                <h5 class="card-title">Hambúrguer Vegano</h5>
                                <p class="card-text">R$ 12,00</p>
                                <p class="card-text">Uma opção vegetariana saudável e saborosa, repleta de vegetais frescos e proteínas.</p>
                                <!-- Adicionar botão de adicionar ao carrinho, etc. -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-4">
                        <div class="card" style="cursor: pointer;">
                            <img src="{{ asset('images/food/hamburguer.jpg') }}" class="card-img-top" alt="Lanche">
                            <div class="card-body">
                                <h5 class="card-title">Hambúrguer Duplo</h5>
                                <p class="card-text">R$ 15,00</p>
                                <p class="card-text">Para os amantes de hambúrguer que desejam uma dose extra de sabor e saciedade.</p>
                                <!-- Adicionar botão de adicionar ao carrinho, etc. -->
                            </div>
                        </div>
                    </div>
                    
                    <!-- Mais alimentos da Categoria 1 -->
                </div>
            </div>
        </div>
    </div>
    <!-- Mais categorias -->
</div>

<!-- Adicione mais blocos de código como o acima para outras categorias, se necessário -->


<div class="accordion" id="foodAccordion">
    <div class="card mt-2 m-3">
        <div class="card-header" id="heading1">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                OPÇÕES MAIS EM CONTA
                </button>
            </h2>
        </div>

        <div id="collapse1" class="collapse show" aria-labelledby="heading1" data-parent="#foodAccordion">
            <div class="card-body">
                <div class="row">
                    <!-- Alimentos da Categoria 1 -->
                
                    <div class="col-lg-3 mb-4">
                        <div class="card">
                            <img src="{{ asset('images/food/hamburguer.jpg') }}" class="card-img-top" alt="Lanche">
                            <div class="card-body">
                                <h5 class="card-title">name</h5>
                                <p class="card-text">R$ 10,00</p>
                                <!-- Adicionar botão de adicionar ao carrinho, etc. -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-4">
                        <div class="card">
                            <img src="{{ asset('images/food/hamburguer.jpg') }}" class="card-img-top" alt="Lanche">
                            <div class="card-body">
                                <h5 class="card-title">name</h5>
                                <p class="card-text">R$ 10,00</p>
                                <!-- Adicionar botão de adicionar ao carrinho, etc. -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-4">
                        <div class="card">
                            <img src="{{ asset('images/food/hamburguer.jpg') }}" class="card-img-top" alt="Lanche">
                            <div class="card-body">
                                <h5 class="card-title">name</h5>
                                <p class="card-text">R$ 10,00</p>
                                <!-- Adicionar botão de adicionar ao carrinho, etc. -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-4">
                        <div class="card">
                            <img src="{{ asset('images/food/hamburguer.jpg') }}" class="card-img-top" alt="Lanche">
                            <div class="card-body">
                                <h5 class="card-title">name</h5>
                                <p class="card-text">R$ 10,00</p>
                                <!-- Adicionar botão de adicionar ao carrinho, etc. -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-4">
                        <div class="card">
                            <img src="{{ asset('images/food/hamburguer.jpg') }}" class="card-img-top" alt="Lanche">
                            <div class="card-body">
                                <h5 class="card-title">name</h5>
                                <p class="card-text">R$ 10,00</p>
                                <!-- Adicionar botão de adicionar ao carrinho, etc. -->
                            </div>
                        </div>
                    </div>
                    
                    <!-- Mais alimentos da Categoria 1 -->
                </div>
            </div>
        </div>
    </div>
    <!-- Mais categorias -->
</div>

<div class="accordion" id="foodAccordion">
    <div class="card mt-2 m-3">
        <div class="card-header" id="heading1">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                    Categorias 1
                </button>
            </h2>
        </div>

        <div id="collapse1" class="collapse show" aria-labelledby="heading1" data-parent="#foodAccordion">
            <div class="card-body">
                <div class="row">
                    <!-- Alimentos da Categoria 1 -->
                
                    <div class="col-lg-3 mb-4">
                        <div class="card">
                            <img src="{{ asset('images/food/hamburguer.jpg') }}" class="card-img-top" alt="Lanche">
                            <div class="card-body">
                                <h5 class="card-title">name</h5>
                                <p class="card-text">R$ 10,00</p>
                                <!-- Adicionar botão de adicionar ao carrinho, etc. -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-4">
                        <div class="card">
                            <img src="{{ asset('images/food/hamburguer.jpg') }}" class="card-img-top" alt="Lanche">
                            <div class="card-body">
                                <h5 class="card-title">name</h5>
                                <p class="card-text">R$ 10,00</p>
                                <!-- Adicionar botão de adicionar ao carrinho, etc. -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-4">
                        <div class="card">
                            <img src="{{ asset('images/food/hamburguer.jpg') }}" class="card-img-top" alt="Lanche">
                            <div class="card-body">
                                <h5 class="card-title">name</h5>
                                <p class="card-text">R$ 10,00</p>
                                <!-- Adicionar botão de adicionar ao carrinho, etc. -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-4">
                        <div class="card">
                            <img src="{{ asset('images/food/hamburguer.jpg') }}" class="card-img-top" alt="Lanche">
                            <div class="card-body">
                                <h5 class="card-title">name</h5>
                                <p class="card-text">R$ 10,00</p>
                                <!-- Adicionar botão de adicionar ao carrinho, etc. -->
                            </div>
                        </div>
                    </div>
                    <!-- Mais alimentos da Categoria 1 -->
                </div>
            </div>
        </div>
    </div>
    <!-- Mais categorias -->
</div>




<div class="p-5">
    {{ $foods->appends(request()->input())->links() }}
</div>

<script type="text/javascript">

    document.addEventListener("DOMContentLoaded", function() {
        const modalBtns = document.querySelectorAll('.open-modal');
        const closeModalBtn = document.getElementById('closeModalBtn');

        modalBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                const foodId = btn.getAttribute('data-id');
                // Abre o modal correspondente ao produto clicado
                $('#productModal').modal('show');
            });
        });

        // Adiciona um ouvinte de evento para fechar manualmente o modal ao clicar no botão "Fechar"
        closeModalBtn.addEventListener('click', () => {
            $('#productModal').modal('hide');
        });
    });

    function docReady(fn) {
        if (document.readyState === "complete" || document.readyState === "interactive") {
            fn;
        } else {
            document.addEventListener("DOMContentLoaded", fn);
        }
    }

    docReady(() => {
        const plusBtn = document.getElementById('plusBtn');
        const minusBtn = document.getElementById('minusBtn');
        const qty = document.getElementById('qty');
        const addCartBtn = document.getElementById('addCartBtn');
        const closeModal = document.getElementById('closeModal');

        const modal = document.getElementById('productModal');
        const modalBtns = document.querySelectorAll('.open-modal');

        plusBtn.addEventListener('click', function() {
            qty.innerHTML = Number(qty.innerHTML) + 1
        });

        minusBtn.addEventListener('click', function() {
            if (Number(qty.innerHTML) == 0) return;
            qty.innerHTML = Number(qty.innerHTML) - 1
        });

        addCartBtn.addEventListener('click', function(e) {
            e.target.disabled = true;
            addToCart();
        })

        function openModal() {
            modal.classList.remove('hidden');
        }

        function closeModalFunc() {
            modal.classList.add('hidden');
        }

        modalBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                const foodId = btn.getAttribute('data-id');
                // Aqui você pode fazer uma requisição AJAX para obter os detalhes do produto pelo ID, se necessário.
                openModal();
            });
        });

        closeModal.addEventListener('click', () => {
            closeModalFunc();
        });

        window.addEventListener('click', (e) => {
            if (e.target === modal) {
                closeModalFunc();
            }
        });

        async function addToCart() {
            // Aqui você pode implementar a lógica para adicionar o produto ao carrinho
        }
    })
</script>
@endsection
