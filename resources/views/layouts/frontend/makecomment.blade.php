<div class="container">
    <div id="comment" class="card-body">
        <form action="/" method="post" target="_self">
            {{csrf_field()}}
            <div class="row form-group">
                <div class="col-xl-6 col-lg-6">
                    <input type="text" class="form-control rowlist" placeholder="First name" name="message[firstname]">
                </div>
                <div class="col-xl-6 col-lg-6">
                    <input type="text" class="form-control rowlist" placeholder="Last name" name="message[lastname]">
                </div>
                <div class="col-12">
                    <textarea placeholder="Please leave a message" class="form-control" style="margin-top: 1em" name="message[content]"></textarea>
                    <input type="submit" style="margin-top: 1em" class="btn btn-primary btn-sm" value="submit">
                </div>
            </div>
        </form>
    </div>
</div>