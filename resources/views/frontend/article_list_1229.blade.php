@extends('layouts/master')

@section('document_title')
Article
@stop

@section('head')
<script></script>
@stop

@section('page_banner')
images/frontend/article_banner.jpg
@stop

@section('page_title')
Article
@stop

@section('list_title')
List Title
@stop

@section('list_item')
List item
@stop

@section('content')

<div class="col-md-12">
  <div class="container">
    <div class="row">
<div class="col-md-4">
<img src="{{ asset('images/uploads/article/article_pic_01.jpg') }}" alt="">


    </div>
    <div class="col-md-8">
<p class="ArticleTitle">Installingl npm (Node.js Package Manager) on Windows</p>
      <p class="ArticleAuthor">By Sheng-Bo Chen</p>
      <p>2015/12/29</p>
    </div>
        <div class="col-md-12">
          <p class="ArticleDescription">
            “npm” stands for Node.js Package Manager that can be used to install thousands of Node Packaged Modules such as Yeoman, Bower, and Grunt. (We will talk about them in later articles.) First of all, we need to setting up Node.js and npm before we go further ...
          </p>
        </div>
    </div>
  </div>
  </div>
<!-- newscontent -->
<div class="col-md-12">
  <div class="container">
    <div class="row">
<div class="col-md-4">
<img src="{{ asset('images/uploads/article/article_pic_01.jpg') }}" alt="">


    </div>
    <div class="col-md-8">
<p class="ArticleTitle">Installingl npm (Node.js Package Manager) on Windows</p>
      <p class="ArticleAuthor">By Sheng-Bo Chen</p>
      <p>2015/12/29</p>
    </div>
        <div class="col-md-12">
          <p class="ArticleDescription">
            “npm” stands for Node.js Package Manager that can be used to install thousands of Node Packaged Modules such as Yeoman, Bower, and Grunt. (We will talk about them in later articles.) First of all, we need to setting up Node.js and npm before we go further ...
          </p>
        </div>
    </div>
  </div>
  </div>
<!-- newscontent -->


@endsection
