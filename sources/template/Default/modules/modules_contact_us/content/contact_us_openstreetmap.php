<?php
/**
 *
 *  @copyright 2008 - https://www.clicshopping.org
 *  @Brand : ClicShopping(Tm) at Inpi all right Reserved
 *  @Licence GPL 2 & MIT
 *  @licence MIT - Portion of osCommerce 2.4
 *  @Info : https://www.clicshopping.org/forum/trademark/
 *
 */

  use ClicShopping\OM\CLICSHOPPING;

?>
  <div class="col-md-<?php echo $content_width; ?>">
     <div class="separator"></div>
      <div class="row">
      <span class="col-md-6 ConstactUsOpenStreetMapAddress">
         <div class="ConstactUsOpenStreetMapStoreAddress">
           <?php echo STORE_NAME; ?><br />
           <?php echo MODULES_CONTACT_US_OPENSTREETMAP_STORE_ADDRESS; ?><br /><br />
         </div>
<?php
  if (!empty(MODULES_CONTACT_US_OPENSTREETMAP_STORE_ADDRESS_ANNEXE_1)) {
?>
         <div class="ConstactUsOpenStreetMapAnnexe">
           <?php echo CLICSHOPPING::getDef('text_open_street_map_annexe'); ?><br />
           <?php echo MODULES_CONTACT_US_OPENSTREETMAP_STORE_ADDRESS_ANNEXE_1 ?><br /><br />
         </div>
<?php
  }

  if (!empty(MODULES_CONTACT_US_OPENSTREETMAP_STORE_ADDRESS_ANNEXE_2)) {
?>
         <div class="ConstactUsOpenStreetMapAnnexe1">
           <?php echo CLICSHOPPING::getDef('text_open_street_map_annexe1'); ?><br />
           <?php echo MODULES_CONTACT_US_OPENSTREETMAP_STORE_ADDRESS_ANNEXE_2; ?>
         </div>
<?php
  }
?>
      </span>

      <span class="col-md-6 ConstactUsOpenStreetMapDisplay">
         <div class="separator"></div>
         <body onLoad="javascript:init();">
           <div id="map" style="height: <?php echo MODULES_CONTACT_US_OPENSTREETMAP_HEIGHT; ?>px";"></div>
        </body>
      </span>
    </div>
  </div>
