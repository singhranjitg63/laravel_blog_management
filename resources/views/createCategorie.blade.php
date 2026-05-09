<x-layout>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <div>
            <section class="">
                <div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: hsl(0, 0%, 96%)">
                    <div class="container">
                        <div class=" gx-lg-5 align-items-center">
                            <div class="col-lg-12 mb-5 mb-lg-0">
                                <h4 class="mb-3">Create new Categorie</h4>
                                <form class="needs-validation" action="/categories" method="POST">
                                     @csrf 
                                    <div class="row g-4">
                                        <div class="col-12">
                                            <label for="contant">Name Categorie</label>
                                            <input type="text" class="form-control" name="name" id="categories_id">
                                        </div>
                                        <button class="w-100 btn btn-primary btn-lg" name="submit" type="submit">Submit</button>
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