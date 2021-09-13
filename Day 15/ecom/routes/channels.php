<?php

use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('cart', function ($user, $id) {
    return true;
});
