<?php
/**
 * Created by PhpStorm.
 * User: De Maeyer
 * Date: 20-Apr-17
 * Time: 14:45
 */

namespace App\Http\Controllers;

use App\Date;
use App\Year;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DateController extends Controller
{
    public static function getDateEvent()
    {
        $events = Date::where([
            ['type', 1],
            ['date', '>=', date("Y-m-d h:i:sa")],
        ])->orderBy('date', 'asc')->get();

        return $events;
    }

    public static function getAgendaEvent()
    {
        $agendas = Date::where([
            ['type', 2],
            ['date', '>=', date("Y-m-d h:i:sa")],
        ])->orderBy('date', 'asc')->get();

        return $agendas;
    }

    public static function getYearById($year)
    {
        $year = Year::where('year', $year)->get();
        return $year[0]->text;
    }
    public static function getYear()
    {
        $years = Year::all();

        return $years;
    }

    public function create(Request $request)
    {
        Date::insertGetId(
            [
                'type' => $request->type,
                'title' => $request->title,
                'undertitle' => $request->undertitle,
                'date' => $request->date,
            ]);

        return view('Admin/agendaEventAanmaken')->with('message', 'event of agenda goed aangemaakt');
    }

    public function getAll(){

        $dates = Date::paginate(10);
        return view('Admin/agendaEventOverzicht')->with('dates', $dates);
    }
    public function deletes($id) {
        $dates = Date::where('id',$id);
        $dates->delete();
        return redirect('adminOverzichtAgendaEvent');
    }
    public function edit(Request $request) {
        $dates = Date::find($request->id);
        return view('Admin/AgendaEventEdit')->with('dates', $dates);
    }

    public function update(Request $request) {
        Date::where('id', $request->input("id"))->update(array(
            'type' => $request->type,
            'title' => $request->title,
            'undertitle' => $request->undertitle,
            'date' => $request->date,
        ));
        return redirect('adminOverzichtAgendaEvent');
    }
}