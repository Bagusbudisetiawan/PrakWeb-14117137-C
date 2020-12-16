<!DOCTYPE html>
<html>
    <head>
        <title>JQuery Example</title>
        <script type="text/javascript" src="jquery-3.5.1.min.js"></script>
    </head>
    <body>
        <div id="tampil">Informasi akan ditampilkan di sini</div>
        <button id="btn_tampil">Tampilkan</button>

        <script>
            $(document).ready(function () {
                $('#btn_tampil').click(function () {
                    $('#tampil').load('demo.php');
                });
            });
        </script>
    </body>
</html>