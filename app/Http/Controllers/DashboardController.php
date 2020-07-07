<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Schedule;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function showCreate()
    {
        return view('create');
    }

    public function modify()
    {
        $schedules = Schedule::all();

        return view('modify', compact('schedules'));
    }

    public function edit($id)
    {
        $schedule = Schedule::find($id);

        return view('edit', compact('schedule'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
        'title'=>'required',
        'description'=> 'required',
        'name_of_image' => 'required',
        'filename' => 'required'
      ]);

        $schedule = Schedule::find($id);

        if ($request->hasFile('filename'))
        {
            //storing and getting an original filename
            $filename = $request->filename->getClientOriginalName();
            $request->filename->storeAs('public/upload',$filename);
            //filesize
            $size_of_file = $request->filename->getClientSize();
            //removing previous schedule
            $removeSchedule = Storage::delete("public/upload/$schedule->filename");

            $schedule->filename = $filename;
            $schedule->size_of_file = $size_of_file;
        }
        
        if ($request->hasFile('name_of_image'))
        {
            //storing and getting an original filename
            $name_of_image = $request->name_of_image->getClientOriginalName();
            $request->name_of_image->storeAs('public/upload',$name_of_image);
            //filesize
            $size_of_image = $request->name_of_image->getClientSize();
            //removing previous file
            $removeImage = Storage::delete("public/upload/$schedule->name_of_image");

            $schedule->name_of_image = $name_of_image;
            $schedule->size_of_image = $size_of_image;
        }
          $schedule->title = $request->get('title');
          $schedule->description = $request->get('description');

          $schedule->save();

          return redirect('dashboard/modify');
    }

    public function destroy($id)
    {
        $schedule = Schedule::find($id);
        $image=$schedule->name_of_image;
        $file=$schedule->filename;
        $removeFiles = Storage::delete(["public/upload/$image","public/upload/$file"]);
        $schedule->delete();

        return back();
        
    }
}
