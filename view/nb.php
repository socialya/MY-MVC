<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<table>
    <tr style="display:none"><td>Value 1</td></tr>
    <tr><td>Value 2</td></tr>
</table>
<script src='<?= __PABLIC__ . "nbmyadmin" ?>/jquery.1.7.js' type="text/javascript"></script>
<script>
    $(function () {
        var div=$("tr:visible");
        alert(div);
    });
</script>

</body>
</html>