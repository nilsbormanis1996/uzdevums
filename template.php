<?php
class Template
{
    public function header()
    {
        include dirname(__FILE__) . '/templates/header.php';
    }

    public function header2()
    {
        echo '<header class="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 ">
                        <div class="navbar-header">
                                <button type="button" class="navbar-toggle menu-button" data-toggle="collapse" data-target="#myNavbar">
                                    <span class="glyphicon glyphicon-align-justify"></span>
                                </button>
                                <a class="navbar-brand logo" href="#"></a>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <nav class="collapse navbar-collapse" id="myNavbar" role="navigation">
                            <ul class="nav navbar-nav navbar-right menu">
                                    <li><a href="#page-top" class="page-scroll active">Home</a></li>
                                    <li><a href="#section2" class="page-scroll">Par mani</a></li>
                                    <li><a href="#work" class="page-scroll">Mans autordarbs</a></li>
                                    <li><a href="#section4" class="page-scroll">Kontakti</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>';
    }

    public function top()
    {
        include dirname(__FILE__) . '/templates/top.php';
    }

    public function footer()
    {
        include dirname(__FILE__) . '/templates/footer.php';
    }

    public function js()
    {
        include dirname(__FILE__) . '/templates/js.php';
    }

    public function bottom()
    {
        include dirname(__FILE__) . '/templates/bottom.php';
    }
}