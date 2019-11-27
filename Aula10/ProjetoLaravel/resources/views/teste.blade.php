@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Soma</div>

                <div class="card-body">
                    <form action="/soma" method="post">                        
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <label for="n1">Numero 1</label>
                            <input type="text" name="n1" id="n1">
                        </div>
                        <div class="form-group">
                            <label for="n2">Numero 2</label>
                            <input type="text" name="n2" id="n2">
                        </div>
                        <input type="submit" value="Somar">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection