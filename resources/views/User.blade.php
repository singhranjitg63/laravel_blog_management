<x-layout>
    <div class="container">
        <div class="d-flex justify-content-between">
            <h2>Users Table</h2>
            <button class="btn btn-primary m-3"><a class="text-white" href="/usercreate">Add new User</a></button>
        </div>
        <form class="w-100 me-3">
          <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
        </form>
        <br>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Id.No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>
    </div>    
</x-layout>