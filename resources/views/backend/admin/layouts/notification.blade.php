@if(session('success'))
<div class="alert alert-message alert-dismissible fade show" id="alert" role="alert" style="background: rgb(30, 185, 51); color: white; font-weight: 800; width: 800px; height: 50px; margin: 50px 0 0 50px;">
    {{ session('success')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
@elseif(session('error'))
<div class="alert alert-message alert-dismissible fade show" id="alert" role="alert" style="background: #cc2b5e; color: white; font-weight: 500;">
    {{ session('error')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>

@endif