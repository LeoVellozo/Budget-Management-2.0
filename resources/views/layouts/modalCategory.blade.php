<div class="modal-release">

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#categoriesModal">
    New Category
    </button>

    <!-- Modal -->
    <div class="modal fade" id="categoriesModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="categoriesModal">New Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('category-store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="nameRelease" class="form-label">Name</label>
                            <input type="text" class="form-control" id="nameRelease">
                        </div>
                            <label for="typeRelease" class="form-label">Select Type:</label>
                            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                            <input type="radio" class="btn-check" name="type" id="btnradio1" autocomplete="off" checked value="EA">
                            <label class="btn btn-outline-success" for="btnradio1" >Earnings</label>
                    
                            <input type="radio" class="btn-check" name="type" id="btnradio2" autocomplete="off" value="EX">
                            <label class="btn btn-outline-danger" for="btnradio2" >Expenses</label>
                        </div>
                        </form>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <div class="container">

    <form action="{{ route('category-store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nameRelease" class="form-label">Name</label>
            <input type="text" class="form-control" name="name">
        </div>
            <label for="typeRelease" class="form-label">Select Type:</label>
            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
            <input type="radio" class="btn-check" name="type" id="btnradio1" autocomplete="off" checked value="EA">
            <label class="btn btn-outline-success" for="btnradio1" >Earnings</label>
    
            <input type="radio" class="btn-check" name="type" id="btnradio2" autocomplete="off" value="EX">
            <label class="btn btn-outline-danger" for="btnradio2" >Expenses</label>
        </div>
        <div class="mt-3">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
</div> --}}
