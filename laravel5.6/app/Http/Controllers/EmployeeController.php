<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use View;
use Storage;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * The user repository instance.
     */
    protected $arrEmployees;    
    protected $xml;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $json = Storage::disk('local')->get('employees.json');
        $this->arrEmployees =  json_decode($json);       
    }

    /**
     * Display a listing of the employees.
     *
     * @return Response
     */
    public function index()
    {        
        return View::make('employees.index', ['employees' => $this->arrEmployees]);
    }

    /**
     * Show the profile for the employee.
     *
     * @param  Request request
     * @return Response
     */
    public function search(Request $request)
    {
       
       return View::make('employees.search', ['employees' => $this->arrEmployees, 'email' => $request->get('email')]);
    }

    /**
     * Show the profile for the employee.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
       return View::make('employees.show', ['employees' => $this->arrEmployees, 'id' => $id]);
    }

    /**
     * Show the profile for the employee.
     *
     * @param  int  $id
     * @return Response
     */
    public function salary($min, $max)
    {
       $arrEmployees =  $this->arrEmployees;
       $empleados = "<?xml version='1.0' encoding='UTF-8'?>";
       $empleados .= '<empleados>';
        foreach ($arrEmployees as  $value) {
            $valoresareemplazar = array("$", ",");
            $valorsalario = str_replace($valoresareemplazar, "", $value->salary);
            if ($min <= $valorsalario && $max > $valorsalario) {
                $empleados.='<empleado>
                <id>' . $value->id . '</id>
                <isOnline>' . $value->isOnline . '</isOnline>
                <salary>' . $valorsalario . '</salary>
                <age>' . $value->salary . '</age>
                <position>' . $value->position . '</position>
                <name>' . $value->name . '</name>
                <gender>' . $value->gender . '</gender>
                <email>' . $value->email . '</email>
                <phone>' . $value->phone . '</phone>
                <address>' . $value->address . '</address>';
                $empleados.='<skills>';
                foreach ($value->skills as $value2) {
                    $empleados.='<skill>' . $value2->skill . '</skill>';
                }
                $empleados.='</skills>';
                $empleados.='</empleado>';
            }
        }
        $empleados.='</empleados>';

        $xml = $empleados;

       return var_dump($xml);
    }
}