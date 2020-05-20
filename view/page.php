<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>social media website</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <script src="scipt.js"></script>
    <?php
    $conn = new PDO('mysql:host=localhost;dbname=chat', 'admin', '123456');
    $sql = " SELECT * FROM `chatroom` WHERE 1";
    $stmt = $conn->query($sql);
    $result = $stmt->fetchAll();
    ?>
</head>
<body>
<div class="container-fluid">
    <h3 style="text-align: center">live chat room</h3>
    <div class="well text-center" id="chatBox">
        <?php foreach ($result as $key => $object):?>
            <span style="color: red;float: left"><?php echo $object['name']?></span>
            <span style="color: blue;float: left"><?php echo $object['message']?></span>
            <span style="float: right"><?php echo $object['time']?></span><br>
        <?php endforeach;?>
    </div>
    <form action="page2.php" id="myChatForm">
        <input type="text" name="name" id="user_name" placeholder="enter your name :"><br>
        <textarea name="message" id="message" cols="30" rows="3" placeholder="enter your message ">

        </textarea><br>
        <button class="btn btn-success btn-lg" id="sendMessageBtn">send message </button>
    </form>
</div>
</body>
</html>
