<a href="#" class="btn btn-outline" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-list"></i></a>
<a href="{{ url('/home') }}" class="btn btn-outline rounded-pill"><i class="fa fa-home">Home</i></a>
<a href="{{route('users.index')}}" class="btn btn-outline rounded-pill"><i class="fa fa-user">Users</i></a>
<a href="{{route('products.index')}}" class="btn btn-outline rounded-pill"><i class="fa fa-box">Products</i></a>
<a href="{{route('users.index')}}" class="btn btn-outline rounded-pill"><i class="fa fa-laptop">Cashier</i></a>
<a href="{{route('users.index')}}" class="btn btn-outline rounded-pill"><i class="fa fa-file">Report</i></a>
<a href="{{route('users.index')}}" class="btn btn-outline rounded-pill"><i class="fa fa-money-bill">Transaction</i></a>
<a href="{{route('users.index')}}" class="btn btn-outline rounded-pill"><i class="fa fa-money-bill">Suppliers</i></a>
<a href="{{route('users.index')}}" class="btn btn-outline rounded-pill"><i class="fa fa-users">Customers</i></a>
<a href="{{route('users.index')}}" class="btn btn-outline rounded-pill"><i class="fa fa-truck">Incomming</i></a>
<style>
   .btn-outline
   {
      border-color: cadetblue;
      color: cadetblue;
   }
   .btn-outline.active{
      background: cadetblue;
      color: white;
   }
   .btn-outline:hover
   {
      background: cadetblue;
      color: white;
   }
</style>