    <h1 class="text-primary mt-5 mx-3">Contact settings</h1>
    <form action="contact" method="POST" class="border border-primary rounded p-3">
        <input type="hidden" name="id" value="<?=$data['user']['id']?>">
        <div class="row form-group">
            <div class="col-lg-3">
                <label for="email">Email<span class="text-danger"> *</span></label>
            </div>
            <div class="col-lg-9">
                <input type="email" class="form-control" id="email" name="email" value="<?=$data['user']['email']?>" required>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-lg-3">
                <label for="phone">Phone</label>
            </div>
            <div class="col-lg-9">
                <input type="text" class="form-control" id="phone" name="phone" value="<?=$data['user']['phone']?>">
            </div>
        </div>
        <div class="row form-group">
            <div class="col-lg-3">
                <label for="city">City</label>
            </div>
            <div class="col-lg-9">
                <input type="text" class="form-control" id="city" name="city" value="<?=$data['user']['city']?>">
            </div>
        </div>
        <div class="row form-group">
            <div class="col-lg-3">
                <label for="address">Address</label>
            </div>
            <div class="col-lg-9">
                <input type="text" class="form-control" id="address" name="address" value="<?=$data['user']['address']?>">
            </div>
        </div>
        <div class="row form-group">
            <div class="col-lg-3">
                <label for="facebook">Facebook link</label>
            </div>
            <div class="col-lg-9">
                <input type="text" class="form-control" id="facebook" name="facebook" value="<?=$data['user']['facebook']?>">
            </div>
        </div>
        <div class="row form-group">
            <div class="col-lg-3">
                <label for="instagram">Instagram link</label>
            </div>
            <div class="col-lg-9">
                <input type="text" class="form-control" id="instagram" name="instagram" value="<?=$data['user']['instagram']?>">
            </div>
        </div>
        <div class="row form-group">
            <div class="col-lg-3">
                <label for="twitter">Twitter link</label>
            </div>
            <div class="col-lg-9">
                <input type="text" class="form-control" id="twitter" name="twitter" value="<?=$data['user']['twitter']?>">
            </div>
        </div>
        <div class="row form-group">
            <div class="col-lg-3">
                <label for="youtube">YouTube link</label>
            </div>
            <div class="col-lg-9">
                <input type="text" class="form-control" id="youtube" name="youtube" value="<?=$data['user']['youtube']?>">
            </div>
        </div>
        <div class="row form-group">
            <div class="col-lg-3">
                <label for="pinterest">Pinterest link</label>
            </div>
            <div class="col-lg-9">
                <input type="text" class="form-control" id="pinterest" name="pinterest" value="<?=$data['user']['pinterest']?>">
            </div>
        </div>
        <div class="row form-group">
            <div class="col-lg-3">
                <label for="tumblr">Tumblr link</label>
            </div>
            <div class="col-lg-9">
                <input type="text" class="form-control" id="tumblr" name="tumblr" value="<?=$data['user']['tumblr']?>">
            </div>
        </div>
        <div class="row form-group">
            <div class="col-lg-3">
                <label for="behance">Behance link</label>
            </div>
            <div class="col-lg-9">
                <input type="text" class="form-control" id="behance" name="behance" value="<?=$data['user']['behance']?>">
            </div>
        </div>
        <div class="row form-group">
            <div class="col-lg-3">
                <label for="github">Github link</label>
            </div>
            <div class="col-lg-9">
                <input type="text" class="form-control" id="github" name="github" value="<?=$data['user']['github']?>">
            </div>
        </div>
        <div class="row form-group">
            <div class="col-lg-3">
                <label for="linkedin">LinkedIn link</label>
            </div>
            <div class="col-lg-9">
                <input type="text" class="form-control" id="linkedin" name="linkedin" value="<?=$data['user']['linkedin']?>">
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            <div class="col-9">
                <span class="text-danger">*Required</span>
                <span class="text-secondary font-italic ml-5">Empty fields do not appear in the contact.</span>
            </div>
        </div>
    </form>