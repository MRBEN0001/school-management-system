<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\announcement;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{

    public function createAnnouncementIndex()
    {
        return view("admin.admin-create-announcement");
    }

    public function createAnnouncement(Request $request)
    {
        $announcement = new announcement();
        $announcement->title = $request->title;
        $announcement->description = $request->description;
        $s = $announcement->save();
        if ($s) {
            return "Announcement was created successfully";
        }
    }
}
