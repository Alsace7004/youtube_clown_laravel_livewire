<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Channel;
class ChannelController extends Controller
{
    //

    public function edit(Channel $channel)
    {
        return view('channel.edit',compact('channel'));
    }
}
