<div>
<script>
        jQuery(document).ready(function ($) {

            var options = { 
                
                <?php echo $this->get_js_option("AutoPlay", ",\n") ?>                
                <?php echo $this->get_js_option("StartIndex", ",\n") ?>
                <?php echo $this->get_js_option("Loop", ",\n") ?>
                <?php echo $this->get_js_option("AutoPlaySteps", ",\n") ?>
                <?php echo $this->get_js_option("AutoPlayInterval", ",\n") ?>                
                <?php echo $this->get_js_option("SlideDuration", ",\n") ?>
                <?php echo $this->get_js_option("PauseOnHover", ",\n") ?>
                <?php echo $this->get_js_option("FillMode", ",\n") ?>
                <?php echo $this->get_js_option("PlayOrientation", ",\n") ?>
                <?php echo $this->get_js_option("SlideSpacing", ",\n") ?>              
                $DragOrientation: 0,
                $HWA: true

                <?php if ( $this->get("ShowBullets") > 0 )  { ?>
                ,$BulletNavigatorOptions: {                          //[Optional] Options to specify and enable navigator or not
                    $Class: $JssorBulletNavigator$,                 //[Required] Class to create navigator instance
                    $ChanceToShow: <?php echo $this->get("ShowBullets") ?>,//[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 1,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                    $Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                    $SpacingX: 8,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                    $SpacingY: 8,                                   //[Optional] Vertical space between each item in pixel, default value is 0
                    $Orientation: 1                                 //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                }
                <?php } ?>

                <?php if ( $this->get("ShowArrows") > 0 )  { ?>
                ,$ArrowNavigatorOptions: {                           //[Optional] Options to specify and enable arrow navigator or not
                    $Class: $JssorArrowNavigator$,                  //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: <?php echo $this->get("ShowArrows") ?>, //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: <?php echo $this->get("ArrowsAutocenter" )?>,  //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
                }
                <?php } ?>
                
                

            };
            var jssor_slider<?php echo $zzis_post->ID ?> = new $JssorSlider$('zzis_container_<?php echo $zzis_post->ID ?>', options);                    

            <?php if ( $this->get("Responsive" ) ) { ?>
            function ScaleSlider<?php echo $zzis_post->ID ?>() {
                var bodyWidth = jQuery('#zzis_container_<?php echo $zzis_post->ID ?>').parent().width();
                if (bodyWidth)
                    jssor_slider<?php echo $zzis_post->ID ?>.$ScaleWidth(Math.min(bodyWidth, 1920));
                else
                    window.setTimeout(ScaleSlider<?php echo $zzis_post->ID ?>, 30);
            }
            ScaleSlider<?php echo $zzis_post->ID ?>();

            jQuery(window).bind("load", ScaleSlider<?php echo $zzis_post->ID ?>);
            jQuery(window).bind("resize", ScaleSlider<?php echo $zzis_post->ID ?>);
            jQuery(window).bind("orientationchange", ScaleSlider<?php echo $zzis_post->ID ?>);   
            <?php } ?>
        }); 

</script>

<?php if ($this->get("Styles") == 0)  { ?>
<style scoped>
    <?php require ZZIS_PLUGIN_DIR . 'css/style.css' ?>
</style>
<?php } ?>

<div id="zzis_container_<?php echo $zzis_post->ID ?>" class="zzis_container" style="position: relative; overflow: hidden; top: 0px; left: 0px; width: <?php echo $this->get("SlideWidth") ?>px; height: <?php echo $this->get("SlideHeight") ?>px;">    
    <div u="slides" style="cursor: move; position: absolute; overflow: hidden; left: 0px; top: 0px; width: <?php echo $this->get("SlideWidth") ?>px; height: <?php echo $this->get("SlideHeight") ?>px;">
        <?php $i = 0; ?>
        <?php foreach ($images as $img) { ?>
            <?php $visible = ( isset($img['zzis_image_visible'] ) ? $img['zzis_image_visible'] : "1"); ?>
            <?php if ( $visible === "1" )  {?>
            <?php $i++; ?>
            <div class="zz-slide-<?php echo $i ?>">
                <?php if ( $img['zzis_image_readmore_link'] != '' && $img['zzis_image_readmore_link_type'] > 0  ) { ?>
                <a u="image" href="<?php echo $img['zzis_image_readmore_link'] ?>">          
                <?php } ?>
                        
                <img u="image" class="zzis-slide-img" src="<?php echo $img['zzis_image_url'] ?>" />
                
                <?php if( $img['zzis_image_label'] != "" || $img['zzis_image_desc'] != "" || $img['zzis_image_readmore_link_type'] === "0")  { ?>
                <div class="zzis-slide-captions">
                <?php } ?>
                    <?php if( isset($img['zzis_image_label']) && $img['zzis_image_label'] != "" )  {?>
                    <h1 class="zzis-slide-title" style="position:relative;"><?php echo $img['zzis_image_label'] ?> </h1>
                    <?php } ?>

                    <?php if( isset($img['zzis_image_desc']) && $img['zzis_image_desc'] != "" )  {?>
                    <h2 class="zzis-slide-desc"  style="position:relative;"><?php echo $img['zzis_image_desc'] ?> </h2>
                    <?php } ?>

                    <?php if ( $img['zzis_image_readmore_link'] != '' && $img['zzis_image_readmore_link_type'] === "0" ) { ?>
                    <div class="zzis-slide-readmore-btn"  style="position:relative;">
                        <a class="zzis-slide-readmore-btn-link" href="<?php echo $img['zzis_image_readmore_link'] ?>"><?php echo $this->get_string("ReadMoreButtonTitle") ?></a>
                    </div>
                    <?php } ?> 
                <?php if( $img['zzis_image_label'] != "" || $img['zzis_image_desc'] != "" || $img['zzis_image_readmore_link_type'] === "0")  { ?>
                </div>
                <?php } ?> 
                    
                <?php if ( $img['zzis_image_readmore_link'] != '' && $img['zzis_image_readmore_link_type'] > 0  ) { ?>
                </a>
                <?php } ?>
            </div>
            <?php } ?>  
        <?php } ?>                                        
    </div>
    
    <?php 
        if ( $this->get("ShowArrows") > 0 )  { 
            $this->get_arrows_skin_hmtl ( $this->get( "ArrowsSkin" ) );
        }
        if ( $this->get("ShowBullets") > 0 )  { 
            $this->get_bullets_skin_hmtl ( $this->get( "BulletsSkin" ) );
        }
    ?>

</div>
</div>

