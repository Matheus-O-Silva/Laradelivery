@extends('layouts.app')

@section('content')

<!-- Modal -->
<div id="productModal" class="hidden fixed z-10 inset-0 overflow-y-auto">
    <div class="flex items-center justify-center min-h-screen">
        <div class="relative">
            <div class="absolute top-0 right-0 pt-2 pr-4">
                <button id="closeModal" class="text-gray-500 hover:text-gray-700 focus:outline-none">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="bg-white shadow-lg rounded-lg overflow-hidden w-full max-w-3xl">
                <div class="px-4 py-5 sm:px-6">
                    <h3 class="text-lg font-medium text-gray-900">name</h3>
                    <p class="mt-1 max-w-2xl text-sm text-gray-500">description</p>
                </div>
                <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
                    <dl class="sm:divide-y sm:divide-gray-200">
                        <div class="sm:flex sm:items-center sm:justify-between">
                            <dt class="text-sm font-medium text-gray-500">Preço</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">R$ price</dd>
                        </div>
                        <div class="mt-6 sm:flex sm:items-center sm:justify-between">
                            <dt class="text-sm font-medium text-gray-500">Quantidade</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                <div class="flex items-center">
                                    <button id="minusBtn" class="py-2 px-3 font-bold border-r-2">-</button>
                                    <p id="qty" class="py-2 px-3 text-sm m-0">1</p>
                                    <button id="plusBtn" class="py-2 px-3 font-bold border-l-2">+</button>
                                </div>
                            </dd>
                        </div>
                    </dl>
                </div>
                <div class="bg-gray-50 px-4 py-4 sm:px-6 sm:flex sm:flex-row-reverse">
                    <button id="addCartBtn" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-600 text-base font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:ml-3 sm:w-auto sm:text-sm">
                        Adicionar ao Carrinho
                    </button>
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
