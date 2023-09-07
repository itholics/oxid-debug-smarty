<?php

declare(strict_types=1);

function smarty_function_xdebug_break($params, $smarty) {
    xdebug_break();
}