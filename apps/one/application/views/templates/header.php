<?php get_header(); ?>
<div class="container" style="margin-top: 15px;">
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo site_url('apps/one'); ?>">Home</a></li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown">News<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo site_url('apps/one/news'); ?>">News</a></li>
                <li><a href="<?php echo site_url('apps/one/news/create'); ?>">Create</a></li>
                <li><a href="<?php echo site_url('apps/one/news/delete'); ?>">Delete</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
</div>
<div class="container">
    <div class="row">
        <h1 class="page-header"><?php echo ucfirst($title); ?></h1>