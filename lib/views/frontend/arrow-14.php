
        <style>
            /* jssor slider arrow navigator skin 14 css */
            /*
            .jssora14l                  (normal)
            .jssora14r                  (normal)
            .jssora14l:hover            (normal mouseover)
            .jssora14r:hover            (normal mouseover)
            .jssora14l.jssora14ldn      (mousedown)
            .jssora14r.jssora14rdn      (mousedown)
            */
            .jssora14l, .jssora14r {
                display: block;
                position: absolute;
                /* size of arrow element */
                width: 30px;
                height: 50px;
                cursor: pointer;
                background: url(<?php echo ZZIS_PLUGIN_URL ?>/img/a14.png) no-repeat;
                overflow: hidden;
            }
            .jssora14l { background-position: -15px -35px; }
            .jssora14r { background-position: -75px -35px; }
            .jssora14l:hover { background-position: -135px -35px; }
            .jssora14r:hover { background-position: -195px -35px; }
            .jssora14l.jssora14ldn { background-position: -255px -35px; }
            .jssora14r.jssora14rdn { background-position: -315px -35px; }
        </style>
        <!-- Arrow Left -->
        <span u="arrowleft" class="jssora14l" style="top: 123px; left: 0px;">
        </span>
        <!-- Arrow Right -->
        <span u="arrowright" class="jssora14r" style="top: 123px; right: 0px;">
        </span>
