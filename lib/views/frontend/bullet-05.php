
        <style>
            /* jssor slider bullet navigator skin 06 css */
            /*
            .jssorb06 div           (normal)
            .jssorb06 div:hover     (normal mouseover)
            .jssorb06 .av           (active)
            .jssorb06 .av:hover     (active mouseover)
            .jssorb06 .dn           (mousedown)
            */
            .jssorb06 {
                position: absolute;
            }
            .jssorb06 div, .jssorb06 div:hover, .jssorb06 .av {
                position: absolute;
                /* size of bullet elment */
                width: 18px;
                height: 18px;
                background: url(<?php echo ZZIS_PLUGIN_URL ?>/img/b06.png) no-repeat;
                overflow: hidden;
                cursor: pointer;
            }
            .jssorb06 div { background-position: -6px -6px; }
            .jssorb06 div:hover, .jssorb06 .av:hover { background-position: -36px -6px; }
            .jssorb06 .av { background-position: -66px -6px; }
            .jssorb06 .dn, .jssorb06 .dn:hover { background-position: -96px -6px; }
        </style>
        <!-- bullet navigator container -->
        <div u="navigator" class="jssorb06" style="bottom: 16px; right: 6px;">
            <!-- bullet navigator item prototype -->
            <div u="prototype"></div>
        </div>

