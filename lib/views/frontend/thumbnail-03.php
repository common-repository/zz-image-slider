
        <style>
            /* jssor slider thumbnail navigator skin 03 css */
            /*
            .jssort03 .p            (normal)
            .jssort03 .p:hover      (normal mouseover)
            .jssort03 .pav          (active)
            .jssort03 .pdn          (mousedown)
            */

            .jssort03 {
                position: absolute;
                /* size of thumbnail navigator container */
                width: 600px;
                height: 60px;
            }

                .jssort03 .p {
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 62px;
                    height: 32px;
                }

                .jssort03 .t {
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    border: none;
                }

                .jssort03 .w, .jssort03 .pav:hover .w {
                    position: absolute;
                    width: 60px;
                    height: 30px;
                    border: white 1px dashed;
                    box-sizing: content-box;
                }

                .jssort03 .pdn .w, .jssort03 .pav .w {
                    border-style: solid;
                }

                .jssort03 .c {
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 62px;
                    height: 32px;
                    background-color: #000;

                    filter: alpha(opacity=45);
                    opacity: .45;
                    transition: opacity .6s;
                    -moz-transition: opacity .6s;
                    -webkit-transition: opacity .6s;
                    -o-transition: opacity .6s;
                }

                .jssort03 .p:hover .c, .jssort03 .pav .c {
                    filter: alpha(opacity=0);
                    opacity: 0;
                }

                .jssort03 .p:hover .c {
                    transition: none;
                    -moz-transition: none;
                    -webkit-transition: none;
                    -o-transition: none;
                }

                * html .jssort03 .w {
                    width /**/: 62px;
                    height /**/: 32px;
                }
        </style>

        <!-- thumbnail navigator container -->
        <div u="thumbnavigator" class="jssort03" style="left: 0px; bottom: 0px;">

            <!-- the following background element is optional -->
            <div style=" background-color: #000; filter:alpha(opacity=30); opacity:.3; width: 100%; height:100%;"></div>

            <!-- Thumbnail Item Skin Begin -->
            <div u="slides" style="cursor: default;">
                <div u="prototype" class="p">
                    <div class=w><div u="thumbnailtemplate" class="t"></div></div>
                    <div class=c></div>
                </div>
            </div>
            <!-- Thumbnail Item Skin End -->
        </div>

