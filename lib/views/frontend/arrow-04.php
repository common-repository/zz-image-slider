
        <style>
            /* jssor slider arrow Navigator Skin 04 css */
            /*
            .jssora04l                  (normal)
            .jssora04r                  (normal)
            .jssora04l:hover            (normal mouseover)
            .jssora04r:hover            (normal mouseover)
            .jssora04l.jssora04ldn      (mousedown)
            .jssora04r.jssora04rdn      (mousedown)
            */
            .jssora04l, .jssora04r {
                display: block;
                position: absolute;
                /* size of arrow element */
                width: 28px;
                height: 40px;
                cursor: pointer;
                background: url(<?php echo ZZIS_PLUGIN_URL ?>/img/a04.png) no-repeat;
                overflow: hidden;
            }
            .jssora04l { background-position: -16px -39px; }
            .jssora04r { background-position: -76px -39px; }
            .jssora04l:hover { background-position: -136px -39px; }
            .jssora04r:hover { background-position: -196px -39px; }
            .jssora04l.jssora04ldn { background-position: -256px -39px; }
            .jssora04r.jssora04rdn { background-position: -316px -39px; }
        </style>
        <!-- Arrow Left -->
        <span u="arrowleft" class="jssora04l" style="top: 123px; left: 8px;">
        </span>
        <!-- Arrow Right -->
        <span u="arrowright" class="jssora04r" style="top: 123px; right: 8px;">
        </span>
