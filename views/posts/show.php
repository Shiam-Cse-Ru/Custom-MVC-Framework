
<div class="container">
  <div class="row">
  <div class="navbar navbar-inverse navbar-static-top">
 
 <div class="container">
 
 <a href="#" class="navbar-brand">Custom Mvc Framework</a> <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse"></button>

      <div class="collapse navbar-collapse navHeaderCollapse">

      <ul class="nav navbar-nav">
              <li ><a href='?controller=pages&action=home'>Home</a></li>
            <li class="active"><a href='?controller=posts&action=index'>Blog</a></li>
            
           <li><a href='?controller=pages&action=register'>Register</a></li>
         
           <li><a href='?controller=pages&action=login'>Login</a></li>
             
         </ul>
      
         <ul class="nav navbar-nav navbar-right">
         <li class="dropdown"> 

  
            </li>
        </ul>
 
   
      </div>
    </div>
  </div>
  </div>




<div class="row">
<div class="col-sm-12">

<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title"><p><?php echo $post->title; ?></p></h3>
  </div>
  <div class="panel-body">
<p><?php echo $post->description; ?></p>
  </div>
</div>
</div>
</div>


<footer class="footer-basic-centered">
  <nav class="navbar navbar-default navbar-inverse" style="background-color:black;" role="navigation">
   
      <p class="text-center" style="color: #E4F1FE;"><b>Copyright@Abdullah Al Shiam 2017</b></p>

    </nav>
    </footer>
</div><!-- end container -->
  
