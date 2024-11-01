
        <style>
            /* jssor slider bullet navigator skin 11 css */
            /*
            .jssorb11 div           (normal)
            .jssorb11 div:hover     (normal mouseover)
            .jssorb11 .av           (active)
            .jssorb11 .av:hover     (active mouseover)
            .jssorb11 .dn           (mousedown)
            */
            .jssorb11 {
                position: absolute;
            }
            .jssorb11 div, .jssorb11 div:hover, .jssorb11 .av {
                position: absolute;
                /* size of bullet elment */
                width: 11px;
                height: 11px;
                background: url(<?php echo ZZIS_PLUGIN_URL ?>/img/b11.png) no-repeat;
                overflow: hidden;
                cursor: pointer;
            }
            .jssorb11 div { background-position: -10px -10px; }
            .jssorb11 div:hover, .jssorb11 .av:hover { background-position: -40px -10px; }
            .jssorb11 .av { background-position: -70px -10px; }
            .jssorb11 .dn, .jssorb11 .dn:hover { background-position: -100px -10px; }
        </style>
        <!-- bullet navigator container -->
        <div u="navigator" class="jssorb11" style="bottom: 16px; right: 6px;">
            <!-- bullet navigator item prototype -->
            <div u="prototype"></div>
        </div>


