<?php /* Smarty version 2.6.26, created on 2013-08-07 06:11:58
         compiled from CoreHome/templates/iframe_buster_header.tpl */ ?>
<?php if (isset ( $this->_tpl_vars['enableFrames'] ) && ! $this->_tpl_vars['enableFrames']): ?>
    <?php echo '
        <style type="text/css">body {
                display: none;
            }</style>
    '; ?>

<?php endif; ?>