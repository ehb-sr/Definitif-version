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

class StuverPage
{
    function getContent() {

        $stuvers = StuverController::getStuvers();

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
                if($depDT->leftAbove == null)
                {
                    $depDT->leftAbove = new Stuver($stuver);
                } else {
                    if($depDT->rightAbove == null)
                    {
                        $depDT->rightAbove = new Stuver($stuver);
                    } else {
                        if($depDT->underLeft == null)
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
                if($depMMM->leftAbove == null)
                {
                    $depMMM->leftAbove = new Stuver($stuver);
                } else {
                    if($depMMM->rightAbove == null)
                    {
                        $depMMM->rightAbove = new Stuver($stuver);
                    } else {
                        if($depMMM->underLeft == null)
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
                if($depGL->leftAbove == null)
                {
                    $depGL->leftAbove = new Stuver($stuver);
                } else {
                    if($depGL->rightAbove == null)
                    {
                        $depGL->rightAbove = new Stuver($stuver);
                    } else {
                        if($depGL->underLeft == null)
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
                if($depEDU->leftAbove == null)
                {
                    $depEDU->leftAbove = new Stuver($stuver);
                } else {
                    if($depEDU->rightAbove == null)
                    {
                        $depEDU->rightAbove = new Stuver($stuver);
                    } else {
                        if($depEDU->underLeft == null)
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
                if($depKCB->leftAbove == null)
                {
                    $depKCB->leftAbove = new Stuver($stuver);
                } else {
                    if($depKCB->rightAbove == null)
                    {
                        $depKCB->rightAbove = new Stuver($stuver);
                    } else {
                        if($depKCB->underLeft == null)
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
                if($depRITCS->leftAbove == null)
                {
                    $depRITCS->leftAbove = new Stuver($stuver);
                } else {
                    if($depRITCS->rightAbove == null)
                    {
                        $depRITCS->rightAbove = new Stuver($stuver);
                    } else {
                        if($depRITCS->underLeft == null)
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

        $startdate = null;
        if(date('m') < 9)
        {
            $startdate = date('y')-1..date('y');
        }
        else
            $startdate =  date('y').date('y')+1;

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
}