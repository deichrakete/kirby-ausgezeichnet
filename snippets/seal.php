<?php

/**
 * @var bool $renderHook
 */

if (!isset($renderHook)) {
  $renderHook = false;
}

$type = option('auorg.ausgezeichnet-seal.type');
$position = option('auorg.ausgezeichnet-seal.position');
$marginBottom = option('auorg.ausgezeichnet-seal.margin-bottom');
$marginHorizontal = option('auorg.ausgezeichnet-seal.margin-horizontal');
$backgroundColor = option('auorg.ausgezeichnet-seal.background-color');
$panelBackgroundColor = option('auorg.ausgezeichnet-seal.panel-background-color');
$panelTextColor = option('auorg.ausgezeichnet-seal.panel-text-color');
$orgID = option('auorg.ausgezeichnet-seal.orgID');
$lang = option('auorg.ausgezeichnet-seal.lang');
?>

<?php if (option('auorg.ausgezeichnet-seal.use-snippet') || $renderHook): ?>
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
