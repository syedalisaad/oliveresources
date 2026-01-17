<div class="row form-group">
    <div class="col-sm-12">
        <label class="cust-label">Email <strong style="color:#c00">*</strong></label>
        <div class="input-group">
            <input type="email" name="email" value="{{ old('email') ?? $data->email ?? null }}" class="form-control form-control-sm @error('email') is-invalid @enderror" placeholder="Email">
            @error('email')<span class="error invalid-feedback">{{ $message }}</span>@enderror
        </div>
    </div>
</div>

<div class="row form-group">
    <div class="col-sm-12">
        <label class="cust-label">Company </label>
        <div class="input-group">
            <input type="text" name="company" value="{{ old('company') ?? $data->company ?? null }}" class="form-control form-control-sm @error('company') is-invalid @enderror" placeholder="Company">
            @error('company')<span class="error invalid-feedback">{{ $message }}</span>@enderror
        </div>
    </div>
</div>

<div class="row form-group">
    <div class="col-sm-12">
        <label class="cust-label">Phone </label>
        <div class="input-group">
            <input type="text" name="phone" value="{{ old('phone') ?? $data->phone ?? null }}" class="form-control form-control-sm @error('phone') is-invalid @enderror" placeholder="Phone">
            @error('phone')<span class="error invalid-feedback">{{ $message }}</span>@enderror
        </div>
    </div>
</div>

<div class="row form-group">
    <div class="col-sm-12">
        <label class="cust-label">Designation</label>
        <div class="input-group">
            <input type="text" name="designation" value="{{ old('designation') ?? $data->designation ?? null }}" class="form-control form-control-sm @error('designation') is-invalid @enderror" placeholder="Designation">
            @error('designation')<span class="error invalid-feedback">{{ $message }}</span>@enderror
        </div>
    </div>
</div>


@push('css')
    <link rel="stylesheet" href="{{ admin_asset('/plugins/summernote/summernote-bs4.css') }}" />
@endpush

