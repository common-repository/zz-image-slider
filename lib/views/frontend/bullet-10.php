
        <style>
            /* jssor slider bullet navigator skin 12 css */
            /*
            .jssorb12 div           (normal)
            .jssorb12 div:hover     (normal mouseover)
            .jssorb12 .av           (active)
            .jssorb12 .av:hover     (active mouseover)
            .jssorb12 .dn           (mousedown)
            */
            .jssorb12 {
                position: absolute;
            }
            .jssorb12 div, .jssorb12 div:hover, .jssorb12 .av {
                position: absolute;
                /* size of bullet elment */
                width: 16px;
                height: 16px;
                background: url(<?php echo ZZIS_PLUGIN_URL ?>/img/b12.png) no-repeat;
                overflow: hidden;
                cursor: pointer;
            }
            .jssorb12 div { background-position: -7px -7px; }
            .jssorb12 div:hover, .jssorb12 .av:hover { background-position: -37px -7px; }
            .jssorb12 .av { background-position: -67px -7px; }
            .jssorb12 .dn, .jssorb12 .dn:hover { background-position: -97px -7px; }
        </style>
        <!-- bullet navigator container -->
        <div u="navigator" class="jssorb12" style="bottom: 16px; right: 6px;">
            <!-- bullet navigator item prototype -->
            <div u="prototype"></div>
        </div>

