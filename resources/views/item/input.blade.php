@include('layout.header')

<div class="container-sm my-5">
    <form action="{{ route('item.store') }}" method="POST">
        @csrf
        <div class="row justify-content-center">

            <div class="p-5 bg-light rounded-3 border col-xl-6">
                <div class="mb-3 text-center">
                    <i class="bi bi-archive-fill fs-1"></i>
                    <h4>INPUT ITEM</h4>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input class="form-control @error('name')
            is-invalid @enderror" type="text"
                            name="name" id="name" value="{{ old('name') }}" placeholder="Enter the name">
                        @error('name')
                            <div class="text-danger"><small>{{ $message }}</small></div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input class="form-control @error('price') is-invalid
            @enderror" type="number"
                            name="price" id="price" value="{{ old('price') }}" placeholder="Enter the price">
                        @error('price')
                            <div class="text-danger"><small>{{ $message }}</small></div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="description" class="form-label">Description</label>
                        <input class="form-control @error('description')
            is-invalid @enderror"
                            type="text" name="description" id="description" value="{{ old('description') }}"
                            placeholder="Enter the description">
                        @error('description')
                            <div class="text-danger"><small>{{ $message }}</small></div>
                        @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="unit" class="form-label">Unit</label>
                        <select name="unit" id="unit" class="form-select">
                            @foreach ($units as $unit)
                                <option value="{{ $unit->id }}" {{ old('unit') == $unit->id ? 'selected' : '' }}>
                                    {{ $unit->code . ' - ' . $unit->name }}</option>
                            @endforeach
                        </select>
                        @error('unit')
                            <div class="text-danger"><small>{{ $message }}</small></div>
                        @enderror
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6 d-grid">
                        <a href="{{ route('item.index') }}" class="btn
            btn-outline-dark btn-lg mt-3"><i
                                class="bi-arrow-left-circle me-2"></i>
                            Cancel</a>
                    </div>
                    <div class="col-md-6 d-grid">
                        <button type="submit" class="btn btn-dark btn-lg
            mt-3"><i
                                class="bi-check-circle me-2"></i> Save</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

@include('layout.footer')
