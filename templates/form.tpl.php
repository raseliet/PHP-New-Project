
<form <?php print html_attr(($form['attr'] ?? []) + ['method' => 'POST']) ; ?>>
    
<!--Field Generation Start-->
<?php foreach ($form['fields'] ?? [] as $field_id => $field): ?>
    <input <?php print html_attr(['name' => $field_id, 'placeholder' => $field['placeholder'], 'type' => $field['type']]) ;?>>
<?php endforeach; ?>
<!--Field Generation End-->

<!--Button Generation Start-->
<?php foreach ($form['button'] ?? [] as $button_id => $button) : ?>
<input <?php print html_attr(['name' => $button_id] + $button); ?>>
<?php endforeach; ?>
<!--Button Generation End-->
    
    
    
    
</form>

