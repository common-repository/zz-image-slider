
        <style>
            /* jssor slider bullet navigator skin 17 css */
            /*
            .jssorb17 div           (normal)
            .jssorb17 div:hover     (normal mouseover)
            .jssorb17 .av           (active)
            .jssorb17 .av:hover     (active mouseover)
            .jssorb17 .dn           (mousedown)
            */
            .jssorb17 {
                position: absolute;
            }
            .jssorb17 div, .jssorb17 div:hover, .jssorb17 .av {
                position: absolute;
                /* size of bullet elment */
                width: 16px;
                height: 16px;
                background: url(<?php echo ZZIS_PLUGIN_URL ?>/img/b17.png) no-repeat;
                overflow: hidden;
                cursor: pointer;
            }
            .jssorb17 div { background-position: -7px -7px; }
            .jssorb17 div:hover, .jssorb17 .av:hover { background-position: -37px -7px; }
            .jssorb17 .av { background-position: -67px -7px; }
            .jssorb17 .dn, .jssorb17 .dn:hover { background-position: -97px -7px; }
        </style>
        <!-- bullet navigator container -->
        <div u="navigator" class="jssorb17" style="bottom: 16px; right: 6px;">
            <!-- bullet navigator item prototype -->
            <div u="prototype"></div>
        </div>


