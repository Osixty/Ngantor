@extends('layout.main')

@section('container')

        <div class="row justify-content-center">
            <div class="card border-0 shadow-lg">
                <div class="card-body">
                    <h1>Contact Us</h1>
                    <form action="Login.php" method="post" class="user login mt-5">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" id="input-nama" class="form-control form-control-user ">
                        </div>
                        <div class="form-group">
                            <label>E-mail</label>
                            <input type="email" id="input-email" class="form-control form-control-user">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            <label for="exampleFormControlTextarea1" class="form-label">Pesan</label>
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

@endsection 