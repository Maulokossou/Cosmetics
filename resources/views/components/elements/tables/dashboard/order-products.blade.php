<div class="w-full overflow-hidden rounded-lg shadow-xs border dark:border-gray-700">
    <div class="w-full overflow-x-auto">
        <table
            class=" w-full border-collapse border border-slate-400 dark:border-slate-500 bg-white dark:bg-slate-800 shadow-sm rounded-md whitespace-no-wrap">
            <thead class="bg-slate-50 dark:bg-slate-700">
                <tr>
                    <th
                        class="text-center border border-slate-300 dark:border-slate-600 font-semibold p-4 text-slate-900 dark:text-slate-200 ">
                        Sérial</th>
                    <th
                        class="text-center border border-slate-300 dark:border-slate-600 font-semibold p-4 text-slate-900 dark:text-slate-200 ">
                        Produit</th>
                    <th
                        class="text-center border border-slate-300 dark:border-slate-600 font-semibold p-4 text-slate-900 dark:text-slate-200 ">
                        Nom</th>
                    <th
                        class="text-center border border-slate-300 dark:border-slate-600 font-semibold p-4 text-slate-900 dark:text-slate-200 ">
                        Prix</th>
                    <th
                        class="text-center border border-slate-300 dark:border-slate-600 font-semibold p-4 text-slate-900 dark:text-slate-200 ">
                        Marque</th>
                    <th
                        class="text-center border border-slate-300 dark:border-slate-600 font-semibold p-4 text-slate-900 dark:text-slate-200 ">
                        Quantité</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($order->cart->cartlines as $cartline)
                @php
                $product = $cartline->product
                @endphp
                <tr>
                    <td
                        class="text-center border border-slate-300 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">
                        {{ $product->id }}
                    </td>
                    <td
                        class="text-center border border-slate-300 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">
                        <img src="{{ url('storage/' . $product->image)  }}" alt=""
                            class="w-28 h-28 object-cover mx-auto">
                    </td>
                    <td
                        class="text-center border border-slate-300 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">
                        {{ $product->name }}
                    </td>
                    <td
                        class="text-center border border-slate-300 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">
                        {{moneyFormat($product->price)}} FCFA</td>
                    <td
                        class="text-center border border-slate-300 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">
                        {{ $product->brand->name }}
                    </td>
                    <td
                        class="text-center border border-slate-300 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">
                        {{ $cartline->quantity }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>