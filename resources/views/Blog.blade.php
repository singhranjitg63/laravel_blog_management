<x-layout>
    <div class="container ">
        <div class="d-flex justify-content-between ">
            <h2>Blogs Table</h2>
            <button class="btn btn-primary m-3"><a class="text-white" href="/blogcreate">Add new Blog</a></button>
        </div>
        <form class="w-100 me-3">
          <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
        </form>
        <br>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Id.No</th>
                    <th>Title</th>
                    <th>Contant</th>
                    <th>User_id</th>
                    <th>Categories_Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>
</x-layout>