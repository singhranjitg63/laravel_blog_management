<x-layout>
    <div class="container">
        <div class="d-flex justify-content-between">
            <h2>Categories Table</h2>
            <button class="btn btn-primary m-3"><a class="text-white" href="/categoriecreate">Add new Categorie</a></button>
        </div>
        <form class="w-100 me-3">
            <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
        </form>
        <br>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Id.No</th>
                    <th>Name Categorie</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($listing as $listshow)
                <tr>
                    <td>{{$listshow->id}}</td>
                    <td>{{$listshow->name}}</td>
                    <td>
                        <button type="button" class="btn btn-warning">Edit</button>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="3" class="text-center">Not data found</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-layout>