<?php

return [
    [
        'name' => 'Recruitment posts',
        'flag' => 'recruitment-post.index',
    ],
    [
        'name'        => 'Create',
        'flag'        => 'recruitment-post.create',
        'parent_flag' => 'recruitment-post.index',
    ],
    [
        'name'        => 'Edit',
        'flag'        => 'recruitment-post.edit',
        'parent_flag' => 'recruitment-post.index',
    ],
    [
        'name'        => 'Delete',
        'flag'        => 'recruitment-post.destroy',
        'parent_flag' => 'recruitment-post.index',
    ],
];
