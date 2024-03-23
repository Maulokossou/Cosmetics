<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ $invoice->name }}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <style type="text/css" media="screen">
        html {
            font-family: sans-serif;
            line-height: 1.15;
            margin: 0;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            text-align: left;
            background-color: #fff;
            font-size: 10px;
            margin: 36pt;
        }

        .page-title {
            background: #1F7300;
            border-radius: 0.25em;
            color: #FFF;
            margin: 0 0 1em;
            padding: 0.5em 0;
            font-size: 19px;
            text-align: center;
        }

        .notes-element {
            padding: 5px;
            font-size: 16px
        }

        .invoice-section {
            background: #b0cca6
        }

        .invoice-footer {
            border-top: 2px solid #212529;
            margin-top: 20px;
        }

        h4 {
            margin-top: 0;
            margin-bottom: 0.5rem;
        }

        p {
            margin-top: 0;
            margin-bottom: 1rem;
        }

        strong {
            font-weight: bolder;
        }

        img {
            vertical-align: middle;
            border-style: none;
        }

        table {
            border-collapse: collapse;
        }

        th {
            text-align: inherit;
        }

        h4,
        .h4 {
            margin-bottom: 0.5rem;
            font-weight: 500;
            line-height: 1.2;
        }

        .align-middle {
            vertical-align: middle;
        }

        h4,
        .h4 {
            font-size: 1.5rem;
        }

        .table {
            width: 100%;
            margin-bottom: 1rem;
            color: #212529;
        }

        .table th,
        .table td {
            padding: 0.75rem;
            /* vertical-align: top; */
        }

        .table.table-items td {
            border-top: 1px solid #dee2e6;
        }

        .table thead th {
            vertical-align: bottom;
            border-bottom: 2px solid #dee2e6;
        }

        .mt-5 {
            margin-top: 3rem !important;
        }

        /* .pr-0,
        .px-0 {
            padding-right: 0 !important;
        }

        .pl-0,
        .px-0 {
            padding-left: 0 !important;
        } */

        .text-right {
            text-align: right !important;
        }

        .text-center {
            text-align: center !important;
        }

        .text-uppercase {
            text-transform: uppercase !important;
        }

        * {
            font-family: "DejaVu Sans";
        }

        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        table,
        th,
        tr,
        td,
        p,
        div {
            line-height: 1.1;
        }

        .party-header {
            font-size: 1.5rem;
            font-weight: 400;
        }

        .total-amount {
            font-size: 12px;
            font-weight: 700;
        }

        .border-0 {
            border: none !important;
        }

        .cool-gray {
            color: #6B7280;
        }
    </style>
</head>

<body>
    {{-- Header --}}
    {{-- <div id="invoice-header">
        @if($invoice->logo)
        <img src="{{ $invoice->getLogo() }}" alt="logo" height="100">
        @endif
    </div> --}}
    <table class="table">
        <tbody>
            <tr>
                <td class="border-0 pl-0" width="50%">
                    @if($invoice->logo)
                    <img src="{{ $invoice->getLogo() }}" alt="logo" height="100">
                    @endif
                </td>
                <td class="border-0 pl-0 align-middle">
                    <p>Facture : <strong>{{ $invoice->getSerialNumber() }}</strong></p>
                    <p>Date : <strong>{{ $invoice->getDate() }}</strong></p>
                    <p>Statut : <strong>Payé</strong></p>
                </td>
            </tr>
        </tbody>
    </table>

    <h1 class="page-title">REÇU DE PAIEMENT</h1>

    {{-- Seller - Buyer --}}
    <table class="table">
        <thead>
            <tr>
                <th class="border-0 pl-0 party-header" width="48.5%">
                    Vendeur
                </th>
                <th class="border-0" width="3%"></th>
                <th class="border-0 pl-0 party-header">
                    Client
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="px-0" style="
                border: 1px solid;
                padding: 10px;
                ">
                    @if($invoice->seller->name)
                    <p class="seller-name">
                        <strong>{{ $invoice->seller->name }}</strong>
                    </p>
                    @endif

                    @foreach($invoice->seller->custom_fields as $key => $value)
                    <p class="seller-custom-field">
                        {{ ucfirst($key) }}: {{ $value }}
                    </p>
                    @endforeach
                </td>
                <td class="border-0"></td>
                <td class="px-0" style="
                border: 1px solid;
                padding: 10px;
            ">
                    @if($invoice->buyer->name)
                    <p class="buyer-name">
                        <strong>{{ $invoice->buyer->name }}</strong>
                    </p>
                    @endif

                    @foreach($invoice->buyer->custom_fields as $key => $value)
                    <p class="buyer-custom-field">
                        {{ ucfirst($key) }}: {{ $value }}
                    </p>
                    @endforeach
                </td>
            </tr>
        </tbody>
    </table>

    {{-- Table --}}
    <table class="table table-items">
        <thead>
            <tr class="invoice-section">
                <th scope="col" class="border-0 pl-0">Item</th>
                <th scope="col" class="text-center border-0">Qté</th>
                <th scope="col" class="text-right border-0">Prix</th>
                <th scope="col" class="text-right border-0 pr-0">Sous total</th>
            </tr>
        </thead>
        <tbody>
            {{-- Items --}}
            @foreach($invoice->items as $item)
            <tr>
                <td class="pl-0">
                    {{ $item->title }}
                </td>
                <td class="text-center">{{ $item->quantity }}</td>
                <td class="text-right">
                    {{ $invoice->formatCurrency($item->price_per_unit) }}
                </td>
                <td class="text-right pr-0">
                    {{ $invoice->formatCurrency($item->sub_total_price) }}
                </td>
            </tr>
            @endforeach
            {{-- Summary --}}
            <tr>
                <td colspan="{{ $invoice->table_columns - 2 }}" class="border-0"></td>
                <td class="text-right pl-0">Prix total :</td>
                <td class="text-right pr-0 total-amount">
                    {{ $invoice->formatCurrency($invoice->total_amount) }}
                </td>
            </tr>
        </tbody>
    </table>

    <h1 class="notes-element invoice-section">Répartition des paiements</h1>
    <table class="table table-items" style="margin-bottom: 50px;">
        <thead>
            <tr>
                <th scope="col" class="border-0 pl-0">Référence</th>
                <th scope="col" class="text-center border-0">Date</th>
                <th scope="col" class="text-right border-0">Source</th>
                <th scope="col" class="text-right border-0 pr-0">Montant</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="pl-0">
                    {{ $invoice->getCustomData()->transactionId }}
                </td>
                <td class="text-center">{{ $invoice->getCustomData()->performedAt }}</td>
                <td class="text-right">
                    {{ $invoice->getCustomData()->source }}
                </td>
                <td class="text-right pr-0">
                    {{ $invoice->getCustomData()->amount }}
                </td>
            </tr>
        </tbody>
    </table>

    <p>
        Arrêté la présente facture à la somme de : {{ $invoice->getTotalAmountInWords() }}
    </p>

    <div class="invoice-footer">
        <p class="text-center" style="margin-top: 30px">VALBEAUTE</p>
        <p class="text-center">&copy; 2024</p>
    </div>

</body>

</html>