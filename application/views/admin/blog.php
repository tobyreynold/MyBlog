<?php include 'common/header.php';?>

<body class="admin">
<header class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="login">Blog Admin</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Blog</a></li>
        <li><a href="profile">Profile</a></li>
        <li><a href="user">User</a></li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li>
          <form class="navbar-form navbar-left" role="search">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
          </form>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">current user <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">logout</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</header>

    
<div class="wrapper">
  <div class="content-main">
  		<form>
          <legend>Add Blog</legend>
          <dl>
              <dd class="input-group">
                <span class="input-group-addon">Blog Name</span>
                <input type="text" class="form-control" placeholder="name..">
              </dd>
            
              <dd class="input-group">
                <span class="input-group-addon">Description</span>
                <textarea class="form-control" placeholder="description.."></textarea>
              </dd>
            
              <dd class="input-group">
                <span class="input-group-addon">Content</span>
                <textarea class="form-control" placeholder="content.."></textarea>
              </dd>
            
              <dd class="input-group">
                <span class="input-group-addon">Img Url</span>
                <input type="text" class="form-control" placeholder="url..">
              </dd>

              <dd>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-default" href="login">Back</a>
              </dd>
          </dl>
          
      </form>
  </div>
  <div class="content-secondary">
  	<div class="">  		
  	</div>
  </div>
</div>

<?php include 'common/footer.php';?>