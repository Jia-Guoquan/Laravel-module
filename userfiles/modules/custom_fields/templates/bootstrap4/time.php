<div class="<?php echo $settings['class']; ?>">
    <div class="form-group">
        <label class="col-form-label">
            <?php echo $data['name']; ?>
            <?php if ($settings['required']): ?>
                <span style="color: red;">*</span>
            <?php endif; ?>
        </label>

        <div class="mw-ui-controls">
            <input type="text" class="form-control js-bootstrap4-timepicker" <?php if ($settings['required']): ?>required="true"<?php endif; ?> data-custom-field-id="<?php echo $data['id']; ?>" name="<?php echo $data['name']; ?>" placeholder="<?php echo $data['placeholder']; ?>" autocomplete="off"/>
        </div>

        <?php if ($data['help']): ?>
            <small class="form-text text-muted"><?php echo $data['help']; ?></small>
        <?php endif; ?>
    </div>
</div>

<script>
    mw.lib.require("bootstrap_datetimepicker");
</script>

<script type="text/javascript">
    $(document).ready(function () {
        $('.js-bootstrap4-timepicker').datetimepicker({
            pickDate: false,
            minuteStep: 15,
            pickerPosition: 'bottom-right',
            format: 'HH:ii p',
            autoclose: true,
            showMeridian: true,
            startView: 1,
            maxView: 1,
        });
    });
</script>