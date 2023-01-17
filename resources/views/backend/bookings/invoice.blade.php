<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Panagea - Premium site template for travel agencies, hotels and restaurant listing.">
    <meta name="author" content="Ansonika">
    <title>Panagea | Premium site template for travel agencies, hotels and restaurant listing.</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="/frontend/img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="/frontend/img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="/frontend/img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="/frontend/img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="/frontend/css/bootstrap.min.css" rel="stylesheet">
    <link href="/frontend/css/style.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="/frontend/css/custom.css" rel="stylesheet">

    <style>
        .invoice-title h2, .invoice-title h3 {
            display: inline-block;
        }

        .table > tbody > tr > .no-line {
            border-top: none;
        }

        .table > thead > tr > .no-line {
            border-bottom: none;
        }

        .table > tbody > tr > .thick-line {
            border-top: 2px solid;
        }
    </style>



</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="invoice-title add_top_30">
                <h2>Invoice</h2><h3 class="float-right">Order # {{ $booking->id }}</h3>
            </div>
            <hr>
            <div class="row">
                <div class="col-6">
                    <address>
                        <strong>Travel Go Company</strong><br>
                        Hay Tilila,<br>
                        Agadir 80000<br>
                        Maroc
                    </address>
                </div>
                <div class="col-6 text-right">
                    <address>
                        <strong>Billed To:</strong><br>
                        {{ $booking->firstname }}{{ $booking->lastname }}<br>
                        {{ $booking->address }}
                        {{ $booking->address2 ?? ""}}<br>
                        {{ $booking->city }} - {{ $booking->postalcode }}<br>
                        {{ $booking->state }} {{ $booking->country }}
                    </address>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <address>
                        <strong>Payment Method:</strong><br>
                        {{ $booking->paymentmethod }} **** {{ $booking->card_number }}<br>
                        {{ $booking->email }}
                    </address>
                </div>
                <div class="col-6 text-right">
                    <address>
                        <strong>Order Date:</strong><br>
                        {{ date_format($booking->created_at,"d-m-Y") }}<br><br>
                    </address>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="add_top_15">
                <h3><strong>Order summary</strong></h3>
                <div class="table-responsive">
                    <table class="table table-condensed">
                        <thead>
                        <tr>
                            <td><strong>Item</strong></td>
                            <td class="text-center"><strong>Price</strong></td>
                            <td class="text-center"><strong>Quantity</strong></td>
                            <td class="text-right"><strong>Totals</strong></td>
                        </tr>
                        </thead>
                        <tbody>
                        @php $items = json_decode($booking->cartitems, true); @endphp
                        @foreach($items as $item)
                        <tr>
                            <td>{{$item['name']}}</td>
                            <td class="text-center">{{ number_format($item['price'], 2, ',', ' ') }} Dhs</td>
                            <td class="text-center">{{$item['qty']}}</td>
                            <td class="text-right">{{ number_format($item['price'], 2, ',', ' ') }} Dhs</td>
                        </tr>
                        @endforeach
                        <tr>
                            <td class="thick-line"></td>
                            <td class="thick-line"></td>
                            <td class="thick-line text-center"><strong>Subtotal</strong></td>
                            <td class="thick-line text-right">{{ $booking->cart_subtotal }} Dhs</td>
                        </tr>
                        <tr>
                            <td class="no-line"></td>
                            <td class="no-line"></td>
                            <td class="no-line text-center"><strong>VAT</strong></td>
                            <td class="no-line text-right">{{ $booking->cart_tax }} Dhs</td>
                        </tr>
                        <tr>
                            <td class="no-line"></td>
                            <td class="no-line"></td>
                            <td class="no-line text-center"><strong>Total</strong></td>
                            <td class="no-line text-right">{{ $booking->cart_total }} Dhs</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
