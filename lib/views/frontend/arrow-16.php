
        <style>
            /* jssor slider arrow navigator skin 16 css */
            /*
            .jssora16l                  (normal)
            .jssora16r                  (normal)
            .jssora16l:hover            (normal mouseover)
            .jssora16r:hover            (normal mouseover)
            .jssora16l.jssora16ldn      (mousedown)
            .jssora16r.jssora16rdn      (mousedown)
            */
            .jssora16l, .jssora16r {
                display: block;
                position: absolute;
                /* size of arrow element */
                width: 22px;
                height: 36px;
                cursor: pointer;
                background: url(<?php echo ZZIS_PLUGIN_URL ?>/img/a16.png) no-repeat;
                overflow: hidden;
            }
            .jssora16l { background-position: -19px -42px; }
            .jssora16r { background-position: -79px -42px; }
            .jssora16l:hover { background-position: -139px -42px; }
            .jssora16r:hover { background-position: -199px -42px; }
            .jssora16l.jssora16ldn { background-position: -259px -42px; }
            .jssora16r.jssora16rdn { background-position: -319px -42px; }
        </style>
        <!-- Arrow Left -->
        <span u="arrowleft" class="jssora16l" style="top: 123px; left: 18px;">
        </span>
        <!-- Arrow Right -->
        <span u="arrowright" class="jssora16r" style="top: 123px; right: 18px;">
        </span>
