<!DOCTYPE html>
<html>

<head>
    <title>Contact Us</title>
</head>

<body>

    <center>
        <h4 class="sent-notification"></h4>

        <form id="myForm">
            <h2>Send an Email</h2>

            <label>Name</label>
            <input id="name" type="text" placeholder="Enter Name">
            <br><br>

            <label>Email</label>
            <input id="email" type="text" placeholder="Enter Email">
            <br><br>
            <label>Subject</label>
            <input id="subject" type="text" placeholder=" Enter Subject">
            <br><br>

            <!-- <label>Message</label> -->
            <textarea id="body" rows="1" placeholder="Type Message"></textarea>
            <button type="button" id="btn" onclick="sendEmail()" value="Send An Email">Submit</button>

        </form>
    </center>

    <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#btn').click(function() {
                var name = $('#name').val();
                var email = $('#email').val();
                var msg = $('#subject').val();
                var body = $('#body').val();

                $.ajax({
                    method: 'POST',
                    url: 'sendEmail.php',
                    dataType: 'json',
                    data: {
                        name: name.val(),
                        email: email.val(),
                        subject: subject.val(),
                        body: body.val()
                    },
                    success: function(response) {
                        $('#myForm')[0].reset();
                        $('.sent-notification').text("Message Sent Successfully.");
                    }

                });

            })
        });
    </script>
    <script type="text/javascript">
        function sendEmail() {
            var name = $("#name");
            var email = $("#email");
            var subject = $("#subject");
            var body = $("#body");

            if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body)) {
                $.ajax({
                    url: 'sendEmail.php',
                    method: 'POST',
                    dataType: 'json',
                    data: {
                        name: name.val(),
                        email: email.val(),
                        subject: subject.val(),
                        body: body.val()
                    },
                    success: function(response) {
                        $('#myForm')[0].reset();
                        $('.sent-notification').text("Message Sent Successfully.");
                    }
                });
            }
        }

        function isNotEmpty(caller) {
            if (caller.val() == "") {
                caller.css('border', '1px solid red');
                return false;
            } else
                caller.css('border', '');

            return true;
        }
    </script>

</body>

</html>