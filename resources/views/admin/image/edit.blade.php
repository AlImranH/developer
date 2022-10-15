
@extends('layouts.dashboard')
@section('content')
<!-- Page Heading -->
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Image</h1>
    <a href="{{ route('image.index') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-arrow-circle-left fa-sm text-white-50"></i> Back</a>
</div>
<!-- Content Row -->
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                Update Image
            </div>
            <div class="card-body">
                <form action="{{ route('image.update', $image->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="position">Position</label>
                        <select name="position" id="position" class="form-control @error('position') is-invalid @enderror">
                            <option value="">Select One</option>
                            <option value="header" {{ ($image->position == 'header') ? 'selected' : '' }}>Header</option>
                        </select>
                        
                        @error('position')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                        @enderror
                    </div>
                    

                    <div class="form-group">
                        <label for="image">Image</label>
                        <img src="{{ Storage::url($image->image) }}" alt="{{ $image->position }}" width="300">
                        <input type="file" name="image" class="form-control-file" id="image">
                        <small id="image" class="form-text text-muted">Image dimension: 1280X850</small>
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection