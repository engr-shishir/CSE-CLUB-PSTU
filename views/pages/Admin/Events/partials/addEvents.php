<div class="modal fade" data-backdrop="static" id="eventAddModal" tabindex="-1" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-xl ">
    <div class="modal-content">
      <div class="modal-body">
        <div class="card card-primary">
          <form action="<?= url("/admin/event"); ?>" method="POST" enctype="multipart/form-data">
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Event Name</label>
                    <input type="text" class="form-control" name="event_name" placeholder="Enter event name" value="<?= ietp("event_name") ?>">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Event Description</label>
                    <textarea class="form-control" name="event_loc" rows="1" placeholder="Event Location"><?= ietp("event_loc") ?></textarea>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Registration Date</label>
                    <input type="date" class="form-control" name="reg_date" placeholder="Event registration Date" value="<?= ietp("reg_date") ?>">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Event Start Date</label>
                    <input type="date" class="form-control" name="event_date" placeholder="Event Time" value="<?= ietp("event_date") ?>">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Event Start Time</label>
                    <input type="time" class="form-control" name="event_time" placeholder="Event Time" value="<?= ietp("event_time") ?>">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="exampleInputFile">Event Logo</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="event_image">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">               
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Event Location</label>
                    <textarea class="form-control" name="event_des" rows="3" placeholder="Event Description"></textarea><?= ietp("event_des") ?></textarea>
                  </div>
                </div>
              </div>

            </div>

            <div class="card-footer">
              <div class="row">
                <div class="col-md-12">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>