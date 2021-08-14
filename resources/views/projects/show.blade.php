@extends('layout.app')

@section('content')

        
    <div class="row">
        <div class="col-lg-12 margin-tb mt-5">
            <div class="pull-left">
                <h2>  {{ $project->output }}</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('projects.index') }}" title="Go back"> <i class="fas fa-arrow-left "></i> </a>
            </div>
        </div>
    </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Output:</strong>
                {{ $project->output }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Success Indicator:</strong>
                {{ $project->indicator }}
            </div>
        </div>
       
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Accomplishment:</strong>
                {{ $project->accomplishment }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
           <b> Rating Q1:</b><strong style="padding:50px;">{{ $project->ratingq1 }}</strong>
               
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <b>Rating E2:</b><strong style="padding:50px;">{{ $project->ratinge2 }}</strong>
                
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <b>Rating T3:</b><strong style="padding:50px;">{{ $project->ratingt3 }}</strong>
               
            </div>
        </div>
       
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Remarks:</strong>
                {{ $project->remarks }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date Created:</strong>
                {{ date_format($project->created_at, 'jS M Y') }}
            </div>
        </div>

   

    </div>
    @endsection


   

  

           
