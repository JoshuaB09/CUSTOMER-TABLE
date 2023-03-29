@include('partials.header')
<form action ="/saveCustomer" method ="POST">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">lastName</label>
        <input type="name" class="form-control" name="lastName" >
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">firstName</label>
        <input type="name" class="form-control" name="firstName" >
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">contactNo.</label>
        <input type="text" class="form-control" name="contactNumber">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Address</label>
        <input type="text" class="form-control" name="address">
    </div>

    <button type="submit" class="btn btn-primary">Save</button>
    </form>
@include('partials.footer')