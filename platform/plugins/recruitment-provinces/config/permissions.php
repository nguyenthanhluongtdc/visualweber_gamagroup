<?php

return [
    [
        'name' => 'Recruitment provinces',
        'flag' => 'recruitment-provinces.index',
    ],
    [
        'name'        => 'Create',
        'flag'        => 'recruitment-provinces.create',
        'parent_flag' => 'recruitment-provinces.index',
    ],
    [
        'name'        => 'Edit',
        'flag'        => 'recruitment-provinces.edit',
        'parent_flag' => 'recruitment-provinces.index',
    ],
    [
        'name'        => 'Delete',
        'flag'        => 'recruitment-provinces.destroy',
        'parent_flag' => 'recruitment-provinces.index',
    ],
];
