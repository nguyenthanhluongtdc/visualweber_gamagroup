<?php

return [
    [
        'name' => 'Candidate positions',
        'flag' => 'candidate-position.index',
    ],
    [
        'name'        => 'Create',
        'flag'        => 'candidate-position.create',
        'parent_flag' => 'candidate-position.index',
    ],
    [
        'name'        => 'Edit',
        'flag'        => 'candidate-position.edit',
        'parent_flag' => 'candidate-position.index',
    ],
    [
        'name'        => 'Delete',
        'flag'        => 'candidate-position.destroy',
        'parent_flag' => 'candidate-position.index',
    ],
];
