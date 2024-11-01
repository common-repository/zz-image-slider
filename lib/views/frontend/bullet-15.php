
        <style>
            /* jssor slider bullet navigator skin 18 css */
            /*
            .jssorb18 div           (normal)
            .jssorb18 div:hover     (normal mouseover)
            .jssorb18 .av           (active)
            .jssorb18 .av:hover     (active mouseover)
            .jssorb18 .dn           (mousedown)
            */
            .jssorb18 {
                position: absolute;
            }
            .jssorb18 div, .jssorb18 div:hover, .jssorb18 .av {
                position: absolute;
                /* size of bullet elment */
                width: 24px;
                height: 24px;
                text-align: center;
                line-height: 24px;
                font-size: 16px;
                background: url(<?php echo ZZIS_PLUGIN_URL ?>/img/b18.png) no-repeat;
                overflow: hidden;
                cursor: pointer;
            }
            .jssorb18 div { background-position: -3px -3px; }
            .jssorb18 div:hover, .jssorb18 .av:hover { background-position: -33px -3px; }
            .jssorb18 .av { background-position: -63px -3px; }
            .jssorb18 .dn, .jssorb18 .dn:hover { background-position: -93px -3px; }
            .jssorb18 .n  { display: none; color: #000; }
            .jssorb18 div:hover .n, .jssorb18 .av .n, .jssorb18 .av:hover .n, .jssorb18 .dn .n { display: block; }
        </style>
        <!-- bullet navigator container -->
        <div u="navigator" class="jssorb18" style="bottom: 16px; right: 6px;">
            <!-- bullet navigator item prototype -->
            <div u="prototype">
                <div u="numbertemplate" class=n></div>
            </div>
        </div>


