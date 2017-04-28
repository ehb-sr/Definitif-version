<?php
/**
 * Created by PhpStorm.
 * User: De Maeyer
 * Date: 20-Apr-17
 * Time: 18:52
 */

namespace App\Http\Controllers\pages;

use App\Http\Controllers\DateController;
use App\Http\Controllers\Stuver;
use App\Http\Controllers\StuverController;
use App\Http\Controllers\Departement;
use App\Http\Controllers\StuversContent;
use App\Http\Controllers\Year;
use App\Http\Controllers\Years;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Request;

class StuverPage
{
    function getContent() {

        $startdate = null;
        if(date('m') < 9)
        {
            $startdate = date('y')-1..date('y');
        }
        else
            $startdate =  date('y').date('y')+1;

        $stuvers = StuverController::getStuvers($startdate);

        $departement = [];
        $depDT = new Departement("DT");
        $depMMM = new Departement("MMM");
        $depGL = new Departement("GL");
        $depEDU = new Departement("EDU");
        $depKCB = new Departement("KCB");
        $depRITCS = new Departement("RITCS");

        //dd($stuvers);

        foreach($stuvers as $stuver)
        {
            if($stuver->Campus == 'DT')
            {
                if($depDT->leftAbove->bool == false)
                {
                    $depDT->leftAbove = new Stuver($stuver);
                } else {
                    if($depDT->rightAbove->bool == false)
                    {
                        $depDT->rightAbove = new Stuver($stuver);
                    } else {
                        if($depDT->underLeft->bool == false)
                        {
                            $depDT->underLeft = new Stuver($stuver);
                        } else {
                            $depDT->underRight = new Stuver($stuver);
                        }
                    }
                }
            }

            if($stuver->Campus == 'MMM')
            {
                if($depMMM->leftAbove->bool == false)
                {
                    $depMMM->leftAbove = new Stuver($stuver);
                } else {
                    if($depMMM->rightAbove->bool == false)
                    {
                        $depMMM->rightAbove = new Stuver($stuver);
                    } else {
                        if($depMMM->underLeft->bool == false)
                        {
                            $depMMM->underLeft = new Stuver($stuver);
                        } else {
                            $depMMM->underRight = new Stuver($stuver);
                        }
                    }
                }
            }

            if($stuver->Campus == 'GL')
            {
                if($depGL->leftAbove->bool == false)
                {
                    $depGL->leftAbove = new Stuver($stuver);
                } else {
                    if($depGL->rightAbove->bool == false)
                    {
                        $depGL->rightAbove = new Stuver($stuver);
                    } else {
                        if($depGL->underLeft->bool == false)
                        {
                            $depGL->underLeft = new Stuver($stuver);
                        } else {
                            $depGL->underRight = new Stuver($stuver);
                        }
                    }
                }
            }

            if($stuver->Campus == 'EDU')
            {
                if($depEDU->leftAbove->bool == false)
                {
                    $depEDU->leftAbove = new Stuver($stuver);
                } else {
                    if($depEDU->rightAbove->bool == false)
                    {
                        $depEDU->rightAbove = new Stuver($stuver);
                    } else {
                        if($depEDU->underLeft->bool == false)
                        {
                            $depEDU->underLeft = new Stuver($stuver);
                        } else {
                            $depEDU->underRight = new Stuver($stuver);
                        }
                    }
                }
            }

            if($stuver->Campus == 'KCB')
            {
                if($depKCB->leftAbove->bool == false)
                {
                    $depKCB->leftAbove = new Stuver($stuver);
                } else {
                    if($depKCB->rightAbove->bool == false)
                    {
                        $depKCB->rightAbove = new Stuver($stuver);
                    } else {
                        if($depKCB->underLeft->bool == false)
                        {
                            $depKCB->underLeft = new Stuver($stuver);
                        } else {
                            $depKCB->underRight = new Stuver($stuver);
                        }
                    }
                }
            }

            if($stuver->Campus == 'RITCS')
            {
                if($depRITCS->leftAbove->bool == false)
                {
                    $depRITCS->leftAbove = new Stuver($stuver);
                } else {
                    if($depRITCS->rightAbove->bool == false)
                    {
                        $depRITCS->rightAbove = new Stuver($stuver);
                    } else {
                        if($depRITCS->underLeft->bool == false)
                        {
                            $depRITCS->underLeft = new Stuver($stuver);
                        } else {
                            $depRITCS->underRight = new Stuver($stuver);
                        }
                    }
                }
            }
        }

        array_push($departement, $depDT, $depEDU, $depGL, $depKCB, $depMMM, $depRITCS);

        $now = DateController::getYearById($startdate);
        $years = DateController::getYear();
        $datas = [];
        foreach($years as $year)
        {
            $data = new Years($year);
            array_push($datas, $data);
        }

        $time = new Year($now, $datas);

        $data = new StuversContent($departement, $time);

        //dd($data);
        return view('stuvers/content')->with('departementen', $data);
    }

    function getStuvers()
    {
        $year = Input::get('jaar');
        $stuvers = StuverController::getStuvers($year);

        $departement = [];
        $depDT = new Departement("DT");
        $depMMM = new Departement("MMM");
        $depGL = new Departement("GL");
        $depEDU = new Departement("EDU");
        $depKCB = new Departement("KCB");
        $depRITCS = new Departement("RITCS");


        foreach($stuvers as $stuver)
        {
            if($stuver->Campus == 'DT')
            {
                if($depDT->leftAbove->bool == false)
                {
                    $depDT->leftAbove = new Stuver($stuver);
                } else {
                    if($depDT->rightAbove->bool == false)
                    {
                        $depDT->rightAbove = new Stuver($stuver);
                    } else {
                        if($depDT->underLeft->bool == false)
                        {
                            $depDT->underLeft = new Stuver($stuver);
                        } else {
                            $depDT->underRight = new Stuver($stuver);
                        }
                    }
                }
            }

            if($stuver->Campus == 'MMM')
            {
                if($depMMM->leftAbove->bool == false)
                {
                    $depMMM->leftAbove = new Stuver($stuver);
                } else {
                    if($depMMM->rightAbove->bool == false)
                    {
                        $depMMM->rightAbove = new Stuver($stuver);
                    } else {
                        if($depMMM->underLeft->bool == false)
                        {
                            $depMMM->underLeft = new Stuver($stuver);
                        } else {
                            $depMMM->underRight = new Stuver($stuver);
                        }
                    }
                }
            }

            if($stuver->Campus == 'GL')
            {
                if($depGL->leftAbove->bool == false)
                {
                    $depGL->leftAbove = new Stuver($stuver);
                } else {
                    if($depGL->rightAbove->bool == false)
                    {
                        $depGL->rightAbove = new Stuver($stuver);
                    } else {
                        if($depGL->underLeft->bool == false)
                        {
                            $depGL->underLeft = new Stuver($stuver);
                        } else {
                            $depGL->underRight = new Stuver($stuver);
                        }
                    }
                }
            }

            if($stuver->Campus == 'EDU')
            {
                if($depEDU->leftAbove->bool == false)
                {
                    $depEDU->leftAbove = new Stuver($stuver);
                } else {
                    if($depEDU->rightAbove->bool == false)
                    {
                        $depEDU->rightAbove = new Stuver($stuver);
                    } else {
                        if($depEDU->underLeft->bool == false)
                        {
                            $depEDU->underLeft = new Stuver($stuver);
                        } else {
                            $depEDU->underRight = new Stuver($stuver);
                        }
                    }
                }
            }

            if($stuver->Campus == 'KCB')
            {
                if($depKCB->leftAbove->bool == false)
                {
                    $depKCB->leftAbove = new Stuver($stuver);
                } else {
                    if($depKCB->rightAbove->bool == false)
                    {
                        $depKCB->rightAbove = new Stuver($stuver);
                    } else {
                        if($depKCB->underLeft->bool == false)
                        {
                            $depKCB->underLeft = new Stuver($stuver);
                        } else {
                            $depKCB->underRight = new Stuver($stuver);
                        }
                    }
                }
            }

            if($stuver->Campus == 'RITCS')
            {
                if($depRITCS->leftAbove->bool == false)
                {
                    $depRITCS->leftAbove = new Stuver($stuver);
                } else {
                    if($depRITCS->rightAbove->bool == false)
                    {
                        $depRITCS->rightAbove = new Stuver($stuver);
                    } else {
                        if($depRITCS->underLeft->bool == false)
                        {
                            $depRITCS->underLeft = new Stuver($stuver);
                        } else {
                            $depRITCS->underRight = new Stuver($stuver);
                        }
                    }
                }
            }
        }

        array_push($departement, $depDT, $depEDU, $depGL, $depKCB, $depMMM, $depRITCS);

        $now = DateController::getYearById($year);
        $years = DateController::getYear();
        $datas = [];
        foreach($years as $year)
        {
            $data = new Years($year);
            array_push($datas, $data);
        }

        $time = new Year($now, $datas);

        $data = new StuversContent($departement, $time);

        //dd($data);
        return view('stuvers/content')->with('departementen', $data);
    }
}