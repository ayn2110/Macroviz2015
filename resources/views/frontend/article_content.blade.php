@extends('frontend/layouts/master')
@section('document_title')
ARTICLE
@stop



@section('head')
<script></script>
<style>

.cover .cover-image {
    height: 440px;
    background-size: auto 100%;
    background-position: left center;
}

</style>
@stop

@section('list')
<div class="row">
  <div class="col-md-12">
    <h2><wbr>Web Design &<wbr>
Development Tutorials</h2>
<ol>
  <li>Setting Up the Development Stack</li>
  <li>Responsive Web Dcesign</li>
</ol>
  </div>
  <div class="col-md-12">
    <h2>DESIGN</h2>
<ol>
  <li>Web Design</li>
  <li>Typography</li>
</ol>
  </div>
  <div class="col-md-12">
    <h2>UX DESIGN</h2>
<ol>
  <li>Usability</li>
  <li>User Experience</li>
    <li>UI Design</li>
    <li>E-Commerce</li>
</ol>
  </div>
</div>



@stop
@section('content')

<div class="cover-image" style="background-image: url('{{ asset('uploads/article/article_pic_02.jpg') }}')">


  <div class="License">
  Photo credit : Rod Waddington
  </div>
</div>

<div class="section" id="PageSection">

  <div class="container" id="Breadcrumb">
      <div class="row">
          <div class="col-md-12">
  <span><a href="{{ route('home') }}"></a>Home</span> > <span><a href="{{ route('article_list') }}">Article</a></span> > <span><a href="{{ route('article_content') }}">Installing npm (Node.js Package Manager) on Windows</a></span>
  </div>
  </div>
  </div>
<div class="container ArticleContent">
  <div class="row">
    <div class="col-md-12 PageArticleTitle">
      <h3><a href="{{ route('article_content') }}">Installing npm (Node.js Package Manager) on Windows</a></h3>

</div>
<div class="col-md-12">
<p class="Date"><em>Opinion — 17 June 2014</em></p>
</div>
<div class="col-md-12">
   <p style="margin-bottom:60px">
     “npm” stands for Node.js Package Manager that can be used to install thousands of Node Packaged Modules such as Yeoman, Bower, and Grunt. (We will talk about them in later articles.) First of all, we need to setting up Node.js and npm before we go further ...
   </p>
</div>
<div class="col-md-12 StepContent">
  <h3 class="Step">Step 1:</h3>

     <ol>
       <li>Go to <a href="http://www.nodejs.org">www.nodejs.org</a></li>
       <li>Click “Install” to download the latest Node.js install file</li>
     </ol>
<img src="uploads/article/article_pic_01.jpg" class="img-responsive">


</div>
<!-- step content -->
<div class="col-md-12 StepContent">
  <h3 class="Step">Step 2:</h3>

     <ol>
       <li>Doulble Click on the install file
</li>
       <li>Keep clicking the “Next” button</li>
     </ol>
<img src="uploads/article/_r3_c2.jpg" class="img-responsive">


</div>
<!-- step content -->
<div class="col-md-12 StepContent">
  <h3 class="Step">Step 3:</h3>

     <ol>
       <li>Open the “Start” menu


</li>
       <li>Right click on “Computer”</li>
       <li>Click “Properties”</li>
     </ol>
<img src="uploads/article/_r5_c2.jpg" class="img-responsive">


</div>
<!-- step content -->
<div class="col-md-12 StepContent">
  <h3 class="Step">Step 4:Click on “Advanced system settings”.</h3>

     <ol>
       <li>Doulble Click on the install file
</a></li>
       <li>Keep clicking the “Next” button</li>
     </ol>
<img src="uploads/article/_r7_c2.jpg" class="img-responsive">


</div>
<!-- step content -->
<div class="col-md-12 StepContent">
  <h3 class="Step">Step 5:Click on “Environment Variables…”</h3>


<img src="uploads/article/_r9_c2.jpg" class="img-responsive">


</div>
<!-- step content -->
<div class="col-md-12 StepContent">
  <h3 class="Step">Step 6: Double click on “PATH (User variables)” and “Path (System variables)” to check if you can see:</h3>


<img src="uploads/article/_r11_c2.png" class="img-responsive">


</div>
</div>
<!-- step content -->
<div class="container">


<div class="row AuthorContent">


<div class="col-xs-2" >
<img src="images/frontend/article/shengbo.jpg" alt="Sheng-bo"  class="img-circle"/>

</div>
<div class="col-xs-10">
  <p class="PageAuthor">By&nbsp;&nbsp;<span><a href="#">Sheng-Bo Chen</a> </span></p>
  <p>
    My focus over the last few years has been designing themes and plugins for WordPress and I now also theme for the Ghost blogging platform.
  </p>
</div>
<div class="col-xs-10" style="text-align:right">
  <p class="PageAuthor">Translate&nbsp;&nbsp;<span><a href="#">Ayn</a> </span></p>
  <p>
    Hi there. I specialize in web-design and development and have been self-employed in the web sphere for the better part of a decade.
  </p>
</div>
<div class="col-xs-2" >
<img src="images/frontend/article/ayn.jpg" alt="ayn"  class="img-circle"/>

</div>

</div>
</div></div>




<!-- article -->



</div>
@stop
