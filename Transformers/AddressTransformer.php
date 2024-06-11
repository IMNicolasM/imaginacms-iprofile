<?php

namespace Modules\Iprofile\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Modules\Ihelpers\Transformers\BaseApiTransformer;
use Modules\Iprofile\Transformers\UserTransformer;

class AddressTransformer extends BaseApiTransformer
{
  public function toArray($request)
  {

    return [
      'id' => $this->when($this->id, $this->id),
      'firstName' => $this->when($this->first_name, $this->first_name),
      'lastName' => $this->when($this->last_name, $this->last_name),
      'company' => $this->when($this->company, $this->company),
      'address1' => $this->when($this->address_1, $this->address_1),
      'address2' => $this->when($this->address_2, $this->address_2),
      'telephone' => $this->when($this->telephone, $this->telephone),
      'city' => $this->when($this->city, $this->city),
      'default' => $this->when(isset($this->default), $this->default),
      'cityId' => $this->when($this->city_id, $this->city_id),
      'zipCode' => $this->when($this->zip_code, $this->zip_code),
      'country' => $this->when($this->country, $this->country),
      'country' => $this->when($this->countryIso2, $this->countryIso2),
      'countryId' => $this->when($this->country_id, $this->country_id),
      'state' => $this->when($this->state, $this->state),
      'options' => $this->when($this->options, $this->options),
      'state_id' => $this->when($this->state_id, $this->state_id),
      'neighborhood' => $this->when($this->neighborhood, $this->neighborhood),
      'neighborhoodId' => $this->when($this->neighborhood_id, $this->neighborhood_id),
      'appSuit' => $this->when($this->app_suit, $this->app_suit),
      'type' => $this->when($this->type, $this->type),
      'lat' => $this->when($this->lat, $this->lat),
      'lng' => $this->when($this->lng, $this->lng),
      'user' => new UserTransformer($this->whenLoaded('user')),
      'createdAt' => $this->when($this->created_at, $this->created_at),
      'updatedAt' => $this->when($this->updated_at, $this->updated_at),
    ];

  }
}
