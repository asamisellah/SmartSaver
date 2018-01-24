<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Goal;
use Session;


class GoalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // create a variable and store all the goals in it from the database

        $goals = Goal::all();

        // return a view and pass in all the above variable

        return view('goals.index')->withGoals($goals);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('goals.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate the data
        $validateData = $request->validate([
            'goal_title' => 'required|max:255',
            'target_amount' => 'required',
            'target_date' => 'required',
        ]);

        //store in the database
        $goal = new Goal;

        $goal->goal_title = $request->goal_title;
        $goal->description = $request->description;
        $goal->target_amount = $request->target_amount;
        $goal->target_date = $request->target_date;

        $goal->save();

        Session::flash('success', 'Goal successfully created!');

        //redirect to another page

        return redirect()->route('goals.show', $goal->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $goal = Goal::find($id);

        return view('goals.show')->with('goal', $goal);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // find the goal in the database and save it as a view

        $goal = Goal::find($id);

        // return the view and pass in the var we previously created

        return view('goals.edit')->withGoal($goal);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // validate the data

        $this->validate($request, [
            'goal_title' => 'required|max:255',
            'target_amount' => 'required',
            'target_date' => 'required',
        ]);

        // save the date to database

        $goal = Goal::find($id);

        $goal->goal_title = $request->input('goal_title');
        $goal->description = $request->input('description');
        $goal->target_amount = $request->input('target_amount');
        $goal->target_date = $request->input('target_date');

        //save the update

        $goal->save();


        // set flash data with success message

        Session::flash('success', 'Goal successfully saved');

        // redirect with flash data to posts.show

        return redirect()->route('goals.show', $goal->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // have access to the item first

        $goal = Goal::find($id);

        // delete the goal
        $goal->delete();

        // session flas to show success message

        Session::flash('success', 'Goal successfully deleted');

        // redirect
        return redirect()->route('goals.index');
    }
}
