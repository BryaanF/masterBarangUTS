@include('layout.header')
<div class="row mb-0 mx-3 my-3">
    <div class="col-lg-9 col-xl-10">
        <h4 class="mb-3">{{ $pageTitle }}</h4>
    </div>
    <div class="col-lg-3 col-xl-2">
        <div class="d-grid gap-2">
            <a href="{{ route('item.create') }}" class="btn
btn-primary">Input Item</a>
        </div>
    </div>
</div>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Item Code</th>
            <th scope="col">Name</th>
            <th scope="col">Price - IDR</th>
            <th scope="col">Description</th>
            <th scope="col">Unit</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody class="table-group-divider">

        @foreach ($items as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->price }}</td>
                <td>{{ $item->description }}</td>
                <td>{{ $item->unit->name }}</td>
                <td>@include('item.actions')</td>
            </tr>
        @endforeach


    </tbody>
</table>

@include('layout.footer')
