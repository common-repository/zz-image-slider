
        <style>
            /* jssor slider arrow navigator skin 10 css */
            /*
            .jssora10l                  (normal)
            .jssora10r                  (normal)
            .jssora10l:hover            (normal mouseover)
            .jssora10r:hover            (normal mouseover)
            .jssora10l.jssora10ldn      (mousedown)
            .jssora10r.jssora10rdn      (mousedown)
            */
            .jssora10l, .jssora10r {
                display: block;
                position: absolute;
                /* size of arrow element */
                width: 28px;
                height: 40px;
                cursor: pointer;
                background: url(<?php echo ZZIS_PLUGIN_URL ?>/img/a10.png) no-repeat;
                overflow: hidden;
            }
            .jssora10l { background-position: -16px -39px; }
            .jssora10r { background-position: -76px -39px; }
            .jssora10l:hover { background-position: -136px -39px; }
            .jssora10r:hover { background-position: -196px -39px; }
            .jssora10l.jssora10ldn { background-position: -256px -39px; }
            .jssora10r.jssora10rdn { background-position: -316px -39px; }
        </style>
        <!-- Arrow Left -->
        <span u="arrowleft" class="jssora10l" style="top: 123px; left: 8px;">
        </span>
        <!-- Arrow Right -->
        <span u="arrowright" class="jssora10r" style="top: 123px; right: 8px;">
        </span>
