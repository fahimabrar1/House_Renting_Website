<?php
     function getpage($src,$sq,$bedroom,$bathroom,$price,$location,$description,$housetitle,$id){

        
         $var1="<div class=\"col-md-4 mb-5\" >
                        <div class=\"media-38289 rounded\">
                            <a href=\"../pages/find_a_home-single_page.php?src=$src&&sq=$sq&&bedroom=$bedroom&&bathroom=$bathroom&&price=$price&&location=$location&&id=$id&&des=$description&&title=$housetitle\" class=\"d-block\"><img src=$src name=\"srcpg\" alt=\"Image\" class=\"img-fluid\"></a>
                            <div class=\"text\">
                                <div class=\"d-flex justify-content-between mb-3\">
                                    <div class=\"sq d-flex align-items-center\" name=\"sqpg\"><i class=\"fas fa-vector-square pr-1\"></i><span>$sq</span></div>
                                    <div class=\"bed d-flex align-items-center\" name=\"bedroompg\"><i class=\"fas fa-bed pr-1\"></i><span>$bedroom</span></div>
                                    <div class=\"bath d-flex align-items-center\" name=\"bathroompg\"><i class=\"fas fa-bath pr-1\"></i><span>$bathroom</span></div>
                                </div>
                                <div name=\"pricepg\"><h3 class=\"mb-3\"><a href=\"#\">$price</a></h3></div>
                                <div name=\"locationpg\"><span class=\"d-block small address d-flex align-items-center\"> <span class=\"icon-room mr-3 text-primary\"></span> <span>$location</span></span></div>
                                <div name=\"decpg\"></div>
                                <div id=\"titlepg\"></div>
                            </div>
                        </div>
                    </div>";

        echo $var1;
    }

   
?>