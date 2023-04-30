<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

use App\Models\Article;

use WithPagination;

class AppController extends Controller
{

    public function find()
    {
        return view(view:'Finding');
    }

    /*
    функция для получения названия месяца по-русски
    $num_month - номер месяца,
    не обязательный параметр, если параметр не задан, 
    то функция вернет название текущего месяца
    */
    public function getMonthRus($num_month = false){
        // если не задан номер месяца
        if(!$num_month){
            // номер текущего месяца
            $num_month = date('n');
        }
        // массив с названиями месяцев
        $monthes = array(   
            1 => 'Январь', 2 => 'Февраль', 3 => 'Март', 
            4 => 'Апрель', 5 => 'Май', 6 => 'Июнь', 
            7 => 'Июль', 8 => 'Август',9 => 'Сентябрь', 
            10 => 'Октябрь', 11 => 'Ноябрь', 
    12 => 'Декабрь'
        );
        // получаем название месяца из массива
        $name_month = $monthes[$num_month];
        // вернем название месяца
        return $name_month;
    }

    public function welcome()
    {
        return view(view:'welcome');
    }

    public function prompred()
    {
        $articles = Article::query()->paginate(6,['a_date', 'a_text', 'a_title']);

        //$dates = Article::query()->where()
        //$date = DB::select("select CURRENT_DATE() as DATE");

        //$currentDate = date("d.m.Y");

        $year = date("Y");

        $day = date("w", mktime(0,0,0,date("m"),date("d"),date("Y")));

        $month = date("n");

        $monthes = array(   
            1 => 'Январь', 2 => 'Февраль', 3 => 'Март', 
            4 => 'Апрель', 5 => 'Май', 6 => 'Июнь', 
            7 => 'Июль', 8 => 'Август',9 => 'Сентябрь', 
            10 => 'Октябрь', 11 => 'Ноябрь', 
            12 => 'Декабрь'
        );
        // получаем название месяца из массива
        $name_month = $monthes[$month];

        $paginationTheme = 'bootstrap';

        $events = DB::table('article')->where('a_date', '>=', "$year-$month-1")->where('a_date', '<=', "$year-$month-30")->pluck('a_date')->toArray();;

        return view('PromPred', ['articles'=>$articles, 'year'=>$year, 'name_month'=>$name_month, 'month'=>$month, 'events'=>$events]);
    }
 
    public function mailto()
    {
        return view(view:'MailTo');
    }

    public function spp()
    {
        return view(view:'Spp');
    }

    public function spp2()
    {
        return view(view:'Spp2');
    }

    public function spp3()
    {
        return view(view:'Spp3');
    }

    public function spp4()
    {
        return view(view:'Spp4');
    }
    public function spp5()
    {
        return view(view:'Spp5');
    }
    public function spp6()
    {
        return view(view:'Spp6');
    }
    public function spp7()
    {
        return view(view:'Spp7');
    }
    public function spp8()
    {
        return view(view:'Spp8');
    }
    public function spp9()
    {
        return view(view:'Spp9');
    }
    //  контроллеры ссылок подвального уровня
    public function link11()
    {
        return view(view:'Spp1-links/link1');
    }
    public function link12()
    {
        return view(view:'Spp1-links/link2');
    }
            public function link111()
            {
                return view(view:'Spp1-links/Spp1-link1-links/link1');
            }
            public function link112()
            {
                return view(view:'Spp1-links/Spp1-link1-links/link2');
            }
            public function link113()
            {
                return view(view:'Spp1-links/Spp1-link1-links/link3');
            }

            public function link121()
            {
                return view(view:'Spp1-links/Spp1-link2-links/link1');
            }
            public function link122()
            {
                return view(view:'Spp1-links/Spp1-link2-links/link2');
            }
            public function link123()
            {
                return view(view:'Spp1-links/Spp1-link2-links/link3');
            }

            public function link1211()
            {
                return view(view:'Spp1-links/Spp1-link2-links/Spp1-link2-links-link1/link1');
            }

            public function link31()
            {
                return view(view:'Spp3-links/link1');
            }        
            public function link32()
            {
                return view(view:'Spp3-links/link2');
            }      
            public function link33()
            {
                return view(view:'Spp3-links/link3');
            }   
            public function link34()
            {
                return view(view:'Spp3-links/link4');
            }   
            public function link35()
            {
                return view(view:'Spp3-links/link5');
            } 
            public function link36()
            {
                return view(view:'Spp3-links/link6');
            } 
            public function link37()
            {
                return view(view:'Spp3-links/link7');
            } 
                public function link311()
                {
                    return view(view:'Spp3-links/Spp3-link1-links/link1');
                } 
                public function link312()
                {
                    return view(view:'Spp3-links/Spp3-link1-links/link2');
                } 
                public function link313()
                {
                    return view(view:'Spp3-links/Spp3-link1-links/link3');
                } 
                public function link314()
                {
                    return view(view:'Spp3-links/Spp3-link1-links/link4');
                } 
                public function link315()
                {
                    return view(view:'Spp3-links/Spp3-link1-links/link5');
                } 
                public function link316()
                {
                    return view(view:'Spp3-links/Spp3-link1-links/link6');
                } 
                public function link317()
                {
                    return view(view:'Spp3-links/Spp3-link1-links/link7');
                } 
                public function link318()
                {
                    return view(view:'Spp3-links/Spp3-link1-links/link8');
                }   
                public function link51()
                {
                    return view(view:'Spp5-links/link1');
                } 
                public function link52()
                {
                    return view(view:'Spp5-links/link2');
                } 
                public function link53()
                {
                    return view(view:'Spp5-links/link3');
                } 
                public function link54()
                {
                    return view(view:'Spp5-links/link4');
                } 
                public function link55()
                {
                    return view(view:'Spp5-links/link5');
                } 
                public function link56()
                {
                    return view(view:'Spp5-links/link6');
                } 
                
                public function link61()
                {
                    return view(view:'Spp6-links/link1');
                } 
                public function link62()
                {
                    return view(view:'Spp6-links/link2');
                } 
                public function link63()
                {
                    return view(view:'Spp6-links/link3');
                } 
                public function link64()
                {
                    return view(view:'Spp6-links/link4');
                } 
                public function link65()
                {
                    return view(view:'Spp6-links/link5');
                } 
                public function link66()
                {
                    return view(view:'Spp6-links/link6');
                } 
                
                public function link71()
                {
                    return view(view:'Spp7-links/link1');
                } 
                public function link72()
                {
                    return view(view:'Spp7-links/link2');
                } 
                public function link73()
                {
                    return view(view:'Spp7-links/link3');
                } 
                public function link74()
                {
                    return view(view:'Spp7-links/link4');
                } 
                public function link75()
                {
                    return view(view:'Spp7-links/link5');
                } 
                public function link76()
                {
                    return view(view:'Spp7-links/link6');
                } 
                public function link77()
                {
                    return view(view:'Spp7-links/link7');
                } 
                public function link78()
                {
                    return view(view:'Spp7-links/link8');
                } 
                public function link79()
                {
                    return view(view:'Spp7-links/link9');
                } 



                public function link91()
                {
                    return view(view:'Spp9-links/link1');
                } 
                public function link92()
                {
                    return view(view:'Spp9-links/link2');
                } 
                public function link93()
                {
                    return view(view:'Spp9-links/link3');
                } 
                public function link94()
                {
                    return view(view:'Spp9-links/link4');
                } 
                public function link95()
                {
                    return view(view:'Spp9-links/link5');
                } 
                public function link96()
                {
                    return view(view:'Spp9-links/link6');
                } 
                public function link97()
                {
                    return view(view:'Spp9-links/link7');
                } 
                public function link98()
                {
                    return view(view:'Spp9-links/link8');
                } 
                public function link99()
                {
                    return view(view:'Spp9-links/link9');
                } 
    public function test()
    {
        return view(view:'test');
    }
}
