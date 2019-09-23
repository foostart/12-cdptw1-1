<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1158">
   <div class="container-fluid">
       <div class="row">
           <div class="col-md-10">
               <div class="row content6">
                   <div class="col-md-6 col-sm-6 col-xs-12">
                       <div class="x_panel6"> 
                       <div class="x_panel">
                       <h2>Tooltips <small>Hover to view</small></h2>
                       <ul class="nav navbar-right panel_toolbox">
                                   <li><a data-toggle="collapse" href="#element6"><i class="fa fa-chevron-up"></i></a>
                                   </li>
                                   <li><a data-toggle="collapse" href="#element6" class="fa fa-wrench"></a>
                                   </li>
                                   <li><a id="close-link6"><i class="fa fa-close"></i></a>
                                   </li>
                       </ul>
                        </div>
                           <div class="x_title"></div>
                           <div id="element6">
                               <p>Add small overlays of content for housing secondary information.</p>
                                   <button type="button" class="btn btn-default">Left</button>
                                   <button type="button" class="btn btn-default">Top</button>
                                   <button type="button" class="btn btn-default"> Bottom</button>
                                   <button type="button" class="btn btn-default"> Right</button>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
</div>

  
        
