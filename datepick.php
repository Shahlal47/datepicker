
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>jQuery UI Datepicker - Format date</title>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css">

    <script>
        $(function() {
            $( "#datepicker1" ).datepicker({
                dateFormat: "dd-mm-yy"
            });
        });

        $(function() {
            $( "#datepicker2" ).datepicker({
                dateFormat: "mm/dd/yy"
            });
        });

        $(function() {
            $( "#datepicker3" ).datepicker({
                dateFormat: "d M, y"
            });
        });

        $(function() {
            $( "#datepicker4" ).datepicker({
                dateFormat: "d MM, y"
            });
        });

        $(function() {
            $( "#datepicker5" ).datepicker({
                dateFormat: "DD, d MM, yy"
            });
        });
        $(function() {
            $( "#datepicker6" ).datepicker({
                dateFormat: "yy-mm-dd"
            });
        });
    </script>



</head>
<body>
<p>Date Type 1: <input type="text" id="datepicker1" size="25">Date-Month-Year (dd-mm-yy)</p>
<p>Date Type 2: <input type="text" id="datepicker2" size="25">Month/Date/Year (mm/dd/yy)</p>
<p>Date Type 3: <input type="text" id="datepicker3" size="25">Date Month, Year (d m, y)</p>
<p>Date Type 4: <input type="text" id="datepicker4" size="25">Date Month[Full], Year (dd mm, yy)</p>
<p>Date Type 5: <input type="text" id="datepicker5" size="25">Day, Date Month, Year (dd, d mm, yy)</p>
<p>Date Type 6: <input type="text" id="datepicker6" size="25">Year-Month-Date (yy-mm-dd)</p>
</body>
</html>