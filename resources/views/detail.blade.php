@extends('master');
@section('content')
<div class="container">
  <div class="row">
      <div class="col-sm-6">
          <img class="detail-img" src="{{ $Detail['gallery'] }}">
      </div>
      <div class="col-sm-6">
          <a href="">Go Back</a>
          <h2>Name: {{$Detail['name']}}</h2>
          <h3>Price:{{$Detail['price']}}</h3>
          <h4>Category:{{$Detail['category']}}</h4>
          <h4>Description:{{$Detail['description']}}</h4>
          <br/><br/>
          <button class="btn btn-success">Add to Cart</button>
          <br/><br/>
          <button class="btn btn-primary">Buy Now</button>
          <br/><br/>
      </div>
  </div>
</div>
@endsection