<?php // maybe we should abstract this away as a widget ?>
<span> 
<?php $obj=new shareCount(get_permalink( $post->ID ));  
echo $obj->get_tweets() + $obj->get_plusones() + $obj->get_fb() + $obj->get_stumble() + $obj->get_pinterest() + $obj->get_delicious() + $obj->get_linkedin(); ?>
Shares</span>