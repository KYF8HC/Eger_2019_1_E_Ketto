    <h1 class="text-primary mt-5 mx-3">Text settings</h1>
    <form action="admin" method="POST" class="border border-primary rounded p-3">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-9">
                <div class="row">
                    <div class="col-4">
                        <span class="text-secondary font-italic ml-2">Title</span>
                    </div>
                    <div class="col-8">
                        <span class="text-secondary font-italic">Paragraf text</span>
                    </div>
                </div>
            </div>
        </div>
        <?php foreach ($data['texts'] as $text): ?>
            <div class="row form-group">
                <div class="col-lg-3">
                    <label for="email"><?=$text['name']?></label>
                    <input type="hidden" class="form-control" name="id[]" value="<?=$text['id']?>">
                </div>
                <div class="col-lg-9 form-row">
                    <div class="col-4">
                        <input type="text" class="form-control" name="title[]" value="<?=$text['title']?>">
                    </div>
                    <div class="col-8">
                        <input type="text" class="form-control" name="paragraf[]" value="<?=$text['paragraf']?>">
                    </div>
                </div>
            </div>            
        <?php endforeach; ?>
        <div class="row">
            <div class="col-3">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            <div class="col-9">
                <span class="text-danger">*Required</span>
                <span class="text-secondary font-italic ml-5">Empty fields do not appear in the pages.</span>
            </div>
        </div>
    </form>
