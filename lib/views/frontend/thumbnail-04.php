
            <style>
                /* jssor slider thumbnail navigator skin 04 css */
                /*
                .jssort04 .p            (normal)
                .jssort04 .p:hover      (normal mouseover)
                .jssort04 .pav          (active)
                .jssort04 .pav:hover    (active mouseover)
                .jssort04 .pdn          (mousedown)
                */

                .jssort04 {
                    position: absolute;
                    /* size of thumbnail navigator container */
                    width: 600px;
                    height: 60px;
                }

                    .jssort04 .p {
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 62px;
                        height: 32px;
                    }

                    .jssort04 .t {
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        border: none;
                    }

                    .jssort04 .w, .jssort04 .pav:hover .w {
                        position: absolute;
                        width: 60px;
                        height: 30px;
                        border: #0099FF 1px solid;
                        box-sizing: content-box;
                    }

                    .jssort04 .pdn .w, .jssort04 .pav .w {
                        border-style: dashed;
                    }

                    .jssort04 .c {
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

                    .jssort04 .p:hover .c, .jssort04 .pav .c {
                        filter: alpha(opacity=0);
                        opacity: 0;
                    }

                    .jssort04 .p:hover .c {
                        transition: none;
                        -moz-transition: none;
                        -webkit-transition: none;
                        -o-transition: none;
                    }

                    * html .jssort04 .w {
                        width /**/: 62px;
                        height /**/: 32px;
                    }
            </style>
            <!-- thumbnail navigator container -->
            <div u="thumbnavigator" class="jssort04" style="right: 0px; bottom: 0px;">
                <!-- Thumbnail Item Skin Begin -->
                <div u="slides" style="bottom: 25px; right: 30px; cursor: default;">
                    <div u="prototype" class="p">
                        <div class=w><div u="thumbnailtemplate" class="t"></div></div>
                        <div class=c></div>
                    </div>
                </div>
                <!-- Thumbnail Item Skin End -->
            </div>
