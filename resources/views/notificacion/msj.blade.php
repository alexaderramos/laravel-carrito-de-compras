@if (count($errors)>0)
     <div class="alert alert-danger alert-dismissable" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true" >&times;</span>
        </button>
        <ul>
          @foreach ($errors->all() as $error)
            <li>{!! $error !!}</li>
          @endforeach
          
        </ul>
     </div>
@endif

@if (Session::has('update'))
  <div class="alert alert-success alert-dismissable" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true" >&times;</span>
    </button>
    <ul>
      <strong>{{Session::get('update')}}</strong>
    </ul>
  </div>
@endif

@if (Session::has('delete'))
<div class="alert alert-danger alert-dismissable" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true" >&times;</span>
        </button>
        <ul>
           <strong>{{Session::get('delete')}}</strong>
        </ul>
     </div>
@endif

@if(Session::has('save'))
  <div class="alert alert-success alert-dismissable" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true" >&times;</span>
    </button>
    <ul>
      <strong>{{Session::get('save')}}</strong>
    </ul>
  </div>
@endif

@if (Session::has('success'))
    <div class="alert alert-success alert-dismissable" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true" >&times;</span>
        </button>
        <ul>
            <strong>Correcto!</strong>{{Session::get('success')}}
        </ul>
    </div>
@endif