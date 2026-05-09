<x-layout>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <div>
            <section class="">
                <div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: hsl(0, 0%, 96%)">
                    <div class="container">
                        <div class=" gx-lg-5 align-items-center">
                            <div class="col-lg-12 mb-5 mb-lg-0">
                                <h4 class="mb-3">Create new blogs</h4>
                                <form class="needs-validation" action="/blog" method="post">
                                     @csrf 
                                    <div class="row g-3">
                                        <div class="col-sm-6">
                                            <label for="title" class="form-label">Title</label>
                                            <input type="text" name="title" class="form-control" id="firstName" placeholder="" value="" >
                                        </div>
                                        <div class="col-12">
                                            <label for="contant">Contant</label>
                                            <textarea class="form-control" name="contant" id="exampleFormControlTextarea1" rows="5"></textarea>
                                        </div>

                                        <div class="col-12">
                                            <label for="user_id" class="form-label">User id</label>
                                            <input type="text" class="form-control" name="user_id" id="user_id">
                                        </div>

                                        <div class="col-12">
                                            <label for="categories_id" class="form-label">categories id</label>
                                            <input type="text" class="form-control" name="categories_id" id="categories_id">
                                        </div>

                                        <hr class="my-4">

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

    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2026–2027 TED IT</p>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="#">Privacy</a></li>
            <li class="list-inline-item"><a href="#">Terms</a></li>
            <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
    </footer>
</x-layout>