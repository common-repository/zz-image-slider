
        <style>
            /* jssor slider bullet navigator skin 16 css */
            /*
            .jssorb16 div           (normal)
            .jssorb16 div:hover     (normal mouseover)
            .jssorb16 .av           (active)
            .jssorb16 .av:hover     (active mouseover)
            .jssorb16 .dn           (mousedown)
            */
            .jssorb16 {
                position: absolute;
            }
            .jssorb16 div, .jssorb16 div:hover, .jssorb16 .av {
                position: absolute;
                /* size of bullet elment */
                width: 21px;
                height: 21px;
                background: url(<?php echo ZZIS_PLUGIN_URL ?>/img/b16.png) no-repeat;
                overflow: hidden;
                cursor: pointer;
            }
            .jssorb16 div { background-position: -5px -5px; }
            .jssorb16 div:hover, .jssorb16 .av:hover { background-position: -35px -5px; }
            .jssorb16 .av { background-position: -65px -5px; }
            .jssorb16 .dn, .jssorb16 .dn:hover { background-position: -95px -5px; }
        </style>
        <!-- bullet navigator container -->
        <div u="navigator" class="jssorb16" style="bottom: 16px; right: 6px;">
            <!-- bullet navigator item prototype -->
            <div u="prototype"></div>
        </div>

