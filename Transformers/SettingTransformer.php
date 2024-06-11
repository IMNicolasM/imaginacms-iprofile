<?php

namespace Modules\Iprofile\Transformers;

use Modules\Ihelpers\Transformers\BaseApiTransformer;

class SettingTransformer extends BaseApiTransformer
{
    public function toArray($request)
    {
        return [
            'id' => $this->when($this->id, $this->id),
            'name' => $this->when($this->name, $this->name),
            'value' => $this->value ?? null,
            'type' => $this->when($this->type, $this->type),
            'relatedId' => $this->when($this->related_id, $this->related_id),
            'entityName' => $this->when($this->entity_name, $this->entity_name),
        ];
    }
}
