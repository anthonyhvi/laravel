@extends('layouts.app')

@section('content')
		<div class='card'>
			<div class='card-header'>
				<img src="{{config('logo.path') . $skill->logo}}" width="40px" height="40px"> {{$skill->name}} : {{$skill->description}}
			</div>
			<div class='card-body'>

			</div>
		</div>



@endsection
