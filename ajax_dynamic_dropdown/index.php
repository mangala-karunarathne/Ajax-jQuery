<!-- Ajax Part Start -->
<?php
$connection = mysqli_connect("localhost", "root", "", "sl_data"); // connect to DB
$query = "SELECT * FROM provinces"; // Getting table from DB
$result_set = mysqli_query($connection, $query); // send query to the database
$province_list = ""; // Initialize the variable
while ($result = mysqli_fetch_assoc($result_set)) {
    $province_list .= "<option value=\"{$result['province_id']}\">{$result['province_name']}</option>";
}
?>
<!-- Ajax Part End -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Drop Down List</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h1>Dynamic Drop Down List</h1>

    <form action="">
        <div>
            <label for="province"> Select Province: </label>
            <select name="province" id="province">
                <?php echo $province_list ?>
            </select>
        </div>
    </form>
    <!-- Adding jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <!-- jquery part start -->
    <script>
        $(document).ready(function() {
            $('#province').on("change", function() {
                var provinceId = $("#province").val();
                console.log(provinceId);
                $.get("getDistrict.php?province_id=" + provinceId, function(sata, status) {
                    
                });
            });
        });
    </script>
    <!-- jquery part End -->
</body>

</html>