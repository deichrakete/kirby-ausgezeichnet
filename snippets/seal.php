<?php

/**
 * @var bool $renderHook
 */

if (!isset($renderHook)) {
  $renderHook = false;
}

$type = option('deichrakete.ausgezeichnet.type');
$position = option('deichrakete.ausgezeichnet.position');
$marginBottom = option('deichrakete.ausgezeichnet.margin-bottom');
$marginHorizontal = option('deichrakete.ausgezeichnet.margin-horizontal');
$backgroundColor = option('deichrakete.ausgezeichnet.background-color');
$panelBackgroundColor = option('deichrakete.ausgezeichnet.panel-background-color');
$panelTextColor = option('deichrakete.ausgezeichnet.panel-text-color');
$orgID = option('deichrakete.ausgezeichnet.orgID');
$lang = option('deichrakete.ausgezeichnet.lang');
?>

<?php if ((option('deichrakete.ausgezeichnet.use-snippet') || $renderHook) && $orgID != ''): ?>
  <div class="auorgDynamicSeal"
    auorg-data-type="<?= $type ?>"
    auorg-data-position="<?= $position ?>"
    auorg-data-margin-bottom="<?= $marginBottom ?>"
    auorg-data-margin-horizontal="<?= $marginHorizontal ?>"
    auorg-data-background-color="<?= $backgroundColor ?>"
    auorg-data-panel-background-color="<?= $panelBackgroundColor ?>"
    auorg-data-panel-text-color="<?= $panelTextColor ?>">
  </div>
  <script src="https://siegel.ausgezeichnet.org/widgets/<?= $orgID ?>/dynamic-seal.js?lang=<?= $lang ?>"></script>
<?php endif; ?>
