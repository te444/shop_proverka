<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use App;
use Auth;
class Admin{

	/**
	 * The Guard implementation.
	 *
	 * @var Guard
	 */
	protected $auth;

	
	public function __construct(Guard $auth)
	{
		$this->auth = $auth;
	}

	
	public function handle($request, Closure $next)
	{
		if ($this->auth->guest())
		{
			if ($request->ajax())
			{
				return response('Unauthorized.', 401);
			}
			else
			{
				return redirect()->guest('auth/login');
			}
		}
		else{
		if(Auth::user()->isAdmin !=1 ) {
		return redirect()->guest('auth/login');
		}
		
		}

		return $next($request);
	}

}
