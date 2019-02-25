<style type="text/css">
    #overlay {
        position: fixed;
        z-index: 99999;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        background: rgba(255,255,255,0.9);
        transition: 1s 0.4s;
    }

    .ol-popup {
        max-height: 150px !important;
    }
</style>

<!--
<div id="overlay">
    <img style="width: 128px !important; position: relative; left: calc(50% - 64px); top: calc(50% - 64px);" src="https://www.segeli.com/images/loader.gif" />
</div>
-->

<script type="text/javascript">
    /*
    function fadeOutEffect() {
        var fadeTarget = document.getElementById("overlay");
        var fadeEffect = setInterval(function () {
            if (!fadeTarget.style.opacity) {
                fadeTarget.style.opacity = 1;
            }
            if (fadeTarget.style.opacity > 0) {
                fadeTarget.style.opacity -= 0.1;
            } else {
                //fadeTarget.classList.add("d-none");
                //fadeTarget.remove();
                clearInterval(fadeEffect);
            }
        }, 200);
    }

    function addListener(event, obj, fn) {
        if (obj.addEventListener) {
           obj.addEventListener(event, fn, false);
        } else {
           obj.attachEvent("on"+event, fn);
        }
    }

    
    // Thge event emitter will be emitted when page is loaded
    addListener('load', window, function(event) {
        //alert("Your page is loaded");
        var fadeTarget = document.getElementById("overlay");
        fadeTarget.remove();
    });
    */
</script>