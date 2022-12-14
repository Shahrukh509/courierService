<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Parcel | Ekhone</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="{{asset('ekhone/css/style.css')}}">
    <link href="{{asset('ekhone/vend/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

    <header>
        <a href="{{route('dashboard')}}">
        <img src="{{asset('ekhone/images/logo-png-01.png')}}" style="width: 120px;" alt="">
        </a>
    </header>


    <div class="container">
        <div class="row mt-4">
            <div class="col-12 col-md-8">
                <div class="row">
                    <form class="col-12" action="{{route('create_parcel')}}" method="POST">
                        @csrf
                    <div class="col-12">
                        <span> Autogenerated Tracking Id </span> <br>
                        <input type="text" name="parcel_id" class="custom-field" value="Parcel-{{ rand(0, 999999999)}}" placeholder="">
                    </div>
                    <div class="col-12  pt-2">
                        <span> Name </span> <br>
                        <input type="text" name="parcel_name" class="custom-field" placeholder="" required>
                    </div>
                    <div class="col-12  pt-2">
                        <span> Phone </span> <br>
                        <input type="text" name="parcel_phone" class="custom-field" placeholder="" required>
                    </div>

                    <div class="col-12  pt-2">
                        <span> Cash amount including delivery charge </span> <br>
                        <input type="text" name="parcel_amount_cal" id="parcel_amount_id" class="custom-field" placeholder="" onkeyup="myFunction()" required>
                    </div>
                   
                    <input type="text" name="parcel_amount" id="parcel_amount_original" class="custom-field" style="display: none;" required>
                    
                    <div class="col-12 pt-2">
                        <span> Recipent email</span> <br>
                        <input type="text" name="parcel_email" class="custom-field" placeholder="" required>
                    </div>
                    <div class="col-12 pt-2">
                        <div class="row">
                        <div class="col-6">
                        <span> Delivery District </span> <br>
                        <select style="height: 36px;" class="custom-field" name="parcel_district" required>
                            <option value="Dhaka">Dhaka</option>
                            <option value="Dhaka Suburbs">Dhaka Suburbs</option>
                        </select>
                        </div>
                        <div class="col-6">
                            <span> Delivery Region </span> <br>
                            <select style="height: 36px;" class="custom-field" name="parcel_region" required>
                                <option value="Adabor">Adabor</option>
                                <option value="Uttar Khan">Uttar Khan</option>
                                <option value="Kadamtali">Kadamtali</option>
                                <option value="Kalabagan">Kalabagan</option>
                                <option value="Kafrul">Kafrul</option>
                                <option value="Kamrangirchar">Kamrangirchar</option>
                                <option value="Cantonment">Cantonment</option>
                                <option value="Kotwali">Kotwali</option>
                                <option value="Khilkhet">Khilkhet</option>
                                <option value="Gulshan">Gulshan</option>
                                <option value="Khilgaon">Khilgaon</option>
                                <option value="Gendaria">Gendaria</option>
                                <option value="Chawkbazar Model">Chawkbazar Model</option>
                                <option value="Demra">Demra</option>
                                <option value="Turag">Turag</option>
                                <option value="Tejgaon">Tejgaon</option>
                                <option value="Tejgaon I/A">Tejgaon I/A</option>
                                <option value="Dakshinkhan">Dakshinkhan</option>
                                <option value="Darus Salam">Darus Salam</option>
                                <option value="Dhanmondi">Dhanmondi</option>
                                <option value="New Market">New Market</option>
                                <option value="Paltan">Paltan</option>
                                <option value="Bangshal">Bangshal</option>
                                <option value="Badda">Badda</option>
                                <option value="Bimanbandar">Bimanbandar</option>
                                <option value="Motijheel">Motijheel</option>
                                <option value="Mirpur Model">Mirpur Model</option>
                                <option value="Mohammadpur">Mohammadpur</option>
                                <option value="Jatrabari">Jatrabari</option>
                                <option value="Ramna">Ramna</option>
                                <option value="Rampura">Rampura</option>
                                <option value="Lalbagh">Lalbagh</option>
                                <option value="Shah Ali">Shah Ali</option>
                                <option value="Shahbagh">Shahbagh</option>
                                <option value="Sher-e-Bangla Nagar">Sher-e-Bangla Nagar</option>
                                <option value="Shyampur">Shyampur</option>
                                <option value="Sabujbagh">Sabujbagh</option>
                                <option value="Sutrapur">Sutrapur</option>
                                <option value="Hazaribagh">Hazaribagh</option>
                                <option value="Keraniganj">Keraniganj</option>
                                <option value="Nawabganj">Nawabganj</option>
                                <option value="Dohar">Dohar</option>
                                <option value="Dhamrai">Dhamrai</option>
                                <option value="Savar">Savar</option>
                            </select>
                            </div>
                        </div>
                    </div>
                                  {{-- ADDING ADRESS FIELD  --}}

                    <div class="col-12 pt-2">
                        <span> Address</span> <br>
                        <textarea name="parcel_address" class="custom-field"></textarea>
                </div>
                    <div class="col-12 pt-2">
                        <span> Note </span> <br>
                        <input type="text" name="parcel_note" class="custom-field" placeholder="" maxlength="300">
                        <br>
                        <span style="font-size: 13px;color: red;"> * Should be 300 characters</span>
                    </div>
                    <div class="col-12 col-md-12 pt-2 text-center">
                        <input type="submit" class="create" value="Submit parcel request">
                    </div>
                </form>
                
                </div>
           
            </div>
            <div class="col-12 col-md-4 mt-4">
                <div class="create-gray">
                    <div class="text-center pt-3">
                        <h4> Details of delivery </h4>
                    </div> 
                    <div class="row">
                        <div class="col-12">
                            <div style="padding: 3px 10px;">
                                <span>
                                    Cash Collection
                                </span>
                                <span  style="float: right;" >
                                    Tk <span id="cash">0</span>
                                </span>
                            </div> 
                        </div>
                        <div class="col-12">
                            <div style="padding: 3px 10px;">
                            <span>
                                Delivery Charges
                            </span>
                            <span style="float: right;">
                                Tk <span id="delivery">0.00</span>
                            </span>
                        </div> 
                    </div>
                        <div class="col-12">
                            <div style="padding:3px 10px;">
                            <span>
                                COD Charge
                            </span>
                            <span style="float: right;">
                                Tk <span id="cod">0.00</span>
                            </span>
                        </div> 
                    </div>
                        <div class="col-12 border:1px solid gray">
                            <div style="padding: 3px 10px;">
                            <span>
                                Total payable amount
                            </span>
                            <span style="float: right;">
                                Tk <span id="total">0.00</span>
                            </span>
                        </div>
                    </div> 
                </div>
                </div>
            </div>
        </div>

    </div>
		

    <script src="{{asset('ekhone/js/script.js')}}"></script>

    <script>
        function myFunction(){
            
            var parcel_amount = document.getElementById('parcel_amount_id').value;
            var delivery_amount = (parcel_amount*10)/100;
            var cod_amount = (parcel_amount*1)/100;
            var total_payable_amount = (parcel_amount - delivery_amount) - cod_amount ;

            document.getElementById('cash').innerHTML = parcel_amount;
            document.getElementById('delivery').innerHTML = delivery_amount;
            document.getElementById('cod').innerHTML = cod_amount;
            document.getElementById('total').innerHTML =  total_payable_amount;
            document.getElementById('parcel_amount_original').value =  total_payable_amount;
            
        }
    </script>
</body>

</html>