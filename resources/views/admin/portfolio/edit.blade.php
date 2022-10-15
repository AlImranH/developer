@extends('layouts.dashboard')
@section('content')
<!-- Page Heading -->
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">portfolio</h1>
    <a href="{{ route('portfolio.index') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-arrow-circle-left fa-sm text-white-50"></i> Back</a>
</div>
<!-- Content Row -->
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                Update portfolio
            </div>
            <div class="card-body">
                <form action="{{ route('portfolio.update', $portfolio->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="job_name">Job Name</label>
                        <input type="text" name="job_name" class="form-control @error('job_name') is-invalid @enderror" id="job_name" aria-describedby="emailHelp" placeholder="Enter job name" maxlength="255" value="{{ $portfolio->job_name }}">
                        @error('job_name')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="dribbble">Dribbble</label>
                        <input type="url" name="dribbble" class="form-control @error('dribbble') is-invalid @enderror" id="dribbble" aria-describedby="emailHelp" placeholder="Enter dribbble" maxlength="255" value="{{ $portfolio->dribbble }}">
                        @error('dribbble')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="twitter">Twitter</label>
                        <input type="url" name="twitter" class="form-control @error('twitter') is-invalid @enderror" id="twitter" aria-describedby="emailHelp" placeholder="Enter twitter" maxlength="255" value="{{ $portfolio->twitter }}">
                        @error('twitter')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="pinterest">Pinterest</label>
                        <input type="url" name="pinterest" class="form-control @error('pinterest') is-invalid @enderror" id="pinterest" aria-describedby="emailHelp" placeholder="Enter pinterest" maxlength="255" value="{{ $portfolio->pinterest }}">
                        @error('pinterest')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="image">Image</label>
                        <img src="{{ Storage::url($portfolio->image) }}" alt="{{ $portfolio->name }}" class="my-1">
                        <input type="file" name="image" class="form-control-file" id="image" accept="image/*">
                        <small id="image" class="form-text text-muted">image dimension: 450X300</small>
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection