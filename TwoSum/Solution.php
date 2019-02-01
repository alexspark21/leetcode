<?php

/**
 * Class Solution
 */
class Solution
{
    /**
     * @param array $nums
     * @param int   $target
     *
     * @return array
     */
    public function twoSum(array $nums, int $target)
    {
        foreach ($nums as $key => $value) {
            unset($nums[$key]);
            if (($key2 = array_search($target - $value, $nums))) {
                return [$key, $key2];
            }
        }

        return [];
    }
}

