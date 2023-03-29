@include('partials.header')
<form action ="/saveProduct" method ="POST">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">DESCRIPTION</label>
        <input type="text" class="form-control" name="description" >
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">QUANTITY</label>
        <input type="number" class="form-control" name="quantity" >

    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Price</label>
        <input type="number" class="form-control" name="price">
    </div>

    <button type="submit" class="btn btn-primary">Save</button>
    </form>
@include('partials.footer')