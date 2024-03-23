<x-guest-layout>
    <section class="container p-10">
        <h1 class="font-bold text-2xl">Coordonnées de l'acheteur</h1>
        <div class="grid 2xl:grid-cols-2 gap-10">
            <div class="m-0 p-0 my-5">
                <form action="" method="post" class="my-5">
                    <div class="grid md:grid-cols-2 gap-8">

                        <div class="my-2 col-span-2">
                            <label for="" class="block mb-3">Nom et prénoms </label>
                            <input name="name" class="rounded-lg border-2 border-solid w-full"
                                  value="{{ $customer['customer_fullname'] }}" readonly></input>
                        </div>
                        <div class="my-2">
                            <label for="" class="block mb-3"> Adresse email</label>
                            <input name="email" class="rounded-lg border-2 border-solid w-full"
                                  value="{{ $customer['customer_email'] }}" readonly></input>
                        </div>

                        <div class="my-2">
                            <label for="" class="block mb-3"> Numéro de téléphone </label>
                            <input name="phone" class="rounded-lg border-2 border-solid w-full"
                                   value="{{ $customer['customer_phone'] }}" readonly></input>
                        </div>
                    </div>
                </form>
            </div>
            <div class="bg-white p-4 rounded-md shadow-md">
                <h1 class=" font-bold my-5 text-xl">Les détails de l'évènement</h1>

                <div class="grid md:grid-cols-2 gap-5 items-center">
                    <div class="object-contain shrink-0">
                        <img src="{{ asset('storage/' . $event->cover_img) }}"
                             class="w-full max-h-32 object-cover rounded-lg" alt="">
                    </div>
                    <div class="">
                        <h1 class="font-semibold text-lg">
                            {{ $event->name }}
                        </h1>
                        <p class="text-md flex items-start"><span class="mx-2 material-symbols-outlined">
                                location_on
                            </span>{{ $event->location }}
                        </p>
                        <p class="text-md flex items-start mt-4"><span class="mx-2 material-symbols-outlined">
                                calendar_month
                            </span> {{ $event->fmt_date }}</p>
                    </div>
                </div>
                <hr class="border border-dashed my-5">
                <h1 class="my-4 font-semibold text-lg border-b">
                    Récapitulatif de la commande
                </h1>
                <div class="grid md:grid-cols-2 gap-2 mt-3">
                    <p class="text-md"> Type de billet</p>
                    <p class="text-md text-right">{{ $ticket->name }}</p>
                </div>
                <hr class="border border-dashed my-4">
                <div class="grid md:grid-cols-2 gap-2">
                    <p class="text-md"> Le prix du ticket</p>
                    <p class="text-md text-right"> {{ getFormattedPrice($ticket->price) }} FCFA </p>
                </div>
                <hr class="border border-dashed my-4">
                <div class="flex items-center justify-between">
                    <p class="text-md"> Quantité </p>
                    <div class="rounded-lg flex justify-end items-center border-neutral-100 text-center">
                        <div><button class="border-2 rounded-md p-2 px-4 mx-2 qty-button">-</button></div>
                        <div class="mx-2">
                            <input type="text" value="1" class="max-w-20 text-center rounded-md outline-none"
                                   id="quantity-input">
                        </div>
                        <div><button class="border-2 rounded-md p-2 px-4 mx-2 qty-button" id="plus-button">+</button>
                        </div>
                    </div>
                </div>
                <hr class="border border-dashed my-2">
                <div class="grid md:grid-cols-2 gap- my-3">
                    <p class="text-md">Total</p>
                    <p class="text-md text-right font-bold" id="cart-total">{{ getFormattedPrice($ticket->price) }} FCFA
                    </p>
                </div>
            </div>
        </div>
        <div class="flex justify-center py-4">
            <button class=" bg-primary-one text-white rounded-lg py-2 px-3" id="purchase-button"> Lancer le paiement</button>
        </div>
    </section>

    @slot('scripts')

    <script src="https://cdn.kkiapay.me/k.js"></script>
    <script>
        const actionButtons = document.querySelectorAll('.qty-button');
    const quantityInput = document.getElementById('quantity-input');
    const cartTotal = document.getElementById('cart-total');
    const unitPrice = {{ $ticket->price }};
    let total = {{ $ticket->price }};

    actionButtons.forEach(element => {
        element.addEventListener('click', (evt) => {
            evt.preventDefault();
            current = quantityInput.value;
            if(element.getAttribute('id') === 'plus-button') {
                if(quantityInput.value < {{ $ticket->num_left }})
                quantityInput.value++
            } else {
                if(quantityInput.value > 1) {
                    quantityInput.value--
                }
            }
            updateCartTotal()
        })
    });

            quantityInput.addEventListener('change', (evt) => {
                if(quantityInput.value < {{ $ticket->num_left }}) {
                    updateCartTotal();
                } else {
                    Swal.fire({
                        icon: "error",
                        title: "Oops...",
                        text: "Le nombre maximal de tickets est de {{ $ticket->num_left }}",
                    });
                }
            })

            function updateCartTotal() {
                total = (quantityInput.value * unitPrice);
                cartTotal.textContent =  `${new Intl.NumberFormat('br-FR').format(total)} CFA`;
            }
    const purchaseButton = document.getElementById('purchase-button');

    purchaseButton.addEventListener('click', () => {
        purchaseButton.disabled = true;
        openKkiapayWidget({
            amount: total,
            position:"center", 
            callback:"{{ route('guest.payment.success') }}", 
            key:"37f817b0e88e11eea78e89385bd9312c", 
            sandbox: true,
            data: "Paiement de  sur VAL BEAUTÉ",
            url:"{{ asset('assets/images/image1.jpeg') }}",
            position:"center",
            theme:"#c73016"
        })
        setTimeout(() => {
            purchaseButton.disabled = false;
        }, 5000);

    })
    </script>
    @endslot

</x-guest-layout>