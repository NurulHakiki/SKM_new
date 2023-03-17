<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Administrasi</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
</head>

<body>
    <div class="container"><br>
        <div class="col-md-6 col-md-offset-3">
            <h2 class="text-center">FORM REGISTER ADMINISTRASI</h3>
                <hr>
                @if(session('message'))
                <div class="alert alert-success">
                    {{session('message')}}
                </div>
                @endif
                <form action="{{route('actionregister')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label><i class="fa fa-envelope"></i> Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Email" required
                            oninvalid="this.setCustomValidity('data tidak boleh kosong')"
                            oninput="setCustomValidity('')">
                    </div>
                    <div class="form-group">
                        <label><i class="fa fa-user"></i> Username</label>
                        <input type="text" name="username" class="form-control" placeholder="Username" required
                            oninvalid="this.setCustomValidity('data tidak boleh kosong')"
                            oninput="setCustomValidity('')">
                    </div>
                    <div class="form-group">
                        <label><i class="fa fa-key"></i> Password</label>
                        <input type="password" id="inputPassword" name="password" class="form-control"
                            placeholder="Password" required
                            oninvalid="this.setCustomValidity('data tidak boleh kosong')"
                            oninput="setCustomValidity('')">
                        <input type="checkbox" onclick="myFunction()">&nbsp Tampilkan Password
                        <script>
                        function myFunction() {
                            var x = document.getElementById("inputPassword");
                            if (x.type === "password") {
                                x.type = "text";
                            } else {
                                x.type = "password";
                            }
                        }
                        </script>
                    </div>
                    
                    <div class="form-group">
                        <input type="checkbox" required
                            oninvalid="this.setCustomValidity('Silahkan Ceklis kotak ini untuk melanjutkan pendaftaran')"
                            oninput="setCustomValidity('')">&nbsp Saya Menetujui Kebijakan Privasi
                    </div>

                    <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-user"></i> Register</button>
                    <hr>
                    <p class="text-center">Sudah punya akun silahkan <a href="/admin">Login Disini!</a></p>
                </form>
        </div>
    </div>
</body>

</html>