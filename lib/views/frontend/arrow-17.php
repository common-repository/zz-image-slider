
        <style>
            /* jssor slider arrow Navigator Skin 18 css */
            /*
            .jssora18l                  (normal)
            .jssora18r                  (normal)
            .jssora18l:hover            (normal mouseover)
            .jssora18r:hover            (normal mouseover)
            .jssora18l.jssora18ldn      (mousedown)
            .jssora18r.jssora18rdn      (mousedown)
            */
            .jssora18l, .jssora18r {
                display: block;
                position: absolute;
                /* size of arrow element */
                width: 29px;
                height: 29px;
                cursor: pointer;
                background: url(<?php echo ZZIS_PLUGIN_URL ?>/img/a18.png) no-repeat;
                overflow: hidden;
            }
            .jssora18l { background-position: -16px -45px; }
            .jssora18r { background-position: -76px -45px; }
            .jssora18l:hover { background-position: -136px -45px; }
            .jssora18r:hover { background-position: -196px -45px; }
            .jssora18l.jssora18ldn { background-position: -256px -45px; }
            .jssora18r.jssora18rdn { background-position: -316px -45px; }
        </style>
        <!-- Arrow Left -->
        <span u="arrowleft" class="jssora18l" style="top: 123px; left: 8px;">
        </span>
        <!-- Arrow Right -->
        <span u="arrowright" class="jssora18r" style="top: 123px; right: 8px;">
        </span>
