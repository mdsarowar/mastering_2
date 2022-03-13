@extends('master')
@section('title')
    Form
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card-body">
                        <form action="" method="post">
                            @csrf
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">First Name</label>
                                <div class="col-md-8">
                                    <input type="text" name="first_name" id="firstName" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Last Name</label>
                                <div class="col-md-8">
                                    <input type="text" name="last_name" id="lastName" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Full Name</label>
                                <div class="col-md-8">
                                    <input type="text" name="full_name" id="fullName" class="form-control" value="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label"></label>
                                <div class="col-md-8">
                                    <input type="button" name="result" onclick="makeFullname()" class="btn btn-outline-success btn-block " value="submit">
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <script>
        function makeFullname() {
            var firstName=document.getElementById('firstName').value;

            var lastName=document.getElementById('lastName').value;
            var fullName=firstName+ ' '+lastName;
            // alert(fullName);
            document.getElementById('fullName').value=fullName;



        }
    </script>
@endsection




