    <div id="header">  
	    <div id="menubar">
          <ul id="menu">
            <li <?= ($_GET['page']=='')?'class="current"':'' ?> ><a href="<?=$base_url?>">Home</a></li>
            <li <?= ($_GET['page']=='ourwork')?'class="current"':'' ?> ><a href="<?=$base_url?>/?title=Our Work&amp;page=ourwork">Our Work</a></li>
            <li <?= ($_GET['page']=='testimonials')?'class="current"':'' ?>><a href="<?=$base_url?>/?title=Testimonials&amp;page=testimonials">Testimonials</a></li>
            <li <?= ($_GET['page']=='projects')?'class="current"':'' ?>><a href="<?=$base_url?>/?title=Projects&amp;page=projects">Projects</a></li>
            <li <?= ($_GET['page']=='contact')?'class="current"':'' ?>><a href="<?=$base_url?>/?title=Contact Us&amp;page=contact">Contact Us</a></li>
          </ul>
        </div><!--close menubar-->
    </div><!--close header-->	