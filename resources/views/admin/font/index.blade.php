@extends('admin.master')

@section('title', 'Fonts')

@section('main')
<main>


<div class="row">
	<div class="col s1"></div> 
	
	<div class="col s10 ">
	<div class="row">
		<div class="col s6">
			<h3>All Fonts</h3>
		</div>	
		{{-- @can('create',App\Font::class)  --}}	
		<div class="col s4 ">
			<a href="{{route('font.create')}}" class="btn blue">Add New Font </a>
		</div>
		{{-- @endcan	 --}}	
	</div>
	
	<table class="table">
		<thead>
			<th>#</th>
			<th>Font Name</th>
			<th>Size</th>
			<th>Demo</th>			
			<th></th>			
		</thead>
		<tbody>
			@foreach($fonts as $font)
	<tr>
		<th>{{ $font->id }}</th>
		<td>{{ $font->name}}</td>
		<td>{{ $font->size }}</td>
		<td> <p style="font-family:{{ $font->name }};font-size:{{$font->size}};">
			Lorem ipsum dolor sit amet, discere perfecto complectitur no eum. Pericula abhorreant ei duo. Per ex oportere constituto, numquam accusam dissentiet sit ex. An pri primis utroque albucius, id eos libris noster.

Inani urbanitas ut eam, eos et populo doming periculis. Vim consul gubergren efficiantur ut, ea fugit viris mel. Ei facilis instructior vis, mei ex inani libris adolescens. Ad vix aeterno noluisse, ea magna dolor soluta sed.
</p> </td>	
		
		<td>
			<div class="row">
				{{-- @can('update',$category) 
				<div class="col s6">
					<a href="{{ route('font.edit',$font->id) }}" class="btn ">Edit</a>
			
				</div>
				 @endcan --}}
				{{-- @can('delete',$category) 
				<div class="col s6">
					{!! Form::open(['route'=>['font.destroy',$font->id],'method'=>'DELETE']) !!}
	{!! Form::submit('Delete',['class'=>' btn']) !!}
	{!! Form::close() !!}
				</div>
				 @endcan  --}}
			</div>
			
		</td>		
	</tr>
	@endforeach
		</tbody>

	</table>
	
		   </div>
	</div>
</main>
@endsection
