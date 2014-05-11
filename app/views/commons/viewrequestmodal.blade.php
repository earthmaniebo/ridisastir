<div id="viewRequestModal" class="reveal-modal" data-reveal>
    <div class="row">
        <div class="medium-12 columns">
            <table class="medium-12 columns">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Request</th>
                        <th>Contact Number</th>
                        <th>Date of Request</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($citizens as $citizen)
                        <tr>
                            <td>{{ $citizen["id"] }}</td>
                            <td>{{ $citizen["name"] }}</td>
                            <td>{{ $citizen["request"] }}</td>
                            <td>{{ $citizen["contact_no"] }}</td>
                            <td>{{ $citizen["created_at"] }}</td>
                            <td><button class="button tiny">Approve</button>&nbsp;<button class="button tiny alert">Deny</button></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <a class="close-reveal-modal">&#215;</a>
</div>