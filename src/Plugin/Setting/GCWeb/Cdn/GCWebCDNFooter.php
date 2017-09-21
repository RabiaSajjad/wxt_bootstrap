<?php

namespace Drupal\wxt_bootstrap\Plugin\Setting\GCWeb\Cdn;

use Drupal\bootstrap\Plugin\Setting\SettingBase;

/**
 * The "wxt_gcweb_cdn_footer" theme setting.
 *
 * @ingroup plugins_setting
 *
 * @BootstrapSetting(
 *   id = "wxt_gcweb_cdn_footer",
 *   type = "textfield",
 *   title = @Translation("CDN for footer"),
 *   defaultValue = "//cdn.canada.ca/gcweb-cdn-live/sitemenu/sitemenu-",
 *   description = @Translation("If checked the GCWeb theme will use the CDN for the footer."),
 *   groups = {
 *     "gcweb" = @Translation("GCWeb"),
 *     "cdn" = @Translation("CDN"),
 *   }
 * )
 */
class GCWebCDNfooter extends SettingBase {}
