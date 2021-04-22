@extends('layouts.app')
@section('content')
    <div class="container">
       <div class="col-md-12">
          <div class="row">
<div class="col-md-9">
   <div class="card">
      <div class="card-header">
         <h4 style="float: left">ADD USER</h4>
         <a href="#" data-bs-toggle="modal" data-bs-target="#addUserModal" class="btn btn-dark mb-2" style="float: right"><i class="fa fa-plus " ></i>Add User</a>
         <div class="card-body">
            <table class="table table-bordered table-left">
               <thead>
                  <tr>
                     <th>#</th>
                     <th>Name</th>
                     <th>Email</th>
                     <th>Phone</th>
                     <th>Role</th>
                     <th>Actions</th>
                    <tbody>
                       @foreach ($users as $key => $user)
                       <tr>
                        <td>{{$key+1}}</td>
                        <td>{{ $user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->phone}}</td>
                        <td>
                           @if ($user->verification_status=="1")
                               Admin
                               @else
                               Cashier
                           @endif
                        </td>
                        <td>
                           <a href="#" class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#editUserModal"><i class="fa fa-edit"></i></a>
                           <a href="#" class="btn btn-sm btn-danger" ><i class="fa fa-trash"></i></a>
                        
                        </td>
                      
                     </tr>

                     <div class="modal right fade" id="editUserModal" tabindex="-1" aria-labelledby="editUserModalLabel" aria-hidden="true">
                        <div class="modal-dialog ">
                          <div class="modal-content ">
                            <div class="modal-header ">
                              <h5 class="modal-title " id="editUserModalLabel">Edit User</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              {{--Content--}}
                              <form action="{{route('users.store')}}" method="POST">
                                 @csrf
                                 <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" name="name" id="" class="form-control">
                                 </div>
                  
                                 <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="text" name="email" id="" class="form-control">
                                 </div>
                  
                                 <div class="form-group">
                                    <label for="">Phone</label>
                                    <input type="text" name="phone" id="" class="form-control">
                                 </div>
                  
                                 <div class="form-group">
                                    <label for="">Password</label>
                                    <input type="password" name="password" id="" class="form-control">
                                 </div>
                  
                     
                  
                                 <div class="form-group">
                                    <label for="">Role</label>
                                    <select  name="is_admin" id="" class="form-control">
                                       <option value="1">Admin</option>
                                       <option value="2">Cashier</option>
                  
                                    </select>
                                 </div>
                                 <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn  btn-primary">Save User</button>
                                  </div>
                              </form>
                              
                            </div>
                         
                          </div>
                        </div>
                      </div>

                       @endforeach
                    
                    </tbody>

                  </tr>
               </thead>
            </table>
         </div>
      </div>
   </div>
</div>
<div class="col-md-3">
   <div class="card">
      <div class="card-header">
         Search User
         <a href="#"><i class="fa fa-search"></i>Search</a>
         <div class="card-body">
           ..................
         </div>
      </div>
   </div>

</div>
          </div>
       </div>
    </div>

    {{--modal for adding new user--}}

    <div class="modal right fade" id="addUserModal" tabindex="-1" aria-labelledby="addUserModalLabel" aria-hidden="true">
      <div class="modal-dialog ">
        <div class="modal-content ">
          <div class="modal-header ">
            <h5 class="modal-title " id="addUserModalLabel">Add User</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            {{--Content--}}
            <form action="{{route('users.store')}}" method="POST">
               @csrf
               <div class="form-group">
                  <label for="">Name</label>
                  <input type="text" name="name" id="" class="form-control">
               </div>

               <div class="form-group">
                  <label for="">Email</label>
                  <input type="text" name="email" id="" class="form-control">
               </div>

               <div class="form-group">
                  <label for="">Phone</label>
                  <input type="text" name="phone" id="" class="form-control">
               </div>

               <div class="form-group">
                  <label for="">Password</label>
                  <input type="password" name="password" id="" class="form-control">
               </div>

   

               <div class="form-group">
                  <label for="">Role</label>
                  <select  name="is_admin" id="" class="form-control">
                     <option value="1">Admin</option>
                     <option value="2">Cashier</option>

                  </select>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn  btn-primary">Save User</button>
                </div>
            </form>
            
          </div>
       
        </div>
      </div>
    </div>
    <style>
       .modal.right .modal-dialog
       {
          top: 0;
          right: 0;
          margin-right: 30vh;
       }
       .modal.fade:not(.in).right .modal-dialog{
          -webkit-trasform:translate3d(25%, 0, 0);
          transform:translate3d(25%, 0, 0);
       }
    </style>

@endsection