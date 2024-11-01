
        <style>
            /* jssor slider bullet navigator skin 09 css */
            /*
            .jssorb09 div           (normal)
            .jssorb09 div:hover     (normal mouseover)
            .jssorb09 .av           (active)
            .jssorb09 .av:hover     (active mouseover)
            .jssorb09 .dn           (mousedown)
            */
            .jssorb09 {
                position: absolute;
            }
            .jssorb09 div, .jssorb09 div:hover, .jssorb09 .av {
                position: absolute;
                /* size of bullet elment */
                width: 12px;
                height: 12px;
                filter: alpha(opacity=70);
                opacity: .7;
                overflow: hidden;
                cursor: pointer;
                border: #fff 1px solid;
            }
            .jssorb09 div { background-color: #d3d3d3; }
            .jssorb09 div:hover, .jssorb09 .av:hover { background-color: gray; }
            .jssorb09 .av { background-color: #000; }
            .jssorb09 .dn, .jssorb09 .dn:hover { background-color: #a9a9a9; }
        </style>
        <!-- bullet navigator container -->
        <div u="navigator" class="jssorb09" style="bottom: 16px; right: 10px;">
            <!-- bullet navigator item prototype -->
            <div u="prototype"></div>
        </div>

