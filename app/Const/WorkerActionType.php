<?php

namespace App\Const;

class WorkerActionType
{
    const START_WORK = 0;
    const TAKE_PAUSE = 1;
    const END_PAUSE = 2;
    const TAKE_TASK= 3;
    const ARRIVED_TO_TASK = 4;
    const START_TASK = 5;
    const  END_TASK = 6;
}
