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
                                <label for="" class="col-md-4 col-form-label">First Number</label>
                                <div class="col-md-8">
                                    <input type="number" name="first_number" id="firstNumber" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Last Number</label>
                                <div class="col-md-8">
                                    <input type="number" name="last_number" id="lastNumber" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">select operator</label>
                                <div class="col-md-8">
                                    <label><input type="radio" name="operator"  value="+"> add</label>
                                    <label><input type="radio" name="operator"  value="-"> sub</label>
                                    <label><input type="radio" name="operator"  value="*"> multi</label>
                                    <label><input type="radio" name="operator"  value="/"> div</label>
                                    <label><input type="radio" name="operator"  value="%"> mod</label>

                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Result</label>
                                <div class="col-md-8">
                                    <input type="text" name="result" id="result" class="form-control" value="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label"></label>
                                <div class="col-md-8">
                                    <input type="button" name="result" id="submitbtn"  class="btn btn-outline-success btn-block " value="get Result">
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <script>
        var submitbtn=document.getElementById('submitbtn');
        submitbtn.onclick=function () {
            // var firstNumber=document.getElementById('firstNumber').value;
            //
            // var lastNumber=document.getElementById('lastNumber').value;
            // var operator=document.getElementById('lastNumber').value;
            // var result=firstName+ ' '+lastName;
            // // alert(fullName);
            // document.getElementById('fullName').value=fullName;

            var data=document.getElementsByName('operator');
            var i;
            var operator;
            var result;
            for (i=0;i< data.length; i++){
                if (data[i].checked == true){
                    operator=data[i].value;
                    break;
                }
            }
            // alert(operator);
            var firstNumber=Number(document.getElementById('firstNumber').value);
            var lastNumber=Number(document.getElementById('lastNumber').value);

            switch(operator){
                case '+':
                    result = firstNumber + lastNumber;
                    break;
                case '-':
                    result = firstNumber - lastNumber;
                    break;
                    case '*':
                    result = firstNumber * lastNumber;
                    break;
                    case '/':
                    result = firstNumber / lastNumber;
                    break;

            }
            document.getElementById('result').value=result;



        }
    </script>
@endsection





