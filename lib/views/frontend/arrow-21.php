
        <style>
            /* jssor slider arrow navigator skin 01 css */
            /*
            .jssora01l                  (normal)
            .jssora01r                  (normal)
            .jssora01l:hover            (normal mouseover)
            .jssora01r:hover            (normal mouseover)
            .jssora01l.jssora01ldn      (mousedown)
            .jssora01r.jssora01rdn      (mousedown)
            */
            .jssora01l, .jssora01r {
                display: block;
                position: absolute;
                /* size of arrow element */
                width: 45px;
                height: 45px;
                cursor: pointer;
                background: url(<?php echo ZZIS_PLUGIN_URL ?>/img/a01.png) no-repeat;
                overflow: hidden;
            }
            .jssora01l { background-position: -8px -38px; }
            .jssora01r { background-position: -68px -38px; }

            .jssora01l:hover { background-position: -128px -38px; }
            .jssora01r:hover { background-position: -188px -38px; }
            .jssora01l.jssora01ldn { background-position: -8px -38px; }
            .jssora01r.jssora01rdn { background-position: -68px -38px; }
        </style>
        <!-- Arrow Left -->
        <span u="arrowleft" class="jssora01l" style="top: 123px; left: 8px;">
        </span>
        <!-- Arrow Right -->
        <span u="arrowright" class="jssora01r" style="top: 123px; right: 8px;">
        </span>

