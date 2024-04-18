<!DOCTYPE html>
<html>
    <head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">
        <meta charset="UTF-8">
        <meta name="description" content="php my admin">
        <meta name="keywords" content="HTML,CSS,XML,JavaScript">
        <meta name="author" content="me">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>php my admin</title>
        <style>
            .tf{
                font-family: "Share Tech Mono", monospace;
                font-weight: 400;
                font-style: normal;
            }
            .all{
                position: sticky;
                position: -webkit-sticky;
                top: 5px;
                left: 1300px;
                font-size: 30px;
                text-shadow: 5px 5px 5px black;
                background-color: white;
                max-width: 300px;
                border-radius: 10px;
                box-shadow: 5px 5px 10px black;
            }
            .bar:hover{
                color: blue;
                text-shadow: 5px 5px 5px blue;
            }
        </style>
        <script>
            function signup(){
                window.open("https://cpu-members.totalh.net/signup/")
            }
        </script>
    </head>
    <body>
        <div class="all">
            <label class="tf bar" onclick="signup()">sign up | </label>
            <label class="tf bar" onclick="signin()">sign in</label>
        </div>
    </body>
</html>