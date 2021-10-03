<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Job;

class PagesController extends Controller
{
    //index page
    public function index()
    {

        $web_developer_jobs = Job::where('job_category', 'WEB DEVELOPER')->get();
        $web_designer_jobs = Job::where('job_category', 'WEB DESIGNER')->get();

        return view ('index', compact('web_developer_jobs', 'web_designer_jobs'));
    }
}
