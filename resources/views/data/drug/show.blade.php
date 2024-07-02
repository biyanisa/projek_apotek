@extends('templates/app')
@section('title', 'Data Obat')
@section('subtitle', 'Detail Obat')
@section('content')
<!-- DataTales Example -->
<div class="card shadow mb-4">
	<div class="card-header d-flex">
		<a class="btn btn-secondary" href="/drug">back</a>
		<a class="btn btn-success mx-2" href="/drug/edit/{{ $drug->id }}">edit</a>
		<form action="/drug/delete/{{ $drug->id }}" method="post">
			@method("delete")
			@csrf
			<button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?');">delete</button>
		</form>
	</div>
	<div class="card-body">
		<div class="row">
			<ul class="list-group col-md-2 font-weight-bolder">
				<li class="list-group-item">Kode</li>
				<li class="list-group-item">ID Pemasok</li>
				<li class="list-group-item">Nama Obat</li>
				<li class="list-group-item">Produsen</li>
				<li class="list-group-item">Stok</li>
				<li class="list-group-item">Harga</li>
				<li class="list-group-item">Created At</li>
				<li class="list-group-item">Updated At</li>
			</ul>
			<ul class="list-group col-md-5">
				<li class="list-group-item">{{ $drug->code }}</li>
				<li class="list-group-item">{{ $drug->supplier_id }}</li>
				<li class="list-group-item">{{ $drug->name_drug }}</li>
				<li class="list-group-item">{{ $drug->producer }}</li>
				<li class="list-group-item">{{ $drug->stock }}</li>
				<li class="list-group-item">{{ $drug->price }}</li>
				<li class="list-group-item">{{ $drug->created_at }}</li>
				<li class="list-group-item">{{ $drug->updated_at }}</li>
			</ul>
			<img width="200" height="200" src="{{ asset('storage/' . $drug->icon) }}" alt="{{ $drug->name_drug }}">
		</div>
	</div>
</div>
@stop