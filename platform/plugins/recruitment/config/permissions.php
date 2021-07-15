<?php

return [
    [
        'name' => 'Recruitments',
        'flag' => 'recruitment.index',
    ],
    [
        'name'        => 'Create',
        'flag'        => 'recruitment.create',
        'parent_flag' => 'recruitment.index',
    ],
    [
        'name'        => 'Edit',
        'flag'        => 'recruitment.edit',
        'parent_flag' => 'recruitment.index',
    ],
    [
        'name'        => 'Delete',
        'flag'        => 'recruitment.destroy',
        'parent_flag' => 'recruitment.index',
    ],
];
