<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AnswerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'SmileySlider' => $this->SmileySlider,
             'Slider2' => $this->Slider2,
             'Answer3' => $this->Answer3,
            'Answer4' => $this->Answer4,
        ];
    }
}
