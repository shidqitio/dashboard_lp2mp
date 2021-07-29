<?php

namespace App\Http\Controllers;

use App\Event;
use MaddHatter\LaravelFullcalendar\Facades\Calendar;
use DB;

use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = [];
        $data = DB::SELECT('select * from events');
        if (count($data)) {
            foreach ($data as $key => $value) {
                $events[] = Calendar::event(
                    $value->title,
                    true,
                    new \DateTime($value->start_date),
                    new \DateTime($value->end_date . '+1 day'),
                    null,
                    // Add color
                    [
                        'color' => $value->color,

                    ]
                );
            }
        }
        $calendar = Calendar::addEvents($events);
        return view('users.admin.eventpage', compact('events', 'calendar'));
    }

    public function indexplb()
    {
        $events = [];
        $data = DB::SELECT('select * from events');
        if (count($data)) {
            foreach ($data as $key => $value) {
                $events[] = Calendar::event(
                    $value->title,
                    true,
                    new \DateTime($value->start_date),
                    new \DateTime($value->end_date . '+1 day'),
                    null,
                    // Add color
                    [
                        'color' => $value->color,

                    ]
                );
            }
        }
        $calendar = Calendar::addEvents($events);
        return view('users.puslaba.eventpageplb', compact('events', 'calendar'));
    }

    public function indexpjn()
    {
        $events = [];
        $data = DB::SELECT('select * from events');
        if (count($data)) {
            foreach ($data as $key => $value) {
                $events[] = Calendar::event(
                    $value->title,
                    true,
                    new \DateTime($value->start_date),
                    new \DateTime($value->end_date . '+1 day'),
                    null,
                    // Add color
                    [
                        'color' => $value->color,

                    ]
                );
            }
        }
        $calendar = Calendar::addEvents($events);
        return view('users.pusjian.eventpagepjn', compact('events', 'calendar'));
    }

    public function indexpbb()
    {
        $events = [];
        $data = DB::SELECT('select * from events');
        if (count($data)) {
            foreach ($data as $key => $value) {
                $events[] = Calendar::event(
                    $value->title,
                    true,
                    new \DateTime($value->start_date),
                    new \DateTime($value->end_date . '+1 day'),
                    null,
                    // Add color
                    [
                        'color' => $value->color,

                    ]
                );
            }
        }
        $calendar = Calendar::addEvents($events);
        return view('users.pbb.eventpagepbb', compact('events', 'calendar'));
    }

    public function indexp2m2()
    {
        $events = [];
        $data = DB::SELECT('select * from events');
        if (count($data)) {
            foreach ($data as $key => $value) {
                $events[] = Calendar::event(
                    $value->title,
                    true,
                    new \DateTime($value->start_date),
                    new \DateTime($value->end_date . '+1 day'),
                    null,
                    // Add color
                    [
                        'color' => $value->color,

                    ]
                );
            }
        }
        $calendar = Calendar::addEvents($events);
        return view('users.p2m2.eventpagep2m2', compact('events', 'calendar'));
    }
}
