
        <style>
            /* jssor slider thumbnail navigator skin 05 css */
            /*
            .jssort05 .p           (normal)
            .jssort05 .p:hover     (normal mouseover)
            .jssort05 .pav           (active)
            .jssort05 .pav:hover     (active mouseover)
            .jssort05 .pdn           (mousedown)
            */
            .jssort05 {
                position: absolute;
                /* size of thumbnail navigator container */
                width: 800px;
                height: 100px;
            }

                .jssort05 .p {
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 72px;
                    height: 72px;
                }

                .jssort05 .o {
                    position: absolute;
                    top: 1px;
                    left: 1px;
                    width: 72px;
                    height: 72px;
                    overflow: hidden;
                }

                .jssort05 .b {
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 72px;
                    height: 72px;
                    border: none;
                }

                .jssort05 .f {
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 72px;
                    height: 72px;
                    border: none;
                    clip: rect(8px 63px 63px 8px);
                }

                .jssort05 .i {
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 72px;
                    height: 72px;
                    background: #000;
                    filter: alpha(opacity=30);
                    opacity: .3;
                    transition: background-color .6s;
                    -moz-transition: background-color .6s;
                    -webkit-transition: background-color .6s;
                    -o-transition: background-color .6s;
                }

                .jssort05 .pav .i {
                    background: #fff;
                    filter: alpha(opacity=80);
                    opacity: .8;
                }

                .jssort05 .p:hover .i, .jssort05 .pav:hover .i {
                    background: #fff;
                    filter: alpha(opacity=30);
                    opacity: .3;
                }

                .jssort05 .p:hover .i {
                    transition: none;
                    -moz-transition: none;
                    -webkit-transition: none;
                    -o-transition: none;
                }

                .jssort05 .p.pdn .i {
                    background: none;
                }
        </style>
        <!-- thumbnail navigator container -->
        <div u="thumbnavigator" class="jssort05" style="left: 0px; bottom: 0px;">
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
