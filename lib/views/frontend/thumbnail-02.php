
        <style>
            /* jssor slider thumbnail navigator skin 02 css */
            /*
            .jssort02 .p            (normal)
            .jssort02 .p:hover      (normal mouseover)
            .jssort02 .p.pav        (active)
            .jssort02 .p.pdn        (mousedown)
            */

            .jssort02 {
                position: absolute;
                /* size of thumbnail navigator container */
                width: 240px;
                height: 480px;
            }

                .jssort02 .p {
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 99px;
                    height: 66px;
                }

                .jssort02 .t {
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    border: none;
                }

                .jssort02 .w {
                    position: absolute;
                    top: 0px;
                    left: 0px;
                    width: 100%;
                    height: 100%;
                }

                .jssort02 .c {
                    position: absolute;
                    top: 0px;
                    left: 0px;
                    width: 95px;
                    height: 62px;
                    border: #000 2px solid;
                    box-sizing: content-box;
                    background: url(<?php echo ZZIS_PLUGIN_URL ?>/img/t01.png) -800px -800px no-repeat;
                    _background: none;
                }

                .jssort02 .pav .c {
                    top: 2px;
                    _top: 0px;
                    left: 2px;
                    _left: 0px;
                    width: 95px;
                    height: 62px;
                    border: #000 0px solid;
                    _border: #fff 2px solid;
                    background-position: 50% 50%;
                }

                .jssort02 .p:hover .c {
                    top: 0px;
                    left: 0px;
                    width: 97px;
                    height: 64px;
                    border: #fff 1px solid;
                    background-position: 50% 50%;
                }

                .jssort02 .p.pdn .c {
                    background-position: 50% 50%;
                    width: 95px;
                    height: 62px;
                    border: #000 2px solid;
                }

                * html .jssort02 .c, * html .jssort02 .pdn .c, * html .jssort02 .pav .c {
                    /* ie quirks mode adjust */
                    width /**/: 99px;
                    height /**/: 66px;
                }
        </style>

        <!-- thumbnail navigator container -->
        <div u="thumbnavigator" class="jssort02" style="left: 0px; bottom: 0px;">
            <!-- Thumbnail Item Skin Begin -->
            <div u="slides" style="cursor: default;">
                <div u="prototype" class="p">
                    <div class=w><div u="thumbnailtemplate" class="t"></div></div>
                    <div class=c></div>
                </div>
            </div>
            <!-- Thumbnail Item Skin End -->
        </div>

