
        <style>
            /* jssor slider bullet navigator skin 14 css */
            /*
            .jssorb14 div           (normal)
            .jssorb14 div:hover     (normal mouseover)
            .jssorb14 .av           (active)
            .jssorb14 .av:hover     (active mouseover)
            .jssorb14 .dn           (mousedown)
            */
            .jssorb14 {
                position: absolute;
            }
            .jssorb14 div, .jssorb14 div:hover, .jssorb14 .av {
                position: absolute;
                /* size of bullet elment */
                width: 12px;
                height: 12px;
                background: url(<?php echo ZZIS_PLUGIN_URL ?>/img/b14.png) no-repeat;
                overflow: hidden;
                cursor: pointer;
            }
            .jssorb14 div { background-position: -9px -9px; }
            .jssorb14 div:hover, .jssorb14 .av:hover { background-position: -39px -9px; }
            .jssorb14 .av { background-position: -69px -9px; }
            .jssorb14 .dn, .jssorb14 .dn:hover { background-position: -99px -9px; }
        </style>
        <!-- bullet navigator container -->
        <div u="navigator" class="jssorb14" style="bottom: 16px; right: 6px;">
            <!-- bullet navigator item prototype -->
            <div u="prototype"></div>
        </div>


