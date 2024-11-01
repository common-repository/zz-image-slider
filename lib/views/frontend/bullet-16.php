
        <style>
            /* jssor slider bullet navigator skin 20 css */
            /*
            .jssorb20 div           (normal)
            .jssorb20 div:hover     (normal mouseover)
            .jssorb20 .av           (active)
            .jssorb20 .av:hover     (active mouseover)
            .jssorb20 .dn           (mousedown)
            */
            .jssorb20 {
                position: absolute;
            }
            .jssorb20 div, .jssorb20 div:hover, .jssorb20 .av {
                position: absolute;
                /* size of bullet elment */
                width: 19px;
                height: 19px;
                text-align: center;
                line-height: 19px;
                color: white;
                font-size: 12px;
                background: url(<?php echo ZZIS_PLUGIN_URL ?>/img/b20.png) no-repeat;
                overflow: hidden;
                cursor: pointer;
            }
            .jssorb20 div { background-position: -5px -5px; }
            .jssorb20 div:hover, .jssorb20 .av:hover { background-position: -35px -5px; }
            .jssorb20 .av { background-position: -65px -5px; }
            .jssorb20 .dn, .jssorb20 .dn:hover { background-position: -95px -5px; }
        </style>
        <!-- bullet navigator container -->
        <div u="navigator" class="jssorb20" style="bottom: 16px; right: 6px;">
            <!-- bullet navigator item prototype -->
            <div u="prototype"><div u="numbertemplate"></div></div>
        </div>


