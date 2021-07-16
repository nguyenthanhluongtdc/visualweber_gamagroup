<?php

return [
    [
        'name' => 'Recruitment positions',
        'flag' => 'recruitment-positions.index',
    ],
    [
        'name'        => 'Create',
        'flag'        => 'recruitment-positions.create',
        'parent_flag' => 'recruitment-positions.index',
    ],
    [
        'name'        => 'Edit',
        'flag'        => 'recruitment-positions.edit',
        'parent_flag' => 'recruitment-positions.index',
    ],
    [
        'name'        => 'Delete',
        'flag'        => 'recruitment-positions.destroy',
        'parent_flag' => 'recruitment-positions.index',
    ],
];
