<?php

namespace App\Http\Controllers;
use App\Models\Breakdown;
use App\Models\Random;

use Illuminate\Http\Request;

class ApolloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $random = "";
        //  Random::update('flag', false);                      // resetting flags to false upon loading data

        $firstloop = rand(5,10);                            //First Loop Random number 5-10

        for($num1 = 0; $num1<=$firstloop; $num1++){         //First Loop getting random names
            
            $randomnamepicker= rand(1,10);                  //random picking of name-- PS 10 name available in database --note can add more by editting Factory/RandomFactory
            
            $name = Random::where('id',$randomnamepicker)->first();

            if($name->flag == true){
                $num1--;                            //skipping loop if name is already displayed
            }
            else{
                $random = $random." ".$name->values; //if no adding to string output
                $secondloop = rand(5,10);                   //Generating Second loop for Breakdown
                     
                    for($num2 = 0; $num2<=$secondloop; $num2++){
                            $breakdown = Breakdown::where('randoms_id', $name->id)->get();      //getting breakdown by Random_ID
                            $totalBreakdown = count($breakdown);                                //simple breakdown array counting
                            $breakrands = rand(1,$totalBreakdown);

                            // $random = $random." ".substr($breakdown->values, 0, 4);
                        }
            }
            
        }

        return [
            'outputtext' => $random,
        ];
    }


}
