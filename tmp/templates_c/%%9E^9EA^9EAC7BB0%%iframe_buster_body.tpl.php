<?php /* Smarty version 2.6.26, created on 2013-08-07 06:11:58
         compiled from CoreHome/templates/iframe_buster_body.tpl */ ?>
<?php if (isset ( $this->_tpl_vars['enableFrames'] ) && ! $this->_tpl_vars['enableFrames']): ?>
<?php echo '
    <script type="text/javascript">if (self == top) {
            var theBody = document.getElementsByTagName(\'body\')[0];
            theBody.style.display = \'block\';
        } else { top.location = self.location; }</script>
'; ?>
<?php endif; ?>