<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>FACTURE {{ $order->code}}</title>
    
    <style>
    .invoice-box {
        max-width: 100%;
        max-height: 100%;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, .15);
        font-size: 16px;
        line-height: 23px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
    }
    
    .invoice-box table {
        padding: 12px 16px;
        width: 100%;
        line-height: inherit;
        text-align: left;
    }

    .top{
        display: flex;
        justify-content: space-between;
        width: auto;
        border-bottom: 1px solid blue;
        font-size: 16px;
        padding: 0;
        padding: 0 30px;
        margin-bottom: 12px;
    }

    .products-list tr.header td{
        background: #eee;
        border-bottom: 1px solid #ddd;
        border-top: 1px solid #ddd;
        font-weight: bold;
    }

    .products-list tr td{
        padding: 6px;
    }

    .products-list tr.items td{
        padding: 8px;
        border-bottom: 1px solid #ddd;
    }
    
    </style>
</head>

<body>
    <div class="invoice-box">
        <table>
            <tr>
                <td colspan="2" style="border-bottom: 1px solid #ddd; padding: 0px">
                    <h3>ELLEETLUIPARFUMS</h3>
                </td>
            </tr>
            <tr>
                <td>
                    
                </td>
            </tr>
        </table>
        <table cellpadding="0" cellspacing="0">
            <tr style="margin-bottom: 100px">
                <td colspan="2" style="text-align: left;">
                    <strong>
                        ELLEETLUIPARFUMS <br>
                        31 bp 761 abj 31<br>
                        (+225) 23 46 23 32 / 84 87 48 10<br><br><br>    
                    </strong>
                </td>
            </tr>
            <tr>
                <td>
                    <strong>Envoyé à</strong><br><br>
                    <strong>{{ Str::ucfirst($order->nom) }} {{ Str::ucfirst($order->prenom) }}</strong> <br>
                    {{ $order->phone1 }}, {{ $order->phone2 }} <br>
                    {{ $order->adresse }}<br>
                    {{ $order->ville }}, {{ $order->region }}
                </td>
                <td style="text-align: right">
                    <strong>Facture No #{{ $order->code }}</strong> <br>                    
                    <strong>Date:</strong>  {{ date('d/m/Y', strtotime($order->updated_at)) }}<br>
                </td>
            </tr>
        </table>
        <table class="products-list" cellspacing="0" cellpadding="0">
                <tr class="header">
                    <td>QTÉ</td>
                    <td>DESIGNATION</td>
                    <td>PRIX UNITAIR</td>
                    <td style="text-align: right">PRIX TOTAL</td>
                </tr>
                @foreach($products as $product)
                    <tr class="items" style="border: 1px solid">
                        <td width="5%">{{ $product->pivot->quantity }} </td>
                        <td width="30%">{{ $product->name }}</td>
                        <td>{{ $product->price }} {{ config('settings.currency_symbol') }}</td>
                        <td style="text-align: right">{{ $product->pivot->total_price }} {{ config('settings.currency_symbol') }}</td>
                    </tr>
                @endforeach
        
                <tr>
                   <td colspan="2"></td>
                   <td width="20%" style="border-bottom: 2px solid; padding: 10px"><strong>Total</strong></td>
                   <td width="20%" style="border-bottom: 2px solid; padding: 10px; text-align:right">{{ $order->amount }} {{ config('settings.currency_symbol') }}</td>
               </tr>
        </table>
         <table>
            <tr>
                <td style="border-top: 1px solid #ddd; padding: 10px 0px; text-align: center">
                    <span><strong>Email: elleetluiparfumsinfo@gmail.com</strong></span>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>