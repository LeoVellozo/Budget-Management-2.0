<div class="modal-release">

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
New Release
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New Release</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <form action="{{ $action }}" method="POST">
                    @csrf
                    @method($method)

                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="nameRelease" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="date" class="form-label">Date</label>
                        <input type="date" class="form-control" name="data_release">
                    </div>
                    <label for="typeRelease" class="form-label">Select Type:</label>
                    <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                    <input type="radio" class="btn-check" name="type" id="btnradio1" autocomplete="off" checked value="EA">
                    <label class="btn btn-outline-success" for="btnradio1" >Earnings</label>

                    <input type="radio" class="btn-check" name="type" id="btnradio2" autocomplete="off" value="EX">
                    <label class="btn btn-outline-danger" for="btnradio2" >Expenses</label>
                    </div>
                    <div>
                        <select class="form-select mt-3" aria-label="Default select example" name="category">
                            <option selected>Category</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3"></option>
                        </select>
                    </div>
                        <a class="btn btn-primary mt-3" href="{{ 'categories' }}"> New Category</a>
                    <div class="mb-3">
                        <label for="valueRelease" class="form-label mt-3">Value</label>
                        <input type="number" class="form-control" id="valueRelease" name="value">
                    </div>
                    <div class="mb-3">
                        <label for="obsRelease" class="form-label">Obs</label>
                        <textarea type="textarea" class="form-control" id="obsRelease" name="obs"></textarea>
                    </div>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- <form action="{{ route('releases-store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="nameRelease" name="name">
    </div>
    <div class="mb-3">
        <label for="date" class="form-label">Date</label>
        <input type="date" class="form-control" name="data_release">
    </div>
    <label for="typeRelease" class="form-label">Select Type:</label>
    <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
    <input type="radio" class="btn-check" name="type" id="btnradio1" autocomplete="off" checked value="EA">
    <label class="btn btn-outline-success" for="btnradio1" >Earnings</label>

    <input type="radio" class="btn-check" name="type" id="btnradio2" autocomplete="off" value="EX">
    <label class="btn btn-outline-danger" for="btnradio2" >Expenses</label>
    </div>
    <div>
        <select class="form-select mt-3" aria-label="Default select example" name="category">
            <option selected>Category</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3"></option>
        </select>
    </div>
        <a class="btn btn-primary mt-3" href="{{ 'categories' }}"> New Category</a>
    <div class="mb-3">
        <label for="valueRelease" class="form-label mt-3">Value</label>
        <input type="number" class="form-control" id="valueRelease" name="value">
    </div>
    <div class="mb-3">
        <label for="obsRelease" class="form-label">Obs</label>
        <textarea type="textarea" class="form-control" id="obsRelease" name="obs"></textarea>
    </div>
    <div class="mt-3">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form> --}}
</div>
