<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Parcel | Ekhone</title>
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
        <div class="row mt-4 ">
            <div class="col-12 col-md-12">
                <div class="row">
            <form action="{{ route('update_parcel',$data->id) }}" method="Post">
                @csrf
                    
                   <div class="col-12  pt-2">
                         <label for="points">Name</label>
                        <input type="text" id="points" name="name" value="{{ $data->name }}">
                    </div>

                    <div class="col-12  pt-2">
                         <label for="points">Phone</label>
                        <input type="tel" id="points" name="phone" value="{{ $data->phone }}">
                    </div>

                    <div class="col-12  pt-2">
                         <label for="points">Cash Amount with delivery charges</label>
                        <input type="number" id="points" name="amount" value="{{ $data->amount }}">
                    </div>

                    <div class="col-12  pt-2">
                         <label for="points">Recipent Email</label>
                        <input type="email" id="points" name="email" value="{{ $data->email }}">
                    </div>

                      <div class="col-12  pt-2">
                         <label for="points">Delivery District</label>
                        <select style="height: 36px;" class="custom-field" id="points" name="district">
                            <option value="Dhaka" {{ $data->district == 'Dhaka'? 'selected':'' }}>Dhaka</option>
                            <option value="Dhaka Suburbs"{{ $data->district == 'Dhaka Suburbs'? 'selected':'' }}>Dhaka Suburbs</option>

                        </select>

                    </div>

                     <div class="col-12  pt-2">
                         <label for="points">Delivery Region</label>
                        <select style="height: 36px;" class="custom-field" id="points" name="region">
                            <option value="Adabor" {{ $data->region == 'Adabor'? 'selected':'' }}>Adabor</option>
                                <option value="Uttar Khan" {{ $data->region == 'Uttar Khan'? 'selected':'' }}>Uttar Khan</option>
                                <option value="Kadamtali" {{ $data->region == 'Kadamtali'? 'selected':'' }}>Kadamtali</option>
                                <option value="Kalabagan" {{ $data->region == 'Kalabagan'? 'selected':'' }}>Kalabagan</option>
                                <option value="Kafrul" {{ $data->region == 'Kafrul'? 'selected':'' }}>Kafrul</option>
                                <option value="Kamrangirchar" {{ $data->region == 'Kamrangirchar'? 'selected':'' }}>Kamrangirchar</option>
                                <option value="Cantonment" {{ $data->region == 'Cantonment'? 'selected':'' }}>Cantonment</option>
                                <option value="Kotwali" {{ $data->region == 'Kotwali'? 'selected':'' }}>Kotwali</option>
                                <option value="Khilkhet"{{ $data->region == 'Khilkhet'? 'selected':'' }}>Khilkhet</option>
                                <option value="Gulshan"{{ $data->region == 'Gulshan'? 'selected':'' }}>Gulshan</option>
                                <option value="Khilgaon"{{ $data->region == 'Khilgaon'? 'selected':'' }}>Khilgaon</option>
                                <option value="Gendaria"{{ $data->region == 'Gendaria'? 'selected':'' }}>Gendaria</option>
                                <option value="Chawkbazar Model"{{ $data->region == 'Chawkbazar Model'? 'selected':'' }}>Chawkbazar Model</option>
                                <option value="Demra"{{ $data->region == 'Demra'? 'selected':'' }}>Demra</option>
                                <option value="Turag"{{ $data->region == 'Turag'? 'selected':'' }}>Turag</option>
                                <option value="Tejgaon"{{ $data->region == 'Tejgaon'? 'selected':'' }}>Tejgaon</option>
                                <option value="Tejgaon I/A"{{ $data->region == 'Tejgaon I/A'? 'selected':'' }}>Tejgaon I/A</option>
                                <option value="Dakshinkhan"{{ $data->region == 'Dakshinkhan'? 'selected':'' }}>Dakshinkhan</option>
                                <option value="Darus Salam"{{ $data->region == 'Darus Salam'? 'selected':'' }}>Darus Salam</option>
                                <option value="Dhanmondi"{{ $data->region == 'Dhanmondi'? 'selected':'' }}>Dhanmondi</option>
                                <option value="New Market"{{ $data->region == 'New Market'? 'selected':'' }}>New Market</option>
                                <option value="Paltan"{{ $data->region == 'Paltan'? 'selected':'' }}>Paltan</option>
                                <option value="Bangshal"{{ $data->region == 'Bangshal'? 'selected':'' }}>Bangshal</option>
                                <option value="Badda"{{ $data->region == 'Badda'? 'selected':'' }}>Badda</option>
                                <option value="Bimanbandar"{{ $data->region == 'Bimanbandar'? 'selected':'' }}>Bimanbandar</option>
                                <option value="Motijheel"{{ $data->region == 'Motijheel'? 'selected':'' }}>Motijheel</option>
                                <option value="Mirpur Model"{{ $data->region == 'Mirpur Model'? 'selected':'' }}>Mirpur Model</option>
                                <option value="Mohammadpur"{{ $data->region == 'Mohammadpur'? 'selected':'' }}>Mohammadpur</option>
                                <option value="Jatrabari"{{ $data->region == 'Jatrabari'? 'selected':'' }}>Jatrabari</option>
                                <option value="Ramna"{{ $data->region == 'Ramna'? 'selected':'' }}>Ramna</option>
                                <option value="Rampura"{{ $data->region == 'Rampura'? 'selected':'' }}>Rampura</option>
                                <option value="Lalbagh"{{ $data->region == 'Lalbagh'? 'selected':'' }}>Lalbagh</option>
                                <option value="Shah Ali"{{ $data->region == 'Shah Ali'? 'selected':'' }}>Shah Ali</option>
                                <option value="Shahbagh"{{ $data->region == 'Shahbagh'? 'selected':'' }}>Shahbagh</option>
                                <option value="Sher-e-Bangla Nagar"{{ $data->region == 'Sher-e-Bangla Nagar'? 'selected':'' }}>Sher-e-Bangla Nagar</option>
                                <option value="Shyampur"{{ $data->region == 'Shyampur'? 'selected':'' }}>Shyampur</option>
                                <option value="Sabujbagh"{{ $data->region == 'Sabujbagh'? 'selected':'' }}>Sabujbagh</option>
                                <option value="Sutrapur"{{ $data->region == 'Sutrapur'? 'selected':'' }}>Sutrapur</option>
                                <option value="Hazaribagh"{{ $data->region == 'Hazaribagh'? 'selected':'' }}>Hazaribagh</option>
                                <option value="Keraniganj"{{ $data->region == 'Keraniganj'? 'selected':'' }}>Keraniganj</option>
                                <option value="Nawabganj"{{ $data->region == 'Nawabganj'? 'selected':'' }}>Nawabganj</option>
                                <option value="Dohar"{{ $data->region == 'Dohar'? 'selected':'' }}>Dohar</option>
                                <option value="Dhamrai"{{ $data->region == 'Dhamrai'? 'selected':'' }}>Dhamrai</option>
                                <option value="Savar"{{ $data->region == 'Savar'? 'selected':'' }}>Savar</option>
                        </select>

                    </div>
                    

                      <div class="col-12  pt-2">
                         <label for="points">Note</label>
                        <input type="tel" id="points" name="note" value="{{ $data->note }}">
                    </div>

                      

                    <div class="col-12 col-md-12 pt-2 text-center">
                        <button class="create"> Update Data </button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>  

</body>

</html>