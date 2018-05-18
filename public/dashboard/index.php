<!DOCTYPE html>
<html lang="en" ng-app="dashApp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link href="../assets/css/font-awesome.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="../assets/css/sb-admin.min.css">
</head>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">

 <nav-bar></nav-bar>


  <div class="content-wrapper">
    <div class="container-fluid">


   <div ui-view></div>
    </div>
    </div>

    
  <script src="../dist/dash.bundle.js"></script>
  <!-- <script src="../assets/js/sb-admin.min.js"></script> -->
</body>
</html>