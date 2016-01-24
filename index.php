<?php
require_once 'template.php';

$template = new Template();

$template->top();
$template->header();
?>
    <div class="container-fluid main" id="page-top">
        <div class="row">
            <div class="col-md-12 backg">
                <div class="col-md-4 col-md-offset-4 inner col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3">
                    <div class="text-box">
                        <h2>Sveicināti</h2>
                        <input style="color:black" value="lietotājvārds" onclick="this.value=''"><br>
                        <input  type=password style="color:black">

                        <p>
                            <a href="#" class="link-button">ielogoties</a>
                            <a href="register/index.html" class="link-button">reģistrēties</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-12 some-notes">
            </div>
        </div>
    </div>


    <div class="container-fluid features" id="section2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center features-text">Par mani</h2>
                    <div class="col-md-6 col-sm-12 col-xs-12 icon-box">
                        <div class="col-md-2 col-sm-2 col-xs-12">

                        </div>
                        <div class="col-md-9 col-md-offset-1 col-sm-10 col-xs-12 icon-text-box">
                            <h4>Vispārīga informācija</h4>
                            <p>Mani sauc Nils BOrmanis. Dzimis 2.janvārī 1996. gadā (Valmierā) </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12 icon-box">
                        <div class="col-md-2 col-sm-2 col-xs-12">
                        </div>
                        <div class="col-md-9 col-md-offset-1 col-sm-10 col-xs-12 icon-text-box">
                            <h4>Hobiji</h4>
                            <p>Fotografēšana, dīdžejošana (Dj Ushakow), laba laika pavadīšana ar draugiem, hokejs</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12 icon-box">
                        <div class="col-md-2 col-sm-2 col-xs-12">
                        </div>
                        <div class="col-md-9 col-md-offset-1 col-sm-10 col-xs-12 icon-text-box">
                            <h4>Ģimene</h4>
                            <p>Tētis Rolands Bormanis, mamma Anete More, māsa Paula Bormane</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12 icon-box">
                        <div class="col-md-2 col-sm-2 col-xs-12">
                        </div>
                        <div class="col-md-9 col-md-offset-1 col-sm-10 col-xs-12 icon-text-box">
                            <h4>Izgllītība</h4>
                            <p>Rūjienas vidusskola (1.-9. klase), Valmieras Valsts ģimnāzija (10.-12. klase), Rīgas Valsts tehnikums (tagad)</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12 icon-box">
                        <div class="col-md-2 col-sm-2 col-xs-12">
                        </div>
                        <div class="col-md-9 col-md-offset-1 col-sm-10 col-xs-12 icon-text-box">
                            <h4>Par mani draugi saka:</h4>
                            <p>Komunikabls, izpalīdzīgs, spītīgs un viegli ietekmējams.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12 icon-box">
                        <div class="col-md-2 col-sm-2 col-xs-12">
                        </div>
                        <div class="col-md-9 col-md-offset-1 col-sm-10 col-xs-12 icon-text-box">
                            <h4>Mūzika ap mani</h4>
                            <p>Es klausos dažāda veida mūzika. Man nav tādu "mīļāko" žanru. Mani iecienītakie žanri: house, electro huose, dub-step, chill-step, hip-hop, heavy metal, RnB, pop-music u.c. Es uzskatu ka mūzika uzlabo garastāvokli. Diezgan bieži man ir gadījies tā, ka man ir slikts garastāvoklis es paklausos mūziku un viņš uzlabojas. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>






    <div class="container-fluid work" id="work">
        <div class="container">
            <div class="row" id="starts">
                <div class="col-md-12 col-sm-12 col-xs-12 work-list">
                    <h2 class="text-center portfolio-text">Mans autordarbs</h2>
                    <div class="col-md-4 col-sm-6 col-xs-12 work-space">
                        <a href="images/IKL_7964.jpg" data-lightbox="image-1">
                            <div class="featured-img">
                                <img src="images/IKL_7964.jpg"/>
                            </div>
                            <div class="image-hover">
                                <i class="glyphicon glyphicon-eye-open"></i>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 work-space">
                        <a href="images/IKL_7987.jpg" data-lightbox="image-1">
                            <div class="featured-img">
                                <img src="images/IKL_7987.jpg"/>
                            </div>
                            <div class="image-hover">
                                <i class="glyphicon glyphicon-eye-open"></i>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 work-space">
                        <a href="images/IMG_9264.jpg" data-lightbox="image-1">
                            <div class="featured-img">
                                <img src="images/IMG_9264.jpg"/>
                            </div>
                            <div class="image-hover">
                                <i class="glyphicon glyphicon-eye-open"></i>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 work-space">
                        <a href="images/IMG_9267.jpg" data-lightbox="image-1">
                            <div class="featured-img">
                                <img src="images/IMG_9267.jpg"/>
                            </div>
                            <div class="image-hover">
                                <i class="glyphicon glyphicon-eye-open"></i>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 work-space">
                        <a href="images/IMG_9287.jpg" data-lightbox="image-1">
                            <div class="featured-img">
                                <img src="images/IMG_9287.jpg"/>
                            </div>
                            <div class="image-hover">
                                <i class="glyphicon glyphicon-eye-open"></i>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 work-space">
                        <a href="images/IMG_9309.jpg" data-lightbox="image-1">
                            <div class="featured-img">
                                <img src="images/IMG_9309.jpg"/>
                            </div>
                            <div class="image-hover">
                                <i class="glyphicon glyphicon-eye-open"></i>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 work-space">
                        <a href="images/IMG_9350.jpg" data-lightbox="image-1">
                            <div class="featured-img">
                                <img src="images/IMG_9350.jpg"/>
                            </div>
                            <div class="image-hover">
                                <i class="glyphicon glyphicon-eye-open"></i>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 work-space">
                        <a href="images/IMG_9379.jpg" data-lightbox="image-1">
                            <div class="featured-img">
                                <img src="images/IMG_9379.jpg"/>
                            </div>
                            <div class="image-hover">
                                <i class="glyphicon glyphicon-eye-open"></i>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 work-space">
                        <a href="images/IMG_9386.jpg" data-lightbox="image-1">
                            <div class="featured-img">
                                <img src="images/IMG_9386.jpg"/>
                            </div>
                            <div class="image-hover">
                                <i class="glyphicon glyphicon-eye-open"></i>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 work-space">
                        <a href="images/IMG_9451.jpg" data-lightbox="image-1">
                            <div class="featured-img">
                                <img src="images/IMG_9451.jpg"/>
                            </div>
                            <div class="image-hover">
                                <i class="glyphicon glyphicon-eye-open"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="container-fluid contact" id="section4">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center portfolio-text">Kontakti</h2>
                    <div class="col-md-6 col-sm-12 col-xs-12contact-form">
                        <form role="form">
                            <div class="form-group">
                                <input type="text" class="form-control form-effect" id="name" placeholder="Vārds">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control form-effect" id="email" placeholder="E-pasts">
                            </div>
                            <div class="form-group">
                                <textarea type="textarea" class="form-control form-effect" id="text" placeholder="Ziņa"></textarea>
                            </div>
                            <button type="submit" class="btn btn-default btn-sub">OK</button>
                        </form>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12 address-space">
                        <div id="map-canvas"></div>
                        <div class="address">
                            <h3>Adrese</h3>
                            <p><i class="glyphicon glyphicon-map-marker"></i>Saules iela 8, Rūjiena, Rūjienas novads, LV-4240 </p>
                            <p><i class="glyphicon glyphicon-earphone"></i>(371) 25-763-673 </p>
                            <p><i class="glyphicon glyphicon-envelope"></i>nils.bormanis@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
$template->footer();
$template->js();
$template->bottom();