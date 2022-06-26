 @extends('layouts.masters')

@section('title', 'Add Section')

@section('content')

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Feature</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.') }}">Dashboard</a></li>

              <li class="breadcrumb-item"><a href="{{ route('admin.features') }}">Feature List</a></li>
              <li class="breadcrumb-item active">Add Features</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


        <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">General Details</h3>

              
            </div>
            <div class="card-body">

            	<form method="post" action="{{ route('admin.store-features') }}" enctype="multipart/form-data">
            		@csrf

              <div class="form-group">
                <label for="section">Section<span class="estricCls">*</span></label>
              <select name="section" class="form-control">
                <option value="WHY_MAVEN_SILICON_list">WHY MAVEN SILICON</option>
                <option value="What_makes_our_courses_unique">What makes our courses unique  ------- corporate-training</option>
                <option value="What_makes_our_courses_unique_talent_partner 
">What makes our courses unique  -------  talent partner </option>
                <option value="Our_Career_Development_Training">Our_Career_Development_Training</option>
                <option value="about">About</option>
               
              </select>

                @error('section')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror  
              </div>
			  
              <div class="form-group">
                <label for="name">Name</label>
            
                  <input name="name" id="name" class="form-control custom-select" type="text" value="{{ old('name') }}" placeholder="Enter name" autocomplete="type"  autofocus>
   
              </div>
              
             

              <div class="form-group">
                <label for="inputName">Image</label>
                <input type="file" name="image"  id="image" class="form-control">
              </div>
             
              <div class="form-group">
                <label for="description">Description</label>
                <textarea type="text" name="description"  id="ckeditor" class="ckeditor form-control @error('description') is-invalid @enderror" placeholder="Enter description"  autocomplete="description"  autofocus ></textarea>

                @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror  
              </div>
              

              <div class="form-group">
               <input type="submit" name="Save" class="btn btn-success">
              </div>

			</form>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
       
      </div>


    </section>
    <!-- /.content -->

@stop