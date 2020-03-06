<div class="card">
    <h5 class="card-header">Create new post</h5>
    <div class="card-body">
        <h5 class="card-title">Content for POST</h5>

        <form class="form-horizontal" action="index.php?a=8" method="POST">
            <div class="form-group">
                <div class="col-md-12">
                    <textarea id="txtContent" name="txtContent" placeholder="Content of post"
                        class="form-control input-md card-text" required=""></textarea>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-8"></div>
                    <div class="col-md-4">
                        <button id="btnSubmit" name="btnSubmit" class="btn btn-primary btn-block">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>