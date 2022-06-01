<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    function home()
    {
       
        return view('home');
    }

    function contact()
    {
       
        return view('contact');
    }

    function about()
    {
       
        return view('about');
    }

    function emp_list()
    {
        $employees = array();
        $names = array("Liam","Pain","Micheal","John","Laid","Free","Patrick","Wade","Nathan","Astarick");
        $depts = array("Marketing","Finance","Operations","IT");
        for($i=0;$i<10;$i++){
            $employee = array
            (
                "id"=>"EMP-".($i+1),
                "name"=>$names[$i],
                "dept"=>$depts[rand(0,3)]
            );
            $employees[] = (object)$employee;
        }

        return view('teams')
               ->with('employees',$employees);
    }

    function services_list()
    {
        $services = array();
        $servs = array("CSSD","Diet Management","Pharmacy Services","Laundry","Laboratory","Radiology","Nursing Services");
        $dmy = array("day(s)","month(s)");
        for($i=0;$i<7;$i++){
            $service = array
            (
                "no"=>$i+1,
                "serv"=>$servs[$i],
                "cost"=>rand(500,1000)."$",
                "duration"=>rand(10,36)." ".$dmy[rand(0,1)]
            );
            $services[] = (object)$service;
        }

        return view('service')
               ->with('services',$services);
    }
}