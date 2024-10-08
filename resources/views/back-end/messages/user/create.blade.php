<div class="modal fade" id="modalCreateUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="max-width:40%;">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Creating Users</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
           <form method="POST">

                <div class="form-group">
                   <label for="">username</label>
                   <input type="text" name="name" class=" form-control" id="">
                </div>

                <div class="form-group">
                  <label for="">email</label>
                  <input type="email" name="email" class=" form-control" id="">
                </div>

                <div class="form-group">
                  <label for="">password</label>
                  <input type="password" name="password" class="form-control" id="">
                </div>

           </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save</button>
        </div>
      </div>
    </div>
</div>