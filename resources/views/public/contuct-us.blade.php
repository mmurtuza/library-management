<div class="card">
    <div class="card-header">
        <h4>Contact Us</h4>
    </div>
    <div class="card-body">
        {{-- <form action="{{ route('contact.store') }}" method="POST"> --}}
        <form action="#" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name"
                    placeholder="Enter your name">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email"
                    placeholder="Enter your email">
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" id="message" name="message" rows="3"
                    placeholder="Enter your message"></textarea>
            </div>
            <br/>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>