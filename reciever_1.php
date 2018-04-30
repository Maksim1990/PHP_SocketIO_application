<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.3/css/bootstrap.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.0.4/socket.io.slim.js"></script>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-sm-offset-0 col-sm-10">
            <table class="table">
                <thead class="thead-inverse">
                <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Message</th>
                </tr>
                </thead>
                <tbody id="message_block"></tbody>
            </table>

        </div>
    </div>
</div>
<script>

    var socket= io.connect("http://localhost:3001");
	var count=1;
    socket.on("new_message",function (data) {
		var message="<td>"+count+"</td><td>"+data.first_name+"</td><td>"+data.last_name+"</td><td>"+data.email+"</td><td>"+data.message+"</td>";
		$('<tr>').html(message+'</tr>').appendTo('#message_block');
		count++;
		})
</script>

</body>
</html>