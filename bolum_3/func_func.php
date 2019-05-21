<?php

function test()
{
    print func_num_args() . "<br>";
    print_r(func_get_args());
    print "<br>" . func_get_arg(2);
}

test("yunus", "üstün", 23, "antalya");