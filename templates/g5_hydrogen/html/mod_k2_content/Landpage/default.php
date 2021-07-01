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
            <p class="moduleItemTitle" href="<?php echo $item->link; ?>"><?php echo $item->title; ?></p>
            <?php endif; ?>

            <?php if($params->get('itemAuthor')): ?>
            <div class="moduleItemAuthor">
                <?php echo K2HelperUtilities::writtenBy($item->authorGender); ?>

                

                <?php if($params->get('userDescription')): ?>
                <?php echo $item->authorDescription; ?>
                <?php endif; ?>
            </div>
            <?php endif; ?>






          
        </li>
        <?php endforeach; ?>
        <li class="clearList"></li>
    </ul>
    <?php endif; ?>

  

 
</div>




<script>
  jQuery(document).ready(()=>{


    jQuery( "#g-showcase" ).append( '<svg class="arrows"><path class="a1" d="M0 0 L30 32 L60 0"></path>							<path class="a2" d="M0 20 L30 52 L60 20"></path>							<path class="a3" d="M0 40 L30 72 L60 40"></path></svg>' );



  //jQuery("#childNode").detach().appendTo("#parentNode");
  })
  jQuery(document).ready(function() {
    jQuery(".arrows").click(function() {
        jQuery('html, body').animate({
         scrollTop: jQuery(".article-header").offset().top
     }, 700);
 });
});



</script>
