@extends('layout.mixed')

@section('title', 'My Company')

@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="card mb-4">
            <h5 class="card-header">Company Settings</h5>
            <div class="card-body">
                 @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <form action="{{ route('admin.mycompany.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="default_company_name" class="form-label">Company Name</label>
                        <input
                            type="text"
                            class="form-control"
                            id="default_company_name"
                            name="company_name"
                            value="{{ $settings['name'] ?? '' }}"
                        />
                        @error('company_name') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="mb-3">
                        <label for="default_company_logo">Logo</label>                        
                        <input type="file" id="default_company_logo" name="company_logo" class="form-control">
                        @error('company_logo') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <img src="{{ $settings['logo'] === 'logo.png' ? asset('assets/img/logo.png') : asset('storage/' . ($company['logo'] ?? '')) }}" width="100" alt="Logo" class="border mb-3"><br>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection