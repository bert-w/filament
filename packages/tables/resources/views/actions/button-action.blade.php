@php
    $action = $getAction();
    $record = $getRecord();

    if (! $action) {
        $wireClickAction = null;
    } elseif ($record) {
        $wireClickAction = "mountTableAction('{$getName()}', '{$record->getKey()}')";
    } else {
        $wireClickAction = "mountTableAction('{$getName()}')";
    }
@endphp

<x-tables::button
    :tag="((! $action) && $url) ? 'a' : 'button'"
    :wire:click="$isEnabled() ? $wireClickAction : null"
    :href="$getUrl()"
    :target="$shouldOpenUrlInNewTab() ? '_blank' : null"
    :disabled="$isDisabled()"
    :color="$getColor()"
    :outlined="$isOutlined()"
    :icon="$getIcon()"
    :icon-position="$getIconPosition()"
    size="sm"
    class="filament-tables-button-action"
>
    {{ $getLabel() }}
</x-tables::button>
