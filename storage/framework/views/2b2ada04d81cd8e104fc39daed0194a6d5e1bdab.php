<?php if(strlen($buttonAttributes = $this->getButtonAttributes($record, $column))): ?>
    <a <?php echo $buttonAttributes; ?>>
        <?php if($column->iconCssClass): ?>
            <i class="<?php echo e($column->iconCssClass); ?>"></i>
        <?php endif; ?>
    </a>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\tasty/app/admin/widgets/lists/list_button.blade.php ENDPATH**/ ?>