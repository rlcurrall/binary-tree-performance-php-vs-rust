<?php

namespace Acme;

use Acme\Node;
use Carbon\Carbon;

class App
{
    public function run()
    {
        $tree1 = Node::from_object(json_decode(file_get_contents(dirname(__DIR__, 2) . "/tree_1.json")));
        $tree2 = Node::from_object(json_decode(file_get_contents(dirname(__DIR__, 2) . "/tree_2.json")));
        $count = $tree1->num_nodes();

        $start_c = Carbon::now();
        $is_equal = binary_trees_equal($tree1, $tree2);
        $end_c = Carbon::now();

        $is_equal = $is_equal ? 'true' : 'false';
        $time_c = $end_c->diffInMicroseconds($start_c);

        echo <<<RES

                Equal:      $is_equal
                Time (μs):  $time_c
                Node count: $count

        RES;
    }
}
