@extends('layout.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-5">
                <h4>Add Report</h4>
            </div>
            <div class="pull-right mt-5">
                <a class="btn btn-success" href="{{ route('projects.index') }}" title="Go back"> <i class="fa fa-arrow-left "></i> </a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('projects.store') }}" method="POST" >
        @csrf

       
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Output:</strong>
                    <input type="text" name="output" class="form-control" placeholder="Output">
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Success Indicator:</strong>
                    <input type="text" name="indicator" class="form-control" placeholder="sucess indicator">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>accomplishment:</strong>
                    <textarea  style="height:100px" class="form-control"  name="accomplishment"
                        placeholder="accomplishment"></textarea>
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>rating Q1:</strong>
                    <input type="decimal" name="ratingq1" class="form-control" placeholder="rating ( 1 - 5 )">
                </div>
            </div>
             
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>rating E2:</strong>
                    <input type="decimal" name="ratinge2" class="form-control" placeholder="rating ( 1 - 5 )">
                </div>
            </div>
             
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>rating T3 :</strong>
                    <input type="decimal" name="ratingt3" class="form-control" placeholder="rating ( 1 - 5 )">
                </div>
            </div>
             
           
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>remarks:</strong>
                    <textarea style="height:50px" name="remarks" class="form-control" placeholder="remarks"></textarea>
                    
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection
