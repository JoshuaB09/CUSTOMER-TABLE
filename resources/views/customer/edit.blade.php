@include('partials.header')
<form action ="/updateCustomer" method ="POST">
    @csrf
        <input type="hidden" class="form-control" name="id" value="{{$customer->id}}" >
    <div class="mb-3">
        <label for="name" class="form-label">lastName</label>
        <input type="name" class="form-control" name="lastName" value="{{$customer->lastName}}" >
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">firstName</label>
        <input type="name" class="form-control" name="firstName" value="{{$customer->firstName}}">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" name="email" value="{{$customer->email}}">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">contactNo.</label>
        <input type="text" class="form-control" name="contactNumber" value="{{$customer->contactNumber}}">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Address</label>
        <input type="text" class="form-control" name="address" value="{{$customer->address}}">
    </div>

    <button type="submit" class="btn btn-primary">Edit</button>
    </form>
@include('partials.footer')