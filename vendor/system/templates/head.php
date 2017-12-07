<meta charset="<?= Justify::$settings['html']['charset'] ?>">
<?php foreach (Justify::$settings['components']['js'] as $js): ?>
    <script src="<?= $js ?>"></script>
<?php endforeach; ?>

<?php foreach (Justify::$settings['components']['css'] as $css): ?>
    <link rel="stylesheet" href="<?= $css ?>">
<?php endforeach; ?>
