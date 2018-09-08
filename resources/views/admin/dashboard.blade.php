@extends('admin.layouts.app_admin')

@section('content')
  <div class="container">
      <div class="row">
      	<div class="col-sm-3">
      		<div class="jumbotron">
      			<p>
      				<span class="label text-primary">
      					Категорий 0
     				</span>
     			</p>
      		</div>
      	</div>
      	<div class="col-sm-3">
      		<div class="jumbotron">
      			<p>
      				<span class="label text-primary">
      					Материалов 0
     				</span>
     			</p>
      		</div>
      	</div>
      	<div class="col-sm-3">
      		<div class="jumbotron">
      			<p>
      				<span class="label text-primary">
      					Посетителей 0
     				</span>
     			</p>
      		</div>
      	</div>
      	<div class="col-sm-3">
      		<div class="jumbotron">
      			<p>
      				<span class="label text-primary">
      					Сегодня 0
     				</span>
     			</p>
      		</div>
      	</div>
      </div>

      <div class="row">
      	<div class="col-sm-6">
      		<a href="#" class="btn btn-default btn-block btn-outline-dark">Создать Категорию</a>
      		<a href="#" class="list-group-item">
      			<h4 class="list-group-item-heading">Категория первая</h4>
      			<p class="list-group-item-text">
      				Кол-во материалы
      			</p>
      		</a>
      	</div>
      	<div class="col-sm-6">
      		<a href="#" class="btn btn-default btn-block btn-outline-dark">Создать Материал</a>
      		<a href="#" class="list-group-item">
      			<h4 class="list-group-item-heading">Материал первая</h4>
      			<p class="list-group-item-text">
      				Кол-во категория
      			</p>
      		</a>
      	</div>
      </div>
  </div>
@endsection
