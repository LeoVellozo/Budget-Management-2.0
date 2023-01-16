<div class="modal-release">

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editRelease">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
        </svg>
    </button>

    <!-- Modal -->
    <div class="modal fade" id="editRelease" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Release</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                   <form action="{{ route('releases.update',$release->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="nameRelease" name="name" value="{{$release->name}}">
                        </div>
                        <div class="mb-3">
                            <label for="date" class="form-label">Date</label>
                            <input type="date" class="form-control" name="data_release" value="{{$release->data_release}}">
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
                            <input type="number" class="form-control" id="valueRelease" name="value" value="{{$release->value}}">
                        </div>
                        <div class="mb-3">
                            <label for="obsRelease" class="form-label">Obs</label>
                            <textarea type="textarea" class="form-control" id="obsRelease" name="obs" value="{{$release->obs}}"></textarea>
                        </div>
                        <div class="mt-3">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
