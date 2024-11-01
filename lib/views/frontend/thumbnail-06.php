
        <style>
            /* jssor slider thumbnail navigator skin 06 css */
            /*
            .jssort06 .p            (normal)
            .jssort06 .p:hover      (normal mouseover)
            .jssort06 .pav          (active)
            .jssort06 .pav:hover    (active mouseover)
            .jssort06 .pdn          (mousedown)
            */
            .jssort06 {
                position: absolute;
                /* size of thumbnail navigator container */
                width: 240px;
                height: 480px;
            }

                .jssort06 .p {
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 99px;
                    height: 66px;
                }

                .jssort06 .o {
                    position: absolute;
                    top: 0px;
                    left: 0px;
                    width: 99px;
                    height: 66px;
                    overflow: hidden;
                }

                .jssort06 .b {
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 99px;
                    height: 66px;
                    border: none;
                }

                .jssort06 .f {
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 99px;
                    height: 66px;
                    border: none;
                    clip: rect(8px 91px 58px 8px);
                }

                .jssort06 .pav .f {
                    clip: rect(2px 97px 64px 2px);
                }

                .jssort06 .i {
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 99px;
                    height: 66px;
                    background: #000;
                    filter: alpha(opacity=30);
                    opacity: .3;
                    transition: background-color .6s;
                    -moz-transition: background-color .6s;
                    -webkit-transition: background-color .6s;
                    -o-transition: background-color .6s;
                }

                .jssort06 .pav .i {
                    background: #fff;
                    filter: alpha(opacity=100);
                    opacity: 1;
                }

                .jssort06 .p:hover .i, .jssort06 .pav:hover .i {
                    background: #fff;
                    filter: alpha(opacity=30);
                    opacity: .3;
                }

                .jssort06 .p:hover .i {
                    transition: none;
                    -moz-transition: none;
                    -webkit-transition: none;
                    -o-transition: none;
                }

                .jssort06 .p.pdn .i {
                    background: none;
                }
        </style>
        <!-- thumbnail navigator container -->
        <div u="thumbnavigator" class="jssort06" style="right: 0px; bottom: 0px;">
            <!-- Thumbnail Item Skin Begin -->
            <div u="slides" style="cursor: default;">
                <div u="prototype" class="p">
                    <div class="o">
                        <div u="thumbnailtemplate" class="b"></div>
                        <div class="i"></div>
                        <div u="thumbnailtemplate" class="f"></div>
                    </div>
                </div>
            </div>
            <!-- Thumbnail Item Skin End -->
        </div>
