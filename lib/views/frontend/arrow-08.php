
        <style>
            /* jssor slider arrow navigator skin 08 css */
            /*
            .jssora08l                  (normal)
            .jssora08r                  (normal)
            .jssora08l:hover            (normal mouseover)
            .jssora08r:hover            (normal mouseover)
            .jssora08l.jssora08ldn      (mousedown)
            .jssora08r.jssora08rdn      (mousedown)
            */
            .jssora08l, .jssora08r {
                display: block;
                position: absolute;
                /* size of arrow element */
                width: 50px;
                height: 50px;
                cursor: pointer;
                background: url(<?php echo ZZIS_PLUGIN_URL ?>/img/a08.png) no-repeat;
                overflow: hidden;
                opacity: .4;
                filter: alpha(opacity=40);
            }
            .jssora08l { background-position: -5px -35px; }
            .jssora08r { background-position: -65px -35px; }
            .jssora08l:hover { background-position: -5px -35px; opacity: .8; filter:alpha(opacity=80); }
            .jssora08r:hover { background-position: -65px -35px; opacity: .8; filter:alpha(opacity=80); }
            .jssora08l.jssora08ldn { background-position: -5px -35px; opacity: .3; filter:alpha(opacity=30); }
            .jssora08r.jssora08rdn { background-position: -65px -35px; opacity: .3; filter:alpha(opacity=30); }
        </style>
        <!-- Arrow Left -->
        <span u="arrowleft" class="jssora08l" style="top: 8px; left: 8px;">
        </span>
        <!-- Arrow Right -->
        <span u="arrowright" class="jssora08r" style="bottom: 8px; left: 8px;">
        </span>
