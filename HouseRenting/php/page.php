<?php
     function getpage($src,$sq,$bedroom,$bathroom,$price,$location){
         $var="<div class=\"col-md-4 mb-5\">
                        <div class=\"media-38289 rounded\">
                            <a href=\"../pages/find_a_home-single_page.php\" class=\"d-block\"><img src=$src alt=\"Image\" class=\"img-fluid\"></a>
                            <div class=\"text\">
                                <div class=\"d-flex justify-content-between mb-3\">
                                    <div class=\"sq d-flex align-items-center\"><i class=\"fas fa-vector-square pr-1\"></i><span>$sq</span></div>
                                    <div class=\"bed d-flex align-items-center\"><i class=\"fas fa-bed pr-1\"></i><span>$bedroom</span></div>
                                    <div class=\"bath d-flex align-items-center\"><i class=\"fas fa-bath pr-1\"></i><span>$bathroom</span></div>
                                </div>
                                <h3 class=\"mb-3\"><a href=\"#\">$price</a></h3>
                                <span class=\"d-block small address d-flex align-items-center\"> <span class=\"icon-room mr-3 text-primary\"></span> <span>\"$location</span></span>
                            </div>
                        </div>
                    </div>";

        echo $var;
    }
   
?>