<?php

return [
    [
        'name' => 'Recruitment companies',
        'flag' => 'recruitment-companie.index',
    ],
    [
        'name'        => 'Create',
        'flag'        => 'recruitment-companie.create',
        'parent_flag' => 'recruitment-companie.index',
    ],
    [
        'name'        => 'Edit',
        'flag'        => 'recruitment-companie.edit',
        'parent_flag' => 'recruitment-companie.index',
    ],
    [
        'name'        => 'Delete',
        'flag'        => 'recruitment-companie.destroy',
        'parent_flag' => 'recruitment-companie.index',
    ],
];
