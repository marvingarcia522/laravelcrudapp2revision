@extends('layout.app')

@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-5">
                <h4>Edit Report</h4>
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

    <form action="{{ route('projects.update', $project->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Output:</strong>
                    <input type="text" name="output" value="{{ $project->output }}" class="form-control" placeholder="Output">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Success Indicator:</strong>
                    <input type="text" name="indicator" value="{{ $project->indicator }}" class="form-control" placeholder="Success Indicator">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>accomplishment:</strong>
                    <textarea class="form-control" style="height:100px" name="accomplishment"
                        placeholder="accomplishment">{{ $project->accomplishment }}</textarea>
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>rating Q1:</strong>
                    <input type="decimal" name="ratingq1" class="form-control" placeholder="{{ $project->ratingq1 }}"
                        value="{{ $project->ratingq1 }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>rating E2:</strong>
                    <input type="decimal" name="ratinge2" class="form-control" placeholder="{{ $project->ratinge2 }}"
                        value="{{ $project->ratinge2 }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>rating T3:</strong>
                    <input type="decimal" name="ratingt3" class="form-control" placeholder="{{ $project->ratingt3 }}"
                        value="{{ $project->ratingt3 }}">
                </div>
            </div>
           
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>remarks:</strong>

                    <textarea style="height:50px" name="remarks" class="form-control" placeholder="{{ $project->remarks }}"
                        value="{{ $project->remarks }}"></textarea>
                    
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection