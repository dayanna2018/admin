<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request as Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
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

        
        $recursos = DB::table('personas')->where->get();
     /*   $where = [['PersonasID', '=', $user->input('userId')], ['PersonasTipoDoc', '!=', 1]];
        'PersonasNombreCompleto AS 0',
        'PersonasTel AS 1',
        'PersonasTitulo AS 2', 
        'PersonasEspecialidad AS 3',
        'PersonasDocumento AS 4',
        'PersonasTipoDoc AS 5'
        )->where($where)->get();
        */
        //return $recursos;
        return view('home', ['recursos' => $recursos]);
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
