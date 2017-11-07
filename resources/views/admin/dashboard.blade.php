@extends('admin.master')

@section('title', 'Dashboard ')



@section('main')
 <main>

 
      <ul class="collapsible" data-collapsible="accordion">
    <li>
      <div class="collapsible-header"><i class="material-icons">filter_drama</i>First</div>
      <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">place</i>Second</div>
      <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">whatshot</i>Third</div>
      <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
    </li>
  </ul>

 
     <ul class="collection">
      <li class="collection-item">Alvin</li>
      <li class="collection-item">Alvin</li>
      <li class="collection-item">Alvin</li>
      <li class="collection-item">Alvin</li>
    </ul>

    <div class="add-new-post">
      <div class="row">
    <form class="col s12">
      <div class="row">
        
        <div class="input-field col s6">
          <input id="title" type="text" class="validate">
          <label for="title">Post Title</label>
        </div>
      </div>
      <div class="row">
         <div class="input-field col s12">
    <select>
      <option value="" disabled selected>Choose your option</option>
      <option value="1">Option 1</option>
      <option value="2">Option 2</option>
      <option value="3">Option 3</option>
    </select>
    <label>Materialize Select</label>
  </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
    <select multiple>
      <option value="" disabled selected>Choose your option</option>
      <option value="1">Option 1</option>
      <option value="2">Option 2</option>
      <option value="3">Option 3</option>
    </select>
    <label>Materialize Multiple Select</label>
  </div>
      </div>

      <div class="row">
    <div class="col s12">
      <ul id="tabs-swipe-demo" class="tabs">
        <li class="tab col s3"><a href="#standard" class="active">Standard</a></li>
        <li class="tab col s3"><a href="#gallery">Gallery</a></li>
        <li class="tab col s3"><a href="#video">Video</a></li>
        <li class="tab col s3"><a href="#image">Audio</a></li>
      </ul>
    </div>
    <div id="standard" class="col s12 red">Test 1 </br>Test 1 </br>Test 1 </br>Test 1 </br></div>
    <div id="gallery" class="col s12 blue">Test 2</br>Test 2</br>Test 2</br>Test 2</br></div>
    <div id="video" class="col s12 green">Test 3</br>Test 3</br>Test 3</br>Test 3</br></div>
    <div id="audio" class="col s12 yellow">Test 4</br>Test 4</br>Test 4</br>Test 4</br></div>
  </div>
        
      <div class="row">
       
  <div class="input-field col s12">
    <select>
      <optgroup label="team 1">
        <option value="1">Option 1</option>
        <option value="2">Option 2</option>
      </optgroup>
      <optgroup label="team 2">
        <option value="3">Option 3</option>
        <option value="4">Option 4</option>
      </optgroup>
    </select>
    <label>Optgroups</label>
  </div>
      </div>
      <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s12">
          <textarea id="textarea1" class="materialize-textarea"></textarea>
          <label for="textarea1">Textarea</label>
        </div>
      </div>
    </form>
  </div>
  <div class="row">

  <div class="input-field col s12 m6">
    <select class="icons">
      <option value="" disabled selected>Choose your option</option>
      <option value="" data-icon="images/sample-1.jpg" class="circle">example 1</option>
      <option value="" data-icon="images/office.jpg" class="circle">example 2</option>
      <option value="" data-icon="images/yuna.jpg" class="circle">example 3</option>
    </select>
    <label>Images in select</label>
  </div>
  </div>
  <div class="row">

  <div class="input-field col s12 m6">
    <select class="icons">
      <option value="" disabled selected>Choose your option</option>
      <option value="" data-icon="images/sample-1.jpg" class="left circle">example 1</option>
      <option value="" data-icon="images/office.jpg" class="left circle">example 2</option>
      <option value="" data-icon="images/yuna.jpg" class="left circle">example 3</option>
    </select>
    <label>Images in select</label>
  </div>

  </div>
  <div class="row">
    <p>
      <input name="group1" type="radio" id="test2" />
      <label for="test2">Yellow</label>
      
    </p>
  </div>
  <div class="row">
    <p>
     
       <input type="checkbox" id="test5" />
      <label for="test5">Red</label>
    </p>
  </div>
  <div class="row">
    <!-- Switch -->
  <div class="switch">
    <label>
      Off
      <input type="checkbox">
      <span class="lever"></span>
      On
    </label>
  </div>
  </div>
  <div class="row">
    <div class="file-field input-field">
      <div class="btn">
        <span>File</span>
        <input type="file">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
    </div>
  </div>
  <div class="row">
     <div class="file-field input-field">
      <div class="btn">
        <span>File</span>
        <input type="file" multiple>
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text" placeholder="Upload one or more files">
      </div>
    </div>
  </div>
  <div class="row">
     <input type="text" class="datepicker">
  </div>

  <div class="row">
     <input type="text" class="timepicker">
  </div>
  <div class="row">
    <div class="size">
        <textarea name="editor1"></textarea>
    <script>
      CKEDITOR.replace( 'editor1' );
    </script>
  </div>

  <div class="row">
  </div>
  <div class="row">
  </div>
  <div class="row">
  </div>

    </form>
  </div>
    </div>




  



        </main>


@endsection
