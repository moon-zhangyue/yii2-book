<div class="shop_header">
    <i class="shop_icon"></i>
    <strong></strong>
</div>


<?php if( $image_list ):?>
    <div id="slideBox" class="slideBox">
        <div class="bd">
            <ul>
                <?php foreach( $image_list as $_image_info ):?>
                    <li><img style="max-height: 250px;" src="" /></li>
                <?php endforeach;?>
            </ul>
        </div>
        <div class="hd"><ul></ul></div>
    </div>
<?php endif;?>
<div class="fastway_list_box">
    <ul class="fastway_list">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
</div>