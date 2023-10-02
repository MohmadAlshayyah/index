<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrudController extends Controller
{
    

public function blakn(){

return view('pages.blakn');

}
public function register(){

    return view('pages.register');
    
    }
public function show(){

return view('pages.404');
        
        }

public function buttons(){

return view('pages.buttons');
            
            }

public function cards(){

 return view('pages.cards');
                
                }



public function charts(){

    return view('pages.charts');
    
    }

    public function password(){

        return view('pages.forgot-password');
        
        }

        public function index(){

            return view('pages.index');
            
            }

           


    public function tables(){

  return view('pages.tables');
                    
                    }

 public function animation(){

        return view('pages.utilities-animation');
                        
   }


   public function border(){

    return view('pages.utilities-border');
                    
}



 public function color(){

        return view('pages.utilities-color');
                        
   }


   public function other(){

    return view('pages.utilities-other');
                    
}



   
}

