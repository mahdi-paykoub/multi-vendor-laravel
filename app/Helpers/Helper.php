<?php
function image_url_assets($img, $thumbnail)
{
    return $img ? $img : $thumbnail;
}

function get_site_itself_productInfo($product)
{
    $query_site_condition = $product->productInfos()->where('seller_id', 1)->first();
    return $query_site_condition === null ?
        ($product->productInfos()->first())
        : $query_site_condition;
}
