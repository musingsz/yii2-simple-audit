<?php

namespace musingsz\yii2\audit\components\panels;

/**
 * DataStoragePanelTrait
 * @package musingsz\yii2\audit\components\panels
 */
trait DataStoragePanelTrait
{
    use PanelTrait;

    /**
     * @inheritdoc
     */
    public function hasEntryData($entry)
    {
        $data = $entry->data;
        return isset($data[$this->id]);
    }
}