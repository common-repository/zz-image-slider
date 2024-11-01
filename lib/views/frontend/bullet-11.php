
        <style>
            /* jssor slider bullet navigator skin 13 css */
            /*
            .jssorb13 div           (normal)
            .jssorb13 div:hover     (normal mouseover)
            .jssorb13 .av           (active)
            .jssorb13 .av:hover     (active mouseover)
            .jssorb13 .dn           (mousedown)
            */
            .jssorb13 {
                position: absolute;
            }
            .jssorb13 div, .jssorb13 div:hover, .jssorb13 .av {
                position: absolute;
                /* size of bullet elment */
                width: 21px;
                height: 21px;
                background: url(<?php echo ZZIS_PLUGIN_URL ?>/img/b13.png) no-repeat;
                overflow: hidden;
                cursor: pointer;
            }
            .jssorb13 div { background-position: -5px -5px; }
            .jssorb13 div:hover, .jssorb13 .av:hover { background-position: -35px -5px; }
            .jssorb13 .av { background-position: -65px -5px; }
            .jssorb13 .dn, .jssorb13 .dn:hover { background-position: -95px -5px; }
        </style>
        <!-- bullet navigator container -->
        <div u="navigator" class="jssorb13" style="bottom: 16px; right: 6px;">
            <!-- bullet navigator item prototype -->
            <div u="prototype"></div>
        </div>


