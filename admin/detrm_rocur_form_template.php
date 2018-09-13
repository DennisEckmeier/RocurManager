<hr>
    <h2>Register New Rocur Account</h2>

<!-- name	tw_handle	description	start_date	slot_duration	slot_start_day	wp_category -->

    <form action="/action_page.php">
    <div class="row">
      <div class="col-75">
        <label for="rocur_name">Name</label>
        <input type="text" id="rocur_name" name="rocurname" placeholder="name the account...">
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
        <label for="rocur_desc">Description</label><br />
        <textarea id="rocur_desc" name="rocurdesc"></textarea>
      </div>
    </div>
    <div class="row">
      <div class="col-75">
        <label for="startday">Slots start on...</label>
        <select>
            <option value=1>Sunday</option>
            <option value=2>Monday</option>
            <option value=3>Tuesday</option>
            <option value=4>Wednesday</option>
            <option value=5>Thursday</option>
            <option value=6>Friday</option>
            <option value=7>Saturday</option>
        </select>
      </div>
      <div class="col-75">
        <label for="slot_duration">Slot duration</label>
        <input type="text" id="tw_handle" name="twitter_handle" placeholder="Slots continue for ... days">
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>
