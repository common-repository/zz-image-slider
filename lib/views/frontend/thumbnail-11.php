
        <style>
            /* jssor slider thumbnail Navigator Skin 13 css */
            /*
            .jssort15 .p            (normal)
            .jssort15 .p:hover      (normal mouseover)
            .jssort15 .pav          (active)
            .jssort15 .pav:hover    (active mouseover)
            .jssort15 .pdn          (mousedown)
            */

            .jssort15 {
                position: absolute;
                /* size of thumbnail navigator container */
                width: 600px;
                height: 60px;
            }

                .jssort15 .p {
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 60px;
                    height: 30px;
                }

                .jssort15 .t {
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 60px;
                    height: 30px;
                    border: none;
                    filter: alpha(opacity=45);
                    opacity: .45;
                    transition: opacity .6s;
                    -moz-transition: opacity .6s;
                    -webkit-transition: opacity .6s;
                    -o-transition: opacity .6s;
                }

                .jssort15 .pav .t, .jssort15 .p:hover .t {
                    filter: alpha(opacity=100);
                    opacity: 1;
                    transition: none;
                    -moz-transition: none;
                    -webkit-transition: none;
                    -o-transition: none;
                }

                .jssort15 .p.pdn .t {
                    filter: alpha(opacity=45);
                    opacity: .45;
                }
        </style>
        <!-- thumbnail navigator container -->
        <div u="thumbnavigator" class="jssort15" style="left: 0px; bottom: 0px;">
            <!-- the following background element is optional -->
            <div style=" background-color: #000; filter:alpha(opacity=30); opacity:.3; width: 100%; height:100%;"></div>

            <!-- Thumbnail Item Skin Begin -->
            <div u="slides" style="cursor: default;">
                <div u="prototype" class=p>
                    <div u="thumbnailtemplate" class=t></div>
                </div>
            </div>
            <!-- Thumbnail Item Skin End -->
        </div>
