$(document).ready(function (e) {
    $('#sendMessageBtn').click(function (e) {
        let name = $('#user_name').value();
        let message=$('#message').value();
        $.ajax({
            url:'page2.php',
            type:'POST',
            data:{
                uname:name,
                umessage:message,
            }

        })
    })
})