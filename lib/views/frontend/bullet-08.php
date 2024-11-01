
        <style>
            /* jssor slider bullet navigator skin 10 css */
            /*
            .jssorb10 div           (normal)
            .jssorb10 div:hover     (normal mouseover)
            .jssorb10 .av           (active)
            .jssorb10 .av:hover     (active mouseover)
            .jssorb10 .dn           (mousedown)
            */
            .jssorb10 {
                position: absolute;
            }
            .jssorb10 div, .jssorb10 div:hover, .jssorb10 .av {
                position: absolute;
                /* size of bullet elment */
                width: 11px;
                height: 11px;
                background: url(<?php echo ZZIS_PLUGIN_URL ?>/img/b10.png) no-repeat;
                overflow: hidden;
                cursor: pointer;
            }
            .jssorb10 div { background-position: -10px -10px; }
            .jssorb10 div:hover, .jssorb10 .av:hover { background-position: -40px -10px; }
            .jssorb10 .av { background-position: -70px -10px; }
            .jssorb10 .dn, .jssorb10 .dn:hover { background-position: -100px -10px; }
        </style>
        <!-- bullet navigator container -->
        <div u="navigator" class="jssorb10" style="bottom: 16px; right: 6px;">
            <!-- bullet navigator item prototype -->
            <div u="prototype"></div>
        </div>

