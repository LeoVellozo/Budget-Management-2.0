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
                <form>
                    <div class="mb-3">
                        <label for="nameRelease" class="form-label">Name</label>
                        <input type="text" class="form-control" id="nameRelease">
                    </div>
                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                        <span>Selecione o tipo de despesa</span>
                        <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
                        <label class="btn btn-outline-success" for="btnradio1">Earnings</label>

                        <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                        <label class="btn btn-outline-danger" for="btnradio2">Expenses</label>
                        </div>
                        <select class="form-select mt-3" aria-label="Default select example">
                            <option selected>Category</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3"></option>
                        </select>
                        <a class="btn btn-primary mt-3" href="{{ 'categories' }}"> New Category</a>
                    <div class="mb-3">
                        <label for="valueRelease" class="form-label mt-3">Value</label>
                        <input type="number" class="form-control" id="valueRelease">
                    </div>
                    <div class="mb-3">
                        <label for="obsRelease" class="form-label">Obs</label>
                        <textarea type="textarea" class="form-control" id="obsRelease"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
</div>