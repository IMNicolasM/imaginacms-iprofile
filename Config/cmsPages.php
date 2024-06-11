<?php

return [
    'admin' => [
    "userIndex" => [
      "permission" => "profile.user.manage",
      "activated" => true,
      "path" => "/users/index",
      "name" => "quser.admin.users",
      "crud" => "quser/_crud/users",
      "page" => "qcrud/_pages/admin/crudPage",
      "layout" => "qsite/_layouts/master.vue",
      "title" => "iprofile.cms.sidebar.adminUserIndex",
      "icon" => "fas fa-users",
      "authenticated" => true,
      "subHeader" => [
        "refresh" => true
      ]
            ],
    "userDepartments" => [
      "permission" => "profile.departments.manage",
      "activated" => true,
      "path" => "/departments",
      "name" => "quser.admin.departments",
      "crud" => "quser/_crud/departments",
      "page" => "qcrud/_pages/admin/crudPage",
      "layout" => "qsite/_layouts/master.vue",
      "isCrud" => true,
      "title" => "iprofile.cms.sidebar.adminUserDepartments",
      "icon" => "fas fa-people-arrows",
      "authenticated" => true,
      "subHeader" => [
        "refresh" => true,
        "breadcrumb" => [
          "iprofile_cms_admin_userIndex"
        ]
      ]
        ],
    "userRoles" => [
      "permission" => "profile.role.manage",
      "activated" => true,
      "path" => "/roles",
      "name" => "quser.admin.roles",
      "crud" => "quser/_crud/roles",
      "page" => "qcrud/_pages/admin/crudPage",
      "layout" => "qsite/_layouts/master.vue",
      "isCrud" => true,
      "title" => "iprofile.cms.sidebar.adminUserRoles",
      "icon" => "fas fa-user-tag",
      "authenticated" => true,
      "subHeader" => [
        "refresh" => true,
        "breadcrumb" => [
          "iprofile_cms_admin_userIndex"
        ]
      ]
            ],
    "directory" => [
      "permission" => "profile.user.directory",
      "activated" => true,
      "path" => "/users/directory",
      "name" => "quser.admin.directory",
      "page" => "quser/_pages/_admin/directory",
      "layout" => "qsite/_layouts/master.vue",
      "title" => "iprofile.cms.sidebar.adminDirectory",
      "icon" => "fas fa-address-book",
      "authenticated" => true,
      "subHeader" => [
        "refresh" => true
      ]
    ]
    ],
    'panel' => [],
    'main' => [
    "login" => [
      "permission" => null,
      "activated" => true,
      "path" => "/auth/login",
      "name" => "auth.login",
      "page" => "quser/_pages/wrapper",
      "layout" => "qsite/_layouts/blank.vue",
      "title" => "iprofile.cms.sidebar.login",
      "icon" => "fas fa-chart-bar",
      "authenticated" => true,
      "authType" => "login"
        ],
    "logout" => [
      "permission" => null,
      "activated" => true,
      "path" => "/auth/logout",
      "name" => "auth.logout",
      "page" => "quser/_pages/wrapper",
      "layout" => "qsite/_layouts/blank.vue",
      "title" => "iprofile.cms.sidebar.logout",
      "icon" => "fas fa-chart-bar",
      "authType" => "logout"
        ],
    "register" => [
      "permission" => null,
      "activated" => true,
      "path" => "/auth/register",
      "name" => "auth.register",
      "page" => "quser/_pages/wrapper",
      "layout" => "qsite/_layouts/blank.vue",
      "title" => "iprofile.cms.sidebar.register",
      "icon" => "fas fa-chart-bar",
      "authType" => "register"
        ],
    "resetPassword" => [
      "permission" => null,
      "activated" => true,
      "path" => "/auth/reset",
      "name" => "auth.reset.password",
      "page" => "quser/_pages/wrapper",
      "layout" => "qsite/_layouts/blank.vue",
      "title" => "iprofile.cms.sidebar.resetPassword",
      "icon" => "fas fa-chart-bar",
      "authType" => "resetPassword"
            ],
    "resetPasswordComplete" => [
      "permission" => null,
      "activated" => true,
      "path" => "/auth/reset/:userId/:token",
      "name" => "auth.reset-complete",
      "page" => "quser/_pages/wrapper",
      "layout" => "qsite/_layouts/blank.vue",
      "title" => "iprofile.cms.sidebar.resetPassword",
      "icon" => "fas fa-chart-bar",
      "authType" => "resetPasswordComplete"
        ],
    "userProfile" => [
      "permission" => null,
      "activated" => true,
      "path" => "/me/profile",
      "name" => "user.profile.me",
      "page" => "quser/_pages/profile",
      "layout" => "qsite/_layouts/master",
      "title" => "iprofile.cms.sidebar.panelProfile",
      "icon" => "fas fa-user-circle",
      "authenticated" => true,
      "subHeader" => [
        "refresh" => true
      ]
        ],
    "forceChangePassword" => [
      "permission" => null,
      "activated" => true,
      "path" => "/auth/force-change-password",
      "name" => "auth.change-password",
      "page" => "quser/_pages/wrapper",
      "layout" => "qsite/_layouts/blank.vue",
      "title" => "iprofile.cms.sidebar.resetPassword",
      "icon" => "fas fa-chart-bar",
      "authType" => "forceChangePassword",
      "authenticated" => "true",
    ]
  ]
];
