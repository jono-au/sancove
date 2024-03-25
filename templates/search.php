<!-- * Site Search ****************************************************** -->
<!-- ******************************************************************** -->
<div class="modal fade" id="siteSearch1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close md" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body container-fluid">
        <div class="widget_product_search">           
          <div id="search-container">
            <form action="/" class="woocommerce-product-search search-form" method="get">
                <input type="search" 
                       value=""
                       name="s" 
                       id="search" 
                       class="search-field search-input"
                       data-min-chars="3"
                       autocomplete="off" 
                       placeholder="Enter your search term" 
                       id="search-input" 
                       autofocus="autofocus"
                       value="<?php the_search_query(); ?>" />
                       
          
                <!-- <button type="submit"></button> -->
                <!-- <input type="hidden" name="post_type" value="post" /> -->
                <input type="hidden"/>
            </form>
          </div>
          <div id="content"></div>
        </div>
      </div>
    </div>
  </div>
</div>

</div>
<!-- .site-search -->

<style>

.modal-dialog {
    filter: drop-shadow(2px 4px 6px #000000a8);
}
  div#search-container {
    padding-bottom: 40px;
    padding-top: 10px;
}
  div#siteSearch1 {
    background: #ffffffe0;
  }
  .modal-content .modal-body {
    height: auto;
  }
  .modal-content {
    margin-top:0;
  }
  .modal-content .modal-body .search-form .search-field {
    font-size:21px;
    border-bottom:none;
    padding: 0;
    color: white!important;
  }
  .modal-content {
    background-color:#113A53;
  }
  .modal-content .modal-body .widget_product_search {
    position: relative;
    margin-bottom: 0!important;
    padding-left: 0;
    padding-right: 0;
}
input#search {
  overflow: hidden;
}
#content {
    min-height: 0;
    margin-left: 0;
}

.navbar {
    filter: drop-shadow(2px 4px 6px #000000a8);
    z-index: 100;
}

button.close.md {
  display: none;
}

input#search::placeholder {
    color: #ffffffa1;
}

@media screen and (max-width: 767px) {
  .modal-content .modal-header {
    margin-bottom: 0;
  }
  .modal-content {
    height: 100vh;
}

button.close.md {
  display: block;
}

.close {
  color: #fff;
  opacity: 1;
}
.close:hover {
    color: #fff;
}



}


</style>