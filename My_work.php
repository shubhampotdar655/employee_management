<!DOCTYPE html>
<html lang="en">
    <head></head>
    <body>
    <form>
    <div class="card text-white bg-white mb-3" style="max-width:100%;">
  <div class="card-body">
    <div class="form-group" action="Meetings.php" method="POST">
      <label for="inputName">Name</label>
      <input type="name" class="form-control" id="inputName" placeholder="Clients full name" required>
    </div>
  <div class="form-group">
    <label for="inputContact">Contact</label>
    <input type="text" class="form-control" id="inputContact" placeholder="Contact Details">
  </div>
  <div class="form-group">
    <label for="basicdetails">Basic Details</label>
    <input type="text-area" class="form-control" id="basicDetails" placeholder="basicdetails" placeholder="Experience or Locality">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="meetingDate">Meeting Date</label>
      <input type="date" id="meetingDate" name="meetingDate" placeholder="" class="form-control">
    </div>
    <div class="form-group col-md-4">
      <label for="inputTime">Time</label>
      <input type="time" id="inputTime" name="inputTime" placeholder="Time" class="form-control">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </div>
</div>      
  
    </body>
</html>