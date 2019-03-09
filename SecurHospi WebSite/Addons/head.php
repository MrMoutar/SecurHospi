<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Secur|Hospi <?php echo $Version ;?></title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.min.css" rel="stylesheet">
  <?php echo $SecurCode ;?>
  <script type="text/javascript">
    //<!--
        document.oncontextmenu = new Function("return false");
      function ffalse()
                {
                  return false;
                }
                function ftrue()
                {
                  return true;
                }
                document.onselectstart = new Function ("return false");
                if(window.sidebar)
                {
                   document.onmousedown = ffalse;
                   document.onclick = ftrue;
                }
        //-->
    </script>
    <?php echo $SecurCode ;?>
  <style>

    .map-container{
overflow:hidden;
padding-bottom:56.25%;
position:relative;
height:0;
}
.map-container iframe{
left:0;
top:0;
height:100%;
width:100%;
position:absolute;
}
  </style>