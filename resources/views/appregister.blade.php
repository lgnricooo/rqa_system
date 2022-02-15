<!DOCTYPE html>
<html lang="en">

<!-- HEAD -->
    <head>
        <meta charset="utf-8"/>
        <title>SDO RQA SYSTEM</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
        
        <!-- Favicon -->
        <link rel="shortcut icon" href="{{asset('assets/images/sdo.png')}}">

        <!-- Bootstrap -->
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />

        <!-- Icons -->
        <link rel="stylesheet" href="{{asset('assets/css/icons.min.css')}}" type="text/css" />

        <!-- App CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/app.min.css')}}" id="app-style" type="text/css" />
    </head>

    <!-- BODY -->
    <body>
        
        <div class="account-pages my-5 pt-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-9 col-xl-10">
                        <div class="card overflow-hidden">
                            <div class="bg-primary bg-soft">
                                <div class="row">
                                    <div class="col-7">
                                        <div class="text-primary p-5">
                                            <h3 class="text-primary">Register</h3>
                                        </div>
                                    </div>
                                    <div class="col-5 align-self-end">
                                        <img src="assets/images/profile-img.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0"> 
                                <div>
                                    <a href="index.html">
                                        <div class="avatar-md profile-user-wid mb-3">
                                            <span class="avatar-title rounded-circle bg-light">
                                                <img src="assets/images/sdo.png" alt="" class="rounded-circle" height="70">
                                            </span>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2">
                                    <form class="needs-validation" method="POST" action="{{route('applicant')}}">
                                    @if ( Session::get('error'))
                                        <div class="alert alert-danger">
                                                {{Session::get('error')}}
                                        </div>
                                    @endif
                                    @csrf
                                        <div class="mb-3">
                                            <label class="col-md-5 col-form-label">New Applicant or Old Applicant?</label>
                                            <div class="col-md-13">
                                                <select class="form-select" id="newold" name="newold" required>
                                                    <option value="New Applicant">New Applicant</option>
                                                    <option value="Old Applicant">Old Applicant</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-3" id="retain">
                                            <label class="col-md-5 col-form-label">Choose if you want to Retain Score or Undergo Demo Teaching again</label>
                                            <div class="col-md-13">
                                                <select class="form-select" name="retain">
                                                    <option value="N/A">N/A</option>
                                                    <option value="Retain Score">Retain Score</option>
                                                    <option value="Undergo Demo Teaching">Undergo Demo Teaching</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="uniqueid" class="form-label">Unique Code</label>
                                            <input type="text" class="form-control" id="uniqueid" name="unique_code" readonly>  
                                            <p><i>Save your Unique Code</i></p>
                                        </div>
                                        <div class="mb-3">
                                            <label for="username" class="form-label">Name</label>
                                            <input type="text" class="form-control" id="username" name="name" placeholder="Enter Name" autocomplete="off" required>  
                                        </div>
                                        <div class="mb-3">
                                            <label for="useremail" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="useremail" name="email" placeholder="Enter Email" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="altemail" class="form-label">Alternate Email</label>
                                            <input type="email" class="form-control" id="altemail" name="alt_email" placeholder="Enter Alternate Email" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="con_number" class="form-label">Contact Number</label>
                                            <input type="text" class="form-control" id="altemail" name="con_number" placeholder="Enter Contact Number" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="address" class="form-label">Complete Address</label>
                                            <input type="text" class="form-control" id="address" name="address" placeholder="Enter Address" required>
                                            <p><i>House No.,Street,Barangay,City/Municipality,Province</i></p>
                                        </div>
                                        <div class="mb-3">
                                            <label for="degree" class="form-label">Degree</label>
                                            <input type="text" class="form-control" id="degree" name="degree" placeholder="Enter Degree" required>
                                        </div>
                                        <div class="mb-3">
                                            <select class="form-select" id="major" name="major" required>
                                                    <option value="None">Select Major</option>
                                                    <option value="English">English</option>
                                                    <option value="Filipino">Filipino</option>
                                                    <option value="Mathematics">Mathematics</option>
                                                    <option value="Science">Science</option>
                                                    <option value="Social Studies">Social Studies</option>
                                                    <option value="Music, Arts, and Physical Education">Music, Arts, and Physical Education</option>
                                                    <option value="Home Economics and Livelihood Education">Home Economics and Livelihood Education</option>
                                                    <option value="Values Education">Values Education</option>
                                                </select>
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" class="form-control" id="minor" name="minor" placeholder="">
                                            <h6><i>*If any. Put N/A if not applicable.</i></h6>
                                        </div>
                                        <div class="mb-3">
                                        <label for="level" class="form-label">Level Applied For:</label>
                                            <select class="form-select" id="level" name="level" required>
                                                <option>Select Level</option>
                                                <option value="Elementary">Elementary</option>
                                                <option value="Secondary - JHS">Secondary - JHS</option>
                                                <option value="Secondary - SHS">Secondary - SHS</option>
                                            </select>
                                        </div>
                                        <div class="mb-3" id="district">
                                            <select class="form-select" id="districtz" name="district">
                                                <option value="N/A">Select District</option>
                                                <option value="Tuguegarao North District">Tuguegarao North District</option>
                                                <option value="Tuguegarao East District">Tuguegarao East District</option>
                                                <option value="Tuguegarao West District">Tuguegarao West District</option>
                                                <option value="Tuguegarao NorthEast District">Tuguegarao NorthEast District</option>
                                            </select>
                                        </div>
                                        <div class="mb-3" id="school">
                                            <div class="col-md-13">
                                                <select class="form-select" name="school">
                                                    <option>Select School</option>
                                                    <option value="Tuguegarao North Central School">Tuguegarao North Central School</option>
                                                    <option value="Pallua Elementary School">Pallua Elementary School</option>
                                                    <option value="Caritan Norte Elementary School">Caritan Norte Elementary School</option>
                                                    <option value="Atulayan Elementary School">Atulayan Elementary School</option>
                                                    <option value="Annafunan Integrated School (Elem)">Annafunan Integrated School (Elem)</option>
                                                    <option value="Bagay Elementary School">Bagay Elementary School</option>
                                                    <option value="Caritan Norte Elementary School">Caritan Norte Elementary School</option>
                                                    <option value="Carig Integrated School (Elem)">Carig Integrated School (Elem)</option>
                                                    <option value="Carig Norte Elementary School">Carig Norte School (Elem)</option>
                                                    <option value="Linao Elementary School">Linao Elementary School</option>
                                                    <option value="Larion Bajo Elementary School">Larion Bajo Elementary School</option>
                                                    <option value="Larion Alto Elementary School">Larion Alto Elementary School</option>
                                                    <option value="Balzain East Elementary School">Balzain East Elementary School</option>
                                                    <option value="Tuguegarao NorthEast Central School">Tuguegarao NorthEast Central School</option>
                                                    <option value="Pengue-Ruyu Elementary School">Pengue-Ruyu Elementary School</option>
                                                    <option value="Tuguegarao East Central School">Tuguegarao East Central School</option>
                                                    <option value="Tagga-Dadda Elementary School">Tagga-Dadda Elementary School</option>
                                                    <option value="Dadda Elementary School">Dadda Elementary School</option>
                                                    <option value="Capatan Integrated School (Elem)">Capatan Integrated School (Elem)</option>
                                                    <option value="Namabbalan Integrated School (Elem)">Namabbalan Integrated School (Elem)</option>
                                                    <option value="Libag Integrated School (Elem)">Libag Integrated School (Elem)</option>
                                                    <option value="Gosi Elementary School">Gosi Elementary School</option>
                                                    <option value="Buntun Elementary School">Buntun Elementary School</option>
                                                    <option value="Ugac Elementary School">Ugac Elementary School</option>
                                                    <option value="San Gabriel Elementary School">San Gabriel Elementary School</option>
                                                    <option value="Cataggaman Nuevo Elementary School">Cataggaman Nuevo Elementary School</option>
                                                    <option value="Cataggaman Pardo Elementary School">Cataggaman Pardo Elementary School</option>
                                                    <option value="Cataggaman Elementary School">Cataggaman Elementary School</option>
                                                    <option value="Tuguegarao West Central School">Tuguegarao West Central School</option>
                                                    <option value="Cagayan National High School (JHS)">Cagayan National High School (JHS)</option>
                                                    <option value="Cataggaman National High School (JHS)">Cataggaman National High School (JHS)</option>
                                                    <option value="Linao National High School (JHS)">Linao National High School (JHS)</option>
                                                    <option value="Gosi National High School (JHS)">Gosi National High School (JHS)</option>
                                                    <option value="Tuguegarao City West High School (JHS)">Tuguegarao City West High School (JHS)</option>
                                                    <option value="Tuguegarao City Science High School (JHS)">Tuguegarao City Science High School (JHS)</option>
                                                    <option value="Annafunan Integrated School (JHS)">Annafunan Integrated School (JHS)</option>
                                                    <option value="Capatan Integrated School (JHS)">Capatan Integrated School (JHS)</option>
                                                    <option value="Namabbalan Integrated School (JHS)">Namabbalan Integrated School (JHS)</option>
                                                    <option value="Libag Integrated School (JHS)">Libag Integrated School (JHS)</option>
                                                    <option value="Carig Integrated School (JHS)">Carig Integrated School (JHS)</option>
                                                    <option value="Cagayan National High School (SHS)">Cagayan National High School (SHS)</option>
                                                    <option value="Cataggaman National High School (SHS)">Cataggaman National High School (SHS)</option>
                                                    <option value="Linao National High School (SHS)">Linao National High School (SHS)</option>
                                                    <option value="Gosi National High School (SHS)">Gosi National High School (SHS)</option>
                                                    <option value="Tuguegarao City West High School (SHS)">Tuguegarao City West High School (SHS)</option>
                                                    <option value="Tuguegarao City Science High School (SHS)">Tuguegarao City Science High School (SHS)</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="userpassword" class="form-label">Password</label>
                                            <input type="password" class="form-control" id="userpassword" name="password" placeholder="Enter password" required>     
                                        </div>
                                        <div class="mt-4 d-grid">
                                            <button class="btn btn-primary waves-effect waves-light" type="submit">Register</button>
                                        </div>
                                    </form>
                                    <div class="mt-5 text-center">
                                        <div>
                                            <p>Already have an account ? <a href="" class="fw-medium text-primary"> Login</a> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- SCRIPTS -->
        <script>
            document.getElementById('uniqueid').value = 'SDO' + '-' + create_random_string(5);

            function create_random_string(string_length){
                var random_string = '';
                var character = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
                for (var i, i = 0; i < string_length; i++){
                    random_string += character.charAt(Math.floor(Math.random() * character.length));
                }
                return random_string;
            }
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="{{asset('assets/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{asset('assets/libs/node-waves/waves.min.js')}}"></script>
        <script src="{{asset('assets/js/pages/validation.init.js')}}"></script>
        <!-- App js -->
        <script src="{{asset('assets/js/app.js')}}"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $('#retain').hide();
                $('#district').hide();
                $('#school').hide();
            })

            $('#newold').on('change',function(){
                if(this.value == 'Old Applicant')
                {
                    $('#retain').show();
                }
                else
                {
                    $('#retain').hide();
                }
            });

            $('#level').on('change',function(){
                if(this.value == 'Elementary')
                {
                    $('#district').show();
                }else
                {
                    $('#district').hide();
                    if(this.value == 'Secondary - JHS')
                    {
                        $('#school').show();
                        $(".form-select option[value='Tuguegarao North Central School']").hide();
                        $(".form-select option[value='Pallua Elementary School']").hide();
                        $(".form-select option[value='Caritan Norte Elementary School']").hide();
                        $(".form-select option[value='Atulayan Elementary School']").hide();
                        $(".form-select option[value='Annafunan Integrated School (Elem)']").hide();
                        $(".form-select option[value='Bagay Elementary School']").hide();
                        $(".form-select option[value='Carig Integrated School (Elem)']").hide();
                        $(".form-select option[value='Linao Elementary School']").hide();
                        $(".form-select option[value='Larion Bajo Elementary School']").hide();
                        $(".form-select option[value='Larion Alto Elementary School']").hide();
                        $(".form-select option[value='Balzain East Elementary School']").hide();
                        $(".form-select option[value='Tuguegarao NorthEast Central School']").hide();
                        $(".form-select option[value='Pengue-Ruyu Elementary School']").hide();
                        $(".form-select option[value='Tuguegarao East Central School']").hide();
                        $(".form-select option[value='Tagga-Dadda Elementary School']").hide();
                        $(".form-select option[value='Dadda Elementary School']").hide();
                        $(".form-select option[value='Capatan Integrated School (Elem)']").hide();
                        $(".form-select option[value='Namabbalan Integrated School (Elem)']").hide();
                        $(".form-select option[value='Libag Integrated School (Elem)']").hide();
                        $(".form-select option[value='Gosi Elementary School']").hide();
                        $(".form-select option[value='Buntun Elementary School']").hide();
                        $(".form-select option[value='Ugac Elementary School']").hide();
                        $(".form-select option[value='San Gabriel Elementary School']").hide();
                        $(".form-select option[value='Cataggaman Nuevo Elementary School']").hide();
                        $(".form-select option[value='Cataggaman Pardo Elementary School']").hide();
                        $(".form-select option[value='Cataggaman Elementary School']").hide();
                        $(".form-select option[value='Tuguegarao West Central School']").hide();
                        $(".form-select option[value='Carig Norte Elementary School']").hide();
                        $(".form-select option[value='Cagayan National High School (SHS)']").hide();
                        $(".form-select option[value='Cataggaman National High School (SHS)']").hide();
                        $(".form-select option[value='Linao National High School (SHS)']").hide();
                        $(".form-select option[value='Gosi National High School (SHS)']").hide();
                        $(".form-select option[value='Tuguegarao City West High School (SHS)']").hide();
                        $(".form-select option[value='Tuguegarao City Science High School (SHS)']").hide();
                    }
                    else
                    {
                        $(".form-select option[value='Tuguegarao North Central School']").show();
                        $(".form-select option[value='Pallua Elementary School']").show();
                        $(".form-select option[value='Caritan Norte Elementary School']").show();
                        $(".form-select option[value='Atulayan Elementary School']").show();
                        $(".form-select option[value='Annafunan Integrated School (Elem)']").show();
                        $(".form-select option[value='Bagay Elementary School']").show();
                        $(".form-select option[value='Carig Integrated School (Elem)']").show();
                        $(".form-select option[value='Linao Elementary School']").show();
                        $(".form-select option[value='Larion Bajo Elementary School']").show();
                        $(".form-select option[value='Larion Alto Elementary School']").show();
                        $(".form-select option[value='Balzain East Elementary School']").show();
                        $(".form-select option[value='Tuguegarao NorthEast Central School']").show();
                        $(".form-select option[value='Pengue-Ruyu Elementary School']").show();
                        $(".form-select option[value='Tuguegarao East Central School']").show();
                        $(".form-select option[value='Tagga-Dadda Elementary School']").show();
                        $(".form-select option[value='Dadda Elementary School']").show();
                        $(".form-select option[value='Capatan Integrated School (Elem)']").show();
                        $(".form-select option[value='Namabbalan Integrated School (Elem)']").show();
                        $(".form-select option[value='Libag Integrated School (Elem)']").show();
                        $(".form-select option[value='Gosi Elementary School']").show();
                        $(".form-select option[value='Buntun Elementary School']").show();
                        $(".form-select option[value='Ugac Elementary School']").show();
                        $(".form-select option[value='San Gabriel Elementary School']").show();
                        $(".form-select option[value='Cataggaman Nuevo Elementary School']").show();
                        $(".form-select option[value='Cataggaman Pardo Elementary School']").show();
                        $(".form-select option[value='Cataggaman Elementary School']").show();
                        $(".form-select option[value='Tuguegarao West Central School']").show();
                        $(".form-select option[value='Carig Norte Elementary School']").show();
                        $(".form-select option[value='Cagayan National High School (SHS)']").show();
                        $(".form-select option[value='Cataggaman National High School (SHS)']").show();
                        $(".form-select option[value='Linao National High School (SHS)']").show();
                        $(".form-select option[value='Gosi National High School (SHS)']").show();
                        $(".form-select option[value='Tuguegarao City West High School (SHS)']").show();
                        $(".form-select option[value='Tuguegarao City Science High School (SHS)']").show();
                        if(this.value == 'Secondary - SHS')
                        {
                            $('#school').show();
                            $(".form-select option[value='Tuguegarao North Central School']").hide();
                            $(".form-select option[value='Pallua Elementary School']").hide();
                            $(".form-select option[value='Caritan Norte Elementary School']").hide();
                            $(".form-select option[value='Atulayan Elementary School']").hide();
                            $(".form-select option[value='Annafunan Integrated School (Elem)']").hide();
                            $(".form-select option[value='Bagay Elementary School']").hide();
                            $(".form-select option[value='Carig Integrated School (Elem)']").hide();
                            $(".form-select option[value='Linao Elementary School']").hide();
                            $(".form-select option[value='Larion Bajo Elementary School']").hide();
                            $(".form-select option[value='Larion Alto Elementary School']").hide();
                            $(".form-select option[value='Balzain East Elementary School']").hide();
                            $(".form-select option[value='Tuguegarao NorthEast Central School']").hide();
                            $(".form-select option[value='Pengue-Ruyu Elementary School']").hide();
                            $(".form-select option[value='Tuguegarao East Central School']").hide();
                            $(".form-select option[value='Tagga-Dadda Elementary School']").hide();
                            $(".form-select option[value='Dadda Elementary School']").hide();
                            $(".form-select option[value='Capatan Integrated School (Elem)']").hide();
                            $(".form-select option[value='Namabbalan Integrated School (Elem)']").hide();
                            $(".form-select option[value='Libag Integrated School (Elem)']").hide();
                            $(".form-select option[value='Gosi Elementary School']").hide();
                            $(".form-select option[value='Buntun Elementary School']").hide();
                            $(".form-select option[value='Ugac Elementary School']").hide();
                            $(".form-select option[value='San Gabriel Elementary School']").hide();
                            $(".form-select option[value='Cataggaman Nuevo Elementary School']").hide();
                            $(".form-select option[value='Cataggaman Pardo Elementary School']").hide();
                            $(".form-select option[value='Cataggaman Elementary School']").hide();
                            $(".form-select option[value='Tuguegarao West Central School']").hide();
                            $(".form-select option[value='Carig Norte Elementary School']").hide();
                            $(".form-select option[value='Cagayan National High School (JHS)']").hide();
                            $(".form-select option[value='Cataggaman National High School (JHS)']").hide();
                            $(".form-select option[value='Linao National High School (JHS)']").hide();
                            $(".form-select option[value='Gosi National High School (JHS)']").hide();
                            $(".form-select option[value='Tuguegarao City West High School (JHS)']").hide();
                            $(".form-select option[value='Tuguegarao City Science High School (JHS)']").hide();
                            $(".form-select option[value='Annafunan Integrated School (JHS)']").hide();
                            $(".form-select option[value='Capatan Integrated School (JHS)']").hide();
                            $(".form-select option[value='Namabbalan Integrated School (JHS)']").hide();
                            $(".form-select option[value='Libag Integrated School (JHS)']").hide();
                            $(".form-select option[value='Carig Integrated School (JHS)']").hide();
                        }
                        else
                        {
                            $(".form-select option[value='Tuguegarao North Central School']").show();
                            $(".form-select option[value='Pallua Elementary School']").show();
                            $(".form-select option[value='Caritan Norte Elementary School']").show();
                            $(".form-select option[value='Atulayan Elementary School']").show();
                            $(".form-select option[value='Annafunan Integrated School (Elem)']").show();
                            $(".form-select option[value='Bagay Elementary School']").show();
                            $(".form-select option[value='Carig Integrated School (Elem)']").show();
                            $(".form-select option[value='Linao Elementary School']").show();
                            $(".form-select option[value='Larion Bajo Elementary School']").show();
                            $(".form-select option[value='Larion Alto Elementary School']").show();
                            $(".form-select option[value='Balzain East Elementary School']").show();
                            $(".form-select option[value='Tuguegarao NorthEast Central School']").show();
                            $(".form-select option[value='Pengue-Ruyu Elementary School']").show();
                            $(".form-select option[value='Tuguegarao East Central School']").show();
                            $(".form-select option[value='Tagga-Dadda Elementary School']").show();
                            $(".form-select option[value='Dadda Elementary School']").show();
                            $(".form-select option[value='Capatan Integrated School (Elem)']").show();
                            $(".form-select option[value='Namabbalan Integrated School (Elem)']").show();
                            $(".form-select option[value='Libag Integrated School (Elem)']").show();
                            $(".form-select option[value='Gosi Elementary School']").show();
                            $(".form-select option[value='Buntun Elementary School']").show();
                            $(".form-select option[value='Ugac Elementary School']").show();
                            $(".form-select option[value='San Gabriel Elementary School']").show();
                            $(".form-select option[value='Cataggaman Nuevo Elementary School']").show();
                            $(".form-select option[value='Cataggaman Pardo Elementary School']").show();
                            $(".form-select option[value='Cataggaman Elementary School']").show();
                            $(".form-select option[value='Tuguegarao West Central School']").show();
                            $(".form-select option[value='Carig Norte Elementary School']").show();
                            $(".form-select option[value='Cagayan National High School (JHS)']").show();
                            $(".form-select option[value='Cataggaman National High School (JHS)']").show();
                            $(".form-select option[value='Linao National High School (JHS)']").show();
                            $(".form-select option[value='Gosi National High School (JHS)']").show();
                            $(".form-select option[value='Tuguegarao City West High School (JHS)']").show();
                            $(".form-select option[value='Tuguegarao City Science High School (JHS)']").show();
                            $(".form-select option[value='Annafunan Integrated School (JHS)']").show();
                            $(".form-select option[value='Capatan Integrated School (JHS)']").show();
                            $(".form-select option[value='Namabbalan Integrated School (JHS)']").show();
                            $(".form-select option[value='Libag Integrated School (JHS)']").show();
                            $(".form-select option[value='Carig Integrated School (JHS)']").show();
                        }
                    }
                }
            });

            $('#districtz').on('change', function(){
                if (this.value == 'Tuguegarao North District')
                {
                    $('#school').show();
                    $(".form-select option[value='Carig Integrated School (Elem)']").hide();
                    $(".form-select option[value='Linao Elementary School']").hide();
                    $(".form-select option[value='Larion Bajo Elementary School']").hide();
                    $(".form-select option[value='Larion Alto Elementary School']").hide();
                    $(".form-select option[value='Balzain East Elementary School']").hide();
                    $(".form-select option[value='Tuguegarao NorthEast Central School']").hide();
                    $(".form-select option[value='Pengue-Ruyu Elementary School']").hide();
                    $(".form-select option[value='Tuguegarao East Central School']").hide();
                    $(".form-select option[value='Tagga-Dadda Elementary School']").hide();
                    $(".form-select option[value='Dadda Elementary School']").hide();
                    $(".form-select option[value='Capatan Integrated School (Elem)']").hide();
                    $(".form-select option[value='Namabbalan Integrated School (Elem)']").hide();
                    $(".form-select option[value='Libag Integrated School (Elem)']").hide();
                    $(".form-select option[value='Gosi Elementary School']").hide();
                    $(".form-select option[value='Buntun Elementary School']").hide();
                    $(".form-select option[value='Ugac Elementary School']").hide();
                    $(".form-select option[value='San Gabriel Elementary School']").hide();
                    $(".form-select option[value='Cataggaman Nuevo Elementary School']").hide();
                    $(".form-select option[value='Cataggaman Pardo Elementary School']").hide();
                    $(".form-select option[value='Cataggaman Elementary School']").hide();
                    $(".form-select option[value='Tuguegarao West Central School']").hide();
                    $(".form-select option[value='Carig Norte Elementary School']").hide();
                    $(".form-select option[value='Cagayan National High School (JHS)']").hide();
                    $(".form-select option[value='Cataggaman National High School (JHS)']").hide();
                    $(".form-select option[value='Linao National High School (JHS)']").hide();
                    $(".form-select option[value='Gosi National High School (JHS)']").hide();
                    $(".form-select option[value='Tuguegarao City West High School (JHS)']").hide();
                    $(".form-select option[value='Tuguegarao City Science High School (JHS)']").hide();
                    $(".form-select option[value='Annafunan Integrated School (JHS)']").hide();
                    $(".form-select option[value='Capatan Integrated School (JHS)']").hide();
                    $(".form-select option[value='Namabbalan Integrated School (JHS)']").hide();
                    $(".form-select option[value='Libag Integrated School (JHS)']").hide();
                    $(".form-select option[value='Carig Integrated School (JHS)']").hide();
                    $(".form-select option[value='Cagayan National High School (SHS)']").hide();
                    $(".form-select option[value='Cataggaman National High School (SHS)']").hide();
                    $(".form-select option[value='Linao National High School (SHS)']").hide();
                    $(".form-select option[value='Gosi National High School (SHS)']").hide();
                    $(".form-select option[value='Tuguegarao City West High School (SHS)']").hide();
                    $(".form-select option[value='Tuguegarao City Science High School (SHS)']").hide();
                }
                else
                {
                    $(".form-select option[value='Carig Integrated School (Elem)']").show();
                    $(".form-select option[value='Linao Elementary School']").show();
                    $(".form-select option[value='Larion Bajo Elementary School']").show();
                    $(".form-select option[value='Larion Alto Elementary School']").show();
                    $(".form-select option[value='Balzain Elementary School']").show();
                    $(".form-select option[value='Tuguegarao NorthEast Central School']").show();
                    $(".form-select option[value='Pengue-Ruyu Elementary School']").show();
                    $(".form-select option[value='Tuguegarao East Central School']").show();
                    $(".form-select option[value='Tagga-Dadda Elementary School']").show();
                    $(".form-select option[value='Dadda Elementary School']").show();
                    $(".form-select option[value='Capatan Integrated School (Elem)']").show();
                    $(".form-select option[value='Namabbalan Integrated School (Elem)']").show();
                    $(".form-select option[value='Libag Integrated School (Elem)']").show();
                    $(".form-select option[value='Gosi Elementary School']").show();
                    $(".form-select option[value='Buntun Elementary School']").show();
                    $(".form-select option[value='Ugac Elementary School']").show();
                    $(".form-select option[value='San Gabriel Elementary School']").show();
                    $(".form-select option[value='Cataggaman Nuevo Elementary School']").show();
                    $(".form-select option[value='Cataggaman Pardo Elementary School']").show();
                    $(".form-select option[value='Cataggaman Elementary School']").show();
                    $(".form-select option[value='Tuguegarao West Central School']").show();
                    $(".form-select option[value='Carig Norte Elementary School']").show();
                    $(".form-select option[value='Cagayan National High School (JHS)']").show();
                    $(".form-select option[value='Cataggaman National High School (JHS)']").show();
                    $(".form-select option[value='Linao National High School (JHS)']").show();
                    $(".form-select option[value='Gosi National High School (JHS)']").show();
                    $(".form-select option[value='Tuguegarao City West High School (JHS)']").show();
                    $(".form-select option[value='Tuguegarao City Science High School (JHS)']").show();
                    $(".form-select option[value='Annafunan Integrated School (JHS)']").show();
                    $(".form-select option[value='Capatan Integrated School (JHS)']").show();
                    $(".form-select option[value='Namabbalan Integrated School (JHS)']").show();
                    $(".form-select option[value='Libag Integrated School (JHS)']").show();
                    $(".form-select option[value='Carig Integrated School (JHS)']").show();
                    $(".form-select option[value='Cagayan National High School (SHS)']").show();
                    $(".form-select option[value='Cataggaman National High School (SHS)']").show();
                    $(".form-select option[value='Linao National High School (SHS)']").show();
                    $(".form-select option[value='Gosi National High School (SHS)']").show();
                    $(".form-select option[value='Tuguegarao City West High School (SHS)']").show();
                    $(".form-select option[value='Tuguegarao City Science High School (SHS)']").show();
                    if(this.value == 'Tuguegarao West District')
                    {
                        $('#school').show();
                        $(".form-select option[value='Tuguegarao North Central School']").hide();
                        $(".form-select option[value='Pallua Elementary School']").hide();
                        $(".form-select option[value='Caritan Norte Elementary School']").hide();
                        $(".form-select option[value='Atulayan Elementary School']").hide();
                        $(".form-select option[value='Annafunan Integrated School (Elem)']").hide();
                        $(".form-select option[value='Bagay Elementary School']").hide();
                        $(".form-select option[value='Carig Integrated School (Elem)']").hide();
                        $(".form-select option[value='Carig Norte Elementary School']").hide();
                        $(".form-select option[value='Caritan Norte Elementary School']").hide();
                        $(".form-select option[value='Linao Elementary School']").hide();
                        $(".form-select option[value='Larion Bajo Elementary School']").hide();
                        $(".form-select option[value='Larion Alto Elementary School']").hide();
                        $(".form-select option[value='Balzain East Elementary School']").hide();
                        $(".form-select option[value='Tuguegarao NorthEast Central School']").hide();
                        $(".form-select option[value='Pengue-Ruyu Elementary School']").hide();
                        $(".form-select option[value='Tuguegarao East Central School']").hide();
                        $(".form-select option[value='Tagga-Dadda Elementary School']").hide();
                        $(".form-select option[value='Dadda Elementary School']").hide();
                        $(".form-select option[value='Capatan Integrated School (Elem)']").hide();
                        $(".form-select option[value='Namabbalan Integrated School (Elem)']").hide();
                        $(".form-select option[value='Libag Integrated School (Elem)']").hide();
                        $(".form-select option[value='Gosi Elementary School']").hide();
                        $(".form-select option[value='Cagayan National High School (JHS)']").hide();
                        $(".form-select option[value='Cataggaman National High School (JHS)']").hide();
                        $(".form-select option[value='Linao National High School (JHS)']").hide();
                        $(".form-select option[value='Gosi National High School (JHS)']").hide();
                        $(".form-select option[value='Tuguegarao City West High School (JHS)']").hide();
                        $(".form-select option[value='Tuguegarao City Science High School (JHS)']").hide();
                        $(".form-select option[value='Annafunan Integrated School (JHS)']").hide();
                        $(".form-select option[value='Capatan Integrated School (JHS)']").hide();
                        $(".form-select option[value='Namabbalan Integrated School (JHS)']").hide();
                        $(".form-select option[value='Libag Integrated School (JHS)']").hide();
                        $(".form-select option[value='Carig Integrated School (JHS)']").hide();
                        $(".form-select option[value='Cagayan National High School (SHS)']").hide();
                        $(".form-select option[value='Cataggaman National High School (SHS)']").hide();
                        $(".form-select option[value='Linao National High School (SHS)']").hide();
                        $(".form-select option[value='Gosi National High School (SHS)']").hide();
                        $(".form-select option[value='Tuguegarao City West High School (SHS)']").hide();
                        $(".form-select option[value='Tuguegarao City Science High School (SHS)']").hide();
                    }
                    else
                    {
                        $(".form-select option[value='Tuguegarao North Central School']").show();
                        $(".form-select option[value='Pallua Elementary School']").show();
                        $(".form-select option[value='Caritan Norte Elementary School']").show();
                        $(".form-select option[value='Atulayan Elementary School']").show();
                        $(".form-select option[value='Annafunan Integrated School (Elem)']").show();
                        $(".form-select option[value='Bagay Elementary School']").show();
                        $(".form-select option[value='Carig Integrated School (Elem)']").show();
                        $(".form-select option[value='Carig Norte Elementary School']").show();
                        $(".form-select option[value='Caritan Norte Elementary School']").show();
                        $(".form-select option[value='Linao Elementary School']").show();
                        $(".form-select option[value='Larion Bajo Elementary School']").show();
                        $(".form-select option[value='Larion Alto Elementary School']").show();
                        $(".form-select option[value='Balzain East Elementary School']").show();
                        $(".form-select option[value='Tuguegarao NorthEast Central School']").show();
                        $(".form-select option[value='Pengue-Ruyu Elementary School']").show();
                        $(".form-select option[value='Tuguegarao East Central School']").show();
                        $(".form-select option[value='Tagga-Dadda Elementary School']").show();
                        $(".form-select option[value='Dadda Elementary School']").show();
                        $(".form-select option[value='Capatan Integrated School (Elem)']").show();
                        $(".form-select option[value='Namabbalan Integrated School (Elem)']").show();
                        $(".form-select option[value='Libag Integrated School (Elem)']").show();
                        $(".form-select option[value='Gosi Elementary School']").show();
                        $(".form-select option[value='Cagayan National High School (JHS)']").show();
                        $(".form-select option[value='Cataggaman National High School (JHS)']").show();
                        $(".form-select option[value='Linao National High School (JHS)']").show();
                        $(".form-select option[value='Gosi National High School (JHS)']").show();
                        $(".form-select option[value='Tuguegarao City West High School (JHS)']").show();
                        $(".form-select option[value='Tuguegarao City Science High School (JHS)']").show();
                        $(".form-select option[value='Annafunan Integrated School (JHS)']").show();
                        $(".form-select option[value='Capatan Integrated School (JHS)']").show();
                        $(".form-select option[value='Namabbalan Integrated School (JHS)']").show();
                        $(".form-select option[value='Libag Integrated School (JHS)']").show();
                        $(".form-select option[value='Carig Integrated School (JHS)']").show();
                        $(".form-select option[value='Cagayan National High School (SHS)']").show();
                        $(".form-select option[value='Cataggaman National High School (SHS)']").show();
                        $(".form-select option[value='Linao National High School (SHS)']").show();
                        $(".form-select option[value='Gosi National High School (SHS)']").show();
                        $(".form-select option[value='Tuguegarao City West High School (SHS)']").show();
                        $(".form-select option[value='Tuguegarao City Science High School (SHS)']").show();
                        if (this.value == 'Tuguegarao East District')
                        {
                            $('#school').show();
                            $(".form-select option[value='Tuguegarao North Central School']").hide();
                            $(".form-select option[value='Pallua Elementary School']").hide();
                            $(".form-select option[value='Caritan Norte Elementary School']").hide();
                            $(".form-select option[value='Atulayan Elementary School']").hide();
                            $(".form-select option[value='Annafunan Integrated School (Elem)']").hide();
                            $(".form-select option[value='Bagay Elementary School']").hide();
                            $(".form-select option[value='Carig Integrated School (Elem)']").hide();
                            $(".form-select option[value='Carig Norte Elementary School']").hide();
                            $(".form-select option[value='Caritan Norte Elementary School']").hide();
                            $(".form-select option[value='Linao Elementary School']").hide();
                            $(".form-select option[value='Larion Bajo Elementary School']").hide();
                            $(".form-select option[value='Larion Alto Elementary School']").hide();
                            $(".form-select option[value='Balzain East Elementary School']").hide();
                            $(".form-select option[value='Tuguegarao NorthEast Central School']").hide();
                            $(".form-select option[value='Pengue-Ruyu Elementary School']").hide();
                            $(".form-select option[value='Buntun Elementary School']").hide();
                            $(".form-select option[value='Ugac Elementary School']").hide();
                            $(".form-select option[value='San Gabriel Elementary School']").hide();
                            $(".form-select option[value='Cataggaman Nuevo Elementary School']").hide();
                            $(".form-select option[value='Cataggaman Pardo Elementary School']").hide();
                            $(".form-select option[value='Cataggaman Elementary School']").hide();
                            $(".form-select option[value='Tuguegarao West Central School']").hide();
                            $(".form-select option[value='Cagayan National High School (JHS)']").hide();
                            $(".form-select option[value='Cataggaman National High School (JHS)']").hide();
                            $(".form-select option[value='Linao National High School (JHS)']").hide();
                            $(".form-select option[value='Gosi National High School (JHS)']").hide();
                            $(".form-select option[value='Tuguegarao City West High School (JHS)']").hide();
                            $(".form-select option[value='Tuguegarao City Science High School (JHS)']").hide();
                            $(".form-select option[value='Annafunan Integrated School (JHS)']").hide();
                            $(".form-select option[value='Capatan Integrated School (JHS)']").hide();
                            $(".form-select option[value='Namabbalan Integrated School (JHS)']").hide();
                            $(".form-select option[value='Libag Integrated School (JHS)']").hide();
                            $(".form-select option[value='Carig Integrated School (JHS)']").hide();
                            $(".form-select option[value='Cagayan National High School (SHS)']").hide();
                            $(".form-select option[value='Cataggaman National High School (SHS)']").hide();
                            $(".form-select option[value='Linao National High School (SHS)']").hide();
                            $(".form-select option[value='Gosi National High School (SHS)']").hide();
                            $(".form-select option[value='Tuguegarao City West High School (SHS)']").hide();
                            $(".form-select option[value='Tuguegarao City Science High School (SHS)']").hide();
                        }
                        else
                        {
                            $(".form-select option[value='Tuguegarao North Central School']").show();
                            $(".form-select option[value='Pallua Elementary School']").show();
                            $(".form-select option[value='Caritan Norte Elementary School']").show();
                            $(".form-select option[value='Atulayan Elementary School']").show();
                            $(".form-select option[value='Annafunan Integrated School (Elem)']").show();
                            $(".form-select option[value='Bagay Elementary School']").show();
                            $(".form-select option[value='Carig Integrated School (Elem)']").show();
                            $(".form-select option[value='Carig Norte Elementary School']").show();
                            $(".form-select option[value='Caritan Norte Elementary School']").show();
                            $(".form-select option[value='Linao Elementary School']").show();
                            $(".form-select option[value='Larion Bajo Elementary School']").show();
                            $(".form-select option[value='Larion Alto Elementary School']").show();
                            $(".form-select option[value='Balzain East Elementary School']").show();
                            $(".form-select option[value='Tuguegarao NorthEast Central School']").show();
                            $(".form-select option[value='Pengue-Ruyu Elementary School']").show();
                            $(".form-select option[value='Buntun Elementary School']").show();
                            $(".form-select option[value='Ugac Elementary School']").show();
                            $(".form-select option[value='San Gabriel Elementary School']").show();
                            $(".form-select option[value='Cataggaman Nuevo Elementary School']").show();
                            $(".form-select option[value='Cataggaman Pardo Elementary School']").show();
                            $(".form-select option[value='Cataggaman Elementary School']").show();
                            $(".form-select option[value='Tuguegarao West Central School']").show();
                            $(".form-select option[value='Cagayan National High School (JHS)']").show();
                            $(".form-select option[value='Cataggaman National High School (JHS)']").show();
                            $(".form-select option[value='Linao National High School (JHS)']").show();
                            $(".form-select option[value='Gosi National High School (JHS)']").show();
                            $(".form-select option[value='Tuguegarao City West High School (JHS)']").show();
                            $(".form-select option[value='Tuguegarao City Science High School (JHS)']").show();
                            $(".form-select option[value='Annafunan Integrated School (JHS)']").show();
                            $(".form-select option[value='Capatan Integrated School (JHS)']").show();
                            $(".form-select option[value='Namabbalan Integrated School (JHS)']").show();
                            $(".form-select option[value='Libag Integrated School (JHS)']").show();
                            $(".form-select option[value='Carig Integrated School (JHS)']").show();
                            $(".form-select option[value='Cagayan National High School (SHS)']").show();
                            $(".form-select option[value='Cataggaman National High School (SHS)']").show();
                            $(".form-select option[value='Linao National High School (SHS)']").show();
                            $(".form-select option[value='Gosi National High School (SHS)']").show();
                            $(".form-select option[value='Tuguegarao City West High School (SHS)']").show();
                            $(".form-select option[value='Tuguegarao City Science High School (SHS)']").show();
                            if(this.value == 'Tuguegarao NorthEast District')
                            {
                                $('#school').show();
                                $(".form-select option[value='Tuguegarao North Central School']").hide();
                                $(".form-select option[value='Pallua Elementary School']").hide();
                                $(".form-select option[value='Caritan Norte Elementary School']").hide();
                                $(".form-select option[value='Atulayan Elementary School']").hide();
                                $(".form-select option[value='Annafunan Integrated School (Elem)']").hide();
                                $(".form-select option[value='Bagay Elementary School']").hide();
                                $(".form-select option[value='Carig Integrated School (Elem)']").hide();
                                $(".form-select option[value='Caritan Norte Elementary School']").hide();
                                $(".form-select option[value='Tuguegarao East Central School']").hide();
                                $(".form-select option[value='Tagga-Dadda Elementary School']").hide();
                                $(".form-select option[value='Dadda Elementary School']").hide();
                                $(".form-select option[value='Capatan Integrated School (Elem)']").hide();
                                $(".form-select option[value='Namabbalan Integrated School (Elem)']").hide();
                                $(".form-select option[value='Libag Integrated School (Elem)']").hide();
                                $(".form-select option[value='Gosi Elementary School']").hide();
                                $(".form-select option[value='Buntun Elementary School']").hide();
                                $(".form-select option[value='Ugac Elementary School']").hide();
                                $(".form-select option[value='San Gabriel Elementary School']").hide();
                                $(".form-select option[value='Cataggaman Nuevo Elementary School']").hide();
                                $(".form-select option[value='Cataggaman Pardo Elementary School']").hide();
                                $(".form-select option[value='Cataggaman Elementary School']").hide();
                                $(".form-select option[value='Tuguegarao West Central School']").hide();
                                $(".form-select option[value='Carig Norte Elementary School']").hide();
                                $(".form-select option[value='Cagayan National High School (JHS)']").hide();
                                $(".form-select option[value='Cataggaman National High School (JHS)']").hide();
                                $(".form-select option[value='Linao National High School (JHS)']").hide();
                                $(".form-select option[value='Gosi National High School (JHS)']").hide();
                                $(".form-select option[value='Tuguegarao City West High School (JHS)']").hide();
                                $(".form-select option[value='Tuguegarao City Science High School (JHS)']").hide();
                                $(".form-select option[value='Annafunan Integrated School (JHS)']").hide();
                                $(".form-select option[value='Capatan Integrated School (JHS)']").hide();
                                $(".form-select option[value='Namabbalan Integrated School (JHS)']").hide();
                                $(".form-select option[value='Libag Integrated School (JHS)']").hide();
                                $(".form-select option[value='Carig Integrated School (JHS)']").hide();
                                $(".form-select option[value='Cagayan National High School (SHS)']").hide();
                                $(".form-select option[value='Cataggaman National High School (SHS)']").hide();
                                $(".form-select option[value='Linao National High School (SHS)']").hide();
                                $(".form-select option[value='Gosi National High School (SHS)']").hide();
                                $(".form-select option[value='Tuguegarao City West High School (SHS)']").hide();
                                $(".form-select option[value='Tuguegarao City Science High School (SHS)']").hide();
                            }
                            else
                            {
                                $(".form-select option[value='Tuguegarao North Central School']").show();
                                $(".form-select option[value='Pallua Elementary School']").show();
                                $(".form-select option[value='Caritan Norte Elementary School']").show();
                                $(".form-select option[value='Atulayan Elementary School']").show();
                                $(".form-select option[value='Annafunan Integrated School (Elem)']").show();
                                $(".form-select option[value='Bagay Elementary School']").show();
                                $(".form-select option[value='Carig Integrated School (Elem)']").show();
                                $(".form-select option[value='Caritan Norte Elementary School']").show();
                                $(".form-select option[value='Tuguegarao East Central School']").show();
                                $(".form-select option[value='Tagga-Dadda Elementary School']").show();
                                $(".form-select option[value='Dadda Elementary School']").show();
                                $(".form-select option[value='Capatan Integrated School (Elem)']").show();
                                $(".form-select option[value='Namabbalan Integrated School (Elem)']").show();
                                $(".form-select option[value='Libag Integrated School (Elem)']").show();
                                $(".form-select option[value='Gosi Elementary School']").show();
                                $(".form-select option[value='Buntun Elementary School']").show();
                                $(".form-select option[value='Ugac Elementary School']").show();
                                $(".form-select option[value='San Gabriel Elementary School']").show();
                                $(".form-select option[value='Cataggaman Nuevo Elementary School']").show();
                                $(".form-select option[value='Cataggaman Pardo Elementary School']").show();
                                $(".form-select option[value='Cataggaman Elementary School']").show();
                                $(".form-select option[value='Tuguegarao West Central School']").show();
                                $(".form-select option[value='Carig Norte Elementary School']").show();
                                $(".form-select option[value='Cagayan National High School (JHS)']").show();
                                $(".form-select option[value='Cataggaman National High School (JHS)']").show();
                                $(".form-select option[value='Linao National High School (JHS)']").show();
                                $(".form-select option[value='Gosi National High School (JHS)']").show();
                                $(".form-select option[value='Tuguegarao City West High School (JHS)']").show();
                                $(".form-select option[value='Tuguegarao City Science High School (JHS)']").show();
                                $(".form-select option[value='Annafunan Integrated School (JHS)']").show();
                                $(".form-select option[value='Capatan Integrated School (JHS)']").show();
                                $(".form-select option[value='Namabbalan Integrated School (JHS)']").show();
                                $(".form-select option[value='Libag Integrated School (JHS)']").show();
                                $(".form-select option[value='Carig Integrated School (JHS)']").show();
                                $(".form-select option[value='Cagayan National High School (SHS)']").show();
                                $(".form-select option[value='Cataggaman National High School (SHS)']").show();
                                $(".form-select option[value='Linao National High School (SHS)']").show();
                                $(".form-select option[value='Gosi National High School (SHS)']").show();
                                $(".form-select option[value='Tuguegarao City West High School (SHS)']").show();
                                $(".form-select option[value='Tuguegarao City Science High School (SHS)']").show();
                            }
                        }
                    }
                }
            });
        </script>
    </body>
    @include('sweetalert::alert')
</html>