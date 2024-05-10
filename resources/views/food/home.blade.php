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
                                </div>
                                <button id="addCartBtn" class="btn btn-primary btn-lg btn-block">Adicionar ao Carrinho</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="mx-8">
    <div class="flex flex-row">
        <div class="flex flex-row space-x-4 flex-grow">
            <span class="font-weight-bold sort-font my-auto">Categorias</span>
            <div class="py-1 px-3 border-solid border-1 border-slate-300 rounded-xl text-center bg-white">
                <a href="/porcoes" class="sort-font">Porções</a>
            </div>
            <div class="py-1 px-3 border-solid border-1 border-slate-300 rounded-xl text-center bg-white">
                <a href="/hamburguers" class="sort-font">Hamburguers</a>
            </div>
            <div class="py-1 px-3 border-solid border-1 border-slate-300 rounded-xl text-center bg-white">
                <a href="/acai" class="sort-font">Açaí</a>
            </div>
            <div class="py-1 px-3 border-solid border-1 border-slate-300 rounded-xl text-center bg-white">
                <a href="/bebidas" class="sort-font">Bebidas</a>
            </div>
        </div>
    </div>
</div>

<div class="p-10 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-4 gap-5">
    @foreach($foods as $data)
    <div class="rounded-md overflow-hidden shadow-md border-1 border-gray-100">
        <button class="open-modal focus:outline-none" data-id="{{ $data['id'] }}">
            <img class="h-48 w-full object-cover" src="{{ $data['picture'] }}" alt="Mountain">
            <div class="p-4">
                <div class="font-bold text-xl mb-2">{{ $data['name'] }}</div>
                <p class="text-gray-700 text-base">R$ {{ $data['price'] }}</p>
            </div>
        </button>
    </div>
    @endforeach
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
