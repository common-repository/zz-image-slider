
        <style>
            /* jssor slider arrow navigator skin 06 css */
            /*
            .jssora06l                  (normal)
            .jssora06r                  (normal)
            .jssora06l:hover            (normal mouseover)
            .jssora06r:hover            (normal mouseover)
            .jssora06l.jssora06ldn      (mousedown)
            .jssora06r.jssora06rdn      (mousedown)
            */
            .jssora06l, .jssora06r {
                display: block;
                position: absolute;
                /* size of arrow element */
                width: 45px;
                height: 45px;
                cursor: pointer;
                background: url(<?php echo ZZIS_PLUGIN_URL ?>/img/a06.png) no-repeat;
                overflow: hidden;
            }
            .jssora06l { background-position: -8px -38px; }
            .jssora06r { background-position: -68px -38px; }
            .jssora06l:hover { background-position: -128px -38px; }
            .jssora06r:hover { background-position: -188px -38px; }
            .jssora06l.jssora06ldn { background-position: -248px -38px; }
            .jssora06r.jssora06rdn { background-position: -308px -38px; }
        </style>
        <!-- Arrow Left -->
        <span u="arrowleft" class="jssora06l" style="top: 123px; left: 8px;">
        </span>
        <!-- Arrow Right -->
        <span u="arrowright" class="jssora06r" style="top: 123px; right: 8px;">
        </span>
