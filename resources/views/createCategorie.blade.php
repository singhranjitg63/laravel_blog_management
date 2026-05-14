<x-layout>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <div>
            <section class="">
                <div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: hsl(0, 0%, 96%)">
                    <div class="container">
                        <div class=" gx-lg-5 align-items-center">
                            <div class="col-lg-12 mb-5 mb-lg-0">
                                <h4 class="mb-3">
                                    {{ isset($showCategory) ? 'Update Category' : 'Create New Category' }}
                                </h4>
                                <form class="needs-validation"
                                    action="{{ isset($showCategory) ? url('/updateCategory/'.$showCategory->id) : url('/categories') }}"
                                    method="POST">

                                    @csrf
                                    @if(isset($showCategory))
                                    @method('PUT')
                                    @endif
                                    <div class="row g-4">
                                        <div class="col-12">
                                            <label for="categories_id">Category Name</label>
                                            <input type="text" class="form-control" name="name" id="categories_id" value="{{ old('name', isset($showCategory) ? $showCategory->name : '') }}" placeholder="Enter category name">
                                            <span class="text-danger">@error('name'){{ $message }}@enderror</span>
                                        </div>
                                        <div class="col-12">
                                            <button class="w-100 btn btn-primary btn-lg" type="submit">
                                                {{ isset($showCategory) ? 'Update Category' : 'Add Category' }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

</x-layout>