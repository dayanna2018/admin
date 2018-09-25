<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request as Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class RecursosController extends Controller
{

    protected $fillable = ['PersonasID'];

    public function __construct()
    {
        $this->middleware('admin');
    }
    public function index()
    {
        $where = [['PersonasID', '!=', Auth::id()], ['PersonasTipoDoc', '!=', 1]];
        $users = DB::table('personas')->paginate(10);
        return view('home', ['users' => $users]);
    }
    public function showUser(Request $user)
    {
         
        
        $users = DB::table('personas')
        ->leftjoin('cargpers','personas.PersonasID','=','cargpers.Personas_PersonasID')
        ->leftjoin('cargos','CargosID', '=', 'Cargos_CargosID')
        ->where('PersonasActivo', '=', 'ACTIVO')->paginate(100);
        
        return view('home', ['users' => $users, 'contPers' =>$users->count()]);

    }
    public function showResource(int $PersonasID){
        $users = DB::table('habilidades')
        ->leftjoin('pershabil','pershabil.Habilidadess_HabilidadesID', '=', 'habilidades.HabilidadesID')
        ->leftjoin('personas','pershabil.Personas_PersonasID', '=', 'personas.PersonasID')
        ->leftjoin('cargpers','personas.PersonasID','=','cargpers.Personas_PersonasID')
        ->leftjoin('cargos','CargosID', '=', 'Cargos_CargosID')
        ->where('PersonasID', '=', $PersonasID)->get();

        
        
        return view('home',['users' => $users, 'PersonasID' =>$PersonasID]);
    }


//    mostrarPersona
    public function showUserAjax(Request $user)
    {
        $users = DB::table('personas')
        ->leftjoin('cargpers','personas.PersonasID','=','cargpers.Personas_PersonasID')
        ->leftjoin('cargos','CargosID', '=', 'Cargos_CargosID')
        ->where('PersonasActivo', '=', 'ACTIVO')->get();
        return ['count' =>$users->count()];

    }
    public function showUserInac(Request $user)
    {
        
        
        $users = DB::table('personas')->where('PersonasActivo', '=', 'INACTIVO')->get();

        return view('home', ['users' => $users]);
    }
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();
        $this->create($request->all());
        return ['success' => 'perfect'];
    }
    public function updateUser(Request $request)
    {
        $this->validatorUpdate($request->all())->validate();
        $this->update($request->all());
        return ['success' => 'perfect'];
    }
    public function deleteUser(Int $a)
    {
        if (DB::table('personas')->where(['PersonasID' => $a])->delete()) {
            return ['success' => 'perfect'];
            return redirect('admin');
        } else {
            return ['error' => 'perfect'];
        }
    }

    protected function validator(array $data)
    {
        if ($data['PersonasTipoDoc'] == 1) {
            exit;
        }
        return Validator::make($data, [
            'name' => 'required|string|max:255|regex:/^[\pL\s\-]+$/u',
            'indenty' => 'required|string|max:255|unique:personas,PersonasDocumento',
            'PersonasTitulo' => 'required|string|unique:personas,PersonasTitulo',
            'phone' => 'required|numeric|unique:personas,PersonasTel',
            'PersonasTipoDoc' => 'required',
            'PersonasEspecialidad' => 'required|string|min:6',
        ], [
            'phone.unique' => 'El Telefono ya está en uso.',
            'PersonasTitulo.unique' => 'El documento de identidad ya está en uso.',
        ]);
    }
    public function addResource(){
        return view('home');    
    }
    protected function validatorUpdate(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255|regex:/^[\pL\s\-]+$/u',
            'indenty' => 'required|string|max:255',
            'PersonasTitulo' => 'required|string',
            'phone' => 'required|numeric',
            'PersonasTipoDoc' => 'required',
            'PersonasEspecialidad' => 'required|string|min:6'
        ]);
    }
    public function addingResource(Request $request){
        
        //VALIDAMOS SI EL SEGUNDO NOMBRE ESTA VACIO
        if($request['PersonasSegNombre']===null){
            $PersonasNombreCompleto = $request['PersonasPriApellido'].' '.$request['PersonasSegApellido'].' '.$request['PersonasPrimNombre'];
        }else{
            $PersonasNombreCompleto = $request['PersonasPriApellido'].' '.$request['PersonasSegApellido'].' '.$request['PersonasPrimNombre'].' '.$request['PersonasSegNombre'];
        }
         //CONVERTIMOS LOS DATOS A MAYUSCULAS
            $PersonasPriApellido = strtoupper($request['PersonasPriApellido']);
            $PersonasSegApellido = strtoupper($request['PersonasSegApellido']);
            $PersonasPrimNombre = strtoupper($request['PersonasPrimNombre']);
            $PersonasSegNombre = strtoupper($request['PersonasSegNombre']);
            $PersonasTipoDoc = strtoupper($request['PersonasTipoDoc']);
            $PersonasDocumento = $request['PersonasDocumento'];
            $PersonasTel = $request['PersonasTel']; 
            $PersonasFechaIngreso = $request['PersonasFechaIngreso'];
            $PersonasTitulo = strtoupper($request['PersonasTitulo']);
            $PersonasEspecialidad = strtoupper($request['PersonasEspecialidad']);
            $PersonasNombreCompleto = strtoupper($PersonasNombreCompleto);

            $id = DB::table('personas')->insertGetId([
                'PersonasNombreCompleto'=> $PersonasNombreCompleto,
                'PersonasPriApellido' => $PersonasPriApellido,
                'PersonasSegApellido' => $PersonasSegApellido,
                'PersonasPrimNombre' => $PersonasPrimNombre,
                'PersonasSegNombre' => $PersonasSegNombre,
                'PersonasTipoDoc' => $PersonasTipoDoc,
                'PersonasDocumento' => $PersonasDocumento,
                'PersonasTel' => $PersonasTel,
                'PersonasFechaIngreso' => $PersonasFechaIngreso,
                'PersonasTitulo' => $PersonasTitulo,
                'PersonasEspecialidad' => $PersonasEspecialidad,
                ]);

        return Redirect()->route('addHabil.index',[$id]); 

        


    }

    //Fucnion para agregar las habilidades de los recursos


    //agrHabilRec

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */

    protected function update(array $data)
    {
        return DB::table('personas')->where('PersonasID', $data['id'])->update([
            'PersonasNombreCompleto' => $data['name'],
            'PersonasDocumento' => $data['indenty'],
            'PersonasTipoDoc' => $data['PersonasTipoDoc'],
            'PersonasTel' => $data['phone'],
            'PersonasTitulo' => $data['PersonasTitulo'],
            'PersonasEspecialidad' => $data['PersonasEspecialidad'],
        ]);
    }
    protected function create(array $data)
    {
        return DB::table('personas')->insert([
            'PersonasNombreCompleto' => $data['name'],
            'PersonasDocumento' => $data['indenty'],
            'PersonasTipoDoc' => $data['PersonasTipoDoc'],
            'PersonasTel' => $data['phone'],
            'PersonasTitulo' => $data['PersonasTitulo'],
            'PersonasEspecialidad' => $data['PersonasEspecialidad'],
        ]);
    }
}
