<form <?php print html_attr(($form['attr'] ?? []) + ['method' => 'POST']); ?>>

    <?php if (isset($form['title'])): ?> 
        <h2><?php print $form['title']; ?></h2>
    <?php endif; ?>

    <!--Field Generation Start-->
    <?php foreach ($form['fields'] ?? [] as $field_id => $field): ?>

        <div>
            <?php if (isset($field['label'])): ?> 
                <label>
                    <span><?php print $field['label']; ?></span>
            <?php endif; ?>

            <?php if ($field['attr']['type'] === 'select') : ?>
                <select <?php print html_attr(['name' => $field_id]); ?>>
                    <?php foreach ($field['options'] as $option_id => $option) : ?>
                        <option value=<?php print $option_id; ?>>
                            <?php print $option; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            <?php else: ?>
                <input <?php print html_attr(['name' => $field_id] + $field['attr'] + ($field['extra']['attr'] ?? [])); ?>>
            <?php endif; ?>

        <?php if (isset($field['label'])): ?> 
            </label>
        <?php endif; ?>

        <?php if (isset($field['error'])): ?>
            <span><?php print $field['error']; ?></span>
        <?php endif; ?>

    </div>
    <!--Field Generation End-->
<?php endforeach; ?>


<!--Button Generation Start-->
<?php foreach ($form['button'] ?? [] as $button_id => $button): ?>
    <input <?php print html_attr(['name' => $button_id] + $button); ?>>
<?php endforeach; ?>
<!--Button Generation End-->

<?php if (isset($form['message'])): ?> 
    <div><?php print $form['message']; ?></div>
<?php endif; ?>

</form>

