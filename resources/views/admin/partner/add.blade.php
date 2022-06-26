 @extends('layouts.masters')

@section('title', 'Add Section')

@section('content')

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Partner</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.') }}">Dashboard</a></li>

              <li class="breadcrumb-item"><a href="{{ route('admin.partner') }}">Partner List</a></li>
              <li class="breadcrumb-item active">Add Section</li>
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

            	<form method="post" action="{{ route('admin.store-partner') }}" enctype="multipart/form-data">
            		@csrf

              <div class="form-group">
                <label for="sectionTitle">Section Name<span class="estricCls">*</span></label>
              <select name="sectionTitle" class="form-control">
                <option value="Normal">NORMAL</option>
                <option value="ACADEMY_PARTNER">ACADEMY PARTNER</option>
                <option value="INDUSTRY_PARTNERS">INDUSTRY PARTNERS</option>
                <option value="HIRING_PARTNERS">HIRING PARTNERS</option>
                <option value="OUR_PARTNERS">OUR PARTNERS</option>
                 <option value="BE_A_PARTNER">BE A PARTNER</option>
                 <option value="Media_Coverage">Media Coverage</option>
               
              </select>

                @error('sectionTitle')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror  
              </div>
			  
              <div class="form-group">
                <label for="title">Title</label>
            
                  <input name="title" id="title" class="form-control custom-select" type="text" value="{{ old('title') }}" placeholder="Enter title" autocomplete="type"  autofocus>
   
              </div>
                    
            
              <div class="form-group">
                <label for="inputName">Image</label>
                <input type="file" name="image"  id="image" class="form-control">
              </div>
             
              <div class="form-group">
                <label for="description">Description</label>
                <textarea type="text" name="description"  id="description" class="ckeditor form-control @error('description') is-invalid @enderror" placeholder="Enter description"  autocomplete="description"  autofocus ></textarea>

                @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror  
              </div>
              <div class="form-group">
                <label for="url">URL</label>
                <input type="url" name="url"  id="url" class="form-control">
                </select>
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