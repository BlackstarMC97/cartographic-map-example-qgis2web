<!--
Author: PENAYE LANDO Cyrille Bertrand
Author URL: http://mboageek.com
-->
<?php 
    $url = "http://localhost/portalgis";

    function type() {
        if(isset($_GET["type"])) {
            return $_GET["type"];
        }
        else {
            return "";
        }
    }

    function hideBtn() {
        if(!isset($_GET["type"]) || $_GET["type"] == "") {
            echo "hidden";
        }
    }
?>

<!DOCTYPE html>
<html>

<head>
	<title>Home - Cartographic map of the municipality of Ngaoundere, ACAGER</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/png" href="../images/favicon.png"/>
</head>

<style type="text/css">
    .clickable:hover {
        cursor: pointer;
        background-color: azure;
        font-weight: bold;
    }
    .list-group-item.active {
        background-color: forestgreen !important;
        border: limegreen solid 1px !important;
    }
    .list-group-item:first-child {
        border-radius: 0px;
    }
    iframe {
        width: 100%;
        height: 500px;
    }
    .img-special {
        width: 100%;
        height: 500px;
        border: 2px inset rgb(238,238,238);
    }
    .row {
        margin-left: 0px;
        margin-right: 0px;
    }
    .col-8 {
        padding-right: 2px;
        padding-left: 0px;
    }
    .minus {
        background-color: ghostwhite;
        padding: 2px 12% !important;
    }
    .list-group-item {
        font-size: 0.8em;
        padding: 5px 8%;
    }
    .classic-btn {
        border-radius: 0px;
        font-size: 0.7em;
    }
    .col-12 {
        padding-right: 2px;
        padding-left: 5px;
    }
    .collapse {
        margin-left: 5%;
    }
    .classic-icon {
        width: 16px;
        margin-right: 5px;
    }
    li.active > a > .fas {
        color: white !important;
    }
    .navbar-special {
        min-height: 100px;
        background-color: white !important; 
        border-bottom: 1px #e5e5e5 groove;
    }
</style>

<body>
    <nav class="navbar navbar-light text-light navbar-special">
        <div class="container-fluid">
            <a href="http://acager.org" class="navbar-brand" style="padding:0 31px; padding-top:2px;">
                <img src="../images/logo.png" style="width:220px;height:50px;"/>
            </a>

            <h2 class="text-dark mx-auto">Cartographic map of the municipality of Ngaoundere</h2>
        </div>
        
    </nav>

    <div class="row mt-4">
        <div class="col-lg-3 col-md-3 col-12 mb-4">
            <div class="mb-2 ml-3">
                <span class="h6">Select a theme</span>
                <a id="fullscreen" class="btn btn-success float-right classic-btn" <?php hideBtn(); ?> href="#" onclick="modeFullscreen();" target="_blank" title="Agrandir">
                    Full screen <i class="fas fa-expand"></i>
                </a>
                
            </div><br>
            
            <ul class="list-group border-0 ml-3">
                <li id="limits" class="list-group-item clickable xxzez" onclick="goToPage(this.id);">
                    <i class="fas fa-globe-africa classic-icon"></i>
                    Limits
                </li>
                <li id="administration" class="list-group-item clickable xxzez" onclick="goToPage(this.id);">
                    <i class="fas fa-suitcase classic-icon"></i>
                    Administration
                </li>
                <li class="list-group-item clickable xxzez" data-toggle="collapse" href="#basicEquipmentCollapse" onclick="changeStyle(this);">
                    <i class="fas fa-home classic-icon"></i>
                    Basic Equipment
                    <a class="float-right text-dark">
                        <i class="fas fa-chevron-down"></i>
                    </a>
                </li>

                <div class="collapse ssxhw" id="basicEquipmentCollapse">
                    <ul class="list-group border">
                        <li id="basic" class="list-group-item minus text-left clickable" onclick="goToPage(this.id);">
                            <i class="fas fa-list classic-icon"></i>
                            All the layers
                        </li>
                        <li id="social" class="list-group-item minus text-left clickable" onclick="goToPage(this.id);">
                            <i class="fas fa-users classic-icon"></i>
                            Social housing
                        </li>
                        <li id="health" class="list-group-item minus text-left clickable" onclick="goToPage(this.id);">
                            <i class="fas fa-hospital classic-icon"></i>
                            Health
                        </li>
                        <li id="school" class="list-group-item minus text-left clickable" onclick="goToPage(this.id);">
                            <i class="fas fa-school classic-icon"></i>
                            Education
                        </li>
                        <li id="religion" class="list-group-item minus text-left clickable" onclick="goToPage(this.id);">
                            <i class="fas fa-church classic-icon"></i>
                            Worship and religion
                        </li>
                    </ul>
                </div>

                <li class="list-group-item clickable xxzez" data-toggle="collapse" href="#tourismCollapse" onclick="changeStyle(this);">
                    <i class="fas fa-smile-wink classic-icon"></i>
                    Tourism and leisure
                    <a class="float-right text-dark">
                        <i class="fas fa-chevron-down"></i>
                    </a>
                </li>

                <div class="collapse ssxhw" id="tourismCollapse">
                    <ul class="list-group border">
                        <li id="tourism" class="list-group-item minus text-left clickable" onclick="goToPage(this.id);">
                            <i class="fas fa-list classic-icon"></i>
                            All the layers
                        </li>
                        <li id="transport" class="list-group-item minus text-left clickable" onclick="goToPage(this.id);">
                            <i class="fas fa-bus classic-icon"></i>
                            Mobility and transport
                        </li>
                        <li id="culture" class="list-group-item minus text-left clickable" onclick="goToPage(this.id);">
                            <i class="fas fa-vihara classic-icon"></i>
                            Culture
                        </li>
                        <li id="leisure" class="list-group-item minus text-left clickable" onclick="goToPage(this.id);">
                            <i class="fas fa-book-reader classic-icon"></i>
                            Leisure
                        </li>
                        <li id="sport" class="list-group-item minus text-left clickable" onclick="goToPage(this.id);">
                            <i class="fas fa-futbol classic-icon"></i>
                            Sport
                        </li>
                    </ul>
                </div>

                <li class="list-group-item clickable xxzez" data-toggle="collapse" href="#economyCollapse" onclick="changeStyle(this);">
                    <i class="fas fa-money-bill classic-icon"></i>
                    Economic activities
                    <a class="float-right text-dark">
                        <i class="fas fa-chevron-down"></i>
                    </a>
                </li>

                <div class="collapse ssxhw" id="economyCollapse">
                    <ul class="list-group border">
                        <li id="economy" class="list-group-item minus text-left clickable" onclick="goToPage(this.id);">
                            <i class="fas fa-list classic-icon"></i>
                            All the layers
                        </li>
                        <li id="finance" class="list-group-item minus text-left clickable" onclick="goToPage(this.id);">
                            <i class="fas fa-credit-card classic-icon"></i>
                            Finance
                        </li>
                        <li id="business" class="list-group-item minus text-left clickable" onclick="goToPage(this.id);">
                            <i class="fas fa-shopping-cart classic-icon"></i>
                            Business
                        </li>
                        <li id="service" class="list-group-item minus text-left clickable" onclick="goToPage(this.id);">
                            <i class="fas fa-hands-helping classic-icon"></i>
                            Service
                        </li>
                        <li id="restauration" class="list-group-item minus text-left clickable" onclick="goToPage(this.id);">
                            <i class="fas fa-hotel classic-icon"></i>
                            Restauration
                        </li>
                        <li id="merchant" class="list-group-item minus text-left clickable" onclick="goToPage(this.id);">
                            <i class="fas fa-store classic-icon"></i>
                            Merchant equipment
                        </li>
                    </ul>
                </div>

                <li class="list-group-item clickable xxzez" data-toggle="collapse" href="#networksCollapse" onclick="changeStyle(this);">
                    <i class="fas fa-network-wired classic-icon"></i>
                    Various networks
                    <a class="float-right text-dark">
                        <i class="fas fa-chevron-down"></i>
                    </a>
                </li>

                <div class="collapse ssxhw" id="networksCollapse">
                    <ul class="list-group border">
                        <li id="networks" class="list-group-item minus text-left clickable" onclick="goToPage(this.id);">
                            <i class="fas fa-list classic-icon"></i>
                            All the layers
                        </li>
                        <li id="electric" class="list-group-item minus text-left clickable" onclick="goToPage(this.id);">
                            <i class="fas fa-bolt classic-icon"></i>
                            Electric network
                        </li>
                        <li id="water" class="list-group-item minus text-left clickable" onclick="goToPage(this.id);">
                            <i class="fas fa-tint classic-icon"></i>
                            Drinking water network
                        </li>
                        <li id="others" class="list-group-item minus text-left clickable" onclick="goToPage(this.id);">
                            <i class="fas fa-road classic-icon"></i>
                            Other networks
                        </li>
                    </ul>
                </div>

                <li id="topography" class="list-group-item clickable xxzez" onclick="goToPage(this.id);">
                    <i class="fas fa-map classic-icon"></i>
                    Topography
                </li>

                <li class="list-group-item clickable xxzez" data-toggle="collapse" href="#buildingCollapse" onclick="changeStyle(this);">
                    <i class="fas fa-building classic-icon"></i>
                    Buildings
                    <a class="float-right text-dark">
                        <i class="fas fa-chevron-down"></i>
                    </a>
                </li>

                <div class="collapse ssxhw" id="buildingCollapse">
                    <ul class="list-group border">
                        <li id="building" class="list-group-item minus text-left clickable" onclick="goToPage(this.id);">
                            <i class="fas fa-list classic-icon"></i>
                            All the layers
                        </li>
                        <li id="buildings" class="list-group-item minus text-left clickable" onclick="goToPage(this.id);">
                            <i class="far fa-building classic-icon"></i>
                            All the buildings
                        </li>
                        <li id="inundation" class="list-group-item minus text-left clickable" onclick="goToPage(this.id);">
                            <i class="fas fa-water classic-icon"></i>
                            Buildings exposed to inundation
                        </li>
                        <li id="geomorphologic" class="list-group-item minus text-left clickable" onclick="goToPage(this.id);">
                            <i class="fas fa-house-damage classic-icon"></i>
                            Buildings exposed to geommorphologic risk
                        </li>
                    </ul>
                </div>

                <li id="risk" class="list-group-item clickable xxzez" onclick="goToPage(this.id);">
                    <i class="fas fa-asterisk classic-icon"></i>
                    Risk zone
                </li>
            </ul>
        </div>
        <div class="col-lg-9 col-md-9 col-12">
            <?php 
                $file = "";
                if(isset($_GET["type"])) {
                    if($_GET["type"] == "limits") {
                        $file = "Limits_OSM";
                        echo '<iframe src="'.$url.'/maps/Limits_OSM"></iframe>';
                    }
                    else if($_GET["type"] == "administration") {
                        $file = "Administration_OSM";
                        echo '<iframe src="'.$url.'/maps/Administration_OSM"></iframe>';
                    }
                    else if($_GET["type"] == "basic") {
                        $file = "BasicEquipment_OSM";
                        echo '<iframe src="'.$url.'/maps/BasicEquipment_OSM"></iframe>';
                    }
                    else if($_GET["type"] == "tourism") {
                        $file = "TourismLeisure_OSM";
                        echo '<iframe src="'.$url.'/maps/TourismLeisure_OSM"></iframe>';
                    }
                    else if($_GET["type"] == "economy") {
                        $file = "Economy_OSM";
                        echo '<iframe src="'.$url.'/maps/Economy_OSM"></iframe>';
                    }
                    else if($_GET["type"] == "networks") {
                        $file = "Networks_OSM";
                        echo '<iframe src="'.$url.'/maps/Networks_OSM"></iframe>';
                    }
                    else if($_GET["type"] == "topography") {
                        $file = "Topography_OSM";
                        echo '<iframe src="'.$url.'/maps/Topography_OSM"></iframe>';
                    }
                    else if($_GET["type"] == "building") {
                        $file = "Building_OSMBW";
                        echo '<iframe src="'.$url.'/maps/Building_OSMBW"></iframe>';
                    }
                    else if($_GET["type"] == "buildings") {
                        $file = "Buildings_OSM";
                        echo '<iframe src="'.$url.'/maps/Buildings_OSM"></iframe>';
                    }
                    else if($_GET["type"] == "inundation") {
                        $file = "Buildings_Inundation_OSM";
                        echo '<iframe src="'.$url.'/maps/Buildings_Inundation_OSM"></iframe>';
                    }
                    else if($_GET["type"] == "geomorphologic") {
                        $file = "Building_GeoRisk_OSM";
                        echo '<iframe src="'.$url.'/maps/Building_GeoRisk_OSM"></iframe>';
                    }
                    else if($_GET["type"] == "risk") {
                        $file = "RiskZonePlus_OSMBW";
                        echo '<iframe src="'.$url.'/maps/RiskZonePlus_OSMBW"></iframe>';
                    }
                    else if($_GET["type"] == "finance") {
                        $file = "Finance_OSM";
                        echo '<iframe src="'.$url.'/maps/Finance_OSM"></iframe>';
                    }
                    else if($_GET["type"] == "business") {
                        $file = "Business_OSM";
                        echo '<iframe src="'.$url.'/maps/Business_OSM"></iframe>';
                    }
                    else if($_GET["type"] == "service") {
                        $file = "Service_OSM";
                        echo '<iframe src="'.$url.'/maps/Service_OSM"></iframe>';
                    }
                    else if($_GET["type"] == "restauration") {
                        $file = "Restauration_OSM";
                        echo '<iframe src="'.$url.'/maps/Restauration_OSM"></iframe>';
                    }
                    else if($_GET["type"] == "merchant") {
                        $file = "MerchantEquipment_OSM";
                        echo '<iframe src="'.$url.'/maps/MerchantEquipment_OSM"></iframe>';
                    }
                    else if($_GET["type"] == "religion") {
                        $file = "Religion_OSM";
                        echo '<iframe src="'.$url.'/maps/Religion_OSM"></iframe>';
                    }
                    else if($_GET["type"] == "school") {
                        $file = "School_OSM";
                        echo '<iframe src="'.$url.'/maps/School_OSM"></iframe>';
                    }
                    else if($_GET["type"] == "health") {
                        $file = "Health_OSM";
                        echo '<iframe src="'.$url.'/maps/Health_OSM"></iframe>';
                    }
                    else if($_GET["type"] == "social") {
                        $file = "Social_OSM";
                        echo '<iframe src="'.$url.'/maps/Social_OSM"></iframe>';
                    }
                    else if($_GET["type"] == "transport") {
                        $file = "TransportMobility_OSM";
                        echo '<iframe src="'.$url.'/maps/TransportMobility_OSM"></iframe>';
                    }
                    else if($_GET["type"] == "leisure") {
                        $file = "Leisure_OSM";
                        echo '<iframe src="'.$url.'/maps/Leisure_OSM"></iframe>';
                    }
                    else if($_GET["type"] == "sport") {
                        $file = "Sport_OSM";
                        echo '<iframe src="'.$url.'/maps/Sport_OSM"></iframe>';
                    }
                    else if($_GET["type"] == "culture") {
                        $file = "Culture_OSM";
                        echo '<iframe src="'.$url.'/maps/Culture_OSM"></iframe>';
                    }
                    else if($_GET["type"] == "electric") {
                        $file = "ElectricalNetwork_OSM";
                        echo '<iframe src="'.$url.'/maps/ElectricalNetwork_OSM"></iframe>';
                    }
                    else if($_GET["type"] == "water") {
                        $file = "DrinkingWaterNetwork_OSM";
                        echo '<iframe src="'.$url.'/maps/DrinkingWaterNetwork_OSM"></iframe>';
                    }
                    else if($_GET["type"] == "others") {
                        $file = "OtherNetwork_OSM";
                        echo '<iframe src="'.$url.'/maps/OtherNetwork_OSM"></iframe>';
                    }
                    else {
                        echo "Le type entré ne peut pas être affiché!";
                    }
                }
                else {
                    echo 'Veuillez choisir un thème parmi ceux proposés à gauche...';
                    echo '<img src="'.$url.'/images/default.png" class="img-special img-fluid" />';
                }
            ?>
        </div>
    </div>

	
    <script type="text/javascript">
        var url = "<?php echo $url; ?>";
        var type = "<?php echo type(); ?>";

        var currentOption = document.getElementById(type);
        
        if(type != "") {
            currentOption.classList.add("active");
            currentOption.classList.remove("clickable");
        }

        // Dropdown's management for case : Economy
        var economyCollapse = document.getElementById("economyCollapse");
        if(type == "economy" || type == "finance" || type == "business" || type == "service" || type == "restauration" || type == "merchant") {
            economyCollapse.classList.add("show");
            var els = document.querySelectorAll("li[href='#economyCollapse']");
            changeStyle(els[0]);
        }

        // Dropdown's management for case : Basic
        var basicEquipmentCollapse = document.getElementById("basicEquipmentCollapse");
        if(type == "basic" || type == "religion" || type == "health" || type == "social" || type == "school") {
            basicEquipmentCollapse.classList.add("show");
            var els = document.querySelectorAll("li[href='#basicEquipmentCollapse']");
            changeStyle(els[0]);
        }

        // Dropdown's management for case : Tourism & Leisure
        var tourismCollapse = document.getElementById("tourismCollapse");
        if(type == "tourism" || type == "transport" || type == "culture" || type == "leisure" || type == "sport") {
            tourismCollapse.classList.add("show");
            var els = document.querySelectorAll("li[href='#tourismCollapse']");
            changeStyle(els[0]);
        }

        // Dropdown's management for case : Networks
        var networksCollapse = document.getElementById("networksCollapse");
        if(type == "networks" || type == "electric" || type == "water" || type == "others") {
            networksCollapse.classList.add("show");
            var els = document.querySelectorAll("li[href='#networksCollapse']");
            changeStyle(els[0]);
        }

        // Dropdown's management for case : Buildings
        var buildingCollapse = document.getElementById("buildingCollapse");
        if(type == "buildings" || type == "geomorphologic" || type == "inundation" || type == "building") {
            buildingCollapse.classList.add("show");
            var els = document.querySelectorAll("li[href='#buildingCollapse']");
            changeStyle(els[0]);
        }
        
        function highlightStyle() {
            var rows = document.getElementsByClassName("list-group-item"); 
            [].forEach.call(rows, function(el) {
                el.classList.remove("active");
            });
            this.event.currentTarget.classList.add('active');
        }

        function goToPage(page) {
            window.location.href = url + "?type=" + page;
        }

        function changeStyle(target) {
            var element = target.childNodes[3].childNodes[1];
            if(element.classList.contains("fa-chevron-down")) {
                element.classList.remove("fa-chevron-down");
                element.classList.add("fa-chevron-right");
            }
            else {
                element.classList.remove("fa-chevron-right");
                element.classList.add("fa-chevron-down");
            }
        }

        function modeFullscreen() {
            //this.preventDefault();
            var element = document.getElementById("fullscreen");
            element.href = url + "/maps/" + "<?= $file;  ?>";
            element.click();
        }
    </script>

</body>

</html>
