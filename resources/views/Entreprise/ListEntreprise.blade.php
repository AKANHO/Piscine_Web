@extends('layouts.defaultEntreprise')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>la liste des entreprises</h2>
            </div>
            
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-striped table-bordered"><font></font>
                  <thead><font></font>
                    <tr><font></font>
                      <th>Name</th><font></font>
                      <th>Email Address</th><font></font>
                      <th>Mobile Number</th><font></font>
                    </tr><font></font>
                  </thead><font></font>
    </table>
    
    
      
@endsection