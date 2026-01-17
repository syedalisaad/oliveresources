<div class="row form-group">
    <div class="col-sm-12">
        <label class="cust-label">Template Name <strong style="color:#c00">*</strong></label>
        <div class="input-group">
            <input type="text" name="name" value="{{ old('name', $data->name ?? '') }}"
                class="form-control form-control-sm @error('name') is-invalid @enderror"
                placeholder="Enter Template Name">
            @error('name')
                <span class="error invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
    </div>
</div>

<div class="row form-group">
    <div class="col-sm-12">
        <label class="cust-label">Subject <strong style="color:#c00">*</strong></label>
        <div class="input-group">
            <input type="text" name="subject" value="{{ old('subject', $data->subject ?? '') }}"
                class="form-control form-control-sm @error('subject') is-invalid @enderror"
                placeholder="Enter Email Subject">
            @error('subject')
                <span class="error invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
    </div>
</div>

<div class="row form-group">
    <p>[email],[company],[phone],[designation]</p>
    <div class="col-sm-12">
        <label class="cust-label">Email Body <strong style="color:#c00">*</strong></label>
        <div class="input-group">
            <textarea name="body" class="texteditor form-control @error('body') is-invalid @enderror"
                placeholder="Short Description">{{ old('body', $data->body ?? null) }}</textarea>
            @error('description')
                <span class="error invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
    </div>
</div>
