
        <style>
            /* jssor slider bullet navigator skin 02 css */
            /*
            .jssorb02 div           (normal)
            .jssorb02 div:hover     (normal mouseover)
            .jssorb02 .av           (active)
            .jssorb02 .av:hover     (active mouseover)
            .jssorb02 .dn           (mousedown)
            */
            .jssorb02 {
                position: absolute;
            }
            .jssorb02 div, .jssorb02 div:hover, .jssorb02 .av {
                position: absolute;
                /* size of bullet elment */
                width: 21px;
                height: 21px;
                text-align: center;
                line-height: 21px;
                color: white;
                font-size: 12px;
                background: url(<?php echo ZZIS_PLUGIN_URL ?>/img/b02.png) no-repeat;
                overflow: hidden;
                cursor: pointer;
            }
            .jssorb02 div { background-position: -5px -5px; }
            .jssorb02 div:hover, .jssorb02 .av:hover { background-position: -35px -5px; }
            .jssorb02 .av { background-position: -65px -5px; }
            .jssorb02 .dn, .jssorb02 .dn:hover { background-position: -95px -5px; }
        </style>
        <!-- bullet navigator container -->
        <div u="navigator" class="jssorb02" style="bottom: 16px; right: 6px;">
            <!-- bullet navigator item prototype -->
            <div u="prototype"><div u="numbertemplate"></div></div>
        </div>

