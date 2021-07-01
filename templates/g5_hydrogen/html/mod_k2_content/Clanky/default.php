<?php
/**
 * @version    2.10.x
 * @package    K2
 * @author     JoomlaWorks https://www.joomlaworks.net
 * @copyright  Copyright (c) 2006 - 2020 JoomlaWorks Ltd. All rights reserved.
 * @license    GNU/GPL license: https://www.gnu.org/copyleft/gpl.html
 */

// no direct access
defined('_JEXEC') or die;

?>

<div id="k2ModuleBox<?php echo $module->id; ?>" class="k2ItemsBlock<?php if($params->get('moduleclass_sfx')) echo ' '.$params->get('moduleclass_sfx'); ?>">
    <?php if($params->get('itemPreText')): ?>
    <p class="modulePretext"><?php echo $params->get('itemPreText'); ?></p>
    <?php endif; ?>

    <?php if(isset($items) && count($items)): ?>
    <ul>
        <?php foreach ($items as $key=>$item):  ?>
        <li class="<?php echo ($key%2) ? "odd" : "even"; if(count($items)==$key+1) echo ' lastItem'; ?>">
           
         

            <?php if($params->get('itemTitle')): ?>
            <a class="moduleItemTitle" href="<?php echo $item->link; ?>">
            <?php endif; ?>
            <div class="left-box">
                
            </div>
            <div class="right-box">
                <h4>
                <?php echo $item->title; ?>
                </h4>
            <?php if($params->get('itemImage') || $params->get('itemIntroText')): ?>
            <div class="moduleItemIntrotext">
                <?php if($params->get('itemImage') && !empty($item->image)): ?>
                <a class="moduleItemImage" href="<?php echo $item->link; ?>" title="<?php echo JText::_('K2_CONTINUE_READING'); ?> &quot;<?php echo K2HelperUtilities::cleanHtml($item->title); ?>&quot;">
                    <img src="<?php echo $item->image; ?>" alt="<?php echo K2HelperUtilities::cleanHtml($item->title); ?>" />
                </a>
                <?php endif; ?>

                <?php if($params->get('itemIntroText')): ?>
                <?php echo $item->introtext; ?>
                <?php endif; ?>
            </div>
            <?php endif; ?>
            </div>
           

         

           

            </a>
        </li>
        <?php endforeach; ?>
        <li class="clearList"></li>
    </ul>
    <?php endif; ?>

    <?php if($params->get('itemCustomLink')): ?>
    <a class="moduleCustomLink" href="<?php echo $itemCustomLinkURL; ?>" title="<?php echo K2HelperUtilities::cleanHtml($itemCustomLinkTitle); ?>">
        <?php echo $itemCustomLinkTitle; ?>
    </a>
    <?php endif; ?>

</div>









<script>
   jQuery(document).ready(()=>{
        jQuery( ".g-main-nav" ).append( "<div class='hamburger-menu'></div>" );
        jQuery( ".g-main-nav" ).addClass( "burger-wrap" );
        jQuery('.menu-wrapper').on('click', function() {
		    jQuery('.hamburger-menu').toggleClass('animate');
	    })
            

   })
</script>
