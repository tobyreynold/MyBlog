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
        <li class="active">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">    
            <li><a href="blog">Add Blog</a></li> 
          </ul>
        </li>
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
  <table class="table table-hover" width="100%">
    <thead>
  				<tr>
          		<th>BlogId</th>
		        <th>Name</th>
		        <th>Description</th>
		        <th>Content</th>
		        <th>Img Url</th>
		        <th>Insert Time</th>
		        <th>Update Time</th>
		        <th>operation</th>
		        </tr>
  	</thead>
  	<tbody>
      <?php
      if(isset($blog)&& count($blog)):
        foreach($blog as $row):
      ?>
      <tr>
        <td class="active"><?php echo $row->id;?></td>
        <td class="success"><?php echo $row->blog_title;?></td>
        <td class="warning"><?php echo $row->content;?></td>
        <td class="danger"><?php echo $row->content;?></td>
        <td class="info"><?php echo $row->img_url;?></td>
        <td class="active"><?php echo $row->insert_time;?></td>
        <td class="success"><?php echo $row->update_time;?></td>
        <td class="warning">
          <button type="button" class="btn btn-info">Edit</button>
          <button type="button" class="btn btn-danger" data-id="<?php echo $row->id;?>">Delete</button>
        </td>
      </tr>
      <?php
        endforeach;
        endif;
      ?>
  	</tbody>
		</table>
  </div>
  <div class="content-secondary">
  	<div class="">
  		<a type="button" class="btn btn-primary" href="blog">Add Blog</a>
  		<button type="button" class="btn btn-danger">Delete All</button>
  	</div>
  </div>
</div>

<?php include 'common/footer.php';?>