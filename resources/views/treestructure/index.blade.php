@extends ('layouts.app')
@section ('content')



<div class="container" style="width:900px;">
	<br /><br />

	@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

	<div class="row">
	 <div class="col-md-6">
	  <h4 align="center"><u>Dodaj element</u></h4>
	  <br />
		<form action="{{route('TreeStructure.store')}}" method="post">
		{{csrf_field()}}
	   <div class="form-group">
		<label>Zaznacz rodzica</label>
		{{drawTreeSelect('parent', $nodes)}}
	   </div>
	   <div class="form-group">
		<label>Podaj nazwę</label>
		<input type="text" name="name"class="form-control">
	   </div>
	   <div class="form-group">
		<button class="btn btn-info">Dodaj</button>
	   </div>
	  </form>
 
 <!--                                           -->
 
 <h4 align="center"><u>Usuń element</u></h4>
	  <br/>
	 
		<label>Zaznacz element</label>
		<form method="post" action="{{route('TreeStructure.destroy')}}">	
				<input type="hidden" name="_method" value="delete"/>
					{{csrf_field()}}
			{{drawTreeSelect('id_node', $nodes)}}
			<br>
	   <div class="form-group">
		<button class="btn btn-info">Usuń</button>
	   </div>
	  </form>
 <!--                                           -->
 
  <h4 align="center"><u>Zmień nazwę</u></h4>
	  <br />
	  	<form action="{{route('TreeStructure.update')}}" method="post">
			<input type="hidden" name="_method" value="put"/>
					 {{csrf_field()}}
	   <div class="form-group">
		<label>Zaznacz element</label>
		{{drawTreeSelect('old_name', $nodes)}}
		{{-- <select name="category3" id="category3" class="form-control">
		
		</select> --}}
	   </div>
	   <div class="form-group">
		<label>Podaj nową nazwę</label>
		<input type="text" name="name"class="form-control">
	   </div>
	   <div class="form-group">
		<button class="btn btn-info">Zmień</button>
	   </div>
	  </form>
 <!--                                           -->
 
   <h4 align="center"><u>Zmień rodzica</u></h4>
	  <br />
	  <form action="{{route('TreeStructure.update_2')}}" method="post">
		<input type="hidden" name="_method" value="patch"/>
				 {{csrf_field()}}
	   <div class="form-group">
		<label>Zaznacz element</label>
		{{drawTreeSelect('old_parent', $nodes)}}
	   </div>
	   <div class="form-group">
		<label>Zaznacz nowego rodzica</label>
		{{drawTreeSelect('parent', $nodes)}}
		</div>
	   <div class="form-group">
		<button class="btn btn-info">Zmień</button>
		</div>
	  </form>
 
 <!--                                           -->
 
	 </div>
	 <div class="col-md-6">
	  <h4 align="center"><u>Struktura drzewa</u></h4>
	  <br />

	  <div class="panel-body">
		<div class="row justify-content-center">
			<div class="row">
				<div class="col-md-12">
					<div id="treeview">
						<script> $('#treeview').treeview({data:{{tree_json($nodes)}} }); </script>
					</div>
					</br>
					<button id="but1"type="button" class="btn btn-info">rozwiń</button>
					<button id="but2"type="button" class="btn btn-info">zwiń</button>
					<script>
							$('#but1').click(function(){ $('#treeview').treeview('expandAll', { silent: true }); });
							$('#but2').click(function(){ $('#treeview').treeview('collapseAll', { silent: true }); });
					</script>
			  </div>
		  </div>
	  </div>
 	 </div>
	 </div>   
	</div>
   </div>
@stop