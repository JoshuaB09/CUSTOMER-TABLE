@include('partials.header')
<x-nav/>
@if(Session::has('success'))
{{Session::get('success')}}
@endif
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">DESCRIPTION</th>
      <th scope="col">QUANTITY</th>
      <th scope="col">PRICE</th>
      <th></th>
      <th>

      </th>
    </tr>
  </thead>
  @foreach ($products as $product)
  <tbody>
    <tr>
      <th scope="row">{{$product->id}}</th>
      <td>{{$product->description}}</td>
      <td>{{$product->quantity}}</td>
      <td>₱{{$product->price}}</td>
      <td><a href="edit/{{$product->id}}">Edit</a></td>
      <td><a href="delete/{{$product->id}}">Delete</a></td>
    </tr>
  </tbody>
  @endforeach
</table>
@include('partials.footer')