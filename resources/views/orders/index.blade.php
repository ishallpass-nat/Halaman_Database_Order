@extends("layouts.app")
@section("content")
<h1>Halaman Order</h1>
    <table class="table">
<thead>
    <tr>
    <th scope="col">#</th>
    <th scope="col">No Order</th>
    <th scope="col">Customer Name</th>
    <th scope="col">Total Price</th>
    </tr>
</thead>
<tbody>
    @php  $no = 1; @endphp
    @foreach($orders as $order)
    <tr>
        <td>{{ $no }}</td>
        <td>{{ $order["order"]}}</td>
        <td>{{ $order["nama"]}}</td>
        <td>{{ $order["price"]}}</td>
    </tr>
    @php $no++ @endphp
    @endforeach
</tbody>
</table>
@endsection