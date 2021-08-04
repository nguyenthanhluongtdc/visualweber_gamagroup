<?php

use Platform\CandidatePosition\Models\CandidatePosition;
use Platform\CandidatePosition\Repositories\Interfaces\CandidatePositionInterface;

if (!function_exists('get_candidate_position')) {
    /**
     * get_candidate_position function
     *
     * @param integer $limit
     * @return void
     */
    function get_candidate_position($take = null)
    {
        return app(CandidatePositionInterface::class)
            ->advancedGet([
                'order_by'  => [
                    'order' => 'desc',
                    'id' => 'desc',
                ],
                'condition' => [
                    'status' => 'published'
                ],
                'take'      => $take,
                'select'    => ['app_candidate_positions.id', 'app_candidate_positions.name'],
            ]);
    }
}
