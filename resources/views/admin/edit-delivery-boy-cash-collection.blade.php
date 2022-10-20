<!DOCTYPE html>
<html lang="en">

<head>
    <head>
    <meta charset="UTF-8">
    <title>Add Parcel | Ekhone</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{asset('ekhone/css/style.css')}}">
    <link href="{{asset('ekhone/vend/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    

    <!-- Select2 CSS --> 
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" /> 

<!-- jQuery --> <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 

<!-- Select2 JS --> 
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

</head>
<body>

    <header>
        <a href="{{route('dashboard')}}">
        <img src="{{asset('ekhone/images/logo-png-01.png')}}" style="width: 120px;" alt="">
        </a>
    </header>


    

                        <!-- showing errors  -->
                        

   <div class="container">
        <div class="row mt-4">
            <div class="col-12 col-md-12">
                <div class="row">
                    <div class="col-12  pt-2">

                        <!-- showing errors  -->
                         @foreach($errors->all() as $error)
                    <div class="alert alert-danger alert-dismissible" runat ="server" id="modalEditError" visible ="false">
                   <button class="close" type="button" data-dismiss="alert">×</button>
                    <strong>{{$error}}</strong> <div id="Div2" runat="server" ></div>
                    </div>
                      @endforeach()
                        <form action="{{route('update',$data->id)}}"  method="POST">
                        @csrf

                        <label> Please select Merchant </label> <br>
                        <select name="user_id" id = "selUser">
                            @foreach($all as $all)
                        <option value="{{ $all->user_id }}" {{ ($data->id == $all->id? 'selected' : 'Default' ) }} >{{$all->username}}
                        </option>

                        @endforeach()
                        </select>
                    
                        
                    </div>

                    <div class="col-12  pt-2">
                         <label for="points">Cash Amount:</label>
                        <input type="number" id="points" name="cash_amount" value="{{ isset($data->cash_amount) ? $data->cash_amount : '' }}">
                    </div>


                    <div class="col-12  pt-2">
                        <span> Notes </span> <br>
                        <input type="text" name="notes" class="custom-field"value="{{ $data->notes }}">
                    </div>

                    <div class="col-12  pt-2">
                    <label for="appt">Choose a time:</label>

                      <input type="time" id="appt" name="time" value="{{ $data->time }}">
                  </div>
                    <div class="col-12 col-md-12 pt-2 text-center">
                        <button class="create"> Update Data </button>
                    </div>
                </div>
            </div>
            
        </div>

    </div>
</form>


    <script src="{{asset('ekhone/js/script.js')}}"></script>

    <script type="text/javascript">
        
$(document).ready(function(){
 
  // Initialize select2
  $("#selUser").select2();

  // Read selected option
  $('#selUser').click(function(){
    var username = $('#selUser option:selected').text();
    var userid = $('#selUser option:selected').val();

    $('#selUser').innerHtml("user_id : " + userid + ", name : " + username);

  });
});



    </script>

</body>

</html>