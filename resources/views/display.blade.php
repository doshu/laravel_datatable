@once
    @include('datatable::templates')
@endonce

<?php
    $uuid = 'datatable-'.Str::uuid();
    $name = !empty($name) && is_string($name) ? $name : $uuid;
?>
<datatable id="<?= $uuid ?>" :config="config" last-mobile-column-index="50"></datatable>
    
<script>
    $(function() {
        window[<?= json_encode($name) ?>] = new Vue({
            el: '#<?= $uuid ?>',
            data: {
                config: {{ Illuminate\Support\Js::from($table->getConfig()) }}
            }
        });
    });
</script>

