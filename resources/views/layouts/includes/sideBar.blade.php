<nav class="active " id="sideBar">
   <ul class="list-unstyled lead">
      <li>
         <a href=""><i class="fa fa-home"></i>Home</a>
      </li>
      <li >
         <a href="{{route('orders.index')}}"><i class="fa fa-box"></i>Orders</a>
      </li>
      <li>
         <a href="{{route('transaction.index')}}"><i class="fa fa-money-bill "></i>Transactions</a>
      </li>
      <li>
         <a href="{{route('products.index')}}"><i class="fa fa-truck"></i>Products</a>
      </li>



   </ul>
</nav>
<style>
   #sideBar ul.lead{
      border-bottom: 1px solid #13245a;
      width: fit-content;

   }
   #sideBar ul li a{
  padding: 2%;
  font-size: 1.1e;
  display: block;
  width: 30vh;
  color: cadetblue;
      
   }
   #sideBar ul li a:hover{
  padding: 2%;
color: rgb(255, 255, 255);
background: cadetblue;
text-decoration: none !important
      
   }
   #sideBar ul li a i{
      margin-right: 10px;

   }
   #sideBar ul li.active>a, a[aria-expanded="true"]
   {
      color: black;
      background: cadetblue;


   }
</style>