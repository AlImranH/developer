@extends('layouts.dashboard')
@section('content')
<!-- Page Heading -->
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">client</h1>
    <a href="{{ route('client.index') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-arrow-circle-left fa-sm text-white-50"></i> Back</a>
</div>
<!-- Content Row -->
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                Update client
            </div>
            <div class="card-body">
                <form action="{{ route('client.update', $client->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" aria-describedby="emailHelp" placeholder="Enter name" maxlength="255" value="{{ $client->name }}">
                        @error('name')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="designation">Designation</label>
                        <input type="text" name="designation" class="form-control @error('designation') is-invalid @enderror" id="designation" aria-describedby="emailHelp" placeholder="Enter designation" maxlength="255" value="{{ $client->designation }}">
                        @error('designation')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="reviews">Reviews</label>
                        <textarea name="reviews" class="form-control @error('reviews') is-invalid @enderror" id="reviews" cols="30" rows="5"> {{ $client->reviews }}</textarea>
                        @error('reviews')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="image">Image</label>
                        <img src="{{ Storage::url($client->image) }}" alt="{{ $client->name }}" class="my-1">
                        <input type="file" name="image" class="form-control-file" id="image" accept="image/*">
                        <small id="image" class="form-text text-muted">image dimension: 261X254</small>
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection