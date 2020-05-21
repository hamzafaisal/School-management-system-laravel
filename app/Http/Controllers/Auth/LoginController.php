<?php
  
namespace App\Http\Controllers\Auth;
  
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
  
class LoginController extends Controller
{
  
    use AuthenticatesUsers;
    
    protected $redirectTo = '/home';

    protected function redirectTo()
    {
        if (auth()->user()->role == 'admin') {
            return '/';
        }
        return '/home';
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
  
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function login(Request $request)
    {   
        $input = $request->all();
  
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);
  
        $fieldType = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        if(auth()->attempt(array($fieldType => $input['username'], 'password' => $input['password'])))
        {
            if (auth()->user()->role == 'admin') {
                return redirect('/home');
            }
            elseif (auth()->user()->role == 'student') {
                return redirect('/students' . "/" . auth()->user()->id);
            }elseif (auth()->user()->role == 'teacher') {
                return redirect('/teachers' . "/" . auth()->user()->id);
            }
        }else{
            return redirect()->route('login')
                ->with('error','Username And Password Are Wrong.');
            // return redirect()->back()->with('error', ['your message,here']);   

        }
          
    }
}