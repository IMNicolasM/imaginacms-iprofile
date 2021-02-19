<?php
return [
  'name' => 'Iprofile',
  'fields' =>[
    "cellularPhone",
    "confirmPolytics",
    "birthday",
    "identification",
    "contacts",
    "socialNetworks",
    "mainImage",
    "company",
    "documentType",
    "documentNumber",
    "extraInfo",
    "user_type_id",
  ],
  //add: custom user includes (if they are empty iprofile module will be using default includes) (slim)
  'customUserIncludes'=>[],
  //end custom includes and transformers
  
  'registerExtraFields' =>[
    "cellularPhone",
    "birthday",
    "identification",
    "documentType",
    "documentNumber",
    "mainImage"
  ],
  
  'addressesExtraFields' =>[
    "company",
    "zipCode",
    "documentType",
    "documentNumber",
    "extraInfo",
  ],
  
  'modules-to-manage-permissions' => [
    "Iprofile",
  ],
  'imagesize' => ['width' => 800, 'height' => 800],
  'mediumthumbsize' => ['width' => 400, 'height' => 400],
  'smallthumbsize' => ['width' => 100, 'height' => 100],

    'file_remove' => [
        'rut' => ' ',
        'camaracomercio' => ' ',
        'revenue' => '',
        'patrimony' => '',
        'expenses' => '',
        'other_revenue' => '',
        'concept_other_revenue' => '',
    ],
  
  
  'iprofile' => [
    /*
    |--------------------------------------------------------------------------
    | Partials to include on page views
    |--------------------------------------------------------------------------
    | List the partials you wish to include on the different type page views
    | The content of those fields well be caught by the PostWasCreated and PostWasEdited events
    */
    'partials' => [
      'translatable' => [
        'create' => [],
        'edit' => [],
      ],
      'normal' => [
        'create' => [],
        'edit' => [],
      ],
    ],
    /*
    |--------------------------------------------------------------------------
    | Array of directories to ignore when selecting the template for a page
    |--------------------------------------------------------------------------
    */
    /*
    |--------------------------------------------------------------------------
    | Dynamic relations
    |--------------------------------------------------------------------------
    | Add relations that will be dynamically added to the Post entity
    */
    'relations' => [
      //        'extension' => function ($self) {
      //            return $self->belongsTo(PostExtension::class, 'id', 'post_id')->first();
      //        }
    ],
  ],
  
  
  /**
   * @note routeName param must be set without locale. Ex: (icommerce orders: 'icommerce.store.order.index')
   * use **onlyShowInTheDropdownHeader** (boolean) if you want the link only appear in the dropdown in the header
   * use **onlyShowInTheMenuOfTheIndexProfilePage** (boolean) if you want the link only appear in the dropdown in the header
   * use **showInMenuWithoutSession** (boolean) if you want the link only appear in the dropdown when don't exist session
   * use **dispatchModal** (string - modalAlias) if you want the link only appear in the dropdown when don't exist session
   */
  "userMenuLinks" => [
    [
      "title" => "iprofile::frontend.button.sign_in",
      "routeName" => "account.login.get",
      "icon" => "fa fa-user mr-2",
      "showInMenuWithoutSession" => true,
      'dispatchModal' => "#userLoginModal"
    ],
    [
      "title" => "iprofile::frontend.button.register",
      "routeName" => "account.register",
      "icon" => "fa fa-sign-out mr-2",
      "showInMenuWithoutSession" => true,
      //'dispatchModal' => "#userRegisterModal"
    ]
  ],
];
