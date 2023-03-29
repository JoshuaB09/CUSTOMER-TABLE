@include('partials.header')
<form action ="/updateProduct" method ="POST">
    @csrf
    <input type="hidden" class="form-control" name="id" value="{{$product->id}}" >
    <div class="mb-3">
        <label for="name" class="form-label">DESCRIPTION</label>
        <input type="text" class="form-control" name="description" value="{{$product->description}}" >
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">QUANTITY</label>
        <input type="number" class="form-control" name="quantity" value="{{$product->quantity}}">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">PRICE</label>
        <input type="number" class="form-control" name="price" value="{{$product->price}}">
    </div>

    <button type="submit" class="btn btn-primary">Edit</button>
    </form>
@include('partials.footer')