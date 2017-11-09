<?php

namespace KeriganSolutions\CPT;

/**
 * Layout Walker Class
 */
class CheckToRadio extends \Walker_Category_Checklist
{
    public function walk($elements, $max_depth, $args = [])
    {
        $output = parent::walk($elements, $max_depth, $args);
        $output = str_replace(
            [ 'type="checkbox"', "type='checkbox'" ],
            [ 'type="radio"', "type='radio'" ],
            $output
        );
        return $output;
    }
}
