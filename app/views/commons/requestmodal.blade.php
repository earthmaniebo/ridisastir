<div id="requestModal" class="reveal-modal" data-reveal>
    <h3>Add Request</h3>
    {{ Form::open(array(
        'url'    => 'request/citizen',
        'role'   => 'form',
        'method' => 'POST',
        'data-abide' => 'data-abide'
    )) }}
        <div class="row">
            <div class="medium-12 columns">
                <label>Name <small>required</small>
                    <input type="text" required name="name" id="name" placeholder="..." />
                </label>
                <small class="error">Name is required.</small>
            </div>
            <div class="medium-12 columns">
                <label>Contact Number <small>required</small>
                    <input type="text" required name="contact_no" id="contact_no" placeholder="..." />
                </label>
                <small class="error">Contact Number is required.</small>
            </div>
            <div class="medium-12 columns">
                <label>Request <small>required</small>
                    <textarea rows="4" required name="request" id="request" paceholder="medium-4.columns" ></textarea>
                </label>
                <small class="error">Request is required.</small>
            </div>
            <div class="medium-12 columns">
                <label>Barangay <small>required</small>
                    <select name="user_id">
                        @foreach($barangays as $barangay)
                            <option value="{{$barangay['id']}}">
                                {{ $barangay["name"] }}
                            </option>
                        @endforeach
                    </select>
                </label>
                <small class="error">Barangay is required.</small>
            </div>
            <div class="row">
                <input type="submit" name="request-citizen-btn" value="Request" class="button small-4 small-offset-4" />
            </div>
      </div>
  </form>
    <a class="close-reveal-modal">&#215;</a>
</div>