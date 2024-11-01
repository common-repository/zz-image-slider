
        <style>
            /* jssor slider arrow navigator skin 15 css */
            /*
            .jssora15l                  (normal)
            .jssora15r                  (normal)
            .jssora15l:hover            (normal mouseover)
            .jssora15r:hover            (normal mouseover)
            .jssora15l.jssora15ldn      (mousedown)
            .jssora15r.jssora15rdn      (mousedown)
            */
            .jssora15l, .jssora15r {
                display: block;
                position: absolute;
                /* size of arrow element */
                width: 20px;
                height: 38px;
                cursor: pointer;
                background: url(<?php echo ZZIS_PLUGIN_URL ?>/img/a15.png) no-repeat;
                overflow: hidden;
            }
            .jssora15l { background-position: -20px -41px; }
            .jssora15r { background-position: -80px -41px; }
            .jssora15l:hover { background-position: -140px -41px; }
            .jssora15r:hover { background-position: -200px -41px; }
            .jssora15l.jssora15ldn { background-position: -260px -41px; }
            .jssora15r.jssora15rdn { background-position: -320px -41px; }
        </style>
        <!-- Arrow Left -->
        <span u="arrowleft" class="jssora15l" style="top: 123px; left: 18px;">
        </span>
        <!-- Arrow Right -->
        <span u="arrowright" class="jssora15r" style="top: 123px; right: 18px;">
        </span>
