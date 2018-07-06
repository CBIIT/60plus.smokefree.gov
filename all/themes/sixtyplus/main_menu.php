<!-- NAV TOP: -->

<nav id="navbar_sixtyplus" class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-sixyplus-navbar-collapse-1" style="z-index: 9999;"> <span class="sr-only">Toggle navigation for mobile devices</span> <span style="color:#ffffff; font-family:arial; font-weight: bold;">Menu</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
    <div class="col-sm-3 col-md-2 col-lg-3">
      <div class="navbar-header">
        <div class="logo">
          <?php if ($logo): ?>
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"> <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /> </a>
          <?php endif; ?>
        </div>
        <div class="logo-mobile"> <a href="/" title="Home"> <img src="/sites/default/files/logo-mobile.png" alt="Home"> </a> </div>
      </div>
    </div>
    
    <!-- NAV collaspe -->
    <div class="collapse navbar-collapse" id="bs-sixyplus-navbar-collapse-1">
      <div class="col-sm-7 col-md-8 col-lg-7">
        <ul class="nav navbar-nav navbar-right top-menu">
          <li class="highlight"> <a href="/quit"> <span class="fa flaticon-hand1 fa-3x fa-position1" aria-hidden="true"></span> Quit Smoking </a> </li>
          <!-- Accessible icons: include additional content, visually hidden with the .sr-only class.-->
          <li class="highlight"> <a href="/healthier"> <span class="fa flaticon-cyclist3 fa-3x fa-position1" aria-hidden="true"></span> Healthier Lifestyle </a> </li>
          <li class="highlight"> <a href="/support"> <span class="fa flaticon-heart316 fa-3x fa-position1" aria-hidden="true"></span> Support </a> </li>
          <li class="highlight"> <a href="/resources"> <span class="fa flaticon-open161 fa-3x fa-position1" aria-hidden="true"></span> Resources </a> </li>
        </ul>
      </div>
      <div class="col-sm-1 col-md-1 col-lg-1">
        <div class="inc-dec-style  form-inline">
          <div id="inc-dec-hdr">
            <h1>Text resize</h1>
          </div>
          <div style="text-align:center;">
            <div id="inc-dec1"> <a href="#" id="decfont" title="Decrease text"><img id="decfont-img" src="/sites/default/files/images/text-dec-img.png" alt="Decrease text" style="border:0;"></a> </div>
            <!--                 <div id="text-reset" style="font-size:.8em">
                          <a href="#" id="resfont" class="button buttonfont" title="Reset text">A</a>
                        </div>-->
            <div id="inc-dec2"> <a href="#" id="incfont" title="Increase text"><img id="incfont-img" src="/sites/default/files/images/text-inc-img.png" alt="Increase text" style="border:0"></a> </div>
          </div>
        </div>
      </div>
      <div id="search-wrap" class="col-sm-1 col-md-1 col-lg-1">
        <div id="sb-search" class="search-control form-inline search-style sb-search">


<form method="get" action="https://websrch.cit.nih.gov/sps/Smokefree_60Plus/Results.html?" name="search" id="search-block-form">
<label for="search-block-form" class="element-invisible">Search Smokefree 60 Plus</label>
               <input title="Enter the term(s) you wish to search." placeholder="Search" class="form-control form-text" type="text" id="edit-search-block-form--2" name="query" value="" size="15" maxlength="128">
               
        
   
        <button type="submit" class="btn btn-default">
        <!--<i class="icon glyphicon glyphicon-search" aria-hidden="true"></i>-->
        <img class="icon glyphicon glyphicon-search" src="/sites/all/themes/sixtyplus/css/image-icons/32/search.png" alt="search" aria-hidden="true"/>
        <span class="element-invisible">Search Button</span>
        </button>
   
</form>


          
          
          
          
          <?php //print render($page['search_block_plus']) ?>
          <?php
                        //$block = module_invoke('search', 'block_view');
                        //print render($block['content']);
                ?>
        </div>
      </div>
    </div>
    <!--//NAV collaspe --> 
  </div>
</nav>
<!-- //NAV TOP --> 

