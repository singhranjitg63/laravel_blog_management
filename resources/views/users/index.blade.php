<x-layout>
    <div class="container">
        <div class="d-flex justify-content-between">
            <h2>Users Table</h2>
            <button class="btn btn-primary m-3"><a class="text-white" href="{{ route('users.create') }}">Add new User</a></button>
        </div>
        <form class="w-100 me-3" action="{{route('users.index')}}" method="get">
            <input type="text" class="form-control" placeholder="Search..."  name="keyword" value="{{ request()->input('keyword') }}">
            <a href="{{route('users.index')}}" class="btn btn-default">Reset</a>
        </form>
        <br>
        <table class="table table-bordered" border="1">
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
                @forelse($items as $item)
                <tr>
                    <td>{{$loop->iteration + ((request()->input('page', 1)-1) * 5) }}</td> 
                    <td>{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->role}}</td>
                    <td>
                        <a href="{{route('users.edit', $item->id)}}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('users.destroy', $item->id) }}" method="POST" style="display:inline-block" onsubmit="return confirm('Are You sure')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center">Not data found</td>
                </tr>
                @endforelse
            </tbody>
        </table>
        {{$items->links()}}
    </div>
</x-layout>
<style>
    .w-5.h-5{
        width: 25px
    }
</style>