
        <style>
            /* jssor slider thumbnail navigator skin 12 css */
            /*
            .jssort16 .p            (normal)
            .jssort16 .p:hover      (normal mouseover)
            .jssort16 .pav          (active)
            .jssort16 .pav:hover    (active mouseover)
            .jssort16 .pdn          (mousedown)
            */
            .jssort16 {
                position: absolute;
                /* size of thumbnail navigator container */
                width: 600px;
                height: 100px;
            }

                .jssort16 .p {
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 200px;
                    height: 100px;
                }

                .jssort16 .t {
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 200px;
                    height: 100px;
                    border: none;
                }

                .jssort16 .p img {
                    filter: alpha(opacity=55);
                    opacity: .55;
                    transition: opacity .6s;
                    -moz-transition: opacity .6s;
                    -webkit-transition: opacity .6s;
                    -o-transition: opacity .6s;
                }

                .jssort16 .pav img, .jssort16 .pav:hover img, .jssort16 .p:hover img {
                    filter: alpha(opacity=100);
                    opacity: 1;
                    transition: none;
                    -moz-transition: none;
                    -webkit-transition: none;
                    -o-transition: none;
                }

                .jssort16 .pav:hover img, .jssort16 .p:hover img {
                    filter: alpha(opacity=70);
                    opacity: .7;
                }

                .jssort16 .title, .jssort16 .title_back {
                    position: absolute;
                    top: 70px;
                    left: 0px;
                    width: 200px;
                    height: 30px;
                    line-height: 30px;
                    text-align: center;
                    color: #000;
                    font-size: 20px;
                }

                .jssort16 .title_back {
                    background-color: #fff;
                    filter: alpha(opacity=50);
                    opacity: .5;
                }

                .jssort16 .pav .title_back {
                    background-color: #000;
                    filter: alpha(opacity=50);
                    opacity: .5;
                }

                .jssort16 .pav .title {
                    color: #fff;
                }

                .jssort16 .p.pav:hover .title_back, .jssort16 .p:hover .title_back {
                    filter: alpha(opacity=40);
                    opacity: .4;
                }

                .jssort16 .p.pdn img {
                    filter: alpha(opacity=100);
                    opacity: 1;
                }
        </style>
        <!-- thumbnail navigator container -->
        <div u="thumbnavigator" class="jssort16" style="left: 0px; bottom: 0px;">
            <!-- Thumbnail Item Skin Begin -->
            <div u="slides" style="cursor: default;">
                <div u="prototype" class=p>
                    <div u="thumbnailtemplate" class="t"></div>
                </div>
            </div>
            <!-- Thumbnail Item Skin End -->
        </div>
