<div id="addUserModal" class="reveal-modal" data-reveal>
    <h3>Add your Department / Barangay</h3>
    {{ Form::open(array(
        'url'    => 'user',
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
                <label>City <small>required</small>
                    <select name="user_id">
                        @foreach($cities as $city)
                            <option value="{{$city['id']}}">
                                {{ $city["city_name"] }}
                            </option>
                        @endforeach
                    </select>
                </label>
            </div>
            <div class="medium-12 columns">
                <label>Email <small>required</small>
                    <input type="email" required name="email" id="email" placeholder="..." />
                </label>
                <small class="error">Please enter a valid email address.</small>
            </div>
            <div class="row">
                <div class="medium-12 columns">
                    <div class="medium-6 columns">
                        <div class="medium-12 columns">
                            <label>Password <small>required</small>
                                <input type="password" required name="password" id="password" placeholder="...">
                            </label>
                            <small class="error">Password is required.</small>
                        </div>
                    </div>
                    <div class="medium-6 columns">
                        <div class="medium-12 columns">
                            <label>Confirm Password <small>required</small>
                                <input type="password" required name="password_confirmation" id="password_confirmation" placeholder="..." data-equalto="password" data-invalid>
                            </label>
                            <small class="error">The password did not match</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="medium-12 columns">
                <label>Contact Number <small>required</small>
                    <input type="text" required name="contact_no" id="contact_no" placeholder="..." />
                </label>
                <small class="error">Contact number is required.</small>
            </div>
            <div class="row">
                <input type="submit" name="register-btn" value="Register" class="button small-4 small-offset-4" />
            </div>
        </div>
    {{ Form::close() }}
    <a class="close-reveal-modal">&#215;</a>
</div>