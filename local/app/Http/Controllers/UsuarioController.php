<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Auth, Input,Hash,Crypt;
use Session;

use Illuminate\Http\Request;

class UsuarioController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

		return view('usuarios.usuarios');
	}

	public function index2()
	{
		$persona = new \stdClass(); 
		$persona->nombre = false; 
		$persona->apellido=false;
		$persona->usuario = false; 
		$persona->contrasena=false;
		$persona->contrasena2= false; 
		$persona->rol=false;
		$persona->id=false;
		$usuarios = DB::table('usuario')->orderBy('nombre','ASC')->get();
		return view('usuarios.actualizarusuarios')->with('usuarios',$usuarios)->with('persona',$persona);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


	public function consultar(Request $request)
	{		
			$usuario=Input::get('usuarioSeleccionado');
			$persona=DB::table('usuario')->where('id','=',$usuario)->first();	
			$usuarios = DB::table('usuario')->orderBy('nombre','ASC')->get();
			return view('usuarios.actualizarusuarios')->with('usuarios',$usuarios)->with('persona',$persona);

	}


	public function guardar(Request $Request)
	{
		$nombre=Input::get('nombre');
		$apellido=Input::get('apellido');
		$usuario=Input::get('usuario');
		$contrasena=Input::get('contrasena');
		$contrasena2=Input::get('contrasena2');
		$password=Hash::make($contrasena);
		$tipo=Input::get('tipo');

		if($contrasena!=$contrasena2){
			$mensaje="La contraseña no coincide";
			return back()->with('mensaje',$mensaje);
		}

		$usuarioExiste= DB::table('usuario')->select('usuario')->where('usuario','=',$usuario)->first();
		if($usuarioExiste!=null){
			$mensaje="El usuario asignado al empleado ya existe";
			return back()->with('mensaje',$mensaje);
		}

		$id= DB::table('usuario')->select('id')->orderBy('id','DESC')->first();

		DB::insert('insert into usuario (id,usuario,password ,contrasena ,rol, nombre , apellido) values (?, ?,?,?, ?,?,?)', [$id->id+1,$usuario, $password,$contrasena,$tipo,$nombre,$apellido]); 

		$mensaje="USUARIO REGISTRADO EXITOSAMENTE";

		return back()->with('mensaje',$mensaje);
	}


	public function actualizar(Request $Request)
	{
		
		$nombre=Input::get('nombre');
		$apellido=Input::get('apellido');
		$usuario=Input::get('usuario');
		$contrasena=Input::get('contrasena');
		$contrasena2=Input::get('contrasena2');
		$password=Hash::make($contrasena);
		$tipo=Input::get('tipo');
		$id=Input::get('id');

		if(isset($_REQUEST['Actualizar'])){

			if($contrasena!=$contrasena2){
				$mensaje="La contraseña no coincide";
				return redirect('actualizar-usuarios')->with('mensaje',$mensaje);
			}


			DB::table('usuario')->where('id',$id)->update(array('nombre'=>$nombre,'apellido'=>$apellido,'usuario'=>$usuario,'contrasena'=>$contrasena,'password'=>$password,'rol'=>$tipo));
			$mensaje="ACTUALIZACIÓN CORRECTA";

		}else{
			
			DB::table('usuario')->where('id', '=', $id)->delete();
			
			$mensaje="USUARIO ELIMINADO EXITOSAMENTE";

		}

		return redirect('actualizar-usuarios')->with('mensaje',$mensaje);
	}


	public function backup()
	{
	    require_once __DIR__.'\descargar.php';
	}



}
