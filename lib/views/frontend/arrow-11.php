
        <style>
            /* jssor slider arrow navigator skin 11 css */
            /*
            .jssora11l                  (normal)
            .jssora11r                  (normal)
            .jssora11l:hover            (normal mouseover)
            .jssora11r:hover            (normal mouseover)
            .jssora11l.jssora11ldn      (mousedown)
            .jssora11r.jssora11rdn      (mousedown)
            */
            .jssora11l, .jssora11r {
                display: block;
                position: absolute;
                /* size of arrow element */
                width: 37px;
                height: 37px;
                cursor: pointer;
                background: url(<?php echo ZZIS_PLUGIN_URL ?>/img/a11.png) no-repeat;
                overflow: hidden;
            }
            .jssora11l { background-position: -11px -41px; }
            .jssora11r { background-position: -71px -41px; }
            .jssora11l:hover { background-position: -131px -41px; }
            .jssora11r:hover { background-position: -191px -41px; }
            .jssora11l.jssora11ldn { background-position: -251px -41px; }
            .jssora11r.jssora11rdn { background-position: -311px -41px; }
        </style>
        <!-- Arrow Left -->
        <span u="arrowleft" class="jssora11l" style="top: 123px; left: 8px;">
        </span>
        <!-- Arrow Right -->
        <span u="arrowright" class="jssora11r" style="top: 123px; right: 8px;">
        </span>
