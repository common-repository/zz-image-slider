
        <style>
            /* jssor slider bullet navigator skin 07 css */
            /*
            .jssorb07 div           (normal)
            .jssorb07 div:hover     (normal mouseover)
            .jssorb07 .av           (active)
            .jssorb07 .av:hover     (active mouseover)
            .jssorb07 .dn           (mousedown)
            */
            .jssorb07 {
                position: absolute;
            }
            .jssorb07 div, .jssorb07 div:hover, .jssorb07 .av {
                position: absolute;
                /* size of bullet elment */
                width: 20px;
                height: 20px;
                background: url(<?php echo ZZIS_PLUGIN_URL ?>/img/b07.png) no-repeat;
                overflow: hidden;
                cursor: pointer;
            }
            .jssorb07 div { background-position: -5px -5px; }
            .jssorb07 div:hover, .jssorb07 .av:hover { background-position: -35px -5px; }
            .jssorb07 .av { background-position: -65px -5px; }
            .jssorb07 .dn, .jssorb07 .dn:hover { background-position: -95px -5px; }
        </style>
        <!-- bullet navigator container -->
        <div u="navigator" class="jssorb07" style="bottom: 16px; right: 6px;">
            <!-- bullet navigator item prototype -->
            <div u="prototype"></div>
        </div>


