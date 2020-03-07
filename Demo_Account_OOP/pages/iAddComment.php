<div class="row">
    <div class="col-1"></div>
    <div class="card text-white bg-primary mb-9 col-10">
        <div class="card-header">
            Add comment
        </div>
        <div class="card-body">
            <form class="form-horizontal" action="index.php?a=9" method="POST">
                <input type="hidden" name="hdPostID" value="<?php echo $id; ?>" />
                <div class="form-group row">
                    <div class="col-md-9">
                        <textarea id="txtComment" name="txtComment" placeholder="Comment"
                            class="form-control input-md card-text" required=""></textarea>
                    </div>
                    <div class="col-md-3">
                        <button id="btnSubmit" name="btnSubmit" class="btn btn-info btn-block">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>