<div id="addAssetModal" class="reveal-modal" data-reveal>
    <h3>Add an Asset </h3>
    {{ Form::open(array(
        'url'    => 'asset/add',
        'role'   => 'form',
        'method' => 'POST',
        'data-abide' => 'data-abide'
    )) }}
        <div class="row">
            <div class="row">
                <div class="medium-12 columns">
                    <div class="medium-6 columns">
                        <div class="medium-12 columns">
                            <label>SKU <small>required</small>
                                <input type="text" required name="sku" id="sku" placeholder="...">
                            </label>
                            <small class="error">SKU is required.</small>
                        </div>
                    </div>
                    <div class="medium-6 columns">
                        <div class="medium-12 columns">
                            <label>Name <small>required</small>
                                <input type="text" required name="name" id="name" placeholder="...">
                            </label>
                            <small class="error">Name is required</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="medium-12 columns">
                    <div class="medium-6 columns">
                        <div class="medium-12 columns">
                            <label>Status <small>required</small>
                                <input type="text" required name="status" id="status" placeholder="...">
                            </label>
                            <small class="error">Status is required.</small>
                        </div>
                    </div>
                    <div class="medium-6 columns">
                        <div class="medium-12 columns">
                            <label>Condition <small>required</small>
                                <select name="a_condition">
                                    <option value="good">
                                        Good
                                    </option>
                                    <option value="fair">
                                        Fair
                                    </option>
                                    <option value="bad">
                                        Bad
                                    </option>
                                </select>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="row">
                <input type="submit" name="add-asset-btn" value="Add Asset" class="button small-4 small-offset-4" />
            </div>
        </div>
    {{ Form::close() }}
    <a class="close-reveal-modal">&#215;</a>
</div>