
        <style>
            /* jssor slider arrow navigator skin 07 css */
            /*
            .jssora07l                  (normal)
            .jssora07r                  (normal)
            .jssora07l:hover            (normal mouseover)
            .jssora07r:hover            (normal mouseover)
            .jssora07l.jssora07ldn      (mousedown)
            .jssora07r.jssora07rdn      (mousedown)
            */
            .jssora07l, .jssora07r {
                display: block;
                position: absolute;
                /* size of arrow element */
                width: 50px;
                height: 50px;
                cursor: pointer;
                background: url(<?php echo ZZIS_PLUGIN_URL ?>/img/a07.png) no-repeat;
                overflow: hidden;
            }
            .jssora07l { background-position: -5px -35px; }
            .jssora07r { background-position: -65px -35px; }
            .jssora07l:hover { background-position: -125px -35px; }
            .jssora07r:hover { background-position: -185px -35px; }
            .jssora07l.jssora07ldn { background-position: -245px -35px; }
            .jssora07r.jssora07rdn { background-position: -305px -35px; }
        </style>
        <!-- Arrow Left -->
        <span u="arrowleft" class="jssora07l" style="top: 123px; left: 8px;">
        </span>
        <!-- Arrow Right -->
        <span u="arrowright" class="jssora07r" style="top: 123px; right: 8px;">
        </span>
