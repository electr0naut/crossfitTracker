<?php namespace App\Http\Controllers;

class CalendarController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Calendar Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "calendar" for users that
	| are authenticated. 
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$events = [];
		$calendar = \Calendar::addEvents($events);
		$cfg = \Config::get('app.gym1');

		\Debugbar::info($cfg['hiddenDays']);

		\JavaScript::put([
			'minTimeCFG' => $cfg['minTime'],
			'maxTimeCFG' => $cfg['maxTime'],
			'hiddenDaysCFG' => $cfg['hiddenDays'],
			]);

		return view('calendar')->with(compact('calendar'));
	}

}