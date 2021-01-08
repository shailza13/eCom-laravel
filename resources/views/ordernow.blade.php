@extends('master');
@section('content')
<div class="custom-product">
  <div class="col-sm-6">
      <table class="table table-striped">
  <tbody>
    <tr>
      <th scope="row">Price</th>
      <td>{{$total}} INR</td>
    </tr>
    <tr>
      <td>Tax</td>
      <td>0 Rupees</td>
    </tr>
    <tr>
      <td>Delivery</td>
      <td>100</td>
    </tr>
     <tr>
      <td>Total Amount</td>
      <td>{{$total+100}}</td>
    </tr>
  </tbody>
</table>
<form>
  <div class="form-group">
    <textarea class="form-control"></textarea>
  </div>
  <div class="form-group">
    <label for="">Payment Method</label>
    <p><input type="radio" name="payment"><span>Online Payment</span></p>
    <p><input type="radio" name="payment"><span>EMI</span></p> 
    <p><input type="radio" name="payment"><span>Pay On Delivery</span></p>    
  </div>
  <button type="submit" class="btn btn-primary">Order Now</button>
</form>
  </div>
</div>
@endsection