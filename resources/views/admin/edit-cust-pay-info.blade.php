<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Customer Payment Information | Ekhone</title>
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


    <div class="container float-center">
          @foreach($errors->all() as $error)
                    <div class="alert alert-danger alert-dismissible" runat ="server" id="modalEditError" visible ="false">
                   <button class="close" type="button" data-dismiss="alert">×</button>
                    <strong>{{$error}}</strong> <div id="Div2" runat="server" ></div>
                    @endforeach()
                    </div>
        <div class="row mt-4">
            <div class="col-12 col-md-12">
                <div class="row">
            <form action="{{ route('update_customer_pay_info',$data->id) }}" method="Post">
                @csrf
                     
                    <div class="col-12  pt-2">
                         <label for="points">Payment Type</label>
                        <input type="text" id="points" name="type" value="{{ $data->type }}">
                    </div>


                      <div class="col-12  pt-2">
                         <label for="points">Description</label>
                        <input type="text" id="points" name="description" value="{{ $data->description }}">
                    </div>

                      <div class="col-12  pt-2">
                         <label for="points">Business Name</label>
                        <input type="text" id="points" name="business_name" value="{{ $data->business_name }}">
                    </div>

                   
                      <div class="col-12  pt-2">
                         <label for="points">Mobile Number</label>
                        <input type="tel" id="points" name="mobile" value="{{ $data->mobile }}">
                    </div>

                     <div class="col-12  pt-2">
                         <label for="points">Amount</label>
                        <input type="number" id="points" name="amount" value="{{ $data->amount }}">
                    </div>
                    <div class="col-12  pt-2">
                        <span> Comments </span> <br>
                        <textarea name="comments">{{ $data->comments }}</textarea>
                    </div>

                    <div class="col-12 col-md-12 pt-2 text-center">
                        <button class="create"> Add Data </button>
                    </div>
                </form>
                </div>
            </div>
            
        </div>

    </div>
</form>


</body>

</html>