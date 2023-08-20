
<h1>Currency NBU</h1>
@foreach ($currencyData as $currencyCode => $currency)
    <p>{{ $currency['currency'] }}: {{ $currency['bid'] }}</p>
@endforeach
