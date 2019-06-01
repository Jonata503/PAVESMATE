<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<style>
#selectedFiles img {
            max-width: 200px;
            max-height: 200px;
            float: left;
            margin-bottom:10px;
        }
        #userActions input{
            width: auto;
            margin: auto;
        }
        #selectFiles img {
            max-width: 200px;
            max-height: 200px;
            float: left;
            margin-bottom:10px;
        }
</style>
</head>

<body>
<form action="index.php" id="myForm" name="myForm" enctype="multipart/form-data" method="post" accept-charset="utf-8">
   desktop:<input type="file" id="files" name="files" multiple><br/>
        <div id="selectedFiles"></div>
    mobile:<input type="file" id="mobile" name="mobile" multiple><br/>
        <div id="selectFiles"></div>
<button type="submit">Submit</button>
</form></br></body>
</body>
</html>