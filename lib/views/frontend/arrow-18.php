
        <style>
            /* jssor slider arrow navigator skin 19 css */
            /*
            .jssora19l                  (normal)
            .jssora19r                  (normal)
            .jssora19l:hover            (normal mouseover)
            .jssora19r:hover            (normal mouseover)
            .jssora19l.jssora19ldn      (mousedown)
            .jssora19r.jssora19rdn      (mousedown)
            */
            .jssora19l, .jssora19r {
                display: block;
                position: absolute;
                /* size of arrow element */
                width: 50px;
                height: 50px;
                cursor: pointer;
                background: url(<?php echo ZZIS_PLUGIN_URL ?>/img/a19.png) no-repeat;
                overflow: hidden;
            }
            .jssora19l { background-position: -5px -35px; }
            .jssora19r { background-position: -65px -35px; }
            .jssora19l:hover { background-position: -125px -35px; }
            .jssora19r:hover { background-position: -185px -35px; }
            .jssora19l.jssora19ldn { background-position: -245px -35px; }
            .jssora19r.jssora19rdn { background-position: -305px -35px; }
        </style>
        <!-- Arrow Left -->
        <span u="arrowleft" class="jssora19l" style="top: 123px; left: 8px;">
        </span>
        <!-- Arrow Right -->
        <span u="arrowright" class="jssora19r" style="top: 123px; right: 8px;">
        </span>
