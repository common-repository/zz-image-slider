
        <style>
            /* jssor slider thumbnail navigator skin 08 css */
            /*
            .jssort08 .p            (normal)
            .jssort08 .p:hover      (normal mouseover)
            .jssort08 .pav          (active)
            .jssort08 .pav:hover    (active mouseover)
            .jssort08 .pdn          (mousedown)
            */

            .jssort08 {
                position: absolute;
                /* size of thumbnail navigator container */
                width: 600px;
                height: 100px;
            }

                .jssort08 .p {
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 50px;
                    height: 50px;
                }

                .jssort08 .i {
                    position: absolute;
                    top: 0px;
                    left: 0px;
                    width: 50px;
                    height: 50px;
                    filter: alpha(opacity=80);
                    opacity: .8;
                }

                .jssort08 .p:hover .i, .jssort08 .pav:hover .i {
                    filter: alpha(opacity=100);
                    opacity: 1;
                }

                .jssort08 .o {
                    position: absolute;
                    top: 0px;
                    left: 0px;
                    width: 48px;
                    height: 48px;
                    border: 1px solid #000;
                    box-sizing: content-box;
                    transition: border-color .6s;
                    -moz-transition: border-color .6s;
                    -webkit-transition: border-color .6s;
                    -o-transition: border-color .6s;
                }

                .jssort08 .pav .o {
                    border-color: #0099ff;
                }

                .jssort08 .p:hover .o {
                    border-color: #fff;
                }

                .jssort08 .p:hover .o {
                    transition: none;
                    -moz-transition: none;
                    -webkit-transition: none;
                    -o-transition: none;
                }

                .jssort08 .p.pdn .o {
                    border-color: #0099ff;
                }

                * html .jssort08 .o {
                    /* ie quirks mode adjust */
                    width /**/: 50px;
                    height /**/: 50px;
                }
        </style>
        <!-- thumbnail navigator container -->
        <div u="thumbnavigator" class="jssort08" style="left: 180px; bottom: 0px;">
            <!-- Thumbnail Item Skin Begin -->
            <div u="slides" style="cursor: default;">
                <div u="prototype" class="p">
                    <div u="thumbnailtemplate" class="i"></div>
                    <div class="o"></div>
                </div>
            </div>
            <!-- Thumbnail Item Skin End -->
        </div>
