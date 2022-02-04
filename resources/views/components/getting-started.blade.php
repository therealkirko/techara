<div class="modal fade" id="getstarted" tabindex="-1" role="dialog" aria-labelledby="getstartedLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="getstartedLabel">Getting Started on your Project</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('new-project') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="fullname" required>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name="email" placeholder="Email address" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control" name="phone" placeholder="Phone" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="service">Service</label>
                        <select name="service" id="service" class="form-control">
                            <option selected disabled>Choose service</option>
                            <option value="software-development">Software development</option>
                            <option value="maintenance-and-support">Maintenance & Support</option>
                            <option value="app-development">Mobile Development (Android/IOS)</option>
                            <option value="software-architecture">Software architecture & design</option>
                            <option value="cloud-management">Cloud Management</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea id="description" name="description" cols="30" class="form-control message" placeholder="Description"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
