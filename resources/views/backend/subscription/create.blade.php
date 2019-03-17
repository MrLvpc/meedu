@extends('adminlte::page')

@section('title', '订阅推送')

@section('content_header')
    <h1>订阅推送</h1>
@endsection

@section('content')

    <div class="row">
       <div class="col-sm-12">
           <div class="alert alert-warning">
               所有订阅过本站的邮箱都将收到邮件！
           </div>
           <form action="" method="post">
               @csrf
               <div class="form-group">
                   <label>邮件标题 @include('components.backend.required')</label>
                   <input type="text" name="title" class="form-control" placeholder="邮件标题" value="{{old('title')}}" required>
               </div>
               <div class="form-group">
                   <label>邮件内容 @include('components.backend.required')</label>
                   @include('components.backend.editor', ['name' => 'content'])
               </div>
               <div class="form-group">
                   <button class="btn btn-primary" type="submit">开始群发</button>
               </div>
           </form>
       </div>
    </div>

@endsection