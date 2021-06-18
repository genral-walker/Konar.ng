<!-- Modal Register-->
<div class="modal fade" id="modal-register" tabindex="-1" role="dialog" aria-labelledby="modal-registerLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <form class="" id="register">
                    <h5 class="modal-title" id="modal-registerLabel">Register Your Business</h5>

            </div>
            <div class="modal-body" id="cc_content-register">
                <div>
                    <h5>Enter your details</h5>
                    <input type="text" class="form-control" name="name" placeholder="Names" required><br />
                    <input type="email" class="form-control" name="email" placeholder="Email" required><br />
                    <input type="number" class="form-control" name="phone" placeholder="Phone number" required><br />
                    <input type="text" class="form-control" name="b_name" placeholder="Business Name" required><br />
                    <input type="text" class="form-control" name="b_address" placeholder="Business Address" required><br />
                    <textarea class="form-control" name="into" placeholder="What are you into?" required></textarea><br />
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="submit" class="btn btn-success btn-register">Submit</button>
            </div>
            </form>
        </div>
    </div>
</div>

<div style="display:none;" id="cc_success">
    <div style="text-align: center;">
        <h3>Order submitted</h3>
        <br />
        <div>Our Customer Service Agent will contact you shortly</div>
        <div>Or you can feel free to call us on</div>
        <div><strong>0802 712 0000, 0808 952 0000</strong></div>
    </div>
</div>