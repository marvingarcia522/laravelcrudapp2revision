@extends('layout.app')


@section('content')


    
    <div class="row">
        <div class="col-lg-12 margin-tb">
        <div class="pull-left mt-5">
                <h4>List of Accomplishments</h4>
            </div>
            <div class="pull-right mt-5" id="non-printable" >
                
                <a class="btn btn-success" href="{{ route('projects.create') }}" title="Add a Reoort"> <i class="fas fa-plus-square"></i>
                    </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div id="tblData">
    <table class="table table-bordered "  >
    <thead class="thead-light">
            
        <tr style="text-align:left">
           
            
           <th scope="col" width="300px">Reviewed By:</th>
           <th scope="col" width="175px">Date:</th>
           <th scope="col" width="300px">Approved By:</th>
           <th scope="col" width="175px">Date:</th>
           

       </tr>
      
       <tr style="text-align:center ; font-size:14px">
           
           <th scope="col" width="300px">Dr. Saturnina F. Nisperos</th>
           <th scope="row"  width="175px">   </th>
            <th scope="col" width="250px">Dr. Shirley C. Agrupis</th>
           <th scope="row" width="175px"> </th>
                
           
       </tr>
       <tr style="text-align:center ; font-size:12px">
           
        <th scope="col" width="300px">Director, Information Technology Center</th>
           <th rowspan="2" width="175px"><div class="form-group"> </th>      
           <th scope="col" width="300px">President</th>
           <th rowspan="2" width="175px"><div class="form-group"></th>
                    
                   
           
           
       </tr>
       
       
 
</table>
    <table class="table table-bordered table-hover mt-1.5" >
            <thead class="thead-dark"style="text-align:center">
            
      
    <div class="row" >
    
        <tr>
            
            <th colspan="2" scope="colgroup" width="150px">Output</th>
            <th  width="150px">Success Indicator</th>
            <th scope="col" width="300px">Accomplishment</th>
            <th colspan="4" scope="colgroup">Rating</th>
            <th scope="col">Remarks</th>
            <th scope="col" width="100px">Date</th>
            <th scope="col" width="120px">Action</th>

        </tr>
        <tr>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>
                <th scope="col" width="20px">Q1</th>
                <th scope="col" width="20px">E2</th>
                <th scope="col" width="20px">T3</th>
                <th scope="col" width="20px">A4</th>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>
           
        </tr>
        <tbody >
        @foreach ($projects as $project)
            <tr>
            <td class="contenttable">{{ ++$i }}</td>
            <td class="contenttable">{{ $project->output }}</td>
            <td class="contenttable">{{ $project->indicator}}</td>
            <td class="contenttable">{{ $project->accomplishment }}</td>
            <td class="contenttable">{{ $project->ratingq1}}</td>
            <td class="contenttable">{{ $project->ratinge2}}</td>
            <td class="contenttable">{{ $project->ratingt3}}</td>
            <td class="contenttable">{{ ($project->ratingq1 + $project->ratinge2 + $project->ratingt3 )/ 3}}</td>
            <td class="contenttable"> {{ $project->remarks }}</td>
            <td class="contenttable">{{ date_format($project->created_at, 'jS M Y') }}</td>
            <td>
                    <form  action="{{ route('projects.destroy', $project->id) }}" style="display: inline" method="POST" onsubmit="return confirm('Are you sure to delete this item?')">

                        <a href="{{ route('projects.show', $project->id) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="{{ route('projects.edit', $project->id) }}">
                            <i class="fas fa-edit  fa-lg"></i>

                        </a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                            <i class="fas fa-trash fa-lg text-danger"></i>

                        </button>
                    </form>
                </td>
            </tr>
            
        </tbody>

        @endforeach
        
        </table>
        </div>

        <footer class=" footer py-4 mt-auto  " id="non-printable">
                    <div class="container-fluid px-4" >
                        <div class="d-flex align-items-center justify-content-between small" >
                            <div class="text-muted">Copyright &copy; Test ---</div>
                            <div class="d-flex align-items-center justify-content-around" id="non-printable" >
                                <button onClick="window.print()">Print this page  <i class="fa fa-print" aria-hidden="true"></i></button></div>
                                <button onclick="exportTableToExcel('tblData')">Export Table Data To Excel File <i class="fa fa-clone" aria-hidden="true" ></i></button>
                            <div class="text-muted" >
                                <a href="">Privacy Policy</a>
                                &middot;
                                <a href="">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
                <script>

                    function exportTableToExcel(tableID, filename = ''){
                        var downloadLink;
                        var dataType = 'application/vnd.ms-excel';
                        var tableSelect = document.getElementById(tableID);
                        var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');
                        
                        // Specify file name
                        filename = filename?filename+'.xls':'ipcr.xls';
                        
                        // Create download link element
                        downloadLink = document.createElement("a");
                        
                        document.body.appendChild(downloadLink);
                        
                        if(navigator.msSaveOrOpenBlob){
                            var blob = new Blob(['\ufeff', tableHTML], {
                                type: dataType
                            });
                            navigator.msSaveOrOpenBlob( blob, filename);
                        }else{
                            // Create a link to the file
                            downloadLink.href = 'data:' + dataType + ', ' + tableHTML;
                        
                            // Setting the file name
                            downloadLink.download = filename;
                            
                            //triggering the function
                            downloadLink.click();
                        }
                    }
                            </script>

              
             
          

        
  

    {!! $projects->links() !!}

@endsection

