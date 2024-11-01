
        <style>
            /* jssor slider arrow navigator skin 09 css */
            /*
            .jssora09l                  (normal)
            .jssora09r                  (normal)
            .jssora09l:hover            (normal mouseover)
            .jssora09r:hover            (normal mouseover)
            .jssora09l.jssora09ldn      (mousedown)
            .jssora09r.jssora09rdn      (mousedown)
            */
            .jssora09l, .jssora09r {
                display: block;
                position: absolute;
                /* size of arrow element */
                width: 50px;
                height: 50px;
                cursor: pointer;
                background: url(<?php echo ZZIS_PLUGIN_URL ?>/img/a09.png) no-repeat;
                overflow: hidden;
                opacity: .4;
                filter: alpha(opacity=40);
            }
            .jssora09l { background-position: -5px -35px; }
            .jssora09r { background-position: -65px -35px; }
            .jssora09l:hover { background-position: -5px -35px; opacity: .8; filter:alpha(opacity=80); }
            .jssora09r:hover { background-position: -65px -35px; opacity: .8; filter:alpha(opacity=80); }
            .jssora09l.jssora09ldn { background-position: -5px -35px; opacity: .3; filter:alpha(opacity=30); }
            .jssora09r.jssora09rdn { background-position: -65px -35px; opacity: .3; filter:alpha(opacity=30); }
        </style>
        <!-- Arrow Left -->
        <span u="arrowleft" class="jssora09l" style="top: 123px; left: 8px;">
        </span>
        <!-- Arrow Right -->
        <span u="arrowright" class="jssora09r" style="top: 123px; right: 8px;">
        </span>
