@extends('master');
@section('content')
<div class="custom-product">

<div class="col-sm-10">
  <div class="trending-wrapper">
  <h2>Cart List</h2>
  <div class="">
    @foreach($Products as $item)
    <div class="row searched-item cart-list-divider">
        <div class="col-sm-3">
          <a href="detail/{{$item->id}}">
          <img src="{{ $item->gallery }}" alt="Chania" class="trending-img">
          </a>
        </div>
        <div class="col-sm-3">              
            <div class="">
              <h2>{{$item->name}}</h2>
              <h5>{{$item->description}}</h5>
            </div>
        </div>
      <div class="col-sm-3">
           <button class="btn btn-warning">Remove From Cart</button>
      </div>
      </div>
    @endforeach
  </div>
</div>
</div>
</div>
@endsection