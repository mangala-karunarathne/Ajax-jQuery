<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jquery AJAX load Method</title>
</head>

<body>
    <h1>Jquery AJAX load Method Example</h1>
    <button id="loadEntire">Load Entire Content</button>
    <button id="loadH2">Load h2 tag Content only</button>
    <button id="loadP">Load p tag Content only</button>
    <button id="loadPdispaly">Load display class of p tag Content </button>
    <div class="content">
        
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#loadEntire').click(function() {
                $('.content').load('content.php');
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#loadH2').click(function() {
                $('.content').load('content.php h2');
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#loadP').click(function() {
                $('.content').load('content.php p');
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#loadPdispaly').click(function() {
                $('.content').load('content.php p.display');
            });
        });
    </script>
</body>

</html>