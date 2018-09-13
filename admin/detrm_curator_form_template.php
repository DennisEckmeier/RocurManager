<hr>
    <h2>Register New Curator</h2>
    <form action="/action_page.php">
    <div class="row">
      <div class="col-75">
        <label for="fname">Full Name</label>
        <input type="text" id="fname" name="fullname" placeholder="curator's name...">
      </div>
    </div>
    <div class="row">
      <div class="col-75">
        <label for="tw_handle">Twitter Handle</label>
       <input type="text" id="tw_handle" name="twitter_handle" placeholder="curator's twitter handle...">
      </div>
    </div>
    <div class="row">
      <div class="col-75">
        <label for="rocur_id">Rotating Curation Account</label>
         <select id="rocur_id" name="rotating_curation_account">
          <option value="0">SfProcur</option> <!-- BUILD DYNAMICALLY! -->
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-75">
        <label for="startdate">Start Date</label>
        <input type="date" id="startdate" name="start_date" placeholder="The day curation begins..."></input>
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>
</div>
