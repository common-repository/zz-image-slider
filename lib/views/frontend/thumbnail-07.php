
        <style>
            /* jssor slider thumbnail navigator skin 07 css */
            /*
            .jssort07 .p            (normal)
            .jssort07 .p:hover      (normal mouseover)
            .jssort07 .pav          (active)
            .jssort07 .pav:hover    (active mouseover)
            .jssort07 .pdn          (mousedown)
            */
            .jssort07 {
                position: absolute;
                /* size of thumbnail navigator container */
                width: 800px;
                height: 100px;
            }

                .jssort07 .p {
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 72px;
                    height: 72px;
                }

                .jssort07 .i {
                    position: absolute;
                    top: 0px;
                    left: 0px;
                    width: 72px;
                    height: 72px;
                    filter: alpha(opacity=80);
                    opacity: .8;
                }

                .jssort07 .p:hover .i, .jssort07 .pav .i {
                    filter: alpha(opacity=100);
                    opacity: 1;
                }

                .jssort07 .o {
                    position: absolute;
                    top: 0px;
                    left: 0px;
                    width: 70px;
                    height: 70px;
                    border: 1px solid #000;
                    box-sizing: content-box;
                    transition: border-color .6s;
                    -moz-transition: border-color .6s;
                    -webkit-transition: border-color .6s;
                    -o-transition: border-color .6s;
                }

                .jssort07 .pav .o {
                    border-color: #0099ff;
                }

                .jssort07 .p:hover .o {
                    border-color: #fff;
                    transition: none;
                    -moz-transition: none;
                    -webkit-transition: none;
                    -o-transition: none;
                }

                .jssort07 .p.pdn .o {
                    border-color: #0099ff;
                }

                * html .jssort07 .o {
                    /* ie quirks mode adjust */
                    width /**/: 72px;
                    height /**/: 72px;
                }
        </style>
        <!-- thumbnail navigator container -->
        <div u="thumbnavigator" class="jssort07" style="left: 0px; bottom: 0px;">
            <!-- Thumbnail Item Skin Begin -->
            <div u="slides" style="cursor: default;">
                <div u="prototype" class="p">
                    <div u="thumbnailtemplate" class="i"></div>
                    <div class="o"></div>
                </div>
            </div>
            <!-- Thumbnail Item Skin End -->
        </div>
