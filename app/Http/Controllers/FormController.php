<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lovers;

class FormController extends Controller
{
    //
    function getData(Request $r){
        $lovers_list = new Lovers;
        $name1 = $r->name1;
        $name2 = $r->name2;

        $arr = array(strtolower($name1), "loves" , strtolower($name2));
        $full = join("",$arr);

        unset($arr);

        for($i = 0; $i < strlen($full); $i++)
        {
            if($full[$i]=='-' || $full[$i]==')' || $full[$i]=='(' || $full[$i]==' ')
            {
                continue;
            }
            if($full[$i]!='0')
                $count[$i] = 1;
            for($j = $i+1; $j < strlen($full); $j++)
            {
                if($full[$i]==$full[$j] && $full[$j]!='0')
                {
                    $count[$i] = $count[$i] + 1;
                    $full[$j] = '0';
                }
            }
        }
        unset($full);
        $cnt = array_values($count);
        unset($count);

        $s = sizeof($cnt);
          
          while($s>2)
          {
            $temp = array();
            $j=$s-1;
            for ($i=0; $i < ($s/2); $i++)
            { 
              if($j <= $i)
              {
                $temp[$i] = $cnt[$i];
              }
              else
              {
                $temp[$i] = $cnt[$i] + $cnt[$j];
              }
              $j--;
            }
            $cnt = array_values($temp);
            $s = sizeof($cnt);
            unset($temp);
            
          }
          $a = strval($cnt[0]);
          $b = strval($cnt[1]);
          $arr = array($a, $b);
          $full = join("",$arr);
          $temp = "";
          //echo $full;
          if(strlen($full)==4)
          {
            $temp[0] = strval(intval($full[0])+intval($full[3]));
            $temp[1] = strval(intval($full[1])+intval($full[2]));
          }
          else if(strlen($full)==3 && $full != '100')
          {
            $temp[0] = strval(intval($full[0])+intval($full[2]));
            $temp[1] = $full[1];
          } 
          else
          {
            $temp = $full;
          }

        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }

          $str = $name1 . " Loves " . $name2 . ": ";
          $result = $temp;

        $lovers_list->name1 = $name1;
        $lovers_list->name2 = $name2;
        $lovers_list->percentage = $result;
        $lovers_list->ip = $ip;

        $lovers_list->save();
        
        return redirect('/')->with('message',"".$str." ".$result."%");
    }
}
