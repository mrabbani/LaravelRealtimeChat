<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<div class="test">
    check
</div>
<div id="app">
    check
</div>
<script src="js/jquery-2.1.4.min.js" ></script>
<script>
    $(document).on('click', '.test',function () {
        var test = $('#app');
        console.log(test.length);
        alert('hello');
    });
</script>
</body>

</html>